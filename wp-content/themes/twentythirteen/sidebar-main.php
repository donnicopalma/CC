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
				<!--
				<div class="gmap">
					<h2>Mapa</h2>
					<iframe width="280" height="170" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.cl/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=Eliodoro+Ya%C3%B1ez+1595,+Santiago,+Providencia&amp;aq=0&amp;oq=Eliodoro+Ya%C3%B1ez+1595,+Santiago+Providenc&amp;sll=-33.432516,-70.61486&amp;sspn=0.013269,0.026157&amp;ie=UTF8&amp;hq=&amp;hnear=Eliodoro+Ya%C3%B1ez+1595,+Providencia,+Santiago,+Regi%C3%B3n+Metropolitana&amp;t=m&amp;ll=-33.432587,-70.614882&amp;spn=0.012177,0.023947&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.cl/maps?f=q&amp;source=embed&amp;hl=es-419&amp;geocode=&amp;q=Eliodoro+Ya%C3%B1ez+1595,+Santiago,+Providencia&amp;aq=0&amp;oq=Eliodoro+Ya%C3%B1ez+1595,+Santiago+Providenc&amp;sll=-33.432516,-70.61486&amp;sspn=0.013269,0.026157&amp;ie=UTF8&amp;hq=&amp;hnear=Eliodoro+Ya%C3%B1ez+1595,+Providencia,+Santiago,+Regi%C3%B3n+Metropolitana&amp;t=m&amp;ll=-33.432587,-70.614882&amp;spn=0.012177,0.023947&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>
					<footer>
						Eliodoro Yañez N°1595 piso 5<br/>Teléfono: 23540505
					</footer>
				</div>
				-->
                
				<div class="redesfooter">
					<h2>Redes</h2>
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
				<div id="carousel1">
					<img alt="imagen 1" src="wp-content/themes/twentythirteen/images/facebook.png"/>
					<img alt="imagen 2" src="wp-content/themes/twentythirteen/images/twitter.png"/>
					<img alt="imagen 3" src="wp-content/themes/twentythirteen/images/google+.png"/>
					<img alt="imagen 4" src="wp-content/themes/twentythirteen/images/youtube.png"/>
				</div>
				</div>
				
			</div><!-- .widget-area -->
			
	</div><!-- #secondary -->
<?php endif; ?>