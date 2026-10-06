// Consultation invitation: .js-whatsapp-consultation-* hooks; dismissal lasts for this tab's session.
(() => {
  const panel = document.querySelector('.js-whatsapp-consultation-panel');
  const dismiss = panel?.querySelector('.js-whatsapp-consultation-dismiss');
  const link = document.querySelector('.js-whatsapp-consultation-link');
  const storageKey = 'rr-whatsapp-consultation-dismissed';

  if (!panel || !dismiss || !link) {
    return;
  }

  try {
    panel.hidden = sessionStorage.getItem(storageKey) === '1';
  } catch {
    panel.hidden = false;
  }

  const dismissInvitation = () => {
    const restoreFocus = panel.contains(document.activeElement);
    panel.hidden = true;

    if (restoreFocus) {
      link.focus();
    }

    try {
      sessionStorage.setItem(storageKey, '1');
    } catch {
      // Dismissal still works on this page when browser storage is unavailable.
    }
  };

  dismiss.addEventListener('click', dismissInvitation);
  panel.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
      event.stopPropagation();
      dismissInvitation();
    }
  });
})();

// Desktop navbar dropdowns: hover on the Main navigation details; native details handles keyboard and touch.
(() => {
  const hoverQuery = window.matchMedia('(min-width: 1024px) and (hover: hover)');
  const dropdowns = document.querySelectorAll('.js-site-mobile-navbar nav[aria-label="Main navigation"] > details');

  dropdowns.forEach((dropdown) => {
    let closeTimer;
    const menu = dropdown.querySelector('div');

    if (!menu) {
      return;
    }

    menu.classList.add('translate-y-1', 'opacity-0', 'transition',
      'duration-150', 'ease-out', 'motion-reduce:transition-none');

    const openDropdown = () => {
      window.clearTimeout(closeTimer);
      dropdown.open = true;
      menu.getBoundingClientRect();
      requestAnimationFrame(() => {
        menu.classList.remove('translate-y-1', 'opacity-0');
        menu.classList.add('translate-y-0');
      });
    };

    const closeDropdown = () => {
      menu.classList.remove('translate-y-0');
      menu.classList.add('translate-y-1', 'opacity-0');
      window.clearTimeout(closeTimer);
      closeTimer = window.setTimeout(() => {
        dropdown.open = false;
      }, window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 0 : 150);
    };

    dropdown.addEventListener('mouseenter', () => {
      if (!hoverQuery.matches) {
        return;
      }

      dropdowns.forEach((other) => {
        if (other !== dropdown) {
          other.querySelector('div')?.classList.remove('translate-y-0');
          other.querySelector('div')?.classList.add('translate-y-1', 'opacity-0');
          other.open = false;
        }
      });
      openDropdown();
    });

    dropdown.addEventListener('mouseleave', () => {
      if (!hoverQuery.matches) {
        return;
      }

      closeTimer = window.setTimeout(() => {
        if (!menu.contains(document.activeElement)) {
          closeDropdown();
        }
      }, 150);
    });

    dropdown.querySelector('summary')?.addEventListener('click', (event) => {
      event.preventDefault();

      if (hoverQuery.matches && dropdown.open && event.detail > 0) {
        return;
      }

      if (dropdown.open && !menu.classList.contains('opacity-0')) {
        closeDropdown();
        return;
      }

      openDropdown();
    });
  });
})();

// Navbar drawer: data-drawer-open/close and .js-component-navbar-drawer-panel.
// Keeps focus inside the modal and restores background interaction and scroll state on close.
(() => {
  const drawerTriggers = document.querySelectorAll('[data-drawer-open]');
  const drawerClosers = document.querySelectorAll('[data-drawer-close]');
  const backgroundElements = new Map();
  let activeDrawer = null;
  let activeTrigger = null;
  let wasScrollLocked = false;

  const setBackgroundInert = (drawer) => {
    let branch = drawer;

    while (branch.parentElement) {
      for (const sibling of branch.parentElement.children) {
        if (sibling === branch || !(sibling instanceof HTMLElement)) {
          continue;
        }

        backgroundElements.set(sibling, sibling.inert);
        sibling.inert = true;
      }

      branch = branch.parentElement;
      if (branch === document.body) {
        break;
      }
    }
  };

  const setDrawerState = (drawer, isOpen) => {
    const panel = drawer.querySelector('.js-component-navbar-drawer-panel');
    const backdrop = drawer.querySelector('.js-component-navbar-drawer-backdrop');

    drawer.classList.toggle('pointer-events-none', !isOpen);
    drawer.setAttribute('aria-hidden', isOpen ? 'false' : 'true');
    drawer.inert = !isOpen;

    if (backdrop) {
      backdrop.classList.toggle('opacity-0', !isOpen);
      backdrop.classList.toggle('opacity-100', isOpen);
    }

    if (panel) {
      panel.classList.toggle('translate-x-full', !isOpen);
      panel.classList.toggle('translate-x-0', isOpen);
    }
  };

  const closeDrawer = () => {
    if (!activeDrawer) {
      return;
    }

    backgroundElements.forEach((wasInert, element) => {
      element.inert = wasInert;
    });
    backgroundElements.clear();
    document.body.classList.toggle('overflow-hidden', wasScrollLocked);

    if (activeTrigger?.isConnected) {
      activeTrigger.setAttribute('aria-expanded', 'false');
      activeTrigger.focus({ preventScroll: true });
    }

    setDrawerState(activeDrawer, false);
    activeDrawer = null;
    activeTrigger = null;
  };

  drawerTriggers.forEach((trigger) => {
    trigger.addEventListener('click', () => {
      const drawer = document.getElementById(trigger.dataset.drawerOpen);
      const panel = drawer?.querySelector('.js-component-navbar-drawer-panel');

      if (!panel || activeDrawer === drawer) {
        return;
      }

      closeDrawer();
      activeDrawer = drawer;
      activeTrigger = trigger;
      wasScrollLocked = document.body.classList.contains('overflow-hidden');
      document.body.classList.add('overflow-hidden');
      trigger.setAttribute('aria-expanded', 'true');
      setDrawerState(drawer, true);
      (panel.querySelector('[data-drawer-close]') || panel).focus({ preventScroll: true });
      setBackgroundInert(drawer);
    });
  });

  drawerClosers.forEach((closer) => {
    closer.addEventListener('click', closeDrawer);
  });

  document.querySelectorAll('.js-component-navbar-drawer-panel').forEach((panel) => {
    panel.addEventListener('click', (event) => {
      if (event.target.closest('a[href]') && !event.ctrlKey && !event.metaKey && !event.shiftKey) {
        closeDrawer();
      }
    });
  });

  document.addEventListener('keydown', (event) => {
    if (!activeDrawer) {
      return;
    }

    if (event.key === 'Escape') {
      event.preventDefault();
      closeDrawer();
      return;
    }

    if (event.key !== 'Tab') {
      return;
    }

    const panel = activeDrawer.querySelector('.js-component-navbar-drawer-panel');
    const focusable = Array.from(panel.querySelectorAll(
      'a[href], button, summary, input, select, textarea, [tabindex]',
    )).filter((element) => element.tabIndex >= 0 && !element.disabled
      && !element.closest('[inert]') && element.getClientRects().length > 0);
    const first = focusable[0];
    const last = focusable[focusable.length - 1];
    const focused = document.activeElement;

    if (!first) {
      event.preventDefault();
      panel.focus({ preventScroll: true });
      return;
    }

    if (!focusable.includes(focused) || (event.shiftKey ? focused === first : focused === last)) {
      event.preventDefault();
      (event.shiftKey ? last : first).focus({ preventScroll: true });
    }
  });

  let lastScrollY = Math.max(0, window.scrollY);
  let scrollDirection = 0;
  let directionStartY = lastScrollY;
  const navActions = document.querySelectorAll('.js-site-nav-action');
  const mobileNavbar = document.querySelector('.js-site-mobile-navbar');
  const whatsappButton = document.querySelector('.js-whatsapp-consultation-link');
  const hero = document.querySelector('.section-hero');
  const desktopHoverQuery = window.matchMedia('(min-width: 1024px) and (hover: hover)');
  let whatsappHiddenByScroll = false;
  let isHoveringWhatsappCorner = false;

  const updateWhatsappVisibility = () => {
    if (!whatsappButton) {
      return;
    }

    const isFocused = whatsappButton.contains(document.activeElement);
    const isHidden = whatsappHiddenByScroll && !isHoveringWhatsappCorner && !isFocused;
    whatsappButton.classList.toggle('translate-y-[calc(100%+1.5rem)]', isHidden);
    whatsappButton.classList.toggle('pointer-events-none', isHidden);
  };

  // The fixed .js-site-mobile-navbar hides downward and returns upward or when keyboard-focused.
  mobileNavbar?.addEventListener('focusin', () => {
    mobileNavbar.classList.remove('-translate-y-full');
  });
  whatsappButton?.addEventListener('focusin', () => {
    updateWhatsappVisibility();
  });

  // Reveal the .js-whatsapp-consultation-link when a desktop cursor enters the bottom-right corner.
  window.addEventListener('pointermove', (event) => {
    const isInCorner = desktopHoverQuery.matches
      && event.clientX >= window.innerWidth - 120
      && event.clientY >= window.innerHeight - 120;

    if (isInCorner !== isHoveringWhatsappCorner) {
      isHoveringWhatsappCorner = isInCorner;
      updateWhatsappVisibility();
    }
  }, { passive: true });

  document.addEventListener('pointerleave', () => {
    isHoveringWhatsappCorner = false;
    updateWhatsappVisibility();
  });

  desktopHoverQuery.addEventListener('change', () => {
    isHoveringWhatsappCorner = false;
    updateWhatsappVisibility();
  });

  const updateNavActions = () => {
    const currentScrollY = Math.max(0, window.scrollY);
    if (currentScrollY === lastScrollY) {
      return;
    }

    const currentDirection = Math.sign(currentScrollY - lastScrollY);
    if (currentDirection !== scrollDirection) {
      scrollDirection = currentDirection;
      directionStartY = lastScrollY;
    }

    lastScrollY = currentScrollY;

    const isPastHero = hero && hero.getBoundingClientRect().bottom <= 0;
    if (hero && !isPastHero) {
      whatsappHiddenByScroll = false;
      updateWhatsappVisibility();
    }

    if (currentScrollY > 80 && Math.abs(currentScrollY - directionStartY) < 16) {
      return;
    }

    const isScrollingDown = currentDirection > 0 && currentScrollY > 80;

    mobileNavbar?.classList.toggle(
      '-translate-y-full',
      isScrollingDown && !activeDrawer && !mobileNavbar.contains(document.activeElement),
    );

    if (hero && whatsappButton) {
      whatsappHiddenByScroll = isPastHero && isScrollingDown;
      updateWhatsappVisibility();
    }

    navActions.forEach((action) => {
      action.classList.toggle('opacity-0', isScrollingDown);
      action.classList.toggle('pointer-events-none', isScrollingDown);
      action.classList.toggle('translate-y-2', isScrollingDown);
    });
  };

  updateNavActions();
  window.addEventListener('scroll', updateNavActions, { passive: true });
})();

// Hair loss, case study and product cards scroll on mobile; tablet/desktop share finite carousel controls.
// Required hooks: .js-hair-loss-*, .js-case-study-* or .js-component-products-*
// (carousel, track, controls, prev, next, status).
(() => {
  const carousels = document.querySelectorAll(
    '.js-hair-loss-carousel, .js-case-study-carousel, .js-component-products-carousel',
  );

  carousels.forEach((carousel) => {
    const isCaseStudy = carousel.classList.contains('js-case-study-carousel');
    const isProducts = carousel.classList.contains('js-component-products-carousel');
    const hook = isProducts ? 'js-component-products' : (isCaseStudy ? 'js-case-study' : 'js-hair-loss');
    const cardLabel = isProducts ? 'product card' : (isCaseStudy ? 'result card' : 'hair loss issue');
    const track = carousel.querySelector(`.${hook}-track`);
    const controls = carousel.querySelector(`.${hook}-controls`);
    const previous = carousel.querySelector(`.${hook}-prev`);
    const next = carousel.querySelector(`.${hook}-next`);
    const status = carousel.querySelector(`.${hook}-status`);

    if (!track || !controls || !previous || !next) {
      return;
    }

    const cards = Array.from(track.children);

    if (cards.length === 0) {
      return;
    }

    const tablet = window.matchMedia('(min-width: 48rem)');
    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    let position = 0;
    let wasTablet = tablet.matches;

    track.dataset.carouselReady = '';

    const pageSize = () => tablet.matches ? (isCaseStudy ? 3 : 4) : 1;
    const maxPosition = () => Math.max(0, cards.length - pageSize());

    const updateButton = (button, disabled) => {
      button.disabled = disabled;
      button.classList.toggle('opacity-40', disabled);
      button.classList.toggle('cursor-not-allowed', disabled);
      button.classList.toggle('cursor-pointer', !disabled);
    };

    const updateAccessibility = () => {
      const last = position + pageSize();

      cards.forEach((card, index) => {
        const active = !tablet.matches || (index >= position && index < last);
        card.inert = !active;
        card.setAttribute('aria-hidden', String(!active));
      });

      controls.hidden = !tablet.matches || cards.length <= pageSize();
      if (!tablet.matches) {
        track.removeAttribute('aria-roledescription');
        return;
      }

      track.setAttribute('aria-roledescription', 'carousel');
      updateButton(previous, position === 0);
      updateButton(next, position === maxPosition());

      if (status) {
        status.textContent = `Showing ${cardLabel} ${position + 1} to ${Math.min(last, cards.length)} of ${cards.length}`;
      }
    };

    const render = (animate) => {
      cards.forEach((card, index) => {
        card.dataset.carouselActive = String(!tablet.matches || (index >= position && index < position + pageSize()));
      });

      if (!tablet.matches) {
        track.style.transition = 'none';
        track.style.transform = 'none';
        return;
      }

      const gap = parseFloat(getComputedStyle(track).columnGap) || 0;
      const step = cards[0].getBoundingClientRect().width + gap;
      track.style.transition = animate && !reducedMotion.matches ? '' : 'none';
      track.style.transform = `translateX(${-position * step}px)`;
    };

    const move = (direction) => {
      const nextPosition = Math.max(0, Math.min(position + direction * pageSize(), maxPosition()));

      if (nextPosition === position) {
        return;
      }

      position = nextPosition;
      render(true);
      updateAccessibility();
    };

    previous.addEventListener('click', () => move(-1));
    next.addEventListener('click', () => move(1));

    new ResizeObserver(() => {
      if (wasTablet !== tablet.matches) {
        position = 0;
        track.scrollLeft = 0;
        wasTablet = tablet.matches;
      }

      position = Math.min(position, maxPosition());
      render(false);
      updateAccessibility();
    }).observe(track);

    render(false);
    updateAccessibility();
  });
})();

// Infinite patient stories: rotate existing cards so wrapping keeps the same slide direction.
// Required hooks: .js-component-testimonial-{carousel,track,controls,prev,next,status}.
(() => {
  document.querySelectorAll('.js-component-testimonial-carousel').forEach((carousel) => {
    const track = carousel.querySelector('.js-component-testimonial-track');
    const controls = carousel.querySelector('.js-component-testimonial-controls');
    const previous = carousel.querySelector('.js-component-testimonial-prev');
    const next = carousel.querySelector('.js-component-testimonial-next');
    const status = carousel.querySelector('.js-component-testimonial-status');

    if (!track || !controls || !previous || !next || !track.children.length) {
      return;
    }

    const cards = Array.from(track.children);
    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    let direction = 0;
    let finishTimer;
    let touchStart = null;

    track.dataset.testimonialReady = '';
    track.setAttribute('aria-roledescription', 'carousel');
    controls.hidden = cards.length < 2;

    const updateAccessibility = () => {
      const active = track.firstElementChild;
      cards.forEach((card) => {
        card.inert = card !== active;
        card.setAttribute('aria-hidden', String(card !== active));
      });
      if (status) {
        status.textContent = `Showing testimonial ${cards.indexOf(active) + 1} of ${cards.length}`;
      }
    };

    const finish = () => {
      window.clearTimeout(finishTimer);
      track.style.transition = 'none';
      if (direction === 1) {
        track.append(track.firstElementChild);
      }
      track.style.transform = 'translateX(0)';
      direction = 0;
      updateAccessibility();
    };

    const move = (stepDirection) => {
      if (direction || cards.length < 2) {
        return;
      }

      direction = stepDirection;
      const gap = parseFloat(getComputedStyle(track).columnGap) || 0;
      const step = track.firstElementChild.getBoundingClientRect().width + gap;
      track.style.transition = 'none';
      if (direction === -1) {
        track.prepend(track.lastElementChild);
        track.style.transform = `translateX(${-step}px)`;
      }

      if (reducedMotion.matches) {
        finish();
        return;
      }

      // Commit the starting position before animating the reordered track.
      track.getBoundingClientRect();
      track.style.transition = '';
      track.style.transform = direction === 1 ? `translateX(${-step}px)` : 'translateX(0)';
      finishTimer = window.setTimeout(finish, 450);
    };

    previous.addEventListener('click', () => move(-1));
    next.addEventListener('click', () => move(1));
    track.addEventListener('transitionend', (event) => {
      if (event.target === track && event.propertyName === 'transform' && direction) {
        finish();
      }
    });
    track.addEventListener('keydown', (event) => {
      if (event.key === 'ArrowLeft' || event.key === 'ArrowRight') {
        event.preventDefault();
        move(event.key === 'ArrowLeft' ? -1 : 1);
      }
    });
    track.addEventListener('touchstart', (event) => {
      touchStart = event.touches.length === 1 ? event.touches[0] : null;
    }, { passive: true });
    track.addEventListener('touchend', (event) => {
      if (!touchStart) {
        return;
      }
      const deltaX = event.changedTouches[0].clientX - touchStart.clientX;
      const deltaY = event.changedTouches[0].clientY - touchStart.clientY;
      touchStart = null;
      if (Math.abs(deltaX) > 40 && Math.abs(deltaX) > Math.abs(deltaY)) {
        move(deltaX < 0 ? 1 : -1);
      }
    }, { passive: true });
    track.addEventListener('touchcancel', () => { touchStart = null; }, { passive: true });
    new ResizeObserver(finish).observe(track);
    updateAccessibility();
  });
})();

// FAQ accordion: animate the native details element while preserving its keyboard behaviour.
// Required hooks: .js-component-faq-{item,icon,content}.
(() => {
  const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

  document.querySelectorAll('.js-component-faq-item').forEach((item) => {
    const summary = item.querySelector('summary');
    const icon = item.querySelector('.js-component-faq-icon');
    const content = item.querySelector('.js-component-faq-content');

    if (!summary || !icon || !content) {
      return;
    }

    let isExpanded = item.open;
    let itemAnimation = null;
    let contentAnimation = null;

    icon.classList.toggle('rotate-45', isExpanded);

    const clearItemStyles = () => {
      item.style.removeProperty('overflow');
      itemAnimation = null;
    };

    const setExpanded = (expand) => {
      icon.classList.toggle('rotate-45', expand);

      if (reducedMotion.matches) {
        item.open = expand;
        return;
      }

      itemAnimation?.cancel();
      contentAnimation?.cancel();

      const startHeight = item.offsetHeight;
      if (expand) {
        item.open = true;
      } else {
        item.open = false;
      }
      const endHeight = item.offsetHeight;
      if (!expand) {
        item.open = true;
      }

      item.style.overflow = 'hidden';
      itemAnimation = item.animate(
        { height: [`${startHeight}px`, `${endHeight}px`] },
        { duration: 220, easing: 'cubic-bezier(0.22, 1, 0.36, 1)' },
      );
      contentAnimation = content.animate(
        {
          opacity: expand ? [0, 1] : [1, 0],
          transform: expand ? ['translateY(-4px)', 'translateY(0)'] : ['translateY(0)', 'translateY(-2px)'],
        },
        { duration: expand ? 220 : 150, easing: 'ease-out' },
      );

      itemAnimation.addEventListener('finish', () => {
        item.open = expand;
        clearItemStyles();
      }, { once: true });
      itemAnimation.addEventListener('cancel', clearItemStyles, { once: true });
    };

    summary.addEventListener('click', (event) => {
      event.preventDefault();
      isExpanded = !isExpanded;
      setExpanded(isExpanded);
    });
  });
})();
