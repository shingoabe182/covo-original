<?php
// functions.php

function covo_original_scripts() {
    wp_enqueue_style( 'covo-original-style', get_template_directory_uri() . '/assets/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'covo_original_scripts' );