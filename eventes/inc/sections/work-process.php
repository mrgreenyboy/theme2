<?php
	$data = eventes_el()->merge_options([
			'service_section_var' => [],		
				'sub_heading01' => '',
			'text-heading01' => '',
			'media01' => '',
			'media02' => '',
		], $data);
?>



<!-- work-process -->
<section class="work-process wp-bg pt-113">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title w-title text-center mb-80">
                    <span><?php echo html_entity_decode ($data['sub_heading01']) ?></span>
                    <h2><?php echo html_entity_decode($data['text-heading01']) ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="wp-list">
                    <ul>
                        <?php $i = 0; ?>
                        <?php foreach ((array) $data['service_section_var'] as $service_var): $i++; ?>
                        <li>
                            <div class="wp-icon">
                                <img src="<?php echo esc_url( $service_var ['icon']['url'] ) ?>" alt="<?php echo esc_attr( $service_var ['icon']['url'] ) ?>">
                            </div>
                            <div class="wp-content">
                                <h5><?php echo html_entity_decode( $service_var['text'] ) ?></h5>
                                <p><?php echo html_entity_decode( $service_var['content'] ) ?></p>
                            </div>
                        </li>
                        <?php endforeach ?>

                    </ul>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="wp-img text-right p-relative">
                    <img src="<?php echo esc_url( $data ['media01']['url'] ) ?>)" alt="<?php echo esc_attr( $data ['media01']['url'] ) ?>)">
                    <img src="<?php echo esc_url( $data ['media02']['url'] ) ?>)" alt="<?php echo esc_url( $attr ['media02']['url'] ) ?>" class="wp-tag">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- work-process-end -->