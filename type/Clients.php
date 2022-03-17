<?php

add_action( 'init', function () {
    $labels = array(
      'name'               => __( 'Clients' ),
      'singular_name'      => __( 'Client' ),
      'menu_name'          => __( 'Clients' ),
      'name_admin_bar'     => __( 'Clients' ),
      'add_new_item'       => __( 'Ajouter un Client'),
      'new_item'           => __( 'Nouveau Client'),
      'edit_item'          => __( "Modifier le client"),
      'view_item'          => __( 'Voir'),
      'all_items'          => __( 'Tous les clients'),
      'search_items'       => __( 'Rechercher un client' ),
    );
    $args = array(
      'labels'             => $labels,
      'description'        => 'Description.',
      'show_in_menu'       => true,
      'menu_icon'          => 'dashicons-testimonial',
      'show_in_rest'       => true,
      'rest_base'          => 'client',
      'rest_controller_class' => 'WP_REST_Posts_Controller',
      'query_var'          => true,
      'rewrite'            => false,
      'capability_type'    => 'post',
      'has_archive'        => false,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array( 'title'),
      'public' => true,  // it's not public, it shouldn't have it's own permalink, and so on
      'publicly_queryable' => true,  // you should be able to query it
      'show_ui' => true,  // you should be able to edit it in wp-admin
      'exclude_from_search' => true,  // you should exclude it from search results      'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
      "show_in_graphql" => true,
      'graphql_plural_name' => 'clients',
      'graphql_single_name' =>'client'
    );
    register_post_type( 'client', $args );
  });
