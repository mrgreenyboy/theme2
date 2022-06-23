
 <!-- slider-area -->
             <section id="parallax" class="slider-area slider-bg second-slider-bg d-flex align-items-center justify-content-center fix" style="background-image:url(<?php echo esc_url( $header_backgrund_images['url'] ) ?>)">
			 <div class="before" style="background-image:url(<?php echo esc_url( $header_images_ovlerly['url'] ) ?>)"></div>
                <div class="slider-shape ss-one layer" data-depth="0.10"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape01.png" alt="shape"></div>
                <div class="slider-shape ss-two layer" data-depth="0.30"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape02.png" alt="shape"></div>
                <div class="slider-shape ss-three layer" data-depth="0.40"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape03.png" alt="shape"></div>
                <div class="slider-shape ss-four layer" data-depth="0.60"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape04.png" alt="shape"></div>
                <div class="slider-shape ss-five layer" data-depth="0.20"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape05.png" alt="shape"></div>
                <div class="slider-shape ss-six layer" data-depth="0.15"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape06.png" alt="shape"></div>
     			 <div class="slider-shape ss-eight layer" data-depth="0.50"><img src="<?php echo esc_url( $header_images['url'] ) ?>" alt="<?php echo esc_url( $header_images['url'] ) ?>"></div>
                <div class="slider-active">
                    <div class="single-slider">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="slider-content second-slider-content">
									<?php echo html_entity_decode( $text_list ); ?>
                                        <h2 data-animation="fadeIn animated" data-delay=".4s"><?php echo html_entity_decode( $title ); ?></h2> 
										<div countdown class="conterdown wow fadeIn animated" data-animation="fadeIn animated" data-delay=".2s" data-date="<?php echo esc_html($count); ?>">
										 <div class="timer">										 
											<div class="timer-outer bdr1">												
											   <span class="days" data-days><?php esc_html_e( '0', 'eventes' ); ?></span> 
											   <div class="smalltext"><?php esc_html_e( 'Days', 'eventes' ); ?> </div>
											   <div class="value-bar"></div>
											</div>
											<div class="timer-outer bdr2">
											   <span class="hours" data-hours><?php esc_html_e( '0', 'eventes' ); ?></span> 
											   <div class="smalltext"><?php esc_html_e( 'Hours', 'eventes' ); ?> </div>
											</div>
											<div class="timer-outer bdr3">
											   <span class="minutes" data-minutes><?php esc_html_e( '0', 'eventes' ); ?></span> 
											   <div class="smalltext"><?php esc_html_e( 'Minutes', 'eventes' ); ?></div>
											</div>
											<div class="timer-outer bdr4">
											   <span class="seconds" data-seconds><?php esc_html_e( '0', 'eventes' ); ?></span> 
											   <div class="smalltext"><?php esc_html_e( 'Seconds', 'eventes' ); ?></div>
											</div>
											<p id="time-up"></p>
										 </div>
										 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- slider-area-end -->