<?php
	$data = eventes_el()->merge_options([
			'service_section_var' => [],		
				'sub_heading01' => '',
			'text-heading01' => '',
			'text-paroller2' => '',
		], $data);
?>


<!-- team-area -->
            <section id="team" class="team-area p-relative pt-120 pb-120 fix">
						   <div class="section-t team-t paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal">
				<h2><?php echo esc_html ($data['text-paroller2']) ?></h2>
			</div>
				<div class="circal1 item-zoom-inout"></div>
				<div class="circal2 item-zoom-inout"></div>
				<div class="circal3 item-zoom-inout"></div>
				<div class="circal4 item-zoom-inout"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-80">
                                <span class="wow fadeIn animated" data-animation="fadeIn animated" data-delay=".2s"><?php echo esc_html ($data['sub_heading01']) ?></span>
                                <h2 class="wow fadeIn animated" data-animation="fadeIn animated" data-delay=".4s"><?php echo esc_html ($data['text-heading01']) ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
					 <?php $i = 0; ?>
						<?php foreach ((array) $data['service_section_var'] as $service_var): $i++; ?>
                        <div class="col-md-6 col-lg-3 wow fadeIn animated" data-animation="fadeIn animated" data-delay=".2s">
                              <div class="single-team text-center pt-50  pb-50 mb-30">
                                <div class="team-thumb">
                                     <img src="<?php echo esc_url( $service_var ['icon']['url'] ) ?>" alt="<?php echo esc_attr( $service_var ['icon']['url'] ) ?>">
                                </div>
                                <div class="team-info">
                                    <h5><a href="<?php echo esc_url( $service_var['sponsors-button-link']['url'] ) ?>"><?php echo esc_html( $service_var['text'] ) ?></a></h5>
                                   <p><?php echo esc_html( $service_var['content'] ) ?></p>
									<strong><?php echo esc_html( $service_var['company'] ) ?></strong> 
                                    <div class="team-social pt-15 pb-15 mb-15">
                                       
                        <?php for ($i = 1; $i <= 5; $i++):
                                    $icon = isset($service_var['social_network_icon__' . $i]) && $service_var['social_network_icon__' . $i] ? $service_var['social_network_icon__' . $i] : false;
                                    $url = isset($service_var['social_network_link__' . $i]) && $service_var['social_network_link__' . $i] ? $service_var['social_network_link__' . $i]['url'] : false;
                                    ?>
                        <?php if ($icon && $url): ?>
                        <a href="<?php echo esc_url( $url ) ?>">
                            <i class="<?php echo esc_attr( $icon ) ?>" aria-hidden="true"></i>
                        </a>
                        <?php endif ?>
                        <?php endfor ?>
                                    </div>
									 <span><?php echo esc_html( $service_var['potions'] ) ?></span>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?> 
                    </div>
                </div>
            </section>
            <!-- team-area-end -->
