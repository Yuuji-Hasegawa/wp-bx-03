<?php get_header();
if (have_posts()):?>
<div class="o-box o-box--post o-center o-center--content u-bg-qua u-mt-2xl u-mb-2xl u-pb-2xl">
  <h1 class="c-heading"><?php the_title();?></h1>
  <div class="o-stack o-stack--l">
    <?php echo get_thumb();?>
    <article class="c-entry">
      <?php the_content();?>
    </article>
    <?php
      $start = date_create(get_post_meta($post->ID, 'campaign_start', true));
    $end = date_create(get_post_meta($post->ID, 'campaign_end', true));
    if($start):
        ?>
    <div class="o-cluster">
      <time class="o-icon-parent u-text-secondary c-content-m u-font-en-con u-text-weight-m"
        datetime="<?php echo date_format($start, 'Y-m-d');?>">
        <?php echo date_format($start, 'Y.m.d');?>
      </time>
      <?php if($end):?>
      ~
      <time class="o-icon-parent u-text-secondary c-content-m u-font-en-con u-text-weight-m"
        datetime="<?php echo date_format($end, 'Y-m-d');?>">
        <?php echo date_format($end, 'Y.m.d'); ?>
      </time>
      まで
      <?php endif;?>
    </div>
    <?php
      if (strtotime(date("Y-m-d")) > strtotime(date_format($end, 'Y-m-d'))) {
          echo '<span class="o-icon o-icon--required u-bg-secondary u-text-weight-b u-flex-shrink-none u-max-item">終了</span>';
      } else {
          echo '<span class="o-icon o-icon--required u-bg-primary u-text-weight-b u-flex-shrink-none u-max-item">実施中</span>';
      }
    ?>
    <?php endif;?>
    <h2 class="c-sec-heading">シェア・共有</h2>
    <div class="c-share-parent">
      <input type="text" class="o-box o-box--input o-box--share c-content-l u-full-width"
        value="<?php echo esc_url(get_permalink($post->ID));?>"
        readonly />
      <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <!--! Font Awesome Pro 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
        <path
          d="M64 464H288c8.8 0 16-7.2 16-16V384h48v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V224c0-35.3 28.7-64 64-64h64v48H64c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16zM224 304H448c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H224c-8.8 0-16 7.2-16 16V288c0 8.8 7.2 16 16 16zm-64-16V64c0-35.3 28.7-64 64-64H448c35.3 0 64 28.7 64 64V288c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64z"
          fill="currentColor" />
      </svg>
    </div>
    <div class="u-text-center">
      <a href="<?php echo home_url('/campaign/');?>"
        class="o-box o-box--button o-box--rect-button o-icon-parent">
        一覧を見る
        <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
          <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.-->
          <path
            d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"
            fill="currentColor" />
        </svg>
      </a>
    </div>
  </div>
</div>
<?php endif;
get_footer();?>