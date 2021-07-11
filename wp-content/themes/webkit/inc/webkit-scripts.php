<?php

function webkit_scripts() {
    wp_enqueue_style( 'webkit-core', get_template_directory_uri() . '/assets/css/core.min.css', array(), _S_VERSION );
    wp_enqueue_style( 'webkit-template', get_template_directory_uri() . '/assets/css/template.css', array(), _S_VERSION );
    wp_enqueue_style( 'webkit-main-css', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION );
    wp_enqueue_script( 'webkit-mobile', get_template_directory_uri() . '/assets/js/mobile.js', array(), _S_VERSION, false );


    wp_enqueue_script( 'webkit-window', get_template_directory_uri() . '/assets/js/window.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'webkit-core-js', get_template_directory_uri() . '/assets/js/core.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'webkit-js-list', get_template_directory_uri() . '/assets/js/js-list.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'webkit-kernel_main_v1', get_template_directory_uri() . '/assets/js/kernel_main_v1.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'webkit-js-list-2', get_template_directory_uri() . '/assets/js/js-list-2.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'webkit-template-js', get_template_directory_uri() . '/assets/js/template.js', array(), _S_VERSION, true );



}
add_action( 'wp_enqueue_scripts', 'webkit_scripts' );