<?php get_header(); ?>
<main class="p-top p-top--news">
  <section class="p-stay-mv js-fadeUp">
    <div class="p-stay-mv__inner">
      <div class="p-stay-mv__content">
        <div class="p-stay-mv__detail">
          <h2 class="c-main-title">
            <span class="c-main-title__ja">お知らせ</span>
            <span class="c-main-title__en">News</span>
          </h2>
        </div>
      </div>
    </div>
  </section>
  <section class="p-single-news js-fadeUp">
    <div class="l-inner">
      <div class="p-single-news__header js-fadeUp">
        <?php the_title('<h1 class="p-single-news__title">', '</h1>'); ?>
        <div class="p-single-news__meta">
          <time class="p-single-news__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
          <?php
          $categories = get_the_category();
          if (!empty($categories)) {
            echo '<span class="p-single-news__category">' . esc_html($categories[0]->name) . '</span>';
          }
          ?>
        </div>
      </div>
      <div class="p-single-news__content js-fadeUp">
        <?php the_content(); ?>
      </div>
      <a href="<?php echo esc_url(home_url('/news')); ?>" class="p-rooms__button p-news__button js-fadeUp">
        <p class="p-rooms__button-text">一覧へ戻る</p>
        <span class="p-rooms__button-icon">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/icon_arrow.svg" alt="" width="20" height="20">
        </span>
      </a>
    </div>
  </section>
  <?php get_template_part('includes/submit'); ?>
  <?php get_footer() ?>
</main>