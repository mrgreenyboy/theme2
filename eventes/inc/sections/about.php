<?php
	$data = eventes_el()->merge_options([
			'text-control1' => '',
			'text-control2' => '',
			'text-control3' => '',
			'text-sub-heading1' => '',
			'text-btn-text1' => '',
			'text-btn-link1' => '',
			'background-media1' => '',
			'header-switcher1' => true,
			'ref' => '',
		], $data);
?>


<!-- about-area -->
<section class="about-area about-p pt-120 pb-120 p-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="s-about-img p-relative">
                    <img src="<?php echo esc_url( $data ['background-media1']['url'] ) ?>)" alt="<?php echo esc_attr( $data ['background-media1']['url'] ) ?>)">
                    <div class="about-text second-about">
                        <span><?php echo html_entity_decode($data['text-control3']) ?></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content s-about-content pl-30">
                    <div class="about-title second-atitle">
                        <span><?php echo html_entity_decode($data['text-sub-heading1']) ?></span>
                        <h2><?php echo html_entity_decode($data['text-control2']) ?></h2>
                        <p><span></span><?php echo html_entity_decode ($data['text-sub-heading2']) ?></p>
                    </div>
                    <?php echo html_entity_decode ($data['text-control1']) ?>
                    <a class="btn" href="<?php echo esc_url($data['text-btn-link1'] ['url']) ?>"><?php echo html_entity_decode ($data['text-btn-text1']) ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-area-end -->



