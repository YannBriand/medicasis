<?php
/**
 * Displays the menus and widgets at the end of the main element.
 * Visually, this output is presented as part of the footer element.
 *
 */

$has_footer_menu = has_nav_menu( 'footer' );
$has_social_menu = has_nav_menu( 'social' );

$has_sidebar_1 = is_active_sidebar( 'sidebar-1' );
$has_sidebar_2 = is_active_sidebar( 'sidebar-2' );
?>
<section id="lusis-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12 my-5">
				<img class="mx-auto" src="<?php echo get_stylesheet_directory_uri() . '/assets/logo.png'; ?>" alt="Lusis-Sport">
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 text-center">
				<h3>Adresse</h3>
				<p>130 Avenue Pierre Mendès France<br />20000 LAON</p>
			</div>
			<div class="col-md-4 text-center">
				<h3>Horaires d'ouverture</h3>
				<p>Lundi-Vendredi : 9h00 - 19h00<br />Samedi : 9h00 - 16h00</p>
			</div>
			<div class="col-md-4 text-center">
				<h3>Contact</h3>
				<div class="wp-block-button">
					<a class="wp-block-button__link has-background has-accent-background-color" href="tel:+33665059253">06 65 05 92 53</a>
				</div>
				<p><a href="mailto:laon@lusis-sport.fr">laon@lusis-sport.fr</a></p>
			</div>
		</div>
	</div>
</section>

<?php
// Only output the container if there are elements to display.
if ( $has_footer_menu || $has_social_menu || $has_sidebar_1 || $has_sidebar_2 ) {
	?>
	<div id="footer-widget" class="footer-nav-widgets-wrapper header-footer-group">
		<div class="footer-inner section-inner">

			<?php

			$footer_top_classes = '';

			$footer_top_classes .= $has_footer_menu ? ' has-footer-menu' : '';
			$footer_top_classes .= $has_social_menu ? ' has-social-menu' : '';

			if ( $has_footer_menu || $has_social_menu ) {
				?>
				<div class="footer-top<?php echo $footer_top_classes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>">
					<?php if ( $has_footer_menu ) { ?>

						<nav aria-label="<?php esc_attr_e( 'Footer', 'twentytwenty' ); ?>" role="navigation" class="footer-menu-wrapper">

							<ul class="footer-menu reset-list-style">
								<?php
								wp_nav_menu(
									array(
										'container'      => '',
										'depth'          => 1,
										'items_wrap'     => '%3$s',
										'theme_location' => 'footer',
									)
								);
								?>
							</ul>

						</nav><!-- .site-nav -->

					<?php } ?>

					<?php if ( $has_social_menu ) { ?>

						<nav aria-label="<?php esc_attr_e( 'Social links', 'twentytwenty' ); ?>" class="footer-social-wrapper">

							<ul class="social-menu footer-social reset-list-style social-icons fill-children-current-color justify-content-center">

								<?php
								wp_nav_menu(
									array(
										'theme_location'  => 'social',
										'container'       => '',
										'container_class' => '',
										'items_wrap'      => '%3$s',
										'menu_id'         => '',
										'menu_class'      => '',
										'depth'           => 1,
										'link_before'     => '<span class="screen-reader-text">',
										'link_after'      => '</span>',
										'fallback_cb'     => '',
									)
								);
								?>

							</ul><!-- .footer-social -->

						</nav><!-- .footer-social-wrapper -->

					<?php } ?>
				</div><!-- .footer-top -->

			<?php } ?>

			<?php if ( $has_sidebar_1 || $has_sidebar_2 ) { ?>

				<aside class="footer-widgets-outer-wrapper" role="complementary">

					<div class="footer-widgets-wrapper">

						<?php if ( $has_sidebar_1 ) { ?>

							<div class="footer-widgets column-one grid-item">
								<?php dynamic_sidebar( 'sidebar-1' ); ?>
							</div>

						<?php } ?>

						<?php if ( $has_sidebar_2 ) { ?>

							<div class="footer-widgets column-two grid-item">
								<?php dynamic_sidebar( 'sidebar-2' ); ?>
							</div>

						<?php } ?>

					</div><!-- .footer-widgets-wrapper -->

				</aside><!-- .footer-widgets-outer-wrapper -->

			<?php } ?>

		</div><!-- .footer-inner -->
		<div class="container mt-5">
			<div class="row">
				<div class="col-md-12 text-center">
					<a class="text-decoration-none" href="/mentions-legales" title="Lire nos mentions légales" target="_self">Mentions légales &amp; Conditions générales d'utilisation</a>
				</div>
			</div>
		</div>
	</div><!-- .footer-nav-widgets-wrapper -->

<?php } ?>
