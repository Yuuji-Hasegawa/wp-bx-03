<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head
  prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# <?php echo get_ogp_type();?>: http://ogp.me/ns/<?php echo get_ogp_type();?>#">
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.defer = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer',
      '<?php echo get_vars('site', 'gtm');?>'
    );
  </script>
  <!-- End Google Tag Manager -->
  <meta charset="<?php bloginfo('charset');?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
  <?php wp_head();?>
</head>

<body <?php body_class();?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe
      src="https://www.googletagmanager.com/ns.html?id=<?php echo get_vars('site', 'gtm');?>"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <header class="o-center c-header u-bg-qua">
    <a href="<?php echo home_url('/');?>"
      class="o-icon-parent o-icon-parent--center o-icon-parent--gap-s c-logo-link c-logo-link--header">
      <svg class="o-icon c-display-l" width="670" height="403" viewBox="0 0 670 403" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M586.221 268.039L502.504 402.075L418.733 268.039H586.221Z" fill="#69AEE0" />
        <path d="M334.996 402.075L418.744 268.029L502.492 402.075H334.996Z" fill="#70B1E1" />
        <path d="M418.723 268.039L334.996 402.075L251.246 268.039H418.723Z" fill="#92CAEF" />
        <path d="M167.497 402.075L251.245 268.029L334.993 402.075H167.497Z" fill="#92CAEF" />
        <path d="M0 402.075L83.7487 268.039L167.497 402.085L0 402.075Z" fill="#7EBAE6" />
        <path d="M670 134.035L586.252 268.039L502.491 134.035H670Z" fill="#85C1EB" />
        <path d="M418.743 268.039L502.481 134.035L586.218 268.039H418.743Z" fill="#7EBAE6" />
        <path d="M502.492 134.035L418.744 268.039L334.996 134.035H502.492Z" fill="#7BB8E5" />
        <path d="M251.246 268.039L334.996 134.035L418.723 268.039H251.246Z" fill="#85C1EB" />
        <path d="M334.993 134.035L251.245 268.039L167.497 134.035H334.993Z" fill="#73B2E2" />
        <path d="M83.749 268.039L167.498 134.035L251.225 268.039H83.749Z" fill="#67A0D3" />
        <path d="M502.491 134.035L586.231 0L669.989 134.045L502.491 134.035Z" fill="#99D2F3" />
        <path d="M334.996 134.035L418.744 0L502.492 134.045L334.996 134.035Z" fill="#82BEE9" />
        <path d="M167.497 134.035L251.245 0L334.993 134.045L167.497 134.035Z" fill="#73B2E2" />
        <path d="M251.225 0L167.498 134.035L83.749 0H251.225Z" fill="#65A5DA" />
      </svg>
      <span class="c-logo-label c-logo-label--header c-display-m u-font-logo u-flex-shrink-none">BLUE B NOSE</span>
    </a>
    <button type="button" class="o-box o-box--button o-box--square-button o-box--menu-btn u-pc-none u-block-right"
      aria-label="menu open" aria-controls="spMenu" aria-expanded="false">
      <span class="c-menu-bars"></span>
    </button>
  </header>
  <nav class="o-center u-bg-qua u-pc-only u-pb-m">
    <ul class="o-cluster o-cluster--center o-cluter--gap-none">
      <li><a href="<?php echo home_url('/');?>"
          class="c-pc-link c-display-s u-pl-m u-pr-m u-text-weight-m u-font-en-con">HOME</a></li>
      <li><a
          href="<?php echo home_url('/product/');?>"
          class="c-pc-link c-display-s u-pl-m u-pr-m u-text-weight-m u-font-en-con">PRODUCT</a></li>
      <li><a
          href="<?php echo home_url('/gallery/');?>"
          class="c-pc-link c-display-s u-pl-m u-pr-m u-text-weight-m u-font-en-con">GALLERY</a></li>
      <li><a
          href="<?php echo home_url('/aboutus/');?>"
          class="c-pc-link c-display-s u-pl-m u-pr-m u-text-weight-m u-font-en-con">ABOUT US</a></li>
      <li><a
          href="<?php echo home_url('/inquiry/');?>"
          class="c-pc-link c-display-s u-pl-m u-pr-m u-text-weight-m u-font-en-con">INQUIRY</a></li>
    </ul>
  </nav>
  <div id="spMenu" class="c-sp-menu u-bg-gradient" aria-hidden="true" tabindex="-1">
    <div class="o-center c-header u-mb-m">
      <a href="<?php echo home_url('/');?>"
        class="o-icon-parent o-icon-parent--center o-icon-parent--gap-s c-logo-link c-logo-link--header">
        <svg class="o-icon c-display-l" width="670" height="403" viewBox="0 0 670 403" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path d="M586.221 268.039L502.504 402.075L418.733 268.039H586.221Z" fill="#69AEE0" />
          <path d="M334.996 402.075L418.744 268.029L502.492 402.075H334.996Z" fill="#70B1E1" />
          <path d="M418.723 268.039L334.996 402.075L251.246 268.039H418.723Z" fill="#92CAEF" />
          <path d="M167.497 402.075L251.245 268.029L334.993 402.075H167.497Z" fill="#92CAEF" />
          <path d="M0 402.075L83.7487 268.039L167.497 402.085L0 402.075Z" fill="#7EBAE6" />
          <path d="M670 134.035L586.252 268.039L502.491 134.035H670Z" fill="#85C1EB" />
          <path d="M418.743 268.039L502.481 134.035L586.218 268.039H418.743Z" fill="#7EBAE6" />
          <path d="M502.492 134.035L418.744 268.039L334.996 134.035H502.492Z" fill="#7BB8E5" />
          <path d="M251.246 268.039L334.996 134.035L418.723 268.039H251.246Z" fill="#85C1EB" />
          <path d="M334.993 134.035L251.245 268.039L167.497 134.035H334.993Z" fill="#73B2E2" />
          <path d="M83.749 268.039L167.498 134.035L251.225 268.039H83.749Z" fill="#67A0D3" />
          <path d="M502.491 134.035L586.231 0L669.989 134.045L502.491 134.035Z" fill="#99D2F3" />
          <path d="M334.996 134.035L418.744 0L502.492 134.045L334.996 134.035Z" fill="#82BEE9" />
          <path d="M167.497 134.035L251.245 0L334.993 134.045L167.497 134.035Z" fill="#73B2E2" />
          <path d="M251.225 0L167.498 134.035L83.749 0H251.225Z" fill="#65A5DA" />
        </svg>
        <span class="c-logo-label c-logo-label--header c-display-m u-font-logo u-flex-shrink-none">BLUE B NOSE</span>
      </a>
      <button type="button" class="o-box o-box--button o-box--square-button o-box--menu-btn u-pc-none u-block-right"
        aria-label="menu open" aria-controls="spMenu" aria-expanded="false">
        <span class="c-menu-bars"></span>
      </button>
    </div>
    <nav class="u-mb-m">
      <ul class="o-stack">
        <li><a class="c-sp-link c-content-l u-text-weight-b"
            href="<?php echo home_url('/');?>">HOME</a>
        </li>
        <li><a class="c-sp-link c-content-l u-text-weight-b"
            href="<?php echo home_url('/product/');?>">PRODUCT</a>
        </li>
        <li><a class="c-sp-link c-content-l u-text-weight-b"
            href="<?php echo home_url('/gallery/');?>">GALLERY</a>
        </li>
        <li><a class="c-sp-link c-content-l u-text-weight-b"
            href="<?php echo home_url('/aboutus/');?>">ABOUT
            US</a></li>
        <li><a class="c-sp-link c-content-l u-text-weight-b"
            href="<?php echo home_url('/inquiry/');?>">INQUIRY</a>
        </li>
      </ul>
    </nav>
    <ul class="o-stack u-mb-m">
      <li><a class="c-sp-link c-content-m u-text-weight-m"
          href="<?php echo home_url('/company/');?>">COMPANY</a>
      </li>
      <li><a class="c-sp-link c-content-m u-text-weight-m u-flex-shrink-none"
          href="<?php echo home_url('/terms/');?>">TERM
          OF USE</a></li>
      <li><a class="c-sp-link c-content-m u-text-weight-m"
          href="<?php echo home_url('/privacy-policy/');?>">PRIVACY
          POLICY</a></li>
    </ul>
    <div class="c-sidebar-bottom u-pb-2xl">
      <h3 class="c-display-s u-text-weight-m u-font-en-con">Follow Us</h3>
      <div class="o-cluster u-mb-m">
        <a class="c-sns-link c-display-m"
          href="<?php echo get_vars('sns', 'fb');?>"
          target="_blank" rel="noopener" aria-label="Goto Facebook">
          <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path
              d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"
              fill="currentColor"></path>
          </svg>
        </a>
        <a class="c-sns-link c-display-m"
          href="<?php echo get_vars('sns', 'tw');?>"
          target="_blank" rel="noopener" aria-label="Goto Twitter">
          <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path
              d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"
              fill="currentColor" />
          </svg>
        </a>
        <a class="c-sns-link c-display-m"
          href="<?php echo get_vars('sns', 'instagram');?>"
          target="_blank" rel="noopener" aria-label="Goto Instagram">
          <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
            <path
              d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
              fill="currentColor"></path>
          </svg>
        </a>
      </div>
      <p class="c-suppl-m u-font-en-con">
        <?php echo get_vars('site', 'copyright');?>
      </p>
    </div>
  </div>
  <main>