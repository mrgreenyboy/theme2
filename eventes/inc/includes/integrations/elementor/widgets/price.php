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
			$this->add_control(			'paroller-text',			[				'label' => esc_html__( 'Paroller Text' ,'eventes'),				'type' => Controls_Manager::TEXT,			]			);				$this->add_control(			'sub-text',			[				'label' => esc_html__( 'Sub Title' ,'eventes'),				'type' => Controls_Manager::TEXT,			]			);						$this->add_control(			'text-heading01',			[				'label' => esc_html__( 'Heading' ,'eventes'),				'type' => Controls_Manager::TEXT,			]			);
        
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
					],										[						'name' => 'vat',						'label' => esc_html__( 'Vat Text' ,'eventes'),						'type' => Controls_Manager::TEXT,					],
					[
						'name' => 'Month-year',
						'label' => esc_html__( 'Progress No','eventes'),
						'type' => Controls_Manager::TEXT,
					],										[						'name' => 'progress-bar',						'label' => esc_html__( 'Progress Bar','eventes'),						'type' => Controls_Manager::TEXT,					],
					
					[
						'name' => 'text-again',
						'label' => esc_html__( 'Text' ,'eventes'),
						'type' => Controls_Manager::TEXTAREA,
					],										[						'name' => 'price-button',						'label' => esc_html__( 'Price Button Text' ,'eventes'),						'type' => Controls_Manager::TEXT,					],										[						'name' => 'price-button-link',						'label' => esc_html__( 'url' ,'eventes'),						'type' => Controls_Manager::URL,						'default' => [							'url' => '',							'is_external' => true,						],						'show_external' => false,						'separator' => 'after',					],
					
				]),
			]
		);
         

		$this->end_controls_section();
		$this->start_controls_section(			 'section_style_icon2',			 [				'label' => esc_html__( 'Text Color', 'eventes' ),				'tab'   => Controls_Manager::TAB_STYLE,			]	 		);							 $this->add_control(			'price_color',			[				'name' => 'price_color',				'label' => esc_html__( 'Text Color', 'eventes' ),				'type' => Controls_Manager::COLOR,				 'scheme' => [					'type' => Scheme_Color::get_type(),					'value' => Scheme_Color::COLOR_1,				],				'default' => '#7b76ab',				'selectors' => [					'{{WRAPPER}} .price-box p' => 'color: {{VALUE}};',				],			]		); 		$this->add_control(			'price_activ_color',			[				'name' => 'price_activ_color',				'label' => esc_html__( 'Activ Text Color', 'eventes' ),				'type' => Controls_Manager::COLOR,				 'scheme' => [					'type' => Scheme_Color::get_type(),					'value' => Scheme_Color::COLOR_1,				],				'default' => '#ffa21e',				'selectors' => [					'{{WRAPPER}} .price-box .title-box h3' => 'color: {{VALUE}};',				],			]		); 		$this->add_control(			'heading_content',			[				'label' => esc_html__( 'Button', 'eventes' ),				'type' => Controls_Manager::HEADING,				'separator' => 'before',			]		);		 $this->add_control(			'price_color_btn',			[				'name' => 'price_color_btn',				'label' => esc_html__( 'Button Color', 'eventes' ),				'type' => Controls_Manager::COLOR,				 'scheme' => [					'type' => Scheme_Color::get_type(),					'value' => Scheme_Color::COLOR_1,				],				'default' => '#ebebff',				'selectors' => [					'{{WRAPPER}} .price-box a' => 'background: {{VALUE}};',					'{{WRAPPER}} .price-box .btn-box a' => 'border-color: {{VALUE}};',				],			]		); 		$this->add_control(			'price_color_btn_text',			[				'name' => 'price_color_btn_text',				'label' => esc_html__( 'Button Color Text', 'eventes' ),				'type' => Controls_Manager::COLOR,				 'scheme' => [					'type' => Scheme_Color::get_type(),					'value' => Scheme_Color::COLOR_1,				],				'default' => '#7b76ab',				'selectors' => [					'{{WRAPPER}} .price-box a' => 'color: {{VALUE}};',				],		]		); 		$this->add_control(			'price_color_btn_hover',			[				'name' => 'price_color_btn_hover',				'label' => esc_html__( 'Button Color Hover', 'eventes' ),				'type' => Controls_Manager::COLOR,				 'scheme' => [					'type' => Scheme_Color::get_type(),					'value' => Scheme_Color::COLOR_1,				],				'default' => '#ffa21e',				'selectors' => [					'{{WRAPPER}} .price-box a:hover' => 'background: {{VALUE}};',					'{{WRAPPER}} .price-box .btn-box a:hover' => 'border-color: {{VALUE}};',				],		]		); 		$this->add_control(			'price_color_btn_text_hover',			[				'name' => 'price_color_btn_text_hover',				'label' => esc_html__( 'Button Color Text Hover', 'eventes' ),				'type' => Controls_Manager::COLOR,				 'scheme' => [					'type' => Scheme_Color::get_type(),					'value' => Scheme_Color::COLOR_1,				],				'default' => '#fff',				'selectors' => [					'{{WRAPPER}} .price-box a:hover' => 'color: {{VALUE}};',				],		]		); 		

	}

	protected function render( $instance = [] ) {

		eventes_el()->get_section('price', [
			'Repeators' => $this->get_settings('Repeator'),
			'paroller' => $this->get_settings('paroller-text'),			'sub-title' => $this->get_settings('sub-text'),			'text-heading1' => $this->get_settings('text-heading01'),
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_price_icon_widget() );