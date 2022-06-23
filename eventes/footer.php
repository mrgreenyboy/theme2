<?php
/**
 * The template for displaying the footer
 *
 * @package eventes
 */

$eventes_data =get_option('eventes_data');
?>
</div><!-- #content -->


 <!-- footer -->
        <footer class="footer-bg footer-p" style="background-size: cover;">
          
            <div class="footer-top">
                <div class="container">
                    <div class="row justify-content-between">
					<?php $footer_text = $eventes_data['eventes__opt-footer-text'];?>
					<?php if ( $footer_text == 1) : ?>
                        <div class="col-xl-12 col-lg-12 col-sm-12 text-center">
                            <div class="footer-widget pt-120 mb-30">
                                <div class="logo mb-35">
									<img src="<?php echo esc_url( $eventes_data['eventes__footer-logo']['url'] ); ?>" alt="<?php echo esc_attr( get_bloginfo('name') ); ?>" title="<?php echo esc_attr( get_bloginfo('description') ); ?>" />                                  
                                </div>
                                <div class="footer-text mb-20">
									<p><?php echo wp_kses_post( $eventes_data['eventes__footer-content'] ); ?></p>
                                </div>
                                <div class="footer-social">  
								<!-- social media icon redux -->
									
								<?php
										$social_media_toggle = $eventes_data['eventes__opt-social-in-footer'];
										$social_media        = $eventes_data['eventes__opt-social-media'];
										if ($social_media_toggle == 1):
											
											foreach (array_filter($social_media) as $key=>$value) {

											switch($key) {

												case esc_html__( 'Facebook URL', 'eventes') :
													echo '<a href="' . esc_url( $social_media[ esc_html__( 'Facebook URL', 'eventes') ] ) . '" title="Facebook"><i class="fab fa-facebook"></i></a>';
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
                        </div>
                          <?php endif; ?>
                    </div>
                </div>
            </div>
			
			 <?php get_template_part('template-parts/footer-bar'); ?>
            
        </footer>
        <!-- footer-end -->
		

<?php wp_footer(); ?>
</body>

</html>
