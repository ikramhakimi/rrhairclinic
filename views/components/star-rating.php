<?php

/**
 * Component: Star rating
 * Purpose: Displays fractional ratings using a width-clipped foreground.
 * Structure: Five slate placeholder stars beneath an absolute amber star layer.
 * Data: rating (number from 0 to 5, defaults to 0 and is clamped to this range).
 */

$rating       = max(0, min(5, (float) ($rating ?? 0)));
$rating_width = $rating / 5 * 100;

?>
<div class="star-rating relative w-max" role="img" aria-label="<?= e($rating); ?> out of 5 stars">
  <div class="flex text-slate-500" aria-hidden="true">
    <?php svg('star-s-fill', 'size-6 shrink-0'); ?>
    <?php svg('star-s-fill', 'size-6 shrink-0'); ?>
    <?php svg('star-s-fill', 'size-6 shrink-0'); ?>
    <?php svg('star-s-fill', 'size-6 shrink-0'); ?>
    <?php svg('star-s-fill', 'size-6 shrink-0'); ?>
  </div>
  <div class="absolute inset-y-0 left-0 overflow-hidden" style="width: <?= e($rating_width); ?>%;" aria-hidden="true">
    <div class="flex w-max text-amber-500 text-shadow-amber-700">
      <?php svg('star-s-fill', 'size-6 shrink-0'); ?>
      <?php svg('star-s-fill', 'size-6 shrink-0'); ?>
      <?php svg('star-s-fill', 'size-6 shrink-0'); ?>
      <?php svg('star-s-fill', 'size-6 shrink-0'); ?>
      <?php svg('star-s-fill', 'size-6 shrink-0'); ?>
    </div>
  </div>
</div>
