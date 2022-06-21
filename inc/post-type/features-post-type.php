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
    function bluegoon_features(){
        $labels = array(
                'name'                  => __( 'Features', 'bluegoon' ),
                'singular_name'         => __( 'Feature', 'bluegoon' ),
                'add_new'               => __( 'Add New Feature', 'bluegoon' ),
                'add_new_item'          => __( 'Add New Feature', 'bluegoon' ),
                'edit_item'             => __( 'Edit Feature', 'bluegoon' ),
                'all_items'             => __( 'All Feature', 'bluegoon' ),
                'new_item'              => __( 'New Feature', 'bluegoon' ),
                'view_item'             => __( 'View Feature', 'bluegoon' ),
                'search_items'          => __( 'Search Features', 'bluegoon' ),
                'not_found'             => __( 'No Features found', 'bluegoon' ),
                'not_found_in_trash'    => __( 'No Features found in Trash', 'bluegoon' ),
                'parent_item_colon'     => __( 'Parent Feature:', 'bluegoon' ),
                'menu_name'             => __( 'Features', 'bluegoon' ),
                'featured_image'        => __( 'Feature Image', 'bluegoon' ),
                'set_featured_image'    => __( 'Set Feature Image', 'bluegoon' ),
                'remove_featured_image' => __( 'Remove Feature Image', 'bluegoon' )
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
            'supports'              => array( 'title','editor', 'custom-fields' ),
        );
        register_post_type( 'features', $args );
    }
    add_action( 'init', 'bluegoon_features' );

    