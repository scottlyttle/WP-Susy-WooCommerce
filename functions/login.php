<?php
// Custom login page logo
function theme_login_logo() {
    echo
    '<link rel="stylesheet" href="' . get_template_directory_uri() . '/style/build/login.css" type="text/css">
    <script src="' . get_template_directory_uri() . '/js/build/modernizr-respond.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    </script>';
}
add_action('login_head', 'theme_login_logo');

// WordPress Change Login page logo link
function change_login_page_url( $url ) {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'change_login_page_url' );