<?php
$defaults = [
    'wrap_in' => '',
];
$categories = array_filter((array) get_the_terms(get_the_ID(), 'category'));
?>

 <div class="row mb-30 <?php echo esc_attr( $data['wrap_in'] ) ? esc_attr( $data['wrap_in'] ) : '' ?>">
    <div class="col-lg-2">
							  <div class="user">
								  <div class="title">  
									 <div class="img"><?php the_post_thumbnail('eventes-featured-small'); ?></div>
									 <h5> 
									 <?php						
										$name = rwmb_meta( 'eventeszc_evente_name' );
										echo html_entity_decode ($name);
										?> 
									</h5>
									 <p>
										 <?php						
										$positions = rwmb_meta( 'eventeszc_evente_positions' );
										echo html_entity_decode ($positions);
										?> 
										
									 </p>
								  </div>
								  <ul>
                                 <li> 
								 <i class="fal fa-coffee"></i>
								 <?php						
										$coffee = rwmb_meta( 'eventeszc_evente_coffe' );
										echo html_entity_decode ($coffee);
										?> 
										</li>
                                 <li><i class="fal fa-video"></i> 
								 <?php						
										$video = rwmb_meta( 'eventeszc_evente_video' );
										echo html_entity_decode ($video);
										?> 
										</li>
                              </ul>
							  </div>
                           </div>
                           <div class="col-lg-10">
                              <div class="event-list-content fix">
                                 <ul data-animation="fadeInUp animated" data-delay=".2s" style="animation-delay: 0.2s;" class="">
									<li><i class="fas fa-map-marker-alt"></i>  <?php						
										$loca = rwmb_meta( 'eventeszc_evente_loca' );
										echo html_entity_decode ($loca);
										?> </li>
									<li><i class="far fa-clock"></i> <?php echo get_the_date(); ?></li>
								 </ul>
								 <h2><?php the_title(); ?></h2>
								 <p><?php echo mb_strimwidth( get_the_content(), 0, 3000); ?></p>								 
								 <div class="crical"><i class="fal fa-video"></i> </div>
                              </div>
                           </div>
                           </div>


