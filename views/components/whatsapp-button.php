<?php

/**
 * Component: WhatsApp button
 * Purpose: Keeps WhatsApp accessible and hides it on downward scroll after the hero.
 * Structure: Fixed circular link with a dismissible consultation dialog on tablet and desktop.
 * Data: None; uses the clinic contact number displayed in the footer.
 */

?>
<a
  href="https://wa.me/601116741858"
  target="_blank"
  rel="noopener noreferrer"
  class="whatsapp-button fixed bottom-6 right-5 z-40 flex size-16 items-center justify-center rounded-full
    bg-gradient-to-br from-lime-500 via-green-600 to-emerald-500
    ring-1 ring-inset ring-green-900/50
    shadow-xl shadow-slate-900/40
    text-white transition-all duration-300 ease-out motion-reduce:transition-none
    hover:bg-green-700 focus-visible:outline-2
    focus-visible:outline-offset-2 focus-visible:outline-green-700 js-whatsapp-consultation-link"
  aria-label="Chat with RR Hair Clinic on WhatsApp (opens in a new tab)"
>
  <?php svg('whatsapp-line', 'size-8'); ?>
</a>
