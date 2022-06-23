<?php
/**
 * Template part for the Footer Separators.
 *
 * @package eventes
 */
 ?>

<div class="col-xl-3 col-lg-3 col-sm-6">
    <ul class="footer-widget weight">
	<?php
		if ( is_active_sidebar( 'footer1' ) ) {
			dynamic_sidebar( 'footer1' );
		}
	?>

    </ul>
</div>


<div class="col-xl-2 col-lg-3 col-sm-6">
    <ul class="footer-widget f-menu-content">
       <?php
		if ( is_active_sidebar( 'footer2' ) ) {
			dynamic_sidebar( 'footer2' );
		}
	?>
    </ul>
</div>


<div class="col-xl-2 col-lg-3 col-sm-6">
    <ul class="footer-widget weight">
       <?php
		if ( is_active_sidebar( 'footer3' ) ) {
			dynamic_sidebar( 'footer3' );
		}
	?>
    </ul>
</div>


<div class="col-xl-3 col-lg-3 col-sm-6">
    <ul class="footer-widget weight">
       <?php
		if ( is_active_sidebar( 'footer4' ) ) {
			dynamic_sidebar( 'footer4' );
		}
	?>
    </ul>
</div>