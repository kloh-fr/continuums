  </main><!-- / #content -->

  <div id="footer-partenaires" class="center print-hidden txtcenter">
    <p>Ils soutiennent notre projet</p>
    <ul>
    <?php
    $query = array( 'post_type' => 'continuums_partner', 'posts_per_page' => -1 );
    $partenaires = new WP_Query( $query );
    while ( $partenaires -> have_posts() ) : $partenaires -> the_post(); ?>
      <li><a href="<?php the_field('site_web'); ?>" title="<?php the_title(); ?>"><?php
      $logo = get_field( 'logo_min' );
      if ( !empty($logo) ):
        $logo_url = $logo['url'];
        $logo_alt = $logo['alt'];
        $logo_width = $logo['width'];
        $logo_height = $logo['height'];
        echo '<img src="' . $logo_url . '" alt="' . get_the_title() . '" width="' . $logo_width . '" height="' . $logo_height . '" />';
      endif; ?></a></li>
    <?php endwhile; ?>
    </ul>
  </div>

	<footer id="footer" class="mw--site center txtcenter mb2" role="contentinfo">
    <?php _e( 'By default, this content is licensed under', 'ffeeeedd' ); ?> <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/deed.fr">licence <abbr lang="en" title="Creative Commons">CC</abbr> <abbr lang="en" title="Attribution">BY</abbr>-<abbr lang="en" title="Non Commercial">NC</abbr>-<abbr lang="en" title="Share Alike">SA</abbr> 4.0</a>.<br />
    &copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?> | <a href="https://ma3yt.com/">Un projet MA3YT</a> | <a href="<?php echo esc_url( home_url() ); ?>/mentions-legales">Mentions légales</a>
  </footer><!-- / contentinfo -->

    <?php wp_footer(); ?>
  </div>
  </body>
</html>