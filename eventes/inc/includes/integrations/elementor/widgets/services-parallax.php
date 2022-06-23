<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_services_parallax extends Widget_Base {

	public function get_name() {
		return 'Elementor-services-parallax-widget';
	}

	public function get_title() {
		return esc_html__( 'Zc >  Services parallax' ,'eventes' );
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
				'fields' => [				 [						'name' => 'column_changer',					   'label' => esc_html__( 'Column', 'eventes'),					   'type' => Controls_Manager::SELECT2,					   'default' => 'col-sm-4 col-lg-4',					   'options' => [						'col-sm-3 col-lg-3' => esc_html__( '3 column', 'eventes'),						'col-sm-4 col-lg-4' => esc_html__( '4 column', 'eventes'),						'col-sm-6 col-lg-6' => esc_html__( '6 column', 'eventes'),															],					],
				    [
					
						'name' => 'back_color',
						'label' => esc_html__( 'Background Color', 'eventes' ),
						'type' => Controls_Manager::COLOR,
						 'default' => '#252527',
						
			        ],                    		
					[
						'name' => 'icon',
						'label' => esc_html__( 'Icon','eventes'),
						'type' => Controls_Manager::MEDIA,
					],
					
					
					[
					    'name' => 'icon_switcher',
						'label' => esc_html__( 'Icon Switcher','eventes'  ),
						'type' => Controls_Manager::SWITCHER,
						'default' => 'yes',
						'label_on' => esc_html__( 'Show','eventes' ),
						'label_off' => esc_html__( 'Hide','eventes'  ),
						'return_value' => 'yes',
					],
					
					[
					
						'name' => 'text_content',
						'label' => esc_html__( 'Text Color', 'eventes' ),
						'type' => Controls_Manager::COLOR,
						 'default' => '#ffffff',
						
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
					],					[						'name' => 'link-text',						'label' => esc_html__( 'Button Text','eventes'),						'type' => Controls_Manager::TEXT,					],					[						'name' => 'link-text-hrf',						'label' => esc_html__( 'Button URL','eventes'),						'type' => Controls_Manager::URL,					],
					
					
					
				],
			]
		);
         
		$this->end_controls_section();
	}

	protected function render( $instance = [] ) {

		eventes_el()->get_section('services-parallax', [
			'service_section_var' => $this->get_settings('service_section'),
			'column_section_data' => $this->get_settings('column_section'),
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_services_parallax() );