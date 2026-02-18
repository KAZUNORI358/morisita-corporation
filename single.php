<?php get_header(); ?>
<!-- news-single-kv -->
<div class="c-page-kv c-page-kv-level-02 ">
    <div class="c-page-kv-wrapper l-container-l">
        <div class="c-page-kv-image">
            <img src="<?php the_post_thumbnail_url(); ?>" width='484' height='323' alt="<?php the_title(); ?>" decoding='async' />
        </div>
        <div class="c-page-kv-content-wrapper">
            <div class="c-page-kv-top-wrapper">
                <div class="c-page-kv-top-wrapper-title">
                    <span class="c-page-kv-en c-page-kv-en--level-01">news</span>
                    <span class="c-page-kv-ja c-page-kv-ja--level-01">お知らせ</span>
                </div>
                <span class="c-page-kv-date"><?php the_time('Y.m.d'); ?></span>
            </div>
            <h1 class="c-page-kv-title"><?php the_title(); ?></h1>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/breadcrumb'); ?>
<!-- news-single-content -->
<section class="news-single l-container">
    <div class="news-single-content-wrapper">
        <?php if (get_the_content()) : ?>
            <?php the_content(); ?>
        <?php else : ?>
            <p>記事の内容がありません。</p>
        <?php endif; ?>
    </div>
    <div class="news-single-button-wrapper">
        <?php the_post_navigation(array(
            'prev_text' => '<button class="news-single-prev-button">prev</button>',
            'next_text' => '<button class="news-single-next-button">next</button>',
        )); ?>
    </div>
</section>

<?php get_template_part('template-parts/cta'); ?>
<?php get_footer(); ?>