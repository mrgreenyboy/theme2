<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Widget_about extends Widget_Base {

	public function get_name() {
		return 'Elementor_about-widget';
	}

	public function get_title() {
		return esc_html__( 'Zc > About','eventes');
	}

	public function get_icon() {

		 return 'eicon-image-box';
	 }

	protected function _register_controls() {
		$traits = new \eventes_Elementor_Traits($this);

		$this->start_controls_section(
			'the_header_controls',
			['label' => esc_html__( 'Header Section','eventes'),]
		);

		$this->add_control(

			'text-heading01',

			[

				'label' => esc_html__( 'About Text' ,'eventes'),

				'type' => Controls_Manager::TEXT,

			]

			);
		$this->add_control(

			'text-sub-heading',

			[

				'label' => esc_html__( 'Sub Heading' ,'eventes'),

				'type' => Controls_Manager::TEXT,

			]

			);
		$this->add_control(

			'text-heading02',

			[

				'label' => esc_html__( 'Heading' ,'eventes'),

				'type' => Controls_Manager::TEXT,

			]

			);

			$this->add_control(

			'text-sub-heading2',

			[

				'label' => esc_html__( 'Sub Heading 2' ,'eventes'),

				'type' => Controls_Manager::TEXT,

			]

			);


		$this->add_control(
			'text-control',
			[
				'label' => esc_html__( 'Text' ,'eventes'),
				'type' => Controls_Manager::TEXTAREA,
			]
			);

			$this->add_control(

			'text-btn-text',

			[

				'label' => esc_html__( 'Button Text' ,'eventes'),

				'type' => Controls_Manager::TEXT,

			]

			);
			$this->add_control(

			'text-btn-link',

			[

				'label' => esc_html__( 'Button URL' ,'eventes'),

				'type' => Controls_Manager::URL,

			]

			);
			$this->add_control(

			'background-media',

			[

				'label' => esc_html__( 'Background Images' ,'eventes'),

				'type' => Controls_Manager::MEDIA,

			]

			);

		$this->end_controls_section();
	}

	protected function render( $instance = [] ) {


		eventes_el()->get_section('about', [
			'text-control1' => $this->get_settings('text-control'),
			'text-control2' => $this->get_settings('text-heading02'),
			'text-control3' => $this->get_settings('text-heading01'),
			'text-sub-heading1' => $this->get_settings('text-sub-heading'),
			'text-sub-heading2' => $this->get_settings('text-sub-heading2'),
			'text-btn-text1' => $this->get_settings('text-btn-text'),
			'text-btn-link1' => $this->get_settings('text-btn-link'),
			'background-media1' => $this->get_settings('background-media'),
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_Widget_about() );
