<?php

use Elementor\Widget_Base;

if (!defined('ABSPATH')) exit;

class Lanshaft_Slider_Widget extends Widget_Base {
    public function get_name(): string {
        return 'landshaft-slider';
    }
    public function get_title(): string {
        return get_plugin_translated_string('Slider');
    }
    public function get_icon(): string {
        return 'eicon-slides';
    }
    public function get_categories(): array {
        return ["landshaft"];
    }
    protected function register_controls(): void {
    }
    protected function render(): void {
        echo "hello";
    }
}