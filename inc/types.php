<?php
//load custom post type [chat]
function work() {

  $labels = array(
    'name'                  => _x( 'Case studies', 'Post Type General Name', 'evolt' ),
    'singular_name'         => _x( 'Case study', 'Post Type Singular Name', 'evolt' ),
    'menu_name'             => __( 'Case studies', 'evolt' ),
    'name_admin_bar'        => __( 'Case studies', 'evolt' ),
    'archives'              => __( 'Toutes les case studies', 'evolt' ),
    'parent_item_colon'     => __( 'Case study parente', 'evolt' ),
    'all_items'             => __( 'Toutes case studies', 'evolt' ),
    'add_new_item'          => __( 'Ajouter une nouvelle case study', 'evolt' ),
    'add_new'               => __( 'Ajouter une case study', 'evolt' ),
    'new_item'              => __( 'Nouvelle case study', 'evolt' ),
    'edit_item'             => __( 'Editer la case study', 'evolt' ),
    'update_item'           => __( 'Mettre la case study', 'evolt' ),
    'view_item'             => __( 'Voir la case study', 'evolt' ),
    'search_items'          => __( 'Chercher une case study', 'evolt' ),
    'not_found'             => __( 'Aucune case study trouvée', 'evolt' ),
    'not_found_in_trash'    => __( 'Aucune case study trouvée dans la corbeille', 'evolt' ),
    'featured_image'        => __( '', 'evolt' ),
    'set_featured_image'    => __( '', 'evolt' ),
    'remove_featured_image' => __( '', 'evolt' ),
    'use_featured_image'    => __( '', 'evolt' ),
    'insert_into_item'      => __( 'Insérer', 'evolt' ),
    'uploaded_to_this_item' => __( '', 'evolt' ),
    'items_list'            => __( 'Liste des case studies', 'evolt' ),
    'items_list_navigation' => __( '', 'evolt' ),
    'filter_items_list'     => __( '', 'evolt' ),
  );
  $args = array(
    'label'                 => __( 'Case studies', 'evolt' ),
    'description'           => __( '', 'evolt' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'author', 'editor', 'thumbnail', 'page-attributes', 'post-formats' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-star-empty',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'work', $args );

}
add_action( 'init', 'work', 0 );


//load custom post type [chat]
function chat() {

  $labels = array(
    'name'                  => _x( 'Chat', 'Post Type General Name', 'evolt' ),
    'singular_name'         => _x( 'Chat', 'Post Type Singular Name', 'evolt' ),
    'menu_name'             => __( 'Chat', 'evolt' ),
    'name_admin_bar'        => __( 'Chat', 'evolt' ),
    'archives'              => __( 'Tous les chats', 'evolt' ),
    'parent_item_colon'     => __( 'Chat parente', 'evolt' ),
    'all_items'             => __( 'Tous les chats', 'evolt' ),
    'add_new_item'          => __( 'Ajouter un nouveau chat', 'evolt' ),
    'add_new'               => __( 'Ajouter un chat', 'evolt' ),
    'new_item'              => __( 'Nouveau chat', 'evolt' ),
    'edit_item'             => __( 'Editer le chat', 'evolt' ),
    'update_item'           => __( 'Mettre le chat à jour', 'evolt' ),
    'view_item'             => __( 'Voir le chat', 'evolt' ),
    'search_items'          => __( 'Chercher un chat', 'evolt' ),
    'not_found'             => __( 'Aucun chat trouvé', 'evolt' ),
    'not_found_in_trash'    => __( 'Aucun chat trouvé dans la corbeille', 'evolt' ),
    'featured_image'        => __( '', 'evolt' ),
    'set_featured_image'    => __( '', 'evolt' ),
    'remove_featured_image' => __( '', 'evolt' ),
    'use_featured_image'    => __( '', 'evolt' ),
    'insert_into_item'      => __( 'Insérer dans le chat', 'evolt' ),
    'uploaded_to_this_item' => __( '', 'evolt' ),
    'items_list'            => __( 'Liste des chats', 'evolt' ),
    'items_list_navigation' => __( '', 'evolt' ),
    'filter_items_list'     => __( '', 'evolt' ),
  );
  $args = array(
    'label'                 => __( 'Chat', 'evolt' ),
    'description'           => __( 'Post Type Description', 'evolt' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'author', 'editor', 'thumbnail', 'page-attributes', 'post-formats' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-admin-comments',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'chat', $args );

}
add_action( 'init', 'chat', 0 );


//Custom post type "Syntheses"
function synthese() {

  $labelsSynthese = array(
    'name'                  => _x( 'Réponses du chat', 'Post Type General Name', 'evolt' ),
    'singular_name'         => _x( 'Réponse du chat', 'Post Type Singular Name', 'evolt' ),
    'menu_name'             => __( 'Réponses', 'evolt' ),
    'name_admin_bar'        => __( 'Réponses du chat', 'evolt' ),
    'archives'              => __( 'Toutes les réponses', 'evolt' ),
    'parent_item_colon'     => __( 'Réponse parente', 'evolt' ),
    'all_items'             => __( 'Toutes les réponses', 'evolt' ),
    'add_new_item'          => __( 'Ajouter une réponse', 'evolt' ),
    'add_new'               => __( 'Ajouter une réponse', 'evolt' ),
    'new_item'              => __( 'Nouvelle réponse', 'evolt' ),
    'edit_item'             => __( 'Editer la réponse', 'evolt' ),
    'update_item'           => __( 'Mettre la réponse à jour', 'evolt' ),
    'view_item'             => __( 'Voir la réponse', 'evolt' ),
    'search_items'          => __( 'Chercher une réponse', 'evolt' ),
    'not_found'             => __( 'Aucune réponse trouvée', 'evolt' ),
    'not_found_in_trash'    => __( 'Aucune réponse trouvée dans la corbeille', 'evolt' ),
    'featured_image'        => __( '', 'evolt' ),
    'set_featured_image'    => __( '', 'evolt' ),
    'remove_featured_image' => __( '', 'evolt' ),
    'use_featured_image'    => __( '', 'evolt' ),
    'insert_into_item'      => __( 'Insérer dans la réponse', 'evolt' ),
    'uploaded_to_this_item' => __( '', 'evolt' ),
    'items_list'            => __( 'Liste des réponses', 'evolt' ),
    'items_list_navigation' => __( '', 'evolt' ),
    'filter_items_list'     => __( '', 'evolt' ),
  );
  $argsSynthese = array(
    'label'                 => __( 'Réponses', 'evolt' ),
    'description'           => __( 'Post Type Description', 'evolt' ),
    'labels'                => $labelsSynthese,
    'supports'              => array( 'title', 'author', 'editor', 'thumbnail', 'page-attributes', 'post-formats' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 6,
    'menu_icon'             => 'dashicons-admin-comments',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
  );
  register_post_type( 'synthese', $argsSynthese );

}
add_action( 'init', 'synthese', 0 );

function __update_post_meta( $post_id, $field_name, $value = '' ) {
  if ( empty( $value ) OR ! $value )
  {
      delete_post_meta( $post_id, $field_name );
  }
  elseif ( ! get_post_meta( $post_id, $field_name ) )
  {
      add_post_meta( $post_id, $field_name, $value );
  }
  else
  {
      update_post_meta( $post_id, $field_name, $value );
  }
}

add_filter( 'acf/fields/wysiwyg/toolbars' , 'my_toolbars'  );
function my_toolbars( $toolbars )
{
  return $toolbars;
}


// Ajax function wp_insert_post (synthèses)
add_action( 'wp_ajax_nopriv_evolt_create', 'evolt_create' );
add_action( 'wp_ajax_evolt_create', 'evolt_create' );

function evolt_create() {

  $results = '';

  $post_title = $_POST['post_title'];
  $questions = $_POST['questions'];
  $name = $_POST['name'];
  $email = $_POST['email'];


  if(isset($_POST['post_title']) && isset($_POST['questions'])) {
    // Create post object
    $new_evolt_post = array(
      'post_type'   => 'synthese',
      'post_title'  => $post_title,
      'post_content' => $questions,
      'post_status' => 'pending',
      'post_author' => 1,
    );

    // Insert the post into the database
    $the_post_id = wp_insert_post( $new_evolt_post );

    __update_post_meta( $the_post_id, 'nom_synthese', $name );
    __update_post_meta( $the_post_id, 'email_synthese', $email );

    $imgUrl = get_field('logo_2', 'option');
    $emailC = get_field('email_contact', 'option');
    $headers = 'From: Nouvelles trajectoires <noreply@nouvelles-trajectoires.evolt.fr>';


    $body = sprintf( '<h1>Bonjour</h1>
      <p>Une nouvelle personne vient de prendre contact sur votre site Internet : </p>
      <p>Nom : <strong>'. $name . '</strong> <br />
      email : <strong>'. $email . '</strong> <br />
      Voir de détail : <br />
       ' . $questions .'</p>
       <p><strong>permalien :</strong> ' . get_permalink($the_post_id) . '</p>'
    );

    function wpdocs_set_html_mail_content_type() {
      return 'text/html';
    }
    add_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );

    wp_mail( $emailC, 'Une personne a laissé un message', $body, $headers );

   remove_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );

   die($results);
  }

};
