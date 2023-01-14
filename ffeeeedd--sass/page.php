<?php
/**
 * Page standard
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

<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
  <article role="article" itemscope itemtype="http://schema.org/Article">
	<h1 itemprop="name"><?php the_title(); ?></h1>
  
   <?php if ( function_exists('ffeeeedd__ariane') && !is_front_page() ) {
     ffeeeedd__ariane();
   } ?>

	<div class="line txtleft" itemprop="articleBody">
		<?php the_content(); ?>

    <?php if ( get_post_meta( $post->ID, 'notes', true ) != '') { ?>
    <div class="mod reportage">
      <?php echo do_shortcode( get_post_meta( $post->ID, 'notes', true ) ); ?>
    </div>      
    <?php } ?>
	</div>

	<footer class="line txtleft">
		<div class="mod reportage">
          <?php if ( function_exists( 'ffeeeedd__partage' ) ) {
            ffeeeedd__partage();
          } ?>
        </div>
    </footer>
  </article>
<?php }
} ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>