<?php 

//adding the CSS and JS files

function gt_setup(){
    wp_enqueue_style("google-fonts", "//fonts.googleapis.com/css?family=Raleway:400,500i,700,900&display=swap");
    wp_enqueue_style("fontawesome", "//use.fontawesome.com/releases/v5.13.0/css/all.css");
    wp_enqueue_style("style", get_stylesheet_uri(), NULL, microtime()); //microtime(); while working on a first version. put number 1.0 when the work is finished
    wp_enqueue_script("main", get_theme_file_uri("/js/main.js"), NULL, microtime(), true);
}

add_action("wp_enqueue_scripts", "gt_Setup");

// adding theme support

function mb_init() {
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_theme_support("html5",
        array("comment-list", "comment-form", "search-form")
    );
    
}

add_action("after_setup_theme", "mb_init");

// Features post types

function mb_custom_post_type() {
    register_post_type("Feature",
        array(
            "rewrite" => array("slug" => "Features"),
            "labels" => array(
                "name" => "Features",
                "singular_name" => "Feature",
                "add_new_item" => "Add New Feature",
                "edit_item" => "Edit Feature"
            ),
            "menu-icon" => "dashicons-clipboard",
            "public" => true,
            "has_archive" => true,
            "supports" => array(
                "title", "thumbnail", "editor", "excerpt", "comments", "tags"
            )
        )
     );
}

add_action("init", "mb_custom_post_type");

// Sidebar General

function mb_widgets() {
    register_sidebar(
        array(
            'name' => 'Main Sidebar',
            'id' => 'main_sidebar',
            'before_title' => '<h3>',
            'after_title' => "</h3>"
        )
        );
}

add_action('widgets_init', 'mb_widgets');

// Sidebar about (index.php)

function mb_about_widgets() {
    register_sidebar(
        array(
            'name' => 'About Sidebar',
            'id' => 'about_sidebar',
            'before_title' => '<h3>',
            'after_title' => "</h3>"
        )
        );
}

add_action('widgets_init', 'mb_about_widgets');

//filters for search

function search_filter($query) {
    if($query->is_search()) {
        $query->set('post_type', array('post', 'project'));
    }
}
add_filter( 'pre_get_posts', 'search_filter');