<?php
/*
 * Helper methods.
 */
class eventes {
	protected static $instance = null;
	public static function get_instance()	{
		if (!isset(self::$instance)) {
			self::$instance = new self;
		}
		return self::$instance;	}
    /*
     * Get a global variable.
     */
	public function get_global($key)
	{
		return $GLOBALS[$key];
	}
	public function merge_options($defaults, $options)
	{
		return array_replace_recursive($defaults, $options);
	}	public function get_partial($template, $data = [])	{		if (!locate_template("template-parts/{$template}.php")) return;		require locate_template("template-parts/{$template}.php");	}
	public function get_section($template, $data = [])
	{
		if (!locate_template("inc/sections/{$template}.php")) return;
		require locate_template("inc/sections/{$template}.php");
	}
	public function get_terms_dropdown_array($args = [], $key = 'term_id', $value = 'name')
	{
		$options = [];
		$terms = get_terms($args);
		if (is_wp_error($terms)) {			return [];
		}
		foreach ((array) $terms as $term) {
			$options[$term->{$key}] = $term->{$value};
		}		return $options;
	}
	public function get_posts_dropdown_array($args = [], $key = 'ID', $value = 'post_title')
	{
		$options = [];
		$posts = get_posts($args);
		foreach ((array) $posts as $term) {
			$options[$term->{$key}] = $term->{$value};
		}
		return $options;
	}
}
function eventes_el( $className = null ) {
	if ( $className && class_exists( "eventes{$className}" ) ) {
		if ( ( $cls = "eventes{$className}" ) && method_exists( $cls, 'instance' ) ) {
			return $cls::instance();
		}	}
	return eventes::get_instance();
}
