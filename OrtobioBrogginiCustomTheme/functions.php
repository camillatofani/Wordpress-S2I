<?php

// Include Scripts

function obct_script_enqueque() {

    wp_enqueue_style( 'obct-style', get_template_directory_uri() . '/css/obct.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( 'obct-js', get_template_directory_uri() . '/js/obct.js', array(), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'obct_script_enqueque');


// Activate menus

function obct_theme_setup() {

    add_theme_support('menus');

    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');

}

add_action('init', 'obct_theme_setup');


// Logo

function obct_custom_logo_setup() {
    $defaults = array(
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
 
add_action( 'after_setup_theme', 'obct_custom_logo_setup' );


// Theme support function

add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video'));
add_theme_support('html5', array('search-form'));


// Sidebar function

function obct_widget_setup() {

    register_sidebar(
        array(
            'name'  => 'Sidebar',
            'id'    => 'sidebar-1',
            'class' => 'custom',
            'description' => 'Standard Sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',
        )
    );

    register_sidebar(
        array(
            'name'  => 'Blog Sidebar',
            'id'    => 'blog-sidebar',
            'class' => 'custom',
            'description' => 'Blog Sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',
        )
    );

    register_sidebar(
        array(
            'name'  => 'First Footer Widget Area',
            'id'    => 'first-footer-widget-area-1',
            'class' => 'custom',
            'description' => 'First Footer Widget Area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',
        )
    );

    register_sidebar(
        array(
            'name'  => 'Second Footer Widget Area',
            'id'    => 'second-footer-widget-area-2',
            'class' => 'custom',
            'description' => 'Second Footer Widget Area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',
        )
    );

    register_sidebar(
        array(
            'name'  => 'Third Footer Widget Area',
            'id'    => 'third-footer-widget-area-3',
            'class' => 'custom',
            'description' => 'Third Footer Widget Area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',
        )
    );

    register_sidebar(
        array(
            'name'  => 'Fourth Footer Widget Area',
            'id'    => 'fourth-footer-widget-area-4',
            'class' => 'custom',
            'description' => 'Fourth Footer Widget Area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',
        )
    );

}

add_action('init', 'obct_widget_setup');


// Head function

function obct_remove_version(){
    return '';
};
add_filter('the_generator', 'obct_remove_version');


// Custom post type

function obct_custom_post_type(){

    $labels = array(
        'name' => 'Prodotti',
        'singular_name' => 'Prodotti',
        'add_new' => 'Add Item',
        'all_items' => 'All Items',
        'all_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Prodotti',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicy_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions'
        ),
        'taxonomies' => array('category', 'post_tag'),
        'menu_position' => 5,
        'exclude_from_search' => false
    );
    
    register_post_type('prodotti', $args);

};

add_action('init', 'obct_custom_post_type');


// Custom Taxonomies

function obct_custom_taxonomies(){

    // add new taxonomy hierarchical

	$type_labels = array(
		'name'              => _x('types', 'taxonomy general name', 'obct-test'),
		'singular_name'     => _x('type', 'taxonomy singular name', 'obct-test'),
		'search_items'      => __('Search types', 'obct-test'),
		'all_items'         => __('All types', 'obct-test'),
		'parent_item'       => __('Parent type', 'obct-test'),
		'parent_item_colon' => __('Parent type:', 'obct-test'),
		'edit_item'         => __('Edit type', 'obct-test'),
		'update_item'       => __('Update type', 'obct-test'),
		'add_new_item'      => __('Add New type', 'obct-test'),
		'new_item_name'     => __('New type Name', 'obct-test'),
		'menu_name'         => __('types', 'obct-test')
	);
	
	$type_args = array(
		'hierarchical'      => true,
		'labels'            => $type_labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => __('type', 'obct-test'),
		'show_in_rest'      => true,
		'rewrite'           => array('slug' => 'type'),
	);

	register_taxonomy('type', 'prodotti', $type_args);
}

add_action('init', 'obct_custom_taxonomies');


// Custom Term Function

function obct_get_terms($postID, $term){

    $terms_list = wp_get_post_terms($postID, $term);
    $output = '';
                    
    $i = 0;
    foreach($terms_list as $term) { $i++;
        if( $i > 1 ) { $output .= ', '; }
        $output .= '<a href="' . get_term_link($term) . '">' . $term->name . '</a>';
    };

    return $output;

};

// Breadcrumbs

function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}