<?php

function adv_theme_support()
{
    // Featured Image Support
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    // Nav Menus
    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'theme'),
        'footer'    => __('Footer Menu')
    ));
    // Post Format Support
    add_theme_support('post-formats', array('aside', 'gallery', 'link'));
    function add_class_li($classes, $item, $args)
    {
        if (isset($args->li_class)) {
            $classes[] = $args -> li_classes;
        }
    }

    add_action('after_setup_theme', 'adv_theme_support');

    // Submenu Page
    function get_top_parent()
    {
        global $post;
        if ($post->post_parent) {
            $ancestors = get_post_ancestors($post->ID);
            return $ancestors[0];
        }
        return $post->ID;
    }
    function page_is_parent()
    {
        global $post;
        $pages = get_pages('child_of=' . $post->ID);
        return count($pages);
    }

       function add_files_theme()
    {
        // wp_register_style('style', get_stylesheet_uri());

        // registration of styles and scripts

        wp_register_style('Go-Bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');

        wp_register_script('Handler', 'https://cdnjs.cludflare.com./ajax/libs/jquery/3.4.1/jquery.min.js', array('jquery'), '4.4.1', 'true');

        wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array('jquery'), '4.4.1', 'true');

        wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery'), '4.4.1', 'true');

        wp_enqueue_style('Go-Bootstrap');

        wp_enqueue_script('popper');
        wp_enqueue_script('Handler');
        wp_enqueue_script('bootstrap');
    }

    add_action('wp_enqueue_scripts', 'add_files_theme');
}
