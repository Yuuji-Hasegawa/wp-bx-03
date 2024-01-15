<?php

function get_front_news()
{
    $output = '';
    $args = array(
        'post_type' => 'news',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        'no_found_rows' => true
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        $output = '<ul class="o-stack o-stack--m u-mb-l">';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $output .= '<li class="o-sidebar">
            <time class="c-content-l u-font-en-con u-text-weight-b" datetime="' . get_the_time('Y-m-d') . '">' . get_the_time('Y.m.d') . '</time>
            <a href="' . get_the_permalink() . '" class="o-sidebar__grow o-sidebar__grow--news c-content-l c-text-link u-text-weight-b">
            ' . get_the_title() . '
            </a>
          </li>';
        }
        $output .= '</ul>';
        wp_reset_postdata();
        $output .= '<div class="u-text-right">
        <a class="o-icon-parent c-content-l c-text-link u-text-weight-b"
          href="' . home_url('/news/') . '">
          一覧を見る
          <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.-->
            <path
              d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"
              fill="currentColor"></path>
          </svg>
        </a>
      </div>';
    }
    if ($output) {
        return $output;
    } else {
        return '<p class="c-content-l">ニュースはまだありません。</p>';
    }
}
function get_loop_cat()
{
    global $post;
    $output = "";
    $cat = get_the_category($post->ID);
    if ($cat && !is_wp_error($cat)) {
        $output = '<span class="o-box o-box--round-label c-label-m u-bg-primary">' . $cat[0]->cat_name . '</span>';
    }
    if ($output) {
        return $output;
    }
}
function get_related_loop()
{
    global $post;
    $output = '';
    $notarray = [];
    $recommend_id = '';
    $recommend = get_post_meta($post->ID, 'recommend_url', true);
    if($recommend) {
        $recommend_id = url_to_postid($recommend);
    }
    if ($recommend_id) {
        $notarray[] = $recommend_id;
    }
    $notarray[] = $post->ID;
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'no_found_rows' => true,
        'orderby' => 'rand',
        'post__not_in' => $notarray,
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        $output = '<h2 class="c-sec-heading u-text-weight-b">関連記事</h2>
        <ul class="o-grid o-grid--tri">';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $output .= '<li>
            <a href="' . get_the_permalink() . '" class="o-box o-stack u-bg-qua c-link-card">
            ' . get_thumb() .
            '<span class="o-stack o-stack--s u-pt-l u-pb-l u-pr-m u-pl-m">
          <span class="o-cluster o-cluster--middle">
            <time class="c-content-l u-font-en-con u-text-weight-m" datetime="' . get_the_time('Y-m-d') . '">' . get_the_time('Y.m.d') . '</time>
            '. get_loop_cat() .'
          </span>
          <span class="c-content-l text-trim text-trim--two-line u-text-weight-b">' . get_the_title() . '</span>
          <span class="c-content-m u-text-secondary">
            <span
              class="u-font-en-con u-text-weight-m">' . get_views_count() . '</span>回表示・読了見込
            <span
              class="u-font-en-con u-text-weight-m">' . get_readtime() . '</span>分
          </span>
        </span>
      </a>
      </li>';
        }
        $output .= '</ul>';
        wp_reset_postdata();
    }
    if($output) {
        return $output;
    }
}
function get_last_loop()
{
    $output = '';
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        'no_found_rows' => true
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        $output = '<h2 class="c-sec-heading u-text-weight-b">最新記事</h2>
        <ul class="o-grid o-grid--tri">';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $output .= '<li>
            <a href="' . get_the_permalink() . '" class="o-box o-stack u-bg-qua c-link-card">
            ' . get_thumb() .
            '<span class="o-stack o-stack--s u-pt-l u-pb-l u-pr-m u-pl-m">
          <span class="o-cluster o-cluster--middle">
            <time class="c-content-l u-font-en-con u-text-weight-m" datetime="' . get_the_time('Y-m-d') . '">' . get_the_time('Y.m.d') . '</time>
            '. get_loop_cat() .'
          </span>
          <span class="c-content-l text-trim text-trim--two-line u-text-weight-b">' . get_the_title() . '</span>
          <span class="c-content-m u-text-secondary">
            <span
              class="u-font-en-con u-text-weight-m">' . get_views_count() . '</span>回表示・読了見込
            <span
              class="u-font-en-con u-text-weight-m">' . get_readtime() . '</span>分
          </span>
        </span>
      </a>
      </li>';
        }
        $output .= '</ul>';
        wp_reset_postdata();
    }
    if ($output) {
        return $output;
    }
}
function get_popular_loop()
{
    $output = '';
    $args = array(
      'post_type'      => 'post',
      'posts_per_page' => 4,
      'meta_key'       => 'post_views_count',
      'orderby'        => 'meta_value_num',
      'order'          => 'DESC',
      'no_found_rows' => true
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        $output = '<h2 class="c-sec-heading u-text-weight-b">人気記事</h2>
        <ul class="o-grid o-grid--quart">';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $output .= '<li>
            <a href="' . get_the_permalink() . '" class="o-box o-stack u-bg-qua c-link-card">
            ' . get_thumb() .
            '<span class="o-stack o-stack--s u-pt-l u-pb-l u-pr-m u-pl-m">
          <span class="o-cluster o-cluster--middle">
            <time class="c-content-l u-font-en-con u-text-weight-m" datetime="' . get_the_time('Y-m-d') . '">' . get_the_time('Y.m.d') . '</time>
            '. get_loop_cat() .'
          </span>
          <span class="c-content-l text-trim text-trim--two-line u-text-weight-b">' . get_the_title() . '</span>
          <span class="c-content-m u-text-secondary">
            <span
              class="u-font-en-con u-text-weight-m">' . get_views_count() . '</span>回表示・読了見込
            <span
              class="u-font-en-con u-text-weight-m">' . get_readtime() . '</span>分
          </span>
        </span>
      </a>
      </li>';
        }
        $output .= '</ul>';
        wp_reset_postdata();
    }
    if ($output) {
        return $output;
    }
}
function get_related_product()
{
    global $post;
    $output = '';
    $price = '';
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 3,
        'no_found_rows' => true,
        'orderby' => 'rand',
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        $output = '<h2 class="c-sec-heading u-text-weight-b">その他の商品</h2>
        <ul class="o-grid o-grid--quart">';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            if(get_post_meta($post->ID, 'product_price', true)) {
                $price = number_format(intval(get_post_meta($post->ID, 'product_price', true)));
            } else {
                $price = 0;
            }
            $output .= '<li>
              <a class="c-puton c-puton--filter c-puton-link"
                href="' . get_the_permalink() . '">
                ' . get_thumb_sq() . '
                <div class="c-puton__inner o-cover">
                  <div class="o-stack o-cover__bottom u-pr-m u-pl-m">
                    <span
                      class="c-display-xs u-text-weight-m">' . get_the_title() . '</span>
                    <span
                      class="c-display-s u-text-weight-b u-font-en-con">&yen;' . $price . '</span>
                  </div>
                </div>
              </a>
            </li>';
        }
        $output .= '</ul>';
        wp_reset_postdata();
    }
    if($output) {
        return $output;
    }
}
function get_last_product()
{
    global $post;
    $output = '';
    $price = '';
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        'no_found_rows' => true
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        $output = '<h2 class="c-sec-heading u-text-weight-b">新着商品</h2>
        <ul class="o-grid o-grid--quart">';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            if(get_post_meta($post->ID, 'product_price', true)) {
                $price = number_format(intval(get_post_meta($post->ID, 'product_price', true)));
            } else {
                $price = 0;
            }
            $output .= '<li>
              <a class="c-puton c-puton--filter c-puton-link"
                href="' . get_the_permalink() . '">
                ' . get_thumb_sq() . '
                <div class="c-puton__inner o-cover">
                  <div class="o-stack o-cover__bottom u-pr-m u-pl-m">
                    <span
                      class="c-display-xs u-text-weight-m">' . get_the_title() . '</span>
                    <span
                      class="c-display-s u-text-weight-b u-font-en-con">&yen;' . $price . '</span>
                  </div>
                </div>
              </a>
            </li>';
        }
        $output .= '</ul>';
        wp_reset_postdata();
    }
    if ($output) {
        return $output;
    }
}
function get_popular_product()
{
    global $post;
    $output = '';
    $price = '';
    $args = array(
      'post_type'      => 'product',
      'posts_per_page' => 4,
      'meta_key'       => 'post_views_count',
      'orderby'        => 'meta_value_num',
      'order'          => 'DESC',
      'no_found_rows' => true
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        $output = '<h2 class="c-sec-heading u-text-weight-b">人気商品</h2>
        <ul class="o-grid o-grid--quart">';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            if(get_post_meta($post->ID, 'product_price', true)) {
                $price = number_format(intval(get_post_meta($post->ID, 'product_price', true)));
            } else {
                $price = 0;
            }
            $output .= '<li>
              <a class="c-puton c-puton--filter c-puton-link"
                href="' . get_the_permalink() . '">
                ' . get_thumb_sq() . '
                <div class="c-puton__inner o-cover">
                  <div class="o-stack o-cover__bottom u-pr-m u-pl-m">
                    <span
                      class="c-display-xs u-text-weight-m">' . get_the_title() . '</span>
                    <span
                      class="c-display-s u-text-weight-b u-font-en-con">&yen;' . $price . '</span>
                  </div>
                </div>
              </a>
            </li>';
        }
        $output .= '</ul>';
        wp_reset_postdata();
    }
    if ($output) {
        return $output;
    }
}
function get_front_product()
{
    global $post;
    $output = '';
    $args = array(
      'post_type' => 'product',
      'posts_per_page' => 4,
      'orderby' => 'date',
      'order' => 'DESC',
      'no_found_rows' => true
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        $output = '<ul class="o-grid o-grid--quart u-mb-xl">';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            if(get_post_meta($post->ID, 'product_price', true)) {
                $price = number_format(intval(get_post_meta($post->ID, 'product_price', true)));
            } else {
                $price = 0;
            }
            $output .= '<li>
              <a class="c-puton c-puton--filter c-puton-link"
                href="' . get_the_permalink() . '">
                ' . get_thumb_sq() . '
                <div class="c-puton__inner o-cover">
                  <div class="o-stack o-cover__bottom u-pr-m u-pl-m">
                    <span
                      class="c-display-xs u-text-weight-m">' . get_the_title() . '</span>
                    <span
                      class="c-display-s u-text-weight-b u-font-en-con">&yen;' . $price . '</span>
                  </div>
                </div>
              </a>
            </li>';
        }
        $output .= '</ul>';
        wp_reset_postdata();
        $output .= '<div class="u-text-center">
          <a href="' . home_url('/product/') . '"
            class="o-box o-box--button o-box--rect-button o-box--slide-btn u-max-item u-block-center">
            <span class="o-icon-parent o-icon-parent--center">
              <span class="u-font-en-con">PRODUCT</span>
              <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.-->
                <path
                  d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"
                  fill="currentColor"></path>
              </svg>
            </span>
          </a>
        </div>';
    }
    if ($output) {
        return $output;
    } else {
        return '<p class="c-content-l">商品はまだありません。</p>';
    }
}
function get_front_review()
{
    $output = '';
    $args = array(
      'post_type' => 'review',
      'posts_per_page' => 3,
      'orderby' => 'date',
      'order' => 'DESC',
      'no_found_rows' => true
  );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        $output = '<ul class="o-stack o-stack--l u-mb-xl">';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $rating = intval(get_post_meta(get_the_ID(), 'review_rate', true));
            if(!$rating) {
                $rating = 0;
            }
            $output .= '<li class="o-stack o-stack--s u-bg-secondary u-pt-m u-pb-m u-pr-m u-pl-m">
              <span class="o-cluster o-cluster--middle o-cluster--gap-s">
              <span class="c-reviewer-pict">
                ' . get_reviewer_pict() . '
              </span>
              <span class="u-text-weight-b c-content-m">' . get_the_title() . '</span>
              <time class="u-font-en-con u-text-weight-m c-suppl-l" datetime="' . get_the_time('Y-m-d') . '">' . get_the_time('Y.m.d') . '</time>
            </span>
            <span class="o-cluster o-cluster--middle c-review-stars" data-rate="' . $rating . '" aria-label="' . $rating . ' stars out of 5">
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
          <p class="c-content-l u-text-trim u-text-trim--three-line">' . get_the_content() . '</p>
        </li>';
        }
        $output .= '</ul>';
        wp_reset_postdata();
        $output .= '<div class="u-text-center">
      <a class="o-box o-box--button o-box--rect-button o-box--primary-button o-icon-parent"
        href="' . home_url('/review/') . '">
        一覧を見る
        <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
          <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.-->
          <path
            d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"
            fill="currentColor"></path>
        </svg>
      </a>
    </div>';
    }
    if ($output) {
        return $output;
    } else {
        return '<p class="c-content-l">口コミはまだありません。</p>';
    }
}
