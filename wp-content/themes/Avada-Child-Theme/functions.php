<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'avada-stylesheet' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'Avada', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );


function wp_custom_post_type_location() {

    // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
    $labels = array(
        // Le nom au pluriel
        'name'                => _x( 'Chalets à louer', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x( 'Chalet à louer', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __( 'Chalets à louer'),
        // Les différents libellés de l'administration
        'all_items'           => __( 'Toutes les chalets'),
        'view_item'           => __( 'Voir les chalets'),
        'add_new_item'        => __( 'Ajouter un chalet à louer'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer le chalet'),
        'update_item'         => __( 'Modifier le chalet'),
        'search_items'        => __( 'Rechercher un chalet'),
        'not_found'           => __( 'Non trouvée'),
        'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
    );

    // On peut définir ici d'autres options pour notre custom post type

    $args = array(
        'label'               => __( 'Chalet à louer'),
        'menu_icon'           => 'dashicons-admin-home',
        'description'         => __( 'Tous sur chalet à louer'),
        'labels'              => $labels,
        // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        /*
        * Différentes options supplémentaires
        */
        'show_in_rest' => true,
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'chalet-a-louer'),

    );

    // On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
    register_post_type( 'chaletalouer', $args );

}

add_action( 'init', 'wp_custom_post_type_location', 0 );

function wp_custom_post_type_sold() {

    // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
    $labels = array(
        // Le nom au pluriel
        'name'                => _x( 'Chalets à vendre', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x( 'Chalet à vendre', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __( 'Chalets à vendre'),
        // Les différents libellés de l'administration
        'all_items'           => __( 'Toutes les chalets'),
        'view_item'           => __( 'Voir les chalets'),
        'add_new_item'        => __( 'Ajouter un chalet à vendre'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer le chalet'),
        'update_item'         => __( 'Modifier le chalet'),
        'search_items'        => __( 'Rechercher un chalet'),
        'not_found'           => __( 'Non trouvée'),
        'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
    );

    // On peut définir ici d'autres options pour notre custom post type

    $args = array(
        'label'               => __( 'Chalet à vendre'),
        'menu_icon'           => 'dashicons-admin-home',
        'description'         => __( 'Tous sur chalet à vendre'),
        'labels'              => $labels,
        // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        /*
        * Différentes options supplémentaires
        */
        'show_in_rest' => true,
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'chalet-a-vendre'),

    );

    // On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
    register_post_type( 'chaletavendre', $args );

}

add_action( 'init', 'wp_custom_post_type_sold', 0 );


function deregister_post_type(){
    unregister_post_type( 'avada_portfolio' );
    unregister_post_type( 'avada_faq' );
    unregister_taxonomy( 'portfolio_category');
    unregister_taxonomy( 'portfolio_tags');
    unregister_taxonomy( 'portfolio_skills');
    unregister_taxonomy( 'faq_category');
}
add_action('init','deregister_post_type');