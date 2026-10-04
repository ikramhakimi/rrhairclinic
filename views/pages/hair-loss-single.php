<?php

$page_title   = 'Male Pattern Baldness | RR Hair Clinic';
$page_current = 'hair-loss';

component('navbar');
component('service-detail', [
  'title'         => 'Male Pattern Baldness',
  'intro'         => 'Understand changes around your hairline and crown, then explore a care plan '
    . 'that starts with a personal assessment.',
  'listing_url'   => asset_url('hair-loss'),
  'listing_label' => 'All hair loss concerns',
  'facts'         => [
    ['label' => 'Concern', 'value' => 'Male pattern baldness'],
    ['label' => 'Areas to assess', 'value' => 'Hairline & crown'],
    ['label' => 'First step', 'value' => 'Doctor consultation'],
    ['label' => 'Care options', 'value' => 'Based on assessment'],
    ['label' => 'Follow-up', 'value' => 'Personalised reviews'],
  ],
  'consultation_label' => 'Book an assessment',
  'overview_title'     => 'Understanding your hair loss',
  'overview_text'      => 'If you have noticed a change in your hairline or crown, you may be wondering '
    . 'what it means and what to do next. A consultation gives your doctor the chance to review your '
    . 'hair loss history, examine your scalp and discuss your concerns before recommending care.',
  'steps_title' => 'Your assessment, step by step',
  'steps'       => [
    [
      'title'       => 'Talk through your concerns',
      'description' => 'Share when you first noticed changes, how they have developed and what '
        . 'you would like to understand about your hair.',
    ],
    [
      'title'       => 'Review your hair & scalp',
      'description' => 'Your doctor assesses your hairline, crown and scalp alongside your '
        . 'health history and current hair care routine.',
    ],
    [
      'title'       => 'Discuss the options',
      'description' => 'Talk through suitable care options, what each involves, expected '
        . 'commitments and any questions you have.',
    ],
    [
      'title'       => 'Agree on your next steps',
      'description' => 'Decide on a plan with your doctor and arrange the follow-up needed '
        . 'to review your progress.',
    ],
  ],
  'timeline_title' => 'Your care journey',
  'timeline'       => [
    [
      'title'       => 'Your first visit',
      'description' => 'Build a clear picture of your concerns and discuss an initial plan.',
    ],
    [
      'title'       => 'Starting your plan',
      'description' => 'Understand the routine, instructions and review schedule agreed with your doctor.',
    ],
    [
      'title'       => 'Reviewing progress',
      'description' => 'Discuss any changes, questions or difficulties during follow-up appointments.',
    ],
    [
      'title'       => 'Ongoing care',
      'description' => 'Revisit your goals and care plan with your doctor as your needs change.',
    ],
  ],
  'timeline_note' => 'Your doctor will explain the review schedule and expectations for your individual plan.',
  'related_title' => 'Other hair loss concerns',
  'related_items' => [
    [
      'title' => 'Female Pattern Hair Loss',
      'href'  => asset_url('hair-loss#female-hair-loss'),
    ],
    [
      'title' => 'Receding Hairline',
      'href'  => asset_url('hair-loss#receding-hairline'),
    ],
    [
      'title' => 'Thinning Hair',
      'href'  => asset_url('hair-loss#thinning-hair'),
    ],
  ],
]);
section('footer', [
  'placeholder_images' => true,
  'consultation_url'   => 'https://wa.me/601116741858',
]);
