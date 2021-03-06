<?php
/**
* The main template file for the posts page.
*
* Template Name: Blog
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage vanlig
* @since 1.0
* @version 2.0
*/

get_header();
?>

<!-- hero banner image -->
<?php get_template_part('template-parts/hero-banner'); ?>
<!-- /hero banner image -->

<!-- posts container -->
<section class="c-articles">

  <!-- posts -->
  <div class="c-articles__grid">
    <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

      $args = [
        'post_type' => 'post',
        'posts_per_page' => 4,	// number of posts on page
        'paged' => $paged,
        'update_post_meta_cache' => false, // no need since we don't use WP meta fields.
        'update_post_term_cache' => false, // remove if taxonomy needed
      ];

      $posts_query = new WP_Query($args);

      if ( $posts_query->have_posts() ) {
        while ( $posts_query->have_posts() ) { $posts_query->the_post();
          get_template_part( 'template-parts/post' );
        }
      }

      wp_reset_postdata();
    ?>
  </div>
  <!-- /posts -->

  <!-- sidebar -->
  <div class="c-articles-sidebar">
    <?php get_sidebar(); ?>
  </div>
  <!-- sidebar -->

</section>
<!-- /posts container -->

<!-- posts pagination -->
<div class="c-articles-pagination">
  <?php
    query_posts($args);
    pagination();
  ?>
</div>
<!-- posts pagination -->

<?php get_footer();
