<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Elementor_Widget_event extends Widget_Base {

	public function get_name() {
		return 'Elementor-Widget-event';
	}

	public function get_title() {
		return esc_html__( 'Zc > event Feed', 'eventes' );
	}

	public function get_icon() {
		return 'eicon-posts-masonry';
	}

	protected function _register_controls() {
		$traits = new \eventes_Elementor_Traits($this);

		$this->start_controls_section(
			'event_controller',
			['label' => esc_html__( 'event Feed', 'eventes' ),]
		);

		$this->add_control(
			'the_template',
			[
				'label' => esc_html__( 'Template', 'eventes' ),
				'type' => Controls_Manager::SELECT2,
				'default' => 'col3',
				'options' => [
					'col2' => esc_html__( 'Two Columns', 'eventes' ),
					'col3' => esc_html__( 'Three Columns', 'eventes' ),
				],
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
		eventes_el()->get_section('event', [
			'template' => $this->get_settings('the_template'),
			'posts_per_page' => $this->get_settings('posts_per_page'),
			'category' => $this->get_settings('select_categories'),
			'include' => $this->get_settings('select_posts'),
			'paged' => ( get_query_var('paged') ) ? get_query_var('paged') : 1,
			]);
	}

	protected function content_template() {}

	public function render_plain_content() {}

}

Plugin::instance()->widgets_manager->register_widget_type( new Elementor_Widget_event() );
