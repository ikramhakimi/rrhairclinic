<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($page_title ?? 'RR Hair Clinic', ENT_QUOTES, 'UTF-8'); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= asset_url('assets/build/app.css'); ?>?v=<?= filemtime(__DIR__ . '/assets/build/app.css'); ?>">
  <script src="<?= asset_url('assets/js/app.js'); ?>?v=<?= filemtime(__DIR__ . '/assets/js/app.js'); ?>" defer></script>

  <style>
  </style>
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
