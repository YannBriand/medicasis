<?php
/*
Template Name: Page d'archives
*/
?>
<?php get_header(); ?>

<main id="archive-content" role="main">
    <section class="container-fluid py-0 mb-5">
        <div class="row jumbotron">
            <div class="background">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/archives.jpg'; ?>" class="img-fluid w-100" alt="Les archives du Blog de Lusis Sport">
            </div>
            <div class="col-12">
                <h1 class="text-center text-white">Les archives du blog</h1>
            </div>
        </div>
    </section>

    <section id="primary" class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">

            <?php
            if ( have_posts() ) : ?>

                <header class="page-header">
                    <?php
                        the_archive_title( '<h2 class="page-title">', '</h2>' );
                        the_archive_description( '<div class="archive-description">', '</div>' );
                    ?>
                </header><!-- .page-header -->

                <?php
                /* Start the Loop */
                while ( have_posts() ) : the_post();

                    /*
                    * Include the Post-Format-specific template for the content.
                    */
                    //get_template_part( 'template-parts/content', get_post_format() );
                    ?>
                    <div class="row no-gutters overflow-hidden flex-md-row mb-5 h-md-250 position-relative">
                        <div class="col-4 p-4">
                            <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                        </div>
                        <div class="col-8 p-4 d-flex flex-column position-static">
                            <!-- <strong class="d-inline-block mb-2 text-primary"><?php the_category(); ?></strong> -->
                            <h3 class="mb-3 text-uppercase mx-0"><?php the_title(); ?></h3>
                            <div class="mb-1 text-muted"><?php the_date(); ?></div>
                            <div class="card-text mb-auto"><?php the_excerpt(); ?></div>
                            <a href="<?php the_permalink(); ?>" class="btn btn-lg bg-blue text-white text-uppercase text-decoration-none font-weight-bold ml-0 mr-auto">Lire la suite<span class="btn-icon"><i class="fas fa-chevron-right"></i></span></a>
                        </div>
                    </div>
                    <hr class="styled-separator is-style-wide" aria-hidden="true">
                <?php
                endwhile;

                the_posts_navigation();

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif; ?>

            </div>
            
            <aside class="col-md-2 blog-sidebar">
            <?php dynamic_sidebar('blog-sidebar'); ?>
            </aside>

        </div>
	</section><!-- #primary -->
</main>

<?php
get_template_part( 'template-parts/rendez-vous' );
get_template_part( 'template-parts/footer-menus-widgets' );
get_footer();
?>
