<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class MarcSliderWidget extends \Elementor\Widget_Base {
    public function get_name() {
        return 'marc_slider';
    }

    public function get_title() {
        return __('Marc Slider', 'elementor-hero-section-widget');
    }

    public function get_icon() {
        return 'eicon-slider-push';
    }

    public function get_categories() {
        return ['general'];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'elementor-hero-section-widget'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
    
        $this->add_control(
            'slides',
            [
                'label' => __('Slides', 'elementor-hero-section-widget'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'subHeading',
                        'label' => __('Sub Heading', 'elementor-hero-section-widget'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __('ROUND OUT YOUR HOME SERVICE NEEDS', 'elementor-hero-section-widget'),
                    ],
                    [
                        'name' => 'heading',
                        'label' => __('Heading', 'elementor-hero-section-widget'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __('ROUND OUT YOUR HOME SERVICE NEEDS', 'elementor-hero-section-widget'),
                    ],
                    [
                        'name' => 'description',
                        'label' => __('Description', 'elementor-hero-section-widget'),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => __('Authority Brands is the leading provider of in-home services...', 'elementor-hero-section-widget'),
                    ],
                    [
                        'name' => 'icon_prev',
                        'label' => __('Previous Icon (SVG)', 'elementor-hero-section-widget'),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => '
<svg width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="-0.8" y="0.8" width="34.4" height="34.4" rx="17.2" transform="matrix(-1 0 0 1 34.4 0.430054)" fill="#F3F3F2"/>
<rect x="-0.8" y="0.8" width="34.4" height="34.4" rx="17.2" transform="matrix(-1 0 0 1 34.4 0.430054)" stroke="black" stroke-width="1.6"/>
<path d="M24 18.1725V19.6876H14.9091L19.0758 23.8543L18 24.9301L12 18.9301L18 12.9301L19.0758 14.0058L14.9091 18.1725H24Z" fill="black"/>
</svg>
',
                    ],
                    [
                        'name' => 'icon_next',
                        'label' => __('Next Icon (SVG)', 'elementor-hero-section-widget'),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => '
<svg width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="0.8" y="1.23005" width="34.4" height="34.4" rx="17.2" fill="#EBE715"/>
<rect x="0.8" y="1.23005" width="34.4" height="34.4" rx="17.2" stroke="black" stroke-width="1.6"/>
<path d="M12 18.1725V19.6876H21.0909L16.9242 23.8543L18 24.9301L24 18.9301L18 12.9301L16.9242 14.0058L21.0909 18.1725H12Z" fill="black"/>
</svg>
',
                    ],
                ],
                'title_field' => '{{{ heading }}}',
            ]
        );
    
        // Swiper Customization Controls
        $this->add_control(
            'autoplay_speed',
            [
                'label' => __('Autoplay Speed (ms)', 'elementor-hero-section-widget'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 3000,
            ]
        );
    
        $this->add_control(
            'loop',
            [
                'label' => __('Loop', 'elementor-hero-section-widget'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'elementor-hero-section-widget'),
                'label_off' => __('No', 'elementor-hero-section-widget'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
    
        $this->add_control(
            'slides_per_view',
            [
                'label' => __('Slides Per View', 'elementor-hero-section-widget'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 1,
            ]
        );
    
        $this->add_control(
            'navigation',
            [
                'label' => __('Enable Navigation Arrows', 'elementor-hero-section-widget'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'elementor-hero-section-widget'),
                'label_off' => __('No', 'elementor-hero-section-widget'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
    
        $this->add_control(
            'pagination',
            [
                'label' => __('Enable Pagination Dots', 'elementor-hero-section-widget'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'elementor-hero-section-widget'),
                'label_off' => __('No', 'elementor-hero-section-widget'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
    
        $this->end_controls_section();
    }
    
    protected function render() {
        include plugin_dir_path(__FILE__) . 'templates/marc-slider-template.php';
    }
}
