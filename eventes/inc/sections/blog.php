<?php
	$data = eventes_el()->merge_options([	
			'sub-title' => '',
			'text-heading1' => '',
			'paroller' => '',
			'infinite_scroll' => false,
			'posts_per_page' => 9,
			'category' => [],
			'include' => [],
			'paged' => 1,
			'query' => false,
		], $data);

	

	$args = [
		'paged' => $data['paged'],
		'posts_per_page' => $data['posts_per_page'],
	];

	// Filter by category.
	if ($data['category']) $args['category__in'] = $data['category'];

	// Only display the selected listings.
	if ($data['include']) $args['post__in'] = $data['include'];

	// WP Query.
	$query = $data['query'] ? : new WP_Query($args);
?>
<!-- blog-area -->
            <section id="blog" class="blog-area p-relative fix pt-100 pb-80">
			 
                <div class="container">
                  <div class="section-t team-t paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal"><h2><?php echo html_entity_decode ($data['paroller']) ?></h2></div>
			 <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8">
                            <div class="section-title mb-80">
                                <span class="wow fadeIn animated" data-animation="fadeIn animated" data-delay=".2s"><?php echo html_entity_decode ($data['sub-title']) ?></span>
                                <h2 class="wow fadeIn animated" data-animation="fadeIn animated" data-delay=".2s"><?php echo html_entity_decode ($data['text-heading1']) ?></h2>
                            </div>
                        </div>
						<div class="col-xl-4 col-lg-4 text-right">
                           
                        </div>
                    </div>
                    <div class="row blog-active2 wow fadeIn animated" data-animation="fadeIn animated" data-delay=".2s">
                        
                         <?php if ($query->have_posts()): ?>
            <?php while ($query->have_posts()): $query->the_post();
					if (get_post_type() == 'eventes') {
    					
    						global $post;
    						$post->eventes_options__wrap_in = 'col-md-4 col-sm-6 col-xs-12 reveal';
    						get_template_part( 'content','eventes' );
    				
					} else {
						eventes_el()->get_partial('post-preview', [
							'wrap_in' =>  [],
						]);
					}
				endwhile; ?>

            <?php wp_reset_postdata() ?>
            <?php endif ?>
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->
			
			
			
