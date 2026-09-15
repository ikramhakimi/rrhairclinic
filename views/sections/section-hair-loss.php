<section class="section section-hair-loss py-25 px-6 md:px-10 overflow-hidden js-hair-loss-carousel">
  <div class="container">
    <div class="section-headline max-w-2xl">
      <div class="headline-topic mb-5 text-xs text-slate-500 uppercase">Hair Loss Issues</div>
      <h2 class="headline-title text-4xl text-slate-950">
        Understand what your hair<br> is trying to tell you.
      </h2>
      <div class="headline-subtitle mt-5">
        Different patterns of hair loss need different treatment plans. Start by identifying what you are experiencing.
      </div>
    </div>

    <div class="relative -mt-15 js-hair-loss-controls" hidden>
      <div class="flex items-center justify-end gap-3">
        <button type="button" class="flex size-14 items-center justify-center rounded-full bg-white text-slate-900 ring-1 ring-slate-300 cursor-pointer js-hair-loss-prev"
                aria-label="Previous hair loss slide" aria-controls="hair-loss-track">
          <span aria-hidden="true"><?php svg('arrow-left-line', 'size-7'); ?></span>
        </button>
        <button type="button" class="flex size-14 items-center justify-center rounded-full bg-white text-slate-900 ring-1 ring-slate-300 cursor-pointer js-hair-loss-next"
                aria-label="Next hair loss slide" aria-controls="hair-loss-track">
          <span aria-hidden="true"><?php svg('arrow-right-line', 'size-7'); ?></span>
        </button>
      </div>
      <p class="sr-only js-hair-loss-status" role="status" aria-live="polite" aria-atomic="true"></p>
    </div>
  </div>

  <div class="relative mt-15 -mx-6 md:-mx-10">
    <div class="container w-[calc(100%-3rem)] md:w-[calc(100%-5rem)]">
      <div id="hair-loss-track" class="grid grid-cols-1 gap-3 md:grid-cols-4 js-hair-loss-track"
           role="group" aria-roledescription="carousel" aria-label="Hair loss issues">
        <a href="#"
           class="card group flex flex-col bg-white ring-1 ring-slate-200 px-6 pt-5 rounded-2xl overflow-hidden transition duration-200 ease-out hover:-translate-y-2
                  hover:shadow-xl hover:ring-2 hover:shadow-blue-300 hover:ring-blue-600">
          <h3 class="text-lg text-red-600 transition duration-200 ease-out group-hover:text-red-700">Hair Loss</h3>
          <p class="mt-3 text-sm text-slate-500 transition duration-200 ease-out group-hover:text-slate-600">
            A general change in hair density, growth or shedding that can have several underlying causes.
          </p>
          <div class="relative aspect-4/3 bg-white rounded-xl mt-auto -mx-6 overflow-hidden">
            <img
              src="assets/images/hair-loss/hair-loss-thinning-hair.png"
              alt="Thinning hair with reduced density across the scalp"
              width="1448"
              height="1086"
              decoding="async"
              class="size-full object-cover transition duration-200 ease-out opacity-90 group-hover:opacity-100"
            />
            <div class="pointer-events-none absolute inset-y-0 left-0 w-30 bg-gradient-to-r from-white to-transparent"></div>
            <div class="pointer-events-none absolute inset-y-0 right-0 w-30 bg-gradient-to-l from-white to-transparent"></div>
          </div>
        </a>

        <a href="#"
           class="card group flex flex-col bg-white ring-1 ring-slate-200 px-6 pt-5 rounded-2xl overflow-hidden transition duration-200 ease-out hover:-translate-y-2
                  hover:shadow-xl hover:ring-2 hover:shadow-blue-300 hover:ring-blue-600">
          <h3 class="text-lg text-slate-950 transition duration-200 ease-out group-hover:text-blue-700">Male Pattern Baldness</h3>
          <p class="mt-3 text-sm text-slate-500 transition duration-200 ease-out group-hover:text-slate-600">
            Gradual thinning at the temples, crown or hairline caused by progressive follicle miniaturisation.
          </p>
          <div class="relative aspect-4/3 bg-white rounded-xl mt-auto -mx-6 overflow-hidden">
            <img
              src="assets/images/hair-loss/hair-loss-male-pattern-baldness.png"
              alt="Male pattern baldness hair loss with visible crown thinning"
              width="1448"
              height="1086"
              loading="lazy"
              decoding="async"
              class="size-full object-cover transition duration-200 ease-out opacity-90 group-hover:opacity-100"
            />
            <div class="pointer-events-none absolute inset-y-0 left-0 w-1/3 bg-gradient-to-r from-white to-transparent"></div>
            <div class="pointer-events-none absolute inset-y-0 right-0 w-1/3 bg-gradient-to-l from-white to-transparent"></div>
          </div>
        </a>

        <a href="#"
           class="card group flex flex-col bg-white ring-1 ring-slate-200 px-6 pt-5 rounded-2xl overflow-hidden transition duration-200 ease-out hover:-translate-y-2
                  hover:shadow-xl hover:ring-2 hover:shadow-blue-300 hover:ring-blue-600">
          <h3 class="text-lg text-slate-950 transition duration-200 ease-out group-hover:text-blue-700">Female Pattern Hair Loss</h3>
          <p class="mt-3 text-sm text-slate-500 transition duration-200 ease-out group-hover:text-slate-600">
            Diffuse thinning, wider parting or reduced volume that may need medical, hormonal or scalp assessment.
          </p>
          <div class="relative aspect-4/3 bg-white rounded-xl mt-auto -mx-6 overflow-hidden">
            <img
              src="assets/images/hair-loss/hair-loss-female-hair-loss.png"
              alt="Female hair loss with diffuse thinning and wider centre parting"
              width="1448"
              height="1086"
              loading="lazy"
              decoding="async"
              class="size-full object-cover transition duration-200 ease-out opacity-90 group-hover:opacity-100"
            />
            <div class="pointer-events-none absolute inset-y-0 left-0 w-30 bg-gradient-to-r from-white to-transparent"></div>
            <div class="pointer-events-none absolute inset-y-0 right-0 w-30 bg-gradient-to-l from-white to-transparent"></div>
          </div>
        </a>

        <a href="#"
           class="card group flex flex-col bg-white ring-1 ring-slate-200 px-6 pt-5 rounded-2xl overflow-hidden transition duration-200 ease-out hover:-translate-y-2
                  hover:shadow-xl hover:ring-2 hover:shadow-blue-300 hover:ring-blue-600">
          <h3 class="text-lg text-slate-950 transition duration-200 ease-out group-hover:text-blue-700">Receding Hairline</h3>
          <p class="mt-3 text-sm text-slate-500 transition duration-200 ease-out group-hover:text-slate-600">
            Hairline recession around the temples or frontal area, often best managed early before it progresses.
          </p>
          <div class="relative aspect-4/3 bg-white rounded-xl mt-auto -mx-6 overflow-hidden">
            <img
              src="assets/images/hair-loss/hair-loss-receding-hairline.png"
              alt="Receding hairline with temple and frontal hair loss"
              width="1448"
              height="1086"
              loading="lazy"
              decoding="async"
              class="size-full object-cover transition duration-200 ease-out opacity-90 group-hover:opacity-100"
            />
            <div class="pointer-events-none absolute inset-y-0 left-0 w-30 bg-gradient-to-r from-white to-transparent"></div>
            <div class="pointer-events-none absolute inset-y-0 right-0 w-30 bg-gradient-to-l from-white to-transparent"></div>
          </div>
        </a>

        <a href="#"
           class="card group flex flex-col bg-white ring-1 ring-slate-200 px-6 pt-5 rounded-2xl overflow-hidden transition duration-200 ease-out hover:-translate-y-2
                  hover:shadow-xl hover:ring-2 hover:shadow-blue-300 hover:ring-blue-600">
          <h3 class="text-lg text-slate-950 transition duration-200 ease-out group-hover:text-blue-700">Thinning Hair</h3>
          <p class="mt-3 text-sm text-slate-500 transition duration-200 ease-out group-hover:text-slate-600">
            Reduced density, weaker strands or flatter volume that can affect the overall appearance of fullness.
          </p>
          <div class="relative aspect-4/3 bg-white rounded-xl mt-auto -mx-6 overflow-hidden">
            <img
              src="assets/images/hair-loss/hair-loss-thinning-hair.png"
              alt="Thinning hair with reduced density across the scalp"
              width="1448"
              height="1086"
              loading="lazy"
              decoding="async"
              class="size-full object-cover transition duration-200 ease-out opacity-90 group-hover:opacity-100"
            />
            <div class="pointer-events-none absolute inset-y-0 left-0 w-30 bg-gradient-to-r from-white to-transparent"></div>
            <div class="pointer-events-none absolute inset-y-0 right-0 w-30 bg-gradient-to-l from-white to-transparent"></div>
          </div>
        </a>

        <a href="#"
           class="card group flex flex-col bg-white ring-1 ring-slate-200 px-6 pt-5 rounded-2xl overflow-hidden transition duration-200 ease-out hover:-translate-y-2
                  hover:shadow-xl hover:ring-2 hover:shadow-blue-300 hover:ring-blue-600">
          <h3 class="text-lg text-slate-950 transition duration-200 ease-out group-hover:text-blue-700">Crown Hair Loss</h3>
          <p class="mt-3 text-sm text-slate-500 transition duration-200 ease-out group-hover:text-slate-600">
            Visible thinning or balding around the crown area that may continue expanding without treatment.
          </p>
          <div class="relative aspect-4/3 bg-white rounded-xl mt-auto -mx-6 overflow-hidden">
            <img
              src="assets/images/hair-loss/hair-loss-crown-hair-loss.png"
              alt="Crown hair loss with visible thinning around the vertex"
              width="1448"
              height="1086"
              loading="lazy"
              decoding="async"
              class="size-full object-cover transition duration-200 ease-out opacity-90 group-hover:opacity-100"
            />
            <div class="pointer-events-none absolute inset-y-0 left-0 w-30 bg-gradient-to-r from-white to-transparent"></div>
            <div class="pointer-events-none absolute inset-y-0 right-0 w-30 bg-gradient-to-l from-white to-transparent"></div>
          </div>
        </a>

        <a href="#"
           class="card group flex flex-col bg-white ring-1 ring-slate-200 px-6 pt-5 rounded-2xl overflow-hidden transition duration-200 ease-out hover:-translate-y-2
                  hover:shadow-xl hover:ring-2 hover:shadow-blue-300 hover:ring-blue-600">
          <h3 class="text-lg text-slate-950 transition duration-200 ease-out group-hover:text-blue-700">Excessive Hair Shedding</h3>
          <p class="mt-3 text-sm text-slate-500 transition duration-200 ease-out group-hover:text-slate-600">
            Increased daily hair fall that may be linked to stress, nutrition, scalp health or medical triggers.
          </p>
          <div class="relative aspect-4/3 bg-white rounded-xl mt-auto -mx-6 overflow-hidden">
            <img
              src="assets/images/hair-loss/hair-loss-hair-shedding.png"
              alt="Hair shedding with subtle loose strands and reduced hair density"
              width="1448"
              height="1086"
              loading="lazy"
              decoding="async"
              class="size-full object-cover transition duration-200 ease-out opacity-90 group-hover:opacity-100"
            />
            <div class="pointer-events-none absolute inset-y-0 left-0 w-30 bg-gradient-to-r from-white to-transparent"></div>
            <div class="pointer-events-none absolute inset-y-0 right-0 w-30 bg-gradient-to-l from-white to-transparent"></div>
          </div>
        </a>

        <a href="#"
           class="card group flex flex-col bg-white ring-1 ring-slate-200 px-6 pt-5 rounded-2xl overflow-hidden transition duration-200 ease-out hover:-translate-y-2
                  hover:shadow-xl hover:ring-2 hover:shadow-blue-300 hover:ring-blue-600">
          <h3 class="text-lg text-red-600 transition duration-200 ease-out group-hover:text-red-700">Alopecia Areata</h3>
          <p class="mt-3 text-sm text-slate-500 transition duration-200 ease-out group-hover:text-slate-600">
            Sudden, clearly defined patches of hair loss that may appear on the scalp or other areas.
          </p>
          <div class="relative aspect-4/3 bg-white rounded-xl mt-auto -mx-6 overflow-hidden">
            <img
              src="assets/images/hair-loss/hair-loss-crown-hair-loss.png"
              alt="Crown hair loss with visible thinning around the vertex"
              width="1448"
              height="1086"
              loading="lazy"
              decoding="async"
              class="size-full object-cover transition duration-200 ease-out opacity-90 group-hover:opacity-100"
            />
            <div class="pointer-events-none absolute inset-y-0 left-0 w-30 bg-gradient-to-r from-white to-transparent"></div>
            <div class="pointer-events-none absolute inset-y-0 right-0 w-30 bg-gradient-to-l from-white to-transparent"></div>
          </div>
        </a>

        <a href="#"
           class="card group flex flex-col bg-white ring-1 ring-slate-200 px-6 pt-5 rounded-2xl overflow-hidden transition duration-200 ease-out hover:-translate-y-2
                  hover:shadow-xl hover:ring-2 hover:shadow-blue-300 hover:ring-blue-600">
          <h3 class="text-lg text-red-600 transition duration-200 ease-out group-hover:text-red-700">Telogen Effluvium</h3>
          <p class="mt-3 text-sm text-slate-500 transition duration-200 ease-out group-hover:text-slate-600">
            Temporary, widespread shedding that can follow illness, stress, weight changes or medication.
          </p>
          <div class="relative aspect-4/3 bg-white rounded-xl mt-auto -mx-6 overflow-hidden">
            <img
              src="assets/images/hair-loss/hair-loss-hair-shedding.png"
              alt="Hair shedding with subtle loose strands and reduced hair density"
              width="1448"
              height="1086"
              loading="lazy"
              decoding="async"
              class="size-full object-cover transition duration-200 ease-out opacity-90 group-hover:opacity-100"
            />
            <div class="pointer-events-none absolute inset-y-0 left-0 w-30 bg-gradient-to-r from-white to-transparent"></div>
            <div class="pointer-events-none absolute inset-y-0 right-0 w-30 bg-gradient-to-l from-white to-transparent"></div>
          </div>
        </a>

        <a href="#"
           class="card group flex flex-col bg-white ring-1 ring-slate-200 px-6 pt-5 rounded-2xl overflow-hidden transition duration-200 ease-out hover:-translate-y-2
                  hover:shadow-xl hover:ring-2 hover:shadow-blue-300 hover:ring-blue-600">
          <h3 class="text-lg text-red-600 transition duration-200 ease-out group-hover:text-red-700">Postpartum Hair Loss</h3>
          <p class="mt-3 text-sm text-slate-500 transition duration-200 ease-out group-hover:text-slate-600">
            Increased shedding after childbirth as hormone levels and the natural hair cycle readjust.
          </p>
          <div class="relative aspect-4/3 bg-white rounded-xl mt-auto -mx-6 overflow-hidden">
            <img
              src="assets/images/hair-loss/hair-loss-female-hair-loss.png"
              alt="Female hair loss with diffuse thinning and wider centre parting"
              width="1448"
              height="1086"
              loading="lazy"
              decoding="async"
              class="size-full object-cover transition duration-200 ease-out opacity-90 group-hover:opacity-100"
            />
            <div class="pointer-events-none absolute inset-y-0 left-0 w-30 bg-gradient-to-r from-white to-transparent"></div>
            <div class="pointer-events-none absolute inset-y-0 right-0 w-30 bg-gradient-to-l from-white to-transparent"></div>
          </div>
        </a>

        <a href="#"
           class="card group flex flex-col bg-white ring-1 ring-slate-200 px-6 pt-5 rounded-2xl overflow-hidden transition duration-200 ease-out hover:-translate-y-2
                  hover:shadow-xl hover:ring-2 hover:shadow-blue-300 hover:ring-blue-600">
          <h3 class="text-lg text-red-600 transition duration-200 ease-out group-hover:text-red-700">Stress-Related Hair Loss</h3>
          <p class="mt-3 text-sm text-slate-500 transition duration-200 ease-out group-hover:text-slate-600">
            Noticeable shedding or thinning that may develop after physical or emotional stress.
          </p>
          <div class="relative aspect-4/3 bg-white rounded-xl mt-auto -mx-6 overflow-hidden">
            <img
              src="assets/images/hair-loss/hair-loss-hair-shedding.png"
              alt="Hair shedding with subtle loose strands and reduced hair density"
              width="1448"
              height="1086"
              loading="lazy"
              decoding="async"
              class="size-full object-cover transition duration-200 ease-out opacity-90 group-hover:opacity-100"
            />
            <div class="pointer-events-none absolute inset-y-0 left-0 w-30 bg-gradient-to-r from-white to-transparent"></div>
            <div class="pointer-events-none absolute inset-y-0 right-0 w-30 bg-gradient-to-l from-white to-transparent"></div>
          </div>
        </a>

        <a href="#"
           class="card group flex flex-col bg-white ring-1 ring-slate-200 px-6 pt-5 rounded-2xl overflow-hidden transition duration-200 ease-out hover:-translate-y-2
                  hover:shadow-xl hover:ring-2 hover:shadow-blue-300 hover:ring-blue-600">
          <h3 class="text-lg text-red-600 transition duration-200 ease-out group-hover:text-red-700">Hormonal Hair Loss</h3>
          <p class="mt-3 text-sm text-slate-500 transition duration-200 ease-out group-hover:text-slate-600">
            Hair thinning or shedding associated with hormonal shifts, imbalances or life-stage changes.
          </p>
          <div class="relative aspect-4/3 bg-white rounded-xl mt-auto -mx-6 overflow-hidden">
            <img
              src="assets/images/hair-loss/hair-loss-female-hair-loss.png"
              alt="Female hair loss with diffuse thinning and wider centre parting"
              width="1448"
              height="1086"
              loading="lazy"
              decoding="async"
              class="size-full object-cover transition duration-200 ease-out opacity-90 group-hover:opacity-100"
            />
            <div class="pointer-events-none absolute inset-y-0 left-0 w-30 bg-gradient-to-r from-white to-transparent"></div>
            <div class="pointer-events-none absolute inset-y-0 right-0 w-30 bg-gradient-to-l from-white to-transparent"></div>
          </div>
        </a>

        <a href="#"
           class="card group flex flex-col bg-white ring-1 ring-slate-200 px-6 pt-5 rounded-2xl overflow-hidden transition duration-200 ease-out hover:-translate-y-2
                  hover:shadow-xl hover:ring-2 hover:shadow-blue-300 hover:ring-blue-600">
          <h3 class="text-lg text-red-600 transition duration-200 ease-out group-hover:text-red-700">Bald Spots / Patchy Hair Loss</h3>
          <p class="mt-3 text-sm text-slate-500 transition duration-200 ease-out group-hover:text-slate-600">
            Localised areas of visible scalp where hair has thinned significantly or stopped growing.
          </p>
          <div class="relative aspect-4/3 bg-white rounded-xl mt-auto -mx-6 overflow-hidden">
            <img
              src="assets/images/hair-loss/hair-loss-crown-hair-loss.png"
              alt="Crown hair loss with visible thinning around the vertex"
              width="1448"
              height="1086"
              loading="lazy"
              decoding="async"
              class="size-full object-cover transition duration-200 ease-out opacity-90 group-hover:opacity-100"
            />
            <div class="pointer-events-none absolute inset-y-0 left-0 w-30 bg-gradient-to-r from-white to-transparent"></div>
            <div class="pointer-events-none absolute inset-y-0 right-0 w-30 bg-gradient-to-l from-white to-transparent"></div>
          </div>
        </a>

        <a href="#"
           class="card group flex flex-col bg-white ring-1 ring-slate-200 px-6 pt-5 rounded-2xl overflow-hidden transition duration-200 ease-out hover:-translate-y-2
                  hover:shadow-xl hover:ring-2 hover:shadow-blue-300 hover:ring-blue-600">
          <h3 class="text-lg text-red-600 transition duration-200 ease-out group-hover:text-red-700">Diffuse Hair Thinning</h3>
          <p class="mt-3 text-sm text-slate-500 transition duration-200 ease-out group-hover:text-slate-600">
            Evenly reduced density across the scalp rather than thinning in one distinct area.
          </p>
          <div class="relative aspect-4/3 bg-white rounded-xl mt-auto -mx-6 overflow-hidden">
            <img
              src="assets/images/hair-loss/hair-loss-thinning-hair.png"
              alt="Thinning hair with reduced density across the scalp"
              width="1448"
              height="1086"
              loading="lazy"
              decoding="async"
              class="size-full object-cover transition duration-200 ease-out opacity-90 group-hover:opacity-100"
            />
            <div class="pointer-events-none absolute inset-y-0 left-0 w-30 bg-gradient-to-r from-white to-transparent"></div>
            <div class="pointer-events-none absolute inset-y-0 right-0 w-30 bg-gradient-to-l from-white to-transparent"></div>
          </div>
        </a>

        <a href="#"
           class="card group flex flex-col bg-white ring-1 ring-slate-200 px-6 pt-5 rounded-2xl overflow-hidden transition duration-200 ease-out hover:-translate-y-2
                  hover:shadow-xl hover:ring-2 hover:shadow-blue-300 hover:ring-blue-600">
          <h3 class="text-lg text-red-600 transition duration-200 ease-out group-hover:text-red-700">Hairline Thinning</h3>
          <p class="mt-3 text-sm text-slate-500 transition duration-200 ease-out group-hover:text-slate-600">
            Reduced density along the frontal hairline that can make the scalp or temples more visible.
          </p>
          <div class="relative aspect-4/3 bg-white rounded-xl mt-auto -mx-6 overflow-hidden">
            <img
              src="assets/images/hair-loss/hair-loss-receding-hairline.png"
              alt="Receding hairline with temple and frontal hair loss"
              width="1448"
              height="1086"
              loading="lazy"
              decoding="async"
              class="size-full object-cover transition duration-200 ease-out opacity-90 group-hover:opacity-100"
            />
            <div class="pointer-events-none absolute inset-y-0 left-0 w-30 bg-gradient-to-r from-white to-transparent"></div>
            <div class="pointer-events-none absolute inset-y-0 right-0 w-30 bg-gradient-to-l from-white to-transparent"></div>
          </div>
        </a>

        <a href="#"
           class="card group flex flex-col bg-white ring-1 ring-slate-200 px-6 pt-5 rounded-2xl overflow-hidden transition duration-200 ease-out hover:-translate-y-2
                  hover:shadow-xl hover:ring-2 hover:shadow-blue-300 hover:ring-blue-600">
          <h3 class="text-lg text-red-600 transition duration-200 ease-out group-hover:text-red-700">Traction Alopecia</h3>
          <p class="mt-3 text-sm text-slate-500 transition duration-200 ease-out group-hover:text-slate-600">
            Hair loss caused by repeated pulling from tight hairstyles, extensions or prolonged tension.
          </p>
          <div class="relative aspect-4/3 bg-white rounded-xl mt-auto -mx-6 overflow-hidden">
            <img
              src="assets/images/hair-loss/hair-loss-female-hair-loss.png"
              alt="Female hair loss with diffuse thinning and wider centre parting"
              width="1448"
              height="1086"
              loading="lazy"
              decoding="async"
              class="size-full object-cover transition duration-200 ease-out opacity-90 group-hover:opacity-100"
            />
            <div class="pointer-events-none absolute inset-y-0 left-0 w-30 bg-gradient-to-r from-white to-transparent"></div>
            <div class="pointer-events-none absolute inset-y-0 right-0 w-30 bg-gradient-to-l from-white to-transparent"></div>
          </div>
        </a>
      </div>

    </div>
    <div aria-hidden="true"
         class="pointer-events-none absolute -inset-y-3 left-0 z-10 w-6 bg-gradient-to-r from-slate-100 to-transparent md:w-15 lg:w-24"></div>
    <div aria-hidden="true"
         class="pointer-events-none absolute -inset-y-3 right-0 z-10 w-6 bg-gradient-to-l from-slate-100 to-transparent md:w-15 lg:w-24"></div>
  </div>

  <div class="container">
    <div class="mt-15 flex flex-col gap-4 border-t border-slate-200 pt-10 md:flex-row md:items-center md:justify-between">
      <div>
        <h3 class="text-2xl text-slate-950">Not sure what type of hair loss you have?</h3>
        <div class="text-sm text-slate-500 mt-2">Get a private photo-based review from our medical team.</div>
      </div>
      <a href="#" class="button bg-slate-900 text-white md:shrink-0">
        <div class="flex-split">
          <div>Get Free Hair Analysis</div>
          <div class="size-7 -m-1 -mr-4 ml-5 rounded-full flex items-center justify-center bg-white text-slate-900">
            <?php svg('arrow-right-up-line', 'size-5'); ?>
          </div>
        </div>
      </a>
    </div>
  </div>
</section>
