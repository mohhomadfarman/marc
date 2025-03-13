<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Elementor_Hero_Section_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'hero_section';
	}

	public function get_title() {
		return esc_html__( 'Hero Section', 'elementor-hero-section-widget' );
	}

	public function get_icon() {
		return 'eicon-banner';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'elementor-hero-section-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'bg_image',
			[
				'label' => esc_html__('Background Image', 'elementor-hero-section-widget'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'selectors' => [
					'{{WRAPPER}} .hero-section' => 'background-image: url({{URL}});',
				],
			]
		);
		
		// Background Size
		$this->add_control(
			'bg_size',
			[
				'label' => esc_html__('Background Size', 'elementor-hero-section-widget'),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'cover',
				'options' => [
					'auto' => esc_html__('Auto', 'elementor-hero-section-widget'),
					'cover' => esc_html__('Cover', 'elementor-hero-section-widget'),
					'contain' => esc_html__('Contain', 'elementor-hero-section-widget'),
				],
				'selectors' => [
					'{{WRAPPER}} .hero-section' => 'background-size: {{VALUE}};',
				],
			]
		);
		
		// Background Position
		$this->add_control(
			'bg_position',
			[
				'label' => esc_html__('Background Position', 'elementor-hero-section-widget'),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'center center',
				'options' => [
					'left top' => esc_html__('Left Top', 'elementor-hero-section-widget'),
					'left center' => esc_html__('Left Center', 'elementor-hero-section-widget'),
					'left bottom' => esc_html__('Left Bottom', 'elementor-hero-section-widget'),
					'right top' => esc_html__('Right Top', 'elementor-hero-section-widget'),
					'right center' => esc_html__('Right Center', 'elementor-hero-section-widget'),
					'right bottom' => esc_html__('Right Bottom', 'elementor-hero-section-widget'),
					'center top' => esc_html__('Center Top', 'elementor-hero-section-widget'),
					'center center' => esc_html__('Center Center', 'elementor-hero-section-widget'),
					'center bottom' => esc_html__('Center Bottom', 'elementor-hero-section-widget'),
				],
				'selectors' => [
					'{{WRAPPER}} .hero-section' => 'background-position: {{VALUE}};',
				],
			]
		);
		
		// Background Repeat
		$this->add_control(
			'bg_repeat',
			[
				'label' => esc_html__('Background Repeat', 'elementor-hero-section-widget'),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'no-repeat',
				'options' => [
					'no-repeat' => esc_html__('No Repeat', 'elementor-hero-section-widget'),
					'repeat' => esc_html__('Repeat', 'elementor-hero-section-widget'),
					'repeat-x' => esc_html__('Repeat Horizontally', 'elementor-hero-section-widget'),
					'repeat-y' => esc_html__('Repeat Vertically', 'elementor-hero-section-widget'),
				],
				'selectors' => [
					'{{WRAPPER}} .hero-section' => 'background-repeat: {{VALUE}};',
				],
			]
		);
		
		// Background Overlay (Opacity & Color)
		$this->add_control(
			'bg_overlay',
			[
				'label' => esc_html__('Background Overlay Color', 'elementor-hero-section-widget'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .hero-section::before' => 'content: ""; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: {{VALUE}}; opacity: 0.5;',
				],
			]
		);
		
		// Border Radius
		$this->add_responsive_control(
			'bg_border_radius',
			[
				'label' => esc_html__('Border Radius', 'elementor-hero-section-widget'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors' => [
					'{{WRAPPER}} .hero-section' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		// Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bg_box_shadow',
				'label' => esc_html__('Box Shadow', 'elementor-hero-section-widget'),
				'selector' => '{{WRAPPER}} .hero-section',
			]
		);

		$this->add_control(
			'rating',
			[
				'label' => esc_html__( 'Rating', 'elementor-hero-section-widget' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 5,
				'step' => 0.1,
				'default' => 4.9,
			]
		);

		$this->add_control(
			'total_reviews',
			[
				'label' => esc_html__( 'Total Reviews', 'elementor-hero-section-widget' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => 1000,
			]
		);

		$this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'elementor-hero-section-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter title here', 'elementor-hero-section-widget' ),
			]
		);
		$this->add_control(
			'title2',
			[
				'label' => esc_html__( 'Title', 'elementor-hero-section-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter title2 here', 'elementor-hero-section-widget' ),
			]
		);

		$this->add_control(
			'subtitle',
			[
				'label' => esc_html__( 'Subtitle', 'elementor-hero-section-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter subtitle here', 'elementor-hero-section-widget' ),
			]
		);

		$this->add_control(
			'description',
			[
				'label' => esc_html__( 'Description', 'elementor-hero-section-widget' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => esc_html__( 'Enter description here', 'elementor-hero-section-widget' ),
			]
		);

		$this->add_control(
			'show_button_1',
			[
				'label' => esc_html__( 'Show Button 1', 'elementor-hero-section-widget' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		$this->add_control(
			'button_1_text',
			[
				'label' => esc_html__( 'Button 1 Text', 'elementor-hero-section-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'condition' => [ 'show_button_1' => 'yes' ],
			]
		);

		$this->add_control(
			'show_button_2',
			[
				'label' => esc_html__( 'Show Button 2', 'elementor-hero-section-widget' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'default' => 'no',
			]
		);
		$this->add_control(
			'button_2_text',
			[
				'label' => esc_html__( 'Button 2 Text', 'elementor-hero-section-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'condition' => [ 'show_button_2' => 'yes' ],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'marc_section_style',
			[
				'label' => esc_html__( 'Style', 'elementor-hero-section-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'background_color',
			[
				'label' => esc_html__( 'Background Color', 'elementor-hero-section-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .home-service-widget' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();
		$this->start_controls_section(
			'Title_stylesection_style',
			[
				'label' => esc_html__('Title Style', 'elementor-hero-section-widget'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => esc_html__('Typography', 'elementor-hero-section-widget'),
				'selector' => '{{WRAPPER}} .wrapperHero .headline',
			]
		);
		$this->add_control(
			'title_color',
			[
				'label' => esc_html__( 'Title Color', 'elementor-hero-section-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wrapperHero .headline' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'text_align',
			[
				'label' => esc_html__('Text Alignment', 'elementor-hero-section-widget'),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__('Left', 'elementor-hero-section-widget'),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__('Center', 'elementor-hero-section-widget'),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__('Right', 'elementor-hero-section-widget'),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .wrapperHero .headline' => 'text-align: {{VALUE}};',
				],
				'toggle' => true,
			]
		);
		
		$this->add_control(
			'line_height',
			[
				'label' => esc_html__('Line Height', 'elementor-hero-section-widget'),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px', 'em','%'],
				'range' => [
					'px' => [
						'min' => 10,
						'max' => 100,
					],
					'em' => [
						'min' => 1,
						'max' => 10,
						'step' => 0.1,
					],
					'%' => [
						'min' => 1,
						'max' => 100,
					]
				],
				'selectors' => [
					'{{WRAPPER}} .wrapperHero .headline' => 'line-height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$this->add_control(
			'letter_spacing',
			[
				'label' => esc_html__('Letter Spacing', 'elementor-hero-section-widget'),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px', 'em','%'],
				'range' => [
					'px' => [
						'min' => -10,
						'max' => 10,
					],
					'em' => [
						'min' => -1,
						'max' => 1,
						'step' => 0.1,
					],
					'%' => [
						'min' => 1,
						'max' => 100,
					]
				],
				'selectors' => [
					'{{WRAPPER}} .wrapperHero .headline' => 'letter-spacing: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_section();
		




	}
	/**
	 * Render oEmbed widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		include plugin_dir_path(__FILE__) . 'templates/render-template.php';
	}
	

}