<?php
/**
 * Page recherche
 * @author        Gaël Poupard
 * @link          www.ffoodd.fr
 *
 * @note Améliorations trouvées sur GeekPress et Alsacréations
 * @see http://www.geekpress.fr/wordpress/astuce/mettre-en-evidence-les-termes-dans-les-resultats-de-recherche-725/
 * @author Jonathan Buttigieg
 * @see http://www.alsacreations.com/tuto/lire/1181-wordpress-ameliorer-affichage-resultats-de-recherche.html
 * @author Geoffrey Crofte
 * @see https://twitter.com/geoffrey_crofte
 */
get_header(); ?>

<?php if ( have_posts() ) { ?>

  <?php global $wp_query;
  $count = $wp_query->found_posts;
  if ( $count > 1 ) {
    echo '<h1>';
    echo sprintf( __('%1$s search results for %2$s', 'ffeeeedd' ), $count, get_search_query() );
    echo '</h1>';
  } elseif ( $count == 1 ) {
    echo '<h1>';
    echo sprintf( __('A single search result for %1$s', 'ffeeeedd' ), get_search_query() );
    echo '</h1>';
  } ?>

  <ol class="posts-list">
    <?php while ( have_posts() ) { the_post();
      $keys = implode( '|', explode( ' ', get_search_query() ) );
      $title = preg_replace( '/(' . $keys . ')/iu', '<mark class="search-term inbl">\0</mark>', get_the_title() );
      $excerpt = preg_replace( '/(' . $keys . ')/iu', '<mark class="search-term inbl">\0</mark>', get_the_excerpt() );
    ?>
    <li <?php post_class( 'mb2 line' ); ?>>
      <article itemscope itemtype="http://schema.org/Article">
        <h2 itemprop="name">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark" itemprop="url" tabindex="-1"><?php echo $title ?></a>
        </h2>
        
        <div class="line txtleft">
          <div class="mod reportage">
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
    <h2><?php _e('Sorry, but nothing matched your search criteria.', 'ffeeeedd'); ?></h2>
    <p><?php _e('Do you want to try again with some different keywords ?', 'ffeeeedd'); ?></p>
    <?php get_search_form(); ?>
  <?php } ?>

<?php get_footer(); ?>
