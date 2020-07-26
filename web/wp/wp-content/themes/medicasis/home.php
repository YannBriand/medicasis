<?php
/*
Template Name: Blog Home
*/
?>
<?php get_header(); ?>

<main id="site-content" role="main">
    <section class="container-fluid py-0 mb-5">
        <div class="row jumbotron">
            <div class="background">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/blog.jpg'; ?>" class="img-fluid w-100" alt="Le Blog de Lusis Sport">
            </div>
            <div class="col-12">
                <h1 class="text-center text-white">La Gazette du Sportif</h1>
            </div>
        </div>
    </section>
    <div id="home-blog" class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2 class="mb-5">Articles à la Une</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row">
                    <?php 
                    $counter = 0;
                    while (have_posts()) : the_post();
                    if ( $counter < 2 ) { ?>
                    <div class="col-md-6">
                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 h-md-250 position-relative blog-home-featured-article">
                            <div class="col-auto d-none d-lg-block">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-primary"><?php the_category(); ?></strong>
                                <h3 class="mb-3 text-uppercase"><?php the_title(); ?></h3>
                                <div class="mb-1 text-muted"><?php the_date(); ?></div>
                                <div class="card-text mb-auto"><?php the_excerpt(); ?></div>
                                <a href="<?php the_permalink(); ?>" class="btn btn-lg bg-blue text-white text-uppercase text-decoration-none font-weight-bold">Lire la suite<span class="btn-icon"><i class="fas fa-chevron-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <?php } else { ?>
                    <div class="col-md-12">
                        <?php if ($counter == 2){ ?>
                            <hr class="styled-separator is-style-wide" aria-hidden="true">
                            <h3 class="mb-5">Ces articles pourraient également vous intéresser</h3>
                        <?php } ?>
                        <div class="row no-gutters overflow-hidden flex-md-row mb-5 h-md-250 position-relative">
                            <div class="col-4 p-4">
                                <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                            </div>
                            <div class="col-8 p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-primary"><?php the_category(); ?></strong>
                                <h3 class="mb-3 text-uppercase"><?php the_title(); ?></h3>
                                <div class="mb-1 text-muted"><?php the_date(); ?></div>
                                <div class="card-text mb-auto"><?php the_excerpt(); ?></div>
                                <a href="<?php the_permalink(); ?>" class="btn btn-lg bg-blue text-white text-uppercase text-decoration-none font-weight-bold ml-0 mr-auto">Lire la suite<span class="btn-icon"><i class="fas fa-chevron-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <?php };
                    $counter++;
                    endwhile;  ?>
                </div>
            </div>
            <aside class="col-md-2 blog-sidebar">
            <?php dynamic_sidebar('blog-sidebar'); ?>
            </aside>
        </div>
    </div>
</main>
<?php
get_template_part( 'template-parts/rendez-vous' );
get_template_part( 'template-parts/footer-menus-widgets' );

get_footer();

?>