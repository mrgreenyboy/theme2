<?php

namespace Elementor;



if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly



class Elementor_our_team extends Widget_Base {



	public function get_name() {

		return 'Elementor-our-team';

	}



	public function get_title() {

		return esc_html__( 'Zc >  Our Team' ,'eventes' );

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

			'text-paroller',

			[

				'label' => esc_html__( 'Paroller Text' ,'eventes'),

				'type' => Controls_Manager::TEXT,

			]

			);
			
		
		$this->add_control(
			'sub-heading',

			[

				'label' => esc_html__( 'Sub Heading' ,'eventes'),

				'type' => Controls_Manager::TEXT,

			]
			);
			
			
			$this->add_control(
			'text-heading',

			[

				'label' => esc_html__( 'Heading' ,'eventes'),

				'type' => Controls_Manager::TEXT,

			]

			);
			
         /////social link///
		$social_links_list = [
			[
				'name' => 'select_social_networks',
				'label' => esc_html__( 'Social Networks','eventes' ),
				'type' => Controls_Manager::HEADING,
			]
		];

		for ($i = 1; $i <= 5; $i++) {
			$social_links_list[] = [
				'name' => 'social_network_icon__' . $i,
				'label' => esc_html__( 'Icon','eventes' ),
				'type' => Controls_Manager::TEXT,
			];

			$social_links_list[] = [
				'name' => 'social_network_link__' . $i,
				'label' => esc_html__( 'URL','eventes' ),
				'type' => Controls_Manager::URL,
				'default' => [
					'url' => '',
					'is_external' => true,
				],
				'show_external' => false,
				'separator' => 'after',
			];
		}
        

		$this->add_control(

			'service_section',

			[

				'label' => esc_html__( 'Repeator Text','eventes'),

				'type' => Controls_Manager::REPEATER,

				'fields' =>  array_merge([
				   
					
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

						'name' => 'text',

						'label' => esc_html__( 'Text' ,'eventes' ),

						'type' => Controls_Manager::TEXT,

					],
					[

						'name' => 'sponsors-button-link',

						'label' => esc_html__( 'url' ,'eventes'),

						'type' => Controls_Manager::URL,

						'default' => [

							'url' => '',

							'is_external' => true,

						],

						'show_external' => false,

						'separator' => 'after',

					],
					[

						'name' => 'company',

						'label' => esc_html__( 'Company','eventes'),

						'type' => Controls_Manager::TEXT,

					],

					[

						'name' => 'content',

						'label' => esc_html__( 'Content','eventes'),

						'type' => Controls_Manager::TEXT,

					],
					
					[

						'name' => 'potions',

						'label' => esc_html__( 'Potions','eventes'),

						'type' => Controls_Manager::TEXT,

					],
					
					

				],$social_links_list),

			]

		);

         

		$this->end_controls_section();

	}



	protected function render( $instance = [] ) {



		eventes_el()->get_section('our-team', [

			'service_section_var' => $this->get_settings('service_section'),

			'sub_heading01' => $this->get_settings('sub-heading'),
			'text-heading01' => $this->get_settings('text-heading'),			
			'text-paroller2' => $this->get_settings('text-paroller'),

			]);

	}



	protected function content_template() {}



	public function render_plain_content() {}



}



Plugin::instance()->widgets_manager->register_widget_type( new Elementor_our_team() );