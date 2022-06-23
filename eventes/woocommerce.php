<?php get_header() ?>
<?php get_template_part('template-parts/breadcrumbs/woocommerce'); ?>	
<section class="cst-woocommerce pt-120 pb-80">

	<div class="container c1 wcc">
		<div class="content-area row the-page-content">
			<div class="col-md-12">
				<?php woocommerce_content() ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer() ?>