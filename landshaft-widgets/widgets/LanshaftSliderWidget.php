<?php

use Elementor\Widget_Base;

class Lanshaft_Slider_Widget extends Widget_Base {
    public function get_name(): string {
        return 'custom_alert_widget';
    }
    public function get_title(): string {
        return get_translated_string('Custom Alert Widget');
    }
    public function get_icon(): string {
        return 'eicon-alert';
    }
    public function get_categories(): array {
        return [ 'Landshaft' ];
    }
    protected function register_controls(): void {
        $this->start_controls_section(
            'section_content',
            [
                'label' => get_translated_string('Content'),
            ]
        );

        $this->end_controls_section();
    }
    protected function render(): void {

    }
}