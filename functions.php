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
        'footer_menu' => 'Menú Secundario'
    ));
}

add_filter( 'nav_menu_link_attributes', 'class_main_nav', 10, 3);
function class_main_nav ($atts, $item, $args){
    $class = 'nav-link nav_link justi-center';
    if($args ->theme_location=='header_menu'){
        $class .= ' t-black t-bold';
    }else if($args ->theme_location=='footer_menu'){
        $class .= ' t-white';
    }
    
    $atts['class'] = $class;
    return $atts;
}
?>