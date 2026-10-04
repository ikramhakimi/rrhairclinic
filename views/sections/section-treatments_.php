<section class="section section-treatments py-25">
  <div class="container">
    <div class="section-headline max-w-3xl mx-auto text-center">
      <div class="headline-topic mb-5 text-xs text-slate-500 uppercase">Our Treatments</div>
      <h2 class="headline-title text-4xl text-slate-950">
        A treatment plan built around your hair loss.
      </h2>
      <div class="headline-subtitle mt-5">
        From early thinning to advanced hair loss, RR combines medical, regenerative and surgical options based
        on what your hair actually needs.
      </div>
    </div>

    <?php
      $featured_treatment = [
        'name'     => 'Hair Transplant',
        'brief'    => 'Permanent restoration for receding hairlines, bald spots and advanced hair loss.',
        'image'    => 'assets/images/treatment-hair-transplant.png',
        'features' => [
          'Natural-looking results',
          'Doctor-led & personalised',
          'Lasting confidence',
        ],
      ];

      $treatments = [
        [
          'name'     => 'Medical Hair Loss Treatment',
          'brief'    => 'Doctor-guided treatment to slow hair loss and help preserve existing hair.',
          'image'    => 'assets/images/treatment-medical-hair-loss.png',
          'features' => [
            'Prescription-based treatment',
            'Personalised by our doctors',
            'Suitable for early to moderate hair loss',
          ],
        ],
        [
          'name'     => 'PRP Hair Treatment',
          'brief'    => 'Regenerative treatment to support follicles, reduce shedding and improve hair density.',
          'image'    => 'assets/images/treatment-prp-hair.png',
          'features' => [
            'Uses your body\'s natural healing factors',
            'Minimal downtime',
            'Ideal for thinning hair and maintenance',
          ],
        ],
      ];

      $treatment_groups = [
        [
          'name'  => 'Hair Restoration',
          'brief' => 'Surgical and cosmetic solutions to restore your look.',
          'items' => [
            'Hair Transplant',
            'Hair Loss Consultation',
            'Scalp & Hair Growth Treatment',
          ],
        ],
        [
          'name'  => 'Hair & Scalp Treatments',
          'brief' => 'Non-surgical treatments to support and maintain hair health.',
          'items' => [
            'Medical Hair Loss Treatment',
            'PRP Hair Treatment',
            'Exosome Hair Treatment',
          ],
        ],
      ];
    ?>

    <div class="mt-15 grid grid-cols-1 gap-4 lg:grid-cols-11">
      <article
        class="card group relative flex min-h-[560px] overflow-hidden rounded-2xl bg-slate-900 text-white lg:col-span-5"
      >
        <img
          src="<?= e($featured_treatment['image']); ?>"
          alt="<?= e($featured_treatment['name']); ?> treatment at RR Hair Clinic"
          width="1024"
          height="1536"
          decoding="async"
          class="absolute inset-0 size-full object-cover opacity-80 transition duration-200 ease-out
                 group-hover:scale-105 group-hover:opacity-90"
        />
        <div class="absolute inset-0 bg-gradient-to-b from-slate-950/85 via-slate-950/45 to-slate-950/90"></div>
        <div class="relative flex w-full flex-col p-6 md:p-7">
          <div class="flex items-center gap-4 text-xs text-slate-300">
            <span>01</span>
            <span class="h-px w-10 bg-slate-400"></span>
          </div>
          <div class="mt-auto max-w-sm pb-5">
            <h3 class="treatment-name text-4xl text-white"><?= e($featured_treatment['name']); ?></h3>
            <div class="treatment-brief mt-5 text-base text-slate-200">
              <?= e($featured_treatment['brief']); ?>
            </div>
          </div>
          <div>
            <?php foreach($featured_treatment['features'] as $feature) { ?>
            <span class="text-xs">
              <span>+</span>
              <span><?= e($feature); ?></span>
            </span>
            <?php } ?>
          </div>
        </div>
      </article>

      <?php foreach($treatments as $index => $treatment) { ?>
      <article
        class="card flex flex-col overflow-hidden rounded-2xl
               md:flex-row lg:col-span-3 lg:flex-col"
      >
        <div class="relative min-h-72 flex-1 overflow-hidden bg-slate-100 lg:flex-none">
          <img
            src="<?= e($treatment['image']); ?>"
            alt="<?= e($treatment['name']); ?> treatment at RR Hair Clinic"
            width="1024"
            height="1536"
            loading="lazy"
            decoding="async"
            class="absolute inset-0 size-full object-cover"
          />
          <div
            class="absolute inset-0 bg-gradient-to-r from-white via-white/85 to-transparent
                   lg:bg-gradient-to-b lg:from-white lg:via-white/70 lg:to-transparent"
          ></div>
          <div class="relative p-8">
            <div class="flex items-center gap-4 text-xs text-slate-500">
              <span>0<?= e($index + 2); ?></span>
              <span class="h-px w-10 bg-slate-300"></span>
            </div>
            <h3 class="treatment-name mt-6 max-w-52 text-2xl text-slate-950">
              <?= e($treatment['name']); ?>
            </h3>
            <div class="treatment-brief mt-4 max-w-56 text-sm text-slate-600">
              <?= e($treatment['brief']); ?>
            </div>
            <a href="#" class="button mt-7 inline-flex ring-1 ring-slate-300 text-slate-900">
              <div class="flex-split">
                <div>Learn More</div>
                <div class="size-7 -m-1 -mr-4 ml-5 rounded-full flex items-center justify-center
                            bg-slate-900 text-white">
                  <?php svg('arrow-right-line', 'size-5'); ?>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="flex-1 border-l border-slate-200 p-6 lg:border-l-0 lg:border-t">
          <ul class="space-y-5">
            <?php foreach($treatment['features'] as $feature) { ?>
            <li class="flex gap-4 text-sm text-slate-600">
              <span
                class="mt-0.5 flex size-8 shrink-0 items-center justify-center rounded-full ring-1
                       ring-slate-300 text-xs text-slate-900"
              >+</span>
              <span><?= e($feature); ?></span>
            </li>
            <?php } ?>
          </ul>
        </div>
      </article>
      <?php } ?>
    </div>

    <div class="mt-15 flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
      <h3 class="text-3xl text-slate-950">More treatments available at RR</h3>
      <a href="#" class="inline-flex items-center gap-3 text-sm text-slate-900">
        <span>View all treatments</span>
        <span aria-hidden="true"><?php svg('arrow-right-line', 'size-5'); ?></span>
      </a>
    </div>

    <div class="mt-5 grid grid-cols-1 gap-5 md:grid-cols-2">
      <?php foreach($treatment_groups as $group_index => $group) { ?>
      <article class="card p-6 md:p-8">
        <div class="flex gap-5">
          <div class="flex size-16 shrink-0 items-center justify-center rounded-full bg-slate-900 text-sm text-white">
            0<?= e($group_index + 1); ?>
          </div>
          <div>
            <h4 class="text-2xl text-slate-950"><?= e($group['name']); ?></h4>
            <div class="mt-2 text-sm text-slate-500"><?= e($group['brief']); ?></div>
          </div>
        </div>
        <div class="mt-8 divide-y divide-slate-200">
          <?php foreach($group['items'] as $item) { ?>
          <a
            href="#"
            class="flex items-center justify-between gap-5 py-4 text-slate-900 transition duration-200
                   hover:text-blue-700"
          >
            <span><?= e($item); ?></span>
            <span class="shrink-0" aria-hidden="true"><?php svg('arrow-right-line', 'size-5'); ?></span>
          </a>
          <?php } ?>
        </div>
      </article>
      <?php } ?>
    </div>
  </div>
</section>
