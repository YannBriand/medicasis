<?php
/**
 * The template for displaying single posts and pages.
 */

get_header();

global $post;
$post_slug = $post->post_name;

?>

<main id="site-content" role="main">
	<section class="container-fluid py-0">
		<div class="row jumbotron">
			<div class="background <?php echo $post_slug; ?>">
				<?php the_post_thumbnail('full', array( 'class' => 'w-100' ), 'alt'); ?>
			</div>
			<div class="col-12">
				<h1 class="text-white"><?php the_title() ?></h1>
			</div>
		</div>
	</section>
	<section class="container-fluid pt-0">
		<div class="row">
			<div class="w-100">

			<?php

			if ( have_posts() ) {

				while ( have_posts() ) {
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );
				}
			}

			?>
			</div>
		</div>
	</section>
	
	<?php if ($page_slug != 'contact') { get_template_part( 'template-parts/rendez-vous' ); } ?>
</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
