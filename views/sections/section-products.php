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
      'name'  => 'RR Root Activator Solution',
      'badge' => '100ml',
      'price' => 'RM 150.00',
    ],
    [
      'name'  => 'RR Volumizing Shampoo',
      'badge' => '300ml',
      'price' => 'RM 90.00',
    ],
  ];
?>
<section class="section section-products bg-white sm:m-4 sm:rounded-lg js-component-products-carousel">
  <div class="container">
    <?php
    component('section-headline', [
      'topic'    => 'Hair Care Products',
      'title'    => 'Support your treatment with doctor-guided hair care.',
      'subtitle' => 'Explore selected RR Hair Clinic products for scalp care, hair growth support and ongoing maintenance.',
    ]);
    ?>

    <?php
    component('carousel-controls', [
      'hook'          => 'component-products',
      'slide_label'   => 'product',
      'wrapper_class' => 'mt-5 lg:-mt-12 relative',
    ]);
    ?>
  </div>

  <div class="relative -mt-6 sm:mt-10 -mx-6">
    <div class="container md:w-[calc(100%-3rem)]">
      <div id="component-products-track" class="grid grid-cols-1 gap-2 py-10 md:py-0 px-6 md:px-0 md:grid-cols-4 md:overflow-visible js-component-products-track"
           role="group" aria-label="Hair care products" tabindex="0">
        <?php foreach (array_slice($products, 0, 7) as $product) { ?>
        <article class="card group flex flex-col p-6 pb-4 overflow-hidden
                        hover:-translate-y-2 hover:shadow-xl hover:ring-2
                        hover:shadow-blue-300 hover:ring-blue-600">
          <div class="relative aspect-1/1 -m-4">
            <?php if (!empty($product['badge'])) { ?>
              <div class="absolute bottom-3 left-3 rounded-md bg-slate-950 px-2.5 py-1.5 text-xs text-white">
                <?= e($product['badge']); ?>
              </div>
            <?php } ?>
            <img src="assets/images/products/finas-blue-100-capsule.webp" class="rounded-lg" alt="<?= e($product['name']); ?>" loading="lazy" decoding="async" />
          </div>
          <div class="flex grow flex-col pt-7">
            <h3 class="font-medium text-base text-slate-950 tracking-tight transition duration-200 ease-out group-hover:text-blue-700"><?= e($product['name']); ?></h3>
            <div class="text-xs text-slate-500 mt-2 transition duration-200 ease-out group-hover:text-slate-600">For Hair Growth, Hair Loss Shampoo, Scalp Care</div>
            <div class="mt-4 flex flex-wrap items-center gap-x-2 gap-y-1 text-slate-900">
              <?php if (!empty($product['old_price'])) { ?>
                <span class="text-sm text-slate-400 line-through"><?= e($product['old_price']); ?></span>
              <?php } ?>
              <span><?= e($product['price']); ?></span>
            </div>
          </div>
        </article>
        <?php } ?>
        <a href="/shop/"
           class="card group flex flex-col items-center justify-center p-6 pb-4
                  overflow-hidden hover:-translate-y-2 hover:shadow-xl hover:ring-2
                  hover:shadow-blue-300 hover:ring-blue-600">
          <span class="font-medium text-lg text-slate-950 transition duration-200 ease-out group-hover:text-blue-700">Show All Products</span>
          <span class="mt-4 text-slate-900" aria-hidden="true">
            <?php svg('arrow-right-line', 'size-6'); ?>
          </span>
        </a>
      </div>
    </div>
    <div aria-hidden="true"
         class="pointer-events-none absolute -inset-y-3 left-0 z-10 w-6 bg-gradient-to-r from-white to-transparent md:w-15 lg:w-24 hidden sm:block"></div>
    <div aria-hidden="true"
         class="pointer-events-none absolute -inset-y-3 right-0 z-10 w-6 bg-gradient-to-l from-white to-transparent md:w-15 lg:w-24 hidden sm:block"></div>
  </div>

  <div class="container">
    <div class="mt-8 flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
      <div>
        <h3 class="font-medium text-2xl text-slate-950">Not sure which product suits you?</h3>
        <div class="text-sm text-slate-500 mt-2">Get a recommendation based on your scalp and hair condition today.</div>
      </div>
      <div class="flex flex-col gap-3 sm:flex-row md:shrink-0">
        <a href="/shop/" class="button bg-slate-900 text-white">Show All Products</a>
        <a href="#" class="button ring-1 ring-slate-300 text-slate-900">Get Consultation</a>
      </div>
    </div>
  </div>
</section>
