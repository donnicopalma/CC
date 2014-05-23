<?php
/**
 * The sidebar containing the footer widget area
 *
 * If no active widgets in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="secondary" class="sidebar-container" role="complementary">
			<div class="widget-area">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php endif; ?>			
    

                <div class="participantes">
					<div class="escuelas">
						<h3>Escuelas</h3>
							<img alt="imagen 1" src="wp-content/themes/twentythirteen/images/escinformatica.jpg"/>
							<img alt="imagen 1" src="wp-content/themes/twentythirteen/images/esccomunicaciones.jpg"/>
					</div>
				</div>
				<div class="redesfooter">
					<h2>Redes Clab</h2>
					<div class="redes1">
						<img class="redespng" src="wp-content/themes/twentythirteen/images/facebook.png"/>
					</div>
					<div class="redes1">
						<img class="redespng" src="wp-content/themes/twentythirteen/images/twitter.png"/>
					</div>
					<div class="redes1">
						<img class="redespng" src="wp-content/themes/twentythirteen/images/google+.png"/>
					</div>
					<div class="redes1">
						<img class="redespng" src="wp-content/themes/twentythirteen/images/youtube.png"/>
					</div>
					
				</div>
				<div class="redesfooter">
					<h2>Redes CITT</h2>
					<div class="redes1">
						<img class="redespng" src="wp-content/themes/twentythirteen/images/facebook.png"/>
					</div>
					<div class="redes1">
						<img class="redespng" src="wp-content/themes/twentythirteen/images/twitter.png"/>
					</div>
					<div class="redes1">
						<img class="redespng" src="wp-content/themes/twentythirteen/images/google+.png"/>
					</div>
					<div class="redes1">
						<img class="redespng" src="wp-content/themes/twentythirteen/images/youtube.png"/>
					</div>
					
				</div>
			</div><!-- .widget-area -->
			
	</div><!-- #secondary -->
