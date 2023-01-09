<?php

// Register Custom Post Type TEAM
function custom_post_team() {

  $labels = array(
    'name'                  => _x( 'Zespół', 'Post Type General Name', 'gr' ),
    'singular_name'         => _x( 'Zespół', 'Post Type Singular Name', 'gr' ),
    'menu_name'             => __( 'Zespół', 'gr' ),
    'name_admin_bar'        => __( 'Post Type', 'gr' ),
  );
  $agrs = array(
    'label'                 => __( 'Zespół', 'gr' ),
    'description'           => __( 'Post Type Description', 'gr' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor'),
    'taxonomies'            => array( 'cat-team' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'menu_icon'           => 'dashicons-admin-users',
    'rewrite' => array(
       'slug' => 'zespol'
     )
  );
  register_post_type( 'team', $agrs );

}
add_action( 'init', 'custom_post_team', 0 );

// Register Custom Taxonomy
function custom_team() {

  $labels = array(
    'name'                       => _x( 'Zespół', 'Taxonomy General Name', 'gr' ),
    'singular_name'              => _x( 'Kategorie', 'Taxonomy Singular Name', 'gr' ),
    'menu_name'                  => __( 'Kategorie', 'gr' ),
    'all_items'                  => __( 'Wszystkie', 'gr' ),
  );
  $agrs = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );
  register_taxonomy( 'cat-team', array( 'team' ), $agrs );  

}
add_action( 'init', 'custom_team', 0 );

// Register Custom Post Type
function custom_post_market() {

  $labels = array(
    'name'                  => _x( 'Market insights', 'Post Type General Name', 'front' ),
    'singular_name'         => _x( 'Market insights', 'Post Type Singular Name', 'front' ),
    'menu_name'             => __( 'Market insights', 'front' ),
    'name_admin_bar'        => __( 'Post Type', 'front' ),
  );
  $agrs = array(
    'label'                 => __( 'Market insights', 'front' ),
    'description'           => __( 'Post Type Description', 'front' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor'),
    'taxonomies'            => array( 'cat-market-insights' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'menu_icon'           => 'dashicons-media-document',
    'rewrite' => array(
       'slug' => 'wiedza'
     )
  );
  register_post_type( 'market-insights', $agrs );

}
add_action( 'init', 'custom_post_market', 0 );

// Register Custom Taxonomy
function custom_market() {

  $labels = array(
    'name'                       => _x( 'Market insights', 'Taxonomy General Name', 'front' ),
    'singular_name'              => _x( 'Kategorie', 'Taxonomy Singular Name', 'front' ),
    'menu_name'                  => __( 'Kategorie', 'front' ),
    'all_items'                  => __( 'Wszystkie', 'front' ),
  );
  $agrs = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );
  register_taxonomy( 'cat-market-insights', array( 'market-insights' ), $agrs );  

}
add_action( 'init', 'custom_market', 0 );


// Register Custom Post Type
function custom_post_subsidies() {

  $labels = array(
    'name'                  => _x( 'Dotacje', 'Post Type General Name', 'front' ),
    'singular_name'         => _x( 'Dotacje', 'Post Type Singular Name', 'front' ),
    'menu_name'             => __( 'Dotacje', 'front' ),
    'name_admin_bar'        => __( 'Post Type', 'front' ),
  );
  $agrs = array(
    'label'                 => __( 'Dotacje', 'front' ),
    'description'           => __( 'Post Type Description', 'front' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor'),
    'taxonomies'            => array( 'cat-subsidies' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'menu_icon'           => 'dashicons-tickets',
    'rewrite' => array(
       'slug' => 'dotacja'
     )
  );
  register_post_type( 'subsidies', $agrs );

}
add_action( 'init', 'custom_post_subsidies', 0 );

// Register Custom Taxonomy
function custom_subsidies() {

  $labels = array(
    'name'                       => _x( 'Dotacje', 'Taxonomy General Name', 'front' ),
    'singular_name'              => _x( 'Kategorie', 'Taxonomy Singular Name', 'front' ),
    'menu_name'                  => __( 'Kategorie', 'front' ),
    'all_items'                  => __( 'Wszystkie', 'front' ),
  );
  $agrs = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );
  register_taxonomy( 'cat-subsidies', array( 'subsidies' ), $agrs );  

}
add_action( 'init', 'custom_subsidies', 0 );
