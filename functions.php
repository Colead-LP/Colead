<?php

function add_my_files()
{
    // CSS
    // 各ページ
    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css');
    if (is_front_page()) {
        wp_enqueue_style('top', get_template_directory_uri() . '/assets/css/style.css');
    } elseif (is_page('confirm')) {
        wp_enqueue_style('confirm', get_template_directory_uri() . '/assets/css/style.css');
    } elseif (is_page('thanks')) {
        wp_enqueue_style('thanks', get_template_directory_uri() . '/assets/css/style.css');
    }

    //JavaScript
    // wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
}
//アクションフック（wp_enqueue_scripts）への登録
add_action('wp_enqueue_scripts', 'add_my_files');
