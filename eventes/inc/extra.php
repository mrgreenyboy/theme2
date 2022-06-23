<?php
/**
 * eventes Theme Customizer
 *
 * @package eventes
 */

 /*How to add numeric pagination in your WordPress theme*/

function eventes_wordpress_numeric_post_nav() {
    if( is_singular() )
        return;
    global $wp_query;
    /* Stop the code if there is only a single page page */
    if( $wp_query->max_num_pages <= 1 )
        return;
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
    /*Add current page into the array */
    if ( $paged >= 1 )
        $links[] = $paged;
    /*Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
    echo '<div class="pagination-wrap mb-50"><ul class="pagination">' . "\n";
    /*Display Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li></li>' . "\n", get_previous_posts_link() );
    /*Display Link to first page*/
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
    /* Link to current page */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
    /* Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li></li>' . "\n", get_next_posts_link() );
    echo '</ul></div>' . "\n";
}




// Unset URL from comment form
function eventes_crunchify_move_comment_form_below( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'eventes_crunchify_move_comment_form_below' );

// Add placeholder for Name and Email
function eventes_modify_comment_form_fields($fields){
    $fields['author'] = '<p class="comment-field">' .
				'<i class="fas fa-user"></i>' .
				'<input id="author"  placeholder="' . esc_attr__( "Your Name", "eventes" ) . '"  name="author" type="text" />'.

                '</p>';
    $fields['email'] = '<p class="comment-field">' .  '<i class="fas fa-envelope"></i>' .
				 '<input id="email" placeholder="' . esc_attr__( "your-real-email@example.com", "eventes" ) . '" name="email" type="text"/>'  .

                '</p>';
    $fields['url'] = '<p class="comment-field">' .'<i class="fas fa-globe"></i>'.
             '<input id="url" name="url" placeholder="' . esc_attr__( "http://your-site-name.com", "eventes" ) . '" type="text"/> ' .

               '</p>';

    return $fields;
}
add_filter('comment_form_default_fields','eventes_modify_comment_form_fields');


/**
	 * Template for comments and pingbacks.
	 *
	 * To override this walker in a child theme without modifying the comments template
	 * simply create your own eventes_comment(), and that function will be used instead.
	 *
	 * Used as a callback by wp_list_comments() for displaying the comments.
	 *
	 * @since eventes 1.0
	 */
function eventes_comments( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' : ?>
<li <?php comment_class(); ?> id="comment<?php comment_ID(); ?>">
    <div class="back-link"><?php comment_author_link(); ?></div>
    <?php break;
        default : ?>
<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
    <article class="comment_wrap">
        <div class="comment-body">
            <div class="author vcard single__comment mb-60">
                <div class="comments-avatar">
                    <?php echo get_avatar( $comment, 100 ); ?>
                </div>
                <div class="comment-text">
                    <div class="avatar-name mb-15">
                        <h6><?php comment_author(); ?> <i class="fas fa-bookmark"></i></h6>
                        <span><?php comment_date(); ?></span>
                        <?php
							comment_reply_link( array_merge( $args, array(
							'reply_text' => esc_html__( 'Reply','eventes' ),
							'before' => '<div class="comment-reply"> <i class="fas fa-reply"></i>',
							'after' => ' <span></span></div>',
							'depth' => $depth,
							'max_depth' => $args['max_depth']
							) ) ); ?>
                    </div>
                    <p><?php comment_text(); ?></p>
                </div>
            </div><!-- .vcard -->
        </div><!-- comment-body -->
    </article><!-- #comment-<?php comment_ID(); ?> -->
    <?php // End the default styling of comment
        break;
    endswitch;
}


 




/**
 * image size
 *
 */
 // Make sure featured images are enabled
add_theme_support( 'post-thumbnails' );




// Add featured image sizes
add_image_size( 'eventes-featured-small', 370, 238, true ); // width, height, crop
add_image_size( 'eventes-featured-large', 1170, 752, true );
// Register the three useful image sizes for use in Add Media modal
add_filter( 'image_size_names_choose', 'wpshout_custom_sizes' );
function wpshout_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'medium-width' => esc_html__( 'Medium Width','eventes'),
        'medium-height' => esc_html__( 'Medium Height','eventes' ),
        'medium-something' => esc_html__( 'Medium Something','eventes' ),
    ) );
}

// Add CSS_Menu_Maker_Walker

class CSS_Menu_Maker_Walker extends Walker {

  var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul>\n";
  }

  function end_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }

  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

    global $wp_query;
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    $class_names = $value = '';
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;

    /* Check for children */
    $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
    if (!empty($children)) {
      $classes[] = 'has-sub';
    }

    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

    $output .= $indent . '<li' . $id . $value . $class_names .'>';

    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'><span>';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    $item_output .= '</span></a>';
    $item_output .= $args->after;

    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }

  function end_el( &$output, $item, $depth = 0, $args = array() ) {
    $output .= "</li>\n";
  }
}
