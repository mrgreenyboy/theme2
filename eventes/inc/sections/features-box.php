<?php
	$data = eventes_el()->merge_options([
			'service_section_var' => [],			
			'text-paroller2' => [],			
		], $data);
?>


<!-- features-area -->
<section class="features-area pt-115 pb-90 p-relative fix">
    <div class="section-t paroller" data-paroller-factor="-0.15" data-paroller-factor-lg="-0.15" data-paroller-factor-md="-0.15" data-paroller-factor-sm="-0.15" data-paroller-type="foreground" data-paroller-direction="horizontal">
        <h2><?php echo html_entity_decode($data['text-paroller2']) ?></h2>
    </div>
    <div class="container">
        <div class="row">
            <?php $i = 0; ?>
            <?php foreach ((array) $data['service_section_var'] as $service_var): $i++; ?>
            <div class="<?php echo esc_attr( $service_var['column_changer'] )?>">
                <div class="single-features s-features text-center mb-30">
                    <div class="features-icon mb-35">
                        <img src="<?php echo esc_url( $service_var ['icon']['url'] ) ?>" alt="<?php echo esc_attr( $service_var ['icon']['url'] ) ?>">
                    </div>
                    <div class="features-content">
                        <h4><?php echo html_entity_decode( $service_var['text'] ) ?></h4>
                        <p><?php echo html_entity_decode( $service_var['content'] ) ?></p>
                        <a href="<?php echo esc_url( $service_var['link-text-hrf']['url']) ?>" class="s-btn"><?php echo html_entity_decode( $service_var['link-text'] ) ?></a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<!-- features-area-end -->