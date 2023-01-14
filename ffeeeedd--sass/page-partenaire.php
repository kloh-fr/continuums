<?php
/**
 * Template Name: Partenaires
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
    </div>

    <?php
    $query = array( 'post_type' => 'continuums_partner', 'posts_per_page' => -1 );
    $partenaires = new WP_Query( $query );
    while ( $partenaires -> have_posts() ) : $partenaires -> the_post(); ?>

      <h2><?php the_title(); ?></h2>

      <div class="line txtleft">
        <div class="mod reportage partenaires">
          <a href="<?php the_field('site_web'); ?>" title="<?php the_title(); ?>"><?php
          $logo = get_field( 'logo' );
          if ( !empty($logo) ):
            $logo_url = $logo['url'];
            $logo_alt = $logo['alt'];
            $logo_width = $logo['width'];
            $logo_height = $logo['height'];

            echo '<img src="' . $logo_url . '" alt="' . get_the_title() . '" width="' . $logo_width . '" height="' . $logo_height . '" />';
          endif; ?></a>
          
          <div class="presentation">
            <?php the_field('presentation'); ?>
          </div>

          <?php the_field('pourquoi_partenaire'); ?>

          <a href="<?php the_field('site_web'); ?>"><?php _e( 'Aller sur le site de', 'ffeeeedd' ); ?> <?php the_title(); ?></a>
        </div>
      </div>

    <?php endwhile; ?>

  </article>
<?php }
} ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>