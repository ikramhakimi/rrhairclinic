<section class="section section-treatments py-25">
  <div class="container">
    <div class="section-headline max-w-2xl">
      <div class="headline-topic mb-5 text-xs text-slate-500 uppercase">Our Treatments</div>
      <h2 class="headline-title text-4xl text-slate-950">Restoring hair with precision care.</h2>
      <div class="headline-subtitle mt-5">From hairline design to the final graft, no delegation, no assembly lines. Board-certified dermatologic surgeon with 15+ years dedicated to hair restoration.</div>
    </div>
    <?php
      $treatments = [
        [
          'name'  => 'Hair Loss Consultation',
          'brief' => 'A detailed assessment to identify the cause of hair loss and build a personalised treatment plan.',
          'image' => 'assets/images/treatment-hair-loss-consultation.png',
        ],
        [
          'name'  => 'Medical Hair Loss Treatment',
          'brief' => 'Doctor-guided treatment to slow hair loss and help preserve existing hair.',
          'image' => 'assets/images/treatment-medical-hair-loss.png',
        ],
        [
          'name'  => 'PRP Hair Treatment',
          'brief' => 'Regenerative treatment to support follicles, reduce shedding and improve hair density.',
          'image' => 'assets/images/treatment-prp-hair.png',
        ],
      ];

      $also_offered_treatments = [
        [
          'name'  => 'Exosome Hair Treatment',
          'brief' => 'Advanced regenerative therapy to support scalp and follicle health.',
          'image' => 'assets/images/treatment-exosome-hair.png',
        ],
        [
          'name'  => 'Hair Transplant',
          'brief' => 'Permanent restoration for receding hairlines, bald spots and advanced hair loss.',
          'image' => 'assets/images/treatment-hair-transplant.png',
        ],
        [
          'name'  => 'Scalp & Hair Growth Treatment',
          'brief' => 'Non-surgical treatment to improve scalp condition, strengthen follicles and support healthier growth.',
          'image' => 'assets/images/treatment-scalp-hair-growth.png',
        ],
      ];
    ?>
    <div class="grid grid-cols-3 gap-5 mt-15 text-white">
      <?php foreach($treatments as $treatment) { ?>
      <div class="card bg-slate-900 bg-cover bg-center p-10 rounded-2xl"
           style="background-image: linear-gradient(to bottom, rgba(15, 23, 42, .9), rgba(15, 23, 42, .65) 35%, transparent 70%), url('<?= $treatment['image']; ?>');">
        <div class="treatment-name text-lg text-white mb-4"><?= $treatment['name']; ?></div>
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
      <div class="w-full h-px border-b border-dashed border-slate-300"></div>
    </div>
    <div class="grid grid-cols-3 gap-5 mt-10 text-white">
      <?php foreach($also_offered_treatments as $treatment) { ?>
      <div class="card bg-slate-900 bg-cover bg-center p-10 rounded-2xl"
           style="background-image: linear-gradient(to bottom, rgba(15, 23, 42, .9), rgba(15, 23, 42, .65) 35%, transparent 70%), url('<?= $treatment['image']; ?>');">
        <h3 class="treatment-name text-lg text-white mb-4"><?= $treatment['name']; ?></h3>
        <div class="treatment-brief text-sm text-slate-300"><?= $treatment['brief']; ?></div>
        <div class="flex-split mt-80"></div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
