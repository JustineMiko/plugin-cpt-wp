<?php

/**
 * Trigger this file on Plugin uninstall
 * 
 * @paclage JustinePlugin
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}

// Clear Database stored data
$books = get_posts( array( 
    'post_type' => 'book', 
    'numberposts' => -1 
) );
// book variable could be named whatever we want
foreach( $books as $book ) {
    wp_delete_post( $book->ID, true );
}

// OR more dangerous version with SQL query
// global $wpdb;
// $wpdb->query( "DELETE FROM wp_posts WHERE post_type = 'book'" );
// $wpdb->query( "DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)" );
// $wpdb->query( "DELETE FROM wp_term_relationships WHERE object_id NOT IN (SELECT id FROM wp_posts)" );