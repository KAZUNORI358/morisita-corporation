<?php

/**
 * アイキャッチ表示
 */
add_theme_support('post-thumbnails');

/**
 * ブロックエディタにCSS適応
 */
function my_editor_support()
{
    add_theme_support('editor-styles');
    add_editor_style('css/editor-style.css');
}
add_action('after_setup_theme', 'my_editor_support');

/**
 * Contact Form 7の自動整形を停止
 */
add_filter('wpcf7_autop_or_not', 'my_wpcf7_autop');
function my_wpcf7_autop()
{
    return false;
}

/**
 * 標準投稿のアーカイブ（一覧）URLを /news に設定する
 */
add_filter('post_link', function ($permalink, $post) {
    if ($post->post_type === 'post') {
        return home_url('/news/' . $post->post_name . '/');
    }
    return $permalink;
}, 10, 2);

/**
 * /news/xxx というURLを標準投稿として認識させるリライトルールを追加
 */
add_action('init', function () {
    add_rewrite_rule(
        'news/([^/]+)/?$',
        'index.php?post_type=post&name=$matches[1]', // post_typeを指定して限定する
        'top'
    );
});

/**
 * リダイレクト設定
 */

add_action('template_redirect', 'redirect_member_subpages_to_member');
function redirect_member_subpages_to_member()
{
    if (! is_admin()) {
        $request_uri = $_SERVER['REQUEST_URI'];
        // /access/ で始まり、その後に何かしらスラッグが続く場合
        if (preg_match('#^/access/([^/]+)(/)?$#', $request_uri, $matches)) {
            // ただし /access/ 自体は除外
            if (strtolower($matches[1]) !== '') {
                wp_redirect(home_url('/access/'), 301);
                exit;
            }
        }
    }
}


/**
 * svg画像をアップロードできるようにする
 */
function add_file_types_to_uploads($file_types)
{
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

/**
 * WP エディタのiframe内にページIDクラスを付与
 */
function my_admin_enqueue_editor_scripts()
{
    $post_id = isset($_GET['post']) ? (int) $_GET['post'] : (isset($_POST['post_ID']) ? (int) $_POST['post_ID'] : 0);

    if (! $post_id) {
        return;
    }

    $custom_class = 'p-admin-page--' . (int) $post_id;

    // JSでiframeを探してクラスを付与するスクリプト
    $script = "
        (function() {
            const addPageClass = () => {
                const editorCanvas = document.querySelector('iframe[name=\"editor-canvas\"]');
                if (editorCanvas && editorCanvas.contentDocument) {
                    const body = editorCanvas.contentDocument.body;
                    if (body && !body.classList.contains('" . esc_js($custom_class) . "')) {
                        body.classList.add('" . esc_js($custom_class) . "');
                    }
                } else {
                    // iframeがない(非表示)場合、ラッパー要素に付与
                    const wrapper = document.querySelector('.editor-styles-wrapper');
                    if (wrapper) {
                        wrapper.classList.add('" . esc_js($custom_class) . "');
                    }
                }
            };
            // エディタの準備ができるまで監視
            setInterval(addPageClass, 1000);
        })();
    ";

    wp_add_inline_script('wp-edit-post', $script);
}
add_action('enqueue_block_editor_assets', 'my_admin_enqueue_editor_scripts');

/**
 * セキュリティ対策
 * 参考記事：https://baigie.me/officialblog/2020/01/28/wordpress-security/
 */
remove_action('wp_head', 'wp_generator'); // WordPressのバージョン
remove_action('wp_head', 'wp_shortlink_wp_head'); // 短縮URLのlink
remove_action('wp_head', 'wlwmanifest_link'); // ブログエディターのマニフェストファイル
remove_action('wp_head', 'rsd_link'); // 外部から編集するためのAPI
remove_action('wp_head', 'feed_links_extra', 3); // フィードへのリンク
remove_action('wp_head', 'print_emoji_detection_script', 7); // 絵文字に関するJavaScript
remove_action('wp_head', 'rel_canonical'); // カノニカル
remove_action('wp_print_styles', 'print_emoji_styles'); // 絵文字に関するCSS
remove_action('admin_print_scripts', 'print_emoji_detection_script'); // 絵文字に関するJavaScript
remove_action('admin_print_styles', 'print_emoji_styles'); // 絵文字に関するCSS
