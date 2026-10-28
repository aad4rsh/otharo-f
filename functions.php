<?php
/**
 * Otharo Theme Functions
 */

if ( ! function_exists( 'otharo_setup' ) ) {
	function otharo_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
		
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'otharo' ),
		) );
	}
}
add_action( 'after_setup_theme', 'otharo_setup' );

/**
 * Enqueue scripts and styles
 */
function otharo_enqueue_assets() {
	// Styles
	wp_enqueue_style( 'otharo-styles', get_template_directory_uri() . '/styles.css', array(), '1.0.0' );
	wp_enqueue_style( 'otharo-main', get_stylesheet_uri(), array(), '1.0.0' );
	
	// Scripts
	wp_enqueue_script( 'lucide', 'https://unpkg.com/lucide@latest', array(), null, true );
	wp_enqueue_script( 'locomotive-scroll', 'https://cdn.jsdelivr.net/npm/locomotive-scroll/bundled/locomotive-scroll.min.js', array(), null, true );
	wp_enqueue_script( 'otharo-script', get_template_directory_uri() . '/script.js', array( 'lucide', 'locomotive-scroll' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'otharo_enqueue_assets' );

/**
 * ACF Local Field Groups
 */
function otharo_register_acf_fields() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	// About Otharo Section
	acf_add_local_field_group( array(
		'key' => 'group_otharo_about',
		'title' => 'About Otharo Section',
		'fields' => array(
			array(
				'key' => 'field_about_heading',
				'label' => 'Heading',
				'name' => 'about_heading',
				'type' => 'text',
				'default_value' => 'OTHARO - ?????',
			),
			array(
				'key' => 'field_about_description',
				'label' => 'Description',
				'name' => 'about_description',
				'type' => 'wysiwyg',
				'tabs' => 'all',
				'toolbar' => 'basic',
				'media_upload' => 0,
			),
			array(
				'key' => 'field_about_button_text',
				'label' => 'Button Text',
				'name' => 'about_button_text',
				'type' => 'text',
				'default_value' => 'Get to Know More',
			),
			array(
				'key' => 'field_about_button_link',
				'label' => 'Button Link',
				'name' => 'about_button_link',
				'type' => 'text',
				'default_value' => '#offerings',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'front-page.php',
				),
			),
			array(
				array(
					'param' => 'page_type',
					'operator' => '==',
					'value' => 'front_page',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
	) );

	// More Than Numbers Section
	acf_add_local_field_group( array(
		'key' => 'group_otharo_impact',
		'title' => 'More Than Numbers Section',
		'fields' => array(
			array(
				'key' => 'field_impact_heading',
				'label' => 'Heading',
				'name' => 'impact_heading',
				'type' => 'text',
				'default_value' => 'More Than Numbers',
			),
			array(
				'key' => 'field_impact_subheading',
				'label' => 'Subheading',
				'name' => 'impact_subheading',
				'type' => 'textarea',
				'rows' => 3,
				'default_value' => 'Behind each metric lies countless late nights, breakthrough pivots, and resilient entrepreneurs building Nepal\'s economic future.',
			),
			array(
				'key' => 'field_impact_stats',
				'label' => 'Stats Cards',
				'name' => 'impact_stats',
				'type' => 'repeater',
				'layout' => 'block',
				'button_label' => 'Add Stat Card',
				'sub_fields' => array(
					array(
						'key' => 'field_stat_icon',
						'label' => 'Icon (Lucide name)',
						'name' => 'icon',
						'type' => 'text',
						'default_value' => 'calendar',
						'instructions' => 'e.g., calendar, users, clock, rocket',
					),
					array(
						'key' => 'field_stat_number',
						'label' => 'Number',
						'name' => 'number',
						'type' => 'text',
					),
					array(
						'key' => 'field_stat_suffix',
						'label' => 'Suffix',
						'name' => 'suffix',
						'type' => 'text',
						'default_value' => '+',
					),
					array(
						'key' => 'field_stat_label',
						'label' => 'Label',
						'name' => 'label',
						'type' => 'text',
					),
					array(
						'key' => 'field_stat_description',
						'label' => 'Description',
						'name' => 'description',
						'type' => 'textarea',
						'rows' => 2,
					),
					array(
						'key' => 'field_stat_card_style',
						'label' => 'Card Style',
						'name' => 'card_style',
						'type' => 'select',
						'choices' => array(
							'nc-white-orange' => 'White with Orange Accent',
							'nc-orange' => 'Orange',
							'nc-dark' => 'Dark',
							'nc-terracotta' => 'Terracotta',
						),
						'default_value' => 'nc-white-orange',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'front-page.php',
				),
			),
			array(
				array(
					'param' => 'page_type',
					'operator' => '==',
					'value' => 'front_page',
				),
			),
		),
		'menu_order' => 1,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
	) );

	// Incubatees CPT Fields
	acf_add_local_field_group( array(
		'key' => 'group_otharo_incubatee',
		'title' => 'Incubatee Details',
		'fields' => array(
			array(
				'key' => 'field_incubatee_logo',
				'label' => 'Logo',
				'name' => 'incubatee_logo',
				'type' => 'image',
				'return_format' => 'array',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array(
				'key' => 'field_incubatee_name',
				'label' => 'Incubatee Name',
				'name' => 'incubatee_name',
				'type' => 'text',
			),
			array(
				'key' => 'field_incubatee_description',
				'label' => 'Description',
				'name' => 'incubatee_description',
				'type' => 'textarea',
				'rows' => 4,
			),
			array(
				'key' => 'field_incubatee_year',
				'label' => 'Year',
				'name' => 'incubatee_year',
				'type' => 'text',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'incubatee',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
	) );

	// Programs CPT Fields
	acf_add_local_field_group( array(
		'key' => 'group_otharo_program',
		'title' => 'Program Details',
		'fields' => array(
			array(
				'key' => 'field_program_badge',
				'label' => 'Badge Text',
				'name' => 'program_badge',
				'type' => 'text',
				'default_value' => 'Open',
			),
			array(
				'key' => 'field_program_short_description',
				'label' => 'Short Description (for Card)',
				'name' => 'program_short_description',
				'type' => 'textarea',
				'rows' => 3,
			),
			array(
				'key' => 'field_program_card_image',
				'label' => 'Card Image',
				'name' => 'program_card_image',
				'type' => 'image',
				'return_format' => 'array',
				'preview_size' => 'medium',
				'library' => 'all',
				'instructions' => 'Falls back to featured image if empty.',
			),
			array(
				'key' => 'field_program_card_alignment',
				'label' => 'Card Alignment (Homepage)',
				'name' => 'program_card_alignment',
				'type' => 'select',
				'choices' => array(
					'left' => 'Left (Tilt Left)',
					'center' => 'Center (Upright)',
					'right' => 'Right (Tilt Right)',
				),
				'default_value' => 'center',
			),
			array(
				'key' => 'field_program_primary_button_text',
				'label' => 'Primary Button Text',
				'name' => 'program_primary_button_text',
				'type' => 'text',
				'default_value' => 'Apply Now',
			),
			array(
				'key' => 'field_program_primary_button_url',
				'label' => 'Primary Button URL',
				'name' => 'program_primary_button_url',
				'type' => 'url',
			),
			array(
				'key' => 'field_program_secondary_button_text',
				'label' => 'Secondary Button Text',
				'name' => 'program_secondary_button_text',
				'type' => 'text',
				'default_value' => 'Know More',
			),
			array(
				'key' => 'field_program_secondary_button_url',
				'label' => 'Secondary Button URL (optional)',
				'name' => 'program_secondary_button_url',
				'type' => 'url',
				'instructions' => 'Leave empty to use the program single page.',
			),
			array(
				'key' => 'field_program_hero_image',
				'label' => 'Hero Image (Single Page)',
				'name' => 'program_hero_image',
				'type' => 'image',
				'return_format' => 'array',
				'preview_size' => 'medium',
				'library' => 'all',
			),
			array(
				'key' => 'field_program_overview',
				'label' => 'Overview',
				'name' => 'program_overview',
				'type' => 'wysiwyg',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
			),
			array(
				'key' => 'field_program_eligibility',
				'label' => 'Eligibility',
				'name' => 'program_eligibility',
				'type' => 'wysiwyg',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 0,
			),
			array(
				'key' => 'field_program_benefits',
				'label' => 'Benefits',
				'name' => 'program_benefits',
				'type' => 'repeater',
				'layout' => 'block',
				'button_label' => 'Add Benefit',
				'sub_fields' => array(
					array(
						'key' => 'field_benefit_title',
						'label' => 'Title',
						'name' => 'title',
						'type' => 'text',
					),
					array(
						'key' => 'field_benefit_description',
						'label' => 'Description',
						'name' => 'description',
						'type' => 'textarea',
						'rows' => 2,
					),
				),
			),
			array(
				'key' => 'field_program_how_to_apply',
				'label' => 'How to Apply',
				'name' => 'program_how_to_apply',
				'type' => 'wysiwyg',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 0,
			),
			array(
				'key' => 'field_program_apply_cta_text',
				'label' => 'Apply CTA Text',
				'name' => 'program_apply_cta_text',
				'type' => 'text',
				'default_value' => 'Apply for this Program',
			),
			array(
				'key' => 'field_program_apply_cta_url',
				'label' => 'Apply CTA URL',
				'name' => 'program_apply_cta_url',
				'type' => 'url',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'program',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
	) );
}
add_action( 'acf/init', 'otharo_register_acf_fields' );

/**
 * Register Custom Post Type: Incubatees
 */
function otharo_register_incubatees_cpt() {
	$labels = array(
		'name'                  => _x( 'Incubatees', 'Post Type General Name', 'otharo' ),
		'singular_name'         => _x( 'Incubatee', 'Post Type Singular Name', 'otharo' ),
		'menu_name'             => __( 'Incubatees', 'otharo' ),
		'name_admin_bar'        => __( 'Incubatee', 'otharo' ),
		'archives'              => __( 'Incubatee Archives', 'otharo' ),
		'attributes'            => __( 'Incubatee Attributes', 'otharo' ),
		'parent_item_colon'     => __( 'Parent Incubatee:', 'otharo' ),
		'all_items'             => __( 'All Incubatees', 'otharo' ),
		'add_new_item'          => __( 'Add New Incubatee', 'otharo' ),
		'add_new'               => __( 'Add New', 'otharo' ),
		'new_item'              => __( 'New Incubatee', 'otharo' ),
		'edit_item'             => __( 'Edit Incubatee', 'otharo' ),
		'update_item'           => __( 'Update Incubatee', 'otharo' ),
		'view_item'             => __( 'View Incubatee', 'otharo' ),
		'view_items'            => __( 'View Incubatees', 'otharo' ),
		'search_items'          => __( 'Search Incubatee', 'otharo' ),
		'not_found'             => __( 'Not found', 'otharo' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'otharo' ),
		'featured_image'        => __( 'Featured Image', 'otharo' ),
		'set_featured_image'    => __( 'Set featured image', 'otharo' ),
		'remove_featured_image' => __( 'Remove featured image', 'otharo' ),
		'use_featured_image'    => __( 'Use as featured image', 'otharo' ),
		'insert_into_item'      => __( 'Insert into incubatee', 'otharo' ),
		'uploaded_to_this_item' => __( 'Uploaded to this incubatee', 'otharo' ),
		'items_list'            => __( 'Incubatees list', 'otharo' ),
		'items_list_navigation' => __( 'Incubatees list navigation', 'otharo' ),
		'filter_items_list'     => __( 'Filter incubatees list', 'otharo' ),
	);

	$args = array(
		'label'                 => __( 'Incubatee', 'otharo' ),
		'description'           => __( 'Otharo Incubatees', 'otharo' ),
		'labels'                => $labels,
			'supports'              => array( 'title', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);

	register_post_type( 'incubatee', $args );
}
add_action( 'init', 'otharo_register_incubatees_cpt', 0 );

/**
 * Register Custom Post Type: Programs
 */
function otharo_register_programs_cpt() {
	$labels = array(
		'name'                  => _x( 'Programs', 'Post Type General Name', 'otharo' ),
		'singular_name'         => _x( 'Program', 'Post Type Singular Name', 'otharo' ),
		'menu_name'             => __( 'Programs', 'otharo' ),
		'name_admin_bar'        => __( 'Program', 'otharo' ),
		'archives'              => __( 'Program Archives', 'otharo' ),
		'attributes'            => __( 'Program Attributes', 'otharo' ),
		'parent_item_colon'     => __( 'Parent Program:', 'otharo' ),
		'all_items'             => __( 'All Programs', 'otharo' ),
		'add_new_item'          => __( 'Add New Program', 'otharo' ),
		'add_new'               => __( 'Add New', 'otharo' ),
		'new_item'              => __( 'New Program', 'otharo' ),
		'edit_item'             => __( 'Edit Program', 'otharo' ),
		'update_item'           => __( 'Update Program', 'otharo' ),
		'view_item'             => __( 'View Program', 'otharo' ),
		'view_items'            => __( 'View Programs', 'otharo' ),
		'search_items'          => __( 'Search Program', 'otharo' ),
		'not_found'             => __( 'Not found', 'otharo' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'otharo' ),
		'featured_image'        => __( 'Featured Image', 'otharo' ),
		'set_featured_image'    => __( 'Set featured image', 'otharo' ),
		'remove_featured_image' => __( 'Remove featured image', 'otharo' ),
		'use_featured_image'    => __( 'Use as featured image', 'otharo' ),
		'insert_into_item'      => __( 'Insert into program', 'otharo' ),
		'uploaded_to_this_item' => __( 'Uploaded to this program', 'otharo' ),
		'items_list'            => __( 'Programs list', 'otharo' ),
		'items_list_navigation' => __( 'Programs list navigation', 'otharo' ),
		'filter_items_list'     => __( 'Filter programs list', 'otharo' ),
	);

	$args = array(
		'label'                 => __( 'Program', 'otharo' ),
		'description'           => __( 'Otharo Programs', 'otharo' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 21,
		'menu_icon'             => 'dashicons-rocket',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
		'rewrite'               => array( 'slug' => 'programs' ),
	);

	register_post_type( 'program', $args );
}
add_action( 'init', 'otharo_register_programs_cpt', 0 );
