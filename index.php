<?php get_header(); ?>

<!-- top-kv -->
<div class="top-kv">
    <!-- slider -->
    <div class="splide js-kv-slider">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <picture class="top-kv-image">
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/top-kv-sp01.jpg" media="(max-width: 767px)" />
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/top-kv-pc01.jpg" media="(min-width: 768px)" />
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/top-kv-pc01.jpg" width="360" height="680" alt="TOP画像"
                            decoding="async" />
                    </picture>
                </li>
                <li class="splide__slide">
                    <picture class="top-kv-image">
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/top-kv-sp02.jpg" media="(max-width: 767px)" />
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/top-kv-pc02.jpg" media="(min-width: 768px)" />
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/top-kv-pc02.jpg" width="360" height="680" alt="TOP画像"
                            decoding="async" />
                    </picture>
                </li>
                <li class="splide__slide">
                    <picture class="top-kv-image">
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/top-kv-sp03.jpg" media="(max-width: 767px)" />
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/top-kv-pc03.jpg" media="(min-width: 768px)" />
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/top-kv-pc03.jpg" width="360" height="680" alt="TOP画像"
                            decoding="async" />
                    </picture>
                </li>
            </ul>
        </div>
    </div>

    <!-- content -->
    <div class="top-kv-wrapper">
        <div class="top-kv-circle">
            <svg class="top-kv-circle-svg" viewBox="0 0 120 120">
                <!-- 背景の円弧 -->
                <circle class="top-kv-circle-svg-circle" cx="60" cy="60" r="59" />
                <!-- 動く円弧 -->
                <circle class="top-kv-circle-svg-circle-moving js-kv-slider-circle-moving" cx="60" cy="60"
                    r="59" />
            </svg>
            <span class="top-kv-circle-number">0<span class="js-kv-slider-number">1</span></span>
        </div>

        <div class="top-kv-content-wrapper">
            <div class="top-kv-content-ja">
                <span>特殊ボルトナット制作の</span>
                <span>プロフェッショナル</span>
            </div>
            <div class="top-kv-content-en">
                <span>Special bolt and nut production</span><span> professionals</span>
            </div>
        </div>
    </div>
</div>

<!-- news -->
<section class="top-news l-container-l js-scrollTarget">
    <div class="top-news-header">
        <span class="top-news-title-en">News</span>
        <h2 class="top-news-title-ja">お知らせ</h2>
        <a href="<?php echo esc_url(home_url('news')); ?>" class="top-news-button-pc">
            <span class="top-news-button-text">VIEW MORE</span>
        </a>
    </div>
    <div class="top-news-content-wrapper">
        <?php $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <article class="top-news-content-item">
                    <a href="<?php the_permalink(); ?>" class="top-news-content-item-link">
                        <span class="top-news-content-item-date"><?php the_time('Y.m.d'); ?></span>
                        <h3 class="top-news-content-item-title"><?php the_title(); ?></h3>
                    </a>
                </article>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
    <a href="<?php echo esc_url(home_url('news')); ?>" class="top-news-button-sp">
        <span class="top-news-button-text">VIEW MORE</span>
    </a>
</section>

<!-- business -->
<section class="top-business">
    <div class="l-container-l">
        <div class="top-business-container">
            <picture class="top-business-image">
                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/business-sp.jpg" media="(max-width: 767px)" />
                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/business-pc.jpg" media="(min-width: 768px)" />
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top/business-pc.jpg" width="580" height="600" alt="" decoding="async" />
            </picture>
            <div class="top-business-wrapper">
                <div class="top-business-header">
                    <span class="top-business-title-en">Business</span>
                    <h2 class="top-business-title-ja">事業紹介</h2>
                </div>
                <div class="top-business-content-wrapper">
                    <p class="top-business-content-title">
                        <span class="is-no-break-pc">高品質な</span><span class="is-no-break-pc">ボルトナットで、</span>
                        <span>世界を支える。</span>
                    </p>
                    <p class="top-business-content-text">
                        <span>どんな環境にも、最適なソリューション。</span>
                        <span class="is-no-break-pc">豊富な経験と技術力で、お客様のニーズに答える</span><span
                            class="is-no-break-pc">製品づくりをしています。</span>
                    </p>
                </div>
                <div class="top-business-link-wrapper">
                    <a href="<?php echo esc_url(home_url('business/design')); ?>" class="top-business-link">
                        <span class="top-business-link-text">
                            特殊ボルトナットの設計・製造
                        </span>
                        <span class="top-business-link-icon">
                        </span>
                    </a>
                    <a href="<?php echo esc_url(home_url('business/order-made')); ?>" class="top-business-link">
                        <span class="top-business-link-text">
                            特殊ボルトナットのオーダーメイド
                        </span>
                        <span class="top-business-link-icon">
                        </span>
                    </a>
                    <a href="<?php echo esc_url(home_url('business/quality-control')); ?>" class="top-business-link">
                        <span class="top-business-link-text">
                            ISO 9001 認証取得の品質管理
                        </span>
                        <span class="top-business-link-icon">
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- product -->
<section class="top-product">

    <div class="top-product-header-wrapper-inner">
        <div class="top-product-header-wrapper">
            <div class="top-product-header">
                <span class="top-product-title-en">Product</span>
                <h2 class="top-product-title-ja">製品紹介</h2>
            </div>
            <p class="top-product-sub-title">確かな品質と技術力</p>
            <p class="top-product-text"><span>高品質・高精度のボルトナットを豊富に取り揃え。</span>
                <span>産業の要として、お客様のニーズに応える製品をお届けします。</span>
            </p>
        </div>
        <div class="top-product-top-button-wrapper">
            <button class="top-product-button-prev js-product-button-prev">
                <span class="u-visually-hidden">前へ</span>
            </button>
            <button class="top-product-button-next js-product-button-next">
                <span class="u-visually-hidden">次へ</span>
            </button>
        </div>
    </div>

    <!-- product slider -->
    <div class="top-product-item-wrapper  js-product-slider splide">
        <div class="splide__track">
            <ul class="top-product-item-list splide__list">
                <?php $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 4,
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) : ?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <li class="top-product-item splide__slide">
                            <a href="<?php the_permalink(); ?>" class="top-product-item-link">
                                <div class="top-product-item-image">
                                    <img src='<?php echo get_field('product_thumbnail_image'); ?>' width='404' height='269' alt='<?php the_title(); ?>'
                                        decoding='async' />
                                </div>
                                <div class="top-product-item-content">
                                    <span class="top-product-item-sub-title"><?php echo get_the_terms(get_the_ID(), 'product_category')[0]->name; ?></span>
                                    <h3 class="top-product-item-title"><?php the_title(); ?></h3>
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <div class="top-product-bottom-button-wrapper">
        <button class="top-product-button-prev js-product-button-prev">
            <span class="u-visually-hidden">前へ</span>
        </button>
        <button class="top-product-button-next js-product-button-next">
            <span class="u-visually-hidden">次へ</span>
        </button>
    </div>
    <a href="<?php echo esc_url(home_url('product')); ?>" class="top-product-button-view-more l-container-l">
        <span class="top-product-button-view-more-en">VIEW MORE</span>
        <span class="top-product-button-view-more-icon"></span>
    </a>
</section>

<!-- sub-pages -->
<section class="top-sub-pages l-container-l">
    <article class="top-sub-pages-content">
        <a href="<?php echo esc_url(home_url('company')); ?>" class="top-sub-pages-link">
            <div class="top-sub-pages-title">
                <div class="top-sub-pages-title-en">company</div>
                <h2 class="top-sub-pages-title-ja">会社概要</h2>
            </div>
            <p class="top-sub-pages-text">事業内容、経営方針など、 当社を深く知っていただくための情報をご紹介します。</p>
            <span class="top-sub-pages-button">
                <span class="u-visually-hidden">詳細を見る</span>
            </span>
        </a>
    </article>
    <article class="top-sub-pages-content">
        <a href="<?php echo esc_url(home_url('message')); ?>" class="top-sub-pages-link">
            <div class="top-sub-pages-title">
                <div class="top-sub-pages-title-en">message</div>
                <h2 class="top-sub-pages-title-ja">代表挨拶</h2>
            </div>
            <p class="top-sub-pages-text">私たちの理念と未来への展望をお伝えします。 社長からのメッセージをご覧ください。</p>
            <span class="top-sub-pages-button">
                <span class="u-visually-hidden">詳細を見る</span>
            </span>
        </a>
    </article>
    <article class="top-sub-pages-content">
        <a href="<?php echo esc_url(home_url('access')); ?>" class="top-sub-pages-link">
            <div class="top-sub-pages-title">
                <div class="top-sub-pages-title-en">access</div>
                <h2 class="top-sub-pages-title-ja">アクセス</h2>
            </div>
            <p class="top-sub-pages-text">本社工場や営業所の所在地、 詳細な地図と交通手段をご確認いただけます。</p>
            <span class="top-sub-pages-button">
                <span class="u-visually-hidden">詳細を見る</span>
            </span>
        </a>
    </article>
</section>

<?php get_template_part('template-parts/cta'); ?>

<?php get_footer(); ?>