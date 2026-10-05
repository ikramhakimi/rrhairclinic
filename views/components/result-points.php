<?php

/**
 * Component: Result points
 * Purpose: Highlights treatment benefits alongside the case study results.
 * Structure: Four icon and label pairs in a single row.
 * Data: None.
 */

?>
<div class="results-points divide-x divide-slate-200 sm:grid sm:grid-cols-4 text-center sm:my-8 text-sm hidden">
  <div class="py-4">
    <div class="w-12 h-16 flex items-center justify-center mx-auto mb-4 bg-slate-900 text-slate-100 rounded-full">
      <?php svg('scissors-line', 'size-6'); ?>
    </div>
    <div>Natural-Looking Hairline</div>
  </div>
  <div class="py-4">
    <div class="w-12 h-16 flex items-center justify-center mx-auto mb-4 bg-slate-900 text-slate-100 rounded-full">
      <?php svg('grid-line', 'size-6'); ?>
    </div>
    <div>Fuller-Looking Coverage</div>
  </div>
  <div class="py-4">
    <div class="w-12 h-16 flex items-center justify-center mx-auto mb-4 bg-slate-900 text-slate-100 rounded-full">
      <?php svg('stethoscope-line', 'size-6'); ?>
    </div>
    <div>Doctor-Led Care</div>
  </div>
  <div class="py-4">
    <div class="w-12 h-16 flex items-center justify-center mx-auto mb-4 bg-slate-900 text-slate-100 rounded-full">
      <?php svg('time-line', 'size-6'); ?>
    </div>
    <div>Results Tracked Over Time</div>
  </div>
</div>
