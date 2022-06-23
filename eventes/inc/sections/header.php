<?php
	$data = eventes_el()->merge_options([
			'text-control1' => '',
			'text-control2' => '',
			'text-control3' => '',
			'text-btn-text1' => '',
			'text-btn-link1' => '',
			'background-media1' => '',
			'header-switcher1' => true,
			'ref' => '',
		], $data);
?>

<!-- slider-area -->
<section id="parallax" class="slider-area slider-bg second-slider-bg d-flex align-items-center justify-content-center fix" style="background-image:url(<?php echo esc_url( $data ['background-media1']['url'] ) ?>)">
    <div class="slider-shape ss-one layer" data-depth="0.10"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape01.png" alt="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape01.png"></div>
    <div class="slider-shape ss-two layer" data-depth="0.30"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape02.png" alt="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape02.png"></div>
    <div class="slider-shape ss-three layer" data-depth="0.40"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape03.png" alt="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape03.png"></div>
    <div class="slider-shape ss-four layer" data-depth="0.60"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape04.png" alt="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape04.png"></div>
    <div class="slider-shape ss-five layer" data-depth="0.20"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape05.png" alt="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape05.png"></div>
    <div class="slider-shape ss-six layer" data-depth="0.15"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape06.png" alt="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape06.png"></div>
    <div class="slider-shape ss-seven layer" data-depth="0.50"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape07.png" alt="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape07.png"></div>
    <div class="slider-active">
        <div class="single-slider">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider-content second-slider-content text-center">

                            <span data-animation="fadeInUp" data-delay=".2s"><?php echo html_entity_decode($data['text-control3']) ?></span>
                            <h2 data-animation="fadeInUp" data-delay=".4s"><?php echo html_entity_decode ($data['text-control2']) ?></h2>
                            <div data-animation="fadeInUp" data-delay=".6s"><?php echo html_entity_decode ($data['text-control1']) ?></div>
                            <div class="slider-btn mt-45">
                                <a href="<?php echo esc_url ($data['text-btn-link1'] ['url']) ?>" class="btn" data-animation="fadeInUp" data-delay=".8s"><?php echo html_entity_decode ($data['text-btn-text1']) ?></a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- slider-area-end -->