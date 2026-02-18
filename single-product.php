<?php get_header(); ?>

<!-- product-single-kv -->
<div class="c-page-kv c-page-kv-level-02 ">
    <div class="c-page-kv-wrapper l-container-l">
        <div class="c-page-kv-image">
            <img src="<?php echo esc_url(the_field('product_thumbnail_image')); ?>" width='484' height='323' alt="<?php the_title(); ?>"
                decoding='async' />
        </div>
        <div class="c-page-kv-content-wrapper">
            <div class="c-page-kv-top-wrapper">
                <div class="c-page-kv-top-wrapper-title">
                    <span class="c-page-kv-en c-page-kv-en--level-01">product</span>
                    <span class="c-page-kv-ja c-page-kv-ja--level-01">製品案内</span>
                </div>
            </div>
            <h1 class="c-page-kv-title"><?php the_title(); ?></h1>
        </div>
    </div>
</div>
<?php get_template_part('template-parts/breadcrumb'); ?>

<!-- product-single -->
<div class="product-single l-container">
    <!-- メインのスライダー -->
    <?php
    $images = array_values(array_filter([
        get_field('product_image01'),
        get_field('product_image02'),
        get_field('product_image03'),
        get_field('product_image04'),
        get_field('product_image05'),
    ]));
    $image_count = count($images);

    if ($image_count > 1) : ?>
        <!-- 画像が2枚以上のとき、スライダーを使用 -->
        <div class="splide product-single-main-slider js-product-single-main-kv-slider">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php foreach ($images as $image) : ?>
                        <li class="splide__slide product-single-image"><img src="<?php echo esc_url($image['url']); ?>" width="1000" height="500" alt="<?php the_title(); ?>" decoding="async" /></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php else : ?>
        <!-- 画像が1枚のとき、画像を1枚表示 -->
        <div class="product-single-image">
            <img src="<?php echo esc_url($images[0]['url']); ?>" width="1000" height="500" alt="<?php the_title(); ?>" decoding="async" />
        </div>
    <?php endif; ?>

    <!-- サブ画像 -->
    <!-- 画像が2枚以上のとき、スライダーを使用 -->
    <?php
    if ($image_count > 1) : ?>
        <div class="splide product-single-sub-slider js-product-single-sub-slider">
            <div class="splide__track">
                <ul class="splide__list product-single-image-sub-wrapper">
                    <?php foreach ($images as $image) : ?>
                        <li class="splide__slide product-single-image-sub"><img src="<?php echo esc_url($image['url']); ?>" width="104" height="104" alt="<?php the_title(); ?>" decoding="async" /></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>
    <!-- 製品情報 -->
    <div class="product-single-content">
        <dl class="product-single-content-list">
            <div class="product-single-content-list-item">
                <dt>製品名</dt>
                <dd><?php the_title(); ?></dd>
            </div>
            <div class="product-single-content-list-item">
                <dt>製品コード</dt>
                <dd><?php the_field('product_code'); ?></dd>
            </div>
            <div class="product-single-content-list-item">
                <dt>材質</dt>
                <dd><?php the_field('product_material'); ?></dd>
            </div>
            <div class="product-single-content-list-item">
                <dt>サイズ（直径 x 長さ）</dt>
                <dd><?php the_field('product_size'); ?></dd>
            </div>
            <div class="product-single-content-list-item">
                <dt>ドライブタイプ</dt>
                <dd><?php the_field('product_drivetype'); ?></dd>
            </div>
            <div class="product-single-content-list-item">
                <dt>用途</dt>
                <dd><?php the_field('product_purpose'); ?></dd>
            </div>
            <div class="product-single-content-list-item">
                <dt>パッケージ単位（入数）</dt>
                <dd><?php the_field('product_package'); ?></dd>
            </div>
        </dl>
    </div>

</div>
<?php get_template_part('template-parts/cta'); ?>
<?php get_footer(); ?>