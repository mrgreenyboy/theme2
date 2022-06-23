<?php
/**
 * Displays content for post format Link
 *
 * @package  eventes
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 <div class="bsingle__post mb-50">
        <div class="news-text news-text2">
           
   				<div class="bsingle__content">
                    <div class="entry-excerpt">  
						<div class="row">					
                        <div class="link">                           
                              
                            <?php
					if ( is_singular() ) :
						the_title( '<h2 class="single">', '</h2>' );
					else :
						the_title( '<h2 class="single"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;

					if ( 'post' === get_post_type() ) :
					?>
                    <?php endif; ?>
                    <?php if (is_single() ) {
					the_content();
					$link = rwmb_meta( 'eventeszc_post_link' ); echo esc_url ($link);

				} elseif ( is_search() OR is_archive() ) {?>
                    <p>
                        <a href="<?php $link = rwmb_meta( 'eventeszc_post_link' ); echo esc_url ($link); ?>">
                                <?php $link = rwmb_meta( 'eventeszc_post_link' ); echo esc_url ($link); ?>
                            </a>
				
                       
                        <?php } else {
					if ($post) { ?>
                       
						<h3>
                           <a href="<?php $link = rwmb_meta( 'eventeszc_post_link' ); echo esc_url ($link); ?>">
                                <?php $link = rwmb_meta( 'eventeszc_post_link' ); echo esc_url ($link); ?>
                            </a>
							</h3>
                       
                        
                        <?php } else {
						the_content();
						$link = rwmb_meta( 'eventeszc_post_link' ); echo esc_url ($link);
						
					}

				} ?>
							
                        </div>
                        </div>

                    </div>
           
            </div>
        </div>

    </div>
</article>