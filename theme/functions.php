<?php

use JetBrains\PhpStorm\Immutable;

add_action('wp_enqueue_scripts', function(){
    wp_deregister_script( 'jquery' );
    wp_deregister_script( 'jquery-core' );
    wp_register_style('fonts', get_stylesheet_directory_uri() . '/assets/css/swiper.css');
    wp_register_style('fonts-2', 'https://fonts.gstatic.com');
    wp_register_style('swiper', get_stylesheet_directory_uri() . '/assets/css/swiper.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/css/style.css', array('fonts', 'fonts-2', 'swiper'), 'null', false);
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), true);
    wp_register_script('swiper', get_stylesheet_directory_uri() . '/assets/scripts/swiper.js', array('jquery'), true);
    wp_enqueue_script('script', get_stylesheet_directory_uri() . '/assets/scripts/script.js', array('jquery', 'swiper'), 'null', true);
});
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('widgets');
add_theme_support('custom-logo');

add_action("init", "register_menus");

#[Immutable]
enum MenuLocations: string {
    case Header = "header";
    case Footer = "footer";

}

function register_menus(): void
{
    register_nav_menus(
        [
            MenuLocations::Header->value => get_translated_text(MenuLocations::Header->name),
            MenuLocations::Footer->value => get_translated_text(MenuLocations::Footer->name),
        ],
    );
}

function get_text_domain(): string
{
    return "landshaft";
}

function get_translated_text(string $text): string
{
    return __($text, get_text_domain());
}

function get_header_menu(): string|null|false
{
    return wp_nav_menu(
        [
            'theme_location' => get_translated_text(MenuLocations::Header->value),
            'container' => 'nav',
            'container_class' => 'header__nav',
            "menu_class" => "header__menu",
        ]
    );
}

function get_mobile_menu(): string|null|false
{
    return wp_nav_menu();
}