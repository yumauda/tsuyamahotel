<?php get_header(); ?>
<main class="p-top">
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
        <div class="p-top-life__center">
          <p class="p-top-life__center-text">
            塔ホテルは、企業研修、展示会、パーティーなど、<br>
            多様なMICEイベントに対応可能です。<br>
            専任チームが企画から当日運営までをサポートいたします。
          </p>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('includes/submit'); ?>
</main>
<?php get_footer() ?>