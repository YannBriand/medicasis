<?php
/**
 * Lusis-Sport functions and definitions
 */
function wpm_enqueue_styles(){
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'wpm_enqueue_styles' );

/**
 * Bootstrap 4
 */

function wpbootstrap_styles_scripts(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array('jquery'), 1, true);
    wp_enqueue_script('boostrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery', 'popper'), 1, true);
}
add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');

/**
 * Format d'image slider front
 */
function wpm_new_image(){
    add_image_size('front-slider', 1200, 595, true);
}
add_action('after_setup_theme', 'wpm_new_image');

/**
 * 
 * MODULE PERSONNALISE
 * SLIDER BOOTSTRAP
 * 
 */

function medicasis_slider_init(){
    $labels = array(
        'name' => 'Gestion du Slider',
        'singular_name' => 'Image Accueil',
        'add_new' => 'Ajouter une image',
        'add_new_item' => 'Ajouter une image dans le slider',
        'edit_item'=> 'Modifier une image',
        'new_item' => 'Nouveau',
        'all_items' => 'Voir la liste',
        'view_item' => 'Voir l\'élément',
        'search_item' => 'Chercher une image',
        'not_found' => 'Aucun élément trouvé',
        'not_found_in_trash' => 'Aucun élément dans la corbeille',
        'menu_name' => 'Slider'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => 5,
        'menu_icon' => get_stylesheet_directory_uri() . '/assets/slider-icon.svg',
        'publicly_queryable' => false,
        'exclude_from_search' => true,
        'supports' => array('title', 'page-attributes', 'thumbnail')
    );

    register_post_type('medicasis_slider', $args);
}
add_action('init', 'medicasis_slider_init');

/**
 * Ajout des en-têtes de colonnes
 */
add_filter('manage_edit-medicasis_slider_columns','slider_col_change');

function slider_col_change($columns){
    $columns['medicasis_slider_image_order'] = 'Ordre d\'affichage';
    $columns['medicasis_slider_image'] = 'Vignette';

    return $columns;
}

/**
 * Ajout des contenus dans les colonnes crées
 */
add_action('manage_medicasis_slider_posts_custom_column', 'slider_content_show', 10, 2);

function slider_content_show($column, $post_id){
    global $post;
    if ( $column == 'medicasis_slider_image' ) {
        echo the_post_thumbnail(array(120,60));
    }
    if ( $column == 'medicasis_slider_image_order'){
        echo $post->menu_order;
    }
}

add_filter('manage_edit-medicasis_slider_sortable_columns', 'sortable_slider_order_column');
function sortable_slider_order_column($columns){
    $columns['medicasis_slider_image_order'] = 'menu_order';
    return $columns;
}

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lusissport_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

    // Blog sidebar.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Blog Sidebar', 'lusissport' ),
				'id'          => 'blog-sidebar',
				'description' => __( 'Les widgets de cette partie seront affichés dans la sidebar du blog.', 'lusissport' ),
			)
		)
    );
    
	// Footer #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #1', 'lusissport' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'lusissport' ),
			)
		)
	);

	// Footer #2.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #2', 'lusissport' ),
				'id'          => 'sidebar-2',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'lusissport' ),
			)
		)
	);

}

add_action( 'widgets_init', 'lusissport_sidebar_registration' );

/**
 * Archives
 */
/**
 * Filters the archive title and styles the word before the first colon.
 *
 * @param string $title Current archive title.
 *
 * @return string $title Current archive title.
 */
function lusissport_get_the_archive_title( $title ) {

	$regex = apply_filters(
		'lusissport_get_the_archive_title_regex',
		array(
			'pattern'     => '/(\A[^\:]+\:)/',
			'replacement' => '<span class="text-black">Articles traitant de :</span>',
		)
	);

	if ( empty( $regex ) ) {

		return $title;

	}

	return preg_replace( $regex['pattern'], $regex['replacement'], $title );

}

add_filter( 'get_the_archive_title', 'lusissport_get_the_archive_title' );