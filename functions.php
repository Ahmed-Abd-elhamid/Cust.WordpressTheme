<?php

function addAsserts(){
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('404', get_template_directory_uri() . '/assets/css/404.css');
    wp_enqueue_style('archive', get_template_directory_uri() . '/assets/css/archive.css');
    wp_enqueue_style('sidebar', get_template_directory_uri() . '/assets/css/sidebar.css');

    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.cjs',['jquery']);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
}

function addSkillsPostType(){
    register_post_type("skills", array(
        "label" => "skills",
        "public" => true,
        "menu_position" => 4,
        "supports" => ["thumbnail", "title"],
        "taxonomies" => ['category', 'post_tag']
    ));
}

add_action("wp_enqueue_scripts","addAsserts");
add_theme_support("post-thumbnails");
add_theme_support("menus");

register_nav_menus(array(
    "main-menu" => "Main Menu",
    "footer-menu" => "Footer Menu",
));

add_action("init", "addSkillsPostType");

?>