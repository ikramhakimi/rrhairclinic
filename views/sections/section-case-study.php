<section class="section section-case-study py-20">
  <div class="container">
    <div class="section-headline max-w-2xl mx-auto text-center">
      <div class="headline-topic mb-5 text-xs text-slate-500 uppercase">Our Results</div>
      <h2 class="headline-title text-4xl text-slate-950">Results you can actually see.</h2>
      <div class="headline-subtitle mt-5">Real patients. Real treatment journeys. Real changes over time — with photos that show what progress can actually look like.</div>
    </div>

    <div class="mt-10 max-w-4xl mx-auto text-center">
      <div class="bg-slate-100 ring-1 ring-slate-300 rounded-xl aspect-4/2"></div>
      <div class="mt-5">
        <label class="relative inline-flex cursor-pointer items-center justify-center gap-4 text-sm font-medium sm:text-base">
          <input type="checkbox"
                 class="peer absolute inset-0 z-10 cursor-pointer opacity-0"
                 role="switch"
                 aria-label="Compare before and after treatment">
          <span class="w-32 text-right text-slate-950 transition-colors peer-checked:text-inherit sm:w-36">Before Treatment</span>
          <span class="h-8 w-16 rounded-full bg-slate-200 ring-1 ring-slate-300"></span>
          <span class="pointer-events-none absolute left-[calc(50%-2rem+0.25rem)] size-6 rounded-full bg-white shadow-sm transition peer-checked:translate-x-8 peer-checked:bg-slate-900"></span>
          <span class="w-32 text-left transition-colors peer-checked:text-slate-950 sm:w-36">After Treatment</span>
        </label>
      </div>
      <div class="mt-5">
        <a href="#">Start my transformation</a>
        <a href="#">Analyse my Hair</a>
      </div>
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
        'before_image' => 'assets/images/case-studies/case-1-before.png',
        'after_image'  => 'assets/images/case-studies/case-1-after.png',
        'before_alt'   => 'Before treatment with visible crown and frontal hair thinning',
        'after_alt'    => 'After treatment with improved crown and frontal hair density',
        'hair_issue'   => 'Crown & frontal thinning',
        'age'          => 39,
        'treatment'    => 'FUE Hair Transplant',
        'results_at'   => '11 months',
        'grafts'       => '3,600',
      ],
    ];
    ?>

    <div class="mt-10 grid grid-cols-1 gap-6 md:grid-cols-2">
      <?php foreach ($case_studies as $case_study) { ?>
      <article class="card bg-white ring-1 ring-slate-200 p-3 rounded-2xl">
        <div class="grid grid-cols-2 gap-1">
          <figure class="relative overflow-hidden rounded-lg bg-slate-200">
            <img
              src="<?= e($case_study['before_image']); ?>"
              alt="<?= e($case_study['before_alt']); ?>"
              width="1122"
              height="1402"
              loading="lazy"
              decoding="async"
              class="aspect-[6/7] size-full object-cover"
            />
            <figcaption class="absolute bottom-2 left-2 rounded-full bg-slate-950/80 px-3 py-1 text-xs font-medium uppercase text-white">
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
              class="aspect-[6/7] size-full object-cover"
            />
            <figcaption class="absolute bottom-2 left-2 rounded-full bg-teal-700/90 px-3 py-1 text-xs font-medium uppercase text-white">
              After
            </figcaption>
          </figure>
        </div>

        <div class="p-3">
          <div class="flex-split border-b border-slate-200 mb-5 pb-4 text-slate-900">
            <div>
              <div class="text-xs text-slate-400 uppercase mb-1">Hair Issue</div>
              <div><?= e($case_study['hair_issue']); ?> (Age <?= e($case_study['age']); ?>)</div>
            </div>
            <div class="text-right">
              <div class="text-xs text-slate-400 uppercase mb-1">Treatment</div>
              <div><?= e($case_study['treatment']); ?></div>
            </div>
          </div>
          <div class="text-center text-sm">
            Results at <?= e($case_study['results_at']); ?>
            &middot;
            <span class="text-green-600"><?= e($case_study['grafts']); ?> grafts</span>
          </div>
        </div>
      </article>
      <?php } ?>
    </div>

    <div class="mt-16">
      <div class="section-headline max-w-3xl mx-auto text-center">
        <h2 class="headline-title text-4xl text-slate-950">Real patients. Real results.<br>In their own words.</h2>
      </div>

      <div class="mt-10 grid grid-cols-1 gap-6 md:grid-cols-3">
        <article class="card bg-slate-100 ring-1 ring-slate-300 rounded-xl overflow-hidden transition duration-200 hover:ring-4 hover:ring-slate-500">
          <video class="block w-full rounded-xl bg-slate-200"
                 src="https://hairtransplant.rrhairclinic.com/wp-content/uploads/2026/06/Ingat-suara-je-boleh-buat-orang-terpukau-Penampilan-pun-main-peranan.-Alhamdulillah-selesai-ses.mp4"
                 poster="https://hairtransplant.rrhairclinic.com/wp-content/uploads/2026/06/vlcsnap-2026-06-15-10h50m20s372.png"
                 controls
                 preload="metadata"
                 controlsList="nodownload"></video>
        </article>

        <article class="card bg-slate-100 ring-1 ring-slate-300 rounded-xl overflow-hidden transition duration-200 hover:ring-4 hover:ring-slate-500">
          <video class="block w-full rounded-xl bg-slate-200"
                 src="https://hairtransplant.rrhairclinic.com/wp-content/uploads/2026/06/Misi-Transformasi-Rambut-Fido-Rahman-BermulaSaksikan-bagaimana-pelakon-dan-model-Fido-Rahman-.mp4"
                 poster="https://hairtransplant.rrhairclinic.com/wp-content/uploads/2026/06/vlcsnap-2026-06-15-10h51m19s964.png"
                 controls
                 preload="metadata"
                 controlsList="nodownload"></video>
        </article>

        <article class="card bg-slate-100 ring-1 ring-slate-300 rounded-xl overflow-hidden transition duration-200 hover:ring-4 hover:ring-slate-500">
          <video class="block w-full rounded-xl bg-slate-200"
                 src="https://hairtransplant.rrhairclinic.com/wp-content/uploads/2026/06/3-bulan-selepas-tanam-rambut-FUE-Syed-Aiman-datang-semula-ke-RR-Hair-Clinic-untuk-sesi-PRP-Dala.mp4"
                 poster="https://hairtransplant.rrhairclinic.com/wp-content/uploads/2026/06/vlcsnap-2026-06-15-10h52m04s066.png"
                 controls
                 preload="metadata"
                 controlsList="nodownload"></video>
        </article>
      </div>
    </div>

    <!-- <div class="flex items-center whitespace-nowrap text-xs text-slate-500 uppercase mt-15">
      <div class="pr-5">Patient stories</div>
      <div class="w-full h-px border-b border-dashed border-slate-200"></div>
    </div>

    <div class="testimonial max-w-2xl mt-10">
      <h2 class="testimonial-title text-2xl leading-8 text-slate-950">Eleven months on, my barber asked which clinic I went to - he couldn't find the donor area. That's when I knew it was worth it.</h2>
      <div class="testimonial-author mt-5 flex items-center gap-3">
        <div class="rounded-full size-12 bg-slate-500"></div>
        <div>
          <div class="font-medium">Ikram Hakimi</div>
          <div class="text-sm text-slate-500">DHI Implantation · 3,500 grafts · Kelantan</div>
        </div>
      </div>
    </div>

    <div class="mt-6 grid grid-cols-1 gap-5 md:grid-cols-3">
      <figure class="card flex flex-col bg-slate-100 ring-1 ring-slate-300 p-5 rounded-lg">
        <blockquote class="text-lg font-medium text-slate-800">
          Eleven months on, my barber asked which clinic I went to - he couldn&#39;t find the donor area.
          That&#39;s when I knew it was worth it.
        </blockquote>
        <figcaption class="mt-auto flex items-center gap-3 pt-10">
          <span class="size-12 rounded-full bg-slate-200" aria-hidden="true"></span>
          <span>
            <span class="block text-slate-800">Marcus Deller</span>
            <span class="block text-sm text-slate-600">Sapphire FUE &middot; 3,400 grafts &middot; Berlin</span>
          </span>
        </figcaption>
      </figure>

      <figure class="card flex flex-col bg-slate-100 ring-1 ring-slate-300 p-5 rounded-lg">
        <blockquote class="text-lg font-medium text-slate-800">
          The new hairline fits my face so naturally that friends only noticed I looked younger, not that
          I&#39;d had a transplant.
        </blockquote>
        <figcaption class="mt-auto flex items-center gap-3 pt-10">
          <span class="size-12 rounded-full bg-slate-200" aria-hidden="true"></span>
          <span>
            <span class="block text-slate-800">James Carter</span>
            <span class="block text-sm text-slate-600">DHI Implantation &middot; 2,800 grafts &middot; London</span>
          </span>
        </figcaption>
      </figure>

      <figure class="card flex flex-col bg-slate-100 ring-1 ring-slate-300 p-5 rounded-lg">
        <blockquote class="text-lg font-medium text-slate-800">
          The team explained every step, and the recovery was much easier than I expected. The results
          speak for themselves.
        </blockquote>
        <figcaption class="mt-auto flex items-center gap-3 pt-10">
          <span class="size-12 rounded-full bg-slate-200" aria-hidden="true"></span>
          <span>
            <span class="block text-slate-800">Daniel Novak</span>
            <span class="block text-sm text-slate-600">Sapphire FUE &middot; 3,900 grafts &middot; Prague</span>
          </span>
        </figcaption>
      </figure>
    </div> -->
  </div>
</section>
