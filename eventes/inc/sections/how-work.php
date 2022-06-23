<?php
	$data = eventes_el()->merge_options([
			'service_section_var' => [],			
		], $data);
?>


<div class="row">
    <?php $i = 0; ?>
    <?php foreach ((array) $data['service_section_var'] as $service_var): $i++; ?>
    <div class="<?php echo esc_attr( $service_var['column_changer'] )?>">
        <div class="single-wp mb-30">
            <div class="wp-thumb mb-35">
                <img src="<?php echo esc_url( $service_var ['features_img']['url'] ) ?>" alt="<?php echo esc_attr( $service_var ['features_img']['url'] ) ?>">
            </div>
            <div class="inner-wp">
                <div class="inner-wp-icon">
                    <img src="<?php echo esc_url( $service_var ['icon']['url'] ) ?>" alt="<?php echo esc_attr( $service_var ['icon']['url'] ) ?>">
                </div>
                <div class="inner-wp-c">
                    <h5><?php echo html_entity_decode( $service_var['text'] ) ?></h5>
                    <p><?php echo html_entity_decode( $service_var['content'] ) ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach ?>

</div>