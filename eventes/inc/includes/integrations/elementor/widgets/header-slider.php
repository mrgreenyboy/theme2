<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Widget_header_slider extends Widget_Base {

	public function get_name() {
		return 'Elementor-Widget-header-slider';
	}

	public function get_title() {
		return esc_html__( 'Zc > Header Slider', 'eventes' );
	}

	public function get_icon() {
		return 'eicon-slider-device';
	}

	protected function _register_controls() {
		$traits = new \eventes_Elementor_Traits($this);
		
		$this->start_controls_section(
			'the_header_slider_section',
			['label' => esc_html__( ' header-Slider','eventes' ),]
		);
		

		$this->add_control(
			'header-slider-text',
			[
				'label' => esc_html__( ' header Slider','eventes' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'text-heading',
						'label' => esc_html__( 'Heading' ,'eventes' ),
						'type' => Controls_Manager::TEXT,
					],					
					[
						'name' => 'back-image',
						'label' => esc_html__( 'Image' ,'eventes' ),
						'type' => Controls_Manager::MEDIA,
					],
					[
						'name' => 'textblog',
						'label' => esc_html__( 'Text' ,'eventes' ),
						'type' => Controls_Manager::WYSIWYG,
					],
					[
						'name' => 'button-text',
						'label' => esc_html__( 'Button Text1' ,'eventes' ),
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'button-link',
						'label' => esc_html__( 'Button URL' ,'eventes' ),
						'type' => Controls_Manager::URL,
					],
					[
						'name' => 'button-text2',
						'label' => esc_html__( 'Button Text 2' ,'eventes' ),
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'button-link2',
						'label' => esc_html__( 'Button URL 2' ,'eventes' ),
						'type' => Controls_Manager::URL,
					],
				],
			]
		);


		$this->end_controls_section();


	}

	protected function render( $instance = [] ) {

		eventes_el()->get_section('header-slider', [
			'header-slider-text1' => $this->get_settings('header-slider-text'),
			'image_animation_section' => $this->get_settings('image_animation'),
			'slide_time_section' => $this->get_settings('slide_time'),
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_Widget_header_slider() );
