<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_progress_bar extends Widget_Base {

	public function get_name() {
		return 'Elementor-progress-bar-widget';
	}

	public function get_title() {
		return esc_html__( 'Zc >  Progress Bar' ,'eventes');
	}

	public function get_icon() {
		
		return 'eicon-skill-bar';
	}

	protected function _register_controls() {
		$traits = new \eventes_Elementor_Traits($this);
		
		$this->start_controls_section(
			'progress-controller',
			['label' => esc_html__( 'Progress-Bar Section','eventes'),]
		);
			
         
		$this->end_controls_section();

	}

	protected function render( $instance = [] ) {

		eventes_el()->get_section('progress-bar', [
			'top-heading' => $this->get_settings('top-heading'),
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_progress_bar() );