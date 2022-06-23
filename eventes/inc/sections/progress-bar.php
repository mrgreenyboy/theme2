<?php
	$data = eventes_el()->merge_options([
			'top-heading' => '',
			'text-heading' => '',
			'sub-heading' => '',
			'text-control' => '',
			'text-count1' => '',
			'text-count2' => '',
			'text-count3' => '',
			'background-media1' => '',
			
		], $data);
?>
<!-- counter-area -->
<div class="counter-area pt-120 pb-120" style="background-image:url(<?php echo esc_url( $data ['background-media1']['url'] ) ?>);background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-6">
			   <div class="about-title second-atitle">							
						<span class="wow fadeIn animated" data-animation="fadeIn animated" data-delay=".2s"><?php echo html_entity_decode($data['top-heading']) ?></span>
						<h2 class="wow fadeIn animated" data-animation="fadeIn animated" data-delay=".2s"><?php echo html_entity_decode($data['text-heading']) ?></h2>
						<h5 class="wow fadeIn animated" data-animation="fadeIn animated" data-delay=".2s"><?php echo html_entity_decode($data['sub-heading']) ?></h5>
					</div>
					<?php echo html_entity_decode($data['text-control']) ?>					
			</div>
			<div class="col-lg-6 col-sm-6">
			<?php echo html_entity_decode($data['text-count1']) ?>		
			<?php echo html_entity_decode($data['text-count2']) ?>		
			<?php echo html_entity_decode($data['text-count3']) ?>		
			
				
				
				<div class="cr4"></div>
				<div class="cr5"></div>
				<div class="cr6"></div>
				
			</div>                        
		</div>
	</div>
</div>
<!-- counter-area-end -->