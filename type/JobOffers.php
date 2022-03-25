<?php

add_action( 'init', function () {
    $labels = array(
      'name'               => __( 'Offres d’emploi' ),
      'singular_name'      => __( 'Offre d’emploi' ),
      'menu_name'          => __( 'Offres d’emploi' ),
      'name_admin_bar'     => __( 'Offres d’emploi' ),
      'add_new_item'       => __( 'Ajouter une offre d’emploi'),
      'new_item'           => __( 'Nouvel offre d’emploi'),
      'edit_item'          => __( "Modifier l'offre d’emploi"),
      'view_item'          => __( 'Voir'),
      'all_items'          => __( 'Tous les offres d’emploi'),
      'search_items'       => __( 'Rechercher un JobOffer' ),
    );
    $args = array(
      'labels'             => $labels,
      'description'        => 'Description.',
      'show_in_menu'       => true,
      'menu_icon'          => 'dashicons-businessperson',
      'show_in_rest'       => true,
      'rest_base'          => 'JobOffer',
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
      'graphql_plural_name' => 'JobOffers',
      'graphql_single_name' =>'JobOffer'
    );
    register_post_type( 'job_offer', $args );
  });
