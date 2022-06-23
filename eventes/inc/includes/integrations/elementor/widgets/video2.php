<?php

namespace Elementor;



if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly



class Elementor_Widget_video2 extends Widget_Base {



	public function get_name() {

		return 'Elementor_video2-widget';

	}



	public function get_title() {

		return esc_html__( 'Zc > Video 02','eventes');

	}



	public function get_icon() {

		

		 return 'eicon-image-box';

	 }



	protected function _register_controls() {

		$traits = new \eventes_Elementor_Traits($this);



		$this->start_controls_section(

			'the_header_controls',

			['label' => esc_html__( 'Header Section','eventes'),]

		);

		$this->add_control(

			'text-sub-title',

			[
				'label' => esc_html__( 'Sub Title' ,'eventes'),
				'type' => Controls_Manager::TEXT,
			]
			);    
		$this->add_control(

			'text-title',

			[
				'label' => esc_html__( 'Heading Text' ,'eventes'),
				'type' => Controls_Manager::TEXT,
			]
			);  			

		
		
		
			



		$this->add_control(

			'text-control',

			[

				'label' => esc_html__( 'Text' ,'eventes'),

				'type' => Controls_Manager::WYSIWYG,

			]

			);
			
			$this->add_control(

			'text-btn-link',

			[

				'label' => esc_html__( 'Video Link' ,'eventes'),

				'type' => Controls_Manager::TEXT,

			]

			);
			
			$this->add_control(

			'text-btn-link2',

			[

				'label' => esc_html__( 'Button Text' ,'eventes'),

				'type' => Controls_Manager::TEXT,

			]

			);
			
			$this->add_control(

			'text-btn-link3',

			[

				'label' => esc_html__( 'Button Link' ,'eventes'),

				'type' => Controls_Manager::URL,

			]

			);
			
			$this->add_control(

			'background-media',

			[

				'label' => esc_html__( 'Images 01' ,'eventes'),

				'type' => Controls_Manager::MEDIA,

			]

			);
			
			$this->add_control(

			'Images-media2',

			[

				'label' => esc_html__( 'Images 02' ,'eventes'),

				'type' => Controls_Manager::MEDIA,

			]

			);


		$this->end_controls_section();

	}



	protected function render( $instance = [] ) {





		eventes_el()->get_section('video2', [

			'text-control1' => $this->get_settings('text-control'),
				'text-btn-link1' => $this->get_settings('text-btn-link'),
			'background-media1' => $this->get_settings('background-media'),
			'background-media2' => $this->get_settings('Images-media2'),
			'btn-link2' => $this->get_settings('text-btn-link2'),
			'btn-link3' => $this->get_settings('text-btn-link3'),
			'text-sub-title2' => $this->get_settings('text-sub-title'),
			'text-title2' => $this->get_settings('text-title'),

			]);

	}



	protected function content_template() {}



	public function render_plain_content() {}



}



Plugin::instance()->widgets_manager->register_widget_type( new Elementor_Widget_video2() );

