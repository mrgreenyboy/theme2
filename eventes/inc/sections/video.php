<?php

	$data = eventes_el()->merge_options([

			'text-control1' => '',
			'text-control2' => '',
			'text-control3' => '',
			'text-sub-heading1' => '',
			'text-btn-text1' => '',
			'text-btn-link1' => '',
			'background-media1' => '',

			'header-switcher1' => true,

			'ref' => '',

		], $data);

?>


<!-- Sponsors-area -->
            <section class="sponsors services-bg fix">
                <div class="container">
                   
                   <div class="row wow fadeIn animated" data-animation="fadeIn animated" data-delay=".2s">
                        <div class="col-12">
                            <div class="s-video-wrap" style="background-image:url(<?php echo esc_url( $data ['background-media1']['url'] ) ?>)">
                                <div class="s-video-content mb-80">
                                    <a href="<?php echo esc_url ($data['text-btn-link1']) ?>" class="popup-video mb-50"><i class="fas fa-play"></i></a>
                                     <h2><?php echo html_entity_decode ($data['text-control2']) ?></h2>
							<?php echo html_entity_decode ($data['text-control1']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Sponsors-area-end -->
			
