<?php

$page_title   = 'Hair Transplant | RR Hair Clinic';
$page_current = 'treatments';

$service_detail = [
  'title'         => 'Hair Transplant',
  'intro'         => 'A personalised approach to hair restoration, with your donor area, '
    . 'hairline and long-term goals at the centre of the plan.',
  'listing_url'   => asset_url('treatments'),
  'listing_label' => 'All treatments',
  'facts'         => [
    ['label' => 'Treatment', 'value' => 'Hair restoration'],
    ['label' => 'Suitability', 'value' => 'Doctor assessment'],
    ['label' => 'Technique', 'value' => 'Discussed at consultation'],
    ['label' => 'Treatment plan', 'value' => 'Personalised'],
    ['label' => 'Price', 'value' => 'Quoted after assessment'],
  ],
  'consultation_label' => 'Discuss this treatment',
  'overview_title'     => "Who it's for",
  'overview_text'      => 'If you are exploring hair restoration for your hairline, crown or other areas, '
    . 'a consultation is the starting point. Your doctor will assess your hair loss and donor area, '
    . 'discuss your expectations and explain whether a transplant is a suitable option.',
  'steps_title' => 'The process, step by step',
  'steps'       => [
    [
      'title'       => 'Consultation & assessment',
      'description' => 'Discuss your hair loss history, concerns and goals. Your doctor assesses '
        . 'your scalp and donor area before recommending a plan.',
    ],
    [
      'title'       => 'Hairline & treatment planning',
      'description' => 'Review the proposed treatment area, technique, costs and expectations. '
        . 'There is time to ask questions before making a decision.',
    ],
    [
      'title'       => 'Your procedure',
      'description' => 'The team walks you through the agreed procedure and explains what to '
        . 'expect during your appointment.',
    ],
    [
      'title'       => 'Aftercare & follow-up',
      'description' => 'Receive care instructions and a follow-up plan so you know how to look '
        . 'after the treated area and when to contact the clinic.',
    ],
  ],
  'timeline_title' => 'Your aftercare journey',
  'timeline'       => [
    [
      'title'       => 'Before you leave',
      'description' => 'Go through your aftercare instructions and confirm how to reach the team.',
    ],
    [
      'title'       => 'Initial follow-up',
      'description' => 'Discuss your recovery and any questions at the review arranged by your doctor.',
    ],
    [
      'title'       => 'Progress appointments',
      'description' => 'Review changes over time and discuss ongoing scalp and hair care.',
    ],
    [
      'title'       => 'Long-term review',
      'description' => 'Look back at your progress and talk through the next steps in your care plan.',
    ],
  ],
  'timeline_note' => 'Appointment timing and recovery guidance are tailored to your procedure by your doctor.',
  'related_title' => 'Other treatments',
  'related_items' => [
    [
      'title' => 'Medical Hair Loss Treatment',
      'href'  => asset_url('treatments#medical-hair-loss-treatment'),
    ],
    [
      'title' => 'PRP Hair Treatment',
      'href'  => asset_url('treatments#prp-hair-treatment'),
    ],
    [
      'title' => 'Scalp & Hair Growth Treatment',
      'href'  => asset_url('treatments#scalp-treatment'),
    ],
  ],
];

$testimonial_options = [
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
];

$footer_options = [
  'placeholder_images' => true,
  'consultation_url'   => 'https://wa.me/601116741858',
];

component('navbar');
component('service-detail', $service_detail);
?>
<section class="section py-20 bg-white">
  <div class="container">
    <?php
    // Reuse the current testimonial preview content from the case-study section.
    component('testimonial', $testimonial_options);
    ?>
  </div>
</section>
<?php
section('surgeon');
section('faq');
section('footer', $footer_options);
