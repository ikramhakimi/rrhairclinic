<?php

$page_title = 'Mampan Solutions';
$page_current = 'home';

?>
<section
  class="hero relative isolate overflow-hidden bg-emerald-950 text-white before:absolute before:inset-0 before:-z-10 before:bg-cover before:bg-center before:bg-no-repeat before:opacity-10 before:[background-image:var(--hero-bg)] before:content-[''] px-6"
  style="--hero-bg: url('<?= e(asset_url('assets/images/bg-hero-drawing.png')); ?>');"
>
  <div class="relative z-10 max-w-6xl pt-10 mx-auto md:pb-60">
    <div class="hero-logo">
      <img src="assets/images/logo-mampan.svg" alt="MAMPAN" width="64" />
    </div>
    <div class="hero-content pb-20 pt-20">
      <h1 class="hero-title font-semibold text-4xl md:text-6xl text-white my-5 leading-12 md:leading-18">
        Certifying High-Performance <br class="hidden md:block">
        Buildings, Simplified.
      </h1>
      <div class="hero-subtitle text-lg text-white max-w-3xl">From design intent to certification delivery, we guide your team with practical sustainability strategy, technical evidence, and measurable implementation support.</div>
      <div class="hero-actions flex flex-col md:flex-row md:items-center gap-4 mt-10">
        <a href="#" class="text-base inline-flex items-center justify-between bg-green-500 text-green-950 font-semibold leading-6 py-4 px-6 cursor-pointer rounded-sm hover:bg-green-400">
          <span>Book a Consultation</span>
          <span class="rounded-sm p-1 bg-green-900 text-white leading-0 ml-4 -mr-2">
            <?php icon('arrow-right-up-line', ['icon_size' => '16', 'icon_class' => 'size-4']); ?>
          </span>
        </a>
        <a href="#" class="text-base inline-flex items-center justify-between bg-emerald-900 font-medium text-white leading-6 py-4 px-6 cursor-pointer rounded-sm hover:bg-emerald-800">
          <span>Our Approach</span>
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
      <p class="section-subtitle max-w-4xl mt-3 leading-6">Whether you are planning a new development, lorem ipsum.</p>
    </header>

    <div class="section-content services flex  overflow-x-auto pb-6 snap-x snap-mandatory -mx-6 px-6 scroll-px-6 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden md:grid md:grid-cols-2 lg:grid-cols-4 md:overflow-visible md:mx-0 md:px-0 md:pb-0 md:scroll-px-0 gap-3 md:gap-6">
      <div class="service shadow-lg shadow-mist-400/20 w-[82vw] shrink-0 snap-start border border-mist-200 rounded-sm overflow-hidden md:w-auto md:shrink md:border-0  md:shadow-none">
        <div class="service-topic text-xs uppercase mb-4 hidden md:block">Foundation & Planning</div>
        <div class="service-thumbnail aspect-3/2 md:aspect-3/4 rounded-sm overflow-hidden md:mb-4 hidden md:block">
          <img
            src="assets/images/services/certification-roadmap-risk-assessment.png"
            alt="Green building certification roadmap materials arranged beside an architectural model."
            width="1402"
            height="1122"
            class="h-full w-full bg-mist-800 rounded-sm"
            style="object-fit: cover;"
          />
        </div>
        <div class="service-content p-6 md:p-0">
          <div class="service-icon border border-mist-200 rounded-sm inline-flex mb-6 md:hidden"><img src="assets/images/service-icons/roadmap-risk-assessment-source.png" width="100" height="100" alt="Strategic Roadmap & Risk Assessment"></div>
          <h2 class="service-title font-semibold text-mist-800 text-lg mb-2">Strategic Roadmap & Risk Assessment</h2>
          <div class="service-brief">Defining your path and closing compliance gaps before submission.</div>
        </div>
        <div class="bg-mist-50 border-t border-dashed border-mist-300 p-6 pt-6 md:p-0 md:pt-4 md:mt-4 md:bg-transparent">
          <div class="text-xs uppercase text-mist-500 mb-2">Core Services</div>
          <div class="service-list space-y-1 mt-4">
            <div class="flex items-center gap-2">
              <?php icon('checkbox-circle-fill', ['icon_size' => '16', 'icon_class' => 'text-green-500 size-4']); ?>
              <span>Certification Advisory</span>
            </div>
            <div class="flex items-center gap-2">
              <?php icon('checkbox-circle-fill', ['icon_size' => '16', 'icon_class' => 'text-green-500 size-4']); ?>
              <span>Gap Analysis</span>
            </div>
            <div class="flex items-center gap-2">
              <?php icon('checkbox-circle-fill', ['icon_size' => '16', 'icon_class' => 'text-green-500 size-4']); ?>
              <span>Feasibility Review</span>
            </div>
          </div>
        </div>
      </div>
      <div class="service shadow-lg shadow-mist-400/20 w-[82vw] shrink-0 snap-start border border-mist-200 rounded-sm overflow-hidden md:w-auto md:shrink md:border-0 md:shadow-none">
        <div class="service-topic text-xs uppercase mb-4 hidden md:block">Design & Engineering</div>
        <div class="service-thumbnail aspect-3/2 md:aspect-3/4 rounded-sm overflow-hidden md:mb-4 hidden md:block">
          <img
            src="assets/images/services/energy-technical-design-optimization.png"
            alt="Green building energy design optimization materials arranged around a solar building model."
            width="1254"
            height="1254"
            class="h-full w-full bg-mist-800 rounded-sm"
            style="object-fit: cover;"
          />
        </div>
        <div class="service-content p-6 md:p-0">
          <div class="service-icon border border-mist-200 rounded-sm inline-flex mb-6 md:hidden"><img src="assets/images/service-icons/energy-design-optimization-source.png" width="100" height="100" alt="Energy & Technical Design Optimization"></div>
          <h2 class="service-title font-semibold text-mist-800 text-lg mb-2">Energy & Technical Design Optimization</h2>
          <div class="service-brief">Data-driven input for passive design and high-performance engineering.</div>
        </div>
        <div class="bg-mist-50 border-t border-dashed border-mist-300 p-6 pt-6 md:p-0 md:pt-4 md:mt-4 md:bg-transparent">
          <div class="text-xs uppercase text-mist-500 mb-2">Core Services</div>
          <div class="service-list space-y-1 mt-4">
            <div class="flex items-center gap-2">
              <?php icon('checkbox-circle-fill', ['icon_size' => '16', 'icon_class' => 'text-green-500 size-4']); ?>
              <span>Energy Efficiency</span>
            </div>
            <div class="flex items-center gap-2">
              <?php icon('checkbox-circle-fill', ['icon_size' => '16', 'icon_class' => 'text-green-500 size-4']); ?>
              <span>Review Green Building</span>
            </div>
            <div class="flex items-center gap-2">
              <?php icon('checkbox-circle-fill', ['icon_size' => '16', 'icon_class' => 'text-green-500 size-4']); ?>
              <span>Consultation M&E Coordination</span>
            </div>
          </div>
        </div>
      </div>
      <div class="service shadow-lg shadow-mist-400/20 w-[82vw] shrink-0 snap-start border border-mist-200 rounded-sm overflow-hidden md:w-auto md:shrink md:border-0 md:shadow-none">
        <div class="service-topic text-xs uppercase mb-4 hidden md:block">Site & Wellness</div>
        <div class="service-thumbnail aspect-3/2 md:aspect-3/4 rounded-sm overflow-hidden md:mb-4 hidden md:block">
          <img
            src="assets/images/services/environmental-wellness-assessment.png"
            alt="Environmental wellness assessment materials arranged around a biophilic interior model."
            width="1254"
            height="1254"
            class="h-full w-full bg-mist-800 rounded-sm"
            style="object-fit: cover;"
          />
        </div>
        <div class="service-content p-6 md:p-0">
          <div class="service-icon border border-mist-200 rounded-sm inline-flex mb-6 md:hidden"><img src="assets/images/service-icons/environmental-wellness-assessment-source.png" width="100" height="100" alt="Environmental & Wellness Assessment"></div>
          <h2 class="service-title font-semibold text-mist-800 text-lg mb-2">Environmental & Wellness Assessment</h2>
          <div class="service-brief">Verifying site sustainability and indoor environmental quality.</div>
        </div>
        <div class="bg-mist-50 border-t border-dashed border-mist-300 p-6 pt-6 md:p-0 md:pt-4 md:mt-4 md:bg-transparent">
          <div class="text-xs uppercase text-mist-500 mb-2">Core Services</div>
          <div class="service-list space-y-1 mt-4">
            <div class="flex items-center gap-2">
              <?php icon('checkbox-circle-fill', ['icon_size' => '16', 'icon_class' => 'text-green-500 size-4']); ?>
              <span>Performance Assessment</span>
            </div>
            <div class="flex items-center gap-2">
              <?php icon('checkbox-circle-fill', ['icon_size' => '16', 'icon_class' => 'text-green-500 size-4']); ?>
              <span>IEQ & Water Reviews</span>
            </div>
            <div class="flex items-center gap-2">
              <?php icon('checkbox-circle-fill', ['icon_size' => '16', 'icon_class' => 'text-green-500 size-4']); ?>
              <span>Operational Readiness</span>
            </div>
          </div>
        </div>
      </div>
      <div class="service shadow-lg shadow-mist-400/20 w-[82vw] shrink-0 snap-start border border-mist-200 rounded-sm overflow-hidden md:w-auto md:shrink md:border-0 md:shadow-none">
        <div class="service-topic text-xs uppercase mb-4 hidden md:block">Documentation & Approval</div>
        <div class="service-thumbnail aspect-3/2 md:aspect-3/4 rounded-sm overflow-hidden md:mb-4 hidden md:block">
          <img
            src="assets/images/services/evidence-submission-management.png"
            alt="Organized green building certification evidence folders, drawings, samples, and submission documents."
            width="1402"
            height="1122"
            class="h-full w-full bg-mist-800 rounded-sm"
            style="object-fit: cover;"
          />
        </div>
        <div class="service-content p-6 md:p-0">
          <div class="service-icon border border-mist-200 rounded-sm inline-flex mb-6 md:hidden"><img src="assets/images/service-icons/evidence-submission-management-source.png" width="100" height="100" alt="Evidence & Submission Management"></div>
          <h2 class="service-title font-semibold text-mist-800 text-lg mb-2">Evidence & Submission Management</h2>
          <div class="service-brief">Organizing technical proof into a structured, assessor-ready package.</div>
        </div>
        <div class="bg-mist-50 border-t border-dashed border-mist-300 p-6 pt-6 md:p-0 md:pt-4 md:mt-4 md:bg-transparent">
          <div class="text-xs uppercase text-mist-500 mb-2">Core Services</div>
          <div class="service-list space-y-1 mt-4">
            <div class="flex items-center gap-2">
              <?php icon('checkbox-circle-fill', ['icon_size' => '16', 'icon_class' => 'text-green-500 size-4']); ?>
              <span>GBI Documentation</span>
            </div>
            <div class="flex items-center gap-2">
              <?php icon('checkbox-circle-fill', ['icon_size' => '16', 'icon_class' => 'text-green-500 size-4']); ?>
              <span>Support Evidence Tracking</span>
            </div>
            <div class="flex items-center gap-2">
              <?php icon('checkbox-circle-fill', ['icon_size' => '16', 'icon_class' => 'text-green-500 size-4']); ?>
              <span>Assessor Coordination</span>
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
      <h2 class="section-title font-semibold text-4xl text-mist-200 max-w-xl leading-tight">Our approach to making certification simple and clear.</h2>
      <p class="section-subtitle max-w-3xl mt-5 text-base leading-7">We bridge the gap between design intent and final certification through technical expertise, structured documentation, and hands-on implementation support.</p>
    </header>

    <div class="section-content md:grid md:grid-cols-3 gap-10">
      <div class="process">
        <div class="process-icon mb-5">
          <?php icon('approach-evaluate', [
            'icon_size'  => '48',
            'icon_class' => 'inline-block shrink-0 align-middle leading-[1em] h-[48px] w-[48px] text-mist-200',
          ]); ?>
        </div>
        <div class="process-title font-medium text-xl text-mist-200 mb-3">Evaluate</div>
        <div class="process-desc">We analyze your project goals and site context to pinpoint the most impactful sustainability opportunities and compliance requirements.</div>
      </div>
      <div class="process">
        <div class="process-icon mb-5">
          <?php icon('approach-strategize', [
            'icon_size'  => '48',
            'icon_class' => 'inline-block shrink-0 align-middle leading-[1em] h-[48px] w-[48px] text-mist-200',
          ]); ?>
        </div>
        <div class="process-title font-medium text-xl text-mist-200 mb-3">Strategize</div>
        <div class="process-desc">We translate those priorities into a clear, actionable roadmap that defines your certification targets, technical workflows, and team responsibilities.</div>
      </div>
      <div class="process">
        <div class="process-icon mb-5">
          <?php icon('approach-deliver', [
            'icon_size'  => '48',
            'icon_class' => 'inline-block shrink-0 align-middle leading-[1em] h-[48px] w-[48px] text-mist-200',
          ]); ?>
        </div>
        <div class="process-title font-medium text-xl text-mist-200 mb-3">Deliver</div>
        <div class="process-desc">We provide the oversight needed to bridge design and construction, ensuring your evidence remains audit-ready and your sustainability goals are realized.</div>
      </div>
    </div>
    <div class="section-cta relative mt-15 pt-15 border-t border-mist-800">
      <h3 class="font-semibold text-2xl text-slate-50">Built to fit your team’s workflow.</h3>
      <p class="text-base my-5 max-w-3xl">We integrate seamlessly into your project at any stage—from concept to final audit—to ensure your certification goals stay on track.</p>
      <p class="text-base my-5">Book a consultation to see how we can help.</p>
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
      <h2 class="section-title font-semibold text-4xl text-mist-800 max-w-xl leading-tight">Precision Management for Complex Sustainability Certifications.</h2>
      <p class="section-subtitle max-w-3xl mt-5 text-base leading-7">Eliminate the friction of compliance. We provide the technical oversight and rigorous documentation management required to secure your rating, allowing your team to focus on project excellence while we navigate the complexities of certification.</p>
    </header>
    <div class="md:grid md:grid-cols-5 gap-6 relative z-10">
      <div class="col-span-2">
        <div class="max-w-xl space-y-4">
          <h2 class="font-semibold text-xl text-mist-700">Our Mission</h2>
          <p class="text-base text-mist-600 italics pr-10">To turn green building requirements into clear decisions, organised evidence, and credible project outcomes.</p>
          <p>Mampan brings structure to the work behind certification — helping teams understand what matters, what is missing, and what comes next.</p>
        </div>
        <div class="max-w-xl space-y-4 pt-10 mt-10 border-t border-mist-300">
          <h2 class="font-semibold text-xl text-mist-700">Our Vision</h2>
          <p class="text-base text-mist-600 italics pr-10">A future where better-performing buildings become the standard and normal way to design, build, and operate.</p>
          <p>We believe green certification should be an integral part of project planning — not a late-stage checkbox or a disconnected exercise.</p>
        </div>
      </div>
      <div class="commitments col-span-3 grid grid-cols-2 gap-3">
        <div class="space-y-3">
          <div class="commitment bg-mist-200 p-6 flex flex-col justify-end rounded-md">
            <div class="commitment-icon mb-15 mt-1">
              <?php icon('calendar', ['icon_size' => '48', 'icon_class' => 'inline-block shrink-0 align-middle leading-none text-mist-700',]); ?>
            </div>
            <h3 class="commitmen-title text-mist-800 text-lg font-semibold capitalize mb-2">Precision Planning</h3>
            <p class="commitmen-desc">Identify achievable targets, mitigate compliance risks, and establish a clear execution strategy from the start.</p>
          </div>
          <div class="commitment bg-mist-200 p-6 flex flex-col justify-end rounded-md">
            <div class="commitment-icon mb-15 mt-1">
              <?php icon('pin', ['icon_size' => '48', 'icon_class' => 'inline-block shrink-0 align-middle leading-none text-mist-700',]); ?>
            </div>
            <h3 class="commitmen-title text-mist-800 text-lg font-semibold capitalize mb-2">Audit-Ready Evidence</h3>
            <p class="commitmen-desc">We rigorously review every submission for accuracy, consistency, and total alignment with certification standards.</p>
          </div>
        </div>
        <div class="space-y-3 mt-15">
          <div class="commitment bg-mist-200 p-6 flex flex-col justify-end rounded-md">
            <div class="commitment-icon mb-15 mt-1">
              <?php icon('star-automation', ['icon_size' => '48', 'icon_class' => 'inline-block shrink-0 align-middle leading-none text-mist-700',]); ?>
            </div>
            <h3 class="commitmen-title text-mist-800 text-lg font-semibold capitalize mb-2">Empowered Expertise</h3>
            <p class="commitmen-desc">We build your team’s internal knowledge, turning complex requirements into sustainable, long-term operational workflows.</p>
          </div>
          <div class="commitment bg-mist-200 p-6 flex flex-col justify-end rounded-md">
            <div class="commitment-icon mb-15 mt-1">
              <?php icon('repost', ['icon_size' => '48', 'icon_class' => 'inline-block shrink-0 align-middle leading-none text-mist-700',]); ?>
            </div>
            <h3 class="commitmen-title text-mist-800 text-lg font-semibold capitalize mb-2">Agile Project Support</h3>
            <p class="commitmen-desc">Keep your schedule on track with proactive guidance, fast-tracked clarifications, and continuous project oversight.</p>
          </div>
        </div>
      </div>  
    </div>
    <img
      src="<?= e(asset_url('assets/images/bg-about-drawing.png')); ?>"
      alt=""
      width="1717"
      height="916"
      aria-hidden="true"
      class="hidden md:block absolute pointer-events-none grayscale-100"
      style="bottom: -5rem; left: 0; z-index: 0; width: 100%; height: auto; opacity: .75;"
    />
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
