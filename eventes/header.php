<?php
/**
 * The header for our theme
 *
 *
 * @package eventes
 */

$eventes_data =get_option('eventes_data');
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
 
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="preloader">
        <div id="loading"> </div>
    </div>

    <header id="home" class="header-area">
        <?php
	
		get_template_part('template-parts/header-layout-1');

	?>
    </header>
    <div id="content" class="site-content">
