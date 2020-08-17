<?php

function icademieproject_supports() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
}

function icademieproject_register_assets() {
    //register general CSS
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
    wp_register_style('bootswatch', 'https://bootswatch.com/4/flatly/bootstrap.min.css');
    wp_register_style('icademieproject_style', get_template_directory_uri() . '/style.css');

    //register general JS and jQuery
    wp_register_script('fontawesome', 'https://kit.fontawesome.com/59104be96e.js', [], false, true);
    wp_register_script('bootstrap', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', ['popper','jquery'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], false, true);
    wp_deregister_script('jquerymin');
    wp_register_script('jquery', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', [], false, true);

    //enqueue general styles
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('bootswatch');
    wp_enqueue_style('icademieproject_style');

    //enqueue general scripts
    wp_enqueue_script('fontawesome');
    wp_enqueue_script('bootstrap');
}

function icademieproject_title_parts($title) {
    unset($title['tagline']);
    return $title;
}

function icademieproject_menu_class($classes) {
    $classes[] = 'nav-item p-2';
    return $classes;
}

function icademieproject_menu_link_class($attributes) {
    $attributes['class'] = 'nav-link ml-4';
    return $attributes; 
}

function icademieproject_init() {
    $labels = [
        'name' => _x( 'Produits', 'Post Type General Name'),
        'singular_name' => _x( 'Produit', 'Post Type Singular Name'),
        'menu_name' => __( 'Produits'),
        'all_items' => __( 'Tous les produits'),
        'view_item' => __( 'Voir les produits'),
        'add_new_item' => __( 'Ajouter un nouveau produit'),
        'add_new' => __( 'Ajouter'),
        'edit_item' => __( 'Editer le produit'),
        'update_item' => __( 'Modifier le produit'),
        'search_items' => __( 'Rechercher un produit'),
        'not_found' => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille')
    ];

    register_post_type('product', [
        'labels' => $labels,
        'public' => true,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-cart',
        'supports' => ['title', 'thumbnail', 'excerpt', 'revisions'],
        'has_archive' => true,
        'rewrite'=> ['slug' => 'nos-produits','with_front' => true]
    ]);
}

add_action('init', 'icademieproject_init');
add_action('after_setup_theme', 'icademieproject_supports');
add_action('wp_enqueue_scripts', 'icademieproject_register_assets');
add_filter('document_title_parts', 'icademieproject_title_parts');
add_filter('nav_menu_css_class', 'icademieproject_menu_class');
add_filter('nav_menu_link_attributes', 'icademieproject_menu_link_class');

require_once('metaboxes/price.php');
PriceMetaBox::register();
require_once('metaboxes/detail.php');
DetailMetaBox::register();

require_once('options/company.php');
CompanyMenuPage::register();
