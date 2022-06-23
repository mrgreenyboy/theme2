<?php

	$data = eventes_el()->merge_options([

			'Repeators' => [],

			'paroller' => '',
			'sub-title' => '',
			'text-heading1' => '',

			'the_active1' => '',

		], $data);

?>


 <!-- pricing-area -->
            <section id="pricing" class="pricing-area pt-113 pb-90 fix">
			<div class="section-t team-t paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal"><h2><?php echo html_entity_decode ($data['paroller']) ?></h2></div>
			 <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-80">
                                <span class="wow fadeIn animated" data-animation="fadeIn animated" data-delay=".2s"><?php echo html_entity_decode ($data['sub-title']) ?></span>
                                <h2 class="wow fadeIn animated" data-animation="fadeIn animated" data-delay=".2s"><?php echo html_entity_decode ($data['text-heading1']) ?></h2>
                            </div>
                        </div>
                    </div>
                <div class="container">
                   

                    <div class="row">
                        <?php $i = 0; ?>

					<?php foreach ((array) $data['Repeators'] as $price_var): ?>
                        <div class="col-lg-4 col-md-6">
							<div class="pricing-box active text-center mb-30 wow fadeIn animated" data-animation="fadeIn animated" data-delay=".2s">							
							  <div class="tag <?php echo esc_attr( $price_var['active-plan'] ) ?>">Exclusive author</div>
								
                                <div class="pricing-head">  
										<?php if (isset($price_var['which-plan'])): ?>
										<h4> <?php echo html_entity_decode( $price_var['which-plan'] ) ?></h4>
										<?php endif ?>								
                                 
                                    <div class="price-count mb-30">
                                        <h2> 
										<?php if (isset($price_var['curreny-type'])): ?>
										<small><?php echo html_entity_decode( $price_var['curreny-type'] ) ?></small>
										<?php endif ?>
										<?php if (isset($price_var['package'])): ?>
										<?php echo html_entity_decode( $price_var['package'] ) ?>
										<?php endif ?>
										</h2>
                                    </div>
                                </div>
                                <div class="pricing-body mb-40">
                                    <?php echo html_entity_decode ($price_var['text-again']) ?>
									  <strong><?php echo html_entity_decode( $price_var['vat'] ) ?></strong>
									  <div class="bar">
										<span style="width:<?php echo esc_attr( $price_var['progress-bar'] ) ?>%;"></span>
									  </div>
									  <div class="bar-no"> 
										<?php if (isset($price_var['Month-year'])): ?>
										<?php echo html_entity_decode( $price_var['Month-year'] ) ?>
										<?php endif ?>
									</div>
									<div class="pricing-btn mt-40">
									

									<a href="<?php echo esc_url( $price_var['price-button-link']  ['url']) ?>" class="btn"><i class="far fa-ticket-alt"></i>  <?php echo esc_html( $price_var['price-button'] ) ?></a>

									
										
									</div>
                                </div>
                               
                            </div>
                        </div>
                          <?php $i++; endforeach; ?>
                    </div>
					
					
                </div>
            </section>
            <!-- pricing-area-end -->

