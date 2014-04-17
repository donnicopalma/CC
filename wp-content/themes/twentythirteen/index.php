<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
	<div class="destacados">
        <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
                <?php /* The loop */ ?>
                <?php $contar_rectangular = 0; ?>
                <?php while ( have_posts()  & $contar_rectangular<'2') : the_post(); ?>
                <?php  ++$contar_rectangular; ?>
                    <?php get_template_part( 'destacados', get_post_format() ); ?>
                <?php endwhile; ?>
            </div><!-- #DESTACADOS_rectangulares -->
        </div><!-- #primary -->
    
        <div id="second" class="content-area">
            <div id="content" class="site-content" role="main">
                <?php /* The loop */ ?>
                <?php $contar_cuadrado = 0; ?>
                <?php while ( have_posts() & $contar_cuadrado<'4') : the_post(); ?>
                <?php  ++$contar_cuadrado; ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; ?>
            </div><!-- #DESTACADOS_cuadrados -->
        </div><!-- #second -->
	</div>
    <div class="medio">
        <div id="contenedor">
		<h2>Recientes</h2>
		<img src="wp-content/themes/twentythirteen/images/lineadecorado.jpg"/>
        <div class="noticias_index">
            <div id="third" class="content-area">
                <div id="content" class="site-content" role="main">
                <?php if ( have_posts() ) : ?>
                    <?php /* The loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', get_post_format() ); ?>
                    <?php endwhile; ?>
        
                    
        
                <?php else : ?>
                    <?php get_template_part( 'content', 'none' ); ?>
                <?php endif; ?>
        
                </div><!-- #content -->
            </div><!-- #third -->
        </div>
		<div class="colaboradores">
			<img id="decorado" src="wp-content/themes/twentythirteen/images/decoradocolaboradores.jpg"/>
			<div class="titulo_colaborador">
				<h2>Colaboradores:</h2>
			</div>
				<div id="carousel1">
					<img alt="imagen 1" src="wp-content/themes/twentythirteen/images/facebook.png"/>
					<img alt="imagen 2" src="wp-content/themes/twentythirteen/images/twitter.png"/>
					<img alt="imagen 3" src="wp-content/themes/twentythirteen/images/google+.png"/>
					<img alt="imagen 4" src="wp-content/themes/twentythirteen/images/youtube.png"/>
				</div>
		</div> 
		</div>
	<div class="noticias_index"><?php get_sidebar(); ?></div>
      </div>
<?php get_footer(); ?>