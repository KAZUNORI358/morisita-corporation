<?php get_header(); ?>
<!-- message-kv -->
<div class="c-page-kv c-page-kv--level-02">
    <div class="c-page-kv-wrapper--level-02 l-container-l">
        <span class="c-page-kv-en c-page-kv-en--level-02">message</span>
        <h1 class="c-page-kv-ja c-page-kv-ja--level-02">代表挨拶</h1>
    </div>
</div>

<?php get_template_part('template-parts/breadcrumb'); ?>

<!-- message-content -->
<section class="message u-ptb l-container">
    <div class="message-wrapper">
        <picture class="message-image">
            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/message/representaive-pc.jpg" media="(min-width: 768px)" />
            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/message/representaive-sp.jpg" media="(max-width: 767px)" />
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/message/representaive-sp.jpg" width="340" height="228" alt="代表者の画像" decoding="async"
                loading="lazy" />
        </picture>
        <div class="message-content">
            <p class="message-content-title"><span class="message-content-title--primary">持続可能な未来へ、</span>
                <br>エネルギーイノベーションの<br class="u-hidden-sp">先駆者として
            </p>
            <div class="message-content-text-wrapper">
                <?php the_content(); ?>
            </div>
            <p class="message-content-text-position">代表取締役社長</p>
            <p class="message-content-text-name">森下 健一郎</p>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/cta'); ?>
<?php get_footer(); ?>