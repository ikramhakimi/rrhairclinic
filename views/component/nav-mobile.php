<?php

$drawer_id  = 'site-menu-drawer';
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

<header class="fixed inset-x-0 top-0 z-40 px-4 py-4 lg:hidden js-site-nav">
  <div class="mx-auto flex max-w-6xl items-center justify-between gap-4 rounded-full border border-slate-200/80 bg-white/90 px-4 py-3 shadow-sm backdrop-blur">
    <a
      href="/"
      class="text-base font-semibold tracking-tight text-slate-950 focus:outline-none focus:ring-2 focus:ring-slate-950 focus:ring-offset-2"
      aria-label="Mampan Solutions home"
    >
      Mampan
    </a>

    <button
      type="button"
      class="inline-flex size-10 items-center justify-center rounded-full border border-slate-200 text-slate-950 transition hover:border-slate-950 focus:outline-none focus:ring-2 focus:ring-slate-950 focus:ring-offset-2 js-site-nav-action js-site-drawer-open"
      data-drawer-open="<?= htmlspecialchars($drawer_id, ENT_QUOTES, 'UTF-8'); ?>"
      aria-controls="<?= htmlspecialchars($drawer_id, ENT_QUOTES, 'UTF-8'); ?>"
      aria-expanded="false"
      aria-label="Open menu"
    >
      <span aria-hidden="true" class="space-y-1.5">
        <span class="block h-px w-5 bg-current"></span>
        <span class="block h-px w-5 bg-current"></span>
      </span>
    </button>
  </div>
</header>

<?php
component('component/drawer', [
  'drawer_id'    => $drawer_id,
  'drawer_title' => 'Navigation',
  'nav_items'    => $nav_items,
  'cta_label'    => $cta_label,
  'cta_href'     => $cta_href,
]);
?>
