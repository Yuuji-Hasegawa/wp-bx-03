<?php get_header();?>
<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide">
      <div class="c-puton c-puton--filter">
        <picture class="o-frame o-frame--switch-l">
          <source type="image/avif"
            srcset="<?php echo get_template_directory_uri();?>/img/hero.avif" />
          <source type="image/webp"
            srcset="<?php echo get_template_directory_uri();?>/img/hero.webp" />
          <img
            src="<?php echo get_template_directory_uri();?>/img/hero.png"
            decoding="async" width="100%" height="100%" fetchpriority="high" alt="" />
        </picture>
        <div class="c-puton__inner o-cover">
          <h1 class="c-hero-copy o-cover__middle">
            <span class="c-display-m u-text-weight-b">ビジネスをもっと青く</span>
            <span class="c-display-l u-font-logo">BLUE B NOSE</span>
          </h1>
        </div>
      </div>
    </div>
    <!-- // Slide -->
    <div class="swiper-slide">
      <div class="c-puton c-puton--filter">
        <picture class="o-frame o-frame--switch-l">
          <source type="image/avif"
            srcset="<?php echo get_template_directory_uri();?>/img/slider-img02.avif" />
          <source type="image/webp"
            srcset="<?php echo get_template_directory_uri();?>/img/slider-img02.webp" />
          <img
            src="<?php echo get_template_directory_uri();?>/img/slider-img02.jpg"
            width="100%" height="100%" loading="lazy" decoding="async" fetchpriority="low" alt="" />
        </picture>
        <div class="c-puton__inner o-cover">
          <div class="c-hero-copy o-cover__middle">
            <span class="c-display-m u-text-weight-b u-mb-l">季節の新商品<br class="u-pc-only" />入荷しました</span>
            <a href="<?php echo home_url('/product/');?>"
              class="o-box o-box--button o-box--rect-button o-box--slide-btn u-max-item u-block-center">
              <span class="o-icon-parent o-icon-parent--center c-display-s">
                <span class="u-font-en-con">PRODUCT</span>
                <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                  <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.-->
                  <path
                    d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"
                    fill="currentColor"></path>
                </svg>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- // Slide -->
    <div class="swiper-slide">
      <div class="c-puton c-puton--filter">
        <picture class="o-frame o-frame--switch-l">
          <source type="image/avif"
            srcset="<?php echo get_template_directory_uri();?>/img/slider-img03.avif" />
          <source type="image/webp"
            srcset="<?php echo get_template_directory_uri();?>/img/slider-img03.webp" />
          <img
            src="<?php echo get_template_directory_uri();?>/img/slider-img03.jpg"
            width="100%" height="100%" loading="lazy" decoding="async" fetchpriority="low" alt="" />
        </picture>
        <div class="c-puton__inner o-cover">
          <div class="c-hero-copy o-cover__middle">
            <span class="c-display-m u-text-weight-b u-mb-l">10周年記念<br class="u-pc-only" />キャンペーン実施中！</span>
            <a href="<?php echo home_url('/campaign/');?>"
              class="o-box o-box--button o-box--rect-button o-box--slide-btn u-max-item u-block-center">
              <span class="o-icon-parent o-icon-parent--center c-display-s">
                <span class="u-font-en-con">CAMPAIGN</span>
                <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                  <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.-->
                  <path
                    d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"
                    fill="currentColor"></path>
                </svg>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- // Slide -->
    <!-- // Slides -->
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>
</div>
<!-- // Slider -->
<div class="o-box o-box--transparent u-bg-qua u-pb-2xl">
  <div class="o-center o-center--content">
    <h2 class="c-sec-heading u-text-center u-text-weight-b u-font-en">News</h2>
    <?php echo get_front_news();?>
  </div>
</div>
<div class="o-box o-box--transparent o-center u-pb-2xl u-bg-gradient">
  <h2 class="c-sec-heading u-text-center u-text-weight-b u-font-en">PRODUCT</h2>
  <?php echo get_front_product();?>
</div>
<div class="o-box o-box--transparent u-bg-qua u-pb-2xl">
  <div class="o-center o-center--content">
    <h2 class="c-sec-heading u-text-center u-text-weight-b">REVIEW</h2>
    <?php $rate = get_review_score();?>
    <div class="o-cluster o-cluster--gap-s u-max-item u-block-center u-mb-l">
      <span class="o-cluster o-cluster--middle c-review-stars c-display-s u-text-secondary"
        data-rate="<?php echo floor($rate);?>"
        aria-label="<?php echo(floor($rate * 100) / 100);?> stars out of 5">
        <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
          <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
          <path
            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"
            fill="currentColor"></path>
        </svg>
        <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
          <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
          <path
            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"
            fill="currentColor"></path>
        </svg>
        <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
          <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
          <path
            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"
            fill="currentColor"></path>
        </svg>
        <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
          <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
          <path
            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"
            fill="currentColor"></path>
        </svg>
        <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
          <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
          <path
            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"
            fill="currentColor"></path>
        </svg>
      </span>
      <span
        class="c-display-s u-font-en-con u-text-weight-b u-text-primary"><?php echo(floor($rate * 100) / 100);?></span>
      <span class="o-icon-parent o-icon-parent--center c-display-xs">
        <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
          <path
            d="M256 31.1c-141.4 0-255.1 93.12-255.1 208c0 49.62 21.35 94.98 56.97 130.7c-12.5 50.37-54.27 95.27-54.77 95.77c-2.25 2.25-2.875 5.734-1.5 8.734c1.249 3 4.021 4.766 7.271 4.766c66.25 0 115.1-31.76 140.6-51.39c32.63 12.25 69.02 19.39 107.4 19.39c141.4 0 255.1-93.13 255.1-207.1S397.4 31.1 256 31.1zM127.1 271.1c-17.75 0-32-14.25-32-31.1s14.25-32 32-32s32 14.25 32 32S145.7 271.1 127.1 271.1zM256 271.1c-17.75 0-31.1-14.25-31.1-31.1s14.25-32 31.1-32s31.1 14.25 31.1 32S273.8 271.1 256 271.1zM383.1 271.1c-17.75 0-32-14.25-32-31.1s14.25-32 32-32s32 14.25 32 32S401.7 271.1 383.1 271.1z"
            fill="currentColor"></path>
        </svg>
        <span class="c-display-2xs u-text-primary u-text-weight-b"><span
            class="c-display-xs u-font-en-con"><?php echo get_review_count();?></span>件</span>
      </span>
    </div>
    <?php echo get_front_review();?>
  </div>
</div>
<div class="o-center u-pb-2xl">
  <h2 class="c-sec-heading u-text-center u-text-weight-b u-font-en">What's New</h2>
  <?php if (have_posts()):?>
  <ul class="o-grid o-grid--tri u-mb-xl">
    <?php while (have_posts()): the_post();?>
    <li>
      <a href="<?php the_permalink();?>"
        class="o-box o-stack c-link-card u-bg-qua">
        <?php echo get_thumb();?>
        <span class="o-stack o-stack--s u-pt-l u-pb-l u-pr-m u-pl-m">
          <span class="o-cluster o-cluster--middle">
            <time class="c-content-l u-font-en-con u-text-weight-m"
              datetime="<?php the_time('Y-m-d');?>"><?php the_time('Y.m.d');?></time>
            <?php echo get_loop_cat();?>
          </span>
          <span
            class="c-content-l u-text-trim u-text-trim--two-line u-text-weight-b"><?php the_title();?></span>
          <span class="c-content-m u-text-secondary">
            <span
              class="u-font-en-con u-text-weight-m"><?php echo get_views_count();?></span>回表示・読了見込<span
              class="u-font-en-con u-text-weight-m"><?php echo get_readtime();?></span>分
          </span>
        </span>
      </a>
    </li>
    <?php endwhile;?>
  </ul>
  <?php else:?>
  <p class="c-content-l">記事はまだありません。</p>
  <?php endif;?>
  <div class="u-text-center">
    <a class="o-box o-box--button o-box--rect-button o-box--primary-button o-icon-parent"
      href="<?php echo home_url('/blog/');?>">
      コンテンツ一覧
      <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.-->
        <path
          d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"
          fill="currentColor"></path>
      </svg>
    </a>
  </div>
</div>
<?php get_footer();?>