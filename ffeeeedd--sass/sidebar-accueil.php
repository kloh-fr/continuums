<?php
/**
 * La colonne latérale de la page d’accueil
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
if ( ! is_active_sidebar( 'accueil' ) ) {
  return;
} ?>

<aside class="print-hidden mt3" role="complementary">
  <?php if ( is_active_sidebar( 'accueil' ) ) { dynamic_sidebar( 'accueil' ); } ?>
</aside>
