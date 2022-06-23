<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_sponsors_icon_widget extends Widget_Base {

	public function get_name() {
		return 'Elementor-sponsors-icon';
	}

	public function get_title() {
		return esc_html__( 'Zc > sponsors' ,'eventes');
	}

	public function get_icon() {
		
		return 'eicon-price-table';
	}

	protected function _register_controls() {
		$traits = new \eventes_Elementor_Traits($this);
		
		$this->start_controls_section(
			'sponsors-icon-control',
			['label' => esc_html__( 'sponsors Section','eventes'),]
		);
			$this->add_control(
	);
		$this->add_control(
			'Repeator',
			[
				'label' => esc_html__( 'Services Icon','eventes'),
				'type' => Controls_Manager::REPEATER,
				'fields' =>array_merge([
				
				 [
						'name' => 'media_image',
						'label' => esc_html__( 'media images' ,'eventes' ),
						'type' => Controls_Manager::MEDIA,
						 
					  ],
				
					
				]),
			]
		);
         

		$this->end_controls_section();
		$this->start_controls_section(

	}

	protected function render( $instance = [] ) {

		eventes_el()->get_section('sponsors', [
			'Repeators' => $this->get_settings('Repeator'),
			'paroller' => $this->get_settings('paroller-text'),
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_sponsors_icon_widget() );