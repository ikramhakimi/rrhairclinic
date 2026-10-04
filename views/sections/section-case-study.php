<section class="section section-case-study js-case-study-carousel">
  <!-- <div style="background-size:70%; background-position: top 100px right; background-image: url(https://media.istockphoto.com/id/498125818/photo/having-fun.jpg?s=612x612&w=0&k=20&c=Tu1eEMaAaBZWVibmadzr799lRFgGYrYQCCY33NGMG2c="></div> -->
  <!-- <div class="absolute top-0 right-0 w-100 h-full bg-gradient-to-r from-transparent to-white"></div> -->
  <!-- <div class="absolute top-0 left-0 w-200 h-full bg-gradient-to-l from-transparent to-white"></div> -->
  <div class="container relative -top-20 hidden sm:blocks">
    <div class="absolute w-full h-200 bg-cover bg-no-repeat -mb-40" style="background-size:100%; background-image: url('<?= asset_url('assets/images/case-studies/hero-doctor-patient-v2.png'); ?>');">
      <div class="absolute top-0 right-0 w-20 h-full bg-gradient-to-r from-transparent to-white"></div>
      <div class="absolute top-0 left-0 w-100 h-full bg-gradient-to-l from-transparent to-white"></div>
      <div class="absolute top-0 left-0 h-40 w-full bg-gradient-to-t from-transparent to-white"></div>
    </div>
  </div>
  <div class="container relative">
    <?php
    component('section-headline', [
      'topic'    => 'Our Results',
      'title'    => "Results you can actually see.\nNothing retouched.",
      'subtitle' => 'Real patients. Real treatment journeys. Real changes over time — '
        . 'with photos that show what progress can actually look like.',
    ]);
    ?>

    <div class="h-150 -mb-60 relative hidden sm:blocks">
      <div class="absolute bottom-0 left-0 h-60 w-full bg-gradient-to-b from-transparent to-white"></div>
    </div>

    <?php
    // Mockup data for the current case-study cards.
    $case_studies = [
      [
        'before_image' => 'assets/images/case-studies/case-1-before.png',
        'after_image'  => 'assets/images/case-studies/case-1-after.png',
        'before_alt'   => 'Before treatment with visible crown and frontal hair thinning',
        'after_alt'    => 'After treatment with improved crown and frontal hair density',
        'hair_issue'   => 'Crown & frontal thinning',
        'age'          => 41,
        'treatment'    => 'FUE Hair Transplant',
        'results_at'   => '10 months',
        'grafts'       => '3,400',
      ],
      [
        'before_image' => 'assets/images/case-studies/case-2-before.png',
        'after_image'  => 'assets/images/case-studies/case-2-after.png',
        'before_alt'   => 'Before treatment with receding frontal hairline and temple thinning',
        'after_alt'    => 'After treatment with improved frontal hairline and fuller temple coverage',
        'hair_issue'   => 'Receding hairline',
        'age'          => 35,
        'treatment'    => 'FUE Hair Transplant',
        'results_at'   => '12 months',
        'grafts'       => '2,800',
      ],
      [
        'before_image' => 'assets/images/case-studies/case-3-before.png',
        'after_image'  => 'assets/images/case-studies/case-3-after.png',
        'before_alt'   => 'Before treatment with visible crown thinning and reduced top density',
        'after_alt'    => 'After treatment with improved crown coverage and top density',
        'hair_issue'   => 'Crown thinning',
        'age'          => 46,
        'treatment'    => 'FUE Hair Transplant',
        'results_at'   => '9 months',
        'grafts'       => '3,200',
      ],
      [
        'before_image' => 'assets/images/case-studies/case-2-before.png',
        'after_image'  => 'assets/images/case-studies/case-2-after.png',
        'before_alt'   => 'Before treatment with receding frontal hairline and temple thinning',
        'after_alt'    => 'After treatment with improved frontal hairline and fuller temple coverage',
        'hair_issue'   => 'Receding hairline',
        'age'          => 35,
        'treatment'    => 'FUE Hair Transplant',
        'results_at'   => '12 months',
        'grafts'       => '2,800',
      ],
      [
        'before_image' => 'assets/images/case-studies/case-3-before.png',
        'after_image'  => 'assets/images/case-studies/case-3-after.png',
        'before_alt'   => 'Before treatment with visible crown thinning and reduced top density',
        'after_alt'    => 'After treatment with improved crown coverage and top density',
        'hair_issue'   => 'Crown thinning',
        'age'          => 46,
        'treatment'    => 'FUE Hair Transplant',
        'results_at'   => '9 months',
        'grafts'       => '3,200',
      ],
    ];
    ?>

    <?php
    component('carousel-controls', [
      'hook'          => 'case-study',
      'slide_label'   => 'results',
      'wrapper_class' => 'mt-5 lg:-mt-12 relative',
    ]);
    ?>

  </div>

  <div class="relative -mt-6 sm:mt-10 -mx-6">
    <div class="container md:w-[calc(100%-3rem)]">
      <div id="case-study-track" class="grid grid-cols-1 gap-2 py-10 md:py-0 px-6 md:px-0 md:grid-cols-3 md:overflow-visible js-case-study-track"
           role="group" aria-label="Treatment results" tabindex="0">
        <?php foreach ($case_studies as $case_study) { ?>
        <article class="card p-2 my-px">
          <div class="p-2 sm:p-4 sm:pt-3">
            <div class="font-semibold sm:text-lg text-slate-800 tracking-tight"><?= e($case_study['hair_issue']); ?></div>
            <div class="mt-1 text-sm sm:flex items-center gap-3">
              <div><?= e($case_study['treatment']); ?></div>
              <div class="w-px h-4 bg-slate-200 hidden sm:block"></div>
              <div class="text-green-600"><?= e($case_study['grafts']); ?> grafts</div>
            </div>
            <div class="text-sm text-slate-500 mt-4">Results at <?= e($case_study['results_at']); ?></div>
          </div>

          <div class="grid grid-cols-2 gap-2 relative">
            <figure class="relative overflow-hidden rounded-lg bg-slate-200">
              <img
                src="<?= e($case_study['before_image']); ?>"
                alt="<?= e($case_study['before_alt']); ?>"
                width="1122"
                height="1402"
                loading="lazy"
                decoding="async"
                class="aspect-[1/2] size-full object-cover"
              />
              <figcaption class="absolute top-2 left-2 rounded-full bg-slate-950/20 px-3 py-1 text-xs uppercase text-white">
                Before
              </figcaption>
            </figure>

            <figure class="relative overflow-hidden rounded-lg bg-slate-200">
              <img
                src="<?= e($case_study['after_image']); ?>"
                alt="<?= e($case_study['after_alt']); ?>"
                width="1122"
                height="1402"
                loading="lazy"
                decoding="async"
                class="aspect-[1/2] size-full object-cover"
              />
              <figcaption class="absolute top-2 right-2 rounded-full bg-slate-950/50 px-3 py-1 text-xs uppercase text-white">
                After
              </figcaption>
            </figure>

            <figcaption class="absolute bottom-2 left-2 rounded-full bg-teal-700/90 px-3 py-1 text-xs font-medium uppercase text-white">
              Age <?= e($case_study['age']); ?>
            </figcaption>
          </div>

          
        </article>
        <?php } ?>
        <a href="#" class="card flex flex-col items-center justify-center gap-5 p-6 text-slate-900">
          <span class="font-medium text-lg">Show all results</span>
          <span aria-hidden="true"><?php svg('arrow-right-line', 'size-6'); ?></span>
        </a>
      </div>
    </div>

    <div aria-hidden="true" class="pointer-events-none absolute -inset-y-3 left-0  z-10 w-6 bg-gradient-to-r from-white to-transparent md:w-15 lg:w-24 hidden sm:block"></div>
    <div aria-hidden="true" class="pointer-events-none absolute -inset-y-3 right-0 z-10 w-6 bg-gradient-to-l from-white to-transparent md:w-15 lg:w-24 hidden sm:block"></div>
  </div>

  <div class="container sm:mt-15">
    <div class="hairloss-quote text-lg sm:text-2xl sm:leading-8 max-w-5xl hidden">
      <span class="font-medium text-slate-950">See the progress behind each hair restoration journey.</span>
      <span class="text-slate-500 block mt-2 text-sm sm:text-2xl sm:inline">Compare before-and-after photos, treatment details and recovery progress.</span>
    </div>
    <?php
    $case_study_positive_points = [
      [
        'image'       => 'assets/images/case-studies/natural-hairline-malay.png',
        'image_alt'   => "Illustrative hairline planning with a clinician marking a man's forehead",
        'title'       => 'Natural hairline design',
        'description' => 'Designed around your facial proportions and existing hair growth, with a hairline that feels natural to you.',
      ],
      [
        'image'       => 'assets/images/case-studies/progress-documentation-malay.png',
        'image_alt'   => 'Illustrative follow-up appointment documenting crown hair with a camera',
        'title'       => 'Progress you can follow',
        'description' => 'Progress is documented throughout your recovery, helping you follow the changes in your hair over time.',
      ],
      [
        'image'       => 'assets/images/case-studies/individual-plan-malay.png',
        'image_alt'   => "Illustrative consultation discussing an individual's hair loss pattern",
        'title'       => 'A plan built around you',
        'description' => 'Your plan is tailored to your hair loss pattern and goals, with results that vary from person to person.',
      ],
      [
        'image'       => 'assets/images/case-studies/progress-documentation-malay.png',
        'image_alt'   => 'Illustrative follow-up appointment documenting crown hair with a camera',
        'title'       => 'Clear treatment details',
        'description' => 'Treatment type, graft count and time since treatment give you context for each before-and-after result.',
      ],
    ];
    ?>

    <!-- <div class="sm:mt-10 md:grid md:grid-cols-2 md:gap-x-3 hidden"> -->
      <?php // foreach ($case_study_positive_points as $case_study_positive_point) { ?>
      <?php // component('card-media-horizontal', $case_study_positive_point); ?>
      <?php // } ?>
    <!-- </div> -->

    <div class="mt-10">
      <?php
      component('testimonial', [
        'testimonials' => [
          [
            'quote'   => "Eleven months on, my barber asked which clinic I went to - he couldn't find the donor area. "
              . "That's when I knew it was worth it.",
            'author'  => 'Ikram Hakimi',
            'details' => 'DHI Implantation · 3,500 grafts · Kelantan',
            'avatar'  => 'assets/images/customer/2.webp',
          ],
          [
            'quote'   => 'The team explained every step, and the recovery was much easier than I expected. '
              . 'The results speak for themselves.',
            'author'  => 'Ikram Hakimi',
            'details' => 'DHI Implantation · 3,500 grafts · Kelantan',
            'avatar'  => 'assets/images/customer/5.webp',
          ],
          [
            'quote'   => 'Patient testimonial coming soon.',
            'author'  => 'Patient name',
            'details' => 'Placeholder · approved review to be added',
            'avatar'  => 'assets/images/customer/8.webp',
          ],
        ],
      ]);
      ?>
    </div>

    <div class="mt-15 pt-15 border-t border-slate-100 hidden">
      <h3 class="font-medium text-2xl text-slate-950">See what could be possible for you.</h3>
      <div class="text-slate-500 mt-2 max-w-2xl">Start with a free hair assessment to discuss your goals, explore suitable treatments and understand what results may be realistic for you.</div>
      <a href="#" class="button-lg bg-gradient-to-br from-slate-500 via-slate-900 to-slate-600 text-slate-100 text-shadow-2xs text-shadow-slate-900 ring-1 ring-inset ring-slate-900/70 inline-flex mt-5 transform duration-200 translate-y-0 hover:-translate-y-1 shadow-xl shadow-slate-400 hover:shadow-3xl hover:shadow-slate-500">
        <div class="flex-split">
          <div>Start Free Hair Assessment</div>
          <div class="size-7 -m-1 -mr-4 ml-5 rounded-full flex items-center justify-center bg-white text-slate-900">
            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="size-5"><path d="M16.0037 9.41421L7.39712 18.0208L5.98291 16.6066L14.5895 8H7.00373V6H18.0037V17H16.0037V9.41421Z"></path></svg>          
          </div>
        </div>
      </a>
      <?php
      component('google-review-rating', [
        'rating'        => 5,
        'wrapper_class' => 'mt-4 mb-3 sm:justify-start',
      ]);
      ?>
      <div class="trust-avatars flex items-center justify-start gap-0 transition-all duration-200 hover:gap-3">
        <div class="aspect-1/1 size-11 rounded-full border-2 border-white shadow-md -mx-1"><img src="<?= asset_url('assets/images/customer/5.webp'); ?>" class="size-full rounded-full object-cover" /></div>
        <div class="aspect-1/1 size-11 rounded-full border-2 border-white shadow-md -mx-1"><img src="<?= asset_url('assets/images/customer/6.webp'); ?>" class="size-full rounded-full object-cover" /></div>
        <div class="aspect-1/1 size-11 rounded-full border-2 border-white shadow-md -mx-1"><img src="<?= asset_url('assets/images/customer/7.webp'); ?>" class="size-full rounded-full object-cover" /></div>
        <div class="aspect-1/1 size-11 rounded-full border-2 border-white shadow-md -mx-1"><img src="<?= asset_url('assets/images/customer/8.webp'); ?>" class="size-full rounded-full object-cover" /></div>
        <div class="aspect-1/1 size-11 rounded-full border-2 border-white shadow-md -mx-1"><img src="<?= asset_url('assets/images/customer/9.webp'); ?>" class="size-full rounded-full object-cover" /></div>
      </div>
    </div>

    <div class="mt-15 hidden">
      <div class="mt-10 grid grid-cols-1 gap-2 md:grid-cols-3">
        <article class="card bg-slate-100 ring-slate-300 overflow-hidden hover:ring-4 hover:ring-slate-500">
          <video class="block w-full rounded-lg bg-slate-200"
                 src="https://hairtransplant.rrhairclinic.com/wp-content/uploads/2026/06/Ingat-suara-je-boleh-buat-orang-terpukau-Penampilan-pun-main-peranan.-Alhamdulillah-selesai-ses.mp4"
                 poster="https://hairtransplant.rrhairclinic.com/wp-content/uploads/2026/06/vlcsnap-2026-06-15-10h50m20s372.png"
                 controls
                 preload="metadata"
                 controlsList="nodownload"></video>
        </article>

        <article class="card bg-slate-100 ring-slate-300 overflow-hidden hover:ring-4 hover:ring-slate-500">
          <video class="block w-full rounded-lg bg-slate-200"
                 src="https://hairtransplant.rrhairclinic.com/wp-content/uploads/2026/06/Misi-Transformasi-Rambut-Fido-Rahman-BermulaSaksikan-bagaimana-pelakon-dan-model-Fido-Rahman-.mp4"
                 poster="https://hairtransplant.rrhairclinic.com/wp-content/uploads/2026/06/vlcsnap-2026-06-15-10h51m19s964.png"
                 controls
                 preload="metadata"
                 controlsList="nodownload"></video>
        </article>

        <article class="card bg-slate-100 ring-slate-300 overflow-hidden hover:ring-4 hover:ring-slate-500">
          <video class="block w-full rounded-lg bg-slate-200"
                 src="https://hairtransplant.rrhairclinic.com/wp-content/uploads/2026/06/3-bulan-selepas-tanam-rambut-FUE-Syed-Aiman-datang-semula-ke-RR-Hair-Clinic-untuk-sesi-PRP-Dala.mp4"
                 poster="https://hairtransplant.rrhairclinic.com/wp-content/uploads/2026/06/vlcsnap-2026-06-15-10h52m04s066.png"
                 controls
                 preload="metadata"
                 controlsList="nodownload"></video>
        </article>
      </div>
    </div> 
  </div>
</section>
