<?php

if ( ! defined( 'ABSPATH' ) ) exit;

require_once wp_elementor . '/elementor/traits.php';

class eventes_Elementor_Integration {

	public $widgets;

	public function __construct()
	{
		$this->widgets = [
			'header',
			'event-tabs',
			'event-tab-content',		
			'header-slider',
			 'about',
			 'about2',
			 'features-box',
			 'title-bar',
			 'video',
			 'how-work',
			 'our-team',
			 'blog',
			 'price',
			 'progress-bar',
			  'sponsors',
			  'contact-sections',

		];
		add_action( 'elementor/init', array( $this, 'widgets_registered' ) );
	}
	public function widgets_registered()
	{
		if ( ! defined( 'ELEMENTOR_PATH' ) || ! class_exists( 'Elementor\Widget_Base' ) || ! class_exists( 'Elementor\Plugin' ) ) {
			return false;
		}

		$elementor = Elementor\Plugin::instance();


		foreach ($this->widgets as $widget) {
			$template_file = wp_elementor . "/elementor/widgets/{$widget}.php";
			if ( file_exists( $template_file ) ) {
				require_once $template_file;
			}
		}
	}
}
new eventes_Elementor_Integration;
