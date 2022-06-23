<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_progress_bar extends Widget_Base {

	public function get_name() {
		return 'Elementor-progress-bar-widget';
	}

	public function get_title() {
		return esc_html__( 'Zc >  Progress Bar' ,'eventes');
	}

	public function get_icon() {
		
		return 'eicon-skill-bar';
	}

	protected function _register_controls() {
		$traits = new \eventes_Elementor_Traits($this);
		
		$this->start_controls_section(
			'progress-controller',
			['label' => esc_html__( 'Progress-Bar Section','eventes'),]
		);		$this->add_control(			'top-heading',			[				'label' => esc_html__( 'Top Heading' ,'eventes'),				'type' => Controls_Manager::TEXT,			]			);		$this->add_control(			'text-heading',			[				'label' => esc_html__( 'Heading' ,'eventes'),				'type' => Controls_Manager::TEXT,			]			);			$this->add_control(			'sub-heading',			[				'label' => esc_html__( 'Sub Heading' ,'eventes'),				'type' => Controls_Manager::TEXT,			]			);						$this->add_control(			'text-control',			[				'label' => esc_html__( 'Text' ,'eventes'),				'type' => Controls_Manager::TEXTAREA,			]			);
						$this->add_control(			'text-count1',			[				'label' => esc_html__( 'Counter 1' ,'eventes'),				'type' => Controls_Manager::TEXTAREA,			]			);			$this->add_control(			'text-count2',			[				'label' => esc_html__( 'Counter 2' ,'eventes'),				'type' => Controls_Manager::TEXTAREA,			]			);			$this->add_control(			'text-count3',			[				'label' => esc_html__( 'Counter 3' ,'eventes'),				'type' => Controls_Manager::TEXTAREA,			]			);			$this->add_control(			'background-media',			[				'label' => esc_html__( 'Background Images' ,'eventes'),				'type' => Controls_Manager::MEDIA,			]			);
         
		$this->end_controls_section();

	}

	protected function render( $instance = [] ) {

		eventes_el()->get_section('progress-bar', [
			'top-heading' => $this->get_settings('top-heading'),			'text-heading' => $this->get_settings('text-heading'),			'sub-heading' => $this->get_settings('sub-heading'),			'text-control' => $this->get_settings('text-control'),			'text-count1' => $this->get_settings('text-count1'),			'text-count2' => $this->get_settings('text-count2'),			'text-count3' => $this->get_settings('text-count3'),			'background-media1' => $this->get_settings('background-media'),
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_progress_bar() );