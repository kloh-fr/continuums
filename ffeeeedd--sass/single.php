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
        <?php the_content(); ?>

        <?php if ( get_post_meta( $post->ID, 'notes', true ) != '') { ?>
        <div class="mod reportage">
          <?php echo do_shortcode( get_post_meta( $post->ID, 'notes', true ) ); ?>
        </div>      
        <?php } ?>
      </div>

      <footer>
        <?php continuums_meta(); ?>

        <?php if ( function_exists( 'ffeeeedd__partage' ) ) {
          ffeeeedd__partage();
        } ?>
      </footer> 

    <?php comments_template( '', true ); ?>
  </article>

  <?php get_sidebar( 'blog' );  
  }
} ?>

<?php get_footer(); ?>
