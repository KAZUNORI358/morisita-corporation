<?php get_header(); ?>
<!-- archive-product-kv -->
<div class="c-page-kv c-page-kv--level-02">
    <div class="c-page-kv-wrapper--level-02 l-container-l">
        <span class="c-page-kv-en c-page-kv-en--level-02">product</span>
        <h1 class="c-page-kv-ja c-page-kv-ja--level-02">製品紹介</h1>
    </div>
</div>

<?php get_template_part('template-parts/breadcrumb'); ?>

<div class="l-container-l u-ptb">
    <!-- archive-product -->
    <section class="archive-product">
        <?php
        $args = array(
            'post_type' => 'product', // 製品の投稿タイプ
            'posts_per_page' => 9, // 表示件数
            'orderby' => 'date', // 日付で並び替え
            'order' => 'DESC', // 最新順
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
                <article class="archive-product-item">
                    <a href="<?php the_permalink(); ?>" class="archive-product-item-link">
                        <div class="archive-product-item-image">
                            <img src="<?php the_field('product_thumbnail_image'); ?>" width="404" height="269" alt="<?php the_title(); ?>"
                                decoding="async" loading="lazy">
                        </div>
                        <div class="archive-product-item-content">
                            <span class="archive-product-item-sub-title">
                                <?php
                                $terms = get_the_terms(get_the_ID(), 'product_category');
                                if ($terms && !is_wp_error($terms)) {
                                    echo $terms[0]->name;
                                }
                                ?>
                            </span>
                            <h2 class="archive-product-item-title"><?php the_title(); ?></h2>
                        </div>
                    </a>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>

    <?php get_template_part('template-parts/pagination'); ?>
</div>

<?php get_template_part('template-parts/cta'); ?>
<?php get_footer(); ?>