<?php
/**
 * The template for displaying all pages
 *
 * @package eventes
 */

get_header();
?>
<?php get_template_part('template-parts/breadcrumbs/page-single-breadcrumbs'); ?>
<div class="inner-blog pt-120 pb-140">
    <div class="container">
        <div class="row">
            <?php
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content', 'page' );

                    if ( comments_open() || get_comments_number() ) :
                                comments_template();
                                endif;	
                endwhile; // End of the loop.
                ?>

        </div>
    </div>
</div>
<?php get_footer(); ?>