<?php
/**
 * Template part for Header Top Bar.
 *
 * @package eventes
 */

$eventes_data = get_option('eventes_data'); ?>

<?php
$footer_copyright = $eventes_data['eventes__opt-copyright'];
?>
<?php if ( $footer_copyright == 1) : ?>


<div class="copyright-wrap pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-12">						
                            <div class="copyright-text text-center">
								<div class="footer-link">
                                    <?php echo wp_kses_post( $eventes_data['eventes__copyright_menufooter'] ); ?>
                                </div>  
								<p class="pt-50">
                        
									<?php echo wp_kses_post( $eventes_data['eventes__copyright'] ); ?>
								   
								</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 <?php endif; ?>