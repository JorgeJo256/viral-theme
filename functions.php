<?php 
// Using post thumbnail
if(function_exists('add_theme_support')){
    add_theme_support( 'post-thumbnails' );
}

//navs
if(function_exists('register_nav_menus')){
    register_nav_menus( array(
        'header_menu' => 'Menú Principal',
        'social_menu' => 'Menú Social',
    ));
}

add_filter( 'nav_menu_link_attributes', 'class_main_nav', 10, 3);
function class_main_nav ($atts, $item, $args){
    $class = 'nav-link nav_link t-black';
    $atts['class'] = $class;
    return $atts;
}
?>