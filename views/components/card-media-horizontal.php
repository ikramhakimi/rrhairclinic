<?php

/**
 * Component: Card media horizontal
 * Purpose: Displays a point with an image beside its title and description.
 * Structure: Responsive four-column grid with image, static h5 title, and description.
 * Data: image, image_alt, title, and description (strings). Text is escaped.
 */

?>
<div class="card-media border-b border-slate-100 mb-4 pb-4 sm:mb-6 sm:pb-6 sm:pr-5 grid grid-cols-3 gap-4 sm:gap-5">
  <div class="col-span-1 hidden sm:block">
    <div class="aspect-6/7 sm:aspect-4/3">
      <img
        src="<?= e($image ?? ''); ?>"
        alt="<?= e($image_alt ?? ''); ?>"
        width="1536"
        height="1024"
        loading="lazy"
        decoding="async"
        class="size-full object-cover rounded-xl"
      />
    </div>
  </div>
  <div class="col-span-3 sm:col-span-2">
    <h5 class="font-semibold sm:text-lg leading-6 text-slate-900 mb-2"><?= e($title ?? ''); ?></h5>
    <div><?= e($description ?? ''); ?></div>
  </div>
</div>
