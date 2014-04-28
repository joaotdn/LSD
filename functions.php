<?php

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}

//Get new images formats
if ( function_exists( 'add_image_size' ) ) { 
  //add_image_size( 'highlight-thumb', 2000, 620, true );
}

add_filter( 'jpeg_quality', 'tgm_image_full_quality' );
add_filter( 'wp_editor_set_quality', 'tgm_image_full_quality' );
/**
 * Filters the image quality for thumbnails to be at the highest ratio possible.
 *
 * Supports the new 'wp_editor_set_quality' filter added in WP 3.5.
 *
 * @since 1.0.0
 *
 * @param int $quality The default quality (90)
 * @return int $quality Amended quality (100)
 */
function tgm_image_full_quality( $quality ) {
 
    return 100;
 
}

//Get jQuery
function my_scripts_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js');
    wp_enqueue_script( 'jquery' );
}

add_action('wp_enqueue_scripts', 'my_scripts_method');

function returnId() {
  global $post, $post_id;
  return $post->ID;
}

function returnContent($pid) {
  $my_postid =  $pid; //This is page id or post id
  $content_post = get_post($my_postid);
  $content = $content_post->post_content;
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

function get_excerpt($l) {
  $e = substr(get_the_excerpt(), 0,$l);
  return $e;
}

function get_previous_post_id( $post_id ) {
    // Get a global post reference since get_adjacent_post() references it
    global $post;

    // Store the existing post object for later so we don't lose it
    $oldGlobal = $post;

    // Get the post object for the specified post and place it in the global variable
    $post = get_post( $post_id );

    // Get the post object for the previous post
    $previous_post = get_previous_post();

    // Reset our global object
    $post = $oldGlobal;

    if ( '' == $previous_post ) 
        return 0;

    return $previous_post->ID;
}

function get_next_post_id( $post_id ) {
    // Get a global post reference since get_adjacent_post() references it
    global $post;

    // Store the existing post object for later so we don't lose it
    $oldGlobal = $post;

    // Get the post object for the specified post and place it in the global variable
    $post = get_post( $post_id );

    // Get the post object for the previous post
    $next_post = get_next_post();

    // Reset our global object
    $post = $oldGlobal;

    if ( '' == $next_post ) 
        return 0;

    return $next_post->ID;
}

function get_single_term($post_id, $taxonomy) 
{
    $terms = wp_get_object_terms($post_id, $taxonomy);
    if(!is_wp_error($terms))
    {
        return '<a href="#" title="'.$terms[0]->name.'" class="text-upp font-bold get-modal" data-reveal-id="post-modal" data-reveal>'.$terms[0]->name.'</a>';   
    }
}

function get_meta_values( $key = '', $type = 'post', $status = 'publish' ) {

    global $wpdb;

    if( empty( $key ) )
        return;

    $r = $wpdb->get_col( $wpdb->prepare( "
        SELECT pm.meta_value FROM {$wpdb->postmeta} pm
        LEFT JOIN {$wpdb->posts} p ON p.ID = pm.post_id
        WHERE pm.meta_key = '%s' 
        AND p.post_status = '%s' 
        AND p.post_type = '%s'
    ", $key, $status, $type ) );

    return $r;
}

/**
 * Agrupar posts por custom field
 * http://codex.wordpress.org/Class_Reference/WP_Query#Custom_Field_Parameters
 */

/**
 * Custom Post Types
 */

//Artigos
require_once ( get_stylesheet_directory() . '/post-types/artigos.php' );

//Projetos
require_once ( get_stylesheet_directory() . '/post-types/projetos.php' );

//Pensadouro
require_once ( get_stylesheet_directory() . '/post-types/pensadouro.php' );

/**
 * Search's
 */

//Artigos
require_once ( get_stylesheet_directory() . '/includes/artigos-search.php' );

//Busca
require_once ( get_stylesheet_directory() . '/includes/search-query.php' );

//Contatos
//require_once ( get_stylesheet_directory() . '/includes/contact-form.php' );

//Parceiros
require_once ( get_stylesheet_directory() . '/includes/friends-list.php' );

?>