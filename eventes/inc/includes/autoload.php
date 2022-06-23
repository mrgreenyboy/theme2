<?php

$classes = [
	'helpers.php',	
	'integrations/elementor/elementor.php',
];

function eventes_myplugin_plugin_path() {

  // start gets the absolute path to this plugin directory

  return untrailingslashit( plugin_dir_path( __FILE__ ) );
}

foreach ($classes as $classPath) {
	require_once trailingslashit( wp_autoload ) . 'inc/includes/' . $classPath;
}