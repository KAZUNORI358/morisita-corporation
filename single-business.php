<?php get_header(); ?>
<!-- business-single-kv -->
<div class="c-page-kv c-page-kv-level-02 ">
    <div class="c-page-kv-wrapper l-container-l">
        <div class="c-page-kv-image">
            <img src='<?php echo esc_url(the_post_thumbnail_url()); ?>' width='484' height='323' alt='' decoding='async' />
        </div>
        <div class="c-page-kv-content-wrapper">
            <div class="c-page-kv-top-wrapper">
                <div class="c-page-kv-top-wrapper-title">
                    <span class="c-page-kv-en c-page-kv-en--level-01">business</span>
                    <span class="c-page-kv-ja c-page-kv-ja--level-02">事業紹介</span>
                </div>
            </div>
            <h1 class="c-page-kv-title c-page-kv-title--level-02"><?php the_title(); ?></h1>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/breadcrumb'); ?>

<div class="l-sidebar-wrapper l-sidebar-wrapper--business-single l-container-l">
    <div class="l-sidebar-main-content l-sidebar-main-content--business-single">
        <!-- business-single-problem -->
        <section class="business-single-problem js-sidebar-target " id="business-single-problem">
            <div class="business-single-problem-title-wrapper">
                <span class="business-single-problem-title-en">problem</span>
                <h2 class="business-single-problem-title-ja">お客様の課題</h2>
            </div>
            <p class="business-single-problem-text">
                以下のような課題を私達は解決いたします。
            </p>
            <ul class="business-single-problem-list">
                <?php
                $problems = array_values(array_filter([
                    get_field('business_design_problem01'),
                    get_field('business_design_problem02'),
                    get_field('business_design_problem03'),
                ]));
                if ($problems) :
                    foreach ($problems as $problem) : ?>
                        <li class="business-single-problem-list-item">
                            <div class="business-single-problem-list-item-icon">
                                <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/business-single/problem-icon.png' width='21' height='24' alt=''
                                    decoding='async' />
                            </div>
                            <p class="business-single-problem-list-item-text"><?php echo esc_html($problem); ?></p>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </section>

        <!-- business-single-feature -->
        <section class="business-single-feature js-sidebar-target" id="business-single-feature">
            <div class="business-single-feature-title-wrapper">
                <span class="business-single-feature-title-en">feature</span>
                <h2 class="business-single-feature-title-ja">特徴</h2>
            </div>

            <?php
            $features = [];
            // カスタムフィールドの値を取得
            for ($i = 1; $i <= 3; $i++) {
                $image = get_field('business_design_feature_image0' . $i);
                $title = get_field('business_design_feature_title0' . $i);
                $text = get_field('business_design_feature_text0' . $i);

                if ($image || $title) {
                    $features[] = [
                        // それぞれの要素を配列に入れる
                        'image' => $image,
                        'title' => $title,
                        'text' => $text,
                    ];
                }
            }
            if ($features) :
                foreach ($features as $feature) : ?>
                    <article class="business-single-feature-content">
                        <div class="business-single-feature-content-image">
                            <img src="<?php echo esc_url($feature['image']); ?>" width="968" height="646" alt=""
                                decoding="async" />
                        </div>
                        <div>
                            <h3 class="business-single-feature-content-title"><?php echo esc_html($feature['title']); ?></h3>
                            <p class="business-single-feature-content-text"><?php echo esc_html($feature['text']); ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            <?php endif; ?>
        </section>

        <!-- business-single-flow -->
        <section class="business-single-flow js-sidebar-target" id="business-single-flow">
            <div class="business-single-flow-title-wrapper">
                <span class="business-single-flow-title-en">flow</span>
                <h2 class="business-single-flow-title-ja">納品までの流れ</h2>
            </div>
            <div class="business-single-flow-content-wrapper">
                <ol class="business-single-flow-content-list">

                    <?php
                    $flows = [];
                    // カスタムフィールドの値を取得
                    for ($i = 1; $i <= 3; $i++) {
                        $icon = get_field('business_design_flow_icon0' . $i);
                        $title = get_field('business_design_flow_title0' . $i);
                        $text = get_field('business_design_flow_text0' . $i);

                        if ($icon || $title) {
                            // それぞれの要素を配列に入れる
                            $flows[] = [
                                'number' => $i,
                                'icon' => $icon,
                                'title' => $title,
                                'text' => $text,
                            ];
                        }
                    }
                    if ($flows) :
                        foreach ($flows as $flow) : ?>
                            <li class="business-single-flow-content-list-item">
                                <div class="business-single-flow-content-list-item-icon-wrapper">
                                    <div class="business-single-flow-content-list-item-icon">
                                        <img src="<?php echo esc_url($flow['icon']); ?>" width="80" height="80" alt=""
                                            decoding="async" />
                                    </div>
                                </div>
                                <div class="business-single-flow-content-list-item-content">
                                    <span class="business-single-flow-content-list-item-number"><?php echo esc_html($flow['number']); ?>.</span>
                                    <h3 class="business-single-flow-content-list-item-title"><?php echo esc_html($flow['title']); ?></h3>
                                    <p class="business-single-flow-content-list-item-text"><?php echo esc_html($flow['text']); ?></p>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ol>
            </div>
        </section>
    </div>

    <!-- sidebar -->
    <div class="l-sidebar l-sidebar--business-single u-hidden-sp">
        <span class="l-sidebar-title-en">menu</span>
        <h2 class="l-sidebar-title-ja">メニュー</h2>
        <nav class="l-sidebar-nav" aria-label="サイドバーナビゲーション">
            <ul class="l-sidebar-nav-list">
                <li class="l-sidebar-nav-list-item js-sidebar-nav-item is-active">
                    <a href="#business-single-problem"
                        class="l-sidebar-nav-link js-sidebar-smooth-scroll">お客様の課題</a>
                </li>
                <li class="l-sidebar-nav-list-item js-sidebar-nav-item">
                    <a href="#business-single-feature"
                        class="l-sidebar-nav-link js-sidebar-smooth-scroll">特徴</a>
                </li>
                <li class="l-sidebar-nav-list-item js-sidebar-nav-item">
                    <a href="#business-single-flow"
                        class="l-sidebar-nav-link js-sidebar-smooth-scroll">納品までの流れ</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<?php get_template_part('template-parts/cta'); ?>
<?php get_footer(); ?>