<?php get_header(); ?>
<!-- company-kv -->
<div class="c-page-kv">
    <div class="c-page-kv-wrapper--level-02 l-container-l">
        <span class="c-page-kv-en c-page-kv-en--level-02">company</span>
        <h1 class="c-page-kv-ja c-page-kv-ja--level-02">会社概要</h1>
    </div>
</div>

<?php get_template_part('template-parts/breadcrumb'); ?>

<!-- company-content -->
<section class="company u-ptb l-container">
    <div class="company-image">
        <img src="<?php echo esc_url(the_post_thumbnail_url()); ?>" width="1000" height="500" alt="会社概要の画像" decoding="async"
            loading="lazy" />
    </div>
    <div class="company-content">
        <?php the_content(); ?>
    </div>
</section>

<?php get_template_part('template-parts/cta'); ?>
<?php get_footer(); ?>