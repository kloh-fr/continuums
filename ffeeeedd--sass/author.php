<?php
/**
 * Page d’archive d’un auteur
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

<?php if ( have_posts() ) { the_post(); ?>

  <?php if ( get_the_author_meta( 'description' ) ) { ?>
  <article itemscope itemtype="http://schema.org/Person">
    <h1><?php _e( 'Author', 'ffeeeedd' ); ?> : <span itemprop="name"><?php echo get_the_author() ; ?></span></h1>
    <?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
    
    <div class="line txtleft">
      <div class="mod reportage"><?php if ( get_the_author_meta( 'user_url' ) ) { ?>
        <p itemprop="description"><?php the_author_meta( 'description' ); ?></p>
      </div>
    </div>

    <a href="<?php echo esc_url( get_the_author_meta( 'user_url' ) ); ?>" itemprop="url"><?php _e( 'Website', 'ffeeeedd' ); ?></a>
    <?php } ?>
  </article>
  <?php } ?>

  <ol class="posts-list">
    <?php while ( have_posts() ) { the_post(); ?>
    <li <?php post_class( 'mb2 line' ); ?>>
      <article itemscope itemtype="http://schema.org/Article">
        <h3 itemprop="name">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark" itemprop="url" tabindex="-1"><?php the_title(); ?></a>
        </h3>
        
        <div class="line txtleft">
          <div class="mod reportage">
            <?php $excerpt = get_the_excerpt() ?>
            <p itemprop="description"><?php echo $excerpt ?></p>
          </div>
        </div>
        
        <footer><?php continuums_meta(); ?></footer>
      </article>
    </li>
    <?php } ?>
  </ol>

  <?php ffeeeedd__pagination(); ?>

  <?php } else { ?>
    <h1><?php echo get_the_author() ; ?> <?php _e( 'didn\'t write anything for now.', 'ffeeeedd' ); ?>.</h1>
  <?php } ?>

<?php get_footer(); ?>
