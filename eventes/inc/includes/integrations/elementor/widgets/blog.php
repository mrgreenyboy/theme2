<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Widget_Blog extends Widget_Base {

	public function get_name() {
		return 'Elementor-Widget-Blog';
	}

	public function get_title() {
		return esc_html__( 'Zc > Blog Feed', 'eventes' );
	}

	public function get_icon() {
		return 'eicon-posts-masonry';
	}

	protected function _register_controls() {
		$traits = new \eventes_Elementor_Traits($this);

		$this->start_controls_section(
			'blog_controller',
			['label' => esc_html__( 'Blog Feed', 'eventes' ),]
		);
		
		$this->add_control(

			'paroller-text',

			[

				'label' => esc_html__( 'Paroller Text' ,'eventes'),

				'type' => Controls_Manager::TEXT,

			]

			);

		$this->add_control(

			'sub-text',

			[

				'label' => esc_html__( 'Sub Title' ,'eventes'),

				'type' => Controls_Manager::TEXT,

			]

			);
			
			$this->add_control(

			'text-heading01',

			[

				'label' => esc_html__( 'Heading' ,'eventes'),

				'type' => Controls_Manager::TEXT,

			]

			);
			

		$this->add_control(
			'posts_per_page',
			[
				'label'   => esc_html__( 'Number of items to show', 'eventes' ),
				'type'    => Controls_Manager::NUMBER,
				'default' => 6,
			]
		);

		$this->add_control(
			'select_categories',
			[
				'label' => esc_html__( 'Filter by Categories', 'eventes' ),
				'type' => Controls_Manager::SELECT2,
				'options' => eventes_el()->get_terms_dropdown_array([
					'taxonomy' => 'category',
					'hide_empty' => false,
					]),
				'multiple' => true,
			]
		);

		$this->add_control(
			'select_posts',
			[
				'label' => esc_html__( 'Filter by Post.', 'eventes' ),
				'type' => Controls_Manager::SELECT2,
				'options' => eventes_el()->get_posts_dropdown_array([
					'post_type' => 'post',
					'posts_per_page' => -1,
					]),
				'multiple' => true,
			]
		);

		$this->end_controls_section();
	}

	protected function render( $instance = [] ) {
		eventes_el()->get_section('blog', [
			'sub-title' => $this->get_settings('sub-text'),
			'text-heading1' => $this->get_settings('text-heading01'),
			'paroller' => $this->get_settings('paroller-text'),
			'posts_per_page' => $this->get_settings('posts_per_page'),
			'category' => $this->get_settings('select_categories'),
			'include' => $this->get_settings('select_posts'),
			'paged' => ( get_query_var('paged') ) ? get_query_var('paged') : 1,
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_Widget_Blog() );
