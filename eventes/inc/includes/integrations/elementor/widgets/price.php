<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_price_icon_widget extends Widget_Base {

	public function get_name() {
		return 'Elementor-price-icon';
	}

	public function get_title() {
		return esc_html__( 'Zc > Price' ,'eventes');
	}

	public function get_icon() {
		
		return 'eicon-price-table';
	}

	protected function _register_controls() {
		$traits = new \eventes_Elementor_Traits($this);
		
		$this->start_controls_section(
			'price-icon-control',
			['label' => esc_html__( 'Price Section','eventes'),]
		);
			$this->add_control(
        
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
				[
						'name' => 'which-plan',
						'label' => esc_html__( 'Which Plan','eventes'),
						'type' => Controls_Manager::TEXT,
					],
				   
				   [    
				       'name' => 'active-plan',
				       'label' => esc_html__( 'Active Package', 'eventes'),
				       'type' => Controls_Manager::SELECT2,
				       'default' => 'de-active',
				       'options' => [
					    'active' => esc_html__( 'Active', 'eventes'),
					    'de-active' => esc_html__( 'D-Active', 'eventes'),
				                    ],
			        ],
				   [
						'name' => 'curreny-type',
						'label' => esc_html__( 'Curreny Type' ,'eventes'),
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'package',
						'label' => esc_html__( 'Package' ,'eventes'),
						'type' => Controls_Manager::TEXT,
					],
					[
						'name' => 'Month-year',
						'label' => esc_html__( 'Progress No','eventes'),
						'type' => Controls_Manager::TEXT,
					],
					
					[
						'name' => 'text-again',
						'label' => esc_html__( 'Text' ,'eventes'),
						'type' => Controls_Manager::TEXTAREA,
					],
					
				]),
			]
		);
         

		$this->end_controls_section();
		$this->start_controls_section(

	}

	protected function render( $instance = [] ) {

		eventes_el()->get_section('price', [
			'Repeators' => $this->get_settings('Repeator'),
			'paroller' => $this->get_settings('paroller-text'),
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_price_icon_widget() );