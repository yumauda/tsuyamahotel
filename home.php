<?php get_header(); ?>
<main>
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
  <section class="p-top-news">
    <div class="l-inner">
      <div class="p-top-news__content">
        <div class="p-top-news__header">
          <div class="c-main-title">
            <h3 class="c-main-title__main">お知らせ</h3>
            <p class="c-main-title__sub">News</p>
          </div>
        </div>
        <div class="p-top-news__list">
          <a href="#" class="p-top-news__item">
            <time class="p-top-news__date" datetime="2023-00-00">2023.00.00</time>
            <span class="p-top-news__category">お知らせ</span>
            <p class="p-top-news__text">お知らせタイトルが入ります。ダミーテキストダミーテキストダミーテキスト</p>
          </a>
          <a href="#" class="p-top-news__item">
            <time class="p-top-news__date" datetime="2023-00-00">2023.00.00</time>
            <span class="p-top-news__category">レストラン</span>
            <p class="p-top-news__text">お知らせタイトルが入ります。ダミーテキストダミーテキストダミーテキスト</p>
          </a>
          <a href="#" class="p-top-news__item">
            <time class="p-top-news__date" datetime="2023-00-00">2023.00.00</time>
            <span class="p-top-news__category">宿泊プラン</span>
            <p class="p-top-news__text">お知らせタイトルが入ります。ダミーテキストダミーテキストダミーテキスト</p>
          </a>
        </div>
      </div>
      <div class="p-top-news__link-wrapper">
        <a href="#" class="p-top-news__link">
          <span class="p-top-news__link-text">お知らせ一覧を見る</span>
          <div class="p-top-news__link-icon">
            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/news_arrow.svg" alt="arrow" width="40" height="40">
          </div>
        </a>
      </div>
    </div>
  </section>




</main>
<?php get_footer() ?>