<?php get_header();?>
<div class="o-box o-box--transparent o-center u-bg-qua u-pb-2xl">
  <h1 class="c-heading u-text-weight-b">商品一覧</h1>
  <?php if (have_posts()):?>
  <ul class="o-grid o-grid--quart u-mb-l">
    <?php while (have_posts()): the_post();?>
    <li>
      <a class="c-puton c-puton--filter c-puton-link"
        href="<?php the_permalink();?>">
        <?php echo get_thumb_sq();
        $price = number_format(intval(get_post_meta($post->ID, 'product_price', true)));
        ?>
        <div class="c-puton__inner o-cover">
          <div class="o-stack o-cover__bottom u-pr-m u-pl-m">
            <span
              class="c-display-xs u-text-weight-m"><?php the_title();?></span>
            <span
              class="c-display-s u-text-weight-b u-font-en-con">&yen;<?php if($price) {
                  echo $price;
              } else {
                  echo '0';
              } ?></span>
          </div>
        </div>
      </a>
    </li>
    <?php endwhile;?>
  </ul>
  <?php else:?>
  <p class="c-content-l">商品はまだありません。</p>
  <?php endif;
echo get_pagination();?>
</div>
<?php get_footer();?>