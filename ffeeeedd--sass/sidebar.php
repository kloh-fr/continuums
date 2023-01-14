<?php
/**
 * La colonne latérale des pages
 * @author        Gaël Poupard
 * @link          www.ffoodd.fr
 *
 * En savoir plus : http://codex.wordpress.org/Template_Hierarchy
 *
 * @package       WordPress
 * @subpackage    ffeeeedd
 * @since         ffeeeedd 1.0
 */

// On vérifie si la colonne latérale est active; si elle ne l’est pas, on ne l’affiche pas.
if ( ! is_active_sidebar( 'pages' ) && ! function_exists( 'ffeeeedd__sommaire' ) ) {
  return;
} ?>

<aside class="print-hidden mt3" role="complementary">
  <?php if ( function_exists( 'ffeeeedd__sommaire' ) && is_single() ) {
    echo do_shortcode( '[sommaire]' );
  } ?>
  <?php if ( is_active_sidebar( 'pages' ) ) { dynamic_sidebar( 'pages' ); } ?>
</aside>
