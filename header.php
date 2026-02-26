<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="format-detection" content="telephone=no" />

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&family=Zen+Kaku+Gothic+New:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/css/vendor/splide-core.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/css/style.css'); ?>" />

    <!-- js -->
    <script src="<?php echo esc_url(get_template_directory_uri() . '/js/vendor/splide.min.js'); ?>" defer></script>
    <script src="<?php echo esc_url(get_template_directory_uri() . '/js/vendor/splide-extension-auto-scroll.min.js'); ?>" defer></script>
    <script src="<?php echo esc_url(get_template_directory_uri() . '/js/vendor/gsap.min.js'); ?>" defer></script>
    <script src="<?php echo esc_url(get_template_directory_uri() . '/js/vendor/ScrollTrigger.min.js'); ?>" defer></script>
    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" defer></script>
    <script type="module" src="<?php echo esc_url(get_template_directory_uri() . '/js/main.js'); ?>"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php if (is_front_page()) : ?>
        <header class="l-header js-header">
            <div class="l-header-inner">
                <h1 class="l-header-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <picture class="l-header-logo-default">
                            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/logo-white-pc.svg" media="(min-width: 768px)" />
                            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/logo-white-sp.svg" media="(max-width: 767px)" />
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/logo-white-sp.svg" width="300" height="48" alt="森下株式会社" />
                        </picture>
                        <picture class="l-header-logo-active">
                            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/logo-white-pc.svg" media="(min-width: 768px)" />
                            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/logo-white-sp.svg" media="(max-width: 767px)" />
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/logo-white-sp.svg" width="300" height="48" alt="森下株式会社" />
                        </picture>
                    </a>
                </h1>
                <div class="l-header-nav-wrapper">
                    <nav class="l-header-nav" aria-label="メニュー">
                        <ul class="l-header-list">
                            <li class="l-header-item">
                                <a href="<?php echo esc_url(home_url('/')); ?>">HOME</a>
                            </li>
                            <li class="l-header-item">
                                <a href="<?php echo esc_url(home_url('/company')); ?>">会社概要</a>
                            </li>
                            <li class="l-header-item-business">
                                <button class="js-dropdown-open-button" aria-label="事業紹介のドロップダウンを開く">事業紹介</button>
                            </li>
                            <li class="l-header-item">
                                <a href="<?php echo esc_url(home_url('/product')); ?>">製品紹介</a>
                            </li>
                            <li class="l-header-item">
                                <a href="<?php echo esc_url(home_url('/access')); ?>">アクセス</a>
                            </li>
                        </ul>
                    </nav>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="l-header-button-contact js-header-white">
                        <span class="l-header-button-contact-text">お問い合わせ</span>
                    </a>
                </div>
                <!-- 事業紹介のドロップダウン -->
                <div class="l-header-dropdown-menu js-header-scroll-dropdown-menu" id="js-dropdown-menu">
                    <div class="l-header-dropdown-menu-inner">
                        <nav class="l-header-dropdown-menu-nav" aria-label="事業紹介のナビゲーションです">
                            <ul class="l-header-dropdown-menu-list">
                                <li class="l-header-dropdown-menu-item">
                                    <a href="<?php echo esc_url(home_url('business/design')); ?>" class="l-header-dropdown-menu-link">特殊ボルトナットの設計・製造</a>
                                </li>
                                <li class="l-header-dropdown-menu-item">
                                    <a href="<?php echo esc_url(home_url('business/order-made')); ?>" class="l-header-dropdown-menu-link">特殊ボルトナットのオーダーメイド</a>
                                </li>
                                <li class="l-header-dropdown-menu-item">
                                    <a href="<?php echo esc_url(home_url('business/quality-control')); ?>" class="l-header-dropdown-menu-link">ISO 9001
                                        認証取得の品質管理</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- メニューボタン -->
                <button class="l-header-menu-button js-hamburger-menu-button-open js-header-white"
                    aria-label="ハンバーガーメニューをひらく">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </header>
    <?php else : ?>
        <header class="l-header l-header--sub js-header">
            <div class="l-header-inner">
                <div class="l-header-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <picture class="l-header-logo-default">
                            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/logo-pc.svg" media="(min-width: 768px)" />
                            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/logo-sp.svg" media="(max-width: 767px)" />
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/logo-sp.svg" width="160" height="48" alt="MORISITA CORPORATION"
                                decoding="async" />
                        </picture>
                        <picture class="l-header-logo-active">
                            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/logo-white-pc.svg" media="(min-width: 768px)" />
                            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/logo-white-sp.svg" media="(max-width: 767px)" />
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/logo-white-sp.svg" width="160" height="48" alt="MORISITA CORPORATION"
                                decoding="async" />
                        </picture>
                    </a>
                </div>
                <div class="l-header-nav-wrapper">
                    <nav class="l-header-nav" aria-label="メニュー">
                        <ul class="l-header-list">
                            <li class="l-header-item l-header-item--sub">
                                <a href="<?php echo esc_url(home_url('/')); ?>">HOME</a>
                            </li>
                            <li class="l-header-item l-header-item--sub">
                                <a href="<?php echo esc_url(home_url('company')); ?>">会社概要</a>
                            </li>
                            <li class="l-header-item-business l-header-item-business--sub js-dropdown-open-button">
                                <button class="js-modal-open-button" aria-label="モーダルを開く">事業紹介</button>
                            </li>

                            <li class="l-header-item l-header-item--sub">
                                <a href="<?php echo esc_url(home_url('product')); ?>">製品紹介</a>
                            </li>
                            <li class="l-header-item l-header-item--sub">
                                <a href="<?php echo esc_url(home_url('access')); ?>">アクセス</a>
                            </li>
                        </ul>
                    </nav>
                    <a href="<?php echo esc_url(home_url('contact')); ?>" class="l-header-button-contact js-header-white">
                        <span class="l-header-button-contact-text">お問い合わせ</span>
                    </a>
                </div>

                <!-- 事業紹介のドロップダウン -->
                <div class="l-header-dropdown-menu js-header-scroll-dropdown-menu" id="js-dropdown-menu">
                    <div class="l-header-dropdown-menu-inner">
                        <nav class="l-header-dropdown-menu-nav" aria-label="事業紹介のナビゲーションです">
                            <ul class="l-header-dropdown-menu-list">
                                <li class="l-header-dropdown-menu-item">
                                    <a href="<?php echo esc_url(home_url('business/design')); ?>" class="l-header-dropdown-menu-link">特殊ボルトナットの設計・製造</a>
                                </li>
                                <li class="l-header-dropdown-menu-item">
                                    <a href="<?php echo esc_url(home_url('business/order-made')); ?>" class="l-header-dropdown-menu-link">特殊ボルトナットのオーダーメイド</a>
                                </li>
                                <li class="l-header-dropdown-menu-item">
                                    <a href="<?php echo esc_url(home_url('business/quality-control')); ?>" class="l-header-dropdown-menu-link">ISO 9001
                                        認証取得の品質管理</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- メニューボタン -->
                <button class="l-header-menu-button js-hamburger-menu-button-open js-header-white"
                    aria-label="ハンバーガーメニューをひらく">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </header>
    <?php endif; ?>

    <!-- ハンバーガーメニュー -->
    <dialog class="l-hamburger-menu-dialog js-hamburger-menu-dialog js-header-hamburger-menu-dialog"
        aria-label="ハンバーガーメニュー">
        <div class="l-hamburger-menu-dialog-header">
            <div class="l-header-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/logo-white-sp.svg" width='160' height='48' alt='森下株式会社'
                        decoding='async' />
                </a>
            </div>
            <button class="l-hamburger-menu-button js-hamburger-menu-button-close" aria-label="ハンバーガーメニューを閉じる">
                <span></span>
                <span></span>
            </button>
        </div>
        <div class="l-hamburger-menu-content">
            <nav aria-label="メニュー">
                <ul class="l-hamburger-menu-list">
                    <li class="l-hamburger-menu-item">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><span class="l-hamburger-menu-item-text"><span class="l-hamburger-menu-item-text-en">home</span><span
                                    class="l-hamburger-menu-item-text-ja">ホーム</span></span></a>
                    </li>
                    <li class="l-hamburger-menu-item">
                        <a href="<?php echo esc_url(home_url('/company')); ?>"><span class="l-hamburger-menu-item-text"><span class="l-hamburger-menu-item-text-en">company</span><span
                                    class="l-hamburger-menu-item-text-ja">会社概要</span></a>
                    </li>
                    <li class="l-hamburger-menu-item l-hamburger-menu-item-business">
                        <span class="l-hamburger-menu-item-text-en">business</span><span
                            class="l-hamburger-menu-item-text-ja">事業紹介</span>
                    </li>
                    <li class="l-hamburger-menu-item-business-item">
                        <a href="<?php echo esc_url(home_url('/business/design')); ?>"><span
                                class="l-hamburger-menu-item-text-business">特殊ボルトナットの設計・製造</span>
                        </a>
                    </li>
                    <li class="l-hamburger-menu-item-business-item">
                        <a href="<?php echo esc_url(home_url('/business/order-made')); ?>"><span
                                class="l-hamburger-menu-item-text-business">特殊ボルトナットのオーダーメイド</span>
                        </a>
                    </li>
                    <li class="l-hamburger-menu-item-business-item">
                        <a href="<?php echo esc_url(home_url('/business/quality-control')); ?>"><span class="l-hamburger-menu-item-text-business">ISO 9001
                                認証取得の品質管理</span>
                        </a>
                    </li>
                    <li class="l-hamburger-menu-item">
                        <a href="<?php echo esc_url(home_url('/product')); ?>"><span class="l-hamburger-menu-item-text"><span class="l-hamburger-menu-item-text-en">product</span>
                                <span class="l-hamburger-menu-item-text-ja">製品紹介</span>
                        </a>
                    </li>
                    <li class="l-hamburger-menu-item">
                        <a href="<?php echo esc_url(home_url('/access')); ?>"><span class="l-hamburger-menu-item-text"><span class="l-hamburger-menu-item-text-en">access</span>
                                <span class="l-hamburger-menu-item-text-ja">アクセス</span>
                        </a>
                    </li>
                    <li class="l-hamburger-menu-item">
                        <a href="<?php echo esc_url(home_url('/contact')); ?>"><span class="l-hamburger-menu-item-text"><span class="l-hamburger-menu-item-text-en">contact</span>
                                <span class="l-hamburger-menu-item-text-ja">お問い合わせ</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </dialog>
    <!-- ハンバーガーメニュー -->
    <main>