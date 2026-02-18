<?php get_header(); ?>

<!-- privacy-kv -->
<div class="c-page-kv">
    <div class="c-page-kv-wrapper--level-02 l-container-l">
        <span class="c-page-kv-en c-page-kv-en--level-02">privacy</span>
        <h1 class="c-page-kv-ja c-page-kv-ja--level-02">プライバシーポリシー</h1>
    </div>
</div>

<?php get_template_part('template-parts/breadcrumb'); ?>

<!-- privacy-content -->
<section class="privacy u-ptb l-container">
    <?php the_content(); ?>
</section>

<?php get_template_part('template-parts/cta'); ?>
<?php get_footer(); ?>