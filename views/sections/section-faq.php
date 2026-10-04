<?php

/**
 * Section: FAQ
 * Purpose: Displays grouped questions using the existing accordion UI.
 * Structure: Category loop with a shared FAQ item template, followed by the checkup CTA.
 * Data: $faq_categories contains a title, description and items with question and answer text.
 */

$faq_categories = [
  [
    'title'       => 'Hair Loss & Diagnosis',
    'description' => 'Understand common hair-loss concerns and what to expect from a clinical assessment.',
    'items'       => [
      [
        'question' => 'Why am I losing my hair?',
        'answer'   => 'Hair loss can have many causes, including genetics, hormonal changes, stress, '
          . 'nutritional factors, scalp conditions, certain medications and ageing. The first step is '
          . 'understanding the pattern and possible cause before deciding on treatment.',
      ],
      [
        'question' => 'How do I know what type of hair loss I have?',
        'answer'   => 'Hair loss can appear differently from person to person — from a receding hairline and '
          . 'crown thinning to diffuse thinning or increased shedding. A clinical assessment helps '
          . 'identify the pattern, scalp condition and other factors that may be contributing.',
      ],
      [
        'question' => 'Should I wait until my hair loss gets worse before seeking treatment?',
        'answer'   => 'Not necessarily. Some forms of hair loss are easier to manage when addressed earlier. An '
          . 'assessment can help determine whether you need treatment now, monitoring, or simply '
          . 'reassurance.',
      ],
      [
        'question' => 'Is hair loss different for men and women?',
        'answer'   => 'Yes. Men commonly experience patterned recession around the hairline, temples and crown, '
          . 'while women may experience wider parting or more diffuse thinning. However, every case '
          . 'is different and should be assessed individually.',
      ],
    ],
  ],
  [
    'title'       => 'Treatments & Options',
    'description' => 'Explore surgical and non-surgical options, and how a treatment plan is chosen.',
    'items'       => [
      [
        'question' => 'What treatments are available for hair loss?',
        'answer'   => 'Treatment depends on the cause and stage of hair loss. Options may include medical '
          . 'hair-loss treatment, PRP therapy, scalp treatments, laser therapy, hair transplantation '
          . 'and other supportive treatments.',
      ],
      [
        'question' => 'Do I need a hair transplant?',
        'answer'   => 'Not everyone does. Some patients may benefit from non-surgical treatment, especially '
          . 'when hair loss is still developing or existing follicles can potentially be preserved. '
          . 'Hair transplantation is generally considered when restoring areas where significant '
          . 'permanent hair loss has already occurred.',
      ],
      [
        'question' => 'Can hair loss be treated without surgery?',
        'answer'   => 'Yes. Depending on the condition, non-surgical approaches may help reduce further loss, '
          . 'improve scalp health or support existing hair. Your treatment plan should depend on the '
          . 'diagnosis rather than starting with a specific procedure.',
      ],
      [
        'question' => 'Can different treatments be combined?',
        'answer'   => 'In some cases, yes. Hair restoration may involve more than one approach — for example, '
          . 'managing existing hair while restoring areas that have already lost significant density. '
          . 'The combination depends on your condition and treatment goals.',
      ],
    ],
  ],
  [
    'title'       => 'Hair Transplant',
    'description' => 'Learn about the procedure, suitability, graft planning and comfort during treatment.',
    'items'       => [
      [
        'question' => 'How does a hair transplant work?',
        'answer'   => 'A hair transplant relocates healthy hair follicles from a donor area — usually at the '
          . 'back or sides of the scalp — into areas affected by permanent hair loss. The placement '
          . 'and direction of the grafts are planned to create a natural-looking result.',
      ],
      [
        'question' => 'Am I suitable for a hair transplant?',
        'answer'   => 'Suitability depends on several factors including your hair-loss pattern, donor hair '
          . 'availability, scalp condition, medical history and expectations. A consultation is '
          . 'needed before confirming whether transplantation is appropriate.',
      ],
      [
        'question' => 'How many grafts will I need?',
        'answer'   => 'There is no standard number. The graft requirement depends on the size of the area being '
          . 'restored, existing density, donor availability, hair characteristics and the result you '
          . 'are trying to achieve.',
      ],
      [
        'question' => 'Is a hair transplant painful?',
        'answer'   => 'Hair transplantation is normally performed under local anaesthesia. Patients may feel '
          . 'some pressure or temporary discomfort during certain stages, but the treatment area is '
          . 'numbed during the procedure.',
      ],
    ],
  ],
  [
    'title'       => 'Results & Expectations',
    'description' => 'Find answers about hair growth, natural-looking results and long-term expectations.',
    'items'       => [
      [
        'question' => 'When will I see results after a hair transplant?',
        'answer'   => 'Hair transplant results develop gradually rather than immediately. The transplanted hair '
          . 'goes through several stages of healing, shedding and new growth before the final '
          . 'appearance develops over the following months.',
      ],
      [
        'question' => 'Will my transplanted hair look natural?',
        'answer'   => 'Natural-looking results depend heavily on planning — particularly the hairline design, '
          . 'graft distribution, angle, direction and how the new hair integrates with your existing '
          . 'hair.',
      ],
      [
        'question' => 'Will my hair continue to thin after a transplant?',
        'answer'   => 'A transplant restores hair in selected areas, but existing non-transplanted hair may '
          . 'continue to change over time. This is why long-term planning and management of existing '
          . 'hair can be important.',
      ],
      [
        'question' => 'Can you guarantee a specific density or result?',
        'answer'   => 'Hair restoration is a medical procedure and results vary between individuals. Factors '
          . 'such as donor density, hair characteristics, healing, the extent of hair loss and future '
          . 'progression all influence the final result.',
      ],
    ],
  ],
  [
    'title'       => 'Recovery & Aftercare',
    'description' => 'Know what to expect after your procedure, from scalp care to returning to daily activities.',
    'items'       => [
      [
        'question' => 'How long does recovery take?',
        'answer'   => 'Many patients are able to return to light daily activities within a few days. Small '
          . 'scabs, redness or mild swelling may be visible during the early healing period and '
          . 'gradually settle.',
      ],
      [
        'question' => 'When can I return to work?',
        'answer'   => 'This depends on the type of work you do and how comfortable you are with the appearance '
          . 'of the scalp during the early recovery period. Many patients plan several days away from '
          . 'work before returning.',
      ],
      [
        'question' => 'When can I exercise again?',
        'answer'   => 'Strenuous exercise is usually avoided during the early healing period because sweating, '
          . 'friction and increased blood pressure can affect the treated area. Your clinical team '
          . 'will advise when you can gradually resume exercise.',
      ],
      [
        'question' => 'What happens after my procedure?',
        'answer'   => 'You will receive aftercare instructions covering scalp care, washing, medication if '
          . 'prescribed and activities to avoid. Follow-up allows the clinic to monitor healing and '
          . 'hair growth as your result develops.',
      ],
    ],
  ],
  [
    'title'       => 'Consultation, Pricing & Privacy',
    'description' => 'Plan your consultation with answers about costs, initial assessments and photo privacy.',
    'items'       => [
      [
        'question' => 'How much does hair-loss treatment cost?',
        'answer'   => 'Cost depends on the diagnosis and treatment required. Non-surgical treatments and hair '
          . 'transplantation have different pricing structures, and transplant pricing may also '
          . 'depend on the complexity and extent of the procedure.',
      ],
      [
        'question' => 'Can I get an estimate before visiting the clinic?',
        'answer'   => 'You can start by sharing clear photos of your hairline, top, crown and donor area for an '
          . 'initial assessment. This can help the team understand your concern before recommending '
          . 'the next step. A final treatment plan may still require an in-person examination.',
      ],
      [
        'question' => 'What happens during a hair consultation?',
        'answer'   => 'The consultation focuses on your hair-loss pattern, scalp condition, history, '
          . 'expectations and possible treatment options. The goal is to understand your case first '
          . 'before recommending a treatment pathway.',
      ],
      [
        'question' => 'Are the photos I submit kept private?',
        'answer'   => 'Photos submitted for assessment should be handled as personal medical information and '
          . 'used for consultation and treatment planning. If privacy is important to you, you can '
          . 'also ask the clinic how your photographs are stored and who has access to them.',
      ],
    ],
  ],
];

?>
<section class="section section-intro">
  <div class="container">
    <div class="section-headline max-w-2xl mx-autos text-centers mb-10">
      <div class="headline-topic mb-5 text-xs text-slate-500 uppercase"></div>
      <h2 class="headline-title font-semibold text-3xl sm:text-4xl text-slate-950">Frequently Asked Questions</h2>
      <!-- <div class="headline-subtitle mt-5">
        Hair loss can feel complicated. Here are straightforward answers about diagnosis, treatment options,
        hair transplants, recovery and what to expect when you visit RR Hair Clinic.
      </div> -->
    </div>

    <?php foreach ($faq_categories as $faq_category) { ?>
      <div class="faq md:grid md:grid-cols-3 border-t border-slate-300 mt-6">
        <h3 class="col-span-1 faq-category font-medium text-slate-900 text-lg sm:text-xl pt-6 pb-2 sm:py-5">
          <?= e($faq_category['title']); ?>
        </h3>
        <div class="col-span-2">
          <div class="pb-3 sm:py-5 text-slate-500 text-sm md:text-base max-w-md">
            <?= e($faq_category['description']); ?>
          </div>
          <div class="faq-list divide-y divide-slate-300">
          <?php foreach ($faq_category['items'] as $faq_item) { ?>
            <details class="faq-item py-3 sm:py-3 js-component-faq-item">
              <summary
                class="flex cursor-pointer list-none items-start justify-between gap-6 [&::-webkit-details-marker]:hidden"
              >
                <h4 class=" sm:text-lg text-indigo-700"><?= e($faq_item['question']); ?></h4>
                <span class="shrink-0 text-slate-400" aria-hidden="true">
                  <?php svg(
                    'add-line',
                    'size-6 transition-transform duration-200 ease-out motion-reduce:transition-none '
                      . 'js-component-faq-icon',
                  ); ?>
                </span>
              </summary>
              <div
                class="faq-content text-slate-700 my-4 max-w-3xl space-y-4 border-l border-slate-200 pl-8 js-component-faq-content"
              >
                <p><?= e($faq_item['answer']); ?></p>
              </div>
            </details>
          <?php } ?>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</section>
