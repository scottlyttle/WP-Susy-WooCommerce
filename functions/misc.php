<?php
// Register editor stylesheet
function register_editor_stylesheet() {
    add_editor_style( 'style/build/editor-style.css' );
}
add_action( 'init', 'register_editor_stylesheet' );