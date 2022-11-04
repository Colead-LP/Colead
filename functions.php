<?php

function add_my_files()
{
    // CSS
    // 各ページ
    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css');
    if (is_front_page()) {
        wp_enqueue_style('top', get_template_directory_uri() . '/assets/css/style.css');
    } elseif (is_page('confirm')) {
        wp_enqueue_style('confirm', get_template_directory_uri() . '/assets/css/confirm.css');
    } elseif (is_page('thanks')) {
        wp_enqueue_style('thanks', get_template_directory_uri() . '/assets/css/thanks.css');
    } elseif (is_page('form')) {
        wp_enqueue_style('form', get_template_directory_uri() . '/assets/css/form.css');
    } 

    //JavaScript
    // wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
}
//アクションフック（wp_enqueue_scripts）への登録
add_action('wp_enqueue_scripts', 'add_my_files');



/*=====================================================
# form action属性の変更コード test



function my_do_shortcode_tag( $output, $tag, $attr ) {
    if ( 'mwform_formkey' == $tag
    // && isset( $attr["31"] ) && '1234' == $attr["31"] 
    ) {
        // $permalink = get_permalink(19);
        $permalink = esc_url( home_url( '/confirm/?post_id='.get_the_ID() ) );
        $post = '"post"';
        $enctype = '"multipart/form-data"';
        $siq_id = '"autopick_xxxx"';
        $output = str_replace(
            '<form method="post" action="" enctype="multipart/form-data">',
            "<form method={$post} action={$permalink} enctype={$enctype} siq_id={$siq_id}>",
            $output
        );
    }
    return $output;
}
add_filter( 'do_shortcode_tag', 'my_do_shortcode_tag' ,10, 3 );


function form_post() {
    if(isset($_POST)){
        $form_post = $_POST;
        print_r($form_post);
    }
}
add_shortcode('sc_form_post', 'form_post');
*/