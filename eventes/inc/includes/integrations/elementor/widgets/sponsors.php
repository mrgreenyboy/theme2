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
			$this->add_control(			'paroller-text',			[				'label' => esc_html__( 'Paroller Text' ,'eventes'),				'type' => Controls_Manager::TEXT,			]			);				$this->add_control(			'sub-text',			[				'label' => esc_html__( 'Sub Title' ,'eventes'),				'type' => Controls_Manager::TEXT,			]			);						$this->add_control(			'text-heading01',			[				'label' => esc_html__( 'Heading' ,'eventes'),				'type' => Controls_Manager::TEXT,			]			);						$this->add_control(			'video-image',			[				'label' => esc_html__( 'Video Image' ,'eventes'),				'type' => Controls_Manager::MEDIA,			]			);						$this->add_control(			'text-btn-link',			[				'label' => esc_html__( 'Video Link' ,'eventes'),				'type' => Controls_Manager::TEXT,			]
	);	$this->add_control(			'text-video',			[				'label' => esc_html__( 'Video Text' ,'eventes'),				'type' => Controls_Manager::TEXTAREA,			]	);		$this->add_control(			'btn-by',			[				'label' => esc_html__( 'Button Text' ,'eventes'),				'type' => Controls_Manager::TEXT,			]			);
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
																		[						'name' => 'sponsors-button-link',						'label' => esc_html__( 'url' ,'eventes'),						'type' => Controls_Manager::URL,						'default' => [							'url' => '',							'is_external' => true,						],						'show_external' => false,						'separator' => 'after',					],
					
				]),
			]
		);
         

		$this->end_controls_section();
		$this->start_controls_section(			 'section_style_icon2',			 [				'label' => esc_html__( 'Text Color', 'eventes' ),				'tab'   => Controls_Manager::TAB_STYLE,			]	 		);							 $this->add_control(			'sponsors_color',			[				'name' => 'sponsors_color',				'label' => esc_html__( 'Text Color', 'eventes' ),				'type' => Controls_Manager::COLOR,				 'scheme' => [					'type' => Scheme_Color::get_type(),					'value' => Scheme_Color::COLOR_1,				],				'default' => '#7b76ab',				'selectors' => [					'{{WRAPPER}} .sponsors-box p' => 'color: {{VALUE}};',				],			]		); 		$this->add_control(			'sponsors_activ_color',			[				'name' => 'sponsors_activ_color',				'label' => esc_html__( 'Activ Text Color', 'eventes' ),				'type' => Controls_Manager::COLOR,				 'scheme' => [					'type' => Scheme_Color::get_type(),					'value' => Scheme_Color::COLOR_1,				],				'default' => '#ffa21e',				'selectors' => [					'{{WRAPPER}} .sponsors-box .title-box h3' => 'color: {{VALUE}};',				],			]		); 		$this->add_control(			'heading_content',			[				'label' => esc_html__( 'Button', 'eventes' ),				'type' => Controls_Manager::HEADING,				'separator' => 'before',			]		);		 $this->add_control(			'sponsors_color_btn',			[				'name' => 'sponsors_color_btn',				'label' => esc_html__( 'Button Color', 'eventes' ),				'type' => Controls_Manager::COLOR,				 'scheme' => [					'type' => Scheme_Color::get_type(),					'value' => Scheme_Color::COLOR_1,				],				'default' => '#ebebff',				'selectors' => [					'{{WRAPPER}} .sponsors-box a' => 'background: {{VALUE}};',					'{{WRAPPER}} .sponsors-box .btn-box a' => 'border-color: {{VALUE}};',				],			]		); 		$this->add_control(			'sponsors_color_btn_text',			[				'name' => 'sponsors_color_btn_text',				'label' => esc_html__( 'Button Color Text', 'eventes' ),				'type' => Controls_Manager::COLOR,				 'scheme' => [					'type' => Scheme_Color::get_type(),					'value' => Scheme_Color::COLOR_1,				],				'default' => '#7b76ab',				'selectors' => [					'{{WRAPPER}} .sponsors-box a' => 'color: {{VALUE}};',				],		]		); 		$this->add_control(			'sponsors_color_btn_hover',			[				'name' => 'sponsors_color_btn_hover',				'label' => esc_html__( 'Button Color Hover', 'eventes' ),				'type' => Controls_Manager::COLOR,				 'scheme' => [					'type' => Scheme_Color::get_type(),					'value' => Scheme_Color::COLOR_1,				],				'default' => '#ffa21e',				'selectors' => [					'{{WRAPPER}} .sponsors-box a:hover' => 'background: {{VALUE}};',					'{{WRAPPER}} .sponsors-box .btn-box a:hover' => 'border-color: {{VALUE}};',				],		]		); 		$this->add_control(			'sponsors_color_btn_text_hover',			[				'name' => 'sponsors_color_btn_text_hover',				'label' => esc_html__( 'Button Color Text Hover', 'eventes' ),				'type' => Controls_Manager::COLOR,				 'scheme' => [					'type' => Scheme_Color::get_type(),					'value' => Scheme_Color::COLOR_1,				],				'default' => '#fff',				'selectors' => [					'{{WRAPPER}} .sponsors-box a:hover' => 'color: {{VALUE}};',				],		]		); 		

	}

	protected function render( $instance = [] ) {

		eventes_el()->get_section('sponsors', [
			'Repeators' => $this->get_settings('Repeator'),
			'paroller' => $this->get_settings('paroller-text'),			'sub-title' => $this->get_settings('sub-text'),			'text-heading1' => $this->get_settings('text-heading01'),			'text-btn-link1' => $this->get_settings('text-btn-link'),			'video-image1' => $this->get_settings('video-image'),			'text-video1' => $this->get_settings('text-video'),			'btn-by1' => $this->get_settings('btn-by'),
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_sponsors_icon_widget() );