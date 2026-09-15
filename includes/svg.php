<?php

if (!function_exists('svg')) {
  function svg(string $svg_name, string $class = ''): void
  {
    $svg_icons = [
      'arrow-left-line' => '<svg viewBox="0 0 24 24" fill="currentColor"'
        . ' xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"{{ class }}>'
        . '<path d="M7.82843 10.9999H20V12.9999H7.82843L13.1924 18.3638L11.7782 19.778'
        . 'L4 11.9999L11.7782 4.22168L13.1924 5.63589L7.82843 10.9999Z"/></svg>',
      'arrow-right-line' => '<svg viewBox="0 0 24 24" fill="currentColor"'
        . ' xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"{{ class }}>'
        . '<path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999'
        . 'L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"/></svg>',
      'arrow-right-up-line' => '<svg viewBox="0 0 24 24" fill="currentColor"'
        . ' xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"{{ class }}>'
        . '<path d="M16.0037 9.41421L7.39712 18.0208L5.98291 16.6066L14.5895 8H7.00373'
        . 'V6H18.0037V17H16.0037V9.41421Z"/></svg>',
      'image-2-line' => '<svg viewBox="0 0 24 24" fill="currentColor"'
        . ' xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"{{ class }}>'
        . '<path d="M5 11.1005L7 9.1005L12.5 14.6005L16 11.1005L19 14.1005V5H5V11.1005Z'
        . 'M5 13.9289V19H8.1005L11.0858 16.0147L7 11.9289L5 13.9289Z'
        . 'M10.9289 19H19V16.9289L16 13.9289L10.9289 19Z'
        . 'M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4'
        . 'C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3Z'
        . 'M15.5 10C14.6716 10 14 9.32843 14 8.5C14 7.67157 14.6716 7 15.5 7'
        . 'C16.3284 7 17 7.67157 17 8.5C17 9.32843 16.3284 10 15.5 10Z"/></svg>',
      'shopping-bag-3-line' => '<svg viewBox="0 0 24 24" fill="currentColor"'
        . ' xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"{{ class }}>'
        . '<path d="M6.50488 2H17.5049C17.8196 2 18.116 2.14819 18.3049 2.4L21.0049 6V21'
        . 'C21.0049 21.5523 20.5572 22 20.0049 22H4.00488C3.4526 22 3.00488 21.5523 3.00488 21V6'
        . 'L5.70488 2.4C5.89374 2.14819 6.19013 2 6.50488 2ZM19.0049 8H5.00488V20H19.0049V8Z'
        . 'M18.5049 6L17.0049 4H7.00488L5.50488 6H18.5049ZM9.00488 10V12C9.00488 13.6569 10.348 15 12.0049 15'
        . 'C13.6617 15 15.0049 13.6569 15.0049 12V10H17.0049V12C17.0049 14.7614 14.7663 17 12.0049 17'
        . 'C9.24346 17 7.00488 14.7614 7.00488 12V10H9.00488Z"/></svg>',
      'menu-line' => '<svg viewBox="0 0 24 24" fill="currentColor"'
        . ' xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"{{ class }}>'
        . '<path d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z"/></svg>',
      'close-line' => '<svg viewBox="0 0 24 24" fill="currentColor"'
        . ' xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"{{ class }}>'
        . '<path d="M11.9997 10.5865L16.9495 5.63672L18.3637 7.05093L13.4139 12.0007L18.3637 16.9504'
        . 'L16.9495 18.3646L11.9997 13.4149L7.04996 18.3646L5.63574 16.9504L10.5855 12.0007'
        . 'L5.63574 7.05093L7.04996 5.63672L11.9997 10.5865Z"/></svg>',
      'arrow-down-s-line' => '<svg viewBox="0 0 24 24" fill="currentColor"'
        . ' xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"{{ class }}>'
        . '<path d="M11.9999 13.1714L16.9497 8.22168L18.3639 9.63589L11.9999 15.9999L5.63599 9.63589'
        . 'L7.0502 8.22168L11.9999 13.1714Z"/></svg>',
      'star-s-fill' => '<svg viewBox="0 0 24 24" fill="currentColor"'
        . ' xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"{{ class }}>'
        . '<path d="M11.9998 17L6.12197 20.5902L7.72007 13.8906L2.48926 9.40983'
        . 'L9.35479 8.85942L11.9998 2.5L14.6449 8.85942L21.5104 9.40983'
        . 'L16.2796 13.8906L17.8777 20.5902L11.9998 17Z"/></svg>',
    ];

    $resolved_svg_name = trim($svg_name);
    if ($resolved_svg_name === '' || !isset($svg_icons[$resolved_svg_name])) {
      return;
    }

    $class_attribute = trim($class);
    $class_markup    = $class_attribute !== '' ? ' class="' . e($class_attribute) . '"' : '';

    echo str_replace('{{ class }}', $class_markup, $svg_icons[$resolved_svg_name]);
  }
}
