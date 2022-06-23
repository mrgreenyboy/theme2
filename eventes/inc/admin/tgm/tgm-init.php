<?php

/**
 * TGM Init Class
 */

include_once get_template_directory() . '/inc/admin/tgm/class-tgm-plugin-activation.php';

function eventes_register_required_plugins() {

	$plugins = array(
	    array(
				'name' 	   => esc_html__('Redux Framework','eventes'),
				'slug' 	   => 'redux-framework',
				'required' => true,
		),
		array(
				'name' 	   => esc_html__('Anywhere Elementor','eventes'),
				'slug' 	   => 'anywhere-elementor',
				'required' => true,
		),
		array(
			'name' 	   => esc_html__('woocommerce','eventes'),
			'slug' 	   => 'woocommerce',
			'required' => true,
	),
		array(
				'name' 	   => esc_html__('Meta Box','eventes'),
				'slug' 	   => 'meta-box',
				'required' => true,
		),
		array(
			'name' 		  => esc_html__('One Click Demo Import','eventes'),
			'slug' 		  => 'one-click-demo-import',
			'required' 	=> true,
		),
		array(
			'name' 		  => esc_html__('Contact Form 7','eventes'),
			'slug' 		  => 'contact-form-7',
			'required' 	=> true,
		),
		array(
			'name' 		  => esc_html__('MailChimp for WordPress','eventes'),
			'slug' 		  => 'mailchimp-for-wp',
			'required' 	=> true,
		),
		array(
			'name'      => esc_html__('Recent Posts Widget With Thumbnails','eventes'),
			'slug'      => 'recent-posts-widget-with-thumbnails',
			'required'  => true,
		),
		array(
		'name'      => esc_html__('Elementor Page Builder','eventes'),
		'slug'      => 'elementor',
		'required'  => true,
		),

	);

	$config = array(
		'id'           => 'eventes',                 // Unique ID for hashing notices for multiple instances of eventes.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'eventes-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                    // Automatically activate plugins after installation or not.
		'message'      => '',				   	          // Automatically activate plugins after installation or not
	);

	tgmpa( $plugins, $config );

}
add_action( 'eventes_register', 'eventes_register_required_plugins' );
