<?php

/**
 * Component: Carousel controls
 * Purpose: Shares previous/next buttons using the light testimonial styling and each carousel's JS hooks.
 * Structure: Hidden controls wrapper, circular button pair, and live status announcement.
 * Data: hook (e.g. case-study), slide_label, wrapper_class (required strings).
 *       The track ID is {hook}-track.
 */

?>
<div class="<?= e($wrapper_class); ?> js-<?= e($hook); ?>-controls" hidden>
  <div class="flex items-center justify-end gap-1">
    <button type="button"
            class="flex size-9 shrink-0 items-center justify-center rounded-full cursor-pointer
                   border border-slate-950/60
                   text-white
                   bg-gradient-to-br from-slate-400 via-slate-800 to-slate-500
                   focus-visible:outline-2 focus-visible:outline-offset-4
                 focus-visible:outline-slate-600 js-<?= e($hook); ?>-prev"
            aria-label="Previous <?= e($slide_label); ?> slide" aria-controls="<?= e($hook); ?>-track">
      <span aria-hidden="true"><?php svg('arrow-left-line', 'size-5'); ?></span>
    </button>
    <button type="button"
            class="flex size-9 shrink-0 items-center justify-center rounded-full cursor-pointer
                   border border-slate-950/60
                   text-white
                   bg-gradient-to-br from-slate-400 via-slate-800 to-slate-500
                   focus-visible:outline-2 focus-visible:outline-offset-4
                    focus-visible:outline-slate-600 js-<?= e($hook); ?>-next"
            aria-label="Next <?= e($slide_label); ?> slide" aria-controls="<?= e($hook); ?>-track">
      <span aria-hidden="true"><?php svg('arrow-right-line', 'size-5'); ?></span>
    </button>
  </div>
  <p class="sr-only js-<?= e($hook); ?>-status" role="status" aria-live="polite" aria-atomic="true"></p>
</div>
