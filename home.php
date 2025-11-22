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
  <div class="p-top-news js-fadeUp">
    <div class="l-inner">
      <div class="p-top-news__content p-top-news__content--news">
        <?php
        // 現在のカテゴリーを取得
        $current_category = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : '';
        ?>
        <div class="p-top-news__tabs js-fadeUp">
          <a href="<?php echo home_url('/news/'); ?>" class="p-top-news__tab <?php echo empty($current_category) ? 'p-top-news__tab--active' : ''; ?>">すべて</a>
          <a href="<?php echo add_query_arg('category', 'notice', home_url('/news/')); ?>" class="p-top-news__tab <?php echo $current_category === 'notice' ? 'p-top-news__tab--active' : ''; ?>">お知らせ</a>
          <a href="<?php echo add_query_arg('category', 'event', home_url('/news/')); ?>" class="p-top-news__tab <?php echo $current_category === 'event' ? 'p-top-news__tab--active' : ''; ?>">イベント</a>
          <a href="<?php echo add_query_arg('category', 'restaurant-category', home_url('/news/')); ?>" class="p-top-news__tab <?php echo $current_category === 'restaurant-category' ? 'p-top-news__tab--active' : ''; ?>">レストラン</a>
          <a href="<?php echo add_query_arg('category', 'party', home_url('/news/')); ?>" class="p-top-news__tab <?php echo $current_category === 'party' ? 'p-top-news__tab--active' : ''; ?>">宴会・会議</a>
        </div>

        <div class="p-top-news__list js-fadeUp">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
              <?php the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="p-top-news__item js-fadeUp">
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