<?php
	$data = eventes_el()->merge_options([
			'header-slider-text1' => [],
			'image_animation_section' => '',
			'slide_time' => '',
		], $data);
?>



<!-- slider-area -->
<section id="home" class="slider-area fix p-relative">
    <div class="slider-shape ss-one"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape01.png" alt="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape01.png"></div>
    <div class="slider-shape ss-two"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape02.png" alt="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape02.png"></div>
    <div class="slider-shape ss-three"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape03.png" alt="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape03.png"></div>
    <div class="slider-shape ss-four"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape04.png" alt="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape04.png"></div>
    <div class="slider-shape ss-five"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape05.png" alt="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape05.png"></div>
    <div class="slider-shape ss-six"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape06.png" alt="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape06.png"></div>
    <div class="slider-shape ss-seven"><img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape07.png" alt="<?php echo get_template_directory_uri(); ?>/inc/assets/img/shape/slider_shape07.png"></div>
    <div class="slider-active">
        <?php $i = 0; ?>
        <?php foreach ((array) $data['header-slider-text1'] as $testimonial): ?>
        <div class="single-slider slider-bg d-flex align-items-center" style="background-image:url('<?php echo esc_url( $testimonial['back-image']['url'] ) ?>')">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="slider-content s-slider-content">
                            <h2 data-animation="fadeInUp" data-delay=".4s"> <?php echo html_entity_decode($testimonial['text-heading']) ?> </h2>
                            <div data-animation="fadeInUp" data-delay=".6s"><?php echo html_entity_decode($testimonial['textblog']) ?></div>
                            <div class="slider-btn mt-55">
                                <a href="<?php echo esc_url ($testimonial['button-link'] ['url']) ?>" class="btn" data-animation="fadeInLeft" data-delay=".8s"><?php echo html_entity_decode($testimonial['button-text']) ?></a>
                                <a href="<?php echo esc_url ($testimonial['button-link2'] ['url']) ?>" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s"><?php echo html_entity_decode($testimonial['button-text2']) ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $i++; endforeach; ?>
    </div>
    <a href="#about" class="down-arrow smoth-scroll"><i class="fas fa-long-arrow-alt-down"></i></a>
</section>
<!-- slider-area-end -->