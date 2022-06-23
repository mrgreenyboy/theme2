<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package eventes
 */

get_header();

?>


<div class="inner-blog pt-120 pb-140">
    <div class="container">
        <div class="row">
            <!-- .blog -->
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="blog-deatails-box pt-80">
                    <div class="error-page text-center">
                            <div class="error-code">
                                <strong><?php echo esc_html__('404', 'eventes') ?></strong>
                            </div>
                            <div class="error-message">
                                <h3><?php echo esc_html__('Oops... Page Not Found!', 'eventes') ?></h3>
                            </div>
                            <div class="error-body">
                                <?php esc_html_e('Try using the button below to go to main page of the site', 'eventes') ?>
                                <br>
                                <a href="<?php echo esc_url(home_url()) ?>" class="btn btn-primary solid blank"><i class="fa fa-arrow-circle-left">&nbsp;</i> <?php echo esc_html__('Go to Home', 'eventes') ?></a>
                            </div>
                        </div>
                </div>
            </div>
           
        </div>
    </div>
</div>



<?php get_footer(); ?>