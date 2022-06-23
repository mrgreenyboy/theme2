<?php
    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/eventes/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "eventes_data";


    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
      'opt_name' => 'eventes_data',
      'dev_mode' => false,
      'use_cdn' => true,
      'display_name' => $theme->get( 'Name' ),
      'display_version' => $theme->get( 'Version' ),
      'page_slug' => '_options',
      'page_title' => esc_html__('Theme Options', 'eventes'),
      'admin_bar' => true,
      'menu_type' => 'menu',
      'menu_title' => esc_html__('Theme Options', 'eventes'),
      'admin_bar_icon' => 'dashicons-admin-generic',
      'allow_sub_menu' => true,
      'page_parent_post_type' => 'your_post_type',
      'customizer' => true,
      'hints' => array(
        'icon'          => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_size'     => 'normal',
        'tip_style'     => array(
          'color' => 'dark',
        ),
        'tip_position' => array(
          'my' => 'top left',
          'at' => 'bottom right',
        ),
        'tip_effect' => array(
          'show' => array(
            'duration' => '500',
            'event'    => 'mouseover',
          ),
          'hide' => array(
            'duration' => '500',
            'event'    => 'mouseleave unfocus',
          ),
        ),
      ),
      'output' => true,
      'output_tag' => true,
      'settings_api' => true,
      'cdn_check_time' => '1440',
      'compiler' => true,
      'page_permissions' => 'manage_options',
      'save_defaults' => true,
      'show_import_export' => true,
      'transient_time' => '3400',
      'network_sites' => true,
      'disable_tracking' => true,
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    // General Settings
    Redux::setSection( $opt_name, array(
      'title'  => esc_html__( 'General Settings', 'eventes' ),
      'id'     => 'eventes__section-general',
      'icon'   => 'el el-cogs',
      'fields' => array(
        array(
          'id'        => 'eventes__opt-logo-standard',
          'type'      => 'media',
          'url'       => true,
          'title'     => esc_html__('Logo Image', 'eventes'),
          'compiler'  => 'true',
          'desc'      => esc_html__('Upload your image or remove image', 'eventes'),
          'default'   => array(
            'url'     => get_template_directory_uri() . '/inc/assets/images/logo.png'),
        ),
		 



      )
    ) );


	// Header Right Menu

    Redux::setSection( $opt_name, array(
      'title'  => esc_html__( 'Header Right Menu', 'eventes' ),
      'id'     => 'eventes__subsection-right-menu',
      'subsection' => true,
      'fields' => array(
          array(
            'id'        => 'eventes__opt-right-menu',
            'type'      => 'switch',
            'title'     => esc_html__('Switch', 'eventes'),
			 'default'   => 2,
            'on'        => esc_html__( 'Yes', 'eventes' ),
            'off'       => esc_html__( 'No', 'eventes' ),
          ),

          array(
            'id'      => 'eventes__right-menu',
            'type'    => 'editor',
            'title'   => esc_html__( 'Right Menu Text', 'eventes' ),
			'default'   => 1,
            'default' => '<a href="#" class="btn">Get a Quote</a>',
            'required'  => array('eventes__opt-right-menu', '=', '1'),
          ),
      )
    ) );

	



	 ///////////////////////////////////////////////////////// Theme color///////////////////////////////////////
    Redux::setSection( $opt_name, array(
      'title'  => esc_html__( 'Theme Colors', 'eventes' ),
      'id'     => 'eventes__section-color',
      'icon'   => 'el el-arrow-down',
      'fields' => array(
      )
    ) );

	Redux::setSection( $opt_name, array(
      'title'  => esc_html__( 'General Theme Colors', 'eventes' ),
      'id'     => 'eventes__subsection-general-theme-color',
	  'subsection' => true,
      'fields' => array(
	   array(
          'id'        => 'eventes__opt-body-text-color',
          'type'      => 'color',
          'title'     => esc_html__('Body Text Color', 'eventes'),
		   'default' => '#6e6e6e',
		  'output'  => array('body,.widget_categories a'),
		  'subtitle' => esc_html__('Theme Text Body Color Manage from the Redux Controller', 'eventes'),
        ),
		 array(
			'id'       => 'opt-color-blog',
			'type'     => 'background',
			'output'   => array('.site-content'),
			'title'    => esc_html__('Page Background Color', 'eventes'),
			'subtitle' => esc_html__('Pick a Page Background color for the theme', 'eventes'),
            'default'  => array(
            'background-color'    => '#ffffff',
          ),
		),
		 array(
			'id'       => 'opt-color-breadcums',
			'type'     => 'background',
			'output'  => array('.breadcrumb-area'),
			'title'    => esc_html__('Breadcums Background Color', 'eventes'),
			'subtitle' => esc_html__('Pick a Breadcums background color for the theme', 'eventes'),
			'default'               => array(
            'background-color'    => '#1a237e',
			'background-image'    => get_template_directory_uri() . '/inc/assets/images/breadcrumb_bg.jpg',

          ),
		),
		array(
			'id'       => 'opt-color-footer',
			'type'     => 'background',
			'output'  => array('.footer-bg'),
			'title'    => esc_html__('Footer Background Color', 'eventes'),
			'subtitle' => esc_html__('Pick a Footer background color for the theme', 'eventes'),
			'default'               => array(
            'background-color'    => '#1a237e',
          ),
		),
		array(
			'id'        => 'opt-color-bakground',
			'type'      => 'color',
			'title'     => esc_html__('Color', 'eventes'),
			'subtitle'  => esc_html__('Pick a background color.', 'eventes'),
			'default'   => '#ff007a',
			'output'    => array(
				'background-color' => 'choose-area .btn,.about-area .btn,.single-post:hover .blog-btn,.about-title p span,.wpcf7-form .btn,#scrollUp,.s-btn:hover,.pricing-box.active .pricing-btn .btn,.pricing-btn .btn:hover',
				'color'            => '.section-title span,.breadcrumb > .active,.elementor-widget-Elementor_title-bar2-widget .section-title span,.comment-text .avatar-name span',
				'border-color'     => '.pricing-box.active .pricing-btn .btn,.pricing-btn .btn:hover,.s-btn:hover,.s-features:hover .features-icon img,.f-cta-area.gray-bg'

			)
		),

		array(
			'id'        => 'opt-color-blue',
			'type'      => 'color',
			'title'     => esc_html__('Color Blue', 'eventes'),
			'subtitle'  => esc_html__('Pick a background color.', 'eventes'),
			'default'   => '#ff007a',
			'output'    => array(
				'background-color' => '.comment-form .submit:hover,.comment-text .avatar-name .comment-reply:hover a,.pricing-box.active,.about-text,.section-title h2::before,.bsingle__content .blog__btn .btn:hover,.search-form .search-submit,.widget-social a:hover',
				'color'            => '.b-meta ul li.corpo a,.main-menu ul li:hover > a,.s-single-services:hover .second-services-content h5,.s-single-services:hover .second-services-content a',
				'border-color'     => '.bsingle__content .blog__btn .btn,.comment-form .submit,.footer-bg'
			)
		),
		array(
			'id'        => 'opt-color-black',
			'type'      => 'color',
			'title'     => esc_html__('Color Black', 'eventes'),
			'subtitle'  => esc_html__('Pick a background color.', 'eventes'),
			'default'   => '#002691',
			'output'    => array(
				'color'            => '.elementor-widget-Elementor_title-bar2-widget .section-title h2',
			)
		),
      )
    ) );






	 /////////////////////////////////////////////////footer ///////////////////////////////////////////////
    Redux::setSection( $opt_name, array(
      'title'  => esc_html__( 'Theme Footer', 'eventes' ),
      'id'     => 'eventes__section-footer',
      'icon'   => 'el el-arrow-down',
      'fields' => array(
      )
    ) );
	// Footer Text
    Redux::setSection( $opt_name, array(
      'title'  => esc_html__( 'Footer Text', 'eventes' ),
      'id'     => 'eventes__subsection-footer-text',
      'subsection' => true,
      'fields' => array(
          array(
            'id'        => 'eventes__opt-footer-text',
            'type'      => 'switch',
            'title'     => esc_html__('Switch', 'eventes'),
			 'default'   => 2,
            'on'        => esc_html__( 'Yes', 'eventes' ),
            'off'       => esc_html__( 'No', 'eventes' ),
          ),
		  array(
            'id'      => 'eventes__footer-logo',
            'type'      => 'media',
          'url'       => true,
          'title'     => esc_html__('Logo Image', 'eventes'),
          'compiler'  => 'true',
          'desc'      => esc_html__('Upload your image or remove image', 'eventes'),
          'default'   => array(
            'url'     => get_template_directory_uri() . '/inc/assets/images/logo.png'),
            'required'  => array('eventes__opt-footer-text', '=', '1'),
          ),
		 
          array(
            'id'      => 'eventes__footer-content',
            'type'    => 'textarea',
            'title'   => esc_html__( 'Footer Content', 'eventes' ),
			'default'   => 1,
             'default' => '<p>The issue with any content strategy is time. Time to sit down and think about what kind of content should be created, time to stop and write, or record, edit and publish, and time to engage with your audience to promote the content you created.</p>',
            'required'  => array('eventes__opt-footer-text', '=', '1'),
          ),
		  
		 
      )
    ) );


    // Footer Copyright
    Redux::setSection( $opt_name, array(
      'title'  => esc_html__( 'Copyright', 'eventes' ),
      'id'     => 'eventes__subsection-footer-copyright',
      'subsection' => true,
      'fields' => array(
          array(
            'id'        => 'eventes__opt-copyright',
            'type'      => 'switch',
            'title'     => esc_html__('Switch', 'eventes'),
			 'default'   => 2,
            'on'        => esc_html__( 'Yes', 'eventes' ),
            'off'       => esc_html__( 'No', 'eventes' ),
          ),
		  
		  array(
            'id'      => 'eventes__copyright_menufooter',
            'type'    => 'textarea',
            'title'   => esc_html__( 'Footer Menu', 'eventes' ),
			'default'   => 1,
            'default' => '
					<ul>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Eventime</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">Tickets</a></li>
                                        <li><a href="#">Venue</a></li>
                                    </ul>
			',
            'required'  => array('eventes__opt-copyright', '=', '1'),
          ),
		  
          array(
            'id'      => 'eventes__copyright',
            'type'    => 'text',
            'title'   => esc_html__( 'Copyright Textarea', 'eventes' ),
			'default'   => 1,
            'default' => '&copy; eventes 2019',
            'required'  => array('eventes__opt-copyright', '=', '1'),
          ),
      )
    ) );

	 //  footer Social Media icons
    Redux::setSection( $opt_name, array(
      'title'  => esc_html__( 'Social Media', 'eventes' ),
      'id'     => 'eventes__section-footer--social-media',
	  'subsection' => true,
      'fields' => array(
	  array(
          'id'        => 'eventes__opt-social-in-footer',
          'type'      => 'switch',
          'title'     => esc_html__('Switch', 'eventes'),
          'default'   => 1,
          'on'        => esc_html__( 'Yes', 'eventes' ),
          'off'       => esc_html__( 'No', 'eventes' ),
        ),
        array(
          'id'       => 'eventes__opt-social-media',
          'type'     => 'sortable',
          'title'    => esc_html__( 'Social Media Links', 'eventes' ),
          'label'    => true,
          'mode'     => 'text',
          'options'  => array(
            esc_html__( 'Facebook URL', 'eventes' ) => '#',
            esc_html__( 'Twitter URL', 'eventes' )   => '#',
            esc_html__( 'LinkedIn URL', 'eventes' ) => '#',
            esc_html__( 'Google+ URL', 'eventes' ) => '#',
            esc_html__( 'Instagram URL', 'eventes' ) => '',
            esc_html__( 'Github URL', 'eventes' ) => '',
            esc_html__( 'VK URL', 'eventes' ) => '',
            esc_html__( 'YouTube URL', 'eventes' ) => '#',
            esc_html__( 'Pinterest URL', 'eventes' ) => '#',
            esc_html__( 'Tumblr URL', 'eventes' ) => '',
            esc_html__( 'Dribbble URL', 'eventes' ) => '',
            esc_html__( 'Vimeo URL', 'eventes' ) => '',
            esc_html__( 'Flickr URL', 'eventes' ) => '',
            esc_html__( 'Yelp URL', 'eventes' ) => '',
          ),
          'default'  => array(
            esc_html__( 'Facebook URL', 'eventes' )   => '',
            esc_html__( 'Twitter URL', 'eventes' )   => '',
            esc_html__( 'LinkedIn URL', 'eventes' ) => '',
            esc_html__( 'Google+ URL', 'eventes' ) => '',
            esc_html__( 'Instagram URL', 'eventes' ) => '',
            esc_html__( 'Github URL', 'eventes' ) => '',
            esc_html__( 'VK URL', 'eventes' ) => '',
            esc_html__( 'YouTube URL', 'eventes' ) => '',
            esc_html__( 'Pinterest URL', 'eventes' ) => '',
            esc_html__( 'Tumblr URL', 'eventes' ) => '',
            esc_html__( 'Dribbble URL', 'eventes' ) => '',
            esc_html__( 'Vimeo URL', 'eventes' ) => '',
            esc_html__( 'Flickr URL', 'eventes' ) => '',
            esc_html__( 'Yelp URL', 'eventes' ) => '',
          ),
        ),
      )
    ) );

	



    // Custom CSS
    Redux::setSection( $opt_name, array(
      'title'  => esc_html__( 'Custom CSS', 'eventes' ),
      'id'     => 'eventes__section-custom-css',
      'icon'   => 'el el-css',
      'fields' => array(
        array(
          'id'        => 'eventes__opt-custom-css',
          'type'      => 'ace_editor',
          'title'     => esc_html__('CSS Code', 'eventes'),
          'subtitle'  => esc_html__('Paste your CSS code here.', 'eventes'),
          'mode'      => 'css',
          'theme'     => 'monokai',
          'desc'      => 'Any custom CSS can be added here, it will override the theme CSS.',
          'default'   => ""
        ),
      )
    ) );

    /*
     * <--- END SECTIONS--->
     */
