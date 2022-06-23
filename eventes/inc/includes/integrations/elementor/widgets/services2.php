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
				$this->add_control(			'text-paroller',			[				'label' => esc_html__( 'Paroller Text' ,'eventes'),				'type' => Controls_Manager::TEXT,			]			);      		$this->add_control(			'text-sub-title',			[				'label' => esc_html__( 'Sub Title' ,'eventes'),				'type' => Controls_Manager::TEXT,			]			);    		$this->add_control(			'text-title',			[				'label' => esc_html__( 'Heading Text' ,'eventes'),				'type' => Controls_Manager::TEXT,			]			);  			
		$this->add_control(
			'service_section',
			[
				'label' => esc_html__( 'Repeator Text','eventes'),
				'type' => Controls_Manager::REPEATER,
				'fields' => [				 [						'name' => 'column_changer',					   'label' => esc_html__( 'Column', 'eventes'),					   'type' => Controls_Manager::SELECT2,					   'default' => 'col-sm-4 col-lg-4',					   'options' => [						'col-sm-3 col-lg-3' => esc_html__( '3 column', 'eventes'),						'col-sm-4 col-lg-4' => esc_html__( '4 column', 'eventes'),						'col-sm-6 col-lg-6' => esc_html__( '6 column', 'eventes'),															],					],
				   
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
										[						'name' => 'sub-text',						'label' => esc_html__( 'Sub Text' ,'eventes' ),						'type' => Controls_Manager::TEXT,					],
					[
						'name' => 'text',
						'label' => esc_html__( 'Text' ,'eventes' ),
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'content',
						'label' => esc_html__( 'Content','eventes'),
						'type' => Controls_Manager::TEXTAREA,
					],										[						'name' => 'link-text-hrf',						'label' => esc_html__( 'Link','eventes'),						'type' => Controls_Manager::URL,					],
				],
			]
		);
         
		$this->end_controls_section();
	}

	protected function render( $instance = [] ) {

		eventes_el()->get_section('services2', [
			'service_section_var' => $this->get_settings('service_section'),
			'column_section_data' => $this->get_settings('column_section'),						'text-paroller2' => $this->get_settings('text-paroller'),			'text-sub-title2' => $this->get_settings('text-sub-title'),			'text-title2' => $this->get_settings('text-title'),
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_service2() );