<?php

/**
 * Component: Footer
 * Purpose: Renders the shared consultation CTA and clinic footer.
 * Structure: CTA media/content followed by clinic details and navigation.
 * Data: placeholder_images (optional bool) replaces CTA photography with a slate placeholder;
 *       consultation_url (optional string) sets the CTA links. Existing defaults are preserved.
 */

?>
<section class="section section-cta bg-slate-900">
  <?php if ($placeholder_images ?? false) { ?>
  <div class="pointer-events-none absolute inset-0 aspect-video w-full bg-slate-300" aria-hidden="true"></div>
  <?php } else { ?>
  <img
    src="<?= asset_url('assets/images/hero-footer-cta.webp'); ?>"
    alt=""
    loading="lazy"
    decoding="async"
    class="hidden md:block pointer-events-none absolute inset-0 h-full w-full object-cover object-[70%_center] md:object-center"
  >
  <?php } ?>
  <div
    aria-hidden="true"
    class="pointer-events-none absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/80 via-45% to-slate-900/55"
  ></div>
  <div class="container relative">
    <div class="md:text-center">
      <div class="headline-topic mb-8 text-xs text-slate-300 uppercase">Free · No obligation · Response within 24 hours</div>
      <h2 class="headline-title text-2xl md:text-4xl md:leading-12 text-slate-100 max-w-5xl mx-auto">
        <span class="md:text-5xl">Send two photos.</span> 
        <br>
        Get a <span class="underline underline-offset-6">personalised</span> treatment plan & quote.
      </h2>
      <div class="sm:flex md:justify-center gap-3 mt-10">
        <a href="<?= e($consultation_url ?? '#'); ?>" class="button bg-slate-100 text-slate-900 inline-flex">
          <div class="flex-split">
            <div>Get Free Hair Analysis</div>
            <div class="size-7 -m-1 -mr-4 ml-5 rounded-full flex items-center justify-center text-white bg-gradient-to-br from-purple-500 via-indigo-600 to-indigo-500">
              <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="size-5"><path d="M16.0037 9.41421L7.39712 18.0208L5.98291 16.6066L14.5895 8H7.00373V6H18.0037V17H16.0037V9.41421Z"></path></svg>          </div>
          </div>  
        </a>
        <a href="<?= e($consultation_url ?? '#'); ?>" class="button bg-slate-800/60 ring-2 ring-inset ring-slate-400 text-white mt-4 sm:mt-0 hidden sm:block">Chat on Whatsapp</a>
      </div>
      <div class="text-xs text-slate-300 mt-5">Your photos stay private · Personally reviewed by our medical team — never a bot.</div>
    </div>
  </div>
</section>

<section class="section section-footer md:text-sm text-slate-200 py-10 md:pt-30 bg-linear-to-t from-slate-950 to-slate-900">
  <div class="container">
    <div class="md:flex items-start gap-25">
      <div class="footer-address mr-auto ">
        <h3 class="footer-topic mb-3 text-xs text-slate-500 uppercase mt-8 sm:mt-6">Our Address</h3>
        <div class="text-base">
          <div>RR Hair Clinic,</div>
          <div class="mb-3">
          C-03-03 Blok C, Tamarind Square,<br>
          63000 Cyberjaya, Selangor.
          </div>
        </div>
        <div>+6011-1674-1858</div>
        <div>support@rrhairclinic.com</div>

        <h3 class="footer-topic mb-3 text-xs text-slate-500 uppercase mt-8 sm:mt-6">Working Hours</h3>
        <ul class="space-y-1">
          <li>Mon–Fri: 9:00 AM–6:00 PM</li>
          <li>Sat: 9:00 AM–1:00 PM</li>
          <li>Sun: Closed</li>
        </ul>
      </div>
      <div class="footer-links">
        <h3 class="footer-topic mb-3 text-xs text-slate-500 uppercase mt-8 sm:mt-6">Hair Loss</h3>
        <ul class="space-y-1 sm:text-lg">
          <li><a href="#">Male Pattern Baldness</a></li>
          <li><a href="#">Female Hair Loss</a></li>
          <li><a href="#">Receding Hairline</a></li>
          <li><a href="#">Thinning Hair</a></li>
          <li><a href="#">Crown Hair Loss</a></li>
          <li><a href="#">Hair Shedding</a></li>
        </ul>

        <h3 class="footer-topic mb-3 text-xs text-slate-500 uppercase mt-8 sm:mt-6">Treatments</h3>
        <ul class="space-y-1 sm:text-lg">
          <li><a href="#">Hair Transplant</a></li>
          <li><a href="#">Sapphire FUE</a></li>
          <li><a href="#">PRP Hair Treatment</a></li>
          <li><a href="#">Hair Loss Medication</a></li>
          <li><a href="#">Scalp Treatment</a></li>
          <li><a href="#">Hair Regrowth Treatment</a></li>
        </ul>
      </div>
      <div class="footer-links">
        <h3 class="footer-topic mb-3 text-xs text-slate-500 uppercase mt-8 sm:mt-6">Products</h3>
        <ul class="space-y-1">
          <li><a href="#">All Products</a></li>
          <li><a href="#">Hair Growth</a></li>
          <li><a href="#">Hair Loss Shampoo</a></li>
          <li><a href="#">Scalp Care</a></li>
        </ul>

        <h3 class="footer-topic mb-3 text-xs text-slate-500 uppercase mt-8 sm:mt-6">Clinic</h3>
        <ul class="space-y-1">
          <li><a href="#">Our Doctors</a></li>
          <li><a href="#">Results & Case Studies</a></li>
          <li><a href="#">Frequently Asked Questions</a></li>
          <li><a href="#">Book Consultation</a></li>
          <li><a href="#">Contact Us</a></li>
          <li class="border-t border-slate-800 my-3 w-5"></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Shipping Policy</a></li>
          <li><a href="#">Cancellation & Refund</a></li>
          <li><a href="#">Terms & Conditions</a></li>
        </ul>
      </div>
      <div class="footer-social">
        <h3 class="footer-topic mb-3 text-xs text-slate-500 uppercase mt-8 sm:mt-6">Follow Us</h3>
        <ul class="space-y-1">
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">Tiktok</a></li>
        </ul>
      </div>
    </div>

    <div class="text-xs text-slate-400 mt-5 md:mt-20 pt-5 border-t border-slate-800 md:flex md:items-center md:justify-between">
      <div>RR Hair Clinic &copy; 2026 - All Rights Reserved.</div>
      <div class="mt-2 md:mt-0">RR Medical Group Sdn Bhd 202401006850 (1552710-H)</div>
    </div>

    <div class="footer-brand-text hidden md:block mt-20 text-center md:text-[180px] font-semibold leading-tight text-slate-900">
      RR Hair Clinic
    </div>
  </div>
</section>
