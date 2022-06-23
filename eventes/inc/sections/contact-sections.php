<?php
	$data = eventes_el()->merge_options([
			'Repeators' => [],
			'text-control1' => '',
			'text-control2' => '',
			'text-control3' => '',
			'text-sub-heading1' => '',
			'text-btn-text1' => '',
			'text-btn-link1' => '',
			'background-media1' => '',
			'text-paroller2' => '',
			'header-switcher1' => true,
			'ref' => '',
		], $data);
?>


			 <!-- contact-area -->
            <div class="contact-area pt-120 pb-90" style="background-image:url(img/map.png);background-size: cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                           <div class="about-title second-atitle">										
                                    <span class="wow fadeIn animated" data-animation="fadeIn animated" data-delay=".2s"><?php echo html_entity_decode ($data['text-sub-heading1']) ?></span>
                                    <h2 class="wow fadeIn animated" data-animation="fadeIn animated" data-delay=".2s"><?php echo html_entity_decode ($data['text-control2']) ?></h2>
                                </div>
								  <?php $i = 0; ?>
							<?php foreach ((array) $data['Repeators'] as $price_var): ?>
								<div class="feature-box text-left wow fadeIn animated" data-animation="fadeIn animated" data-delay=".2s">
							<div class="icon <?php echo html_entity_decode( $price_var['feature-icon-color'] ) ?>">
											<i class="<?php echo html_entity_decode( $price_var['feature-icon'] ) ?>"></i>
										</div>
							<div class="content">
								<h5><?php echo html_entity_decode( $price_var['feature-htext'] ) ?></h5>
											<p><?php echo html_entity_decode( $price_var['feature-ctext'] ) ?></p>
							</div>
						 </div>
						 <?php $i++; endforeach; ?>
						
                        </div>
                       <div class="col-lg-6 col-sm-12">
							<div class="contact-circal">
								<div class="in-circal1 item-zoom-inout"></div>
								<div class="in-circal2 item-zoom-inout"></div>
								<div class="in-circal3 item-zoom-inout"></div>
								<div class="in-circal4 item-zoom-inout"></div>
								<div class="in-circal5 item-zoom-inout"></div>
							</div>
                        </div>
                                             
                    </div>
                </div>
            </div>
            <!-- contact-area-end -->
			
			
		