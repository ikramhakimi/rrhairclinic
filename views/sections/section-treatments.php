<?php
$treatments = [
  [
    'name'  => 'Hair Loss Consultation',
    'brief' => 'A detailed assessment to identify the cause of hair loss and build a personalised treatment plan.',
    'image' => 'assets/images/treatment/treatment-hair-loss-consultation.webp',
  ],
  [
    'name'  => 'Medical Hair Loss Treatment',
    'brief' => 'Doctor-guided treatment to slow hair loss and help preserve existing hair.',
    'image' => 'assets/images/treatment/treatment-medical-hair-loss.webp',
  ],
  [
    'name'  => 'PRP Hair Treatment',
    'brief' => 'Regenerative treatment to support follicles, reduce shedding and improve hair density.',
    'image' => 'assets/images/treatment/treatment-prp-hair.webp',
  ],
];

$also_offered_treatments = [
  [
    'name'  => 'Exosome Hair Treatment',
    'brief' => 'Advanced regenerative therapy to support scalp and follicle health.',
    'image' => 'assets/images/treatment/treatment-exosome-hair.webp',
  ],
  [
    'name'  => 'Hair Transplant',
    'brief' => 'Permanent restoration for receding hairlines, bald spots and advanced hair loss.',
    'image' => 'assets/images/treatment/treatment-hair-transplant.webp',
  ],
  [
    'name'  => 'Scalp & Hair Growth Treatment',
    'brief' => 'Non-surgical treatment to improve scalp condition, strengthen follicles and support healthier growth.',
    'image' => 'assets/images/treatment/treatment-scalp-hair-growth.webp',
  ],
];
?>

<section class="section section-treatments bg-slate-900 text-slate-400 sm:m-4 sm:rounded-lg">
  
  <div class="container">
    <div class="section-headline max-w-2xl">
      <div class="headline-topic mb-5 text-xs text-slate-500 uppercase">Our Treatments</div>
      <h2 class="headline-title font-semibold text-4xl text-white">Restoring hair with precision care.</h2>
      <div class="headline-subtitle mt-5">From hairline design to the final graft, no delegation, no assembly lines. Board-certified dermatologic surgeon with 15+ years dedicated to hair restoration.</div>
    </div>
    <div class="grid grid-cols-3 gap-3 mt-8 text-white">
      <?php foreach($treatments as $treatment) { ?>
      <div class="card bg-slate-900 bg-cover bg-center px-6 py-5"
           style="background-image: linear-gradient(to bottom, rgba(15, 23, 42, .9), rgba(15, 23, 42, .65) 35%, transparent 70%), url('<?= $treatment['image']; ?>');">
        <div class="treatment-name text-lg text-white mb-4"><?= $treatment['name']; ?></div>
        <div class="treatment-brief text-sm text-slate-300"><?= $treatment['brief']; ?></div>
        <div class="flex-split mt-80">
          <!-- <div class="">Learn More</div>
          <div class="rounded-full size-12 bg-white"></div> -->
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
  <div class="hidden marquee-wrap relative left-1/2 right-1/2 mt-10 w-screen max-w-none -translate-x-1/2">
    <div class="marquee" aria-label="RR Hair Clinic photo gallery">
      <div class="marquee-track">
        <div class="marquee-group">
          <div class="marquee-photo aspect-[4/5] h-96 w-auto bg-slate-200 flex items-center justify-center">
            <img
              src="<?= asset_url('assets/images/clinic-marquee/clinic-marquee-consultation.webp'); ?>"
              alt="Doctor consulting with a customer about a hair treatment plan"
              loading="lazy"
              decoding="async"
              class="size-full object-cover rounded-lg"
            >
          </div>
          <div class="marquee-photo aspect-[3/4] h-96 w-auto bg-slate-200 flex items-center justify-center">
            <img
              src="<?= asset_url('assets/images/clinic-marquee/clinic-marquee-welcome.webp'); ?>"
              alt="Nurse welcoming a customer to the treatment room"
              loading="lazy"
              decoding="async"
              class="size-full object-cover rounded-lg"
            >
          </div>
          <div class="marquee-photo aspect-[1/1] h-96 w-auto bg-slate-200 flex items-center justify-center">
            <img
              src="<?= asset_url('assets/images/clinic-marquee/clinic-marquee-scalp-analysis.webp'); ?>"
              alt="Clinician performing a scalp analysis for a customer"
              loading="lazy"
              decoding="async"
              class="size-full object-cover rounded-lg"
            >
          </div>
          <div class="marquee-photo aspect-[9/16] h-96 w-auto bg-slate-200 flex items-center justify-center">
            <img
              src="<?= asset_url('assets/images/clinic-marquee/clinic-marquee-testimonial.webp'); ?>"
              alt="Customer smiling during a post-consultation check-in"
              loading="lazy"
              decoding="async"
              class="size-full object-cover rounded-lg"
            >
          </div>
          <div class="marquee-photo aspect-[5/4] h-96 w-auto bg-slate-200 flex items-center justify-center">
            <img
              src="<?= asset_url('assets/images/clinic-marquee/clinic-marquee-treatment-prep.webp'); ?>"
              alt="Doctor preparing for a hair treatment with a customer"
              loading="lazy"
              decoding="async"
              class="size-full object-cover rounded-lg"
            >
          </div>
          <div class="marquee-photo aspect-[2/3] h-96 w-auto bg-slate-200 flex items-center justify-center">
            <img
              src="<?= asset_url('assets/images/clinic-marquee/clinic-marquee-hairline-plan.webp'); ?>"
              alt="Clinician explaining a personalised hairline plan"
              loading="lazy"
              decoding="async"
              class="size-full object-cover rounded-lg"
            >
          </div>
          <div class="marquee-photo aspect-[3/2] h-96 w-auto bg-slate-200 flex items-center justify-center">
            <img
              src="<?= asset_url('assets/images/clinic-marquee/clinic-marquee-clinic-team.webp'); ?>"
              alt="Clinic team reviewing a customer's scalp analysis"
              loading="lazy"
              decoding="async"
              class="size-full object-cover rounded-lg"
            >
          </div>
          <div class="marquee-photo aspect-[9/16] h-96 w-auto bg-slate-200 flex items-center justify-center">
            <img
              src="<?= asset_url('assets/images/clinic-marquee/clinic-marquee-aftercare.webp'); ?>"
              alt="Nurse sharing aftercare guidance with a customer"
              loading="lazy"
              decoding="async"
              class="size-full object-cover rounded-lg"
            >
          </div>
        </div>

        <div class="marquee-group" aria-hidden="true">
          <div class="marquee-photo aspect-[4/5] h-96 w-auto bg-slate-200 flex items-center justify-center">
            <img
              src="<?= asset_url('assets/images/clinic-marquee/clinic-marquee-consultation.webp'); ?>"
              alt=""
              loading="lazy"
              decoding="async"
              class="size-full object-cover rounded-lg"
            >
          </div>
          <div class="marquee-photo aspect-[3/4] h-96 w-auto bg-slate-200 flex items-center justify-center">
            <img
              src="<?= asset_url('assets/images/clinic-marquee/clinic-marquee-welcome.webp'); ?>"
              alt=""
              loading="lazy"
              decoding="async"
              class="size-full object-cover rounded-lg"
            >
          </div>
          <div class="marquee-photo aspect-[1/1] h-96 w-auto bg-slate-200 flex items-center justify-center">
            <img
              src="<?= asset_url('assets/images/clinic-marquee/clinic-marquee-scalp-analysis.webp'); ?>"
              alt=""
              loading="lazy"
              decoding="async"
              class="size-full object-cover rounded-lg"
            >
          </div>
          <div class="marquee-photo aspect-[9/16] h-96 w-auto bg-slate-200 flex items-center justify-center">
            <img
              src="<?= asset_url('assets/images/clinic-marquee/clinic-marquee-testimonial.webp'); ?>"
              alt=""
              loading="lazy"
              decoding="async"
              class="size-full object-cover rounded-lg"
            >
          </div>
          <div class="marquee-photo aspect-[5/4] h-96 w-auto bg-slate-200 flex items-center justify-center">
            <img
              src="<?= asset_url('assets/images/clinic-marquee/clinic-marquee-treatment-prep.webp'); ?>"
              alt=""
              loading="lazy"
              decoding="async"
              class="size-full object-cover rounded-lg"
            >
          </div>
          <div class="marquee-photo aspect-[2/3] h-96 w-auto bg-slate-200 flex items-center justify-center">
            <img
              src="<?= asset_url('assets/images/clinic-marquee/clinic-marquee-hairline-plan.webp'); ?>"
              alt=""
              loading="lazy"
              decoding="async"
              class="size-full object-cover rounded-lg"
            >
          </div>
          <div class="marquee-photo aspect-[3/2] h-96 w-auto bg-slate-200 flex items-center justify-center">
            <img
              src="<?= asset_url('assets/images/clinic-marquee/clinic-marquee-clinic-team.webp'); ?>"
              alt=""
              loading="lazy"
              decoding="async"
              class="size-full object-cover rounded-lg"
            >
          </div>
          <div class="marquee-photo aspect-[9/16] h-96 w-auto bg-slate-200 flex items-center justify-center">
            <img
              src="<?= asset_url('assets/images/clinic-marquee/clinic-marquee-aftercare.webp'); ?>"
              alt=""
              loading="lazy"
              decoding="async"
              class="size-full object-cover rounded-lg"
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
