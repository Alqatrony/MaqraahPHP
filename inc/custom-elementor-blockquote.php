<?php
if (!defined('ABSPATH')) exit;

class Custom_Elementor_Blockquote_Widget extends \Elementor\Widget_Base {
    
    public function get_name() {
        return 'custom_blockquote';
    }

    public function get_title() {
        return __('Custom Blockquote', 'text-domain');
    }

    public function get_icon() {
        return 'eicon-blockquote';
    }

    public function get_categories() {
        return ['basic'];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'text-domain'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'blockquote_text',
            [
                'label' => __('Quote Text', 'text-domain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'Die Deutsche Maqra\'ah ist ein Ort der Gemeinschaft, des Austauschs und des gemeinsamen Wachsens am Wort des Allmächtigen.',
                'placeholder' => __('Enter your quote here', 'text-domain'),
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<blockquote>' . esc_html($settings['blockquote_text']) . '</blockquote>';
    }
}