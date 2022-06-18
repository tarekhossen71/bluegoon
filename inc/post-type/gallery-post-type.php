<?php
    /**
	 * Plugin Name:       My First Plugin by Akash
	 * Plugin URI:        https://example.com/plugins/the-basics/
	 * Description:       Handle the basics with this plugin.
	 * Version:           1.10.3
	 * Requires at least: 5.2
	 * Requires PHP:      7.2
	 * Author:            John Smith
	 * Author URI:        https://author.example.com/
	 * License:           GPL v2 or later
	 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
	 * Update URI:        https://example.com/my-plugin/
	 * Text Domain:       my-basics-plugin
	 * Domain Path:       /languages
	 */
    function bluegoon_gallery(){
        $labels = array(
                'name'                  => __( 'Gallerys', 'bluegoon' ),
                'singular_name'         => __( 'Gallery', 'bluegoon' ),
                'add_new'               => __( 'Add New Gallery', 'bluegoon' ),
                'add_new_item'          => __( 'Add New Gallery', 'bluegoon' ),
                'edit_item'             => __( 'Edit Gallery', 'bluegoon' ),
                'all_items'             => __( 'All Gallery', 'bluegoon' ),
                'new_item'              => __( 'New Gallery', 'bluegoon' ),
                'view_item'             => __( 'View Gallery', 'bluegoon' ),
                'search_items'          => __( 'Search Gallerys', 'bluegoon' ),
                'not_found'             => __( 'No Gallerys found', 'bluegoon' ),
                'not_found_in_trash'    => __( 'No Gallerys found in Trash', 'bluegoon' ),
                'parent_item_colon'     => __( 'Parent Gallery:', 'bluegoon' ),
                'menu_name'             => __( 'Gallerys', 'bluegoon' ),
                'featured_image'        => __( 'Gallery Image', 'bluegoon' ),
                'set_featured_image'    => __( 'Set Gallery Image', 'bluegoon' ),
                'remove_featured_image' => __( 'Remove Gallery Image', 'bluegoon' )
        );
        $args = array(
            'labels'                => $labels,
            'hierarchical'          => false,
            'description'           => 'description',
            'taxonomies'            => array(),
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'show_in_admin_bar'     => true,
            'menu_position'         => null,
            'show_in_nav_menus'     => true,
            'publicly_queryable'    => true,
            'exclude_from_search'   => false,
            'has_archive'           => true,
            'query_var'             => true,
            'can_export'            => true,
            'rewrite'               => true,
            'capability_type'       => 'post',
            'supports'              => array( 'title','editor', 'thumbnail' ),
        );
        register_post_type( 'gellary', $args );

        register_taxonomy( 'gellary_taxonomy', array( 'gellary' ), array(
            'labels'        => array(
                'name'                  => __( 'Gallery Categories', 'bluegoon' ),
                'singular_name'         => __( 'Gallery Categories', 'bluegoon' ),
                'search_items'          => __( 'Search Gallery Categories', 'bluegoon' ),
                'popular_items'         => __( 'Popular Gallery Categories', 'bluegoon' ),
                'all_items'             => __( 'All Gallery Categories', 'bluegoon' ),
                'parent_item'           => __( 'Parent Gallery Categories', 'bluegoon' ),
                'parent_item_colon'     => __( 'Parent Gallery Categories', 'bluegoon' ),
                'edit_item'             => __( 'Edit Gallery Categories', 'bluegoon' ),
                'update_item'           => __( 'Update Gallery Categories', 'bluegoon' ),
                'add_new_item'          => __( 'Add New Gallery Categories', 'bluegoon' ),
                'new_item_name'         => __( 'New Gallery Categories', 'bluegoon' ),
                'add_or_remove_items'   => __( 'Add or remove Gallery Categories', 'bluegoon' ),
                'choose_from_most_used' => __( 'Gallery Categories', 'bluegoon' ),
                'menu_name'             => __( 'Gallery Categories', 'bluegoon' ),
            ),
            'public'                    => true,
            'show_in_nav_menus'         => true,
            'show_admin_column'         => false,
            'hierarchical'              => true,
            'show_tagcloud'             => true,
            'show_ui'                   => true,
            'query_var'                 => true,
            'rewrite'                   => true,
            'query_var'                 => true,
            'capabilities'              => array(),
        ));
    }
    add_action( 'init', 'bluegoon_gallery' );

    