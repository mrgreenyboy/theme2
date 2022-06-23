<?php

	$data = eventes_el()->merge_options([

			'text-control1' => '',
			'text-control2' => '',
			'text-control3' => '',
			'text-sub-heading1' => '',
			'text-btn-text1' => '',
			'text-btn-link1' => '',
			'background-media1' => '',
			'background-media2' => '',
			'btn-link2' => '',
			'btn-link3' =>'',
			'text-sub-title2' => '',
			'text-title2' => '',

			'header-switcher1' => true,

			'ref' => '',

		], $data);

?>




<!-- video-area -->
<section class="video-area pt-120 pb-125">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="video-wrap p-relative">
                    <img src="<?php echo esc_url( $data ['background-media1']['url'] ) ?>" alt="<?php echo esc_attr( $data ['background-media1']['url'] ) ?>">
                    <div class="video-position">
                        <div class="video-img">
                            <img src="<?php echo esc_url( $data ['background-media2']['url'] ) ?>" alt="<?php echo esc_attr( $data ['background-media2']['url'] ) ?>">
                            <a href="<?php echo html_entity_decode($data['text-btn-link1']) ?>" class="popup-video"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 v-padding">
                <div class="section-title left-align mb-30">
                    <span><?php echo html_entity_decode ($data['text-sub-title2']) ?></span>
                    <h2><?php echo html_entity_decode ($data['text-title2']) ?></h2>
                </div>
                <div class="video-content">
                    <?php echo html_entity_decode ($data['text-control1']) ?>
                    <div class="v-btn">
                        <a href="<?php echo esc_url ($data['btn-link3'] ['url']) ?>" class="btn"><?php echo  html_entity_decode ($data['btn-link2']) ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- video-area-end -->