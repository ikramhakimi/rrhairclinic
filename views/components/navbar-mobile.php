<?php

/**
 * Component: Mobile navbar
 * Purpose: Provides mobile access to the cart and primary site navigation.
 * Structure: Header actions with a right-side modal navigation drawer.
 * Data: None.
 */

?>
<header class="border-b border-slate-200 bg-white lg:hidden">
  <div class="flex h-18 items-center justify-between px-4">
    <a href="<?= asset_url(''); ?>" aria-label="RR Hair Clinic home">
      <img
        src="<?= asset_url('assets/images/logo-rrhairclinic.svg'); ?>"
        alt="RR Hair Clinic"
        class="h-10 w-auto"
        width="256"
        height="72"
      >
    </a>

    <div class="flex items-center gap-1">
      <a
        href="#"
        class="flex size-12 items-center justify-center rounded-full text-slate-950 transition-colors
          hover:bg-slate-100 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-950"
        aria-label="View cart"
      >
        <?php svg('shopping-bag-3-line', 'size-6'); ?>
      </a>

      <span class="h-6 w-px bg-slate-200" aria-hidden="true"></span>

      <button
        type="button"
        class="flex size-12 cursor-pointer items-center justify-center rounded-full text-slate-950 transition-colors
          hover:bg-slate-100 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-950"
        aria-label="Open menu"
        aria-controls="site-mobile-menu"
        aria-expanded="false"
        data-drawer-open="site-mobile-menu"
      >
        <?php svg('menu-line', 'size-6'); ?>
      </button>
    </div>
  </div>
</header>

<div
  id="site-mobile-menu"
  class="pointer-events-none fixed inset-0 z-50 opacity-0 transition-opacity duration-200 md:hidden"
  aria-hidden="true"
  inert
>
  <button
    type="button"
    class="absolute inset-0 cursor-pointer bg-slate-950/50"
    aria-label="Close menu"
    tabindex="-1"
    data-drawer-close
  ></button>

  <aside
    class="absolute inset-y-0 right-0 flex w-[min(22rem,calc(100%-3rem))] translate-x-full flex-col bg-white
      shadow-xl transition-transform duration-300 ease-out motion-reduce:transition-none js-site-drawer-panel"
    role="dialog"
    aria-modal="true"
    aria-label="Mobile navigation"
  >
    <div class="flex h-18 shrink-0 items-center justify-between border-b border-slate-200 px-4">
      <a href="<?= asset_url(''); ?>" aria-label="RR Hair Clinic home">
        <img
          src="<?= asset_url('assets/images/logo-rrhairclinic.svg'); ?>"
          alt="RR Hair Clinic"
          class="h-10 w-auto"
          width="256"
          height="72"
        >
      </a>

      <button
        type="button"
        class="flex size-12 cursor-pointer items-center justify-center rounded-full text-slate-950 transition-colors
          hover:bg-slate-100 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-950"
        aria-label="Close menu"
        data-drawer-close
      >
        <?php svg('close-line', 'size-6'); ?>
      </button>
    </div>

    <nav class="flex-1 overflow-y-auto px-4 py-5" aria-label="Main navigation">
      <details class="group border-b border-slate-200">
        <summary class="flex min-h-14 cursor-pointer list-none items-center justify-between font-medium text-slate-950">
          Hair Loss
          <?php svg('arrow-down-s-line', 'size-5 transition-transform group-open:rotate-180'); ?>
        </summary>
        <div class="space-y-1 pb-4 pl-4">
          <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">
            Male Pattern Baldness
          </a>
          <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">
            Female Hair Loss
          </a>
          <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">
            Receding Hairline
          </a>
          <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">
            Thinning Hair
          </a>
          <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">
            Crown Hair Loss
          </a>
          <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">
            Hair Shedding
          </a>
        </div>
      </details>

      <details class="group border-b border-slate-200">
        <summary class="flex min-h-14 cursor-pointer list-none items-center justify-between font-medium text-slate-950">
          Treatments
          <?php svg('arrow-down-s-line', 'size-5 transition-transform group-open:rotate-180'); ?>
        </summary>
        <div class="space-y-1 pb-4 pl-4">
          <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">
            Hair Transplant
          </a>
          <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">
            Sapphire FUE
          </a>
          <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">
            PRP Hair Treatment
          </a>
          <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">
            Hair Loss Medication
          </a>
          <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">
            Scalp Treatment
          </a>
          <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">
            Hair Regrowth Treatment
          </a>
        </div>
      </details>

      <details class="group border-b border-slate-200">
        <summary class="flex min-h-14 cursor-pointer list-none items-center justify-between font-medium text-slate-950">
          Products
          <?php svg('arrow-down-s-line', 'size-5 transition-transform group-open:rotate-180'); ?>
        </summary>
        <div class="space-y-1 pb-4 pl-4">
          <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">
            All Products
          </a>
          <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">
            Hair Growth
          </a>
          <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">
            Hair Loss Shampoo
          </a>
          <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">
            Scalp Care
          </a>
        </div>
      </details>

      <a href="#" class="flex min-h-14 items-center border-b border-slate-200 font-medium text-slate-950">
        Our Doctors
      </a>
      <a href="#" class="flex min-h-14 items-center border-b border-slate-200 font-medium text-slate-950">
        Case Studies
      </a>
      <a href="#" class="flex min-h-14 items-center border-b border-slate-200 font-medium text-slate-950">
        About
      </a>
    </nav>

    <div class="shrink-0 border-t border-slate-200 p-4">
      <a href="#" class="button w-full bg-slate-950 text-white">
        Contact Us
        <?php svg('arrow-right-up-line', 'size-5'); ?>
      </a>
    </div>
  </aside>
</div>
