<?php get_header(); ?>
<!-- access-kv -->
<div class="c-page-kv c-page-kv--level-02">
    <div class="c-page-kv-wrapper--level-02 l-container-l">
        <span class="c-page-kv-en c-page-kv-en--level-02">access</span>
        <h1 class="c-page-kv-ja c-page-kv-ja--level-02">アクセス</h1>
    </div>
</div>

<?php get_template_part('template-parts/breadcrumb'); ?>

<!-- access-content -->
<section class="access u-ptb l-container">
    <div class="access-wrapper">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
        <article class="access-content">
            <div class="access-content-wrapper">
                <div class="access-content-wrapper-inner">
                    <h2 class="access-content-title">
                        <?php the_title(); ?>
                    </h2>
                    <address class="access-content-address">
                        <?php the_field('company_post'); ?> <?php the_field('company_address'); ?>
                    </address>
                </div>
                <?php
                // Google MapのURLを生成
                $map_link = 'https://www.google.com/maps/search/?api=1&query=' . urlencode(get_field('company_address'));
                ?>
                <a href="<?php echo esc_url($map_link); ?>"
                    target="_blank"
                    rel="noopener"
                    class="access-content-button">
                    Google Map
                </a>
            </div>
            <div class="access-content-map">
                <!-- iframe出力 -->
                <?php
                $company_map = get_field('company_map');
                if ($company_map) :
                    echo wp_kses($company_map, array(
                        'iframe' => array(
                            'src'            => true,
                            'width'          => true,
                            'height'         => true,
                            'style'          => true,
                            'allowfullscreen' => true,
                            'loading'        => true,
                            'referrerpolicy' => true,
                        ),
                    ));
                endif;
                ?>
            </div>
        </article>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<?php get_template_part('template-parts/cta'); ?>
<?php get_footer(); ?>