<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Widget_about2 extends Widget_Base {

	public function get_name() {
		return 'Elementor_about2-widget';
	}

	public function get_title() {
		return esc_html__( 'Zc > About 02','eventes');
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
		$this->add_control(
		$this->add_control(
		$this->add_control(
			'text-control',
			[
				'label' => esc_html__( 'Text' ,'eventes'),
				'type' => Controls_Manager::WYSIWYG,
			]
			);
		$this->end_controls_section();
	}

	protected function render( $instance = [] ) {


		eventes_el()->get_section('about2', [
			'text-control1' => $this->get_settings('text-control'),
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_Widget_about2() );