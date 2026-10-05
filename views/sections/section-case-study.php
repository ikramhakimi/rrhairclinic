<?php
$section_headline = [
  'topic'    => 'Our Results',
  'title'    => "Results you can actually see.\nNothing retouched.",
  'subtitle' => 'Real patients. Real treatment journeys. Real changes over time — '
    . 'with photos that show what progress can actually look like.',
];

// Mockup data for the current case-study cards.
$case_studies = [
  [
    'before_image' => 'assets/images/case-studies/case-1-before.webp',
    'after_image'  => 'assets/images/case-studies/case-1-after.webp',
    'before_alt'   => 'Before treatment with visible crown and frontal hair thinning',
    'after_alt'    => 'After treatment with improved crown and frontal hair density',
    'hair_issue'   => 'Crown & frontal thinning',
    'age'          => 41,
    'treatment'    => 'FUE Hair Transplant',
    'results_at'   => '10 months',
    'grafts'       => '3,400',
  ],
  [
    'before_image' => 'assets/images/case-studies/case-2-before.webp',
    'after_image'  => 'assets/images/case-studies/case-2-after.webp',
    'before_alt'   => 'Before treatment with receding frontal hairline and temple thinning',
    'after_alt'    => 'After treatment with improved frontal hairline and fuller temple coverage',
    'hair_issue'   => 'Receding hairline',
    'age'          => 35,
    'treatment'    => 'FUE Hair Transplant',
    'results_at'   => '12 months',
    'grafts'       => '2,800',
  ],
  [
    'before_image' => 'assets/images/case-studies/case-3-before.webp',
    'after_image'  => 'assets/images/case-studies/case-3-after.webp',
    'before_alt'   => 'Before treatment with visible crown thinning and reduced top density',
    'after_alt'    => 'After treatment with improved crown coverage and top density',
    'hair_issue'   => 'Crown thinning',
    'age'          => 46,
    'treatment'    => 'FUE Hair Transplant',
    'results_at'   => '9 months',
    'grafts'       => '3,200',
  ],
  [
    'before_image' => 'assets/images/case-studies/case-2-before.webp',
    'after_image'  => 'assets/images/case-studies/case-2-after.webp',
    'before_alt'   => 'Before treatment with receding frontal hairline and temple thinning',
    'after_alt'    => 'After treatment with improved frontal hairline and fuller temple coverage',
    'hair_issue'   => 'Receding hairline',
    'age'          => 35,
    'treatment'    => 'FUE Hair Transplant',
    'results_at'   => '12 months',
    'grafts'       => '2,800',
  ],
  [
    'before_image' => 'assets/images/case-studies/case-3-before.webp',
    'after_image'  => 'assets/images/case-studies/case-3-after.webp',
    'before_alt'   => 'Before treatment with visible crown thinning and reduced top density',
    'after_alt'    => 'After treatment with improved crown coverage and top density',
    'hair_issue'   => 'Crown thinning',
    'age'          => 46,
    'treatment'    => 'FUE Hair Transplant',
    'results_at'   => '9 months',
    'grafts'       => '3,200',
  ],
  [
    'before_image' => 'assets/images/case-studies/case-1-before.webp',
    'after_image'  => 'assets/images/case-studies/case-1-after.webp',
    'before_alt'   => 'Before treatment with visible crown and frontal hair thinning',
    'after_alt'    => 'After treatment with improved crown and frontal hair density',
    'hair_issue'   => 'Crown & frontal thinning',
    'age'          => 41,
    'treatment'    => 'FUE Hair Transplant',
    'results_at'   => '10 months',
    'grafts'       => '3,400',
  ],
];

// Preview copy and portraits only; replace with approved patient reviews before publishing.
$review_mockups = [
  [
    'quote'   => 'The consultation gave me a clearer picture of my options and what to expect from treatment.',
    'author'  => 'Amirul Hakim',
    'details' => 'Bangsar, Kuala Lumpur',
    'avatar'  => 'assets/images/customer/2.webp',
  ],
  [
    'quote'   => 'I appreciated how the team explained each step and answered my questions without rushing.',
    'author'  => 'Hafiz Zulkifli',
    'details' => 'TTDI, Kuala Lumpur',
    'avatar'  => 'assets/images/customer/5.webp',
  ],
  [
    'quote'   => 'The follow-up visits helped me understand the changes I was seeing as my hair grew in.',
    'author'  => 'Firdaus Azman',
    'details' => 'Shah Alam, Selangor',
    'avatar'  => 'assets/images/customer/8.webp',
  ],
  [
    'quote'   => 'It was helpful to talk through a plan that considered my hairline and my goals.',
    'author'  => 'Azlan Rahman',
    'details' => 'Petaling Jaya, Selangor',
    'avatar'  => 'assets/images/customer/6.webp',
  ],
  [
    'quote'   => 'Seeing the before-and-after photos helped me ask better questions during my consultation.',
    'author'  => 'Syafiq Ismail',
    'details' => 'Subang Jaya, Selangor',
    'avatar'  => 'assets/images/customer/1.webp',
  ],
  [
    'quote'   => 'The team took time to explain the recovery timeline, so I knew what to look out for.',
    'author'  => 'Faizal Nordin',
    'details' => 'Cheras, Kuala Lumpur',
    'avatar'  => 'assets/images/customer/3.webp',
  ],
  [
    'quote'   => 'I felt comfortable discussing my concerns and the kind of result I hoped to achieve.',
    'author'  => 'Aiman Rosli',
    'details' => 'Ampang, Selangor',
    'avatar'  => 'assets/images/customer/4.webp',
  ],
  [
    'quote'   => 'The follow-up plan was clear, and I could check my progress at each visit.',
    'author'  => 'Khairul Anuar',
    'details' => 'Setia Alam, Selangor',
    'avatar'  => 'assets/images/customer/7.webp',
  ],
];

$star_rating = ['rating' => 5];
?>

<section class="section section-case-study js-case-study-carousel">
  <div class="container relative">
    <?php component('section-headline', $section_headline); ?>

    <div class="results-beforeafter grid grid-cols-3 gap-2 mt-5 sm:mt-10">
      <?php foreach ($case_studies as $case_study_index => $case_study) { ?>
      <article class="card p-2 my-px">
        <div class="grid grid-cols-2 gap-2 relative">
          <figure class="relative overflow-hidden rounded-lg aspect-[2/3] md:aspect-[4/5]">
            <img
              src="<?= e($case_study['before_image']); ?>"
              alt="<?= e($case_study['before_alt']); ?>"
              width="600"
              height="750"
              loading="lazy"
              decoding="async"
              class="size-full object-cover"
            />
            <figcaption class="absolute top-2 left-2 rounded-full bg-slate-950/20 px-3 py-1 text-xs uppercase text-white">
              Before
            </figcaption>
          </figure>

          <figure class="relative overflow-hidden rounded-lg aspect-[2/3] md:aspect-[4/5]">
            <img
              src="<?= e($case_study['after_image']); ?>"
              alt="<?= e($case_study['after_alt']); ?>"
              width="600"
              height="750"
              loading="lazy"
              decoding="async"
              class="size-full object-cover"
            />
            <figcaption class="absolute top-2 right-2 rounded-full bg-slate-950/50 px-3 py-1 text-xs uppercase text-white">
              After
            </figcaption>
          </figure>

          <figcaption class="absolute bottom-2 left-2 rounded-full bg-teal-700/90 px-3 py-1 text-xs font-medium uppercase text-white">
            Age <?= e($case_study['age']); ?>
          </figcaption>
        </div>
        <div class="p-3 pt-4 pb-2 sm:p-4">
          <div class="font-medium sm:text-lg text-slate-900 tracking-tight"><?= e($case_study['hair_issue']); ?></div>
          <div class="mt-1 text-sm sm:flex items-center gap-3">
            <div><?= e($case_study['treatment']); ?></div>
            <div class="w-px h-4 bg-slate-200 hidden sm:block"></div>
            <div class="text-green-600"><?= e($case_study['grafts']); ?> grafts</div>
          </div>
          <div class="text-sm text-slate-500 mt-4">Results at <?= e($case_study['results_at']); ?></div>
        </div>


      </article>
      <?php if ($case_study_index === 2) { ?>
      <div class="col-span-3 hidden md:block">
        <?php component('result-points'); ?>
      </div>
      <?php } ?>
      <?php } ?>
    </div>
  </div>

  <div class="results-review my-5 sm:my-10">
    <div class="container">
      <div class="results-quote sm:text-center text-base sm:text-xl max-w-3xl mx-auto">
        <h2 class="font-medium text-slate-600 sm:inline">
          <span class="sm:hidden">See the results. Discover the journey.</span>
          <span class="hidden sm:inline">See the progress. Get to know the experience.</span>
        </h2>
        <p class="text-slate-500 sm:inline">
          <span class="sm:hidden">
            Photos show the progress. The stories reveal the conversations, questions, and follow-up care behind each journey.
          </span>
          <span class="hidden sm:inline">
            The photos show the visible changes over time. What they cannot show is the conversation that started it, the questions along the way, or the care during follow-up.
          </span>
        </p>
      </div>
    </div>

    <div class="marquee marquee-reviews relative mt-5 sm:mt-10" aria-label="Sample patient review cards">
      <div class="marquee-track">
        <?php for ($review_group = 0; $review_group < 2; $review_group++) { ?>
        <div class="marquee-group"<?= $review_group === 1 ? ' aria-hidden="true"' : ''; ?>>
          <?php foreach ($review_mockups as $review) { ?>
          <div class="review relative bg-gradient-to-br from-slate-200 via-slate-300 to-slate-200 rounded-xl relative flex w-80 sm:w-100 flex-col p-5 sm:px-10 sm:py-8">
            <div class="review-rating relative">
              <?php component('star-rating', $star_rating); ?>
            </div>
            <div class="review-quote relative text-base sm:text-xl text-slate-900 mt-2"><?= e($review['quote']); ?></div>
            <div class="review-author relative flex items-center justify-start mt-auto pt-5">
              <div class="aspect-1/1 size-12 rounded-full border-2 border-white shadow-md shadow-slate-400 mr-2">
                <img
                  src="<?= e(asset_url($review['avatar'])); ?>"
                  alt=""
                  width="44"
                  height="44"
                  loading="lazy"
                  decoding="async"
                  class="size-11 rounded-full object-cover"
                />
              </div>
              <div>
                <div class="font-medium text-slate-900"><?= e($review['author']); ?></div>
                <div class="text-sm text-slate-500"><?= e($review['details']); ?></div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <?php } ?>
      </div>

      <div class="pointer-events-none absolute inset-y-0 left-0 w-30 bg-gradient-to-r from-slate-100 to-transparent hidden sm:block"></div>
      <div class="pointer-events-none absolute inset-y-0 right-0 w-30 bg-gradient-to-l from-slate-100 to-transparent hidden sm:block"></div>
    </div>
  </div>

  <div class="container">
    <div class="results-cta sm:text-center mt-5 sm:mt-15">
      <h3 class="font-medium text-2xl text-slate-900 hidden sm:block">
        See what could be possible for you.
      </h3>
      <div class="text-slate-500 mt-2 max-w-2xl mx-auto">
        <span class="sm:hidden">
          Start with a free hair assessment to discuss your goals, suitable treatments, and what results may be realistic.
        </span>
        <span class="hidden sm:inline">
          Start with a free hair assessment to discuss your goals, explore suitable treatments and understand what results may be realistic for you.
        </span>
      </div>
      <div class="sm:flex sm:items-center sm:justify-center gap-2">
        <a href="<?= asset_url('hair-check'); ?>" class="button-lg bg-gradient-to-br w-full sm:w-auto from-purple-500 via-indigo-600 to-indigo-500 text-white text-shadow-2xs text-shadow-indigo-900/50 ring-1 ring-inset ring-indigo-900/50 inline-flex mt-5 transform duration-200 translate-y-0 hover:-translate-y-1 shadow-lg shadow-slate-400 hover:shadow-3xl hover:shadow-slate-500">
          <div class="flex-split w-full font-normal text-lg">
            <div>Start Free Hair Check</div>
            <div class="size-7 -m-1 -mr-4 ml-5 rounded-full flex items-center justify-center bg-white text-blue-600">
              <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="size-5"><path d="M16.0037 9.41421L7.39712 18.0208L5.98291 16.6066L14.5895 8H7.00373V6H18.0037V17H16.0037V9.41421Z"></path></svg>          </div>
          </div>
        </a>
        <a href="<?= asset_url('hair-check'); ?>"
           class="button-lg w-full sm:w-auto  text-white text-shadow-2xs text-shadow-slate-900/10 mt-7 transform duration-200 translate-y-0 hover:-translate-y-1 shadow-lg shadow-slate-400 hover:shadow-3xl hover:shadow-slate-500
           bg-gradient-to-br from-lime-500 via-green-600 to-emerald-500
           ring-1 ring-inset ring-green-900/50 hidden sm:block">
          <div class="flex-split w-full font-normal text-lg">
            <div>Chat on WhatsApp</div>
          </div>
        </a>
      </div>
      <div class="text-xs text-slate-500 mt-5">A short questionnaire to help us understand your concerns. <br>Preview only · Answers are not sent</div>
    </div>
  </div>




  <div class="container">
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
