<section class="section section-hero bg-slate-700 min-h-dvh sm:min-h-[800px] flex flex-col rounded-md sm:rounded-none relative" style="--hero-image: url(<?= asset_url('assets/images/hero.webp'); ?>); --hero-mobile-image: url(<?= asset_url('assets/images/hero-mobile.webp'); ?>);">
  <div class="bg-gradient-to-b from-slate-100 via-slate-100 to-transparent absolute w-full h-40 sm:h-70 top-0 left-0"></div>
  <div class="bg-gradient-to-t from-slate-100 to-transparent absolute w-full h-40 bottom-0 left-0"></div>
  
  <div class="hero-badges pointer-events-none absolute inset-x-0 top-[58%] z-10 container hidden sm:blocks">
    <div class="absolute left-0 top-0 flex max-w-60 items-center gap-3 rounded-lg border border-white/40 bg-white/20 pl-3 pr-4 py-2 shadow-lg shadow-slate-900/10 backdrop-blur-xs">
      <div class="flex size-6 shrink-0 items-center justify-center rounded-full bg-gradient-to-br from-green-500 to-teal-700 text-slate-700">
        <?php // svg('stethoscope-line', 'size-5'); ?>
      </div>
      <div>
        <div class="text-sm font-semibold text-slate-800">ISO 2026 Certified</div>
      </div>
    </div>
    <div class="absolute right-0 top-16 flex max-w-60 items-center gap-3 rounded-2xl border border-white/70 bg-white/65 px-4 py-3 shadow-lg shadow-slate-900/10 backdrop-blur-md">
      <div class="flex size-10 shrink-0 items-center justify-center rounded-full bg-white/70 text-slate-700">
        <?php svg('time-line', 'size-5'); ?>
      </div>
      <div>
        <div class="text-sm font-semibold text-slate-800">Within 24 hours</div>
        <div class="text-xs text-slate-600">Assessment response</div>
      </div>
    </div>
  </div>

  <div class="container relative flex flex-1 flex-col justify-end sm:justify-start gap-8">
    <div class="hero-headline md:text-center mt-10">
      <div class="headline-title text-3xl sm:text-5xl tracking-tight  text-transparent bg-clip-text bg-gradient-to-br from-slate-700 via-slate-800 to-slate-950 leading-9 sm:leading-15">
        Better hair starts with the right plan.
      </div>
      <h1 class="headline-subtitle text-sm leading-6 sm:leading-7 sm:text-xl mt-3 sm:mt-2 max-w-2xl mx-auto">
        Personalised, doctor-led treatment for thinning hair, receding hairlines and advanced hair loss.
      </h1>
      <a href="<?= asset_url('hair-check'); ?>" class="button-lg bg-gradient-to-br w-full sm:w-auto from-purple-500 via-indigo-600 to-indigo-500 text-white text-shadow-2xs text-shadow-indigo-900/50 ring-1 ring-inset ring-indigo-900/50 inline-flex mt-7 transform duration-200 translate-y-0 hover:-translate-y-1 shadow-lg shadow-slate-400 hover:shadow-3xl hover:shadow-slate-500">
        <div class="flex-split w-full font-normal text-lg">
          <div>Start Free Hair Check</div>
          <div class="size-7 -m-1 -mr-4 ml-5 rounded-full flex items-center justify-center bg-white text-blue-600">
            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="size-5"><path d="M16.0037 9.41421L7.39712 18.0208L5.98291 16.6066L14.5895 8H7.00373V6H18.0037V17H16.0037V9.41421Z"></path></svg>          </div>
        </div>
      </a>
      <div class="text-xs text-slate-500 mt-5 hidden sm:block">A short questionnaire to help us understand your concerns. <br>Preview only · Answers are not sent</div>
      <div class="sm:hidden mb-6 mt-5">
          <?php
          component('google-review-rating', [
            'rating'        => 4.5,
            'wrapper_class' => 'mb-3 sm:flex-col sm:items-start sm:gap-0',
          ]);
          ?>
          <div class="trust-avatars flex gap-0">
            <div class="aspect-1/1 size-10 rounded-full border-2 border-white shadow-md -mx-1"><img src="<?= asset_url('assets/images/customer/5.webp'); ?>" class="size-full rounded-full object-cover" /></div>
            <div class="aspect-1/1 size-10 rounded-full border-2 border-white shadow-md -mx-1"><img src="<?= asset_url('assets/images/customer/6.webp'); ?>" class="size-full rounded-full object-cover" /></div>
            <div class="aspect-1/1 size-10 rounded-full border-2 border-white shadow-md -mx-1"><img src="<?= asset_url('assets/images/customer/7.webp'); ?>" class="size-full rounded-full object-cover" /></div>
            <div class="aspect-1/1 size-10 rounded-full border-2 border-white shadow-md -mx-1"><img src="<?= asset_url('assets/images/customer/8.webp'); ?>" class="size-full rounded-full object-cover" /></div>
            <div class="aspect-1/1 size-10 rounded-full border-2 border-white shadow-md -mx-1"><img src="<?= asset_url('assets/images/customer/9.webp'); ?>" class="size-full rounded-full object-cover" /></div>
          </div>
        </div>
    </div>
  </div>
  <div class="hero-supplements absolute bottom-6 left-0 right-0 hidden sm:block">
    <div class="container flex justify-between items-end">
      <div class="w-80">
        <?php
        component('google-review-rating', [
          'rating'        => 5,
          'wrapper_class' => 'mb-3 sm:flex-col sm:items-start sm:gap-0',
        ]);
        ?>
        <div class="trust-avatars flex gap-0">
          <div class="aspect-1/1 size-10 rounded-full border-2 border-white shadow-md -mx-1"><img src="<?= asset_url('assets/images/customer/5.webp'); ?>" class="size-full rounded-full object-cover" /></div>
          <div class="aspect-1/1 size-10 rounded-full border-2 border-white shadow-md -mx-1"><img src="<?= asset_url('assets/images/customer/6.webp'); ?>" class="size-full rounded-full object-cover" /></div>
          <div class="aspect-1/1 size-10 rounded-full border-2 border-white shadow-md -mx-1"><img src="<?= asset_url('assets/images/customer/7.webp'); ?>" class="size-full rounded-full object-cover" /></div>
          <div class="aspect-1/1 size-10 rounded-full border-2 border-white shadow-md -mx-1"><img src="<?= asset_url('assets/images/customer/8.webp'); ?>" class="size-full rounded-full object-cover" /></div>
          <div class="aspect-1/1 size-10 rounded-full border-2 border-white shadow-md -mx-1"><img src="<?= asset_url('assets/images/customer/9.webp'); ?>" class="size-full rounded-full object-cover" /></div>
        </div>
      </div>
      <div class="w-110">
        <div class="text-xs uppercase mb-3 text-right text-slate-500">As Featured On</div>
        <div class="grid grid-cols-3 gap-2 flex items-center">
          <div class="bg-slate-900/20 rounded-lg">
            <img src="assets/images/featured/astro-awani.webp" class="block rounded-lg">
          </div>
          <div class="bg-slate-900/20 rounded-lg">
            <img src="assets/images/featured/mlstudiosmy.webp" class="block rounded-lg">
          </div>
          <div class="bg-slate-900/20 rounded-lg">
            <img src="assets/images/featured/maskulinmag.webp" class="block rounded-lg">
          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>
