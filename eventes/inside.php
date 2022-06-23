<?php
 /*
    Template Name: Full Page + Title
 */
get_header();?>

<?php get_template_part('template-parts/breadcrumbs/page-single-breadcrumbs'); ?>

<?php
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content', 'page' );

                endwhile; // End of the loop.
                ?>


<?php get_footer();?>
