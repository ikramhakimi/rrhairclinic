<section class="section section-treatments py-25 border-t border-slate-200">
  <div class="container">
    <div class="section-headline max-w-2xl">
      <div class="headline-topic mb-5 text-xs text-slate-500 uppercase">Our Treatments</div>
      <h2 class="headline-title font-semibold text-4xl text-slate-950">Restoring hair with precision care.</h2>
      <div class="headline-subtitle mt-5">From hairline design to the final graft, no delegation, no assembly lines. Board-certified dermatologic surgeon with 15+ years dedicated to hair restoration.</div>
    </div>
    <?php
      $treatments = [
        [
          'name'  => 'Hair Loss Consultation',
          'brief' => 'A detailed assessment to identify the cause of hair loss and build a personalised treatment plan.',
        ],
        [
          'name'  => 'Medical Hair Loss Treatment',
          'brief' => 'Doctor-guided treatment to slow hair loss and help preserve existing hair.',
        ],
        [
          'name'  => 'PRP Hair Treatment',
          'brief' => 'Regenerative treatment to support follicles, reduce shedding and improve hair density.',
        ],
      ];

      $also_offered_treatments = [
        [
          'name'  => 'Exosome Hair Treatment',
          'brief' => 'Advanced regenerative therapy to support scalp and follicle health.',
        ],
        [
          'name'  => 'Hair Transplant',
          'brief' => 'Permanent restoration for receding hairlines, bald spots and advanced hair loss.',
        ],
        [
          'name'  => 'Scalp & Hair Growth Treatment',
          'brief' => 'Non-surgical treatment to improve scalp condition, strengthen follicles and support healthier growth.',
        ],
      ];
    ?>
    <div class="grid grid-cols-3 gap-5 mt-15 text-white">
      <?php foreach($treatments as $treatment) { ?>
      <div class="card bg-slate-900 p-10 rounded-2xl">
        <div class="treatment-name font-semibold text-lg text-white mb-4"><?= $treatment['name']; ?></div>
        <div class="treatment-brief text-sm text-slate-300"><?= $treatment['brief']; ?></div>
        <div class="flex-split mt-80">
          <!-- <div class="">Learn More</div>
          <div class="rounded-full size-12 bg-white"></div> -->
        </div>
      </div>
      <?php } ?>
    </div>
    <div class="flex items-center whitespace-nowrap text-xs text-slate-500 uppercase mt-15">
      <div class="pr-5">Also offered</div>
      <div class="w-full h-px border-b border-dashed border-slate-200"></div>
    </div>
    <div class="grid grid-cols-3 gap-5 mt-10">
      <?php foreach($also_offered_treatments as $treatment) { ?>
        <div class="flex items-center">
          <div>
            <div class="size-18 rounded-full bg-slate-400"></div>
          </div>
          <div class="pl-3">
            <h3 class="font-semibold text-lg text-slate-900 mb-1"><?= $treatment['name']; ?></h3>
            <div class="text-sm text-slate-500"><?= $treatment['brief']; ?></div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
