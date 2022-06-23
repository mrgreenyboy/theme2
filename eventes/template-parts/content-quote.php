<?php
/**
 * Displays content for post format Quote
 *
 * @package  eventes
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="bsingle__post mb-50">
        <div class="bsingle__content quote-post">
            <div class="meta-info">
                <ul>
                    <li><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
                            <i class="far fa-user"></i><?php esc_html_e( 'By', 'eventes' ); ?>  <?php the_author(); ?> </a></li>
                       <li><i class="far fa-comments"></i> <?php echo comments_number(__('No Comments', 'eventes'), __('1 Comment', 'eventes'), __('% Comments', 'eventes'));?> </li>
                </ul>
            </div>
            <div class="quote-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/blockquote.png" alt="blockquote">
            </div>
            <h2><a href=""><?php $quote = rwmb_meta( 'eventeszc_post_quote' ); echo esc_html ($quote);?></a></h2>
        </div>
    </div>

</article>