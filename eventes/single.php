<?php
/**
 * The template for displaying single pages
 *
 * @package eventes
 */

get_header();
?>

<?php get_template_part('template-parts/breadcrumbs/content-single'); ?>
<div class="inner-blog b-details-p pt-120 pb-140 blog-deatails-box02">
    <div class="container">
        <div class="row">
		
		
		<?php if (  is_active_sidebar( 'sidebar-1' ) ){ ?>
			<!-- .blog -->
            <div class="col-sm-12 col-md-12 col-lg-8">

                <div class="blog-deatails-box single">
                    <?php
                        while ( have_posts() ) :
                            the_post();
                            get_template_part( 'template-parts/content', get_post_format() );
                            get_template_part( 'template-parts/content-single', get_post_type() );

                            if ( comments_open() || get_comments_number() ) :
                                        comments_template();
                                        endif;	
                        endwhile; // End of the loop.
                        ?>
                </div>

            </div>
            <!-- #right side -->
           <div class="col-sm-12 col-md-12 col-lg-4">
                <aside class="sidebar-widget">
                    <?php get_sidebar();?>                    
                </aside>
            </div>
            <!-- #right side end -->
			
				
				<?php } else { ?>
				 <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="blog-deatails-box single">
                    <?php
                        while ( have_posts() ) :
                            the_post();
                            get_template_part( 'template-parts/content', get_post_format() );
                            get_template_part( 'template-parts/content-single', get_post_type() );

                            if ( comments_open() || get_comments_number() ) :
                                        comments_template();
                                        endif;	
                        endwhile; // End of the loop.
                        ?>
                </div>
            </div>
				
			 <?php } ?>
			
          
		  
            
        </div>
    </div>
</div>

<?php get_footer() ?>