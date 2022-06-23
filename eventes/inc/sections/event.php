<?php
	$data = eventes_el()->merge_options([
			'template' => 'col3',
			'infinite_scroll' => false,
			'posts_per_page' => 9,
			'category' => [],
			'include' => [],
			'paged' => 1,
			'query' => false,
		], $data);

	$templates = [
		'col3' => ['wrap_in' => 'col-md-4 col-sm-6 col-xs-12'],
		'col2' => ['wrap_in' => 'col-md-6 col-sm-6 col-xs-12'],
	];

	$args = [
		'paged' => $data['paged'],
		'posts_per_page' => $data['posts_per_page'],
	];

	// Filter by category.
	if ($data['category']) $args['category__in'] = $data['category'];

	// Only display the selected listings.
	if ($data['include']) $args['post__in'] = $data['include'];

	// WP Query.
	$query = $data['query'] ? : new WP_Query($args);
?>

<div class="news">
    <div class="container">
        <div class="row">
            <?php if ($query->have_posts()): ?>
            <?php while ($query->have_posts()): $query->the_post();
					if (get_post_type() == 'eventes') {
    					
    						global $post;
    						$post->eventes_options__wrap_in = 'col-md-4 col-sm-6 col-xs-12 reveal';
    						get_template_part( 'content','eventes' );
    				
					} else {
						eventes_el()->get_partial('post-preview', [
							'wrap_in' => (isset($templates[$data['template']]) ? $templates[$data['template']]['wrap_in'] : $templates['col3']['wrap_in']) . (is_sticky() ? ' sticky ' : ''),
						]);
					}
				endwhile; ?>

            <?php wp_reset_postdata() ?>
            <?php endif ?>

        </div>
    </div>
</div>