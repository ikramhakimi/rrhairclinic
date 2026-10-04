<?php

$page_title   = 'Free Hair Check | RR Hair Clinic';
$page_current = 'hair-check';

$questions = [
  [
    'title'   => 'What type of hair transplant are you interested in?',
    'hint'    => 'Select all that apply then press Continue.',
    'type'    => 'checkbox',
    'tips'    => 'The quiz is not a medical assessment but your responses may be shared with our team. We also uses your responses to personalize your experience.',
    'options' => [
      'Hair Transplant',
      'Eyebrow Transplant',
      'Beard Transplant',
    ],
  ],
  [
    'title'   => 'Where are you noticing changes?',
    'hint'    => 'Choose the area that best describes what you see.',
    'type'    => 'radio',
    'options' => [
      'Hairline or temples',
      'Crown or top of my head',
      'Thinning all over',
      'Small patches',
      'Not sure',
    ],
  ],
  [
    'title'   => 'When did you first notice these changes?',
    'hint'    => 'An estimate is fine.',
    'type'    => 'radio',
    'options' => [
      'Within the last 3 months',
      '3–12 months ago',
      'More than a year ago',
      'Not sure',
    ],
  ],
  [
    'title'   => 'What would you like to achieve?',
    'hint'    => 'Select all that apply.',
    'type'    => 'checkbox',
    'options' => [
      'Reduce hair shedding',
      'Improve hair fullness',
      'Improve my hairline',
      'Understand my treatment options',
    ],
  ],
  [
    'title'   => 'Have you tried anything for your hair concerns?',
    'hint'    => 'Select all that apply.',
    'type'    => 'checkbox',
    'options' => [
      'Haircare products',
      'Medication',
      'Clinic treatments',
      'Hair transplant',
      'Nothing yet',
    ],
  ],
  [
    'title'   => 'Does hair loss run in your family?',
    'hint'    => 'Choose one answer.',
    'type'    => 'radio',
    'options' => [
      'Yes',
      'No',
      'Not sure',
    ],
  ],
];
?>
<div class="min-h-dvh bg-slate-100 js-hair-check-root">
  <header class="sticky top-0 z-20 bg-transparent">
    <div class="mx-auto flex max-w-[750px] items-center gap-4 px-5 pt-5 sm:px-6">
      <button type="button" class="flex size-10 shrink-0 cursor-pointer items-center justify-center rounded-lg
        text-slate-700 hover:bg-slate-200 focus-visible:outline-2 focus-visible:outline-offset-2
        focus-visible:outline-slate-900 disabled:cursor-not-allowed disabled:opacity-40
        disabled:hover:bg-transparent ring-1 ring-slate-300 js-hair-check-back" aria-label="Back" disabled>
        <?php svg('arrow-left-line', 'size-5'); ?>
      </button>
      <div class="h-3 flex-1 overflow-hidden rounded-full bg-slate-300" role="progressbar"
        aria-label="Hair check progress" aria-valuemin="1" aria-valuemax="9" aria-valuenow="1">
        <div class="h-full w-[11.11%] rounded-full bg-indigo-600 transition-[width] duration-200
          motion-reduce:transition-none js-hair-check-progress-fill"></div>
      </div>
      <button type="button" class="flex size-10 shrink-0 cursor-pointer items-center justify-center rounded-lg
        text-slate-700 hover:bg-slate-200 focus-visible:outline-2 focus-visible:outline-offset-2
        focus-visible:outline-slate-900 ring-1 ring-slate-300 js-hair-check-exit" aria-label="Exit hair check"
        data-exit-url="<?= asset_url(''); ?>">
        <?php svg('close-line', 'size-5'); ?>
      </button>
    </div>
  </header>

  <div class="mx-auto max-w-[550px] px-5 pt-6 sm:px-6 hidden">
    <div class="flex items-center justify-between gap-4 text-sm text-slate-600">
      <span class="font-medium js-hair-check-step-label">Step 1 of 9</span>
      <button type="button" class="text-sm underline underline-offset-4 hover:text-slate-900 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-900 js-hair-check-start-over">Start over</button>
    </div>
  </div>

  <div class="mx-auto max-w-[550px] px-5 pb-16 pt-10 sm:px-6 sm:pt-10">
    <form class="js-hair-check-form" novalidate>
      <?php foreach ($questions as $question_index => $question): ?>
        <section class="js-hair-check-step" data-step="<?= $question_index === 0 ? 0 : $question_index + 1; ?>" data-question-index="<?= $question_index; ?>" <?= $question_index === 0 ? '' : 'hidden'; ?>>
          <fieldset aria-describedby="hair-check-hint-<?= $question_index; ?> hair-check-error-<?= $question_index; ?>">
            <legend class="w-full font-medium text-2xl leading-tight tracking-tight text-slate-900 sm:text-2xl sm:text-center js-hair-check-heading" tabindex="-1"><?= e($question['title']); ?></legend>
            <p id="hair-check-hint-<?= $question_index; ?>" class="mt-1 text-base text-slate-500 sm:text-center"><?= e($question['hint']); ?></p>
            <div class="mt-8 space-y-3">
              <?php foreach ($question['options'] as $option): ?>
                <label class="option group flex cursor-pointer items-center gap-4 px-5 py-4 text-base font-medium text-slate-800 hover:ring-slate-400 has-checked:bg-indigo-50 has-checked:ring-2 has-checked:ring-indigo-600 focus-within:outline-2 focus-within:outline-offset-2 focus-within:outline-indigo-400">
                  <input type="<?= $question['type']; ?>" name="answer_<?= $question_index; ?><?= $question['type'] === 'checkbox' ? '[]' : ''; ?>" value="<?= e($option); ?>" class="sr-only js-hair-check-answer">
                  <?php if ($question['type'] === 'checkbox'): ?>
                    <svg viewBox="0 0 20 20" class="size-5 shrink-0 text-slate-500 group-has-checked:text-indigo-600" aria-hidden="true" focusable="false">
                      <rect x="0.5" y="0.5" width="19" height="19" rx="3.5" fill="white" stroke="currentColor" />
                      <path d="m5.5 10 3 3 6-6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="opacity-0 group-has-checked:opacity-100" />
                    </svg>
                  <?php else: ?>
                    <svg viewBox="0 0 20 20" class="size-5 shrink-0 text-slate-500 group-has-checked:text-indigo-600" aria-hidden="true" focusable="false">
                      <circle cx="10" cy="10" r="9.5" fill="white" stroke="currentColor" />
                      <circle cx="10" cy="10" r="5" fill="currentColor" class="opacity-0 group-has-checked:opacity-100" />
                    </svg>
                  <?php endif; ?>
                  <span class="min-w-0 flex-1"><?= e($option); ?></span>
                </label>
              <?php endforeach; ?>
              <?php if (!empty($question['tips'])): ?>
                <div class="text-sm text-slate-500 p-4 py-3 sm:p-6 sm:py-5 mt-8 rounded-xl bg-slate-200"><?= $question['tips']; ?></div>
              <?php endif; ?>
            </div>
            <p id="hair-check-error-<?= $question_index; ?>" class="mt-4 font-medium text-red-700 js-hair-check-error" role="alert" tabindex="-1" hidden>Please select an answer to continue.</p>
          </fieldset>
          <?php if ($question['type'] === 'checkbox'): ?>
            <button type="submit" class="button-lg bg-gradient-to-br w-full from-purple-500 via-indigo-600 to-indigo-500
              text-slate-100 text-shadow-2xs text-shadow-indigo-900/50 ring-1 ring-inset ring-indigo-900/50
              inline-flex mt-7 transform duration-200 translate-y-0 hover:-translate-y-1 shadow-lg shadow-slate-400
              hover:shadow-3xl hover:shadow-slate-500 justify-center cursor-pointer focus-visible:outline-2
              focus-visible:outline-offset-2 focus-visible:outline-indigo-700 js-hair-check-continue">Continue</button>
          <?php endif; ?>
        </section>
        <?php if ($question_index === 0): ?>
          <section class="js-hair-check-step js-hair-check-presentation" data-step="1" hidden>
            <h1 class="w-full font-medium text-2xl leading-tight tracking-tight text-slate-900 sm:text-2xl sm:text-center js-hair-check-heading" tabindex="-1">
              Congrats! You're starting your transplant journey
            </h1>
            <div class="overflow-hidden relative sm:left-1/2 sm:w-[960px] sm:max-w-[calc(100vw-3rem)]
              sm:-translate-x-1/2 js-hair-check-presentation-viewport" role="region"
              aria-roledescription="carousel" aria-label="Transplant journey">
              <div class="absolute inset-y-0 left-1/2 w-0.5 -translate-x-1/2 bg-slate-600" aria-hidden="true"></div>
              <div class="absolute h-20 left-0 right-0 bg-gradient-to-b from-slate-100 via-slate-100 to-transparent top-0" aria-hidden="true"></div>
              <div class="absolute h-20 left-0 right-0 bg-gradient-to-t from-slate-100 via-slate-100 to-transparent bottom-0" aria-hidden="true"></div>

              <ol class="flex flex-col js-hair-check-presentation-track">
                <li class="flex-none js-hair-check-milestone" role="group" aria-roledescription="slide" aria-label="1 of 3" aria-hidden="false">
                  <div class="grid grid-cols-[minmax(0,1fr)_100px_minmax(0,1fr)] items-center gap-3 sm:gap-5 py-20">
                    <div class="aspect-square bg-slate-500 rounded-xl"></div>
                    <div class="relative flex items-center justify-center self-stretch">
                      <span class="relative whitespace-nowrap rounded-full bg-indigo-600 px-2 py-1 text-xs text-white sm:px-3">Now</span>
                    </div>
                    <div class="min-w-0 break-words">
                      <div class="max-w-[300px]">
                        <h2 class="text-3xl font-semibold text-slate-900 js-hair-check-milestone-heading" tabindex="-1">You start with a quick form</h2>
                        <p class="mt-3 text-slate-600">Tell us where you are, what is not working, and what you want to achieve.</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="flex-none js-hair-check-milestone" role="group" aria-roledescription="slide" aria-label="2 of 3" aria-hidden="true" inert>
                  <div class="grid grid-cols-[minmax(0,1fr)_100px_minmax(0,1fr)] items-center gap-3 sm:gap-5 py-20">
                    <div class="aspect-square bg-slate-500 rounded-xl"></div>
                    <div class="relative flex items-center justify-center self-stretch">
                      <span class="relative whitespace-nowrap rounded-full bg-indigo-600 px-2 py-1 text-xs text-white sm:px-3">Day 1</span>
                    </div>
                    <div class="min-w-0 break-words">
                      <div class="max-w-[300px]">
                        <h2 class="text-3xl font-semibold text-slate-900 js-hair-check-milestone-heading" tabindex="-1">You get your procedure</h2>
                        <p class="mt-3 text-slate-600">Arrive prepared and supported for your treatment with your chosen clinic.</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="flex-none js-hair-check-milestone" role="group" aria-roledescription="slide" aria-label="3 of 3" aria-hidden="true" inert>
                  <div class="grid grid-cols-[minmax(0,1fr)_100px_minmax(0,1fr)] items-center gap-3 sm:gap-5 py-20">
                    <div class="aspect-square bg-slate-500 rounded-xl"></div>
                    <div class="relative flex items-center justify-center self-stretch">
                      <span class="relative whitespace-nowrap rounded-full bg-indigo-600 px-2 py-1 text-xs text-white sm:px-3">Result</span>
                    </div>
                    <div class="min-w-0 break-words">
                      <div class="max-w-[300px]">
                        <h2 class="text-3xl font-semibold text-slate-900 js-hair-check-milestone-heading" tabindex="-1">You enjoy your new look</h2>
                        <p class="mt-3 text-slate-600">Now, let's find out if eyebrow transplant, beard transplant, and hair transplants are right for you.</p>
                      </div>
                    </div>
                  </div>
                </li>
              </ol>
            </div>
            <button type="button" class="button-lg bg-gradient-to-br w-full from-purple-500 via-indigo-600 to-indigo-500
              text-slate-100 text-shadow-2xs text-shadow-indigo-900/50 ring-1 ring-inset ring-indigo-900/50
              inline-flex mt-7 transform duration-200 translate-y-0 hover:-translate-y-1 shadow-lg shadow-slate-400
              hover:shadow-3xl hover:shadow-slate-500 justify-center cursor-pointer focus-visible:outline-2
              focus-visible:outline-offset-2 focus-visible:outline-indigo-700 js-hair-check-presentation-continue">Continue</button>
          </section>
        <?php endif; ?>
      <?php endforeach; ?>

      <section class="js-hair-check-step" data-step="7" hidden>
        <h1 class="text-3xl font-semibold leading-tight tracking-tight text-slate-900 sm:text-4xl js-hair-check-heading" tabindex="-1">Is there anything else you’d like us to know?</h1>
        <p class="mt-3 text-base text-slate-600">Add anything you think would help us understand your concerns. This is optional.</p>
        <label for="hair-check-notes" class="mt-8 block text-sm font-medium text-slate-700">Additional details</label>
        <textarea id="hair-check-notes" name="answer_6" maxlength="500" rows="6" class="mt-2 block w-full rounded-xl border border-slate-300 bg-white p-4 text-slate-900 focus:border-indigo-600 focus:outline-2 focus:outline-indigo-600 js-hair-check-notes"></textarea>
        <p class="mt-2 text-right text-xs text-slate-500 js-hair-check-count">0 / 500 characters</p>
        <button type="submit" class="button-lg bg-gradient-to-br w-full from-purple-500 via-indigo-600 to-indigo-500
          text-slate-100 text-shadow-2xs text-shadow-indigo-900/50 ring-1 ring-inset ring-indigo-900/50
          inline-flex mt-7 transform duration-200 translate-y-0 hover:-translate-y-1 shadow-lg shadow-slate-400
          hover:shadow-3xl hover:shadow-slate-500 justify-center cursor-pointer focus-visible:outline-2
          focus-visible:outline-offset-2 focus-visible:outline-indigo-700 js-hair-check-continue">Continue</button>
        <button type="button" class="mt-6 w-full rounded-full py-3 font-medium text-slate-700 underline underline-offset-4 hover:text-slate-900 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-900 js-hair-check-skip">Skip</button>
      </section>

      <section class="js-hair-check-step" data-step="8" hidden>
        <h1 class="text-3xl font-semibold leading-tight tracking-tight text-slate-900 sm:text-4xl js-hair-check-heading" tabindex="-1">Review your answers</h1>
        <p class="mt-3 text-base text-slate-600">Check your answers before finishing this preview. Your answers have not been sent.</p>
        <dl class="mt-8 space-y-3">
          <?php foreach ($questions as $question_index => $question): ?>
            <div class="card p-5">
              <div class="flex items-start justify-between gap-3">
                <dt class="font-semibold text-slate-900"><?= e($question['title']); ?></dt>
                <button type="button" class="shrink-0 font-medium text-indigo-700 underline underline-offset-4 hover:text-indigo-900 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-700 js-hair-check-edit" data-edit-step="<?= $question_index; ?>" aria-label="Edit: <?= e($question['title']); ?>">Edit</button>
              </div>
              <dd class="mt-2 whitespace-pre-line text-slate-700 js-hair-check-review-answer" data-answer-step="<?= $question_index; ?>"></dd>
            </div>
          <?php endforeach; ?>
          <div class="card p-5">
            <div class="flex items-start justify-between gap-3">
              <dt class="font-semibold text-slate-900">Is there anything else you’d like us to know?</dt>
              <button type="button" class="shrink-0 font-medium text-indigo-700 underline underline-offset-4 hover:text-indigo-900 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-700 js-hair-check-edit" data-edit-step="6" aria-label="Edit: additional details">Edit</button>
            </div>
            <dd class="mt-2 whitespace-pre-line break-words text-slate-700 js-hair-check-review-answer" data-answer-step="6"></dd>
          </div>
        </dl>
        <button type="submit" class="button-lg bg-gradient-to-br w-full from-purple-500 via-indigo-600 to-indigo-500
          text-slate-100 text-shadow-2xs text-shadow-indigo-900/50 ring-1 ring-inset ring-indigo-900/50
          inline-flex mt-7 transform duration-200 translate-y-0 hover:-translate-y-1 shadow-lg shadow-slate-400
          hover:shadow-3xl hover:shadow-slate-500 justify-center cursor-pointer focus-visible:outline-2
          focus-visible:outline-offset-2 focus-visible:outline-indigo-700 js-hair-check-continue">Finish preview</button>
      </section>
    </form>

    <section class="js-hair-check-complete" hidden>
      <h1 class="text-3xl font-semibold leading-tight tracking-tight text-slate-900 sm:text-4xl js-hair-check-heading" tabindex="-1">Your questionnaire preview is complete.</h1>
      <p class="mt-4 text-lg text-slate-700">This demo has not sent your answers to RR Hair Clinic.</p>
      <button type="button" class="button-lg bg-gradient-to-br w-full from-purple-500 via-indigo-600 to-indigo-500
        text-slate-100 text-shadow-2xs text-shadow-indigo-900/50 ring-1 ring-inset ring-indigo-900/50
        inline-flex mt-7 transform duration-200 translate-y-0 hover:-translate-y-1 shadow-lg shadow-slate-400
        hover:shadow-3xl hover:shadow-slate-500 justify-center cursor-pointer focus-visible:outline-2
        focus-visible:outline-offset-2 focus-visible:outline-indigo-700 js-hair-check-complete-start-over">Start over</button>
    </section>
  </div>
</div>
<script src="<?= asset_url('assets/js/hair-check.js'); ?>" defer></script>
