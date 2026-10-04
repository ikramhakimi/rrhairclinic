<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($page_title ?? 'RR Hair Clinic', ENT_QUOTES, 'UTF-8'); ?></title>
  <?php if (!empty($page_description)): ?>
    <meta name="description" content="<?= e($page_description); ?>">
  <?php endif; ?>
  <link rel="preload" href="<?= asset_url('assets/fonts/lexend-latin-variable.woff2'); ?>"
        as="font" type="font/woff2" crossorigin>
  <style>
    @font-face {
      font-family: "Lexend";
      font-style: normal;
      font-weight: 100 900;
      font-display: swap;
      src: url("<?= asset_url('assets/fonts/lexend-latin-variable.woff2'); ?>") format("woff2");
    }
  </style>
  <link rel="stylesheet" href="<?= asset_url('assets/build/app.css'); ?>?v=<?= filemtime(__DIR__ . '/assets/build/app.css'); ?>">
  <script src="<?= asset_url('assets/js/app.js'); ?>?v=<?= filemtime(__DIR__ . '/assets/js/app.js'); ?>" defer></script>
</head>
<body class="bg-slate-100 text-base text-slate-600 tracking-[-1%]">
  <?php // component('component/nav'); ?>
  <?php // component('component/nav-mobile'); ?>

  <main>
    <?= $content ?? ''; ?>
  </main>
  <?php if (($page_current ?? '') !== 'hair-check') { component('whatsapp-button'); } ?>
</body>
</html>
