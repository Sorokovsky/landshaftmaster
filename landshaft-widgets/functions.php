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

function import_widget(string $file): void
{
    require_once __DIR__.DIRECTORY_SEPARATOR."widgets".DIRECTORY_SEPARATOR.$file.".php";
}

function register_widgets(Widgets_Manager $widgets_manager): void
{
    import_widget("LanshaftSliderWidget");
    $widgets_manager->register(new Lanshaft_Slider_Widget());
}

function register_widgets_category(Elements_Manager $elements_manager): void
{
    $elements_manager->add_category(
        "landshaft",
        [
            "title" => esc_html__("Landshaft", get_plugin_text_domain()),
            "icon" => "eicon-library-download",
        ]
    );
}