<?php

/**
 * Component: Service detail
 * Purpose: Shares the treatment and hair loss detail layout.
 * Structure: Centred intro/banner, facts sidebar, overview, steps, timeline, and related topics.
 * Data: title, intro, listing_url/label, facts, consultation_label, overview_title/text,
 *       steps_title/steps, timeline_title/timeline/note, related_title/items.
 *       Facts contain label/value; steps and timeline contain title/description.
 *       Related items contain title/href. All text and URLs are escaped.
 */

?>
<section class="section service-detail pt-30 pb-10 sm:pb-15 lg:pt-20">
  <div class="container">
    <div class="mx-auto max-w-3xl text-center">
      <a
        href="<?= e($listing_url); ?>"
        class="mb-5 inline-flex items-center gap-2 text-sm text-slate-700 underline underline-offset-4"
      >
        <?php svg('arrow-left-line', 'size-4'); ?>
        <?= e($listing_label); ?>
      </a>
      <h1 class="headline-title font-semibold text-4xl sm:text-5xl lg:text-6xl text-slate-950">
        <?= e($title); ?>
      </h1>
      <p class="mt-5 sm:text-lg"><?= e($intro); ?></p>
    </div>
    <div class="mt-10 aspect-4/3 w-full rounded-lg bg-slate-300 sm:mt-15 sm:aspect-16/7" aria-hidden="true"></div>
  </div>
</section>

<section class="section service-detail-content pb-15 sm:pb-20">
  <div class="container grid items-start gap-10 lg:grid-cols-3 lg:gap-15">
    <aside class="min-w-0 lg:sticky lg:top-8" aria-label="At a glance">
      <dl class="divide-y divide-slate-200 border-y border-slate-200">
        <?php foreach ($facts as $fact) { ?>
        <div class="flex items-start justify-between gap-5 py-4">
          <dt class="text-sm text-slate-500"><?= e($fact['label']); ?></dt>
          <dd class="max-w-[60%] text-right font-medium text-slate-900"><?= e($fact['value']); ?></dd>
        </div>
        <?php } ?>
      </dl>
      <a
        href="https://wa.me/601116741858"
        class="button mt-6 flex items-center justify-center gap-2 bg-slate-900 text-white"
      >
        <?= e($consultation_label); ?>
        <?php svg('arrow-right-up-line', 'size-5 shrink-0'); ?>
      </a>
      <a
        href="<?= e($listing_url); ?>"
        class="button mt-3 block text-slate-900 ring-1 ring-inset ring-slate-300"
      ><?= e($listing_label); ?></a>
    </aside>

    <div class="min-w-0 space-y-10 sm:space-y-12 lg:col-span-2">
      <div>
        <?php component('section-headline', ['title' => $overview_title]); ?>
        <p class="mt-5"><?= e($overview_text); ?></p>
      </div>

      <div>
        <h2 class="text-2xl font-semibold text-slate-950"><?= e($steps_title); ?></h2>
        <ol class="mt-6 divide-y divide-slate-200 border-y border-slate-200">
          <?php foreach ($steps as $index => $step) { ?>
          <li class="flex gap-5 py-6 sm:gap-8">
            <span class="pt-1 text-sm text-slate-500" aria-hidden="true">
              <?= e(sprintf('%02d', $index + 1)); ?>
            </span>
            <div class="min-w-0">
              <h3 class="text-lg font-semibold text-slate-900"><?= e($step['title']); ?></h3>
              <p class="mt-2"><?= e($step['description']); ?></p>
            </div>
          </li>
          <?php } ?>
        </ol>
      </div>

      <div>
        <h2 class="text-2xl font-semibold text-slate-950"><?= e($timeline_title); ?></h2>
        <ol class="mt-6 space-y-6 border-l border-slate-300 pl-6">
          <?php foreach ($timeline as $stage) { ?>
          <li class="relative">
            <span class="absolute -left-7.5 top-1.5 size-3 rounded-full bg-slate-900" aria-hidden="true"></span>
            <h3 class="font-semibold text-slate-900"><?= e($stage['title']); ?></h3>
            <p class="mt-2"><?= e($stage['description']); ?></p>
          </li>
          <?php } ?>
        </ol>
        <p class="mt-6 text-sm text-slate-500"><?= e($timeline_note); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="section service-detail-related pb-15 sm:pb-20">
  <div class="container">
    <?php component('section-headline', ['title' => $related_title]); ?>
    <div class="mt-8 grid gap-8 sm:grid-cols-3 sm:gap-5">
      <?php foreach ($related_items as $item) { ?>
      <a
        href="<?= e($item['href']); ?>"
        class="block rounded-lg
          focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-slate-950"
      >
        <div class="aspect-4/3 w-full rounded-lg bg-slate-300" aria-hidden="true"></div>
        <h3 class="mt-5 text-lg font-semibold text-slate-900"><?= e($item['title']); ?></h3>
        <span class="mt-2 inline-flex items-center gap-2 text-sm text-slate-700">
          Learn more
          <?php svg('arrow-right-line', 'size-4'); ?>
        </span>
      </a>
      <?php } ?>
    </div>
  </div>
</section>
