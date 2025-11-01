<?php get_header(); ?>
<main class="p-top">
  <!-- Slider main container -->
  <div class="swiper slider2">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide">
        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_service_img1.jpg" alt="ご宿泊" width="850" height="580">
      </div>
      <div class="swiper-slide">
        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_service_img2.jpg" alt="レストラン" width="850" height="580">
      </div>
      <div class="swiper-slide">
        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_service_img3.jpg" alt="宴会・会議" width="850" height="580">
      </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div>
  <section class="p-top-service">
    <div class="l-inner">
      <div class="p-top-service__content">
        <div class="p-top-service__detail">
          <div class="p-top-service__title">
            <h2 class="c-section-title">
              <span class="c-section-title__ja">館内案内</span>
              <span class="c-section-title__en">Service</span>
            </h2>
          </div>
          <div class="p-top-service__data">
            <p class="p-top-service__subTitle">古き良き趣に寄り添う、<br>洗練されたひととき。</p>
            <p class="p-top-service__text">津山鶴山ホテルは、歴史ある街並みに溶け込みながら、旅の方を温かく迎える迎賓の宿。
              大切な方との会食やご宿泊から、ビジネスでのご利用にも、安心してお選びいただける空間をご用意。
              歴史を重ねてきた街の空気をまといながら、どこか懐かしくも上質なひとときをご提供します。</p>
          </div>
        </div>
        <div class="p-top-service__images">
          <a href="#" class="p-top-service__link">
            <figure class="p-top-service__img">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_service_img1.jpg" alt="ご宿泊" width="850" height="580">
            </figure>
          </a>
          <a href="#" class="p-top-service__link">
            <figure class="p-top-service__img">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_service_img2.jpg" alt="レストラン" width="850" height="580">
            </figure>
          </a>
          <a href="#" class="p-top-service__link">
            <figure class="p-top-service__img">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_service_img3.jpg" alt="宴会・会議" width="850" height="580">
            </figure>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="p-top-life">
    <div class="l-inner">
      <div class="p-top-life__content">
        <div class="p-top-life__top">
          <div class="p-top-life__title">
            <h2 class="c-section-title">
              <span class="c-section-title__ja c-section-title__ja--white">しつらえのひととき</span>
              <span class="c-section-title__en c-section-title__en--white">Life Scenes</span>
            </h2>
          </div>
          <p class="p-top-life__top-text">人生の節目を彩るウエディングから、日常を支えるサテライトオフィスまで。<br>
            特別な時も日常のひとときも快適にお過ごしいただける空間をご用意しております。</p>
        </div>
        <div class="p-top-life__middle">
          <figure class="p-top-life__topImg">
            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_life_img1.jpg" alt="マイス" width="1860" height="400">
          </figure>
          <div class="p-top-life__middle-detail">
            <div class="p-top-life__middle-top">
              <p class="p-top-life__middle-title">mice</p>
              <p class="p-top-life__middle-ja">マイス</p>
              <p class="p-top-life__middle-text">ビジネスの課題を解決するMICEの開催をお手伝いいたします。</p>
            </div>
            <a href="#" class="p-top-life__middle-arrow">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_life_arrow.svg" alt="arrow" width="100" height="100">
            </a>
          </div>
        </div>
        <div class="p-top-line__bg">
          <div class="p-top-life__center">
            <p class="p-top-life__center-text">
              塔ホテルは、企業研修、展示会、パーティーなど、<br>
              多様なMICEイベントに対応可能です。<br>
              専任チームが企画から当日運営までをサポートいたします。
            </p>
          </div>

          <div class="p-top-life__about">
            <div class="p-top-life__about-top">
              <div class="c-main-title">
                <h3 class="c-main-title__main">miceとは</h3>
                <p class="c-main-title__sub">About MICE</p>
              </div>
              <p class="p-top-life__about-text">会議（Meeting）、報奨・研修旅行（Incentivetravel）、国際会議（Convention）、イベント（Event）の多くの集客交流が見込まれるビジネスイベントの、4つの頭文字を組み合わせた造語です。<br>
                利便性の良い立地と、大中小と多彩な宴会・会議室をご用意して人々の活発な交流の場を創出するお手伝いをいたします。</p>
            </div>
            <ul class="p-top-life__about-grid">
              <li class="p-top-life__about-item">
                <figure class="p-top-life__about-img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_about1.jpg" alt="会議" width="320" height="220">
                </figure>
                <div class="p-top-life__about-detail">
                  <p class="p-top-life__about-detailTitle"><span>M</span>eeting</p>
                  <p class="p-top-life__about-detailText">会議</p>
                </div>
              </li>
              <li class="p-top-life__about-item">
                <figure class="p-top-life__about-img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_about2.jpg" alt="報奨、研修旅行" width="320" height="220">
                </figure>
                <div class="p-top-life__about-detail">
                  <p class="p-top-life__about-detailTitle"><span>I</span>ncentivetravel</p>
                  <p class="p-top-life__about-detailText">報奨、研修旅行</p>
                </div>
              </li>
              <li class="p-top-life__about-item">
                <figure class="p-top-life__about-img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_about3.jpg" alt="国際会議" width="320" height="220">
                </figure>
                <div class="p-top-life__about-detail">
                  <p class="p-top-life__about-detailTitle"><span>C</span>onvention</p>
                  <p class="p-top-life__about-detailText">国際会議</p>
                </div>
              </li>
              <li class="p-top-life__about-item">
                <figure class="p-top-life__about-img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_about4.jpg" alt="イベント" width="320" height="220">
                </figure>
                <div class="p-top-life__about-detail">
                  <p class="p-top-life__about-detailTitle"><span>E</span>vent</p>
                  <p class="p-top-life__about-detailText">イベント</p>
                </div>
              </li>
            </ul>
            <div class="p-top-life__bottom">
              <a href="#" class="p-top-life__bottom-link">
                <p class="p-top-life__bottom-text">宴会・会議会場を見る</p>
                <div class="p-top-life__icon">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/icon_arrow.svg" alt="" width="15" height="8">
                </div>
              </a>
              <a href="#" class="p-top-life__bottom-link p-top-life__bottom-link--black">
                <p class="p-top-life__bottom-text p-top-life__bottom-text--black">ご予約はこちらから</p>
                <div class="p-top-life__icon">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/icon_arrow_black.svg" alt="" width="15" height="8">
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="p-btns">
    <div class="p-btns__content">
      <a href="#" class="p-btns__btn">
        <div class="p-btns__detail">
          <h3 class="p-btns__btn-text">Wedding</h3>
          <p class="p-btns__btn-sub">ウェディング</p>
          <p class="p-btns__text">すべてはお二人のために、そしてゲストのために</p>
          <div class="p-btns__icon">
            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/btns_icon.svg" alt="icon" width="40" height="20">
          </div>
        </div>
        <figure class="p-btns__img">
          <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/btns_img1.jpg" alt="ウェディング" width="930" height="600">
        </figure>
      </a>
      <a href="#" class="p-btns__btn">
        <div class="p-btns__detail">
          <h3 class="p-btns__btn-text">Satelite office</h3>
          <p class="p-btns__btn-sub">サテライトオフィス</p>
          <p class="p-btns__text">快適なホテル空間で、リフレッシュしながらお仕事をしませんか？</p>
          <div class="p-btns__icon">
            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/btns_icon.svg" alt="icon" width="40" height="20">
          </div>
        </div>
        <figure class="p-btns__img">
          <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/btns_img2.jpg" alt="ウェディング" width="930" height="600">
        </figure>
      </a>
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
  <?php get_template_part('includes/submit'); ?>
  <?php get_footer() ?>
</main>