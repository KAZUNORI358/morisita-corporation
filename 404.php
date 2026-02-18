<?php get_header(); ?>

<!-- error-kv -->
<div class="c-page-kv c-page-kv-level-03">
    <div class="l-container-l">
        <h1 class="c-page-kv-en c-page-kv-en--level-02">404 error</h1>
    </div>
</div>

<?php get_template_part('template-parts/breadcrumb'); ?>

<!-- 404-content -->
<section class="error u-ptb l-container-l js-scrollTarget">
    <p class="error-text">
        恐れ入りますが、お探しのページが見つかりませんでした。
    </p>
    <a class="error-button" href="<?php echo esc_url(home_url('/')); ?>">トップページへ戻る</a>
</section>

<?php get_footer(); ?>