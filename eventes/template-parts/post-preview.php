<?php
$defaults = [
    'wrap_in' => '',
];
$categories = array_filter((array) get_the_terms(get_the_ID(), 'category'));
?>


<div class="col-lg-4 col-md-6">
	<div class="single-post mb-30">
		<div class="blog-thumb">
			  <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('eventes-featured-small'); ?></a>
		</div>
		<div class="blog-content">
			<div class="b-meta mb-20">
			  <ul>
				<li><a href="#"><i class="far fa-user"></i><?php esc_html_e( 'By', 'eventes' ); ?> <?php the_author(); ?></a></li>
				<li><i class="far fa-comments"></i><?php echo comments_number(__('No Comments', 'eventes'), __('1 Comment', 'eventes'), __('% Comments', 'eventes'));?> </li>
			</ul>
			</div>
			 <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
            <p><?php echo mb_strimwidth( get_the_content(), 0, 123); ?>...</p>
			
		</div>
	</div>
</div>