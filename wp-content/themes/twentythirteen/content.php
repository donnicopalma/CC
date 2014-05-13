<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="bgcontsuperior">

			<h1 class="entry-title"><?php the_title(); ?></h1>

			<div class="entry-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
		</div>
		<?php endif; ?>
		<?php if ( is_single() ) : ?>
		<?php else : ?>
        <!-- Recuadro con hover -->
            
<div id="wrapper">
    <div class="new_content_back">
		<div class="new_content_front">
			<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			<?php endif; // is_single() ?></h1>
			
				
				<!-- <?php edit_post_link( __( 'Edit', 'twentythirteen' ),  '</span>' ); ?> -->
			<!-- .entry-meta -->
		<!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
			<?php the_excerpt(); ?>
		<!-- .entry-summary -->
		<?php else : ?>
		
			<div class="contenido_noticia">
				<div class="contescrito">
					<div class="subtitulo_contenedor">
						<h2>DETALLES</h2>
					</div>
					<div class="likes_redes">
					
					<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>
						<!-- <a href="https://twitter.com/share" class="twitter-share-button" url="" data-lang="en">Tweet</a> -->
<<<<<<< HEAD
						<?php
						
$source_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";  //This could be anything URL source including stripslashes($_POST['url'])
 
$url = "http://api.facebook.com/restserver.php?method=links.getStats&urls=".urlencode($source_url);
$xml = file_get_contents($url);
$xml = simplexml_load_string($xml);
$shares =  $xml->link_stat->share_count;
$likes =  $xml->link_stat->like_count;
$comments = $xml->link_stat->comment_count;
$total = $xml->link_stat->total_count;
$max = max($shares,$likes,$comments);
?></div>
=======
					</div>
>>>>>>> 2b0a75e0ebcd86ed2a0908e8f5eaaf444e5a0857
					<img alt="imagen 1" src="wp-content/themes/twentythirteen/images/lineadecorado.jpg"/>
					<p>Added by  
					<?php the_author_posts_link(); ?></p>
					
					<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
					<div>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
						<!-- .entry-content -->
					
						<?php endif; ?>
					<div class="content_categoria">
					
					<p>Categoría:</p>
					<?php
					$categories_list = get_the_category_list( __( ', ', 'twentythirteen' ) );
					if ( $categories_list ) {
						echo '<span class="categories-links">' . $categories_list . '</span>';
					}
					?>
					
					</div>
					</div>
					
					<div class="comentarios">
						<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="700" data-colorscheme="light"></div>
					</div>
				</div>
			</div>
			<div class="cajavcl"><h2 class="tilface" >Estado</h2>
				<div class="caja_interior_vcl">
					
					<?php setPostViews(get_the_ID()); ?>
					<?php echo getPostViews(get_the_ID()); ?>
				</div>
				<div class="caja_interior_vcl">
					<fb:comments-count href="<?php echo get_permalink($post->ID); ?>"></fb:comments-count> <div class="titulos_estado_sidebar" >comentarios</div>
				</div>
				<div class="caja_interior_vcl derecha_vcl">
					<?php
						$source_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";  //This could be anything URL source including stripslashes($_POST['url'])	 
						$url = "http://api.facebook.com/restserver.php?method=links.getStats&urls=".urlencode($source_url);
						$xml = file_get_contents($url);
						$xml = simplexml_load_string($xml);
						$shares =  $xml->link_stat->share_count;
						$likes =  $xml->link_stat->like_count;
						$comments = $xml->link_stat->comment_count;
						$total = $xml->link_stat->total_count;
						$max = max($shares,$likes,$comments);
						echo $total;
						?>
						<div class="titulos_estado_sidebar" >likes</div>
				</div>
			</div>
		</div>
</div>
    
<!-- END Recuadro con hover -->



</article><!-- #post -->
