<?php get_header(); ?>
<main class="p-top p-top--news">
  <section class="p-stay-mv">
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
  <section class="p-single-news">
    <div class="l-inner">
      <div class="p-single-news__header">
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
      <div class="p-single-news__content">
        <?php the_content(); ?>
      </div>
    </div>
  </section>
  <?php get_template_part('includes/submit'); ?>
  <?php get_footer() ?>
</main>