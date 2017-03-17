<?php
/**
 * The template for displaying the site footer.
 *
 * @package WordPress
 * @subpackage halos
 * @since 1.0
 * @version 1.0
 */
?>

<footer class="site-footer _slab-primary _text-color-secondary" role="contentinfo">

  <div class="site-footer__main">
    <div class="site-footer__col">
      <?php
        wp_nav_menu( array(
            'theme_location' => 'site-footer-nav',
            'container' => false,
            'fallback_cb'    => false // Do not fall back to wp_page_menu()
        ) );
      ?>
    </div>
  </div>

  <div class="site-footer__bottom">
    <div class="site-footer__notice">
      &copy; <?php echo date("Y"); ?> of Company.
    </div>
  </div>

</footer>
