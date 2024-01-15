<?php get_header();?>
<div class="o-box o-box--transparent o-center u-bg-qua u-pb-2xl">
  <h1 class="c-heading u-text-weight-b">キャンペーン</h1>
  <?php if (have_posts()):?>
  <ul class="o-grid o-grid--quart">
    <?php while (have_posts()): the_post();?>
    <li>
      <a href="<?php the_permalink();?>"
        class="o-box o-stack c-link-card u-bg-qua">
        <?php echo get_thumb();?>
        <span class="o-stack o-stack--s u-pt-l u-pb-l u-pr-m u-pl-m">
          <span
            class="c-content-l u-text-trim u-text-trim--two-line u-text-weight-b"><?php the_title();?></span>
          <?php $start = date_create(get_post_meta($post->ID, 'campaign_start', true));
        $end = date_create(get_post_meta($post->ID, 'campaign_end', true));
        if($start):?>
          <span class="o-cluster o-cluster--middle o-cluster--gap-s c-content-m u-text-weight-m">
            <time class="o-icon-parent u-text-secondary u-font-en-con"
              datetime="<?php echo date_format($start, 'Y-m-d');?>">
              <?php echo date_format($start, 'Y.m.d');?>
            </time>
            <?php if($end):?>
            ~
            <time class="o-icon-parent u-text-secondary u-font-en-con"
              datetime="<?php echo date_format($end, 'Y-m-d');?>">
              <?php echo date_format($end, 'Y.m.d'); ?>
            </time>
            まで
            <?php endif;?>
          </span>
          <?php
            if (strtotime(date("Y-m-d")) > strtotime(date_format($end, 'Y-m-d'))) {
                echo '<span class="o-icon o-icon--required u-bg-secondary u-text-weight-b u-flex-shrink-none u-max-item">終了</span>';
            } else {
                echo '<span class="o-icon o-icon--required u-bg-primary u-text-weight-b u-flex-shrink-none u-max-item">実施中</span>';
            }
        ?>
          <?php endif;?>
        </span>
      </a>
    </li>
    <?php endwhile;?>
  </ul>
  <?php else:?>
  <p class="c-content-l">キャンペーンはまだ実施されていません。</p>
  <?php endif;?>
</div>
<?php get_footer();?>