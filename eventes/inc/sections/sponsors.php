<?php

	$data = eventes_el()->merge_options([

			'Repeators' => [],

			'paroller' => '',
			'sub-title' => '',
			'text-heading1' => '',
			'text-btn-link1' => '',
			'video-image1' => '',
			'text-video1' => '',
			'btn-by1' => '',
			'btn-by-link1' => '',

			'the_active1' => '',

		], $data);

?>



  <!-- Sponsors-area -->
            <section class="sponsors services-bg pt-113 fix">
                <div class="container">			
					
                    <div class="section-t team-t paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal"><h2><?php echo html_entity_decode ($data['paroller']) ?></h2></div>
			 <div class="row justify-content-center">
                        <div class="col-xl-8 col-md-8 col-lg-8">
                            <div class="section-title mb-80">
                                <span class="wow fadeIn animated" data-animation="fadeIn animated" data-delay=".2s"><?php echo html_entity_decode ($data['sub-title']) ?></span>
                                <h2 class="wow fadeIn animated" data-animation="fadeIn animated" data-delay=".2s"><?php echo html_entity_decode ($data['text-heading1']) ?></h2>
                            </div>
                        </div>
						<div class="col-xl-4 col-md-4 col-lg-4 text-right">
						<?php echo html_entity_decode ($data['btn-by1']) ?>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 text-center">
                            <ul class="wow fadeIn animated" data-animation="fadeInDown animated" data-delay=".2s">
								     <?php $i = 0; ?>
									<?php foreach ((array) $data['Repeators'] as $price_var): ?>
								<li><a href="<?php echo esc_url( $price_var['sponsors-button-link']['url'] ) ?>"><img src="<?php echo esc_url( $price_var['media_image']['url'] ) ?>" alt="<?php echo esc_url( $price_var['media_image']['url'] ) ?>"></a></li>		
								  <?php $i++; endforeach; ?>
							</ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="s-video-wrap wow fadeIn animated" data-animation="fadeIn animated" data-delay=".2s" style="background-image:url(<?php echo esc_url( $data ['video-image1']['url'] ) ?>)">
                                <div class="s-video-content mb-80">
                                    <a href="<?php echo esc_url ($data['text-btn-link1']) ?>" class="popup-video mb-50"><i class="fas fa-play"></i></a>
									<?php echo html_entity_decode ($data['text-video1']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Sponsors-area-end -->