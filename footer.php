<?php
/**
 * The footer for our theme
 *
 * This is the template that displays the ending of the page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage vanlig
 * @since 1.0
 * @version 2.0
 */

?>
</main>
<!-- site-content -->

<!-- site-footer -->
<?php get_template_part('template-parts/site-footer'); ?>
<!-- /site-footer -->

<!-- SVG Icons -->
<div class="u-element-hidden">
    <?php include_once('assets/icons/svg-defs.svg'); ?>
</div>
<!-- /SVG Icons -->

</div> <!-- /site -->
<?php wp_footer(); ?>
</body>
