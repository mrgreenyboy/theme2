<?php
/**
 * Template part for Header Top Bar.
 *
 * @package eventes
 */

$eventes_data =get_option('eventes_data'); ?>

<div id="header-sticky" class="menu-area">
    <div class="container">
        <div class="second-menu">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3">
                    <div class="logo">
                        <!-- LOGO IMAGE -->
                        <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 268 x 60 pixels) -->
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand logo-black">
                            <?php if($eventes_data['eventes__opt-logo-standard']['url'] !== "") { ?>
                            <!-- Logo Standard -->
                            <img src="<?php echo esc_url( $eventes_data['eventes__opt-logo-standard']['url'] ); ?>" alt="<?php echo esc_attr( get_bloginfo('name') ); ?>" title="<?php echo esc_attr( get_bloginfo('description') ); ?>" />

                            <?php } else { ?>
                            <!-- Logo Text Default -->
                            <h1><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                            <?php } ?>
                        </a>
                    </div>
                </div>
				<?php if ( $eventes_data['eventes__opt-right-menu'] == 1) { ?>
						
                        <div class="col-xl-6 col-lg-9">
                    <div class="responsive"><i class="icon dripicons-align-right"></i></div>
                    <div class="main-menu text-right text-xl-center">
                        <nav id="mobile-menu">
                            <?php
									wp_nav_menu([
									   'theme_location'  => 'menu-1',
										'container_id' => 'cssmenu', 
										'walker' => new CSS_Menu_Maker_Walker()										
									]);
								  ?>
                        </nav>
                    </div>
                </div>
				  <div class="col-xl-3 text-right d-none d-xl-block">
					<div class="header-btn second-header-btn">  
                        <?php echo wp_kses_post( $eventes_data['eventes__right-menu'] ); ?>
                    </div>
                    </div>
						
						<?php } else { ?>
                            <!-- Logo Text Default -->
                               <div class="col-xl-9 col-lg-9">
                    <div class="responsive"><i class="icon dripicons-align-right"></i></div>
                    <div class="main-menu text-right text-xl-right">
                        <nav id="mobile-menu">
                            <?php
									wp_nav_menu([
									   'theme_location'  => 'menu-1',
										'container_id' => 'cssmenu', 
										'walker' => new CSS_Menu_Maker_Walker()										
									]);
								  ?>
                        </nav>
                    </div>
                </div>
							
                       <?php } ?>
					   
                
                
            </div>
        </div>
    </div>
</div>