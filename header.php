<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <!-- meta情報 -->
    <title>津山鶴山ホテル</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta property="og:title" content="津山鶴山ホテル" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/images/common/ogp.jpg" />
    <meta property="og:site_name" content="津山鶴山ホテル" />
    <meta property="og:description" content="津山鶴山ホテルは、津山市の中心部にあるホテルです。" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri() ?>/images/common/ogp.jpg">

    <!-- ogp -->
    <!-- ファビコン -->
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/common/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/images/common/apple-touch-icon.png">
    <!-- css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">

    <!-- Google Translate -->
    <!-- <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'ja',
                includedLanguages: 'en,ja',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->

    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <!-- Google Translate Element (非表示) -->
    <div id="google_translate_element" style="display: none;"></div>

    <header class="l-header p-header">
        <div class="p-header__inner">
            <div class="p-header__logo">
                <a href="<?php echo home_url('/'); ?>" class="p-header__logo-link">
                    <img src="<?php echo get_template_directory_uri() ?>/images/common/header_logo.svg" alt="津山鶴山ホテル TSUYAMA KAKUZAN HOTEL" width="265" height="60">
                </a>
            </div>
            <?php if (is_front_page()): ?>
                <div class="p-header__mice">
                    <a href="#" class="p-header__mice-link">
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/mice_img.png" alt="mice" width="360" height="120">
                    </a>
                    <div class="p-header__mice-cross">
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/cross.png" alt="cross" width="120" height="120">
                    </div>
                </div>
            <?php endif; ?>
            <div class="p-header__btns">
                <a href="#" class="p-header__btn-link p-header__btn-link--language">
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/button_1.png" alt="language" width="70" height="180">
                </a>
                <a href="#" class="p-header__btn-link">
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/button_2.png" alt="language" width="70" height="180">
                </a>
                <a href="#" class="p-header__btn-link">
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/button_3.png" alt="language" width="70" height="180">
                </a>
            </div>

            <nav class="p-header__nav">
                <ul class="p-header__menu">
                    <li class="p-header__menu-item">
                        <a href="<?php echo home_url('/stay'); ?>" class="p-header__menu-link">ご宿泊</a>
                    </li>
                    <li class="p-header__menu-item">
                        <a href="<?php echo home_url('/restaurant'); ?>" class="p-header__menu-link">レストラン</a>
                    </li>
                    <li class="p-header__menu-item">
                        <a href="<?php echo home_url('/banquet'); ?>" class="p-header__menu-link">宴会・会議</a>
                    </li>
                    <li class="p-header__menu-item">
                        <a href="#" class="p-header__menu-link">ウェディング</a>
                    </li>
                    <li class="p-header__menu-item">
                        <a href="<?php echo home_url('/office'); ?>" class="p-header__menu-link">サテライトオフィス</a>
                    </li>
                    <li class="p-header__menu-item">
                        <a href="#" class="p-header__menu-link">館内のご案内</a>
                    </li>
                    <li class="p-header__menu-item">
                        <a href="<?php echo home_url('/access'); ?>" class="p-header__menu-link">交通のご案内</a>
                    </li>
                </ul>
            </nav>
            <button class="p-header__drawer p-drawer-icon">
                <span class="p-drawer-icon__bars">
                    <span class="p-drawer-icon__bar1"></span>
                    <span class="p-drawer-icon__bar2"></span>
                    <span class="p-drawer-icon__bar3"></span>
                </span>
            </button>
            <div class="p-header__drawer-content p-drawer-content">
                <div class="p-drawer-content__items">
                    <ul class="p-drawer-content__lists">
                        <li class="p-drawer-content__list">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-drawer-content__link">ホーム</a>
                        </li>
                        <li class="p-drawer-content__list">
                            <a href="<?php echo esc_url(home_url('/stay')); ?>" class="p-drawer-content__link">ご宿泊</a>
                        </li>
                        <li class="p-drawer-content__list">
                            <a href="<?php echo esc_url(home_url('/restaurant')); ?>" class="p-drawer-content__link">レストラン</a>
                        </li>
                        <li class="p-drawer-content__list">
                            <a href="<?php echo esc_url(home_url('/banquet')); ?>" class="p-drawer-content__link">宴会・会議</a>
                        </li>
                        <li class="p-drawer-content__list">
                            <a href="<?php echo esc_url(home_url('/office')); ?>" class="p-drawer-content__link">サテライトオフィス</a>
                        </li>
                        <li class="p-drawer-content__list">
                            <a href="<?php echo esc_url(home_url('/facility')); ?>" class="p-drawer-content__link">館内のご案内</a>
                        </li>
                        <li class="p-drawer-content__list">
                            <a href="<?php echo esc_url(home_url('/access')); ?>" class="p-drawer-content__link">交通のご案内</a>
                        </li>
                    </ul>
                    
                    
                </div>
            </div>
        </div>
    </header>