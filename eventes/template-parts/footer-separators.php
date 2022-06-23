<?php
/**
 * Template part for the Footer Separators.
 *
 * @package eventes
 */
 ?>
<?php
	$eventes_data                 = get_option('eventes_data');
	$footer_display              = 'yes';
	$footer_widgets_display_page = 'default';
	$footer_widgets_display      = $eventes_data['eventes__opt-footer-widgets'];
?>


<?php if ( ( $footer_widgets_display == 1 && $footer_widgets_display_page != 'no' ) ||  $footer_widgets_display_page == 'yes' ) :

					$footer_widgets_layout = $eventes_data['eventes__opt-footer-widgets-layout'];
					$footer_widget_1 = '';
					$footer_widget_2 = '';
					$footer_widget_3 = '';
					$footer_widget_4 = '';

					switch ($footer_widgets_layout) {
						case '1':
							$footer_widget_1 = 'col-xl-3 col-lg-3 col-sm-6 mb-30 redux-footer';
							$footer_widget_2 = 'col-xl-2 col-lg-3 col-sm-6 mb-30 redux-footer';
							$footer_widget_3 = 'col-xl-2 col-lg-3 col-sm-6 mb-30 redux-footer';
							$footer_widget_4 = 'col-xl-3 col-lg-3 col-sm-6 mb-30 redux-footer';
							break;
						case '2':
							$footer_widget_1 = 'col-sm-6 col-lg-2 mb-30 redux-footer';
							$footer_widget_2 = 'col-sm-6 col-lg-2 mb-30 redux-footer';
							$footer_widget_3 = 'col-sm-6 col-lg-4 mb-30 redux-footer';
							$footer_widget_4 = 'col-sm-6 col-lg-4 mb-30 redux-footer';
							break;
						case '3':
							$footer_widget_1 = 'col-sm-3 col-lg-3 mb-30 redux-footer';
							$footer_widget_2 = 'col-sm-9 col-lg-6 mb-30 redux-footer';
							$footer_widget_3 = 'col-sm-12 col-lg-3 mb-30 redux-footer';
							break;
						case '4':
							$footer_widget_1 = 'col-sm-4 col-lg-3 mb-30 redux-footer';
							$footer_widget_2 = 'col-sm-4 col-lg-3 mb-30 redux-footer';
							$footer_widget_3 = 'col-sm-4 col-lg-6 mb-30 redux-footer';
							break;
						case '5':
							$footer_widget_1 = 'col-sm-4 col-lg-4 mb-30 redux-footer';
							$footer_widget_2 = 'col-sm-4 col-lg-4 mb-30 redux-footer';
							$footer_widget_3 = 'col-sm-4 col-lg-4 mb-30 redux-footer';
							break;
						case '6':
							$footer_widget_1 = 'col-sm-4 col-lg-4 mb-30 redux-footer';
							$footer_widget_2 = 'col-sm-8 col-lg-8 mb-30 redux-footer';
							break;
						case '7':
							$footer_widget_1 = 'col-sm-8 col-lg-8 mb-30 redux-footer';
							$footer_widget_2 = 'col-sm-4 col-lg-4 mb-30 redux-footer';
							break;
					} ?>


<div class="<?php echo esc_attr( $footer_widget_1 ); ?> ">
    <ul class="footer-widget weight">
	 <?php
		if ( is_active_sidebar( 'footer1' ) ) {
			dynamic_sidebar( 'footer1' );
		}
	?>
    </ul>
    <div class="footer-social">

        <?php
				$social_media_toggle = $eventes_data['eventes__opt-social-in-footer'];
				$social_media        = $eventes_data['eventes__opt-social-media'];
				if ($social_media_toggle == 1):
					
					foreach (array_filter($social_media) as $key=>$value) {

					switch($key) {

						case esc_html__( 'Facebook URL', 'eventes') :
							echo '<span>Follow Us</span> <a href="' . esc_url( $social_media[ esc_html__( 'Facebook URL', 'eventes') ] ) . '" title="Facebook"><i class="fab fa-facebook"></i></a>';
						break;

						case esc_html__( 'Twitter URL', 'eventes'):
							echo '<a href="' . esc_url( $social_media[ esc_html__( 'Twitter URL', 'eventes') ] ) . '" title="Twitter"><i class="fab fa-twitter"></i></a>';
						break;

						case esc_html__( 'LinkedIn URL', 'eventes'):
							echo '<a href="' . esc_url( $social_media[ esc_html__( 'LinkedIn URL', 'eventes') ] ) . '" title="LinkedIn"><i class="fab fa-linkedin"></i></a>';
						break;

						case esc_html__( 'Google+ URL', 'eventes'):
							echo '<a href="' . esc_url( $social_media[ esc_html__( 'Google+ URL', 'eventes') ] ) . '" title="Google+"><i class="fab fa-google-plus"></i></a>';
						break;

						case esc_html__( 'Instagram URL', 'eventes'):
							echo '<a href="' . esc_url( $social_media[ esc_html__( 'Instagram URL', 'eventes') ] ) . '" title="Instagram"><i class="fab fa-instagram"></i></a>';
						break;

						case esc_html__( 'Github URL', 'eventes'):
							echo '<a href="' . esc_url( $social_media[ esc_html__( 'Github URL', 'eventes') ] ) . '" title="Github"><i class="fab fa-github"></i></a>';
						break;

						case esc_html__( 'VK URL', 'eventes'):
							echo '<a href="' . esc_url( $social_media[ esc_html__( 'VK URL', 'eventes') ] ) . '" title="VKontakte"><i class="fab fa-vk"></i></a>';
						break;

						case esc_html__( 'YouTube URL', 'eventes'):
							echo '<a href="' . esc_url( $social_media[ esc_html__( 'YouTube URL', 'eventes') ] ) . '" title="YouTube"><i class="fab fa-youtube"></i></a>';
						break;

						case esc_html__( 'Pinterest URL', 'eventes'):
							echo '<a href="' . esc_url( $social_media[ esc_html__( 'Pinterest URL', 'eventes') ] ) . '" title="Pinterest"><i class="fab fa-pinterest"></i></a>';
						break;

						case esc_html__( 'Tumblr URL', 'eventes'):
							echo '<a href="' . esc_url( $social_media[ esc_html__( 'Tumblr URL', 'eventes') ] ) . '" title="Tumblr"><i class="fab fa-tumblr"></i></a>';
						break;

						case esc_html__( 'Dribbble URL', 'eventes'):
							echo '<a href="' . esc_url( $social_media[ esc_html__( 'Dribbble URL', 'eventes') ] ) . '" title="Dribbble"><i class="fab fa-dribbble"></i></a>';
						break;

						case esc_html__( 'Vimeo URL', 'eventes'):
							echo '<a href="' . esc_url( $social_media[ esc_html__( 'Vimeo URL', 'eventes') ] ) . '" title="Vimeo"><i class="fab fa-vimeo"></i></a>';
						break;

						case esc_html__( 'Flickr URL', 'eventes'):
							echo '<a href="' . esc_url( $social_media[ esc_html__( 'Flickr URL', 'eventes') ] ) . '" title="Flickr"><i class="fab fa-flickr"></i></a>';
						break;

						case esc_html__( 'Yelp URL', 'eventes'):
							echo '<a href="' . esc_url( $social_media[ esc_html__( 'Yelp URL', 'eventes') ] ) . '" title="Yelp"><i class="fab fa-yelp"></i></a>';
						break;
			    }
				}
				echo '';
				endif;	?>
        <!-- / social media icon redux -->
    </div>
</div>


<div class="<?php echo esc_attr( $footer_widget_2 ); ?>">
    <ul class="footer-widget f-menu-content">
         <?php
		if ( is_active_sidebar( 'footer2' ) ) {
			dynamic_sidebar( 'footer2' );
		}
	?>
    </ul>
</div>

<?php if( $footer_widgets_layout == 1 || $footer_widgets_layout == 2 || $footer_widgets_layout == 3  || $footer_widgets_layout == 4  || $footer_widgets_layout == 5 ): ?>
<div class="<?php echo esc_attr( $footer_widget_3 ); ?>">
    <ul class="footer-widget weight">
         <?php
		if ( is_active_sidebar( 'footer3' ) ) {
			dynamic_sidebar( 'footer3' );
		}
	?>
    </ul>
</div>
<?php endif; ?>

<?php if( $footer_widgets_layout == 1 || $footer_widgets_layout == 2 ): ?>
<div class="<?php echo esc_attr( $footer_widget_4 ); ?>">
    <ul class="footer-widget weight">
         <?php
		if ( is_active_sidebar( 'footer4' ) ) {
			dynamic_sidebar( 'footer4' );
		}
	?>
    </ul>
</div>
<?php endif; ?>


<?php endif; ?>