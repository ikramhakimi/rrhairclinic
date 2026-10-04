<?php

/**
 * Component: Navbar
 * Purpose: Provides responsive site navigation and a shared modal drawer.
 * Structure: Header, desktop links, drawer accordions, and contact action.
 * Data: None.
 */

?>
<header
  class="fixed inset-x-0 top-0 z-40 bg-slate-100 transition-transform duration-300 ease-out
    motion-reduce:transition-none lg:relative lg:translate-y-0 lg:transition-none js-site-mobile-navbar"
>
  <div class="flex h-18 items-center justify-between px-4 lg:h-auto lg:px-6 lg:py-4">
    <a href="<?= asset_url(''); ?>" class="text-xl tracking-tight text-slate-800 tracking-tight flex items-center">
      <span class="aspect-square w-9 flex items-center justify-center border border-slate-600 mr-2 font-bold">RR</span>
      <span class="font-medium">HairClinic</span>
    </a>

    <nav class="hidden items-center gap-6 text-sm lg:flex" aria-label="Main navigation">
        <details class="group relative">
          <summary class="flex cursor-pointer list-none items-center gap-0.5 text-sm font-medium text-slate-800">
            Hair Loss
            <?php svg('arrow-down-s-line', 'size-5 transition-transform group-open:rotate-180'); ?>
          </summary>
          <div class="absolute left-0 top-full z-10 mt-3 w-56 rounded-lg border border-slate-200 bg-white p-2 shadow-lg">
            <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">Male Pattern Baldness</a>
            <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">Female Hair Loss</a>
            <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">Receding Hairline</a>
            <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">Thinning Hair</a>
            <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">Crown Hair Loss</a>
            <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">Hair Shedding</a>
          </div>
        </details>

        <details class="group relative">
          <summary class="flex cursor-pointer list-none items-center gap-0.5 text-sm font-medium text-slate-800">
            Treatments
            <?php svg('arrow-down-s-line', 'size-5 transition-transform group-open:rotate-180'); ?>
          </summary>
          <div class="absolute left-0 top-full z-10 mt-3 w-56 rounded-lg border border-slate-200 bg-white p-2 shadow-lg">
            <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">Hair Transplant</a>
            <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">Sapphire FUE</a>
            <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">PRP Hair Treatment</a>
            <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">Hair Loss Medication</a>
            <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">Scalp Treatment</a>
            <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">Hair Regrowth Treatment</a>
          </div>
        </details>

        <details class="group relative">
          <summary class="flex cursor-pointer list-none items-center gap-0.5 text-sm font-medium text-slate-800">
            Products
            <?php svg('arrow-down-s-line', 'size-5 transition-transform group-open:rotate-180'); ?>
          </summary>
          <div class="absolute left-0 top-full z-10 mt-3 w-56 rounded-lg border border-slate-200 bg-white p-2 shadow-lg">
            <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">All Products</a>
            <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">Hair Growth</a>
            <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">Hair Loss Shampoo</a>
            <a href="#" class="block rounded-md px-3 py-2 text-sm text-slate-700 hover:bg-slate-100">Scalp Care</a>
          </div>
        </details>

        <a href="#" class="font-medium text-slate-800">Doctors</a>

    </nav>

    <div class="flex items-center gap-1 lg:gap-2">
          <a
            href="#"
            class="flex size-10 items-center justify-center rounded-full text-slate-950 transition-colors
              hover:bg-slate-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-950"
            aria-label="View cart"
          >
            <?php svg('shopping-bag-3-line', 'size-6'); ?>
          </a>

          <span class="h-6 w-px bg-slate-200 lg:h-8 lg:bg-gradient-to-b lg:from-transparent lg:via-slate-300 lg:to-transparent" aria-hidden="true"></span>

          <button
            type="button"
            class="flex size-10 cursor-pointer items-center justify-center rounded-full text-slate-950 transition-colors
              hover:bg-slate-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-950"
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
  class="pointer-events-none fixed inset-0 z-50 opacity-0 transition-opacity duration-300 motion-reduce:transition-none"
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
    class="absolute inset-y-0 right-0 flex w-[min(24rem,calc(100%-2rem))] translate-x-full flex-col overflow-hidden bg-white
      shadow-xl transition-transform duration-300 ease-out motion-reduce:transition-none js-component-navbar-drawer-panel"
    role="dialog"
    aria-modal="true"
    aria-label="Site navigation"
    tabindex="-1"
  >
    <div class="flex min-h-18 shrink-0 items-center justify-between gap-3 border-b border-slate-200 px-4
      pt-[env(safe-area-inset-top)]">
      <a href="<?= asset_url(''); ?>" class="flex items-center text-xl tracking-tight text-slate-800
          focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-950">
        <span class="aspect-square w-9 flex items-center justify-center border border-slate-600 mr-2 font-bold">RR</span>
        <span class="font-medium">HairClinic</span>
      </a>

      <button
        type="button"
        class="flex size-12 shrink-0 cursor-pointer items-center justify-center rounded-full text-slate-950 transition-colors
          hover:bg-slate-100 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-950"
        aria-label="Close menu"
        data-drawer-close
      >
        <?php svg('close-line', 'size-6'); ?>
      </button>
    </div>

    <nav class="min-h-0 flex-1 overflow-y-auto overscroll-contain px-4 py-2" aria-label="Main navigation">
      <details class="group border-b border-slate-200">
        <summary class="flex min-h-14 cursor-pointer list-none items-start justify-between gap-4 rounded-md px-2 py-4
          font-medium text-slate-950 transition-colors hover:bg-slate-100
          focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-950
          [&::-webkit-details-marker]:hidden">
          <span class="min-w-0">
            <span class="block">Hair Loss</span>
            <span class="mt-1 block text-sm font-normal leading-relaxed text-slate-600">
              Explore common causes and patterns of hair loss.
            </span>
          </span>
          <?php svg(
            'arrow-down-s-line',
            'mt-0.5 size-5 shrink-0 transition-transform group-open:rotate-180 motion-reduce:transition-none',
          ); ?>
        </summary>
        <div class="space-y-1 pb-4 pl-2">
          <a href="#" class="flex min-h-11 items-center rounded-md px-3 py-2 text-sm text-slate-700 transition-colors
              hover:bg-slate-100 hover:text-slate-950 focus-visible:outline-2
              focus-visible:outline-offset-2 focus-visible:outline-slate-950">
            Male Pattern Baldness
          </a>
          <a href="#" class="flex min-h-11 items-center rounded-md px-3 py-2 text-sm text-slate-700 transition-colors
              hover:bg-slate-100 hover:text-slate-950 focus-visible:outline-2
              focus-visible:outline-offset-2 focus-visible:outline-slate-950">
            Female Hair Loss
          </a>
          <a href="#" class="flex min-h-11 items-center rounded-md px-3 py-2 text-sm text-slate-700 transition-colors
              hover:bg-slate-100 hover:text-slate-950 focus-visible:outline-2
              focus-visible:outline-offset-2 focus-visible:outline-slate-950">
            Receding Hairline
          </a>
          <a href="#" class="flex min-h-11 items-center rounded-md px-3 py-2 text-sm text-slate-700 transition-colors
              hover:bg-slate-100 hover:text-slate-950 focus-visible:outline-2
              focus-visible:outline-offset-2 focus-visible:outline-slate-950">
            Thinning Hair
          </a>
          <a href="#" class="flex min-h-11 items-center rounded-md px-3 py-2 text-sm text-slate-700 transition-colors
              hover:bg-slate-100 hover:text-slate-950 focus-visible:outline-2
              focus-visible:outline-offset-2 focus-visible:outline-slate-950">
            Crown Hair Loss
          </a>
          <a href="#" class="flex min-h-11 items-center rounded-md px-3 py-2 text-sm text-slate-700 transition-colors
              hover:bg-slate-100 hover:text-slate-950 focus-visible:outline-2
              focus-visible:outline-offset-2 focus-visible:outline-slate-950">
            Hair Shedding
          </a>
        </div>
      </details>

      <details class="group border-b border-slate-200">
        <summary class="flex min-h-14 cursor-pointer list-none items-start justify-between gap-4 rounded-md px-2 py-4
          font-medium text-slate-950 transition-colors hover:bg-slate-100
          focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-950
          [&::-webkit-details-marker]:hidden">
          <span class="min-w-0">
            <span class="block">Treatments</span>
            <span class="mt-1 block text-sm font-normal leading-relaxed text-slate-600">
              Find out about our hair and scalp treatment options.
            </span>
          </span>
          <?php svg(
            'arrow-down-s-line',
            'mt-0.5 size-5 shrink-0 transition-transform group-open:rotate-180 motion-reduce:transition-none',
          ); ?>
        </summary>
        <div class="space-y-1 pb-4 pl-2">
          <a href="#" class="flex min-h-11 items-center rounded-md px-3 py-2 text-sm text-slate-700 transition-colors
              hover:bg-slate-100 hover:text-slate-950 focus-visible:outline-2
              focus-visible:outline-offset-2 focus-visible:outline-slate-950">
            Hair Transplant
          </a>
          <a href="#" class="flex min-h-11 items-center rounded-md px-3 py-2 text-sm text-slate-700 transition-colors
              hover:bg-slate-100 hover:text-slate-950 focus-visible:outline-2
              focus-visible:outline-offset-2 focus-visible:outline-slate-950">
            Sapphire FUE
          </a>
          <a href="#" class="flex min-h-11 items-center rounded-md px-3 py-2 text-sm text-slate-700 transition-colors
              hover:bg-slate-100 hover:text-slate-950 focus-visible:outline-2
              focus-visible:outline-offset-2 focus-visible:outline-slate-950">
            PRP Hair Treatment
          </a>
          <a href="#" class="flex min-h-11 items-center rounded-md px-3 py-2 text-sm text-slate-700 transition-colors
              hover:bg-slate-100 hover:text-slate-950 focus-visible:outline-2
              focus-visible:outline-offset-2 focus-visible:outline-slate-950">
            Hair Loss Medication
          </a>
          <a href="#" class="flex min-h-11 items-center rounded-md px-3 py-2 text-sm text-slate-700 transition-colors
              hover:bg-slate-100 hover:text-slate-950 focus-visible:outline-2
              focus-visible:outline-offset-2 focus-visible:outline-slate-950">
            Scalp Treatment
          </a>
          <a href="#" class="flex min-h-11 items-center rounded-md px-3 py-2 text-sm text-slate-700 transition-colors
              hover:bg-slate-100 hover:text-slate-950 focus-visible:outline-2
              focus-visible:outline-offset-2 focus-visible:outline-slate-950">
            Hair Regrowth Treatment
          </a>
        </div>
      </details>

      <details class="group border-b border-slate-200">
        <summary class="flex min-h-14 cursor-pointer list-none items-start justify-between gap-4 rounded-md px-2 py-4
          font-medium text-slate-950 transition-colors hover:bg-slate-100
          focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-950
          [&::-webkit-details-marker]:hidden">
          <span class="min-w-0">
            <span class="block">Products</span>
            <span class="mt-1 block text-sm font-normal leading-relaxed text-slate-600">
              Browse products for hair growth and scalp care.
            </span>
          </span>
          <?php svg(
            'arrow-down-s-line',
            'mt-0.5 size-5 shrink-0 transition-transform group-open:rotate-180 motion-reduce:transition-none',
          ); ?>
        </summary>
        <div class="space-y-1 pb-4 pl-2">
          <a href="#" class="flex min-h-11 items-center rounded-md px-3 py-2 text-sm text-slate-700 transition-colors
              hover:bg-slate-100 hover:text-slate-950 focus-visible:outline-2
              focus-visible:outline-offset-2 focus-visible:outline-slate-950">
            All Products
          </a>
          <a href="#" class="flex min-h-11 items-center rounded-md px-3 py-2 text-sm text-slate-700 transition-colors
              hover:bg-slate-100 hover:text-slate-950 focus-visible:outline-2
              focus-visible:outline-offset-2 focus-visible:outline-slate-950">
            Hair Growth
          </a>
          <a href="#" class="flex min-h-11 items-center rounded-md px-3 py-2 text-sm text-slate-700 transition-colors
              hover:bg-slate-100 hover:text-slate-950 focus-visible:outline-2
              focus-visible:outline-offset-2 focus-visible:outline-slate-950">
            Hair Loss Shampoo
          </a>
          <a href="#" class="flex min-h-11 items-center rounded-md px-3 py-2 text-sm text-slate-700 transition-colors
              hover:bg-slate-100 hover:text-slate-950 focus-visible:outline-2
              focus-visible:outline-offset-2 focus-visible:outline-slate-950">
            Scalp Care
          </a>
        </div>
      </details>

      <a href="#" class="flex min-h-14 items-center border-b border-slate-200 px-2 font-medium text-slate-950
          transition-colors hover:bg-slate-100 focus-visible:outline-2
          focus-visible:outline-offset-2 focus-visible:outline-slate-950">
        Our Doctors
      </a>
      <a href="#" class="flex min-h-14 items-center border-b border-slate-200 px-2 font-medium text-slate-950
          transition-colors hover:bg-slate-100 focus-visible:outline-2
          focus-visible:outline-offset-2 focus-visible:outline-slate-950">
        Case Studies
      </a>
      <a href="#" class="flex min-h-14 items-center border-b border-slate-200 px-2 font-medium text-slate-950
          transition-colors hover:bg-slate-100 focus-visible:outline-2
          focus-visible:outline-offset-2 focus-visible:outline-slate-950">
        About
      </a>
    </nav>

    <div class="shrink-0 border-t border-slate-200 p-4 pb-[max(1rem,env(safe-area-inset-bottom))]">
      <a href="#" class="button flex w-full items-center justify-center gap-2 bg-slate-950 text-white transition-colors
          hover:bg-slate-800 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-950">
        Contact Us
        <?php svg('arrow-right-up-line', 'size-5'); ?>
      </a>
    </div>
  </aside>
</div>
