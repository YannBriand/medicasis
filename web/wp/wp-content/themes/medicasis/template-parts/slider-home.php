<?php
$args = array(
    'post_type' => 'medicasis_slider',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC'
);
$slider_query = new WP_Query( $args );

if ($slider_query->have_posts()):
?>

<section class="pt-0">
    <!-- Carousel -->
    <div class="container-fluid">
        <div class="row">
            <div id="Lusis-Slider" class="carousel slide carousel-fade w-100" data-ride="carousel" data-interval="5000">
                <?php rewind_posts(); ?>
                <div class="carousel-inner">
                    <?php $active = true;
                    while ($slider_query->have_posts()) : $slider_query->the_post();
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'front-slider');
                    $image_src = $image['0'];
                    ?>
                    <div class="carousel-item <?php echo $active ? 'active' : ''; ?>">
                        <img class="d-block w-100"
                            src="<?php echo $image_src; ?>"
                            alt="<?php the_field('alt'); ?>">
                        <div class="carousel-caption">
                            <h2 class="text-blue"><?php the_field('titre'); ?></h2>
                            <!-- <p><?php the_field('sous_titre'); ?></p> -->
                            <a href="<?php the_field('url'); ?>"
                            class="btn btn-lg bg-blue text-white text-uppercase text-decoration-none font-weight-bold" 
                            target="_self">
                                <?php the_field('bouton'); ?>
                            </a>
                        </div>
                    </div>
                    <?php $active = false;
                    endwhile; wp_reset_postdata(); ?>
                </div>
                <a class="carousel-control-prev" href="#Lusis-Slider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Précédent</span>
                </a>
                <a class="carousel-control-next" href="#Lusis-Slider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Suivant</span>
                </a>
            </div>
        </div>
    </div><!--  // Carousel -->
</section>

<?php endif; ?>