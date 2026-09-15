(() => {
  const drawerTriggers = document.querySelectorAll('[data-drawer-open]');
  const drawerClosers = document.querySelectorAll('[data-drawer-close]');
  let activeDrawer = null;
  let activeTrigger = null;

  const setDrawerState = (drawer, isOpen) => {
    const panel = drawer.querySelector('.js-site-drawer-panel');

    drawer.classList.toggle('pointer-events-none', !isOpen);
    drawer.classList.toggle('opacity-0', !isOpen);
    drawer.classList.toggle('opacity-100', isOpen);
    drawer.setAttribute('aria-hidden', isOpen ? 'false' : 'true');
    drawer.inert = !isOpen;

    if (panel) {
      panel.classList.toggle('translate-x-full', !isOpen);
      panel.classList.toggle('translate-x-0', isOpen);
    }

    document.body.classList.toggle('overflow-hidden', isOpen);
  };

  const closeDrawer = () => {
    if (!activeDrawer) {
      return;
    }

    setDrawerState(activeDrawer, false);

    if (activeTrigger) {
      activeTrigger.setAttribute('aria-expanded', 'false');
      activeTrigger.focus();
    }

    activeDrawer = null;
    activeTrigger = null;
  };

  drawerTriggers.forEach((trigger) => {
    trigger.addEventListener('click', () => {
      const drawer = document.getElementById(trigger.dataset.drawerOpen);

      if (!drawer) {
        return;
      }

      activeDrawer = drawer;
      activeTrigger = trigger;
      trigger.setAttribute('aria-expanded', 'true');
      setDrawerState(drawer, true);

      const closeButton = drawer.querySelector('.js-site-drawer-panel [data-drawer-close]');
      if (closeButton) {
        closeButton.focus();
      }
    });
  });

  drawerClosers.forEach((closer) => {
    closer.addEventListener('click', closeDrawer);
  });

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
      closeDrawer();
    }
  });

  let lastScrollY = window.scrollY;
  const navActions = document.querySelectorAll('.js-site-nav-action');

  const updateNavActions = () => {
    const currentScrollY = window.scrollY;
    const isScrollingDown = currentScrollY > lastScrollY && currentScrollY > 80;

    navActions.forEach((action) => {
      action.classList.toggle('opacity-0', isScrollingDown);
      action.classList.toggle('pointer-events-none', isScrollingDown);
      action.classList.toggle('translate-y-2', isScrollingDown);
    });

    lastScrollY = currentScrollY;
  };

  updateNavActions();
  window.addEventListener('scroll', updateNavActions, { passive: true });
})();

// Hair loss cards scroll on mobile; tablet and desktop use finite .js-hair-loss-* controls.
(() => {
  document.querySelectorAll('.js-hair-loss-carousel').forEach((carousel) => {
    const track = carousel.querySelector('.js-hair-loss-track');
    const controls = carousel.querySelector('.js-hair-loss-controls');
    const previous = carousel.querySelector('.js-hair-loss-prev');
    const next = carousel.querySelector('.js-hair-loss-next');
    const status = carousel.querySelector('.js-hair-loss-status');

    if (!track || !controls || !previous || !next) {
      return;
    }

    const cards = Array.from(track.children);

    if (cards.length === 0) {
      return;
    }

    const tablet = window.matchMedia('(min-width: 48rem)');
    const desktop = window.matchMedia('(min-width: 64rem)');
    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    let position = 0;
    let wasTablet = tablet.matches;

    track.dataset.carouselReady = '';

    const pageSize = () => tablet.matches ? 4 : 1;
    const pageStep = () => desktop.matches ? 2 : pageSize();
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
        status.textContent = `Showing hair loss issue ${position + 1} to ${Math.min(last, cards.length)} of ${cards.length}`;
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
      const nextPosition = Math.max(0, Math.min(position + direction * pageStep(), maxPosition()));

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

// Products carousel: finite carousel with start/end stops and .js-products-* hooks.
(() => {
  document.querySelectorAll('.js-products-carousel').forEach((carousel) => {
    const track = carousel.querySelector('.js-products-track');
    const controls = carousel.querySelector('.js-products-controls');
    const previous = carousel.querySelector('.js-products-prev');
    const next = carousel.querySelector('.js-products-next');
    const status = carousel.querySelector('.js-products-status');

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

    const pageSize = () => tablet.matches ? 3 : 1;
    const maxPosition = () => Math.max(0, cards.length - pageSize());

    const updateButton = (button, disabled) => {
      button.disabled = disabled;
      button.classList.toggle('opacity-40', disabled);
      button.classList.toggle('cursor-not-allowed', disabled);
      button.classList.toggle('cursor-pointer', !disabled);
    };

    const updateAccessibility = () => {
      const first = position;
      const last = first + pageSize();

      cards.forEach((card, index) => {
        const active = index >= first && index < last;
        card.inert = !active;
        card.setAttribute('aria-hidden', String(!active));
        card.style.opacity = active ? '' : '0.4';
      });

      updateButton(previous, position === 0);
      updateButton(next, position === maxPosition());

      if (status) {
        status.textContent = `Showing product ${position + 1} to ${Math.min(position + pageSize(), cards.length)} of ${cards.length}`;
      }
    };

    const render = (animate) => {
      track.style.gridTemplateColumns = 'none';
      track.style.gridAutoFlow = 'column';
      track.style.transition = animate && !reducedMotion.matches ? 'transform 400ms ease' : 'none';

      const gap = parseFloat(getComputedStyle(track).columnGap) || 0;
      track.style.gridAutoColumns = tablet.matches ? `calc((100% - ${gap * 2}px) / 3)` : '100%';

      const step = cards[0].getBoundingClientRect().width + gap;
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
      position = Math.min(position, maxPosition());
      render(false);
      updateAccessibility();
    }).observe(track);

    if (cards.length <= pageSize()) {
      controls.hidden = true;
      return;
    }

    controls.hidden = false;
    render(false);
    updateAccessibility();
  });
})();
