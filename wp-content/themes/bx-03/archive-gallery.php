<?php get_header();?>
<div class="o-box o-box--transparent o-center u-bg-qua u-pb-2xl">
  <h1 class="c-heading u-text-weight-b">ギャラリー</h1>
  <?php if (have_posts()):?>
  <ul class="o-grid o-grid--tri" id="photos">
    <?php while (have_posts()): the_post();
        if(has_post_thumbnail()) {
            $url = get_the_post_thumbnail_url($post->ID, 'full');
        } else {
            $url = get_template_directory_uri() . '/img/thumb.png?' . date("YmdHis");
        }
        ?>
    <li>
      <a href="<?php echo $url;?>" class="c-lightbox-photo"
        target="_blank" rel="noopener">
        <?php echo get_thumb_sq();?>
      </a>
    </li>
    <?php endwhile;?>
  </ul>
  <?php else:?>
  <p class="c-content-l">画像はまだありません。</p>
  <?php endif;?>
</div>
<?php get_footer();?>