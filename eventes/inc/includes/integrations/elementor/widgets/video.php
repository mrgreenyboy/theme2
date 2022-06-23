<?php

namespace Elementor;



if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly



class Elementor_Widget_video extends Widget_Base {



	public function get_name() {

		return 'Elementor_video-widget';

	}



	public function get_title() {

		return esc_html__( 'Zc > Video','eventes');

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

			'text-heading02',

			[

				'label' => esc_html__( 'Heading' ,'eventes'),

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

			'background-media',

			[

				'label' => esc_html__( 'Background Images' ,'eventes'),

				'type' => Controls_Manager::MEDIA,

			]

			);


		$this->end_controls_section();

	}



	protected function render( $instance = [] ) {





		eventes_el()->get_section('video', [

			'text-control1' => $this->get_settings('text-control'),
			'text-control2' => $this->get_settings('text-heading02'),
			'text-btn-link1' => $this->get_settings('text-btn-link'),
			'background-media1' => $this->get_settings('background-media'),

			]);

	}



	protected function content_template() {}



	public function render_plain_content() {}



}



Plugin::instance()->widgets_manager->register_widget_type( new Elementor_Widget_video() );

