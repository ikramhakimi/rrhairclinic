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
