<?php
/**
 * The template for displaying front page.
 */

get_header();



?>

<main id="site-content" role="main">

<?php
get_template_part('template-parts/slider-home', 'home');
get_template_part('template-parts/services', 'home');
get_template_part('template-parts/equipements', 'home');
get_template_part('template-parts/team', 'home');
get_template_part('template-parts/about', 'home');
get_template_part('template-parts/partenaires', 'home');
get_template_part('template-parts/inscription-newsletter', 'home');
get_template_part('template-parts/contact-us', 'home');


?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>