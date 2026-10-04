<?php

/**
 * Component: Service listing
 * Purpose: Shares the treatment and hair loss listing layout.
 * Structure: Intro, alternating media rows, and a compact list of additional topics.
 * Data: topic, title, intro, items, and additional_title/additional_items.
 *       Items contain id, title, description, points, href, and link_label.
 *       All image placements are decorative placeholders until photography is supplied.
 */

?>
<section class="section service-listing pt-30 pb-15 sm:pb-20 lg:pt-20">
  <div class="container">
    <div class="hero-headline max-w-4xl">
      <div class="headline-topic mb-5 text-xs text-slate-500 uppercase"><?= e($topic); ?></div>
      <h1 class="headline-title font-semibold text-4xl sm:text-5xl lg:text-6xl text-slate-950">
        <?= e($title); ?>
      </h1>
      <p class="mt-5 max-w-2xl sm:text-lg"><?= e($intro); ?></p>
    </div>

    <div class="mt-10 space-y-12 sm:mt-15 sm:space-y-20">
      <?php foreach ($items as $index => $item) { ?>
      <article
        id="<?= e($item['id']); ?>"
        class="group grid scroll-mt-24 items-center gap-6 md:grid-cols-2 md:gap-12"
      >
        <div class="aspect-4/3 w-full rounded-lg bg-slate-300 md:group-even:order-2" aria-hidden="true"></div>
        <div class="min-w-0 md:group-even:order-1">
          <div class="mb-3 text-xs text-slate-500"><?= e(sprintf('%02d', $index + 1)); ?></div>
          <?php component('section-headline', ['title' => $item['title']]); ?>
          <p class="mt-4"><?= e($item['description']); ?></p>
          <ul class="mt-5 flex flex-wrap gap-x-5 gap-y-3 text-sm text-slate-700">
            <?php foreach ($item['points'] as $point) { ?>
            <li class="flex items-center gap-2">
              <span class="text-slate-500" aria-hidden="true">✓</span>
              <span><?= e($point); ?></span>
            </li>
            <?php } ?>
          </ul>
          <a
            href="<?= e($item['href']); ?>"
            class="button mt-8 inline-flex items-center gap-3 bg-slate-900 text-white
              focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-950"
            aria-label="<?= e($item['link_label'] . ': ' . $item['title']); ?>"
          >
            <?= e($item['link_label']); ?>
            <?php svg('arrow-right-up-line', 'size-5 shrink-0'); ?>
          </a>
        </div>
      </article>
      <?php } ?>
    </div>

    <div class="mt-15 sm:mt-20">
      <div class="flex items-center gap-5">
        <h2 class="shrink-0 text-xs text-slate-500 uppercase"><?= e($additional_title); ?></h2>
        <div class="h-px w-full border-b border-dashed border-slate-200" aria-hidden="true"></div>
      </div>
      <div class="mt-8 grid gap-6 md:grid-cols-3">
        <?php foreach ($additional_items as $item) { ?>
        <a
          href="<?= e($item['href']); ?>"
          class="flex items-center gap-4 rounded-lg
            focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-slate-950"
        >
          <div class="aspect-square w-18 shrink-0 rounded-full bg-slate-300" aria-hidden="true"></div>
          <div class="min-w-0">
            <h3 class="font-semibold text-lg text-slate-900"><?= e($item['title']); ?></h3>
            <p class="mt-1 text-sm"><?= e($item['description']); ?></p>
          </div>
        </a>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
