<?php
/**
 * search breadcums
 *
 *
 * @package eventes
 */
?>
<!-- breadcrumb-area -->
<section id="parallax" class="slider-area breadcrumb-area d-flex align-items-center justify-content-center fix" >
<div class="slider-shape ss-one layer" data-depth="0.10"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/doddle_6.png" alt="shape"></div>
							<div class="slider-shape ss-three layer" data-depth="0.40"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/doddle_9.png" alt="shape"></div>
							<div class="slider-shape ss-four layer" data-depth="0.60"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/doddle_7.png" alt="shape"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title mb-30">
                                  <h2><?php printf( esc_html__( 'Search : %s', 'eventes' ), '<span>' . get_search_query() . '</span>' );?></h2>                                                  
                                </div>
                                 <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'eventes' ); ?></a></li>
										 <li class="breadcrumb-item active" aria-current="page"><?php printf( esc_html__( 'Search : %s', 'eventes' ), '<span>' . get_search_query() . '</span>' );?></li>
                                    </ol>
                                </nav>
                            </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->