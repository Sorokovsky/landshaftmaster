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

require_once __DIR__.DIRECTORY_SEPARATOR."functions.php";

if(!defined('ABSPATH')) {
    exit();
}

add_action( 'elementor/widgets/register', 'register_widgets' );
add_action( 'elementor/elements/categories_registered', 'register_widgets_category' );