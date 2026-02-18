</main>
<footer class="l-footer">
    <div class="l-footer-inner">
        <div class="l-footer-wrapper l-container-l">
            <div class="l-footer-content-wrapper">
                <button class="l-footer-button js-footer-smooth-scroll">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/arrow/arrow-white-top.svg" width='14' height='12' alt='上へ戻る' decoding='async' />
                </button>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="l-footer-nav-logo">
                    <picture>
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/logo-white-pc.svg" media="(min-width: 768px)" />
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/logo-white-sp.svg" media="(max-width: 767px)" />
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/logo-white-pc.svg" width="160" height="48" alt="森下株式会社"
                            decoding="async" />
                    </picture>
                </a>
                <address class="l-footer-content">
                    <div class="l-footer-content-address">
                        〒123-4567 東京都春日区青葉町2-11-7
                    </div>
                    <div class="l-footer-content-tel">
                        <span class="l-footer-content-tel-en">Tel.</span>
                        <span class="l-footer-content-tel-number">03-1234-5678</span>
                    </div>
                </address>
            </div>

            <!-- navigation list -->
            <nav class="l-footer-nav" aria-label="フッターナビゲーションです">
                <div class="l-footer-nav-list-wrapper">
                    <ul class="l-footer-nav-list01">
                        <li class="l-footer-nav-list01-item">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="l-footer-nav-link">HOME</a>
                        </li>
                        <li class="l-footer-nav-list01-item-gaiyou">
                            <a href="<?php echo esc_url(home_url('/company')); ?>" class="l-footer-nav-link">会社概要</a>
                        </li>
                        <li class="l-footer-nav-list01-item-aisatu">
                            <a href="<?php echo esc_url(home_url('/message')); ?>" class="l-footer-nav-link">代表挨拶</a>
                        </li>
                        <li class="l-footer-nav-list01-item-access">
                            <a href="<?php echo esc_url(home_url('/access')); ?>" class="l-footer-nav-link">アクセス</a>
                        </li>
                    </ul>

                    <ul class="l-footer-nav-list02">
                        <li class="l-footer-nav-list02-item">
                            <span class="l-footer-nav-link">事業紹介</span>
                        </li>
                        <li class="l-footer-nav-list02-item-sub">
                            <a href="<?php echo esc_url(home_url('/business/design')); ?>" class="l-footer-nav-link">特殊ボルトナットの設計・製造</a>
                        </li>
                        <li class="l-footer-nav-list02-item-sub">
                            <a href="<?php echo esc_url(home_url('/business/order-made')); ?>" class="l-footer-nav-link">特殊ボルトナットのオーダーメイド</a>
                        </li>
                        <li class="l-footer-nav-list02-item-sub">
                            <a href="<?php echo esc_url(home_url('/business/quality-control')); ?>" class="l-footer-nav-link">ISO 9001 認証取得の品質管理</a>
                        </li>
                        <li class="l-footer-nav-list02-item-product">
                            <a href="<?php echo esc_url(home_url('/product')); ?>" class="l-footer-nav-link">製品紹介</a>
                        </li>
                    </ul>
                    <ul class="l-footer-nav-list03">
                        <li class="l-footer-nav-item">
                            <a href="<?php echo esc_url(home_url('/news')); ?>" class="l-footer-nav-link">お知らせ</a>
                        </li>
                        <li class="l-footer-nav-item">
                            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="l-footer-nav-link">お問い合わせ</a>
                        </li>
                        <li class="l-footer-nav-item">
                            <a href="<?php echo esc_url(home_url('/privacy')); ?>" class="l-footer-nav-link">プライバシーポリシー</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <small class="l-footer-copyright">
                © 2024 MORISITA inc.
            </small>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>