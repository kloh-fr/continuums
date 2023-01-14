<?php
/**
 * Thème ffeeeedd
 * @author        Gaël Poupard
 * @link          www.ffoodd.fr
 *
 * En savoir plus : http://codex.wordpress.org/Template_Hierarchy
 *
 * @package       WordPress
 * @subpackage    ffeeeedd
 * @since         ffeeeedd 1.0
 *
 */ ?><!DOCTYPE html>
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="ie8 no-js"><![endif]-->
<!--[if gte IE 9]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
<meta charset="utf-8" />
<title><?php wp_title( '-', true, 'right' ); ?></title>
<base href="<?php echo esc_url( home_url() ); ?>">
<!-- La meta viewport la plus adaptée actuellement // @see : http://blog.goetter.fr/post/64389260648/windows-phone-8-0-orientation-et-initial-scale -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php
// Test
if ( function_exists( 'continuums_social' ) ) {
  continuums_social();
}
// Insertion des balises Dublin Core
if ( function_exists( 'continuums_dc' ) ) {
  continuums_dc();
}
// Insertion des balises Open Graph
if ( function_exists( 'continuums_opengraph' ) ) {
  continuums_opengraph();
}
// Insertion des balises Twitter Cards
if ( function_exists( 'continuums_twittercards' ) ) {
  continuums_twittercards();
} ?>
<!--Favicônes -->
<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160" />
<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
<meta name="msapplication-TileColor" content="#1A171B" />
<meta name="msapplication-TileImage" content="/mstile-144x144.png" />
<!-- / Fin des favicônes -->
<?php wp_head(); ?>
<link rel="pingback" href="<?php esc_url( bloginfo( 'pingback_url' ) ); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php esc_attr( bloginfo( 'name' ) ); ?> | <?php _e( 'RSS feed', 'ffeeeedd' ); ?>" href="<?php esc_url( bloginfo( 'rss2_url' ) ); ?>">
</head>

<body id="top" <?php body_class(); ?> role="document" itemscope itemtype="http://schema.org/WebPage">
<div id="page" class="txtcenter">

  <ul class="mw--site center mb0 mt0 p-reset small print-hidden">
    <li class="inbl m-reset"><a class="skip" href="<?php echo get_permalink(); ?>#nav"><?php _e( 'Skip to navigation', 'ffeeeedd' ); ?></a></li>
    <li class="inbl m-reset"><a class="skip" href="<?php echo get_permalink(); ?>#content"><?php _e( 'Skip to content', 'ffeeeedd' ); ?></a></li>
    <?php if ( is_singular( 'post' ) && function_exists( 'ffeeeedd__sommaire' ) ) { ?>
    <li class="inbl m-reset"><a class="skip" href="<?php echo get_permalink(); ?>#toc"><?php _e( 'Skip to table of content', 'ffeeeedd' ); ?></a></li>
    <?php } ?>
  </ul>

  <header class="mw--site center print-hidden" role="banner">
    <?php if ( is_front_page() ) { ?>
      <h1 itemprop="name"><a href="<?php echo esc_url( home_url() ); ?>" itemprop="url"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/continuums.svg" width="400" height="68" alt="<?php bloginfo( 'name' ); ?>" onerror="this.removeAttribute('onerror'); this.src='<?php echo get_stylesheet_directory_uri(); ?>/img/continuums.png'" /></a></h1>
    <?php } else { ?>
      <div class="h1-like" itemprop="name"><a href="<?php echo esc_url( home_url() ); ?>" itemprop="url"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/continuums.svg" width="400" height="68" alt="<?php bloginfo( 'name' ); ?>" onerror="this.removeAttribute('onerror'); this.src='<?php echo get_stylesheet_directory_uri(); ?>/img/continuums.png'" /></a></div>
    <?php } ?>
    <span itemprop="description">Deux amis. Deux vélos.<br /> Une dérive éthique et plasticienne jusqu'au Cap Nord.</span>
  </header><!-- / banner -->

  <nav class="center print-hidden" id="nav" role="navigation" aria-labelledby="nav-title" <?php if ( is_admin() ) { echo 'data-scroll-header'; } ?>>
    <p class="visually-hidden" id="nav-title"><?php _e( 'Main navigation', 'ffeeeedd' ); ?></p>
    <a class="nav-open" href="<?php echo get_permalink(); ?>#top"></a>
    <a class="nav-close" href="<?php echo get_permalink(); ?>#"></a>
    <?php if ( has_nav_menu( 'primary' ) ) {
      wp_nav_menu( array(
        'theme_location' => 'primary',
        'items_wrap' => '<ul class="%2$s center inbl">%3$s</ul>',
        'container' => false)
      );
    } else {
      wp_dropdown_pages( array( 'depth' => 1 ) );
    } ?>
  </nav><!-- / #nav -->

  <main id="content" class="mw--site center clear" role="main" itemprop="mainContentOfPage">
    
