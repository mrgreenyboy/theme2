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


 <!-- about-area -->
            <section id="about" class="about-area about-p pt-120 pb-50 p-relative">
                <div class="container">
					<div class="section-t paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal">
        <h2><?php echo html_entity_decode ($data['text-paroller2']) ?></h2>
    </div>
                    <div class="row">
						<div class="col-lg-6">
                            <div class="about-content s-about-content pl-30">
                                <div class="about-title second-atitle">
								
                                    <span class="wow fadeIn animated" data-animation="fadeIn animated" data-delay=".2s"><?php echo html_entity_decode ($data['text-sub-heading1']) ?></span>
                                    <h2 class="wow fadeIn animated" data-animation="fadeIn animated" data-delay=".2s"><?php echo html_entity_decode ($data['text-control2']) ?></h2>
                                    <h5 class="wow fadeIn animated" data-animation="fadeIn animated" data-delay=".2s"><?php echo html_entity_decode ($data['text-sub-heading2']) ?></h5>
                                </div>
                                <p> <?php echo html_entity_decode($data['text-control1']) ?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 pt-60">
						
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
                        
                    </div>
                </div>
            </section>
            <!-- about-area-end -->
			
			
		