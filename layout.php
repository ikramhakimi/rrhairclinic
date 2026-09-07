<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($page_title ?? 'RR Hair Clinic', ENT_QUOTES, 'UTF-8'); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Google+Sans+Flex:opsz,wght@6..144,1..1000&family=Lexend:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/build/app.css?v=<?= filemtime(__DIR__ . '/assets/build/app.css'); ?>">
  <script src="assets/js/app.js" defer></script>

  <style>
    .font-display {font-family: 'Space Grotesk', sans-serif;}
    .font-sans    {font-family: 'Lexend', sans-serif;}
  </style>
</head>
<body class="bg-white font-sans text-[16px] text-slate-600 leading-6 tracking-[-1%]">
  <?php // component('component/nav'); ?>
  <?php // component('component/nav-mobile'); ?>

  <main class="pb-200">
    <?= $content ?? ''; ?>
  </main>
</body>
</html>
