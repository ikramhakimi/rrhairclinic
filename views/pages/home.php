<?php

$page_title = 'RR Hair Clinic';
$page_current = 'home';

?>
<section
  class="hero relative isolate overflow-hidden bg-emerald-950 text-white px-6"
>
  <div class="relative z-10 max-w-6xl pt-10 mx-auto md:pb-60">
    <div class="hero-logo">
      <img src="<?= e(asset_url('assets/images/logo-rrhairclinic.svg')); ?>" alt="RR Hair Clinic" width="128" />
    </div>
    <div class="hero-content pb-20 pt-20">
      <h1 class="hero-title font-semibold text-4xl md:text-6xl text-white my-5 leading-12 md:leading-18">
        Personalized Hair & Scalp <br class="hidden md:block">
        Care, Made Clear.
      </h1>
      <div class="hero-subtitle text-lg text-white max-w-3xl">From consultation to treatment planning, RR Hair Clinic helps clients understand their hair concerns and choose a care pathway with confidence.</div>
      <div class="hero-actions flex flex-col md:flex-row md:items-center gap-4 mt-10">
        <a href="#" class="text-base inline-flex items-center justify-between bg-green-500 text-green-950 font-semibold leading-6 py-4 px-6 cursor-pointer rounded-sm hover:bg-green-400">
          <span>Book a Consultation</span>
          <span class="rounded-sm p-1 bg-green-900 text-white leading-0 ml-4 -mr-2">
            <?php icon('arrow-right-up-line', ['icon_size' => '16', 'icon_class' => 'size-4']); ?>
          </span>
        </a>
        <a href="#" class="text-base inline-flex items-center justify-between bg-emerald-900 font-medium text-white leading-6 py-4 px-6 cursor-pointer rounded-sm hover:bg-emerald-800">
          <span>Our Treatments</span>
          <span class="rounded-sm p-1 bg-emerald-950 text-white leading-0 ml-4 -mr-2">
            <?php icon('arrow-right-up-line', ['icon_size' => '16', 'icon_class' => 'size-4']); ?>
          </span>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="section section-services relative  px-6">
  <div class="max-w-6xl mx-auto md:-mt-60 pt-20 md:pt-0 pb-20">
    <header class="section-header md:hidden">
      <h2 class="section-title font-semibold text-3xl text-mist-800 max-w-3xl leading-tight">Our Services</h2>
      <p class="section-subtitle max-w-4xl mt-3 leading-6">Hair and scalp care planned around your condition, goals, and treatment readiness.</p>
    </header>

    <div class="section-content services flex  overflow-x-auto pb-6 snap-x snap-mandatory -mx-6 px-6 scroll-px-6 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden md:grid md:grid-cols-2 lg:grid-cols-4 md:overflow-visible md:mx-0 md:px-0 md:pb-0 md:scroll-px-0 gap-3 md:gap-6">
      <div class="service shadow-lg shadow-mist-400/20 w-[82vw] shrink-0 snap-start border border-mist-200 rounded-sm overflow-hidden md:w-auto md:shrink md:border-0  md:shadow-none">
        <div class="service-topic text-xs uppercase mb-4 hidden md:block">Consultation & Diagnosis</div>
        <div class="service-thumbnail aspect-3/2 md:aspect-3/4 rounded-sm overflow-hidden md:mb-4 hidden md:flex items-center justify-center bg-mist-100 text-mist-700">
          <?php icon('document', ['icon_size' => '56', 'icon_class' => 'size-14']); ?>
        </div>
        <div class="service-content p-6 md:p-0">
          <div class="service-icon border border-mist-200 rounded-sm inline-flex p-5 mb-6 md:hidden"><?php icon('document', ['icon_size' => '48', 'icon_class' => 'size-12 text-mist-700']); ?></div>
          <h2 class="service-title font-semibold text-mist-800 text-lg mb-2">Hair & Scalp Consultation</h2>
          <div class="service-brief">Understanding your hair loss pattern, scalp condition, and treatment goals.</div>
        </div>
        <div class="bg-mist-50 border-t border-dashed border-mist-300 p-6 pt-6 md:p-0 md:pt-4 md:mt-4 md:bg-transparent">
          <div class="text-xs uppercase text-mist-500 mb-2">Core Services</div>
          <div class="service-list space-y-1 mt-4">
            <div class="flex items-center gap-2">
              <?php icon('checkbox-circle-fill', ['icon_size' => '16', 'icon_class' => 'text-green-500 size-4']); ?>
              <span>Scalp Analysis</span>
            </div>
            <div class="flex items-center gap-2">
              <?php icon('checkbox-circle-fill', ['icon_size' => '16', 'icon_class' => 'text-green-500 size-4']); ?>
              <span>Hair Loss Review</span>
            </div>
            <div class="flex items-center gap-2">
              <?php icon('checkbox-circle-fill', ['icon_size' => '16', 'icon_class' => 'text-green-500 size-4']); ?>
              <span>Treatment Planning</span>
            </div>
          </div>
        </div>
      </div>
      <div class="service shadow-lg shadow-mist-400/20 w-[82vw] shrink-0 snap-start border border-mist-200 rounded-sm overflow-hidden md:w-auto md:shrink md:border-0 md:shadow-none">
        <div class="service-topic text-xs uppercase mb-4 hidden md:block">Growth & Restoration</div>
        <div class="service-thumbnail aspect-3/2 md:aspect-3/4 rounded-sm overflow-hidden md:mb-4 hidden md:flex items-center justify-center bg-mist-100 text-mist-700">
          <?php icon('star-automation', ['icon_size' => '56', 'icon_class' => 'size-14']); ?>
        </div>
        <div class="service-content p-6 md:p-0">
          <div class="service-icon border border-mist-200 rounded-sm inline-flex p-5 mb-6 md:hidden"><?php icon('star-automation', ['icon_size' => '48', 'icon_class' => 'size-12 text-mist-700']); ?></div>
          <h2 class="service-title font-semibold text-mist-800 text-lg mb-2">Hair Growth Treatment</h2>
          <div class="service-brief">Focused care for thinning hair, shedding, and early restoration support.</div>
        </div>
        <div class="bg-mist-50 border-t border-dashed border-mist-300 p-6 pt-6 md:p-0 md:pt-4 md:mt-4 md:bg-transparent">
          <div class="text-xs uppercase text-mist-500 mb-2">Core Services</div>
          <div class="service-list space-y-1 mt-4">
            <div class="flex items-center gap-2">
              <?php icon('checkbox-circle-fill', ['icon_size' => '16', 'icon_class' => 'text-green-500 size-4']); ?>
              <span>Growth Stimulation</span>
            </div>
            <div class="flex items-center gap-2">
              <?php icon('checkbox-circle-fill', ['icon_size' => '16', 'icon_class' => 'text-green-500 size-4']); ?>
              <span>Hair Strengthening</span>
            </div>
            <div class="flex items-center gap-2">
              <?php icon('checkbox-circle-fill', ['icon_size' => '16', 'icon_class' => 'text-green-500 size-4']); ?>
              <span>Progress Monitoring</span>
            </div>
          </div>
        </div>
      </div>
      <div class="service shadow-lg shadow-mist-400/20 w-[82vw] shrink-0 snap-start border border-mist-200 rounded-sm overflow-hidden md:w-auto md:shrink md:border-0 md:shadow-none">
        <div class="service-topic text-xs uppercase mb-4 hidden md:block">Scalp Health</div>
        <div class="service-thumbnail aspect-3/2 md:aspect-3/4 rounded-sm overflow-hidden md:mb-4 hidden md:flex items-center justify-center bg-mist-100 text-mist-700">
          <?php icon('check', ['icon_size' => '56', 'icon_class' => 'size-14']); ?>
        </div>
        <div class="service-content p-6 md:p-0">
          <div class="service-icon border border-mist-200 rounded-sm inline-flex p-5 mb-6 md:hidden"><?php icon('check', ['icon_size' => '48', 'icon_class' => 'size-12 text-mist-700']); ?></div>
          <h2 class="service-title font-semibold text-mist-800 text-lg mb-2">Scalp & Dandruff Care</h2>
          <div class="service-brief">Helping calm irritation, flakes, oil imbalance, and sensitive scalp concerns.</div>
        </div>
        <div class="bg-mist-50 border-t border-dashed border-mist-300 p-6 pt-6 md:p-0 md:pt-4 md:mt-4 md:bg-transparent">
          <div class="text-xs uppercase text-mist-500 mb-2">Core Services</div>
          <div class="service-list space-y-1 mt-4">
            <div class="flex items-center gap-2">
              <?php icon('checkbox-circle-fill', ['icon_size' => '16', 'icon_class' => 'text-green-500 size-4']); ?>
              <span>Scalp Detox</span>
            </div>
            <div class="flex items-center gap-2">
              <?php icon('checkbox-circle-fill', ['icon_size' => '16', 'icon_class' => 'text-green-500 size-4']); ?>
              <span>Dandruff Control</span>
            </div>
            <div class="flex items-center gap-2">
              <?php icon('checkbox-circle-fill', ['icon_size' => '16', 'icon_class' => 'text-green-500 size-4']); ?>
              <span>Sensitive Scalp Care</span>
            </div>
          </div>
        </div>
      </div>
      <div class="service shadow-lg shadow-mist-400/20 w-[82vw] shrink-0 snap-start border border-mist-200 rounded-sm overflow-hidden md:w-auto md:shrink md:border-0 md:shadow-none">
        <div class="service-topic text-xs uppercase mb-4 hidden md:block">Follow-Up & Care</div>
        <div class="service-thumbnail aspect-3/2 md:aspect-3/4 rounded-sm overflow-hidden md:mb-4 hidden md:flex items-center justify-center bg-mist-100 text-mist-700">
          <?php icon('calendar', ['icon_size' => '56', 'icon_class' => 'size-14']); ?>
        </div>
        <div class="service-content p-6 md:p-0">
          <div class="service-icon border border-mist-200 rounded-sm inline-flex p-5 mb-6 md:hidden"><?php icon('calendar', ['icon_size' => '48', 'icon_class' => 'size-12 text-mist-700']); ?></div>
          <h2 class="service-title font-semibold text-mist-800 text-lg mb-2">Maintenance & Follow-Up</h2>
          <div class="service-brief">Keeping your care plan consistent with review, adjustment, and aftercare guidance.</div>
        </div>
        <div class="bg-mist-50 border-t border-dashed border-mist-300 p-6 pt-6 md:p-0 md:pt-4 md:mt-4 md:bg-transparent">
          <div class="text-xs uppercase text-mist-500 mb-2">Core Services</div>
          <div class="service-list space-y-1 mt-4">
            <div class="flex items-center gap-2">
              <?php icon('checkbox-circle-fill', ['icon_size' => '16', 'icon_class' => 'text-green-500 size-4']); ?>
              <span>Aftercare Guidance</span>
            </div>
            <div class="flex items-center gap-2">
              <?php icon('checkbox-circle-fill', ['icon_size' => '16', 'icon_class' => 'text-green-500 size-4']); ?>
              <span>Review Sessions</span>
            </div>
            <div class="flex items-center gap-2">
              <?php icon('checkbox-circle-fill', ['icon_size' => '16', 'icon_class' => 'text-green-500 size-4']); ?>
              <span>Care Routine Support</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="h-[101px]" style="background-image: linear-gradient(#e9e5e6 1px, transparent 1px), linear-gradient(to right, #e9e5e6 1px, transparent 1px) !important;background-size: 1% 50px !important;"></div>

<section class="section section-approach bg-mist-900 text-mist-400 py-20 px-6">
  <div class="max-w-6xl mx-auto">
    <header class="section-header mb-10">
      <h2 class="section-title font-semibold text-4xl text-mist-200 max-w-xl leading-tight">
        <span class="hidden md:inline">Our approach to making hair care simple and clear.</span>
        <span class="md:hidden">Simple steps to care.</span>
      </h2>
      <p class="section-subtitle max-w-3xl mt-5 text-base leading-7">
        <span class="hidden md:inline">We connect careful consultation, treatment planning, and follow-up support so every client understands what is happening and what comes next.</span>
        <span class="md:hidden">We help you understand your hair concern, choose a plan, and stay consistent with care.</span>
      </p>
    </header>

    <div class="section-content md:grid md:grid-cols-3 gap-10">
      <div class="process flex items-start gap-4 pb-6 md:block md:pb-0">
        <div class="process-icon shrink-0 mb-0 md:mb-5">
          <?php icon('approach-evaluate', [
            'icon_size'  => '48',
            'icon_class' => 'inline-block shrink-0 align-middle leading-[1em] h-[48px] w-[48px] text-mist-200',
          ]); ?>
        </div>
        <div class="process-content min-w-0">
          <div class="process-title font-medium text-xl text-mist-200 mb-3">Evaluate</div>
          <div class="process-desc">
            <span class="hidden md:inline">We assess your hair and scalp condition, lifestyle factors, and treatment history before recommending the next step.</span>
            <span class="md:hidden">We review your hair, scalp, goals, and treatment history first.</span>
          </div>
        </div>
      </div>
      <div class="process flex items-start gap-4 border-t border-mist-800 py-6 md:block md:border-t-0 md:py-0">
        <div class="process-icon shrink-0 mb-0 md:mb-5">
          <?php icon('approach-strategize', [
            'icon_size'  => '48',
            'icon_class' => 'inline-block shrink-0 align-middle leading-[1em] h-[48px] w-[48px] text-mist-200',
          ]); ?>
        </div>
        <div class="process-content min-w-0">
          <div class="process-title font-medium text-xl text-mist-200 mb-3">Strategize</div>
          <div class="process-desc">
            <span class="hidden md:inline">We map a practical care plan around your condition, priorities, treatment frequency, and realistic progress milestones.</span>
            <span class="md:hidden">We set a practical care plan with clear next steps.</span>
          </div>
        </div>
      </div>
      <div class="process flex items-start gap-4 border-t border-mist-800 pt-6 md:block md:border-t-0 md:pt-0">
        <div class="process-icon shrink-0 mb-0 md:mb-5">
          <?php icon('approach-deliver', [
            'icon_size'  => '48',
            'icon_class' => 'inline-block shrink-0 align-middle leading-[1em] h-[48px] w-[48px] text-mist-200',
          ]); ?>
        </div>
        <div class="process-content min-w-0">
          <div class="process-title font-medium text-xl text-mist-200 mb-3">Deliver</div>
          <div class="process-desc">
            <span class="hidden md:inline">We support your treatment journey with attentive sessions, aftercare guidance, and progress reviews along the way.</span>
            <span class="md:hidden">We guide each session, aftercare, and follow-up review.</span>
          </div>
        </div>
      </div>
    </div>
    <div class="section-cta relative mt-15 pt-15 border-t border-mist-800">
      <h3 class="font-semibold text-3xl text-slate-50">Need a clearer path for your hair concerns?</h3>
      <p class="text-base my-5 max-w-3xl">Start with a focused consultation.</p>
      <a href="#" class="text-base flex md:inline-flex items-center justify-between bg-green-500 text-green-950 font-semibold leading-6 py-4 px-6 cursor-pointer rounded-sm hover:bg-green-400">
        <span>Book a Consultation</span>
        <span class="rounded-sm p-1 bg-green-900 text-white leading-0 ml-4 -mr-2">
          <?php icon('arrow-right-up-line', ['icon_size' => '16', 'icon_class' => 'size-4']); ?>
        </span>
      </a>
    </div>
  </div>
</section>
<div class="bg-mist-900 h-[101px]" style="background-image: linear-gradient(#22292b 1px, transparent 1px), linear-gradient(to right, #22292b 1px, transparent 1px) !important;background-size: 1% 50px !important;"></div>


<section class="section section-about bg-mist-100 px-6 overflow-hidden">
  <div class="max-w-6xl mx-auto relative isolate pt-20 pb-60">
    <header class="section-header mb-10 relative z-10">
      <h2 class="section-title font-semibold text-4xl text-mist-800 max-w-xl leading-tight">
        <span class="hidden md:inline">About RR Hair Clinic: Clear Care for Hair & Scalp Health.</span>
        <span class="md:hidden">About RR Hair Clinic.</span>
      </h2>
      <p class="section-subtitle hidden md:block max-w-3xl mt-5 text-base leading-7">RR Hair Clinic supports clients with personalised consultation, treatment planning, and aftercare for healthier hair and scalp confidence.</p>
      <p class="section-subtitle md:hidden max-w-3xl mt-5 text-base leading-7">RR Hair Clinic helps clients choose clearer care for hair and scalp concerns.</p>
    </header>
    <div class="md:grid md:grid-cols-5 gap-6 relative z-10">
      <div class="col-span-2">
        <div class="max-w-xl space-y-4">
          <h2 class="font-semibold text-xl text-mist-700">Our Mission</h2>
          <p class="text-base text-mist-600 italics pr-10">
            <span class="hidden md:inline">To make hair and scalp care easier to understand, with personalised plans that help clients feel informed, supported, and confident throughout treatment.</span>
            <span class="md:hidden">To make hair and scalp care easier to understand and follow.</span>
          </p>
        </div>
        <div class="max-w-xl space-y-4 pt-10 mt-10 border-t border-mist-300">
          <h2 class="font-semibold text-xl text-mist-700">Our Vision</h2>
          <p class="text-base text-mist-600 italics pr-10">
            <span class="hidden md:inline">A future where more people can access trusted hair care early, understand their options clearly, and maintain healthier routines over time.</span>
            <span class="md:hidden">Trusted hair care that is clear, early, and easier to maintain.</span>
          </p>
        </div>
      </div>
      <div class="commitments col-span-3 mt-10 md:mt-0 md:grid md:grid-cols-2 gap-3">
        <div>
          <div class="commitment flex items-start gap-4 pb-6 md:p-6 md:flex-col md:justify-end md:rounded-md md:bg-mist-200">
            <div class="commitment-icon shrink-0 mb-0 md:mb-15 md:mt-1">
              <?php icon('calendar', ['icon_size' => '48', 'icon_class' => 'inline-block shrink-0 align-middle leading-none text-mist-700',]); ?>
            </div>
            <div class="commitment-content min-w-0">
              <h3 class="commitmen-title text-mist-800 text-lg font-semibold capitalize mb-2">Early Clarity</h3>
              <p class="commitmen-desc">Clients understand their hair and scalp condition before choosing a treatment path.</p>
            </div>
          </div>
          <div class="commitment flex items-start gap-4 border-t border-mist-300 py-6 md:mt-3 md:p-6 md:flex-col md:justify-end md:rounded-md md:border-t-0 md:bg-mist-200">
            <div class="commitment-icon shrink-0 mb-0 md:mb-15 md:mt-1">
              <?php icon('pin', ['icon_size' => '48', 'icon_class' => 'inline-block shrink-0 align-middle leading-none text-mist-700',]); ?>
            </div>
            <div class="commitment-content min-w-0">
              <h3 class="commitmen-title text-mist-800 text-lg font-semibold capitalize mb-2">Personalised Care</h3>
              <p class="commitmen-desc">Recommendations are shaped around the client’s concern, routine, and realistic care goals.</p>
            </div>
          </div>
        </div>
        <div class="md:mt-15">
          <div class="commitment flex items-start gap-4 border-t border-mist-300 py-6 md:p-6 md:flex-col md:justify-end md:rounded-md md:border-t-0 md:bg-mist-200">
            <div class="commitment-icon shrink-0 mb-0 md:mb-15 md:mt-1">
              <?php icon('star-automation', ['icon_size' => '48', 'icon_class' => 'inline-block shrink-0 align-middle leading-none text-mist-700',]); ?>
            </div>
            <div class="commitment-content min-w-0">
              <h3 class="commitmen-title text-mist-800 text-lg font-semibold capitalize mb-2">Consistent Support</h3>
              <p class="commitmen-desc">Treatment sessions, review timing, and aftercare stay connected throughout the journey.</p>
            </div>
          </div>
          <div class="commitment flex items-start gap-4 border-t border-mist-300 pt-6 md:mt-3 md:p-6 md:flex-col md:justify-end md:rounded-md md:border-t-0 md:bg-mist-200">
            <div class="commitment-icon shrink-0 mb-0 md:mb-15 md:mt-1">
              <?php icon('repost', ['icon_size' => '48', 'icon_class' => 'inline-block shrink-0 align-middle leading-none text-mist-700',]); ?>
            </div>
            <div class="commitment-content min-w-0">
              <h3 class="commitmen-title text-mist-800 text-lg font-semibold capitalize mb-2">Progress Focus</h3>
              <p class="commitmen-desc">Care plans are reviewed over time so treatment can respond to changes and client feedback.</p>
            </div>
          </div>
        </div>
      </div>  
    </div>
  </div>
</section>
<div class="bg-mist-100 h-[101px]" style="background-image: linear-gradient(#e9e5e6 1px, transparent 1px), linear-gradient(to right, #e9e5e6 1px, transparent 1px) !important;background-size: 1% 50px !important;"></div>


<div class="more-icons hidden">
  <?php icon('price-tag', ['icon_size' => '48']); ?>
  <?php icon('table', ['icon_size' => '48']); ?>
  
  <?php icon('paper-clip', ['icon_size' => '48']); ?>
  <?php icon('folder', ['icon_size' => '48']); ?>
  
  <?php icon('pencil', ['icon_size' => '48']); ?>
  <?php icon('document', ['icon_size' => '48']); ?>
  <?php icon('photo', ['icon_size' => '48']); ?>
  <?php icon('share', ['icon_size' => '48']); ?>
  <?php icon('repost', ['icon_size' => '48']); ?>
  <?php icon('plugin', ['icon_size' => '48']); ?>
  <?php icon('check', ['icon_size' => '48']); ?>
  <?php icon('cloud-check', ['icon_size' => '48']); ?>
  
  <?php icon('education', ['icon_size' => '48']); ?>
</div>
