<?php
/**
 * Template Name: Itinéraire
 * @author        Luc Poupard
 * @link          www.kloh.ch
 *
 * En savoir plus : http://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>

<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
  <article role="article" itemscope itemtype="http://schema.org/Article">
	<h1 itemprop="name"><?php the_title(); ?></h1>
  
   <?php if ( function_exists('ffeeeedd__ariane') && !is_front_page() ) {
     ffeeeedd__ariane();
   } ?>

	<div class="line txtleft" itemprop="articleBody">
		<div class="mod reportage">
      <?php the_content(); ?>
    </div>

    <div class="mod reportage">
      <iframe width="100%" height="800px" frameBorder="0" src="http://umap.openstreetmap.fr/fr/map/continuums_4386?scaleControl=true&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=false&datalayersControl=false&onLoadPanel=none"></iframe><p><a href="http://umap.openstreetmap.fr/fr/map/continuums_4386">Voir en plein écran</a></p>
    </div>

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