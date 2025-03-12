<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Header_Widget extends \Elementor\Widget_Base {
	public function get_name() {
		return 'header_main';
	}

	public function get_title() {
		return esc_html__( 'Header Main', 'elementor-hero-section-widget' );
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
    }

	protected function render() {
		include plugin_dir_path(__FILE__) . 'templates/Header-Template.php';
	}
	

}