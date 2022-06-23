<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_service2 extends Widget_Base {

	public function get_name() {
		return 'Elementor-service2';
	}

	public function get_title() {
		return esc_html__( 'Zc >  Services 02' ,'eventes' );
	}

	public function get_icon() {
		
		return 'eicon-icon-box';
	}

	protected function _register_controls() {
		$traits = new \eventes_Elementor_Traits($this);
		
		$this->start_controls_section(
			'services_section',
			['label' => esc_html__( 'Features','eventes'),]
		);
		
		$this->add_control(
			'service_section',
			[
				'label' => esc_html__( 'Repeator Text','eventes'),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
				   
					[
						'name' => 'icon',
						'label' => esc_html__( 'Features Image','eventes'),
						'type' => Controls_Manager::MEDIA,
					],
					
					
					[
					    'name' => 'icon_switcher',
						'label' => esc_html__( 'Features Image Switcher','eventes'  ),
						'type' => Controls_Manager::SWITCHER,
						'default' => 'yes',
						'label_on' => esc_html__( 'Show','eventes' ),
						'label_off' => esc_html__( 'Hide','eventes'  ),
						'return_value' => 'yes',
					],
					
					[
						'name' => 'text',
						'label' => esc_html__( 'Text' ,'eventes' ),
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'content',
						'label' => esc_html__( 'Content','eventes'),
						'type' => Controls_Manager::TEXTAREA,
					],
				],
			]
		);
         
		$this->end_controls_section();
	}

	protected function render( $instance = [] ) {

		eventes_el()->get_section('services2', [
			'service_section_var' => $this->get_settings('service_section'),
			'column_section_data' => $this->get_settings('column_section'),
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_service2() );