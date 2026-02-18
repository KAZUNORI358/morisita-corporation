<?php get_header(); ?>
<!-- archive-news-kv -->
<div class="c-page-kv c-page-kv--level-02">
    <div class="c-page-kv-wrapper--level-02 l-container-l">
        <span class="c-page-kv-en c-page-kv-en--level-02">news</span>
        <h1 class="c-page-kv-ja">お知らせ</h1>
    </div>
</div>

<?php get_template_part('template-parts/breadcrumb'); ?>

<div class="l-sidebar-wrapper l-sidebar-wrapper--archive-news l-container-l">
    <div class="l-sidebar-main-content l-sidebar-main-content--archive-news">
        <!-- archive-news -->
        <section class="archive-news">
            <ul class="archive-news-list">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <li class="archive-news-list-item">
                            <a href="<?php the_permalink(); ?>">
                                <time datetime="<?php the_time('Y-m-d'); ?>" class="archive-news-list-item-date"><?php the_time('Y.m.d'); ?></time>
                                <p class="archive-news-list-item-title"><?php the_title(); ?></p>
                            </a>
                        </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </ul>
        </section>

        <?php get_template_part('template-parts/pagination'); ?>
    </div>

    <!-- sidebar -->
    <div class="l-sidebar">
        <span class="l-sidebar-title-en">Archives</span>
        <h2 class="l-sidebar-title-ja">アーカイブ</h2>
        <nav class="l-sidebar-nav" aria-label="サイドバーナビゲーション">
            <ul class="l-sidebar-nav-list">

                <!-- 選択された年数の関数を取得 -->
                <?php $selected_year = isset($_GET['year']) ? $_GET['year'] : NULL; ?>

                <!-- 全ての記事 -->
                <li class="l-sidebar-nav-list-item
                <?php if (!$selected_year) {
                    echo 'is-active';
                } ?>">
                    <a href="<?php echo esc_url(home_url('news')); ?>" class="l-sidebar-nav-link">
                        <span class="l-sidebar-nav-link-en">ALL</span>
                    </a>
                </li>

                <!-- 年別で記事を絞り込む -->
                <?php
                $current_year = NULL;
                $args = array(
                    'post_type' => 'post', // 投稿タイプ
                    'orderby' => 'date', // 日付で並び替え
                    'order' => 'DESC', // 最新順
                    'posts_per_page' => -1, // 表示件数
                );
                $query = new WP_Query($args); ?>
                <?php if ($query->have_posts()) : ?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>

                        <!-- 投稿の年数を取得 -->
                        <?php $post_year = get_the_date('Y'); ?>

                        <!-- 投稿の年数が同じものは表示しない -->
                        <?php if ($current_year != $post_year) : ?>
                            <!-- 現在の年数が変わったら、年数を更新 -->
                            <?php $current_year = $post_year; ?>
                            <li class="l-sidebar-nav-list-item <?php if ($selected_year == $post_year)  echo 'is-active'; ?>">
                                <a href="<?php echo esc_url(add_query_arg('year', $post_year, home_url('news'))); ?>" class="l-sidebar-nav-link">
                                    <span class="l-sidebar-nav-link-text">
                                        <span class="l-sidebar-nav-link-en"><?php echo $post_year; ?></span>年
                                    </span>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</div>

<?php get_template_part('template-parts/cta'); ?>
<?php get_footer(); ?>