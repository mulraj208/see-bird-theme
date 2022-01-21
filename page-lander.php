<?php
/*
 * Template Name: Lander
 * Template Post Type: page
 */

get_header();
get_template_part( 'template-parts/lander/banner' );

?>

  <div class="bg-gray-50">
    <?php
      get_template_part( 'template-parts/lander/section', 'content' );
      get_template_part( 'template-parts/lander/four', 'blocks' );
    ?>
  </div>

<?php
get_template_part( 'template-parts/lander/how-it', 'works' );
get_template_part( 'template-parts/lander/side-by', 'side' );
get_footer();
