<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Widget_Title_Bar2 extends Widget_Base {

	public function get_name() {
		return 'Elementor_title-bar2-widget';
	}

	public function get_title() {
		return esc_html__( 'Zc > Title-Bar' ,'eventes' );
	}

	public function get_icon() {
		
		 return 'eicon-type-tool';
	 }

	protected function _register_controls() {
		$traits = new \eventes_Elementor_Traits($this);

		
		$this->start_controls_section(
			'section_tab', [
				'label' =>esc_html__( 'eventes Heading', 'eventes' ),
			]
		);

		$this->add_control(
			'style', [
				'type'		 => Controls_Manager::SELECT,
				'label'		 => esc_html__( 'Choose Style', 'eventes' ),
				'default'	 => 'style1',
				'label_block'	 => true,
				'options'	 => [
					'style1' =>esc_html__( 'Title Style', 'eventes' ),
					'style2' =>esc_html__( 'Title Style 2', 'eventes' ),
					'style3' =>esc_html__( 'Title Style 3', 'eventes' ),
					'style4' =>esc_html__( 'Title Style 4', 'eventes' ),
				],
			]
		);
		$this->add_control(
			'paroller_text', [
				'label'			 =>esc_html__( 'Paroller Title', 'eventes' ),
				'type'			 => Controls_Manager::TEXT,
				'label_block'	 => true,
				'placeholder'	 =>esc_html__( 'Featured Products', 'eventes' ),
				'default'		 =>esc_html__( 'Event', 'eventes' ),
			]
		);
		$this->add_control(
			'title_text', [
				'label'			 =>esc_html__( 'Heading Title', 'eventes' ),
				'type'			 => Controls_Manager::TEXT,
				'label_block'	 => true,
				'placeholder'	 =>esc_html__( 'Featured Products', 'eventes' ),
				'default'		 =>esc_html__( 'Featured', 'eventes' ),
				'condition'      => [
                  'style' =>['style1','style2','style3'],
                ],
			]
		);

		$this->add_control(
			'sub_title', [
				'label'			 =>esc_html__( 'Heading Sub Title', 'eventes' ),
				'type'			 => Controls_Manager::TEXTAREA,
				'label_block'	 => true,
				'placeholder'	 =>esc_html__( 'Evente Collections', 'eventes' ),
				'default'		 =>esc_html__( 'eventes', 'eventes' ),
				'condition'      => [
                  'style' =>['style2','style3','style4'],
                ],
			]
		);

        $this->add_control(
            'desc_title', [
                'label'			 =>esc_html__( 'Description', 'eventes' ),
                'type'			 => Controls_Manager::TEXTAREA,
                'label_block'	 => true,
                'placeholder'	 =>esc_html__( 'Evente Collections', 'eventes' ),
                'default'		 =>esc_html__( 'eventes', 'eventes' ),
				'condition'      => [
                  'style' =>['style2','style4'],
                ],
				
            ]
        );
     
       

		$this->add_responsive_control(
			'title_align', [
				'label'			 =>esc_html__( 'Alignment', 'eventes' ),
				'type'			 => Controls_Manager::CHOOSE,
				'options'		 => [

					'left'		 => [
						'title'	 =>esc_html__( 'Left', 'eventes' ),
						'icon'	 => 'fa fa-align-left',
					],
					'center'	 => [
						'title'	 =>esc_html__( 'Center', 'eventes' ),
						'icon'	 => 'fa fa-align-center',
					],
					'right'		 => [
						'title'	 =>esc_html__( 'Right', 'eventes' ),
						'icon'	 => 'fa fa-align-right',
					],
					'justify'	 => [
						'title'	 =>esc_html__( 'Justified', 'eventes' ),
						'icon'	 => 'fa fa-align-justify',
					],
				],
				'default'		 => '',
                'selectors' => [
                    '{{WRAPPER}} .title-content' => 'text-align: {{VALUE}};',
                ],
			]
		);
		$this->end_controls_section();

		//Title Style Section
		$this->start_controls_section(
			'section_title_style', [
				'label'	 => esc_html__( 'Title', 'eventes' ),
				'tab'	 => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'title_color', [
				'label'		 =>esc_html__( 'Title color', 'eventes' ),
				'type'		 => Controls_Manager::COLOR,
				'selectors'	 => [
					'{{WRAPPER}} .subtitle,{{WRAPPER}} .section-title' => 'color: {{VALUE}};'
					
				],
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(), [
			'name'		 => 'title_typography',
			'selector'	 => '{{WRAPPER}} .title',
			]
		);

		$this->end_controls_section();

		//Subtitle Style Section
		$this->start_controls_section(
			'section_subtitle_style', [
				'label'	 => esc_html__( 'Sub Title', 'eventes' ),
				'tab'	 => Controls_Manager::TAB_STYLE,
			]
		);
		
	
		$this->add_control(
			'subtitle_color', [
				'label'		 => esc_html__( 'Color', 'eventes' ),
				'type'		 => Controls_Manager::COLOR,
				'selectors'	 => [
					'{{WRAPPER}} .subtitle' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'subtitle_background_color', [
				'label'		 => esc_html__( 'Background', 'eventes' ),
				'type'		 => Controls_Manager::COLOR,
				'selectors'	 => [
					'{{WRAPPER}} .section-about .subtitle::before' => 'background: {{VALUE}};',
					'{{WRAPPER}} .section-about .subtitle::after' => 'border-color: {{VALUE}};',
				],
			]
		);
        
			$this->add_group_control(
			Group_Control_Typography::get_type(), [
			'name'		 => 'title_typography2',
			'selector'	 => '{{WRAPPER}} .subtitle',
			]
		);
		
        $this->end_controls_section();
		
		//Description Style Section
		$this->start_controls_section(
			'section_description_style', [
				'label'	 => esc_html__( 'Description Title', 'eventes' ),
				'tab'	 => Controls_Manager::TAB_STYLE,
			]
		);
		
	
		$this->add_control(
			'description_color', [
				'label'		 => esc_html__( 'color', 'eventes' ),
				'type'		 => Controls_Manager::COLOR,
				'selectors'	 => [
					'{{WRAPPER}} p' => 'color: {{VALUE}};',
				],
			]
		);
        
			$this->add_group_control(
			Group_Control_Typography::get_type(), [
			'name'		 => 'title_typography3',
			'selector'	 => '{{WRAPPER}} p',
			]
		);
		
        $this->end_controls_section();
     
        
	}
    
    

	protected function render( $instance = [] ) {
		$settings = $this->get_settings();
		$style = $settings[ 'style' ];
		$title = $settings[ 'title_text' ];
		$sub_title = $settings[ 'sub_title' ];
		$desc_title = $settings[ 'desc_title' ];
		$paroller_text = $settings[ 'paroller_text' ];
	
		switch ( $style ) {
			case 'style1':
				require get_template_directory() . '/inc/sections/heading/style1.php';
				break;

            case 'style2':
                require get_template_directory() . '/inc/sections/heading/style2.php';
                break;
				
				case 'style3':
                require get_template_directory() . '/inc/sections/heading/style3.php';
                break;
				case 'style4':
                require get_template_directory() . '/inc/sections/heading/style4.php';
                break;
		}
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_Widget_Title_Bar2() );

