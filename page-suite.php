<div class="p-top">

  <?php get_header(); ?>
  <main>
    <section class="p-stay-mv">
      <div class="p-stay-mv__inner">
        <div class="p-stay-mv__content">
          <div class="p-stay-mv__detail">
            <h2 class="c-main-title">
              <span class="c-main-title__kind">ご宿泊</span>
              <span class="c-main-title__ja">スイートルーム A-type</span>
              <span class="c-main-title__en">Suite Room A-type</span>
            </h2>
          </div>
        </div>
      </div>
    </section>
    <ul class="p-lists">
      <li class="p-lists__list">
        <a href="<?php echo esc_url(home_url('/suite-a')); ?>" class="p-lists__link">スイートルームA-type</a>
      </li>
      <li class="p-lists__list">
        <a href="<?php echo esc_url(home_url('/suite-b')); ?>" class="p-lists__link">スイートルームB-type</a>
      </li>
      <li class="p-lists__list">
        <a href="<?php echo esc_url(home_url('/twin')); ?>" class="p-lists__link">ツインルーム</a>
      </li>
      <li class="p-lists__list">
        <a href="<?php echo esc_url(home_url('/double')); ?>" class="p-lists__link">ダブルルーム</a>
      </li>
      <li class="p-lists__list">
        <a href="<?php echo esc_url(home_url('/single')); ?>" class="p-lists__link">シングルルーム</a>
      </li>
      <li class="p-lists__list">
        <a href="<?php echo esc_url(home_url('/japanese')); ?>" class="p-lists__link">和室</a>
      </li>
    </ul>
    <!-- Slider main container -->
    <div class="p-suite-swiper">
      <div class="swiper slider5">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <figure class="p-suite-swiper__img">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/suite_1.jpg" alt="スイートルーム A-type" width="1300" height="970">
            </figure>
          </div>
          <div class="swiper-slide">
            <figure class="p-suite-swiper__img">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/suite_1.jpg" alt="スイートルーム A-type" width="1300" height="970">
            </figure>
          </div>
          <div class="swiper-slide">
            <figure class="p-suite-swiper__img">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/suite_1.jpg" alt="スイートルーム A-type" width="1300" height="970">
            </figure>
          </div>

        </div>

        <!-- If we need pagination -->
        <div class="p-suite-swiper__pagination">
          <div class="swiper-pagination"></div>
        </div>

        <!-- Navigation buttons -->
        <div class="p-suite-swiper__button-wrapper">
          <div class="swiper-button-prev">
            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/suite_swiper_prev.svg" alt="arrow" width="40" height="40">
          </div>
          <div class="swiper-button-next">
            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/suite_swiper_next.svg" alt="arrow" width="40" height="40">
          </div>
        </div>
      </div>
    </div>
    <section class="p-location p-location--suite">
      <div class="l-inner">
        <div class="p-location__content">
          <div class="p-location__title-wrapper">
            <h3 class="p-location__title">アジアンテイストの<br class='u-mobile'>スイートルームで過ごす、<br>
              いつもと違う最高のひと時。</h3>
          </div>
          <div class="p-location__text-wrapper">
            <p class="p-location__text">お部屋の紹介テキストが入ります。<br>
              ダミーテキストダミーテキストダミーテキストダミーテキスト<br>
              ダミーテキストダミーテキストダミーテキストダミー</p>
          </div>
          <div class="p-suite__spec">

            <table class="p-suite__spec-table">
              <tbody>
                <tr>
                  <td class="p-suite__spec-header">
                    <p>広さ</p>
                  </td>
                  <td class="p-suite__spec-header border-left">
                    <p>ベッドサイズ</p>
                  </td>
                  <td class="p-suite__spec-header border-left">
                    <p>ご利用人数</p>
                  </td>
                </tr>
                <tr>
                  <td class="p-suite__spec-data">49.5㎡</td>
                  <td class="p-suite__spec-data border-left">W140×H200</td>
                  <td class="p-suite__spec-data border-left">1名〜2名</td>
                </tr>
                <tr>
                  <td class="p-suite__spec-header">
                    <p>禁煙ルームの有無</p>
                  </td>
                  <td class="p-suite__spec-header border-left">
                    <p>コネクトルーム</p>
                  </td>
                  <td class="p-suite__spec-header border-left">
                    <p>インターネット対応</p>
                  </td>
                </tr>
                <tr>
                  <td class="p-suite__spec-data">〇</td>
                  <td class="p-suite__spec-data border-left">×</td>
                  <td class="p-suite__spec-data border-left">無線LAN（無料）</td>
                </tr>
              </tbody>
            </table>
          </div>



        </div>
      </div>
    </section>
    <section class="p-service">
      <div class="l-inner">
        <div class="p-service__content">
          <div class="p-rooms__qa">
            <div class="p-service__left">
              <h3 class="c-main-title">
                <span class="c-main-title__ja">宿泊サービス</span>
                <span class="c-main-title__en">Service</span>
              </h3>
              <figure class="p-service__img mt50">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/service_img.jpg" alt="宿泊サービス" width="400" height="600">
              </figure>
            </div>
            <div class="p-qa__block">
              <details class="p-qa__content js-details" open>
                <summary class="p-qa__summary p-qa__summary--service js-summary">
                  <h4 class="p-qa__ttl p-qa__ttl--service">
                    客室アメニティ
                  </h4>
                </summary>
                <div class="p-qa__inner js-content">
                  <div class="p-qa__wrap p-qa__wrap--service">
                    <div class="p-qa__content p-qa__content--open01">
                      <div class="p-qa__service-lists">
                        <div class="p-qa__service-list">
                          <p class="p-qa__service-list-text">シャンプー</p>
                          <p class="p-qa__service-list-text">リンス</p>
                          <p class="p-qa__service-list-text">石鹸</p>
                          <p class="p-qa__service-list-text">ボディソープ</p>
                          <p class="p-qa__service-list-text">バスタオル</p>
                          <p class="p-qa__service-list-text">フェイスタオル</p>
                        </div>
                        <div class="p-qa__service-list">
                          <p class="p-qa__service-list-text">パジャマ</p>
                          <p class="p-qa__service-list-text">毛布</p>
                          <p class="p-qa__service-list-text">ドライヤー</p>
                          <p class="p-qa__service-list-text">ポット＆日本茶</p>
                          <p class="p-qa__service-list-text">ミネラルウォーター</p>
                          <p class="p-qa__service-list-text">スリッパ</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </details>
              <details class="p-qa__content js-details">
                <summary class="p-qa__summary p-qa__summary--service js-summary">
                  <h4 class="p-qa__ttl p-qa__ttl--service">
                    アメニティバー
                  </h4>
                </summary>
                <div class="p-qa__inner js-content">
                  <div class="p-qa__wrap p-qa__wrap--service">
                    <div class="p-qa__content p-qa__content--open01">
                      <div class="p-qa__service-lists">
                        <div class="p-qa__service-list">
                          <p class="p-qa__service-list-text">シャンプー</p>
                          <p class="p-qa__service-list-text">リンス</p>
                          <p class="p-qa__service-list-text">石鹸</p>
                          <p class="p-qa__service-list-text">ボディソープ</p>
                          <p class="p-qa__service-list-text">バスタオル</p>
                          <p class="p-qa__service-list-text">フェイスタオル</p>
                        </div>
                        <div class="p-qa__service-list">
                          <p class="p-qa__service-list-text">パジャマ</p>
                          <p class="p-qa__service-list-text">毛布</p>
                          <p class="p-qa__service-list-text">ドライヤー</p>
                          <p class="p-qa__service-list-text">ポット＆日本茶</p>
                          <p class="p-qa__service-list-text">ミネラルウォーター</p>
                          <p class="p-qa__service-list-text">スリッパ</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </details>
              <details class="p-qa__content js-details">
                <summary class="p-qa__summary p-qa__summary--service js-summary">
                  <h4 class="p-qa__ttl p-qa__ttl--service">
                    貸出備品
                  </h4>
                </summary>
                <div class="p-qa__inner js-content">
                  <div class="p-qa__wrap p-qa__wrap--service">
                    <div class="p-qa__content p-qa__content--open01">
                      <div class="p-qa__service-lists">
                        <div class="p-qa__service-list">
                          <p class="p-qa__service-list-text">シャンプー</p>
                          <p class="p-qa__service-list-text">リンス</p>
                          <p class="p-qa__service-list-text">石鹸</p>
                          <p class="p-qa__service-list-text">ボディソープ</p>
                          <p class="p-qa__service-list-text">バスタオル</p>
                          <p class="p-qa__service-list-text">フェイスタオル</p>
                        </div>
                        <div class="p-qa__service-list">
                          <p class="p-qa__service-list-text">パジャマ</p>
                          <p class="p-qa__service-list-text">毛布</p>
                          <p class="p-qa__service-list-text">ドライヤー</p>
                          <p class="p-qa__service-list-text">ポット＆日本茶</p>
                          <p class="p-qa__service-list-text">ミネラルウォーター</p>
                          <p class="p-qa__service-list-text">スリッパ</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </details>
              <details class="p-qa__content js-details">
                <summary class="p-qa__summary p-qa__summary--service js-summary">
                  <h4 class="p-qa__ttl p-qa__ttl--service">
                    インターネット
                  </h4>
                </summary>
                <div class="p-qa__inner js-content">
                  <div class="p-qa__wrap p-qa__wrap--service">
                    <div class="p-qa__content p-qa__content--open01">
                      <div class="p-qa__service-lists">
                        <div class="p-qa__service-list">
                          <p class="p-qa__service-list-text">シャンプー</p>
                          <p class="p-qa__service-list-text">リンス</p>
                          <p class="p-qa__service-list-text">石鹸</p>
                          <p class="p-qa__service-list-text">ボディソープ</p>
                          <p class="p-qa__service-list-text">バスタオル</p>
                          <p class="p-qa__service-list-text">フェイスタオル</p>
                        </div>
                        <div class="p-qa__service-list">
                          <p class="p-qa__service-list-text">パジャマ</p>
                          <p class="p-qa__service-list-text">毛布</p>
                          <p class="p-qa__service-list-text">ドライヤー</p>
                          <p class="p-qa__service-list-text">ポット＆日本茶</p>
                          <p class="p-qa__service-list-text">ミネラルウォーター</p>
                          <p class="p-qa__service-list-text">スリッパ</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </details>
              <details class="p-qa__content js-details">
                <summary class="p-qa__summary p-qa__summary--last p-qa__summary--service js-summary">
                  <h4 class="p-qa__ttl p-qa__ttl--service">
                    動画配信サービス
                  </h4>
                </summary>
                <div class="p-qa__inner js-content">
                  <div class="p-qa__wrap p-qa__wrap--service">
                    <div class="p-qa__content p-qa__content--open01">
                      <p class="p-qa__txt">次世代型インターネット接続環境と呼ばれるクラウドサービス利用を想定したIPoE通信を採用。</p>
                      <p class="p-qa__txt">法人向け設計のインターネットサービスプロバイダーを採用、一般利用でありがちな通信混雑を解消しています。</p>
                      <p class="p-qa__txt">宿泊通信設備と完全分離し、オフィス専用のインターネット回線をご用意しております。</p>
                    </div>
                  </div>
                </div>
              </details>
              <div class="p-service__bottom">
                <p class="p-service__bottom-text">※ チェックインタイム15:00／チェックアウトタイム11:00<br>
                  ※ 冷蔵庫の中身はご用意しておりません。ご自由にお使いください。<br>
                  ※ ホテルへのペット類の持込みはお断りいたします。<br>
                  ※ お部屋は禁煙です。</p>
              </div>
            </div>
          </div>
          <div class="p-service__reserve">
            <div class="p-reserve">
              <div class="p-reserve__title-wrapper">
                <p class="p-reserve__title">ご予約</p>
              </div>


              <div class="p-reserve__button-wrapper p-reserve__button-wrapper--service">
                <button type="button" id="registrationButton" class="p-reserve__button p-reserve__button--service">
                  <span class="p-reserve__button-icon">
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/reserve_icon_service.svg" alt="" width="35" height="30">
                  </span>
                  <p class="p-reserve__button-text">宿泊予約</p>
                  <p class="p-reserve__button-text--service">Reservations</p>
                </button>
                <div class="p-reserve__tel-wrapper p-reserve__tel-wrapper--service">
                  <a href="tel:0868252121" class="p-reserve__tel">Tel. 0868-25-2121</a>
                  <p class="p-reserve__small p-reserve__small--service">※スイートルームのご予約はお電話のみの受付となります。</p>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>

    <section class="p-other">
      <div class="l-inner">
        <div class="p-other__content">
          <div class="p-other__title">
            <h3 class="p-other__title-text">別のお部屋を見る</h3>
            <div class="p-other__line"></div>
          </div>
          <div class="p-other__cards">
            <div class="p-other__grid">
              <a href="#" class="p-other__card">
                <figure class="p-other__card-img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/other_1.jpg" alt="スイートルーム B-type" width="360" height="240">
                </figure>
                <div class="p-other__card-bg">
                  <p class="p-other__card-name">スイートルーム B-type</p>
                </div>
              </a>
              <a href="#" class="p-other__card">
                <figure class="p-other__card-img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/other_2.jpg" alt="ツインルーム" width="360" height="240">
                </figure>
                <div class="p-other__card-bg">
                  <p class="p-other__card-name">ツインルーム</p>
                </div>
              </a>
              <a href="#" class="p-other__card">
                <figure class="p-other__card-img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/other_3.jpg" alt="ダブルルーム" width="360" height="240">
                </figure>
                <div class="p-other__card-bg">
                  <p class="p-other__card-name">ダブルルーム</p>
                </div>
              </a>
              <a href="#" class="p-other__card">
                <figure class="p-other__card-img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/other_4.jpg" alt="シングルルーム" width="360" height="240">
                </figure>
                <div class="p-other__card-bg">
                  <p class="p-other__card-name">シングルルーム</p>
                </div>
              </a>
              <a href="#" class="p-other__card">
                <figure class="p-other__card-img">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/other_5.jpg" alt="和室" width="360" height="240">
                </figure>
                <div class="p-other__card-bg">
                  <p class="p-other__card-name">和室</p>
                </div>
              </a>
            </div>

          </div>


        </div>
      </div>
    </section>

    <?php get_template_part('includes/submit'); ?>
  </main>
  <?php get_footer() ?>
</div>