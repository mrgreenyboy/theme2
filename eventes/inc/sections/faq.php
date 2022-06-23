<?php
	$data = eventes_el()->merge_options([
			'service_section_var' => [],	
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




<!-- faq-area -->
<section class="faq-area pb-120">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6">
                <div class="section-title left-align mb-50">
                    <span><?php echo html_entity_decode ($data['text-control3']) ?></span>
                    <h2><?php echo html_entity_decode ($data['text-control2']) ?></h2>
                </div>
                <div class="faq-wrap">
                    <div class="accordion" id="accordionExample">

                        <?php $i = 0; ?>
                        <?php foreach ((array) $data['service_section_var'] as $service_var): $i++; ?>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-toggle="collapse" data-target="#<?php echo esc_attr( $i ) ?>" aria-expanded="false" aria-controls="collapseOne">
                                        <?php echo html_entity_decode( $service_var['text'] ) ?>
                                    </button>
                                </h2>
                            </div>
                            <div id="<?php echo esc_attr( $i ) ?>" class="collapse <?php echo esc_attr( $i ) == 1 ? 'show' : '' ?>" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <?php echo html_entity_decode( $service_var['content'] ) ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-img text-right">
                    <img src="<?php echo esc_url( $data ['background-media1']['url'] ) ?>" alt="<?php echo esc_attr( $data ['background-media1']['url'] ) ?>">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq-aread-end -->