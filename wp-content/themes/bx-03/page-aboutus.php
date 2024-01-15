<?php get_header();?>
<div class="o-box o-box--transparent o-center u-bg-qua u-pb-2xl">
  <h1 class="c-heading u-text-weight-b"><?php the_title();?></h1>
  <dl class="o-sidebar o-sidebar--table">
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">営業時間</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <span
        class="u-font-en-con"><?php echo get_vars('company', 'open');?>~<?php echo get_vars('company', 'close');?></span>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">定休日</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <?php echo get_vars('company', 'dayoff');?>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">所在地</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      〒<span
        class="u-font-en-con"><?php echo get_vars('company', 'zip');?></span><br />
      <?php echo get_vars('company', 'address');?>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">電話番号</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <a href="#"
        class="c-text-link c-text-link--underline"><?php echo get_vars('company', 'tel');?></a>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">アクセス</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <?php echo get_vars('company', 'access');?>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">駐車場</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <?php echo get_vars('company', 'parking');?>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">最寄駅</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <?php echo get_vars('company', 'station');?>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">お支払い方法</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <?php echo get_pay_list();?>
    </dd>
  </dl>
</div>
<?php get_footer();?>