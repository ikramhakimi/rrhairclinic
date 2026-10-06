<?php
$section_headline = [
  'topic'    => 'Hair Loss Issues',
  'title'    => 'Understand your hair loss before choosing a treatment',
  'subtitle' => "Different patterns of hair loss need different treatment plans.\n"
    . 'Start by identifying what you are experiencing.',
];

$hair_loss_cards = [
  [
    'title'       => 'Hair Loss',
    'title_class' => 'font-medium text-lg text-slate-950 transition duration-200 ease-out group-hover:text-indigo-700',
    'description' => 'Changes in hair density, growth or shedding.',
    'image'       => 'assets/images/hair-loss/hair-loss-thinning-hair.webp',
    'image_alt'   => 'Thinning hair with reduced density across the scalp',
    'fade_width'  => 'w-30',
    'lazy_loading' => false,
  ],
  [
    'title'       => 'Male Pattern Baldness',
    'title_class' => 'font-medium text-lg text-slate-950 transition duration-200 ease-out group-hover:text-indigo-700',
    'description' => 'Gradual thinning at the temples, crown or hairline.',
    'image'       => 'assets/images/hair-loss/hair-loss-male-pattern-baldness.webp',
    'image_alt'   => 'Male pattern baldness hair loss with visible crown thinning',
    'fade_width'  => 'w-1/3',
    'lazy_loading' => true,
  ],
  [
    'title'       => 'Female Pattern Hair Loss',
    'title_class' => 'font-medium text-lg text-slate-950 transition duration-200 ease-out group-hover:text-indigo-700',
    'description' => 'Thinning across the scalp, wider parting or reduced volume.',
    'image'       => 'assets/images/hair-loss/hair-loss-female-hair-loss.webp',
    'image_alt'   => 'Female hair loss with diffuse thinning and wider centre parting',
    'fade_width'  => 'w-30',
    'lazy_loading' => true,
  ],
  [
    'title'       => 'Receding Hairline',
    'title_class' => 'font-medium text-lg text-slate-950 transition duration-200 ease-out group-hover:text-indigo-700',
    'description' => 'Hairline moving back at the temples or forehead.',
    'image'       => 'assets/images/hair-loss/hair-loss-receding-hairline.webp',
    'image_alt'   => 'Receding hairline with temple and frontal hair loss',
    'fade_width'  => 'w-30',
    'lazy_loading' => true,
  ],
  [
    'title'       => 'Thinning Hair',
    'title_class' => 'font-medium text-lg text-slate-950 transition duration-200 ease-out group-hover:text-indigo-700',
    'description' => 'Reduced density or weaker strands that leave hair looking finer.',
    'image'       => 'assets/images/hair-loss/hair-loss-thinning-hair.webp',
    'image_alt'   => 'Thinning hair with reduced density across the scalp',
    'fade_width'  => 'w-30',
    'lazy_loading' => true,
  ],
  [
    'title'       => 'Crown Hair Loss',
    'title_class' => 'font-medium text-lg text-slate-950 transition duration-200 ease-out group-hover:text-indigo-700',
    'description' => 'Visible thinning or balding at the crown.',
    'image'       => 'assets/images/hair-loss/hair-loss-crown-hair-loss.webp',
    'image_alt'   => 'Crown hair loss with visible thinning around the vertex',
    'fade_width'  => 'w-30',
    'lazy_loading' => true,
  ],
  [
    'title'       => 'Excessive Hair Shedding',
    'title_class' => 'font-medium text-lg text-slate-950 transition duration-200 ease-out group-hover:text-indigo-700',
    'description' => 'More hair falling out than usual each day.',
    'image'       => 'assets/images/hair-loss/hair-loss-hair-shedding.webp',
    'image_alt'   => 'Hair shedding with subtle loose strands and reduced hair density',
    'fade_width'  => 'w-30',
    'lazy_loading' => true,
  ],
];

$carousel_controls = [
  'hook'          => 'hair-loss',
  'slide_label'   => 'hair loss',
  'wrapper_class' => 'relative mb-5',
];

$hairloss_reasons = [
  [
    'category'    => 'Nutrition',
    'title'       => 'Nutritional Deficiencies',
    'description' => 'Low iron, zinc, biotin, or protein can weaken hair and increase shedding.',
    'image'       => 'assets/images/hair-loss/reason-vitamin-deficiencies.webp',
    'image_alt'   => 'Malay woman checking her hair while sitting down to a balanced meal',
  ],
  [
    'category'    => 'Medical',
    'title'       => 'Health Conditions & Medications',
    'description' => 'Chronic conditions, autoimmune disorders, and some medications can cause hair loss.',
    'image'       => 'assets/images/hair-loss/reason-health-conditions-medications.webp',
    'image_alt'   => 'Malay man discussing medication with a doctor',
  ],
  [
    'category'    => 'Scalp Care',
    'title'       => 'Scalp Health Issues',
    'description' => 'Dandruff, infections, and inflammation can disrupt scalp health and hair growth.',
    'image'       => 'assets/images/hair-loss/reason-scalp-health.webp',
    'image_alt'   => 'Malay man checking a flaky area of his scalp in a mirror',
  ],
  [
    'category'    => 'Inherited',
    'title'       => 'Family History (Genetics)',
    'description' => 'Family history can increase your risk of androgenetic alopecia, a common cause of hair loss.',
    'image'       => 'assets/images/hair-loss/reason-family-history.webp',
    'image_alt'   => 'Malay father and son looking through a family photo album',
  ],
  [
    'category'    => 'Biology',
    'title'       => 'Hormonal Changes',
    'description' => 'Pregnancy, menopause, and thyroid changes can disrupt the hair cycle and increase shedding.',
    'image'       => 'assets/images/hair-loss/reason-hormonal-changes.webp',
    'image_alt'   => 'Pregnant Malay woman checking her hair part in a mirror',
  ],
  [
    'category'    => 'Lifestyle',
    'title'       => 'Physical or Emotional Stress',
    'description' => 'Physical or emotional stress can trigger telogen effluvium, causing more shedding than usual.',
    'image'       => 'assets/images/hair-loss/reason-stress.webp',
    'image_alt'   => 'Malay woman sitting at her desk beside a hairbrush with loose strands',
  ],
];
?>

<section class="section section-hairloss js-hair-loss-carousel">
  <div class="container">
    <?php component('section-headline', $section_headline); ?>
  </div>

  <div class="carousel-hairloss relative -mx-6 md:mx-0 mt-5 sm:-mt-5">
    <div class="container md:w-[calc(100%-5rem)]">
      <?php component('carousel-controls', $carousel_controls); ?>
      <div id="hair-loss-track" class="grid grid-cols-1 gap-2 md:grid-cols-4 md:py-0 px-6 md:px-0 js-hair-loss-track"
           role="group" aria-roledescription="carousel" aria-label="Hair loss issues">
        <?php foreach ($hair_loss_cards as $hair_loss_card) { ?>
        <div
           class="card group flex flex-col px-4 pt-3 sm:px-6 sm:pt-5 overflow-hidden my-px">
          <h3 class="<?= e($hair_loss_card['title_class']); ?> mb-10"><?= e($hair_loss_card['title']); ?></h3>
          <p class="-mt-8 mb-5 text-sm text-slate-500 transition duration-200 ease-out group-hover:text-slate-600">
            <?= e($hair_loss_card['description']); ?>
          </p>
          <div class="relative aspect-4/3 bg-white rounded-xl mt-auto -mx-4 sm:-mx-6 overflow-hidden">
            <img
              src="<?= e($hair_loss_card['image']); ?>"
              alt="<?= e($hair_loss_card['image_alt']); ?>"
              width="1448"
              height="1086"
              <?php if ($hair_loss_card['lazy_loading']) { ?>
              loading="lazy"
              <?php } ?>
              decoding="async"
              class="size-full object-cover transition duration-200 ease-out"
            />
            <div class="pointer-events-none absolute inset-y-0 left-0 <?= e($hair_loss_card['fade_width']); ?> bg-gradient-to-r from-white to-transparent hidden sm:block"></div>
            <div class="pointer-events-none absolute inset-y-0 right-0 <?= e($hair_loss_card['fade_width']); ?> bg-gradient-to-l from-white to-transparent hidden sm:block"></div>
          </div>
        </div>
        <?php } ?>
        <a href="#"
           class="card group flex flex-col items-center justify-center p-6 pb-4 my-px
                  overflow-hidden hover:-translate-y-2---hover:shadow-xl---hover:ring-2
                  hover:shadow-indigo-300---hover:ring-indigo-600">
          <span class="font-medium text-lg text-slate-950 transition duration-200 ease-out group-hover:text-indigo-700">View more</span>
          <span class="mt-4 text-slate-900" aria-hidden="true">
            <?php svg('arrow-right-line', 'size-6'); ?>
          </span>
        </a>
      </div>
    </div>
    <div aria-hidden="true"
         class="pointer-events-none absolute -inset-y-3 left-0 z-10 w-6 bg-gradient-to-r from-slate-100 to-transparent md:w-15 lg:w-24 hidden sm:block"></div>
    <div aria-hidden="true"
         class="pointer-events-none absolute -inset-y-3 right-0 z-10 w-6 bg-gradient-to-l from-slate-100 to-transparent md:w-15 lg:w-24 hidden sm:block"></div>


  </div>

  <div class="container sm:mt-10 sm:text-center">
    <div class="hairloss-quote text-base sm:text-xl max-w-3xl mt-5 mx-auto">
      <h2 class="font-medium text-slate-600 sm:inline">What can cause hair loss?</h2>
      <p class="text-slate-500 text-sm sm:text-base sm:inline mt-2 sm:mt-0">
        These patterns can have different causes, from genetics and hormonal changes to stress or scalp health.
        Finding the cause helps guide the right treatment.
      </p>
    </div>
    <div class="hairloss-reasons relative mt-4 sm:mt-10">
      <div class="sm:grid sm:grid-cols-3 sm:divide-y-0 sm:-mb-10">
        <?php foreach ($hairloss_reasons as $index => $hairloss_reason) { ?>
        <details class="reasons-item group py-px sm:hidden js-component-faq-item" <?= $index === 0 ? 'open' : ''; ?>>
          <summary class="flex bg-slate-200 group-open:bg-slate-700 rounded-lg px-4 py-3 cursor-pointer list-none items-start justify-between gap-6 [&::-webkit-details-marker]:hidden">
            <span class="text-indigo-700 group-open:text-white"><?= e($hairloss_reason['title']); ?></span>
            <span class="shrink-0 text-slate-400" aria-hidden="true">
              <?php svg(
                'add-line',
                'size-6 transition-transform duration-200 ease-out motion-reduce:transition-none '
                  . 'js-component-faq-icon',
              ); ?>
            </span>
          </summary>
          <div class="faq-content text-slate-700 my-4 max-w-3xl space-y-4 border-l border-slate-200 pl-5 js-component-faq-content">
            <p><?= e($hairloss_reason['description']); ?></p>
            <div class="aspect-3/2 rounded-xl bg-slate-300 mb-5 w-50 overflow-hidden">
              <img
                src="<?= e($hairloss_reason['image']); ?>"
                alt="<?= e($hairloss_reason['image_alt']); ?>"
                width="400"
                height="200"
                loading="lazy"
                decoding="async"
                class="size-full object-cover"
              />
            </div>
          </div>
        </details>
        <div class="hidden sm:block sm:px-5 sm:py-10
                    <?= $index % 3 !== 2 ? 'sm:border-r sm:border-slate-200' : ''; ?>
                    <?= $index < 3 ? 'sm:border-b sm:border-slate-200' : ''; ?>">
          <div class="aspect-2/1 rounded-xl bg-slate-300 mb-5 w-60 mx-auto overflow-hidden shadow-sm shadow-slate-300">
            <img
              src="<?= e($hairloss_reason['image']); ?>"
              alt="<?= e($hairloss_reason['image_alt']); ?>"
              width="400"
              height="200"
              loading="lazy"
              decoding="async"
              class="size-full object-cover"
            />
          </div>
          <div class="uppercase text-xs mb-2 text-slate-500"><?= e($hairloss_reason['category']); ?></div>
          <h3 class="font-medium text-lg text-slate-900 mb-2"><?= e($hairloss_reason['title']); ?></h3>
          <div class="text-sm"><?= e($hairloss_reason['description']); ?></div>
        </div>
        <?php } ?>
      </div>
      <div class="absolute left-0 w-full h-10 bg-gradient-to-b from-slate-100 to-transparent hidden sm:block top-0"></div>
      <div class="absolute left-0 w-full h-10 bg-gradient-to-t from-slate-100 to-transparent hidden sm:block bottom-0"></div>
    </div>

    <div class="hairloss-cta mt-15 hidden">
      <div class="text-lg">Not sure about what your hair issue?</div>
      <div class="sm:flex sm:items-center sm:justify-center gap-2">
        <a href="<?= asset_url('hair-check'); ?>" class="button-lg bg-gradient-to-br w-full sm:w-auto from-purple-500 via-indigo-600 to-indigo-500 text-white text-shadow-2xs text-shadow-indigo-900/50 ring-1 ring-inset ring-indigo-900/50 inline-flex mt-7 transform duration-200 translate-y-0 hover:-translate-y-1 shadow-lg shadow-slate-400 hover:shadow-3xl hover:shadow-slate-500">
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
</section>
