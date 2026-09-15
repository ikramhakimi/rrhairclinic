 <?php

  $products = [
    [
      'name'  => 'Finas Blue 100 Capsules',
      'price' => 'RM 270.00',
    ],
    [
      'name'  => 'Finas Blue 30 Capsules',
      'price' => 'RM 90.00',
    ],
    [
      'name'  => 'Finox Pro 100 Capsules',
      'badge' => 'Dutasteride',
      'price' => 'RM 400.00',
    ],
    [
      'name'  => 'Finox Pro 30 Capsules',
      'badge' => 'Dutasteride',
      'price' => 'RM 150.00',
    ],
    [
      'name'  => 'Finox Red 100 Capsules',
      'price' => 'RM 330.00',
    ],
    [
      'name'  => 'Finox Red 30 Capsules',
      'price' => 'RM 110.00',
    ],
    [
      'name'      => 'Finox+ Grey 100 Capsules',
      'old_price' => 'RM 375.00',
      'price'     => 'RM 360.00',
    ],
    [
      'name'  => 'Finox+ Grey 30 Capsules',
      'price' => 'RM 125.00',
    ],
    [
      'name'      => 'Root Activator Deluxe Kit',
      'old_price' => 'RM 605.00',
      'price'     => 'RM 570.00',
    ],
    [
      'name'      => 'Root Activator Pro Deluxe Kit',
      'badge'     => 'Dutasteride',
      'old_price' => 'RM 650.00',
      'price'     => 'RM 615.00',
    ],
    [
      'name'      => 'Root Activator Pro Starter Kit',
      'badge'     => 'Dutasteride',
      'old_price' => 'RM 400.00',
      'price'     => 'RM 360.00',
    ],
    [
      'name'      => 'Root Activator Starter Kit',
      'old_price' => 'RM 365.00',
      'price'     => 'RM 340.00',
    ],
    [
      'name'      => 'RR Duo Signature',
      'old_price' => 'RM 240.00',
      'price'     => 'RM 220.00',
    ],
    [
      'name'  => 'RR Root Activator Solution (100ml)',
      'price' => 'RM 150.00',
    ],
    [
      'name'  => 'RR Volumizing Shampoo (300ml)',
      'price' => 'RM 90.00',
    ],
  ];
?>
<section class="section section-products py-25 px-6 md:px-10 overflow-hidden js-products-carousel">
  <div class="container">
    <div class="section-headline max-w-2xl">
      <div class="headline-topic mb-5 text-xs text-slate-500 uppercase">Hair Care Products</div>
      <h2 class="headline-title text-4xl text-slate-950">
        Support your treatment with doctor-guided hair care.
      </h2>
      <div class="headline-subtitle mt-5">
        Explore selected RR Hair Clinic products for scalp care, hair growth support and ongoing maintenance.
      </div>
    </div>

    <div class="relative -mt-15 js-products-controls" hidden>
      <div class="flex items-center justify-end gap-3">
        <button type="button" class="flex size-14 items-center justify-center rounded-full bg-white text-slate-900 ring-1 ring-slate-300 cursor-pointer js-products-prev"
                aria-label="Previous product slide" aria-controls="products-track">
          <span aria-hidden="true"><?php svg('arrow-left-line', 'size-7'); ?></span>
        </button>
        <button type="button" class="flex size-14 items-center justify-center rounded-full bg-white text-slate-900 ring-1 ring-slate-300 cursor-pointer js-products-next"
                aria-label="Next product slide" aria-controls="products-track">
          <span aria-hidden="true"><?php svg('arrow-right-line', 'size-7'); ?></span>
        </button>
      </div>
      <p class="sr-only js-products-status" role="status" aria-live="polite" aria-atomic="true"></p>
    </div>
  </div>

  <div class="relative mt-15 -mx-6 md:-mx-10">
    <div class="container w-[calc(100%-3rem)] md:w-[calc(100%-5rem)]">
      <div id="products-track" class="grid grid-cols-1 gap-3 md:grid-cols-3 js-products-track"
           role="group" aria-roledescription="carousel" aria-label="Hair care products">
        <?php foreach($products as $product) { ?>
        <article class="card flex flex-col bg-white ring-1 ring-slate-200 p-6 pb-5 rounded-xl">
          <div class="relative aspect-1/1 -m-3">
            <?php if (!empty($product['badge'])) { ?>
              <div class="absolute bottom-3 left-3 rounded-md bg-slate-950 px-2.5 py-1.5 text-xs text-white">
                <?= e($product['badge']); ?>
              </div>
            <?php } ?>
            <img src="assets/images/products/finas-blue-100-capsule.png" class="rounded-lg" />
          </div>
          <div class="flex grow flex-col pt-6">
            <h3 class="text-slate-950"><?= e($product['name']); ?></h3>
            <div class="text-xs text-slate-500 mt-1">For Hair Growth, Hair Loss Shampoo, Scalp Care</div>
            <div class="mt-4 flex flex-wrap items-center gap-x-2 gap-y-1 text-slate-900">
              <?php if (!empty($product['old_price'])) { ?>
                <span class="text-sm text-slate-400 line-through"><?= e($product['old_price']); ?></span>
              <?php } ?>
              <span><?= e($product['price']); ?></span>
            </div>
          </div>
        </article>
        <?php } ?>
      </div>
    </div>
    <div aria-hidden="true"
         class="pointer-events-none absolute -inset-y-3 left-0 z-10 w-6 bg-gradient-to-r from-slate-100 to-transparent md:w-10 lg:w-24"></div>
    <div aria-hidden="true"
         class="pointer-events-none absolute -inset-y-3 right-0 z-10 w-6 bg-gradient-to-l from-slate-100 to-transparent md:w-10 lg:w-24"></div>
  </div>

  <div class="container">
    <div class="mt-15 flex flex-col gap-4 border-t border-slate-200 pt-10 md:flex-row md:items-center md:justify-between">
      <div>
        <h3 class="text-2xl text-slate-950">Not sure which product suits you?</h3>
        <div class="text-sm text-slate-500 mt-2">Get a recommendation based on your scalp and hair condition.</div>
      </div>
      <div class="flex flex-col gap-3 sm:flex-row md:shrink-0">
        <a href="/shop/" class="button bg-slate-900 text-white">Show All Products</a>
        <a href="#" class="button ring-1 ring-slate-300 text-slate-900">Get Consultation</a>
      </div>
    </div>
  </div>
</section>
