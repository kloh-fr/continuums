<?php
/**
 * Page d’archives
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

<?php if ( have_posts() ) { ?>

  <h1>
    <?php
      if ( is_day() ) :
        printf( __( 'Archive : %s', 'ffeeeedd' ), get_the_date() );
      elseif ( is_month() ) :
        printf( __( 'Archive : %s', 'ffeeeedd' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'ffeeeedd' ) ) );
      elseif ( is_year() ) :
        printf( __( 'Archive : %s', 'ffeeeedd' ), get_the_date( _x( 'Y', 'yearly archives date format', 'ffeeeedd' ) ) );
      else :
        _e( 'Archive', 'ffeeeedd' );
      endif;
    ?>
  </h1>

  <ol class="posts-list">
    <?php while ( have_posts() ) { the_post(); ?>
    <li <?php post_class( 'mb2 line' ); ?>>
      <article itemscope itemtype="http://schema.org/Article">
        <h2 itemprop="name">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark" itemprop="url" tabindex="-1"><?php the_title(); ?></a>
        </h2>
        
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
  <h1><?php _e( 'Nothing found.', 'ffeeeedd' ); ?></h1>
<?php } ?>

<?php get_sidebar( 'blog' ); ?>

<?php get_footer(); ?>
