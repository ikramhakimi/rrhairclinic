<?php

$page_title   = 'Hair Loss Concerns | RR Hair Clinic';
$page_current = 'hair-loss';

component('navbar');
component('service-listing', [
  'topic' => 'Hair Loss Concerns',
  'title' => 'Understand the changes in your hair.',
  'intro' => 'A changing hairline, reduced volume or more shedding can raise a lot of questions. '
    . 'Explore common hair loss concerns and take the next step towards an assessment.',
  'items' => [
    [
      'id'          => 'male-pattern-baldness',
      'title'       => 'Male Pattern Baldness',
      'description' => 'Noticing changes around your temples, hairline or crown? An assessment helps '
        . 'you understand the pattern and discuss your next steps.',
      'points'      => ['Hairline concerns', 'Crown concerns', 'Personalised assessment'],
      'href'        => asset_url('hair-loss-single'),
      'link_label'  => 'Explore hair loss',
    ],
    [
      'id'          => 'female-hair-loss',
      'title'       => 'Female Pattern Hair Loss',
      'description' => 'If your parting or overall hair volume looks different, talk through the changes '
        . 'with a doctor and explore the assessment options.',
      'points'      => ['Parting concerns', 'Reduced volume', 'Scalp assessment'],
      'href'        => 'https://wa.me/601116741858?text=I%20would%20like%20to%20discuss%20female%20hair%20loss.',
      'link_label'  => 'Discuss your concerns',
    ],
    [
      'id'          => 'receding-hairline',
      'title'       => 'Receding Hairline',
      'description' => 'Understand changes at the front of your hairline. Bring your concerns and '
        . 'goals to a consultation before deciding on a care plan.',
      'points'      => ['Temple concerns', 'Hairline assessment', 'Care planning'],
      'href'        => 'https://wa.me/601116741858?text=I%20would%20like%20to%20discuss%20a%20receding%20hairline.',
      'link_label'  => 'Discuss your concerns',
    ],
    [
      'id'          => 'thinning-hair',
      'title'       => 'Thinning Hair',
      'description' => 'When your hair feels less full, a consultation gives you space to discuss '
        . 'what has changed, your routine and the options available.',
      'points'      => ['Density concerns', 'Hair care review', 'Doctor consultation'],
      'href'        => 'https://wa.me/601116741858?text=I%20would%20like%20to%20discuss%20thinning%20hair.',
      'link_label'  => 'Discuss your concerns',
    ],
  ],
  'additional_title' => 'Other concerns',
  'additional_items' => [
    [
      'title'       => 'Crown Hair Loss',
      'description' => 'Discuss visible changes at the top of your scalp.',
      'href'        => 'https://wa.me/601116741858?text=I%20would%20like%20to%20discuss%20crown%20hair%20loss.',
    ],
    [
      'title'       => 'Hair Shedding',
      'description' => 'Talk through changes in your daily hair fall.',
      'href'        => 'https://wa.me/601116741858?text=I%20would%20like%20to%20discuss%20hair%20shedding.',
    ],
    [
      'title'       => 'Explore Treatments',
      'description' => 'Get to know the hair care options available.',
      'href'        => asset_url('treatments'),
    ],
  ],
]);
section('footer', [
  'placeholder_images' => true,
  'consultation_url'   => 'https://wa.me/601116741858',
]);
