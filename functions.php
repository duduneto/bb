<?php
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
require_once get_template_directory() . '/callbacks_metaboxes.php';
require_once get_template_directory() . '/callbacks_metabox_posts.php';

$args = array(
    'flex-width'    => true,
	'flex-height'    => true,
	'width'         => 980,
	'height'        => 60,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );

function register_my_menus() {
    register_nav_menus( array(
        'my_main_menu' => 'Main Menu',
    ) );
    
}
add_action( 'init', 'register_my_menus' );

function load_scripts(){
    wp_enqueue_script( 'bootstrap-js', '/js/bootstrap.min.js', array( 'jquery '), '4.1.0', true);
    wp_enqueue_script( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css', array( 'css '), '4.7.0', true);   
    wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css', array(), '1.0', all );
    wp_enqueue_style( 'material-icon', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '1.0', all );
    wp_enqueue_style( 'template', get_template_directory_uri() .'/style.css', array(), '4.1.0', all );
    wp_enqueue_style( 'template-single-post', get_template_directory_uri() .'/css/style-single-post.css', array(), '1.1.0', all );
}
add_action( 'wp_enqueue_scripts', 'load_scripts');

function post_type_conteudo_header(){
    $singlePageArgsLabels = array(
        'name' =>  'Header',
        'add_new_item' => 'Adicionar conteúdo à Home',
    );
    
    $singlePageArgs = array(
        'labels' => $singlePageArgsLabels,
        'public' => true,
    );
    
    register_post_type('conteudo', $singlePageArgs);
}


add_action('init','post_type_conteudo_header');
add_theme_support('post-thumbnails');
function post_type_conteudo_single_page(){
    $supports = array(
        'title',
        'editor',
        'thumbnail'
    );

    $singlePageArgsLabels = array(
        'name' =>  'Single Page',
        'add_new_item' => 'Adicionar conteúdo à Single Page',
    );
    
    $singlePageArgs = array(
        'labels' => $singlePageArgsLabels,
        'public' => true,
        'supports' => $supports
    );
    
    register_post_type('conteudo_single_page', $singlePageArgs);
}


add_action('init','post_type_conteudo_single_page');

add_action('widgets_init', 'my_theme_sidebars');

function my_theme_sidebars(){

    register_sidebar(
        array(
            'name' => 'Logo',
            'id' => 'logo',
            'description' => 'Add your Logo',
            'before_widget' => '<div class="logo" style="width:120px;" >',
            'after_widget' => '</div>',
            'before_title' => '<img>',
            'after_title' => '</img>'
        )
    );
    
    register_sidebar(
        array(
            'name' => 'Main Card 1',
            'id' => 'main-card-1',
            'description' => 'Add a card with your services',
            'before_widget' => '<div class="card-body" style="text-align:center;" >',
            'after_widget' => '</div>',
            'before_title' => '<h5 class="card-title product-title">',
            'after_title' => '</h5>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Main Card 2',
            'id' => 'main-card-2',
            'description' => 'Add a card with your services',
            'before_widget' => '<div class="card-body" style="text-align:center;" >',
            'after_widget' => '</div>',
            'before_title' => '<h5 class="card-title product-title">',
            'after_title' => '</h5>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Main Card 3',
            'id' => 'main-card-3',
            'description' => 'Add a card with your services',
            'before_widget' => '<div class="card-body" style="text-align:center;" >',
            'after_widget' => '</div>',
            'before_title' => '<h5 class="card-title product-title">',
            'after_title' => '</h5>'
        )
    );

    register_sidebar(
        array(
            'name' => 'First Banner',
            'id' => 'banner-1',
            'description' => 'Add a Banner'
        )
    );

    register_sidebar(
        array(
            'name' => 'Service Card Image 1',
            'id' => 'service-card-img-1',
            'description' => 'Add a image to card service. Please Send a Squared Image.',
            'before_widget' => '<div class="text-center service-img">',
            'after_widget' => '</div>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Service Card 1',
            'id' => 'service-card-1',
            'description' => 'Add a card with your services',
            'before_widget' => '<div class="card-body">',
            'after_widget' => '</div>',
            'before_title' => '<h5 class="card-title title">',
            'after_title' => '</h5>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Service Card Image 2',
            'id' => 'service-card-img-2',
            'description' => 'Add a image to card service. Please Send a Squared Image.',
            'before_widget' => '<div class="text-center service-img">',
            'after_widget' => '</div>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Service Card 2',
            'id' => 'service-card-2',
            'description' => 'Add a card with your services',
            'before_widget' => '<div class="card-body">',
            'after_widget' => '</div>',
            'before_title' => '<h5 class="card-title title">',
            'after_title' => '</h5>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Service Card Image 3',
            'id' => 'service-card-img-3',
            'description' => 'Add a image to card service. Please Send a Squared Image.',
            'before_widget' => '<div class="text-center service-img">',
            'after_widget' => '</div>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Service Card 3',
            'id' => 'service-card-3',
            'description' => 'Add a card with your services',
            'before_widget' => '<div class="card-body">',
            'after_widget' => '</div>',
            'before_title' => '<h5 class="card-title title">',
            'after_title' => '</h5>'
        )
    );
}

function register_metabox_to_commom_posts() {
    add_meta_box(
        'metabox-posts',
        'MetaBox Posts',
        'callback_metabox_posts',
        'post',
        'normal',
        'default'
    );
};
add_action('add_meta_boxes','register_metabox_to_commom_posts');

function registra_meta_box_single_page() {
    add_meta_box(
        'metabox-single-page',
        'MetaBox Single Page',
        'callback_metabox_single_page',
        'conteudo_single_page',
        'normal',
        'default'
    );
};
add_action('add_meta_boxes', 'registra_meta_box_single_page');

function remove_editor_text_single_page(){
    remove_post_type_support('conteudo_single_page','editor');
}
add_action('init','remove_editor_text_single_page');

?>