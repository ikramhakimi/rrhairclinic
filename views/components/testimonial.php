<?php

/**
 * Component: Testimonial
 * Purpose: Displays patient stories alongside a review summary in white styling.
 * Structure: Infinite carousel on all screen sizes with custom circular controls.
 * Data: testimonials (three items with quote, author, details, and avatar path strings).
 *       Current content is a preview; replace placeholders and confirm reviews before publishing.
 */

$review_rating = [
  'rating'        => 4.5,
  'wrapper_class' => 'mt-3 sm:flex-col sm:items-start sm:gap-0',
  'text_class'    => 'text-slate-400',
];
?>
<div class="testimonial text-slate-900 js-component-testimonial-carousel">
  <div class="grid min-w-0 gap-8 lg:grid-cols-3 lg:gap-3">
    <div class="relative flex min-w-0 flex-col lg:col-span-2 lg:mr-10">
      <h3 class="text-xs uppercase text-slate-500">Patient Stories</h3>
      <div class="mt-6 flex flex-1 overflow-hidden">
        <div id="component-testimonial-track"
             class="testimonial-track grid min-w-0 flex-1 grid-cols-1 gap-6 js-component-testimonial-track"
             role="group" aria-label="Patient testimonials" tabindex="0">
          <?php foreach ($testimonials as $testimonial) { ?>
          <figure class="flex min-w-0 flex-col justify-between">
            <blockquote class="text-xl leading-7 sm:text-3xl sm:leading-9 px-10 border-l border-slate-300">
              <p><?= e($testimonial['quote']); ?></p>
            </blockquote>
            <figcaption class="mt-6 flex items-center gap-3 md:mt-auto md:pt-8 md:pr-28">
              <img
                src="<?= e(asset_url($testimonial['avatar'] ?? 'assets/images/customer/2.webp')); ?>"
                alt=""
                width="48"
                height="48"
                loading="lazy"
                decoding="async"
                class="size-[48px] shrink-0 rounded-full object-cover bg-slate-100"
              />
              <div class="min-w-0">
                <div class="font-medium text-slate-950"><?= e($testimonial['author']); ?></div>
                <div class="mt-1 text-sm text-slate-500"><?= e($testimonial['details']); ?></div>
              </div>
            </figcaption>
          </figure>
          <?php } ?>
        </div>
      </div>

      <div class="mt-8 md:absolute md:right-0 md:bottom-1 md:mt-0 js-component-testimonial-controls" hidden>
        <div class="flex items-center justify-end gap-2">
          <button type="button"
                  class="flex size-[40px] shrink-0 items-center justify-center rounded-full ring-1 cursor-pointer
                         focus-visible:outline-2 focus-visible:outline-offset-4 bg-slate-100 text-slate-700
                         ring-slate-300 hover:bg-slate-200 focus-visible:outline-slate-600 js-component-testimonial-prev"
                  aria-label="Previous testimonial" aria-controls="component-testimonial-track">
            <?php svg('arrow-left-line', 'size-5'); ?>
          </button>
          <button type="button"
                  class="flex size-[40px] shrink-0 items-center justify-center rounded-full ring-1 cursor-pointer
                         focus-visible:outline-2 focus-visible:outline-offset-4 bg-slate-100 text-slate-700
                         ring-slate-300 hover:bg-slate-200 focus-visible:outline-slate-600 js-component-testimonial-next"
                  aria-label="Next testimonial" aria-controls="component-testimonial-track">
            <?php svg('arrow-right-line', 'size-5'); ?>
          </button>
        </div>
        <p class="sr-only js-component-testimonial-status" role="status" aria-live="polite" aria-atomic="true"></p>
      </div>
    </div>

    <aside class="flex flex-col justify-between gap-10 sm:gap-20 rounded-xl p-6 md:p-8 md:py-7 bg-slate-800"
           aria-label="Review summary preview">
      <h4 class="text-xs uppercase text-slate-500">Verified Reviews</h4>
      <div>
        <p class="mb-4 flex items-baseline gap-2" aria-label="4.9 out of 5">
          <span class="text-5xl font-light tracking-tight text-slate-100">4.9</span>
          <span class="font-light text-xl text-slate-500" aria-hidden="true">/ 5</span>
        </p>

        <?php
        component('google-review-rating', $review_rating);
        ?>
      </div>
    </aside>
  </div>
</div>
