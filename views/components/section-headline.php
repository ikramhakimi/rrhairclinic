<?php

/**
 * Component: Section headline
 * Purpose: Provides consistent section heading typography and spacing.
 * Structure: Topic, static h2 title, and subtitle inside a constrained wrapper.
 * Data: title (required string), topic and subtitle (optional strings).
 *       Text is escaped; newline characters in title/subtitle become desktop-only line breaks.
 */

?>
<div class="section-headline max-w-2xl mx-auto sm:text-center">
  <?php if (($topic ?? '') !== '') { ?>
  <div class="headline-topic mb-2 sm:mb-5 text-xs text-slate-500 uppercase"><?= e($topic); ?></div>
  <?php } ?>
  <h2 class="headline-title font-medium sm:font-normal text-2xl sm:text-4xl sm:leading-11 text-transparent bg-clip-text bg-gradient-to-br from-slate-700 via-slate-800 to-slate-950">
    <?= str_replace("\n", ' <br class="hidden md:block" /> ', e($title ?? '')); ?>
  </h2>
  <?php if (($subtitle ?? '') !== '') { ?>
  <div class="headline-subtitle mt-2 sm:mt-5 hidden">
    <?= str_replace("\n", ' <br class="hidden md:block" /> ', e($subtitle)); ?>
  </div>
  <?php } ?>
</div>
