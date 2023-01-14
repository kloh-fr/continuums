<?php
/**
 * La colonne latérale du blog
 * @author        Luc Poupard
 *
 * En savoir plus : http://codex.wordpress.org/Template_Hierarchy
 */

// On vérifie si la colonne latérale est active; si elle ne l’est pas, on ne l’affiche pas.
if ( ! is_active_sidebar( 'blog' ) ) {
  return;
} ?>

<aside class="table print-hidden mt3" role="complementary">
  <?php if ( is_active_sidebar( 'blog' ) ) { dynamic_sidebar( 'blog' ); } ?>
</aside>
