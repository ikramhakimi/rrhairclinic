<?php

$nav_items  = [
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
$cta_label  = 'Start a project';
$cta_href   = '#contact';

?>

<header class="fixed inset-x-0 top-0 z-40 hidden border-b border-slate-200 bg-white px-6 py-4 lg:block js-site-nav">
  <div class="mx-auto grid max-w-6xl grid-cols-[1fr_auto_1fr] items-center gap-6">
    <a
      href="/"
      class="justify-self-start text-base font-semibold tracking-tight text-slate-950 focus:outline-none focus:ring-2 focus:ring-slate-950 focus:ring-offset-2"
      aria-label="Mampan Solutions home"
    >
      Mampan
    </a>

    <nav class="justify-self-center" aria-label="Primary navigation">
      <ul class="flex items-center gap-1">
        <?php foreach ($nav_items as $nav_item) : ?>
          <li>
            <a
              href="<?= htmlspecialchars($nav_item['href'], ENT_QUOTES, 'UTF-8'); ?>"
              class="rounded-full px-4 py-2 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-slate-950 focus:outline-none focus:ring-2 focus:ring-slate-950 focus:ring-offset-2"
            >
              <?= htmlspecialchars($nav_item['label'], ENT_QUOTES, 'UTF-8'); ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>

    <a
      href="<?= htmlspecialchars($cta_href, ENT_QUOTES, 'UTF-8'); ?>"
      class="justify-self-end rounded-full bg-slate-950 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-emerald-800 focus:outline-none focus:ring-2 focus:ring-slate-950 focus:ring-offset-2 js-site-nav-action"
    >
      <?= htmlspecialchars($cta_label, ENT_QUOTES, 'UTF-8'); ?>
    </a>
  </div>
</header>
