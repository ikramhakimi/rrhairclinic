<?php

$drawer_id     = $drawer_id ?? 'site-menu-drawer';
$drawer_title  = $drawer_title ?? 'Menu';
$nav_items     = $nav_items ?? [
  [
    'label' => 'Home',
    'href'  => '/',
  ],
  [
    'label' => 'Services',
    'href'  => '#services',
  ],
  [
    'label' => 'Process',
    'href'  => '#process',
  ],
  [
    'label' => 'Projects',
    'href'  => '#projects',
  ],
];
$cta_label     = $cta_label ?? 'Start a project';
$cta_href      = $cta_href ?? '#contact';

?>

<div
  id="<?= htmlspecialchars($drawer_id, ENT_QUOTES, 'UTF-8'); ?>"
  class="pointer-events-none fixed inset-0 z-50 opacity-0 transition-opacity duration-200 ease-out js-site-drawer"
  aria-hidden="true"
>
  <button
    type="button"
    class="absolute inset-0 bg-slate-950/35"
    data-drawer-close="<?= htmlspecialchars($drawer_id, ENT_QUOTES, 'UTF-8'); ?>"
    aria-label="Close menu"
  ></button>

  <aside
    class="absolute right-0 top-0 flex h-full w-full max-w-sm translate-x-full flex-col bg-white px-6 py-5 shadow-2xl transition-transform duration-300 ease-out js-site-drawer-panel"
    role="dialog"
    aria-modal="true"
    aria-labelledby="<?= htmlspecialchars($drawer_id, ENT_QUOTES, 'UTF-8'); ?>-title"
  >
    <div class="flex items-center justify-between gap-4">
      <h2
        id="<?= htmlspecialchars($drawer_id, ENT_QUOTES, 'UTF-8'); ?>-title"
        class="font-mono text-sm uppercase tracking-[0.16em] text-slate-500"
      >
        <?= htmlspecialchars($drawer_title, ENT_QUOTES, 'UTF-8'); ?>
      </h2>

      <button
        type="button"
        class="inline-flex size-10 items-center justify-center rounded-full border border-slate-200 text-slate-950 transition hover:border-slate-950 focus:outline-none focus:ring-2 focus:ring-slate-950 focus:ring-offset-2 js-site-drawer-close"
        data-drawer-close="<?= htmlspecialchars($drawer_id, ENT_QUOTES, 'UTF-8'); ?>"
        aria-label="Close menu"
      >
        <span aria-hidden="true" class="block h-px w-5 rotate-45 bg-current"></span>
        <span aria-hidden="true" class="absolute block h-px w-5 -rotate-45 bg-current"></span>
      </button>
    </div>

    <nav class="mt-10" aria-label="Mobile navigation">
      <ul class="space-y-2">
        <?php foreach ($nav_items as $nav_item) : ?>
          <li>
            <a
              href="<?= htmlspecialchars($nav_item['href'], ENT_QUOTES, 'UTF-8'); ?>"
              class="block rounded-md px-1 py-3 text-2xl font-semibold tracking-tight text-slate-950 transition hover:text-emerald-700 focus:outline-none focus:ring-2 focus:ring-slate-950 focus:ring-offset-2"
            >
              <?= htmlspecialchars($nav_item['label'], ENT_QUOTES, 'UTF-8'); ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>

    <div class="mt-auto pt-8">
      <a
        href="<?= htmlspecialchars($cta_href, ENT_QUOTES, 'UTF-8'); ?>"
        class="inline-flex w-full items-center justify-center rounded-full bg-slate-950 px-5 py-3 text-sm font-semibold text-white transition hover:bg-emerald-800 focus:outline-none focus:ring-2 focus:ring-slate-950 focus:ring-offset-2"
      >
        <?= htmlspecialchars($cta_label, ENT_QUOTES, 'UTF-8'); ?>
      </a>
    </div>
  </aside>
</div>
