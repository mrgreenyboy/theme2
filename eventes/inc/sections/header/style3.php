	<!-- slider-area -->
            <section id="parallax" class="slider-area slider-bg second-slider-bg slider-bg3 d-flex align-items-center justify-content-center fix" style="background-image:url(<?php echo esc_url( $header_backgrund_images['url'] ) ?>)">
                <div class="slider-shape ss-one layer" data-depth="0.10"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/doddle_6.png" alt="shape"></div>
                <div class="slider-shape ss-three layer" data-depth="0.40"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/doddle_9.png" alt="shape"></div>
                <div class="slider-shape ss-four layer" data-depth="0.60"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/doddle_7.png" alt="shape"></div>
				<div class="slider-active">
                    <div class="single-slider">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-sm-12">
                                    <div class="slider-content second-slider-content">
                                        <?php echo html_entity_decode( $text_list ); ?>
                                        <h2 data-animation="fadeIn animated" data-delay=".4s"><?php echo html_entity_decode( $title ); ?></h2> 
										<div class="conterdown wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s" countdown data-date="<?php echo esc_html($count); ?>">
										 <div class="timer">										 
											<div class="timer-outer bdr1">												
											   <span class="days" data-days><?php esc_html_e( '0', 'eventes' ); ?> </span> 
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
								<div class="col-lg-4 col-sm-12">
									<div class="booking-form mt-50 align-items-center justify-content-center wow fadeIn" data-animation="fadeIn" data-delay=".2s">
										<?php echo html_entity_decode($shortcode); ?>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </section>
            <!-- slider-area-end -->