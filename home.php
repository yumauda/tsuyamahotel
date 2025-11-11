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
  <div class="p-top-news">
    <div class="l-inner">
      <div class="p-top-news__content">
        
        <div class="p-top-news__list">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
              <?php the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="p-top-news__item">
                <time class="p-top-news__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                <?php
                $categories = get_the_category();
                if (!empty($categories)) {
                  echo '<span class="p-top-news__category">' . esc_html($categories[0]->name) . '</span>';
                }
                ?>
                <p class="p-top-news__text"><?php the_title(); ?></p>
              </a>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>

      <?php if (paginate_links()) : ?>
        <div class="p-pagination">
          <?php
          echo paginate_links(array(
            'mid_size' => 2,
            'prev_text' => '‹',
            'next_text' => '›',
            'type' => 'list',
          ));
          ?>
        </div>
      <?php endif; ?>

    </div>
  </div>
  <?php get_template_part('includes/submit'); ?>
  <?php get_footer() ?>
</main>