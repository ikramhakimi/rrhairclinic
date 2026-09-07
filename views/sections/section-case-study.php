<section class="section section-case-study py-20 border-t border-slate-200">
  <div class="container">
    <div class="section-headline max-w-2xl mx-auto text-center">
      <div class="headline-topic mb-5 text-xs text-slate-500 uppercase">Our Results</div>
      <h2 class="headline-title font-semibold text-4xl text-slate-950">Results you can actually see.</h2>
      <div class="headline-subtitle mt-5">Real patients. Real treatment journeys. Real changes over time — with photos that show what progress can actually look like.</div>
    </div>

    <div class="mt-10 max-w-4xl mx-auto text-center">
      <div class="bg-slate-100 ring-1 ring-slate-300 rounded-xl aspect-4/2"></div>
      <div class="mt-5">
        <label class="relative inline-flex cursor-pointer items-center justify-center gap-4 text-sm font-medium sm:text-base">
          <input type="checkbox"
                 class="peer absolute inset-0 z-10 cursor-pointer opacity-0"
                 role="switch"
                 aria-label="Compare before and after treatment">
          <span class="w-32 text-right text-slate-950 transition-colors peer-checked:text-inherit sm:w-36">Before Treatment</span>
          <span class="h-8 w-16 rounded-full bg-slate-200 ring-1 ring-slate-300"></span>
          <span class="pointer-events-none absolute left-[calc(50%-2rem+0.25rem)] size-6 rounded-full bg-white shadow-sm transition peer-checked:translate-x-8 peer-checked:bg-slate-900"></span>
          <span class="w-32 text-left transition-colors peer-checked:text-slate-950 sm:w-36">After Treatment</span>
        </label>
      </div>
      <div class="mt-5">
        <a href="#">Start my transformation</a>
        <a href="#">Analyse my Hair</a>
      </div>
    </div>

    <div class="mt-10 grid grid-cols-1 gap-6 md:grid-cols-3">
      <?php for($x=0; $x<3; $x++) { ?>
      <article class="card bg-slate-100 ring-1 ring-slate-300 p-2 rounded-lg">
        <div class="grid grid-cols-2 gap-1">
          <figure>
            <div class="aspect-[6/7] rounded-md bg-slate-200" role="img" aria-label="Before treatment"></div>
            <!-- <figcaption class="mt-2 text-sm font-medium text-slate-700">Before</figcaption> -->
          </figure>

          <figure>
            <div class="aspect-[6/7] rounded-md bg-slate-200" role="img" aria-label="After treatment"></div>
            <!-- <figcaption class="mt-2 text-sm font-medium text-slate-700">After</figcaption> -->
          </figure>
        </div>

        <div class="p-4">
          <div class="flex items-center justify-between gap-3">
            <h3 class="font-semibold text-slate-800">Hair Problem · Age 34</h3>
            <span class="shrink-0 text-sm font-medium text-green-800">
              +3,400 grafts
            </span>
          </div>
          <p class="mt-2 text-sm text-slate-600">Treatment Method · Result at 12 months</p>
        </div>
      </article>
      <?php } ?>
    </div>

    <!-- <div class="flex items-center whitespace-nowrap text-xs text-slate-500 uppercase mt-15">
      <div class="pr-5">Patient stories</div>
      <div class="w-full h-px border-b border-dashed border-slate-200"></div>
    </div>

    <div class="testimonial max-w-2xl mt-10">
      <h2 class="testimonial-title font-semibold text-2xl leading-8 text-slate-950">Eleven months on, my barber asked which clinic I went to - he couldn't find the donor area. That's when I knew it was worth it.</h2>
      <div class="testimonial-author mt-5 flex items-center gap-3">
        <div class="rounded-full size-12 bg-slate-500"></div>
        <div>
          <div class="font-medium">Ikram Hakimi</div>
          <div class="text-sm text-slate-500">DHI Implantation · 3,500 grafts · Kelantan</div>
        </div>
      </div>
    </div>

    <div class="mt-6 grid grid-cols-1 gap-5 md:grid-cols-3">
      <figure class="card flex flex-col bg-slate-100 ring-1 ring-slate-300 p-5 rounded-lg">
        <blockquote class="text-lg font-medium text-slate-800">
          Eleven months on, my barber asked which clinic I went to - he couldn&#39;t find the donor area.
          That&#39;s when I knew it was worth it.
        </blockquote>
        <figcaption class="mt-auto flex items-center gap-3 pt-10">
          <span class="size-12 rounded-full bg-slate-200" aria-hidden="true"></span>
          <span>
            <span class="block font-semibold text-slate-800">Marcus Deller</span>
            <span class="block text-sm text-slate-600">Sapphire FUE &middot; 3,400 grafts &middot; Berlin</span>
          </span>
        </figcaption>
      </figure>

      <figure class="card flex flex-col bg-slate-100 ring-1 ring-slate-300 p-5 rounded-lg">
        <blockquote class="text-lg font-medium text-slate-800">
          The new hairline fits my face so naturally that friends only noticed I looked younger, not that
          I&#39;d had a transplant.
        </blockquote>
        <figcaption class="mt-auto flex items-center gap-3 pt-10">
          <span class="size-12 rounded-full bg-slate-200" aria-hidden="true"></span>
          <span>
            <span class="block font-semibold text-slate-800">James Carter</span>
            <span class="block text-sm text-slate-600">DHI Implantation &middot; 2,800 grafts &middot; London</span>
          </span>
        </figcaption>
      </figure>

      <figure class="card flex flex-col bg-slate-100 ring-1 ring-slate-300 p-5 rounded-lg">
        <blockquote class="text-lg font-medium text-slate-800">
          The team explained every step, and the recovery was much easier than I expected. The results
          speak for themselves.
        </blockquote>
        <figcaption class="mt-auto flex items-center gap-3 pt-10">
          <span class="size-12 rounded-full bg-slate-200" aria-hidden="true"></span>
          <span>
            <span class="block font-semibold text-slate-800">Daniel Novak</span>
            <span class="block text-sm text-slate-600">Sapphire FUE &middot; 3,900 grafts &middot; Prague</span>
          </span>
        </figcaption>
      </figure>
    </div> -->
  </div>
</section>
