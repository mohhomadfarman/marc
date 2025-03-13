<?php
class Swiper_Reviews_Widget extends \Elementor\Widget_Base {
    public function get_script_depends() {
        return ['swiper'];
    }
    
    public function get_style_depends() {
        return ['swiper'];
    }
    
    public function __construct($data = [], $args = null) {
        parent::__construct($data, $args);
        wp_register_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css');
        wp_register_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js', ['jquery'], null, true);
    }

    
    public function get_name() {
        return 'swiper_reviews';
    }
    public function get_title() {
        return __('Swiper Reviews', 'elementor-hero-section-widget');
    }
    public function get_icon() {
        return 'eicon-slider-push';
    }
    public function get_categories() {
        return ['general'];
    }
    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'elementor-hero-section-widget'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'design_version',
            [
                'label' => __('Select Design', 'elementor-hero-section-widget'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'design_1' => __('Design 1', 'elementor-hero-section-widget'),
                    'design_2' => __('Design 2', 'elementor-hero-section-widget')
                ],
                'default' => 'design_1',
            ]
        );
        $this->add_control(
            'reviews',
            [
                'label' => __('Customer Reviews', 'elementor-hero-section-widget'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'name',
                        'label' => __('Name', 'elementor-hero-section-widget'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __('John Doe', 'elementor-hero-section-widget'),
                    ],
                    [
                        'name' => 'review',
                        'label' => __('Review', 'elementor-hero-section-widget'),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => __('This is a great service!', 'elementor-hero-section-widget'),
                    ],
                    [
                        'name' => 'rating',
                        'label' => __('Rating', 'elementor-hero-section-widget'),
                        'type' => \Elementor\Controls_Manager::NUMBER,
                        'min' => 1,
                        'max' => 5,
                        'default' => 5,
                    ],
                    
                    
                ],
                'title_field' => '{{{ name }}}',
            ]
        );
        $this->add_control(
            'rating2',
            [
                'label' => __('Avrg. Reviews', 'elementor-hero-section-widget'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 5,
                'default' => '1',
            ]
        );
        $this->add_control(
            'total_reviews',
            [
                'label' => __('Total Reviews', 'elementor-hero-section-widget'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => '1',
            ]
        );
        $this->add_control(
            'slidesPerView',
            [
                'label' => __('Slide Per View', 'elementor-hero-section-widget'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => '1',
            ]
        );
        $this->add_control(
            'spaceBetween',
            [
                'label' => __('Space Between', 'elementor-hero-section-widget'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => '1',
            ]
        );
        
        $this->end_controls_section();
    }
    protected function render() {
        include plugin_dir_path(__FILE__) . 'templates/rating-template.php';
    }
}
