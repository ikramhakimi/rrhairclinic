<?php

$page_title   = 'Hair Loss Treatments | RR Hair Clinic';
$page_current = 'treatments';

component('navbar');
component('service-listing', [
  'topic' => 'Our Treatments',
  'title' => 'Hair loss treatments, built around you.',
  'intro' => 'Explore hair restoration options at RR Hair Clinic. Start with an assessment to understand '
    . 'which approach suits your hair, scalp and goals.',
  'items' => [
    [
      'id'          => 'hair-transplant',
      'title'       => 'Hair Transplant',
      'description' => 'Explore a personalised approach to hair restoration, from assessing your donor area '
        . 'to planning your hairline and follow-up care.',
      'points'      => ['Donor assessment', 'Hairline planning', 'Aftercare guidance'],
      'href'        => asset_url('treatments-single'),
      'link_label'  => 'View treatment',
    ],
    [
      'id'          => 'medical-hair-loss-treatment',
      'title'       => 'Medical Hair Loss Treatment',
      'description' => 'Discuss medical treatment options with your doctor, including suitability, '
        . 'ongoing care and what to expect from your plan.',
      'points'      => ['Doctor consultation', 'Personalised plan', 'Progress reviews'],
      'href'        => 'https://wa.me/601116741858?text=I%20would%20like%20to%20discuss%20medical%20hair%20loss%20treatment.',
      'link_label'  => 'Ask about treatment',
    ],
    [
      'id'          => 'prp-hair-treatment',
      'title'       => 'PRP Hair Treatment',
      'description' => 'Find out where PRP may fit within your hair care plan. Your consultation covers '
        . 'the procedure, suitability and follow-up appointments.',
      'points'      => ['Suitability assessment', 'Treatment planning', 'Follow-up care'],
      'href'        => 'https://wa.me/601116741858?text=I%20would%20like%20to%20discuss%20PRP%20hair%20treatment.',
      'link_label'  => 'Ask about treatment',
    ],
    [
      'id'          => 'scalp-treatment',
      'title'       => 'Scalp & Hair Growth Treatment',
      'description' => 'Talk through your scalp concerns and daily hair care routine, then discuss '
        . 'the care options available for your needs.',
      'points'      => ['Scalp assessment', 'Care advice', 'Ongoing support'],
      'href'        => 'https://wa.me/601116741858?text=I%20would%20like%20to%20discuss%20scalp%20treatment.',
      'link_label'  => 'Ask about treatment',
    ],
  ],
  'additional_title' => 'Also offered',
  'additional_items' => [
    [
      'title'       => 'Hair Loss Consultation',
      'description' => 'A starting point for understanding your options.',
      'href'        => 'https://wa.me/601116741858',
    ],
    [
      'title'       => 'Exosome Hair Treatment',
      'description' => 'Discuss suitability and treatment details with our team.',
      'href'        => 'https://wa.me/601116741858?text=I%20would%20like%20to%20ask%20about%20exosome%20hair%20treatment.',
    ],
    [
      'title'       => 'Understand Your Hair Loss',
      'description' => 'Explore the concerns we assess at the clinic.',
      'href'        => asset_url('hair-loss'),
    ],
  ],
]);
?>
<section class="section py-20 bg-white">
  <div class="container">
    <?php
    // Reuse the current testimonial preview content from the case-study section.
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
</section>
<?php
section('surgeon');
section('faq');
section('footer', [
  'placeholder_images' => true,
  'consultation_url'   => 'https://wa.me/601116741858',
]);
