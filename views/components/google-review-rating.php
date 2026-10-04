<?php

/**
 * Component: Google review rating
 * Purpose: Displays a star rating with the verified Google Reviews summary.
 * Structure: Stacked on mobile and inline from the small breakpoint.
 * Data: rating (number from 0 to 5), wrapper_class and text_class (optional class strings).
 */

$rating        = $rating ?? 5;
$wrapper_class = $wrapper_class ?? '';
$text_class    = $text_class ?? 'text-slate-600';

?>
<div class="trust-reviews sm:flex items-center gap-2 <?= e($wrapper_class); ?>">
  <?php component('star-rating', ['rating' => $rating]); ?>
  <div class="mt-1 text-sm <?= e($text_class); ?>">From 500+ verified Google Reviews</div>
</div>
