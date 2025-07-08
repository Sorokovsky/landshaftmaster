<?php

use Elementor\Elements_Manager;
use Elementor\Widgets_Manager;

function get_plugin_translated_string($string): string
{
    return __($string, get_plugin_text_domain());
}

function get_plugin_text_domain(): string
{
    return 'landshaft-widgets';
}

function import_widgets(): void
{
    require_once __DIR__.DIRECTORY_SEPARATOR."widgets".DIRECTORY_SEPARATOR."index.php";
}

function register_widgets(Widgets_Manager $widgets_manager): void
{
    import_widgets();
    $widgets_manager->register(new Lanshaft_Slider_Widget());
}

function register_widgets_category(Elements_Manager $elements_manager): void
{
    $categories = [];
    $categories["landshaft"] = [
            "title" => get_plugin_translated_string("Landshaft"),
            "icon" => "eicon-library-download",
    ];
    $old_categories = $elements_manager->get_categories();
    $categories = array_merge($categories, $old_categories);
    $set_categories = function(array $categories) {
        $this->categories = $categories;
    };
    $set_categories->call($elements_manager, $categories);
}