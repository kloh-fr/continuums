<?php
/**
 * Article
 * @author        Gaël Poupard
 * @link          www.ffoodd.fr
 *
 * En savoir plus : http://codex.wordpress.org/Template_Hierarchy
 *
 * @package       WordPress
 * @subpackage    ffeeeedd
 * @since         ffeeeedd 1.0
 * @see           http://schema.org/Article
 * @see           http://php.net/manual/fr/function.date.php
 */
get_header(); ?>


<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
  <article role="article" itemscope itemtype="http://schema.org/Article">
    
    <h1 itemprop="name" class="entry-title"><?php the_title(); ?></h1>

      <div class="line txtleft" itemprop="articleBody">
        <div class="mod reportage">
          <?php echo do_shortcode( '[continuums-son id="$post->ID"]' ) ?> 

          <h2>Transcription</h2>
          <?php the_content(); ?>
        </div>

        <?php if ( get_post_meta( $post->ID, 'notes', true ) != '') { ?>
        <div class="mod reportage">
          <?php echo do_shortcode( get_post_meta( $post->ID, 'notes', true ) ); ?>
        </div>      
        <?php } ?>
      </div>
  </article>

  <?php }
} ?>

<?php get_footer(); ?>
