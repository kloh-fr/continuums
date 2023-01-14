<?php
/**
 * Template Name: Accueil
 * Page d'accueil
 * @author        Gaël Poupard
 * @link          www.ffoodd.fr
 *
 * En savoir plus : http://codex.wordpress.org/Template_Hierarchy
 *
 * @package       WordPress
 * @subpackage    ffeeeedd
 * @since         ffeeeedd 1.0
 */
get_header(); ?>

<div class="line txtleft">
	<div class="mod reportage">
		<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
		<article role="article" itemscope itemtype="http://schema.org/Article">
			<div itemprop="articleBody"><?php the_content(); ?></div>
		</article>
		<?php }
		} ?>
	</div>
</div>


<?php get_sidebar( 'accueil' ); ?>

<?php get_footer(); ?>