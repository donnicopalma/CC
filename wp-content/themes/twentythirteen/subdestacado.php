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
	
	

		<?php if ( is_single() ) : ?>
  <h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
        <!-- Recuadro con hover -->
        
        	<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		
          <?php
	$thumb_id = get_post_thumbnail_id();
	$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
	?>
		<?php endif; ?>
<div id="wrapper">
    <div class="new_content_back" style="background-image:url(<?php echo $thumb_url[0]; ?>)">
      <div class="new_content_front" >
      
          <div class="contenedor_notice_front">
          
            <div class="fecha_content_front"><?php twentythirteen_entry_date_modificado(); ?>
            </div>
            
            <div class="titulo_notice_front">
                <h1><a href="<?php the_permalink(); ?>" rel="bookmark">
                <?php the_title(); ?></a>
					<?php endif; // is_single() ?></h1>
                    
                        
                    <!-- .entry-meta -->
                <!-- .entry-header -->
            
                <?php if ( is_search() ) : // Only display Excerpts for Search ?>
                    <?php the_excerpt(); ?>
                <!-- .entry-summary -->
                <?php else : ?>
                
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
			<?php edit_post_link( __( 'Edit', 'twentythirteen' ),  '</span>' ); ?>
                <!-- .entry-content -->
                
            	<?php endif; ?>
            </div>
            
            <div class="redes_notice_front">
            </div>
                 
          </div>
      
    
    
    
      </div>
    </div>
   

</div>

</article><!-- #post -->
