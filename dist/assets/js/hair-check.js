// Hair check preview: .js-hair-check-* hooks. Answers and presentation slides stay in memory only.
(() => {
  const root = document.querySelector('.js-hair-check-root');
  if (!root) {
    return;
  }

  const form = root.querySelector('.js-hair-check-form');
  const steps = Array.from(root.querySelectorAll('.js-hair-check-step'));
  const questionSteps = Array.from(root.querySelectorAll('[data-question-index]'));
  const presentationStep = 1;
  const presentationTitle = steps[presentationStep].querySelector('.js-hair-check-heading');
  const presentationViewport = steps[presentationStep].querySelector('.js-hair-check-presentation-viewport');
  const presentationTrack = steps[presentationStep].querySelector('.js-hair-check-presentation-track');
  const presentationContinue = steps[presentationStep].querySelector('.js-hair-check-presentation-continue');
  const milestones = Array.from(steps[presentationStep].querySelectorAll('.js-hair-check-milestone'));
  const complete = root.querySelector('.js-hair-check-complete');
  const back = root.querySelector('.js-hair-check-back');
  const exit = root.querySelector('.js-hair-check-exit');
  const startOver = root.querySelector('.js-hair-check-start-over');
  const stepLabel = root.querySelector('.js-hair-check-step-label');
  const progress = root.querySelector('[role="progressbar"]');
  const progressFill = root.querySelector('.js-hair-check-progress-fill');
  const notes = root.querySelector('.js-hair-check-notes');
  const count = root.querySelector('.js-hair-check-count');
  const totalSteps = steps.length;
  const notesStep = totalSteps - 2;
  const reviewStep = totalSteps - 1;
  const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
  let currentStep = 0;
  let currentMilestone = 0;
  let slideHeight = 0;
  let returnToReview = false;
  let historyEpoch = 0;

  const hasAnswers = () => Boolean(form.querySelector('input:checked') || notes.value.trim());

  const updatePresentationTitle = () => {
    const selected = Array.from(questionSteps[0].querySelectorAll('input:checked'), (input) => input.value);
    const procedures = ['Eyebrow Transplant', 'Beard Transplant', 'Hair Transplant']
      .filter((procedure) => selected.includes(procedure))
      .map((procedure) => procedure.toLowerCase());
    const last = procedures.pop();
    if (!last) {
      presentationTitle.textContent = "Congrats! You're starting your transplant journey";
      return;
    }

    const list = procedures.length > 1 ? `${procedures.join(', ')}, and ${last}`
      : [procedures[0], last].filter(Boolean).join(' and ');

    presentationTitle.textContent = `Congrats! You're starting your ${list} journey`;
  };

  const updateReview = () => {
    root.querySelectorAll('.js-hair-check-review-answer').forEach((answer) => {
      const step = Number(answer.dataset.answerStep);
      if (step === questionSteps.length) {
        answer.textContent = notes.value.trim() || 'Not provided';
        return;
      }

      const selected = Array.from(questionSteps[step].querySelectorAll('input:checked'));
      answer.textContent = selected.map((input) => input.value).join('\n');
    });
  };

  const measurePresentation = () => {
    milestones.forEach((stage) => {
      stage.style.height = '';
    });
    slideHeight = Math.max(...milestones.map((stage) => stage.offsetHeight));
    milestones.forEach((stage) => {
      stage.style.height = `${slideHeight}px`;
    });
    presentationViewport.style.height = `${slideHeight}px`;
  };

  const showStep = (step, focus = true, milestone = 0) => {
    const previousStep = currentStep;
    currentStep = step;
    steps.forEach((panel, index) => {
      panel.hidden = index !== step;
    });
    complete.hidden = step !== totalSteps;
    form.hidden = step === totalSteps;
    back.disabled = step === 0 && !returnToReview;

    const displayStep = Math.min(step + 1, totalSteps);
    stepLabel.textContent = step === totalSteps ? 'Preview complete' : `Step ${displayStep} of ${totalSteps}`;
    progress.setAttribute('aria-valuenow', String(displayStep));
    progressFill.style.width = `${(displayStep / totalSteps) * 100}%`;

    if (step === presentationStep) {
      updatePresentationTitle();
      const animate = previousStep === presentationStep && milestone !== currentMilestone && !reducedMotion.matches;
      if (!animate) {
        measurePresentation();
      }
      presentationTrack.style.transition = animate ? 'transform 450ms ease-in-out' : 'none';
      presentationTrack.style.transform = `translate3d(0, ${-milestone * slideHeight}px, 0)`;
      currentMilestone = milestone;
      milestones.forEach((stage, index) => {
        const active = index === milestone;
        stage.inert = !active;
        stage.setAttribute('aria-hidden', String(!active));
      });
    }

    if (step === reviewStep) {
      updateReview();
    }

    if (focus) {
      if (step === presentationStep) {
        const stage = milestones[milestone];
        window.scrollTo(0, 0);
        (milestone === 0 ? presentationTitle : stage.querySelector('.js-hair-check-milestone-heading'))
          .focus({ preventScroll: true });
        return;
      }

      window.scrollTo(0, 0);
      (step === totalSteps ? complete : steps[step]).querySelector('.js-hair-check-heading').focus({ preventScroll: true });
    }
  };

  const goTo = (step, editing = false, milestone = 0) => {
    history.pushState({ hairCheckStep: step, returnToReview: editing, milestone, historyEpoch }, '', location.href);
    returnToReview = editing;
    showStep(step, true, milestone);
  };

  const clearError = (step) => {
    const error = steps[step].querySelector('.js-hair-check-error');
    if (error) {
      error.hidden = true;
      steps[step].querySelector('fieldset').removeAttribute('aria-invalid');
    }
  };

  const validStep = (step) => {
    if (step === presentationStep || step >= notesStep) {
      return true;
    }
    if (steps[step].querySelector('input:checked')) {
      clearError(step);
      return true;
    }

    const error = steps[step].querySelector('.js-hair-check-error');
    error.hidden = false;
    steps[step].querySelector('fieldset').setAttribute('aria-invalid', 'true');
    error.focus();
    return false;
  };

  const finishPreview = () => {
    goTo(totalSteps);
  };

  form.addEventListener('submit', (event) => {
    event.preventDefault();
    if (!validStep(currentStep)) {
      return;
    }
    if (currentStep === reviewStep) {
      finishPreview();
      return;
    }
    goTo(returnToReview ? reviewStep : currentStep + 1);
  });

  presentationContinue.addEventListener('click', () => {
    if (currentMilestone === milestones.length - 1) {
      goTo(presentationStep + 1);
      return;
    }
    goTo(presentationStep, false, currentMilestone + 1);
  });

  window.addEventListener('resize', () => {
    if (currentStep !== presentationStep) {
      return;
    }
    measurePresentation();
    presentationTrack.style.transition = 'none';
    presentationTrack.style.transform = `translate3d(0, ${-currentMilestone * slideHeight}px, 0)`;
  });

  root.addEventListener('change', (event) => {
    const input = event.target;
    if (!input.classList.contains('js-hair-check-answer')) {
      return;
    }
    if (currentStep === 5 && input.type === 'checkbox' && input.checked) {
      steps[5].querySelectorAll('input').forEach((other) => {
        if (other !== input && (input.value === 'Nothing yet' || other.value === 'Nothing yet')) {
          other.checked = false;
        }
      });
    }
    clearError(currentStep);
    if (input.type === 'radio') {
      goTo(returnToReview ? reviewStep : currentStep + 1);
    }
  });

  // Clicking an already selected radio does not fire change, but should still advance.
  root.addEventListener('click', (event) => {
    const input = event.target;
    if (!input.classList.contains('js-hair-check-answer') || input.type !== 'radio') {
      return;
    }

    const clickedStep = currentStep;
    queueMicrotask(() => {
      if (currentStep === clickedStep && steps[clickedStep].contains(input) && input.checked) {
        goTo(returnToReview ? reviewStep : clickedStep + 1);
      }
    });
  });

  notes.addEventListener('input', () => {
    count.textContent = `${notes.value.length} / 500 characters`;
  });

  root.querySelector('.js-hair-check-skip').addEventListener('click', () => {
    notes.value = '';
    count.textContent = '0 / 500 characters';
    goTo(reviewStep);
  });

  root.querySelectorAll('.js-hair-check-edit').forEach((button) => {
    button.addEventListener('click', () => {
      const question = Number(button.dataset.editStep);
      goTo(question === 0 ? 0 : question + 1, true);
    });
  });

  back.addEventListener('click', () => history.back());
  window.addEventListener('popstate', (event) => {
    if (event.state?.historyEpoch !== historyEpoch) {
      history.replaceState({ hairCheckStep: 0, returnToReview: false, historyEpoch }, '', location.href);
      returnToReview = false;
      showStep(0);
      return;
    }
    if (Number.isInteger(event.state.hairCheckStep)) {
      returnToReview = Boolean(event.state.returnToReview);
      showStep(event.state.hairCheckStep, true, event.state.milestone ?? 0);
    }
  });

  exit.addEventListener('click', () => {
    if (!hasAnswers() || window.confirm('Exit the hair check? Your answers will be lost.')) {
      window.location.assign(exit.dataset.exitUrl);
    }
  });

  const reset = () => {
    if (!window.confirm('Start over? Your answers will be cleared.')) {
      return;
    }
    form.reset();
    count.textContent = '0 / 500 characters';
    steps.forEach((_, index) => clearError(index));
    returnToReview = false;
    historyEpoch += 1;
    history.replaceState({ hairCheckStep: 0, returnToReview: false, historyEpoch }, '', location.href);
    showStep(0);
  };

  startOver.addEventListener('click', reset);
  root.querySelector('.js-hair-check-complete-start-over').addEventListener('click', reset);
  history.replaceState({ hairCheckStep: 0, returnToReview: false, historyEpoch }, '', location.href);
  showStep(0, false);
})();
