<?php
/**
 * The default template for displaying destacados
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
		<div class="entry-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_single() ) : ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
        <!-- Recuadro con hover -->
        
        
        
<div id="wrapper">
    <div class="new_notice_back">
      <div class="new_notice_front">
        <h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		<?php endif; // is_single() ?></h1>
		
			<?php twentythirteen_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'twentythirteen' ),  '</span>' ); ?>
		<!-- .entry-meta -->
	<!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<?php the_excerpt(); ?>
	<!-- .entry-summary -->
	<?php else : ?>
    
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
    <!-- .entry-content -->
    
	<?php endif; ?>
      </div>
    </div>
   

</div>

</article><!-- #post -->
