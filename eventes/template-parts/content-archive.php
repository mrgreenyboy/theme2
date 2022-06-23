<?php
/**
 * Template part for displaying posts
 *
 *
 * @package eventes
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="bsingle__post mb-50">
        <div class="news-text news-text2">
            <div class="bsingle__post-thumb">

                <?php
						if (has_post_thumbnail()) :
							the_post_thumbnail( 'eventes-featured-large', array( 'alt' => get_the_title() ) );
						else :
						
						endif;
						?>

            </div>


            <div class="bsingle__content">
                <div class="entry-excerpt">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="meta-info">
                                <ul>
                                    <li><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
                                            <i class="far fa-user"></i><?php esc_html_e( 'By', 'eventes' ); ?> <?php the_author(); ?> </a></li>
                                     <li><i class="far fa-comments"></i> <?php echo comments_number(__('No Comments', 'eventes'), __('1 Comment', 'eventes'), __('% Comments', 'eventes'));?> </li>
                                </ul>
                            </div>

                        </div>

                    </div>
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

				} elseif ( is_search() OR is_archive() ) {?>
                    <p>
                        <?php echo substr(get_the_excerpt(), 0 ,180); ?>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="blog__btn">
                                    <a href="<?php the_permalink(); ?>" class="btn"><?php esc_html_e( 'Read More', 'eventes' ); ?></a>
                                </div>
                            </div>

                        </div>



                        <?php } else {
					if ($post) { ?>
                        <p>
                            <?php echo substr(get_the_excerpt(), 0 ,365); ?>
                        </p>
                        <div class="text-box">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="blog__btn">
                                        <a href="<?php the_permalink(); ?>" class="btn"><?php esc_html_e( 'Read More', 'eventes' ); ?></a>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <?php } else {
						the_content();
					}

				} ?>



                </div><!-- .entry-content -->
            </div>



        </div>
    </div>

</article><!-- #post-## -->