<?php
/**
 * Post metaboxes configuration
 *
 * @package  eventes.
 */

add_filter( 'rwmb_meta_boxes', 'eventeszc_register_meta_boxes' );
function eventeszc_register_meta_boxes( $meta_boxes ) {
    $prefix = 'eventeszc_';
	$meta_boxes[] = array(
        'id'         => 'Quote',
        'title'      => esc_html__( 'Post Quote', 'eventes' ),
        'post_types' => 'post',
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(          
			 array(
                'name'  => esc_html__( 'Quote', 'eventes' ),
                'desc'  => esc_html__( 'Quote Text Add Here', 'eventes' ),
                'id'    => $prefix . 'post_quote',
                 'type'    => 'textarea',
            ),
        )
    );
	$meta_boxes[] = array(
        'id'         => 'Link',
        'title'      => esc_html__( 'Post Link', 'eventes' ),
        'post_types' => 'post',
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(          
			 array(
                'name'  => esc_html__( 'Link', 'eventes' ),
                'desc'  => esc_html__( 'Link Add Here', 'eventes' ),
                'id'    => $prefix . 'post_link',
                 'type'    => 'text',
            ),
        )
    );
    $meta_boxes[] = array(
        'id'         => 'blog-sections',
        'title'      => esc_html__( 'Post Gallery', 'eventes' ),
        'post_types' => 'post',
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(
            array(
                'name'  => esc_html__( 'Gallery', 'eventes' ),
                'desc'  => '',
                'id'    => $prefix . 'post_gallery',
                'type'             => 'image_upload',

				// Delete file from Media Library when remove it from post meta?
				// Note: it might affect other posts if you use same file for multiple posts
				'force_delete'     => false,

				// Maximum file uploads.
				'max_file_uploads' => 10,

				// Do not show how many files uploaded/remaining.
				'max_status'       => 'false',

				// Image size that displays in the edit page.
				'image_size'       => 'thumbnail',
            ),
			
        )
    );
	$meta_boxes[] = array(
        'id'         => 'video-sections',
        'title'      => esc_html__( 'Post Video', 'eventes' ),
        'post_types' => 'post',
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(          
			 array(
                'name'  => esc_html__( 'Video', 'eventes' ),
                'desc'  => esc_html__( 'Youtube & Viemo Url Add Here', 'eventes' ),
                'id'    => $prefix . 'post_video',
                'type'  => 'text',

				// Input size
				'size'  => 30,
            ),
        )
    );
	$meta_boxes[] = array(
        'id'         => 'audio-sections',
        'title'      => esc_html__( 'Post Audio', 'eventes' ),
        'post_types' => 'post',
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(          
			 array(
                'name'  => esc_html__( 'Audio', 'eventes' ),
                'desc'  => esc_html__( 'Soundcloud Embed Ifram Add Here', 'eventes' ),
                'id'    => $prefix . 'post_audio',
                'type'  => 'text',

				// Input size
				'size'  => 30,
            ),
        )
    );
	

	
	
	


    // Add more meta boxes if you want
    // $meta_boxes[] = ...

    return $meta_boxes;
}