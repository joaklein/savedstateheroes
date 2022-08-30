<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// CARBON FIELDS

function crb_load()
{
    require_once('vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

function crb_attach_theme_options()
{
    Container::make('theme_options', 'Theme Options')
        ->add_fields(array(
            Field::make('text', 'discord_link', 'Discord Link'),
            Field::make('text', 'youtube_link', 'YouTube Link'),
            Field::make('text', 'twitter_link', 'Twitter Link'),
        ));
}

function crb_attach_post_options()
{
    Container::make('post_meta', 'home_page_info', 'Home Page Info')
        ->where('post_type', '=', 'page')
        ->where('post_id', '=', '7')
        ->add_fields(array(
            Field::make('text', 'home_page_header', 'Home Page Header'),
            Field::make('text', 'home_page_text', 'Home Page Text')
        ));

    Container::make('post_meta', 'projects_container', 'Projects')
        ->where('post_type', '=', 'page')
        ->where('post_id', '=', '13')
        ->add_fields(array(
            Field::make('image', 'person_01_image', 'Person Image')
                ->set_width(20),
            Field::make('text', 'person_01', 'Person Name')
                ->set_width(80),
            Field::make('image', 'person_02_image', 'Person Image')
                ->set_width(20),
            Field::make('text', 'person_02', 'Person Name')
                ->set_width(80),
            Field::make('text', 'about_us_text_01', 'About Us Pt 1'),
            Field::make('text', 'about_us_text_02', 'About Us Pt 2')
        ));
}

// SHORTENING CARBON FIELDS 'GET' & 'THE'

function the_field($field)
{
    echo carbon_get_the_post_meta($field);
}

function get_field($field)
{
    return carbon_get_the_post_meta($field);
}


function global_scripts()
{
    wp_enqueue_style('site-styles', get_stylesheet_uri());
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js');
    wp_enqueue_script('axios', 'https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js');
}

function remove_admin_login_header()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');
add_action('wp_enqueue_scripts', 'global_scripts');
add_action('after_setup_theme', 'crb_load');
add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
add_action('carbon_fields_register_fields', 'crb_attach_post_options');
