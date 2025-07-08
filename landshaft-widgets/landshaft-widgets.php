<?php
/**
 * Plugin Name:     Landshaft widgets
 * Author:          Sorokovsky Andrey
 * Text Domain:     landshaft-widgets
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         LandshaftWidgets
 */

use Elementor\Widgets_Manager;

if(!defined('ABSPATH')) {
    exit();
}

add_action( 'elementor/widgets/register', 'register_widgets' );

function register_widgets(Widgets_Manager $widgets_manager): void
{
    require_once __DIR__.DIRECTORY_SEPARATOR."widgets".DIRECTORY_SEPARATOR."LanshaftSliderWidget.php";
    $widgets_manager->register(new Lanshaft_Slider_Widget());
}