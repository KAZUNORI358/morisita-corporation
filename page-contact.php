<?php get_header(); ?>
<!-- contact-kv -->
<div class="c-page-kv c-page-kv--level-02">
    <div class="c-page-kv-wrapper--level-02 l-container-l">
        <span class="c-page-kv-en c-page-kv-en--level-02">contact</span>
        <h1 class="c-page-kv-ja c-page-kv-ja--level-02">お問い合わせ</h1>
    </div>
</div>

<?php get_template_part('template-parts/breadcrumb'); ?>

<!-- contact-content -->
<section class="contact u-ptb l-container">
    <p class="contact-text">ご質問やご相談があれば、以下フォームよりお問い合わせください。</p>
    <?php the_content(); ?>
</section>

<?php get_footer(); ?>