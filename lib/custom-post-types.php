<?php

// Work : Type
// Project Descriptions
// Team

add_action( 'init', 'codex_' );
function codex_() {
  $work_labels = array(
    'name'               => _x( 'All Projects', 'post type general name', 'your-plugin-textdomain' ),
    'singular_name'      => _x( 'Project', 'post type singular name', 'your-plugin-textdomain' ),
    'menu_name'          => _x( 'Work Portfolio', 'admin menu', 'your-plugin-textdomain' ),
    'name_admin_bar'     => _x( 'Project', 'add new on admin bar', 'your-plugin-textdomain' ),
    'add_new'            => _x( 'Add New', 'Project', 'your-plugin-textdomain' ),
    'add_new_item'       => __( 'Add New Project', 'your-plugin-textdomain' ),
    'new_item'           => __( 'New Project', 'your-plugin-textdomain' ),
    'edit_item'          => __( 'Edit Project', 'your-plugin-textdomain' ),
    'view_item'          => __( 'View Project', 'your-plugin-textdomain' ),
    'all_items'          => __( 'All Projects', 'your-plugin-textdomain' ),
    'search_items'       => __( 'Search Projects', 'your-plugin-textdomain' ),
    'parent_item_colon'  => __( 'Parent Work:', 'your-plugin-textdomain' ),
    'not_found'          => __( 'No Projects found.', 'your-plugin-textdomain' ),
    'not_found_in_trash' => __( 'No Projects found in Trash.', 'your-plugin-textdomain' ),
  );

  $work_args = array(
    'labels'             => $work_labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'work' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => true,
    'menu_position'      => 2,
    'supports'           => array( 'title', 'thumbnail', 'editor'  ) /*'author', 'excerpt', 'comments'*/
  );


  $serv_labels = array(
    'name'               => _x( 'All Services', 'post type general name', 'your-plugin-textdomain' ),
    'singular_name'      => _x( 'Service', 'post type singular name', 'your-plugin-textdomain' ),
    'menu_name'          => _x( 'Services', 'admin menu', 'your-plugin-textdomain' ),
    'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'your-plugin-textdomain' ),
    'add_new'            => _x( 'Add New', 'Project', 'your-plugin-textdomain' ),
    'add_new_item'       => __( 'Add New Service', 'your-plugin-textdomain' ),
    'new_item'           => __( 'New Service', 'your-plugin-textdomain' ),
    'edit_item'          => __( 'Edit Service', 'your-plugin-textdomain' ),
    'view_item'          => __( 'View Service', 'your-plugin-textdomain' ),
    'all_items'          => __( 'All Services', 'your-plugin-textdomain' ),
    'search_items'       => __( 'Search Services', 'your-plugin-textdomain' ),
    'parent_item_colon'  => __( 'Parent Work:', 'your-plugin-textdomain' ),
    'not_found'          => __( 'No Services found.', 'your-plugin-textdomain' ),
    'not_found_in_trash' => __( 'No Services found in Trash.', 'your-plugin-textdomain' ),
  );

  $serv_args = array(
    'labels'             => $serv_labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'services' ),
    'capability_type'    => 'page',
    'has_archive'        => false,
    'hierarchical'       => true,
    'menu_position'      => 2,
    'supports'           => array( 'title', 'thumbnail', 'excerpt', 'editor'  ) /*'author', 'comments'*/
  );

  $proj_labels = array(
    'name'               => _x( 'Project Descriptions', 'post type general name', 'your-plugin-textdomain' ),
    'singular_name'      => _x( 'Project Description', 'post type singular name', 'your-plugin-textdomain' ),
    'menu_name'          => _x( 'Project Descriptions', 'admin menu', 'your-plugin-textdomain' ),
    'name_admin_bar'     => _x( 'Project Description', 'add new on admin bar', 'your-plugin-textdomain' ),
    'add_new'            => _x( 'Add New', 'Project Description', 'your-plugin-textdomain' ),
    'add_new_item'       => __( 'Add New Project Description', 'your-plugin-textdomain' ),
    'new_item'           => __( 'New Project Description', 'your-plugin-textdomain' ),
    'edit_item'          => __( 'Edit Project Description', 'your-plugin-textdomain' ),
    'view_item'          => __( 'View Project Description', 'your-plugin-textdomain' ),
    'all_items'          => __( 'All Project Descriptions', 'your-plugin-textdomain' ),
    'search_items'       => __( 'Search Project Descriptions', 'your-plugin-textdomain' ),
    'parent_item_colon'  => __( 'Parent Project Descriptions:', 'your-plugin-textdomain' ),
    'not_found'          => __( 'No Project Descriptions found.', 'your-plugin-textdomain' ),
    'not_found_in_trash' => __( 'No Project Descriptions found in Trash.', 'your-plugin-textdomain' ),
  );

  $proj_args = array(
    'labels'             => $proj_labels,
    'public'             => false,
    'publicly_queryable' => false,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'project-descriptions' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => true,
    'menu_position'      => 2,
    'supports'           => array( 'title' ) /*, 'excerpt', 'comments''editor', 'author',, 'thumbnail' */
  );

  $team_labels = array(
    'name'               => _x( 'Team', 'post type general name', 'your-plugin-textdomain' ),
    'singular_name'      => _x( 'Teammate', 'post type singular name', 'your-plugin-textdomain' ),
    'menu_name'          => _x( 'Team', 'admin menu', 'your-plugin-textdomain' ),
    'name_admin_bar'     => _x( 'Teammate', 'add new on admin bar', 'your-plugin-textdomain' ),
    'add_new'            => _x( 'Add New', 'Teammate', 'your-plugin-textdomain' ),
    'add_new_item'       => __( 'Add New Teammate', 'your-plugin-textdomain' ),
    'new_item'           => __( 'New Teammate', 'your-plugin-textdomain' ),
    'edit_item'          => __( 'Edit Teammate', 'your-plugin-textdomain' ),
    'view_item'          => __( 'View Teammate', 'your-plugin-textdomain' ),
    'all_items'          => __( 'All Teammates', 'your-plugin-textdomain' ),
    'search_items'       => __( 'Search Teammates', 'your-plugin-textdomain' ),
    'parent_item_colon'  => __( 'Parent Teammates:', 'your-plugin-textdomain' ),
    'not_found'          => __( 'No Teammates found.', 'your-plugin-textdomain' ),
    'not_found_in_trash' => __( 'No Teammates found in Trash.', 'your-plugin-textdomain' ),
  );

  $team_args = array(
    'labels'             => $team_labels,
    'public'             => false,
    'publicly_queryable' => false,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'team' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => true,
    'menu_position'      => 2,
    'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ) /*'author', , 'comments'*/
  );

  register_post_type( 'services', $serv_args );
  register_post_type( 'work', $work_args );
  register_post_type( 'project-descriptions', $proj_args );
  register_post_type( 'team', $team_args );

  /*
  register_taxonomy(
    'type',
    'work',
    array(
    'show_admin_column' => true,
    'hierarchical' => true,
    'label' => 'Categories',
    'query_var' => true,
    'rewrite' => array('slug' => 'work-category','with_front' => false,'hierarchical'=>true)
    )
  );

  register_taxonomy(
    'topics',
    'work',
    array(
    //'hierarchical' => false,
    'label' => 'Topics',
    'query_var' => true,
    'rewrite' => array('slug' => 'work-topic','with_front' => false)
    )
  ); */

//  remove columns that we don't need

  function my_manage_columns( $columns ) {
    unset(
      $columns['author'],
      $columns['comments'],
      $columns['date']
    );
    return $columns;
  }
  function my_manage_columns2( $columns ) {
    unset(
      //$columns['author'],
      $columns['comments'],
      $columns['date']
    );
    return $columns;
  }

  add_filter('manage_posts_columns','my_manage_columns2');
  add_filter('manage_upload_columns', 'my_manage_columns');
  add_filter('manage_pages_columns', 'my_manage_columns');
}
