<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <!-- meta情報 -->
    <?php
    // ページごとにタイトルを設定
    if (is_front_page()) {
        $page_title = '津山鶴山ホテル';
    } elseif (is_page('single')) {
        $page_title = 'シングルルーム | 津山鶴山ホテル';
    } elseif (is_page('double')) {
        $page_title = 'ダブルルーム | 津山鶴山ホテル';
    } elseif (is_page('twin')) {
        $page_title = 'ツインルーム | 津山鶴山ホテル';
    } elseif (is_page('suite-a')) {
        $page_title = 'スイートルームA-type | 津山鶴山ホテル';
    } elseif (is_page('suite-b')) {
        $page_title = 'スイートルームB-type | 津山鶴山ホテル';
    } elseif (is_page('japanese')) {
        $page_title = '和室 | 津山鶴山ホテル';
    } elseif (is_page('stay')) {
        $page_title = 'ご宿泊 | 津山鶴山ホテル';
    } elseif (is_page('restaurant')) {
        $page_title = 'レストラン | 津山鶴山ホテル';
    } elseif (is_page('banquet')) {
        $page_title = '宴会・会議 | 津山鶴山ホテル';
    } elseif (is_page('office')) {
        $page_title = 'サテライトオフィス | 津山鶴山ホテル';
    } elseif (is_page('facilities')) {
        $page_title = '館内のご案内 | 津山鶴山ホテル';
    } elseif (is_page('access')) {
        $page_title = '交通のご案内 | 津山鶴山ホテル';
    } else {
        $page_title = '津山鶴山ホテル';
    }
    ?>
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta property="og:title" content="<?php echo $page_title; ?>" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="津山鶴山ホテル" />
    <meta property="og:description" content="津山鶴山ホテルは、津山市の中心部にあるホテルです。" />


    <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/images/common/ogp.jpg" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri() ?>/images/common/ogp.jpg">

    <!-- ogp -->
    <!-- ファビコン -->
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/common/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/images/common/apple-touch-icon.png">
    <!-- css -->
    <script>
        (function(d) {
            var config = {
                    kitId: 'ofo1kyb',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">


    <!-- Google Translate -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'ja',
                includedLanguages: 'en,ja',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


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
                        <a href="<?php echo home_url('/stay'); ?>" class="p-header__menu-link <?php echo (is_page('stay') || is_page('single') || is_page('double') || is_page('twin') || is_page('suite-a') || is_page('suite-b') || is_page('japanese')) ? 'is-active' : ''; ?>">ご宿泊</a>
                    </li>
                    <li class="p-header__menu-item">
                        <a href="<?php echo home_url('/restaurant'); ?>" class="p-header__menu-link <?php echo is_page('restaurant') ? 'is-active' : ''; ?>">レストラン</a>
                    </li>
                    <li class="p-header__menu-item">
                        <a href="<?php echo home_url('/banquet'); ?>" class="p-header__menu-link <?php echo is_page('banquet') ? 'is-active' : ''; ?>">宴会・会議</a>
                    </li>
                    <li class="p-header__menu-item">
                        <a href="#" class="p-header__menu-link">ウェディング</a>
                    </li>
                    <li class="p-header__menu-item">
                        <a href="<?php echo home_url('/office'); ?>" class="p-header__menu-link <?php echo is_page('office') ? 'is-active' : ''; ?>">サテライトオフィス</a>
                    </li>
                    <li class="p-header__menu-item">
                        <a href="<?php echo home_url('/facilities'); ?>" class="p-header__menu-link <?php echo is_page('facilities') ? 'is-active' : ''; ?>">館内のご案内</a>
                    </li>
                    <li class="p-header__menu-item">
                        <a href="<?php echo home_url('/access'); ?>" class="p-header__menu-link <?php echo is_page('access') ? 'is-active' : ''; ?>">交通のご案内</a>
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
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-drawer-content__link">
                                <span class="p-drawer-content__link-en">HOME</span>
                                <span class="p-drawer-content__link-ja">ホーム</span>
                            </a>
                        </li>
                        <li class="p-drawer-content__list">
                            <a href="<?php echo esc_url(home_url('/stay')); ?>" class="p-drawer-content__link">
                                <span class="p-drawer-content__link-en">STAY</span>
                                <span class="p-drawer-content__link-ja">ご宿泊</span>
                            </a>
                        </li>
                        <li class="p-drawer-content__list">
                            <a href="<?php echo esc_url(home_url('/restaurant')); ?>" class="p-drawer-content__link">
                                <span class="p-drawer-content__link-en">RESTAURANT</span>
                                <span class="p-drawer-content__link-ja">レストラン</span>
                            </a>
                        </li>
                        <li class="p-drawer-content__list">
                            <a href="<?php echo esc_url(home_url('/banquet')); ?>" class="p-drawer-content__link">
                                <span class="p-drawer-content__link-en">BANQUET</span>
                                <span class="p-drawer-content__link-ja">宴会・会議</span>
                            </a>
                        </li>
                        <li class="p-drawer-content__list">
                            <a href="<?php echo esc_url(home_url('/office')); ?>" class="p-drawer-content__link">
                                <span class="p-drawer-content__link-en">OFFICE</span>
                                <span class="p-drawer-content__link-ja">サテライトオフィス</span>
                            </a>
                        </li>
                        <li class="p-drawer-content__list">
                            <a href="<?php echo esc_url(home_url('/facilities')); ?>" class="p-drawer-content__link">
                                <span class="p-drawer-content__link-en">FACILITIES</span>
                                <span class="p-drawer-content__link-ja">館内のご案内</span>
                            </a>
                        </li>
                        <li class="p-drawer-content__list">
                            <a href="<?php echo esc_url(home_url('/access')); ?>" class="p-drawer-content__link">
                                <span class="p-drawer-content__link-en">ACCESS</span>
                                <span class="p-drawer-content__link-ja">交通のご案内</span>
                            </a>
                        </li>
                    </ul>


                </div>
            </div>
        </div>
    </header>