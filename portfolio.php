<?php
/*
Plugin Name: Portfolio by BestWebSoft
Plugin URI: https://bestwebsoft.com/products/wordpress/plugins/portfolio/
Description: Create your personal portfolio WordPress website. Manage and showcase past projects to get more clients.
Author: BestWebSoft
Text Domain: portfolio
Domain Path: /languages
Version: 2.56
Author URI: https://bestwebsoft.com/
License: GPLv2 or later
*/

/*
	@ Copyright 2021  BestWebSoft  ( https://support.bestwebsoft.com )

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/* Function are using to add on admin-panel Wordpress page 'bws_panel' and sub-page of this plugin */
if ( ! function_exists( 'add_prtfl_admin_menu' ) ) {
	function add_prtfl_admin_menu() {
		global $submenu, $prtfl_options, $prtfl_plugin_info, $wp_version;

		if ( empty( $prtfl_options ) ) {
			register_prtfl_settings();
		}

		$settings = add_submenu_page( 'edit.php?post_type=' . $prtfl_options['post_type_name'], __( 'Portfolio Settings', 'portfolio' ), __( 'Settings', 'portfolio' ), 'manage_options', 'portfolio.php', 'prtfl_settings_page' );

		add_submenu_page( 'edit.php?post_type=' . $prtfl_options['post_type_name'], 'BWS Panel', 'BWS Panel', 'manage_options', 'prtfl-bws-panel', 'bws_add_menu_render' );

		if ( isset( $submenu['edit.php?post_type=' . $prtfl_options['post_type_name']] ) ) {
			$submenu['edit.php?post_type=' . $prtfl_options['post_type_name']][] = array(
				'<span style="color:#d86463"> ' . __( 'Upgrade to Pro', 'portfolio' ) . '</span>',
				'manage_options',
				'https://bestwebsoft.com/products/wordpress/plugins/portfolio/?k=f047e20c92c972c398187a4f70240285&pn=74&v=' . $prtfl_plugin_info["Version"] . '&wp_v=' . $wp_version );
		}

		add_action( 'load-' . $settings, 'prtfl_add_tabs' );
		add_action( 'load-post-new.php', 'prtfl_add_tabs' );
		add_action( 'load-post.php', 'prtfl_add_tabs' );
		add_action( 'load-edit.php', 'prtfl_add_tabs' );
	}
}

/* Internationalization, first(!)  */
if ( ! function_exists( 'prtfl_plugins_loaded' ) ) {
	function prtfl_plugins_loaded() {
		load_plugin_textdomain( 'portfolio', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}
}

if ( ! function_exists( 'prtfl_init' ) ) {
	function prtfl_init() {
		global $prtfl_boxes, $prtfl_plugin_info;

		require_once( dirname( __FILE__ ) . '/bws_menu/bws_include.php' );
		bws_include_init( plugin_basename( __FILE__ ) );

		if ( ! $prtfl_plugin_info ) {
			if ( ! function_exists( 'get_plugin_data' ) ) {
				require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
			}
			$prtfl_plugin_info = get_plugin_data( __FILE__ );
		}
		/* Function check if plugin is compatible with current WP version  */
		bws_wp_min_version_check( plugin_basename( __FILE__ ), $prtfl_plugin_info, '4.5' );

		$prtfl_boxes['Portfolio-Info'] = array(
			array(
				'name'	=> '_prtfl_short_descr',
				'title'	=> __( 'Short description', 'portfolio' ),
				'type'	=> 'text'
			),
			array(
				'name'	=> '_prtfl_date_compl',
				'title'	=> __( 'Date of completion', 'portfolio' ),
				'type'	=> 'text'
			),
			array(
				'name'	=> '_prtfl_link',
				'title'	=> __( 'Project, URL', 'portfolio' ),
				'type'	=> 'url'
			),
			array(
				'name'	=> '_prtfl_svn',
				'title'	=> __( 'Source Files, URL', 'portfolio' ),
				'type'	=> 'url'
			)
		);
		/* Call register settings function */
		register_prtfl_settings();
		/* Register post type and taxonomy for portfolio */
		prtfl_post_type_portfolio();

		if ( ! is_admin() ) {
			/* add template for gallery pages */
			add_action( 'template_include', 'prtfl_template_include' );
		}

		/* demo data */
		$demo_options = get_option( 'prtfl_demo_options' );
		if ( ! empty( $demo_options ) || ( isset( $_GET['page'] ) && 'portfolio.php' == $_GET['page'] ) ) {
			prtfl_include_demo_data();
		}
	}
}

if ( ! function_exists( 'prtfl_admin_init' ) ) {
	function prtfl_admin_init() {
		global $bws_plugin_info, $prtfl_plugin_info, $bws_shortcode_list, $wpdb, $pagenow, $prtfl_options;

		if ( empty( $bws_plugin_info ) ) {
			$bws_plugin_info = array( 'id' => '74', 'version' => $prtfl_plugin_info["Version"] );
		}

		/* add Portfolio to global $bws_shortcode_list  */
		$bws_shortcode_list['prtfl'] = array( 'name' => 'Portfolio', 'js_function' => 'prtfl_shortcode_init' );

		if ( 'plugins.php' == $pagenow ) {
			/* Install the option defaults */
			if ( function_exists( 'bws_plugin_banner_go_pro' ) ) {
				register_prtfl_settings();
				bws_plugin_banner_go_pro( $prtfl_options, $prtfl_plugin_info, 'prtfl', 'portfolio', '56e6c97d1bca3199fb16cb817793a8f6', '74', 'portfolio' );
			}
		}
	}
}

/* Function for activation plugin */
if ( ! function_exists( 'prtfl_plugin_activate' ) ) {
	function prtfl_plugin_activate() {
		if ( is_multisite() ) {
			switch_to_blog( 1 );
			register_uninstall_hook( __FILE__, 'prtfl_plugin_uninstall' );
			restore_current_blog();
		} else {
			register_uninstall_hook( __FILE__, 'prtfl_plugin_uninstall' );
		}
	}
}

/* Register settings function */
if ( ! function_exists( 'register_prtfl_settings' ) ) {
	function register_prtfl_settings() {
		global $prtfl_options, $prtfl_plugin_info, $wpdb;

		/* Install the option defaults */
		if ( ! get_option( 'prtfl_options' ) ) {
			$option_defaults = prtfl_get_options_default();
			add_option( 'prtfl_options', $option_defaults );
		}

		/* Get options from the database */
		$prtfl_options = get_option( 'prtfl_options' );

		/* Array merge incase this version has added new options */
		if ( ! isset( $prtfl_options['plugin_option_version'] ) || $prtfl_options['plugin_option_version'] != $prtfl_plugin_info["Version"] ) {

			$wpdb->query( "UPDATE {$wpdb->prefix}posts SET post_type = 'bws-portfolio' WHERE post_type = 'portfolio'" );

			$option_defaults = prtfl_get_options_default();

			if ( ! isset( $prtfl_options['plugin_option_version'] ) || $prtfl_options['plugin_option_version'] < '2.29' ) {
				$option_defaults['widget_updated'] = 0;
			}
			/* Add options 'post_type_name' */
			if ( ! isset( $prtfl_options['post_type_name'] ) ) {
				$option_defaults['post_type_name'] = 'bws-portfolio';
			}

			$prtfl_options = array_merge( $option_defaults, $prtfl_options );
			$prtfl_options['plugin_option_version'] = $option_defaults['plugin_option_version'];
			/* show pro features */
			$prtfl_options['hide_premium_options'] = array();

			update_option( 'prtfl_options', $prtfl_options );
		}

		if ( function_exists( 'add_image_size' ) ) {
			if ( 'portfolio-thumb' == $prtfl_options['image_size_album'] ) {
				add_image_size( 'portfolio-thumb', $prtfl_options['custom_size_px']['portfolio-thumb'][0], $prtfl_options['custom_size_px']['portfolio-thumb'][1], true );
			}
			if ( 'portfolio-photo-thumb' == $prtfl_options['image_size_photo'] ) {
				add_image_size( 'portfolio-photo-thumb', $prtfl_options['custom_size_px']['portfolio-photo-thumb'][0], $prtfl_options['custom_size_px']['portfolio-photo-thumb'][1], true );
			}
		}
	}
}

/**
 * Get Plugin default options
 */
if ( ! function_exists( 'prtfl_get_options_default' ) ) {
	function prtfl_get_options_default() {
		global $prtfl_plugin_info;

		$option_defaults = array(
			/* internal general */
			'plugin_option_version' 					=> $prtfl_plugin_info["Version"],
			'first_install'								=> strtotime( "now" ),
			'suggest_feature_banner'					=> 1,
			'display_settings_notice'					=> 1,
			/* internal */
			'display_demo_notice'						=> 1,
			/* settings */
			'image_size_album'							=> 'medium',
			'image_size_photo'							=> 'thumbnail',
			'custom_size_px'							=> array(
															'portfolio-thumb' => array( 280, 300 ),
															'portfolio-photo-thumb' => array( 240, 260 )
														),
			'page_id_portfolio_template'				=> '',
			'order_by' 									=>	'date',
			'order' 									=>	'DESC',
			'custom_image_row_count'					=>	3,
			'custom_portfolio_row_count'				=>  1,
			'date_additional_field' 					=>	1,
			'link_additional_field' 					=>	1,
			'shrdescription_additional_field' 			=>	1,
			'description_additional_field' 				=>	1,
			'svn_additional_field' 						=>	1,
			'svn_additional_field_for_non_logged'		=>	1,
			'executor_additional_field' 				=>	1,
			'technologies_additional_field'				=>	1,
			'link_additional_field_for_non_registered'	=>	1,
			'date_text_field'							=>	__( 'Date of completion:', 'portfolio' ),
			'link_text_field'							=>	__( 'Project, URL:', 'portfolio' ),
			'shrdescription_text_field'					=>	__( 'Short description:', 'portfolio' ),
			'description_text_field'					=>	__( 'Description:', 'portfolio' ),
			'svn_text_field'							=>	__( 'Source Files, URL:', 'portfolio' ),
			'executor_text_field'						=>	__( 'Executor:', 'portfolio' ),
			'screenshot_text_field'						=>	__( 'More screenshots:', 'portfolio' ),
			'technologies_text_field'					=>	__( 'Technologies:', 'portfolio' ),
			/* misc */
			'slug' 										=>	'portfolio',
			'post_type_name'							=>	'bws-portfolio',
			/* other */
			'widget_updated' 							=>	1, /* this option is for updating plugin was added in v2.29 */
			'flush_rewrite_rules'						=>	1,
		);
		return $option_defaults;
	}
}

/* Create post type for portfolio */
if ( ! function_exists( 'prtfl_post_type_portfolio' ) ) {
	function prtfl_post_type_portfolio() {
		global $wpdb, $prtfl_options;

		register_post_type(
			$prtfl_options['post_type_name'],
			array(
				'labels' => array(
					'name'					=> __( 'Portfolio', 'portfolio' ),
					'all_items'				=> __( 'Projects', 'portfolio' ),
					'singular_name'			=> __( 'Project', 'portfolio' ),
					'add_new'				=> __( 'Add New', 'portfolio' ),
					'add_new_item'			=> __( 'Add New Project', 'portfolio' ),
					'edit'					=> __( 'Edit', 'portfolio' ),
					'edit_item'				=> __( 'Edit Project', 'portfolio' ),
					'new_item'				=> __( 'New Project', 'portfolio' ),
					'view'					=> __( 'View Project', 'portfolio' ),
					'view_item'				=> __( 'View Project', 'portfolio' ),
					'search_items'			=> __( 'Search Projects', 'portfolio' ),
					'not_found'				=> __( 'No project found', 'portfolio' ),
					'not_found_in_trash'	=> __( 'No project found in Trash', 'portfolio' ),
					'parent'				=> __( 'Parent Project', 'portfolio' ),
					'filter_items_list'		=> __( 'Filter projects list', 'portfolio' ),
					'items_list_navigation'	=> __( 'Projects list navigation', 'portfolio' ),
					'items_list'			=> __( 'Projects list', 'portfolio' )
				),
				'description'			=> __( 'Create a project item', 'portfolio' ),
				'public'				=> true,
				'show_ui'				=> true,
				'publicly_queryable'	=> true,
				'exclude_from_search'	=> true,
				'hierarchical'			=> true,
				'query_var'				=> true,
				'register_meta_box_cb'	=> 'prtfl_init_metaboxes',
				'rewrite'				=> array( 'slug' => $prtfl_options['slug'] ),
				'menu_icon'				=> 'dashicons-id-alt',
				'supports'				=> array(
					'title', /* Text input field to create a post title. */
					'editor',
					'custom-fields',
					'comments', /* Ability to turn on/off comments. */
					'thumbnail', /* Displays a box for featured image. */
					'author',
					'page-attributes'
				)
			)
		);

		register_taxonomy(
			'portfolio_executor_profile',
			$prtfl_options['post_type_name'],
			array(
				'hierarchical'			=> false,
				'update_count_callback' => '_update_post_term_count',
				'labels'				=> array(
					'name'							=> __( 'Executors', 'portfolio' ),
					'singular_name'					=> __( 'Executor', 'portfolio' ),
					'search_items'					=> __( 'Search Executors', 'portfolio' ),
					'popular_items'					=> __( 'Popular Executors', 'portfolio' ),
					'all_items'						=> __( 'All Executors', 'portfolio' ),
					'parent_item'					=> __( 'Parent Executor', 'portfolio' ),
					'parent_item_colon'				=> __( 'Parent Executor:', 'portfolio' ),
					'edit_item'						=> __( 'Edit Executor', 'portfolio' ),
					'update_item'					=> __( 'Update Executor', 'portfolio' ),
					'add_new_item'					=> __( 'Add New Executor', 'portfolio' ),
					'new_item_name'					=> __( 'New Executor Name', 'portfolio' ),
					'separate_items_with_commas'	=> __( 'Separate executors with commas', 'portfolio' ),
					'add_or_remove_items'			=> __( 'Add or remove Executor', 'portfolio' ),
					'choose_from_most_used'			=> __( 'Choose from the most used Executors', 'portfolio' ),
					'menu_name'						=> __( 'Executors', 'portfolio' ),
					'items_list_navigation' 		=> __( 'Executors list navigation', 'portfolio' ),
					'items_list'					=> __( 'Executors list', 'portfolio' )
				),
				'sort'					=> true,
				'args'					=> array( 'orderby' => 'term_order' ),
				'rewrite'				=> array( 'slug' => 'executor_profile' ),
				'show_tagcloud'			=> false
			)
		);

		register_taxonomy(
			'portfolio_technologies',
			$prtfl_options['post_type_name'],
			array(
				'hierarchical'			=> false,
				'update_count_callback'	=> '_update_post_term_count',
				'labels'				=> array(
					'name'							=> __( 'Technologies', 'portfolio' ),
					'singular_name'					=> __( 'Technology', 'portfolio' ),
					'search_items'					=> __( 'Search Technologies', 'portfolio' ),
					'popular_items'					=> __( 'Popular Technologies', 'portfolio' ),
					'all_items'						=> __( 'All Technologies', 'portfolio' ),
					'parent_item'					=> __( 'Parent Technology', 'portfolio' ),
					'parent_item_colon'				=> __( 'Parent Technology:', 'portfolio' ),
					'edit_item'						=> __( 'Edit Technology', 'portfolio' ),
					'update_item'					=> __( 'Update Technology', 'portfolio' ),
					'add_new_item'					=> __( 'Add New Technology', 'portfolio' ),
					'new_item_name'					=> __( 'New Technology Name', 'portfolio' ),
					'separate_items_with_commas'	=> __( 'Separate technologies with commas', 'portfolio' ),
					'add_or_remove_items'			=> __( 'Add or remove Technology', 'portfolio' ),
					'choose_from_most_used'			=> __( 'Choose from the most used technologies', 'portfolio' ),
					'menu_name'						=> __( 'Technologies', 'portfolio' ),
					'items_list_navigation'			=> __( 'Technologies list navigation', 'portfolio' ),
					'items_list'					=> __( 'Technologies list', 'portfolio' )
				),
				'query_var'				=> 'technologies',
				'rewrite'				=> array( 'slug' => 'technologies' ),
				'show_ui'				=> true,
				'show_tagcloud' 		=> false
			)
		);

		if ( isset( $prtfl_options["flush_rewrite_rules"] ) && 1 == $prtfl_options["flush_rewrite_rules"]  ) {
			flush_rewrite_rules();
			$prtfl_options["flush_rewrite_rules"] = 0;
			update_option( 'prtfl_options', $prtfl_options );
		}
	}
}

/**
 * Plugin include demo
 * @return void
 */
if ( ! function_exists( 'prtfl_include_demo_data' ) ) {
	function prtfl_include_demo_data() {
		global $prtfl_BWS_demo_data;
		require_once( plugin_dir_path( __FILE__ ) . 'inc/demo-data/class-bws-demo-data.php' );
		$args = array(
			'plugin_basename' 	=> plugin_basename( __FILE__ ),
			'plugin_prefix'		=> 'prtfl_',
			'plugin_name'		=> 'Portfolio',
			'plugin_page'		=> 'portfolio.php&bws_active_tab=import-export',
			'demo_folder'		=> plugin_dir_path( __FILE__ ) . 'inc/demo-data/'
		);
		$prtfl_BWS_demo_data = new Bws_Demo_Data( $args );

		/* filter for image url from demo data */
		add_filter( 'wp_get_attachment_url', array( $prtfl_BWS_demo_data, 'bws_wp_get_attachment_url' ), 10, 2 );
		add_filter( 'wp_get_attachment_image_attributes', array( $prtfl_BWS_demo_data, 'bws_wp_get_attachment_image_attributes' ), 10, 3 );
		add_filter( 'wp_update_attachment_metadata',array( $prtfl_BWS_demo_data, 'bws_wp_update_attachment_metadata' ), 10, 2 );
	}
}

/**
 * Plugin settings page
 * @return void
 */
if ( ! function_exists( 'prtfl_settings_page' ) ) {
	function prtfl_settings_page() {
		if ( ! class_exists( 'Bws_Settings_Tabs' ) )
    		require_once( dirname( __FILE__ ) . '/bws_menu/class-bws-settings.php' );
		require_once( dirname( __FILE__ ) . '/inc/class-prtfl-settings.php' );
		$page = new Prtfl_Settings_Tabs( plugin_basename( __FILE__ ) );
        if ( method_exists( $page,'add_request_feature' ) )
            $page->add_request_feature(); ?>
		<div class="wrap">
			<h1><?php _e( 'Portfolio Settings', 'portfolio' ); ?></h1>
			<?php $page->display_content(); ?>
		</div>
	<?php }
}

/* add query_var "post_type" in case we have another custom post type with query_var 'portfolio' (example: jetpack portfolio) */
if ( ! function_exists( 'prtfl_request_filter' ) ) {
	function prtfl_request_filter( $query_vars ) {
		global $prtfl_options;
		if ( isset( $query_vars["post_type"] ) && 'jetpack-portfolio' == $query_vars["post_type"] ) {
			if ( ! get_posts( $query_vars ) ) {
				$query_vars["post_type"] = $prtfl_options['post_type_name'];
			}
		}
		return $query_vars;
	}
}

if ( ! function_exists( 'prtfl_technologies_get_posts' ) ) {
	function prtfl_technologies_get_posts( $query ) {
		global $prtfl_options;

		if ( ( isset( $query->query_vars["technologies"] ) || isset( $query->query_vars["portfolio_executor_profile"] ) ) && ( ! is_admin() ) ) {
			$query->set( 'post_type', array( $prtfl_options['post_type_name'] ) );
		}
		return $query;
	}
}

/**
 * Class extends WP class WP_Widget, and create new widget
 */
if ( ! class_exists( 'portfolio_technologies_widget' ) ) {
	class portfolio_technologies_widget extends WP_Widget {
		/* constructor of class */
		function __construct() {
			parent::__construct(
					'portfolio_technologies_widget',
					__( 'Technologies', 'portfolio' ),
					array( 'description' => __( 'The tag cloud with your most used portfolio technologies.', 'portfolio' ) )
				);
		}
		/* Function to displaying widget in front end */
		function widget( $args, $instance ) {
			$widget_title = isset( $instance['widget_title'] ) ? $instance['widget_title'] : null;
			$widget_title = apply_filters( 'widget_title', $widget_title, $instance, $this->id_base );
			echo $args['before_widget'];
			if ( $widget_title )
				echo $args['before_title'] . $widget_title . $args['after_title'];
			echo '<div class="tagcloud">';
			wp_tag_cloud( apply_filters( 'widget_tag_cloud_args', array( 'taxonomy' => 'portfolio_technologies', 'number' => 0 ) ) );
			echo "</div>\n";
			echo $args['after_widget'];
		}
		/* Function to save widget settings */
		function update( $new_instance, $old_instance ) {
			$instance = array();
			$instance['widget_title'] = ( ! empty( $new_instance['widget_title'] ) ) ? strip_tags( $new_instance['widget_title'] ) : null;
			return $instance;
		}
		/* Function to displaying widget settings in back end */
		function form( $instance ) {
			$widget_title = isset( $instance['widget_title'] ) ? stripslashes( esc_html( $instance['widget_title'] ) ) : null; ?>
			<p>
				<label for="<?php echo $this->get_field_id( 'widget_title' ); ?>"><?php _e( 'Title', 'portfolio' ); ?>:</label>
				<input class="widefat" id="<?php echo $this->get_field_id( 'widget_title' ); ?>" name="<?php echo $this->get_field_name( 'widget_title' ); ?>" type="text" value="<?php echo esc_attr( $widget_title ); ?>"/>
			</p>
		<?php }
	}
}
if ( ! function_exists( 'prtfl_register_widget' ) ) {
	function prtfl_register_widget() {
		register_widget( 'portfolio_technologies_widget' );
	}
}

/* Create custom permalinks for portfolio post type */
if ( ! function_exists( 'prtfl_custom_permalinks' ) ) {
	function prtfl_custom_permalinks( $rules ) {
		global $prtfl_options;
		$newrules = array();

		if ( empty( $prtfl_options ) ) {
			$prtfl_options = get_option( 'prtfl_options' );
			if ( empty( $prtfl_options ) ) {
				register_prtfl_settings();
			}
		}

		if ( ! empty( $prtfl_options['page_id_portfolio_template'] ) ) {
			$parent = get_post( $prtfl_options['page_id_portfolio_template'] );
			if ( ! empty( $parent ) ) {
				if ( ! isset( $rules['(.+)/' . $parent->post_name . '/([^/]+)/?$'] ) || ! isset( $rules[ $parent->post_name . '/([^/]+)/?$'] ) ) {
					$newrules['(.+)/' . $parent->post_name .  '/([^/]+)/?$'] = 'index.php?post_type=' . $prtfl_options['post_type_name'] . '&name=$matches[2]&posts_per_page=-1';
					$newrules[ $parent->post_name . '/([^/]+)/?$'] = 'index.php?post_type=' . $prtfl_options['post_type_name'] . '&name=$matches[1]&posts_per_page=-1';
					$newrules[ $parent->post_name . '/page/([^/]+)/?$'] = 'index.php?pagename=' . $parent->post_name . '&paged=$matches[1]';
					$newrules[ $parent->post_name . '/page/([^/]+)?$'] = 'index.php?pagename=' . $parent->post_name . '&paged=$matches[1]';
				}
			}
		}

		/* fix feed permalink (<link rel="alternate" type="application/rss+xml" ... >) on the attachment single page (if the attachment is Attached to the portfolio page) */
		if ( ! empty( $prtfl_options['slug'] ) ) {
			$newrules[ $prtfl_options['slug'] . '/.+?/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' ] = 'index.php?attachment=$matches[1]&feed=$matches[2]';
			$newrules[ $prtfl_options['slug'] . '/.+?/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' ]      = 'index.php?attachment=$matches[1]&feed=$matches[2]';
		}
		if ( $rules )
			return array_merge( $newrules, $rules );
	}
}

/**
* Load a template. Handles template usage so that plugin can use own templates instead of the themes.
*
* Templates are in the 'templates' folder.
* overrides in /{theme}/bws-templates/ by default.
* @param mixed $template
* @return string
*/
if ( ! function_exists( 'prtfl_template_include' ) ) {
	function prtfl_template_include( $template ) {
		global $prtfl_options, $wp_query;

		if ( function_exists( 'is_embed' ) && is_embed() ) {
			return $template;
		}

		$post_type = get_post_type();
		if ( is_single() && $prtfl_options['post_type_name'] == $post_type ) {
			$file = 'portfolio-post.php';
		} elseif ( $prtfl_options['post_type_name'] == $post_type && ( isset( $wp_query->query_vars['technologies'] ) || isset( $wp_query->query_vars['portfolio_executor_profile'] ) ) ) {
			$file = 'portfolio.php';
		} elseif ( ! empty( $prtfl_options['page_id_portfolio_template'] ) && is_page( $prtfl_options['page_id_portfolio_template'] ) ) {
			$file = 'portfolio.php';
		}

		if ( isset( $file ) ) {
			if ( ! wp_script_is( 'prtfl_front_script', 'registered' ) ) {
				wp_register_script( 'prtfl_front_script', plugins_url( 'js/front_script.js', __FILE__ ), array( 'jquery' ) );
			}

			$find = array( $file, 'bws-templates/' . $file );
			$template = locate_template( $find );

			if ( ! $template ) {
				$template = untrailingslashit( plugin_dir_path( __FILE__ ) ) . '/templates/' . $file;
			}
		}

		return $template;
	}
}

/* Initialization of all metaboxes on the 'Add Portfolio' and Edit Portfolio pages */
if ( ! function_exists( 'prtfl_init_metaboxes' ) ) {
	function prtfl_init_metaboxes() {
		global $prtfl_options;
		add_meta_box( 'prtfl_metabox_images', __( 'Images', 'portfolio' ), 'prtfl_metabox_images_block', $prtfl_options['post_type_name'], 'normal', 'high' );
		add_meta_box( 'Portfolio-Info', __( 'General', 'portfolio' ), 'prtfl_post_custom_box', $prtfl_options['post_type_name'], 'normal', 'high' );

		$bws_hide_premium_options_check = bws_hide_premium_options_check( $prtfl_options );
		if ( ! $bws_hide_premium_options_check ) {
			add_meta_box( 'prtfl_categories_meta_box', __( 'Categories', 'portfolio' ), 'prtfl_categories_meta_box', $prtfl_options['post_type_name'], 'side', 'low' );
			add_meta_box( 'prtfl_sectors_meta_box', __( 'Sectors', 'portfolio' ), 'prtfl_sectors_meta_box', $prtfl_options['post_type_name'], 'side', 'low' );
			add_meta_box( 'prtfl_services_meta_box', __( 'Services', 'portfolio' ), 'prtfl_services_meta_box', $prtfl_options['post_type_name'], 'side', 'low' );
		}
	}
}

/* Create custom meta box for portfolio post type */
if ( ! function_exists( 'prtfl_post_custom_box' ) ) {
	function prtfl_post_custom_box( $obj = '', $box = '' ) {
		global $prtfl_boxes, $prtfl_plugin_info, $wp_version, $prtfl_options;
		/* Generate box contents */
		foreach ( $prtfl_boxes[ $box['id'] ] as $box ) {
			echo prtfl_general_field( $box );
		}

		$bws_hide_premium_options_check = bws_hide_premium_options_check( $prtfl_options );
		if ( ! $bws_hide_premium_options_check ) { ?>
			<div class="bws_pro_version_bloc">
				<div class="bws_pro_version_table_bloc">
					<div class="bws_table_bg" style="top: 0px; z-index: 2;"></div>


					<div class="portfolio_admin_box">
						<p><label for="prtfl_client"><strong><?php _e( 'Client', 'portfolio' ); ?></strong></label></p>
						<?php /* display visual editor */
						$settings = array(
							'media_buttons' => 1,
							'textarea_name' => 'prtfl_client',
							'textarea_rows' => 5,
							'tinymce'       => 1
						);
						wp_editor( '', 'prtfl_client', $settings ); ?>
					</div>
					<div class="portfolio_admin_box">
						<p><label for="prtfl_featured"><strong><?php _e( 'Featured project', 'portfolio' ); ?></strong></label></p>
						<p><input id="prtfl_featured" disabled="disabled" type="checkbox" name="prtfl_featured" value="1" />
							<em><?php _e( 'Add to slider', 'portfolio' ); ?></em>
						</p>
					</div>
					<div class="bws_pro_version_tooltip">
						<a class="bws_button" href="https://bestwebsoft.com/products/wordpress/plugins/portfolio/?k=f047e20c92c972c398187a4f70240285&pn=74&v=<?php echo $prtfl_plugin_info["Version"]; ?>&wp_v=<?php echo $wp_version; ?>" target="_blank" title="Portfolio Pro Plugin" style="z-index: 3;" ><?php _e( 'Learn More', 'portfolio' ); ?></a>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		<?php }
	}
}

/**
 * This is the field meta box
 * @param     array      $args   array of data for meta box
 * @return                       html structure of meta box
 */
if ( ! function_exists( 'prtfl_general_field' ) ) {
	function prtfl_general_field( $args ) {
		global $post;

		$post_meta = get_post_meta( $post->ID, 'prtfl_information', true );
		$value = ! empty( $post_meta ) && is_array( $post_meta ) && ! empty( $post_meta[ $args['name'] ] ) ? $post_meta[ $args['name'] ] : ""; ?>
		<div class="portfolio_admin_box">
			<p><label for="<?php echo $args['name']; ?>"><strong><?php echo $args['title']; ?></strong></label></p>
			<p><input id="<?php echo $args['name']; ?>" type="text" style="width:80%;" name="<?php echo $args['name']; ?>" value="<?php echo $value; ?>" /></p>
		</div>
	<?php }
}

/**
 * Banner on Portfolio Edit Page
 */
if ( ! function_exists( 'prtfl_categories_meta_box' ) ) {
	function prtfl_categories_meta_box() {
		global $prtfl_plugin_info, $wp_version; ?>
		<div class="bws_pro_version_bloc">
			<div class="bws_pro_version_table_bloc">
				<div class="bws_table_bg" style="top: 0px;"></div>
				<div class="prtfl_portfolio_categoriesdiv">
					<div class="inside">
						<div class="">
							<ul class="category-tabs">
								<li class="tabs"><a href="#"><?php _e( 'All Categories', 'portfolio' ); ?></a></li>
								<li><a href="#"><?php _e( 'Most Used', 'portfolio' ); ?></a></li>
							</ul>
							<div class="tabs-panel" style="display: none;">
								<ul class="categorychecklist form-no-clear">
									<li class="popular-category">
										<label class="selectit"><input checked="checked" disabled="disabled" value="236" type="checkbox" /><?php _e( 'Uncatgorized', 'portfolio' ); ?></label>
									</li>
								</ul>
							</div>
							<div class="tabs-panel">
								<ul class="categorychecklist form-no-clear">
									<li class="popular-category"><label class="selectit"><input value="236" name="tax_input[portfolio_categories][]" checked="checked" disabled="disabled" type="checkbox" /> <?php _e( 'Uncatgorized', 'portfolio' ); ?></label></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="bws_pro_version_tooltip">
					<a class="bws_button" href="https://bestwebsoft.com/products/wordpress/plugins/portfolio/?k=f047e20c92c972c398187a4f70240285&pn=74&v=<?php echo $prtfl_plugin_info["Version"]; ?>&wp_v=<?php echo $wp_version; ?>" target="_blank" title="Portfolio Pro Plugin"><?php _e( 'Learn More', 'portfolio' ); ?></a>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	<?php }
}

/**
 * Banner on Portfolio Edit Page
 */
if ( ! function_exists( 'prtfl_sectors_meta_box' ) ) {
	function prtfl_sectors_meta_box() {
		global $prtfl_plugin_info, $wp_version; ?>
		<div class="bws_pro_version_bloc">
			<div class="bws_pro_version_table_bloc">
				<div class="bws_table_bg" style="top: 0px;"></div>
				<div class="prtfl_portfolio_sectorsdiv">
					<div class="inside">
						<div class="">
							<ul class="category-tabs">
								<li class="tabs"><a href="#"><?php _e( 'All Sectors', 'portfolio' ); ?></a></li>
								<li><a href="#"><?php _e( 'Most Used', 'portfolio' ); ?></a></li>
							</ul>
							<div class="tabs-panel" style="display: none;">
								<ul class="categorychecklist form-no-clear">
									<li class="popular-category">
										<label class="selectit"><input disabled="disabled" value="236" type="checkbox" /><?php _e( 'Uncatgorized', 'portfolio' ); ?></label>
									</li>
								</ul>
							</div>
							<div class="tabs-panel">
								<ul class="categorychecklist form-no-clear">
									<li class="popular-category"><label class="selectit"><input value="236" name="tax_input[portfolio_sectors][]" disabled="disabled" type="checkbox" /> <?php _e( 'Sector', 'portfolio' ); ?> 1</label></li>
									<li class="popular-category"><label class="selectit"><input value="237" name="tax_input[portfolio_sectors][]" disabled="disabled" type="checkbox" /> <?php _e( 'Sector', 'portfolio' ); ?> 2</label></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="bws_pro_version_tooltip">
					<a class="bws_button" href="https://bestwebsoft.com/products/wordpress/plugins/portfolio/?k=f047e20c92c972c398187a4f70240285&pn=74&v=<?php echo $prtfl_plugin_info["Version"]; ?>&wp_v=<?php echo $wp_version; ?>" target="_blank" title="Portfolio Pro Plugin"><?php _e( 'Learn More', 'portfolio' ); ?></a>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	<?php }
}

/**
 * Banner on Portfolio Edit Page
 */
if ( ! function_exists( 'prtfl_services_meta_box' ) ) {
	function prtfl_services_meta_box() {
		global $prtfl_plugin_info, $wp_version; ?>
		<div class="bws_pro_version_bloc">
			<div class="bws_pro_version_table_bloc">
				<div class="bws_table_bg" style="top: 0px;"></div>
				<div class="prtfl_portfolio_servicesdiv">
					<div class="inside">
						<div class="">
							<ul class="category-tabs">
								<li class="tabs"><a href="#"><?php _e( 'All Services', 'portfolio' ); ?></a></li>
								<li><a href="#"><?php _e( 'Most Used', 'portfolio' ); ?></a></li>
							</ul>
							<div class="tabs-panel" style="display: none;">
								<ul class="categorychecklist form-no-clear">
									<li class="popular-category">
										<label class="selectit"><input disabled="disabled" value="236" type="checkbox" /><?php _e( 'Uncatgorized', 'portfolio' ); ?></label>
									</li>
								</ul>
							</div>
							<div class="tabs-panel">
								<ul class="categorychecklist form-no-clear">
									<li class="popular-category"><label class="selectit"><input value="236" name="tax_input[portfolio_services][]" disabled="disabled" type="checkbox" /> <?php _e( 'Service', 'portfolio' ); ?> 1</label></li>
									<li class="popular-category"><label class="selectit"><input value="237" name="tax_input[portfolio_services][]" disabled="disabled" type="checkbox" /> <?php _e( 'Service', 'portfolio' ); ?> 2</label></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="bws_pro_version_tooltip">
					<a class="bws_button" href="https://bestwebsoft.com/products/wordpress/plugins/portfolio/?k=f047e20c92c972c398187a4f70240285&pn=74&v=<?php echo $prtfl_plugin_info["Version"]; ?>&wp_v=<?php echo $wp_version; ?>" target="_blank" title="Portfolio Pro Plugin"><?php _e( 'Learn More', 'portfolio' ); ?></a>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	<?php }
}

if ( ! function_exists( 'prtfl_metabox_images_block' ) ) {
	function prtfl_metabox_images_block() {
		global $post; ?>
		<div id="prtfl_images_container">
			<noscript><div class="error"><p><?php _e( 'Please enable JavaScript to add or delete images.', 'portfolio' ); ?></p></div></noscript>
			<ul>
				<?php if ( metadata_exists( 'post', $post->ID, '_prtfl_images' ) ) {
					$prtfl_images = get_post_meta( $post->ID, '_prtfl_images', true );
				} else {
					/* Compatibility with old version 1.0.3 */
					$args = array(
						'post_parent'		=> $post->ID,
						'post_type'			=> 'attachment',
						'post_mime_type'	=> 'image',
						'numberposts'		=> -1,
						'orderby'			=> 'menu_order',
						'order'				=> 'ASC',
						'exclude'			=> get_post_thumbnail_id(),
						'fields'			=> 'ids'
					);
					$attachments = get_children( $args );
					$prtfl_images = implode( ',', $attachments );
				}

				$attachments = array_filter( explode( ',', $prtfl_images ) );

				$update_meta = false;

				if ( ! empty( $attachments ) ) {
					foreach ( $attachments as $attachment_id ) {
						$attachment = wp_get_attachment_image( $attachment_id, 'thumbnail' );

						/* skip if attachment is empty */
						if ( empty( $attachment ) ) {
							$update_meta = true;
							continue;
						}

						echo '<li class="prtfl_single_image" data-attachment_id="' . esc_attr( $attachment_id ) . '">
							' . $attachment . '
							<span class="prtfl_delete_image"><a href="#" title="' . __( 'Delete image', 'portfolio' ) . '">' . __( 'Delete', 'portfolio' ) . '</a></span>
						</li>';

						$updated_images_ids[] = $attachment_id;
					}

					/* update product meta to set new portfolio ids */
					if ( $update_meta )
						update_post_meta( $post->ID, '_prtfl_images', implode( ',', $updated_images_ids ) );
				} ?>
			</ul>
			<input type="hidden" id="prtfl_images" name="prtfl_images" value="<?php echo esc_attr( $prtfl_images ); ?>" />
		</div>
		<p class="prtfl_add_portfolio_images hide-if-no-js">
			<a href="#" data-choose="<?php esc_attr_e( 'Add Images to Portfolio', 'portfolio' ); ?>" data-update="<?php esc_attr_e( 'Add to portfolio', 'portfolio' ); ?>" data-delete="<?php esc_attr_e( 'Delete image', 'portfolio' ); ?>" data-text="<?php esc_attr_e( 'Delete', 'portfolio' ); ?>"><?php _e( 'Add images', 'portfolio' ); ?></a>
		</p>
	<?php }
}

/* When the post is saved, saves our custom data */
if ( ! function_exists( 'prtfl_save_postdata' ) ) {
	function prtfl_save_postdata( $post_id, $post ) {
		global $prtfl_boxes, $prtfl_options;

		if ( $prtfl_options['post_type_name'] == $post->post_type && ! wp_is_post_revision( $post_id ) && ! empty( $_POST ) ) { /* Don't store custom data twice */
			/* Verify this came from the our screen and with proper authorization, because save_post can be triggered at other times */
			if ( ! current_user_can( 'edit_page', $post->ID ) ) {
				return $post->ID;
			}

			/* We'll put it into an array to make it easier to loop though. The data is already in $prtfl_boxes, but we need to flatten it out. */
			foreach ( $prtfl_boxes as $prtfl_boxe ) {
				foreach ( $prtfl_boxe as $prtfl_fields ) {
					if ( isset( $_POST[ $prtfl_fields['name'] ] ) ) {
						if ( 'url' == $prtfl_fields['type'] ) {
							$my_data[ $prtfl_fields['name'] ] = esc_url( $_POST[ $prtfl_fields['name'] ] );
						} else {
							$my_data[ $prtfl_fields['name'] ] = stripslashes( esc_html( $_POST[ $prtfl_fields['name'] ] ) );
						}
					}
				}
			}
			if ( isset( $my_data ) ) {
				/*	Add values of $my_data as custom fields. Let's cycle through the $my_data array! */
				if ( get_post_meta( $post->ID, 'prtfl_information', FALSE ) ) {
					/* Custom field has a value and this custom field exists in database */
					update_post_meta( $post->ID, 'prtfl_information', $my_data );
				} else {
					/* Custom field does not have a value, but this custom field exists in database */
					update_post_meta( $post->ID, 'prtfl_information', $my_data );
				}
			}
			if ( isset( $_POST['prtfl_images'] ) ) {
				$attachment_ids = ! empty( $_POST['prtfl_images'] ) ? array_filter( explode( ',', sanitize_text_field( $_POST['prtfl_images'] ) ) ) : array();
				update_post_meta( $post_id, '_prtfl_images', implode( ',', $attachment_ids ) );
			}
		}
	}
}

/**
 * Replace shortcode [latest_portfolio_items] from portfolio content before portfolio saving
 */
if ( ! function_exists( 'prtfl_content_save_pre' ) ) {
	function prtfl_content_save_pre( $content ) {
		global $post, $prtfl_options;
		if ( isset( $post ) && $prtfl_options['post_type_name'] == $post->post_type && ! wp_is_post_revision( $post->ID ) && ! empty( $_POST ) ) {
			/* remove shortcode */
			$content = preg_replace( '/\[latest_portfolio_items count=[\d]*\]/', '', $content );
		}
		return $content;
	}
}

/* this function add custom fields and images for PDF&Print plugin in Portfolio post */
if ( ! function_exists( 'prtfl_add_pdf_print_content' ) ) {
	function prtfl_add_pdf_print_content( $content ) {
		global $post, $prtfl_options;
		$current_post_type = get_post_type();
		$custom_content = '';

		if ( $prtfl_options['post_type_name'] == $current_post_type && ! empty( $post ) ) {

			if ( ! $prtfl_options ) {
				$prtfl_options = get_option( 'prtfl_options' );
			}

			$post_meta	= get_post_meta( $post->ID, 'prtfl_information', true );
			$user_id 	= get_current_user_id();

			if ( 1 == $prtfl_options['date_additional_field'] ) {
				$date_compl		=	isset( $post_meta['_prtfl_date_compl'] ) ? $post_meta['_prtfl_date_compl'] : '';
				if ( ! empty( $date_compl ) ) {
					$custom_content .= '<p><span class="lable">' . $prtfl_options['date_text_field'] .' </span> ' . $date_compl . '</p>';
				}
			}

			if ( 1 == $prtfl_options['link_additional_field'] && ! empty( $post_meta['_prtfl_link'] ) ) {

				if ( false !== parse_url( $post_meta['_prtfl_link'] ) ) {
					if ( ( 0 == $user_id && 0 == $prtfl_options['link_additional_field_for_non_registered'] ) || 0 != $user_id ) {
						$custom_content .= '<p><span class="lable">' . $prtfl_options['link_text_field'] . '</span> <a href="' . $post_meta['_prtfl_link'] . '">' . $post_meta['_prtfl_link'] . '</a></p>';
					} else {
						$custom_content .= '<p><span class="lable">' . $prtfl_options['link_text_field'] . '</span> ' . $post_meta['_prtfl_link'] . '</p>';
					}
				} else {
					$custom_content .= '<p><span class="lable">' . $prtfl_options['link_text_field'] . '</span> ' . $post_meta['_prtfl_link'] . '</p>';
				}
			}
			if ( 0 != $user_id || 0 == $prtfl_options['svn_additional_field_for_non_logged'] ) {
				if ( 1 == $prtfl_options['svn_additional_field'] && ! empty( $post_meta['_prtfl_svn'] ) ) {
					$custom_content .= '<p><span class="lable">' . $prtfl_options['svn_text_field'] . '</span> ' . $post_meta['_prtfl_svn'] . '</p>';
				}	
			}
			if ( 0 != $user_id ) {
				if ( 1 == $prtfl_options['executor_additional_field'] ) {
					$executors_profile = wp_get_object_terms( $post->ID, 'portfolio_executor_profile' );
					if ( ! empty( $executors_profile ) ) {
						$custom_content .= '<p><span class="lable">' . $prtfl_options['executor_text_field'] . '</span>';
						$count = 0;
						foreach ( $executors_profile as $profile ) {
							if ( $count > 0 ) {
								$custom_content .= ', ';
							}
							$custom_content .= '<a href="' . get_term_link( $profile->slug, 'portfolio_executor_profile' ) . '" title="' . $profile->name . ' profile" target="_blank">' . $profile->name . '</a>';
							$count++;
						}
						$custom_content .= '</p>';
					}
				}
			}

		} elseif ( 'portfolio.php' == basename( get_page_template() ) ) {
			global $wp_query, $request, $prtfl_options, $pdfprnt_options_array, $pdfprntpr_options;

			if ( ! $prtfl_options ) {
				$prtfl_options = get_option( 'prtfl_options' );
			}

			$count = 0;
			if ( get_query_var( 'paged' ) ) {
				$paged = get_query_var( 'paged' );
			} elseif ( get_query_var( 'page' ) ) {
				$paged = get_query_var( 'page' );
			} else {
				$paged = 1;
			}
			$per_page = $showitems = get_option( 'posts_per_page' );
			$technologies = isset( $wp_query->query_vars["technologies"] ) ? $wp_query->query_vars["technologies"] : "";
			$executor_profile = isset( $wp_query->query_vars["portfolio_executor_profile"] ) ? $wp_query->query_vars["portfolio_executor_profile"] : "";
			if ( "" != $technologies ) {
				$args = array(
					'post_type' 		=> $prtfl_options['post_type_name'],
					'post_status' 		=> 'publish',
					'orderby' 			=> $prtfl_options['order_by'],
					'order'			 	=> $prtfl_options['order'],
					'posts_per_page'	=> $per_page,
					'paged' 			=> $paged,
					'tax_query' 		=> array(
						array(
							'taxonomy' 	=> 'portfolio_technologies',
							'field' 	=> 'slug',
							'terms' 	=> $technologies
						)
					)
				);
			} elseif ( "" != $executor_profile ) {
				$args = array(
					'post_type' 		=> $prtfl_options['post_type_name'],
					'post_status' 		=> 'publish',
					'orderby'			=> $prtfl_options['order_by'],
					'order' 			=> $prtfl_options['order'],
					'posts_per_page' 	=> $per_page,
					'paged' 			=> $paged,
					'tax_query' 		=> array(
						array(
							'taxonomy' 	=> 'portfolio_executor_profile',
							'field' 	=> 'slug',
							'terms' 	=> $executor_profile
						)
					)
				);
			} else {
				$args = array(
					'post_type'			=> $prtfl_options['post_type_name'],
					'post_status'		=> 'publish',
					'orderby'			=> $prtfl_options['order_by'],
					'order'				=> $prtfl_options['order'],
					'posts_per_page'	=> $per_page,
					'paged'				=> $paged
				);
			}

			$second_query = new WP_Query( $args );
			$request = $second_query->request;

			if ( $second_query->have_posts() ) {
				while ( $second_query->have_posts() ) {
					$second_query->the_post();
					$custom_content .= '<div class="portfolio_content entry-content">
						<div class="entry">';

					$post_meta = get_post_meta( $post->ID, 'prtfl_information', true );
					$user_id = get_current_user_id();

					$short_descr = isset( $post_meta['_prtfl_short_descr'] ) ? $post_meta['_prtfl_short_descr'] : '';
					if ( empty( $short_descr ) ) {
						$short_descr = get_the_excerpt();
					}
					$title = get_the_title();
					if ( empty( $title ) ) {
						$title = '(' . __( 'No title', 'portfolio' ) . ')';
					}
					$post_thumbnail_id	=	get_post_thumbnail_id( $post->ID );
					if ( empty( $post_thumbnail_id ) ) {
						$args = array(
							'post_parent'		=> $post->ID,
							'post_type'			=> 'attachment',
							'post_mime_type'	=> 'image',
							'numberposts'		=> 1
						);
						$attachments		= get_children( $args );
						$post_thumbnail_id	= key( $attachments );
					}

					if ( ( isset( $pdfprnt_options_array['show_featured_image'] ) && 1 == $pdfprnt_options_array['show_featured_image'] )
						|| ( isset( $pdfprntpr_options['show_featured_image'] ) && 1 == $pdfprntpr_options['show_featured_image'] ) ) {

						$image = wp_get_attachment_image_src( $post_thumbnail_id, $prtfl_options['image_size_album'] );

						if ( ! empty( $image[0] ) ) {
							/* get width and height for image_size_album */
							if ( 'portfolio-thumb' != $prtfl_options['image_size_album'] ) {
								$width  = absint( get_option( $prtfl_options['image_size_album'] . '_size_w' ) );
								$height = absint( get_option( $prtfl_options['image_size_album'] . '_size_h' ) );
							} else {
								$width  = $prtfl_options['custom_size_px']['portfolio-thumb'][0];
								$height = $prtfl_options['custom_size_px']['portfolio-thumb'][1];
							}
							$image_alt 	= get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true );

							$custom_content .= '<div class="portfolio_thumb"><img src="' . $image[0] . '" width="' . $width . '" height="' . $height . '" style="width:' . $width . 'px; height:' . $height . 'px;" alt="' . $image_alt . '" /></div>';
						}
					}

					$custom_content .= '<div class="portfolio_short_content">
								<div class="item_title">
									<p><a href="' . get_permalink() . '" rel="bookmark">' . $title . '</a></p>
								</div>';
					if ( 1 == $prtfl_options['date_additional_field'] ) {
						$date_compl	= isset( $post_meta['_prtfl_date_compl'] ) ? $post_meta['_prtfl_date_compl'] : '';
						if ( ! empty( $date_compl ) ) {
							$custom_content .= '<p><span class="lable">' . $prtfl_options['date_text_field'] . '</span> ' . $date_compl . '</p>';
						}
					}

					if ( 1 == $prtfl_options['link_additional_field'] && ! empty( $post_meta['_prtfl_link'] ) ) {
						if ( false !== parse_url( $post_meta['_prtfl_link'] ) ) {
							if ( ( 0 == $user_id && 0 == $prtfl_options['link_additional_field_for_non_registered'] ) || 0 != $user_id ) {
								$custom_content .= '<p><span class="lable">' . $prtfl_options['link_text_field'] . '</span> <a href="' . $post_meta['_prtfl_link'] . '">' . $post_meta['_prtfl_link'] . '</a></p>';
							} else {
								$custom_content .= '<p><span class="lable">' . $prtfl_options['link_text_field'] . '</span> ' . $post_meta['_prtfl_link'] . '</p>';
							}
						} else {
							$custom_content .= '<p><span class="lable">' . $prtfl_options['link_text_field'] . '</span> ' . $post_meta['_prtfl_link'] . '</p>';
						}
					}
					if ( 1 == $prtfl_options['shrdescription_additional_field'] ) {
						$custom_content .= '<p><span class="lable">' . $prtfl_options['shrdescription_text_field'] . '</span> ' . $short_descr . '</p>';
					}
					$custom_content .= '</div>
						</div>
					</div>';
				}
			}
		}
		return $content . $custom_content;
	}
}
/* adding class to manu items  */
if ( ! function_exists( 'prtfl_add_portfolio_ancestor_to_menu' ) ) {
	function prtfl_add_portfolio_ancestor_to_menu( $classes, $item ) {
		global $prtfl_options;
		if ( is_singular( $prtfl_options['post_type_name'] ) ) {
			global $wpdb, $post;
			$parent = $wpdb->get_var( "SELECT $wpdb->posts.post_name FROM $wpdb->posts, $wpdb->postmeta WHERE meta_key = '_wp_page_template' AND meta_value = 'portfolio.php' AND (post_status = 'publish' OR post_status = 'private') AND $wpdb->posts.ID = $wpdb->postmeta.post_id" );

			if ( in_array( 'menu-item-' . $item->ID, $classes ) && $parent == strtolower( $item->title ) ) {
				$classes[] = 'current-page-ancestor';
			}
		}
		return $classes;
	}
}

/* forming content for portfolio items */
if ( ! function_exists( 'prtfl_latest_items' ) ) {
	function prtfl_latest_items( $atts, $widget = false ) {
		global $prtfl_options, $wp_query;
		$old_wp_query = $wp_query;
		$count_portfolio_row_block = 0;
		if ( $widget == false) {
			$custom_portfolio_row_count = $prtfl_options['custom_portfolio_row_count'];
		} else {
			$custom_portfolio_row_count = $widget;
		}
		$prtfl_widht = 100 / $custom_portfolio_row_count;


		if( 1 < $custom_portfolio_row_count  ) {
			$prtfl_img_width = '';
		}else{
			$prtfl_img_width = 'style="width:165px"';
		}
		
		$content	=	'<div class="prtfl_portfolio_block">';
		if ( empty( $atts['count'] ) ) {
			$atts['count'] = 3;
		}
		$args		=	array(
			'post_type'			=> $prtfl_options['post_type_name'],
			'post_status'		=> 'publish',
			'orderby'			=> 'date',
			'order'				=> $prtfl_options['order'],
			'posts_per_page'	=> $atts['count'],
			);
			$second_query = new WP_Query( $args );
			$request = $second_query->request;

			if ( $second_query->have_posts() ) {
				while ( $second_query->have_posts() ) {
					$second_query->the_post();
					if ( $count_portfolio_row_block % $custom_portfolio_row_count == 0 ) {
						$content .= '<div class="portfolio_row_count">';
					}
					$content .= '<div id="portfolio_row_count_block" class="portfolio_row_count_block" style="width: ' . $prtfl_widht . '%">
			<div class="portfolio_content">
				<div class="entry">';
					global $post;
					$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
					if ( empty ( $post_thumbnail_id ) ) {
						$args = array(
							'post_parent'		=>	$post->ID,
							'post_type'			=>	'attachment',
							'post_mime_type'	=>	'image',
							'numberposts'		=>	1
						);
						$attachments = get_children( $args );
						$post_thumbnail_id = key( $attachments );
					}
					$image = wp_get_attachment_image_src( $post_thumbnail_id, $prtfl_options['image_size_album'] );

					$image_alt	=	get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true );
					$image_desc	=	get_post( $post_thumbnail_id );
					$image_desc	=	$image_desc->post_content;
					$post_meta	=	get_post_meta( $post->ID, 'prtfl_information', true );

					$date_compl = isset( $post_meta['_prtfl_date_compl'] ) ? $post_meta['_prtfl_date_compl'] : '';
					$link = isset( $post_meta['_prtfl_link'] ) ? $post_meta['_prtfl_link'] : '';
					$short_descr = isset( $post_meta['_prtfl_short_descr'] ) ? $post_meta['_prtfl_short_descr'] : '';
					if ( empty( $short_descr ) ) {
						$short_descr = get_the_excerpt();
					}
					$title = get_the_title();
					if ( empty( $title ) ) {
						$title = '(' . __( 'No title', 'portfolio' ) . ')';
					}
					$permalink = get_permalink();

					$content .= '<div class="portfolio_thumb" ' . $prtfl_img_width . '>
							<img src="' . $image[0] . '" width="' . $image[1] . '" alt="' . $image_alt . '" />
					</div>
					<div class="portfolio_short_content">
						<div class="item_title">
							<p>
								<a href="' . $permalink . '" rel="bookmark">' . $title . '</a>
							</p>
						</div> <!-- .item_title -->';
						if ( 1 == $prtfl_options['shrdescription_additional_field'] && ( ! empty( $short_descr ) ) ) {
							$content .= '<p>' . $short_descr . '</p>';
						}
					$content .= '</div> <!-- .portfolio_short_content -->
				</div> <!-- .entry -->
				<div class="read_more">
					<a href="' . $permalink . '" rel="bookmark">' . __( 'Read more', 'portfolio' ) . '</a>
				</div> <!-- .read_more -->
				<div class="portfolio_terms">';
				if ( 1 == $prtfl_options['technologies_additional_field'] ) {
					$terms = wp_get_object_terms( $post->ID, 'portfolio_technologies' );
					if ( is_array( $terms ) && 0 < count( $terms ) ) {
						$content .= __( 'Technologies', 'portfolio' ) . ':';
						$count = 0;
						foreach ( $terms as $term ) {
							if ( $count > 0 ) {
								$content .= ', ';
							}
							$content .= '<a href="' . get_term_link( $term->slug, 'portfolio_technologies' ) . '" title="' . sprintf( __( "View all projects in %s" ), $term->name ) . '" ' . '>' . $term->name . '</a>';
							$count++;
						}
					} else {
						$content .= '&nbsp;';
					}
				}
				$content .= '</div><!-- .portfolio_terms -->';
			$content .= '<div class="prtfl_clear"></div></div> <!-- .portfolio_content --></div><!-- .gllr_image_block -->';
			if ( ( $count_portfolio_row_block % $custom_portfolio_row_count ) == ( $custom_portfolio_row_count - 1 ) ) {
				$content .= '<div class="clear"></div>
				</div><!-- .gllr_image_row -->';
			}
			$count_portfolio_row_block = $count_portfolio_row_block + 1;
			}
		}
		$content .= '</div> <!-- .prtfl_portfolio_block --><div class="clear"></div>';
		wp_reset_query();
		$wp_query = $old_wp_query;
		return $content;
	}
}

/* Register style and script files */
if ( ! function_exists( 'prtfl_admin_head' ) ) {
	function prtfl_admin_head() {
		global $prtfl_plugin_info, $hook_suffix, $post_type, $prtfl_options;

		wp_enqueue_style( 'prtfl_icon', plugins_url( 'css/icon.css', __FILE__ ) );

		if ( ( ( 'post.php' == $hook_suffix || 'post-new.php' == $hook_suffix ) && isset( $post_type ) && $prtfl_options['post_type_name'] == $post_type ) ||
			( isset( $_GET['page'] ) && 'portfolio.php' == $_GET['page'] ) ) {
			wp_enqueue_style( 'prtfl_stylesheet', plugins_url( 'css/style.css', __FILE__ ) );
			wp_enqueue_style( 'prtfl_jquery-style', plugins_url( 'css/jquery-ui.css', __FILE__ ) );
			wp_enqueue_script( 'jquery-ui-datepicker' );

			wp_enqueue_script( 'prtfl_script', plugins_url( 'js/script.js', __FILE__ ) );
			wp_localize_script( 'prtfl_script', 'prtfl_vars', array(
				'prtfl_nonce' 			=> wp_create_nonce( plugin_basename( __FILE__ ), 'prtfl_ajax_nonce_field' ),
				'update_img_message'	=> __( 'Updating images...', 'portfolio' ) . '<img class="prtfl_loader" src="' . plugins_url( 'images/ajax-loader.gif', __FILE__ ) . '" alt="" />',
				'not_found_img_info'	=> __( 'No image found.', 'portfolio' ),
				'img_success'			=> __( 'All images are updated.', 'portfolio' ),
				'img_error'				=> __( 'Error:', 'portfolio' ) ) );

			bws_enqueue_settings_scripts();
			bws_plugins_include_codemirror();
		}
	}
}

/* enqueue fancybox script and style css */
if ( ! function_exists( 'prtfl_wp_enqueue_scripts' ) ) {
	function prtfl_wp_enqueue_scripts() {
		wp_enqueue_style( 'prtfl_stylesheet', plugins_url( 'css/style.css', __FILE__ ) );
		wp_enqueue_style( 'prtfl_lightbox_stylesheet', plugins_url( 'fancybox/jquery.fancybox.min.css', __FILE__ ) );
	}
}

/* styles for IE */
if ( ! function_exists( 'prtfl_wp_head' ) ) {
	function prtfl_wp_head() {
		global $prtfl_options;
		/* Add style for IE compatibility */
		if ( isset( $_SERVER['HTTP_USER_AGENT'] ) && strpos( $_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0' ) !== false || strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE' ) !== false ) {
			$post_type = get_post_type();
			if ( is_single() && $prtfl_options['post_type_name'] == $post_type ) { ?>
				<style type="text/css">
					.portfolio_images_gallery {
						display: block;
					}
					.portfolio_thumb {
						float: none;
					}
				</style>
			<?php }
		}
	}
}

/* initializing script of fancybox */
if ( ! function_exists( 'prtfl_wp_footer' ) ) {
	function prtfl_wp_footer() {
		global $prtfl_options, $post, $wp_query;
		$post_thumbnail_id = '';
		if ( ! empty(  $wp_query->post->ID ) ) {
			$post_thumbnail_id = get_post_thumbnail_id( $wp_query->post->ID );
		}
		$image = wp_get_attachment_image_src( $post_thumbnail_id, $prtfl_options['image_size_album'] );

		if ( wp_script_is( 'prtfl_front_script', 'registered' ) ) {
			wp_enqueue_script( 'prtfl_front_script' );
			wp_enqueue_script( 'prtfl_fancyboxJs', plugins_url( 'fancybox/jquery.fancybox.min.js', __FILE__ ), array( 'jquery' ) );

			/* Initialization of fancybox script */
			if ( ! empty( $image[0] ) ) {
				$script = "( function( $ ){
                    $( document ).ready( function(){
                        $( \"a[data-fancybox=portfolio_fancybox]\" ).fancybox({
                            loop    : true,
                            arrows  : false,
                            infobar : true,
                            speed : 500,
                            toolbar: false,
                            animationEffect : 'zoom',
                            openEffect : 'elastic',
                            closeEffect : 'elastic'
                        } );
                    } );
                } )( jQuery );";
				wp_register_script( 'prtfl_fancybox_script', '' );
				wp_enqueue_script( 'prtfl_fancybox_script' );
				wp_add_inline_script( 'prtfl_fancybox_script', sprintf( $script ) );
			}
		}

	}
}

/**
 * Ajax function for updating images
 * @return void
 */
if ( ! function_exists( 'prtfl_update_image' ) ) {
	function prtfl_update_image() {
		global $wpdb, $prtfl_options;
		check_ajax_referer( plugin_basename( __FILE__ ), 'prtfl_ajax_nonce_field' );
		$action	= isset( $_REQUEST['action1'] ) ? $_REQUEST['action1'] : "";
		$id		= isset( $_REQUEST['id'] ) ? $_REQUEST['id'] : "";
		switch ( $action ) {
			case 'get_all_attachment':

			    $array_parent_id = $wpdb->get_col( $wpdb->prepare( "
                    SELECT 
                        ID 
                    FROM 
                        {$wpdb->posts}
                    WHERE 
                        post_type = %s
                ", $prtfl_options['post_type_name'] ) );

				if ( ! empty( $array_parent_id ) ) {
					$string_parent_id = implode( ",", $array_parent_id );

					$metas = $wpdb->get_results( "
                        SELECT 
                            meta_value 
                        FROM 
                            {$wpdb->postmeta} 
                        WHERE 
                            meta_key = '_prtfl_images' AND 
                            post_id IN (" . $string_parent_id . ")
                    ", ARRAY_A );

					$result_attachment_id = '';
					foreach ( $metas as $key => $value ) {
						if ( ! empty( $value['meta_value'] ) ) {
							$result_attachment_id .= $value['meta_value'] . ',';
						}
					}
					$result_attachment_id_array = explode( ",", rtrim( $result_attachment_id, ',' ) );

					$attached_id = $wpdb->get_results( "
                        SELECT 
                            ID 
                        FROM 
                            {$wpdb->posts} 
                        WHERE 
                            post_type = 'attachment' AND 
                            post_mime_type LIKE 'image%' AND 
                            post_parent IN (" . $string_parent_id . ")
                    ", ARRAY_A );

					foreach ( $attached_id as $key => $value ) {
						$result_attachment_id_array[] = $value['ID'];
					}
					echo json_encode( array_unique( $result_attachment_id_array ) );
				}
				break;
			case 'update_image':
				$metadata	= wp_get_attachment_metadata( $id );
				$uploads	= wp_upload_dir();
				$path		= $uploads['basedir'] . "/" . $metadata['file'];
				require_once( ABSPATH . 'wp-admin/includes/image.php' );
				$metadata_new = prtfl_wp_generate_attachment_metadata( $id, $path, $metadata );
				wp_update_attachment_metadata( $id, array_merge( $metadata, $metadata_new ) );
				break;
			case 'update_options':
				unset( $prtfl_options['need_image_update'] );
				update_option( 'prtfl_options', $prtfl_options );
				break;
		}
		die();
	}
}

if ( ! function_exists( 'prtfl_wp_generate_attachment_metadata' ) ) {
	function prtfl_wp_generate_attachment_metadata( $attachment_id, $file, $metadata ) {
		global $prtfl_options;
		$attachment		=	get_post( $attachment_id );
		$image_size 	= array( 'thumbnail' );

		if ( 'portfolio-thumb' == $prtfl_options['image_size_album'] ) {
			add_image_size( 'portfolio-thumb', $prtfl_options['custom_size_px']['portfolio-thumb'][0], $prtfl_options['custom_size_px']['portfolio-thumb'][1], true );
			$image_size[] = 'portfolio-thumb';
		}
		if ( 'portfolio-photo-thumb' == $prtfl_options['image_size_photo'] ) {
			add_image_size( 'portfolio-photo-thumb', $prtfl_options['custom_size_px']['portfolio-photo-thumb'][0], $prtfl_options['custom_size_px']['portfolio-photo-thumb'][1], true );
			$image_size[] = 'portfolio-photo-thumb';
		}

		$metadata = array();
		if ( preg_match( '!^image/!', get_post_mime_type( $attachment ) ) && file_is_displayable_image( $file ) ) {
			$imagesize					= getimagesize( $file );
			$metadata['width']			= $imagesize[0];
			$metadata['height']			= $imagesize[1];
			list( $uwidth, $uheight )	= wp_constrain_dimensions( $metadata['width'], $metadata['height'], 128, 96 );
			$metadata['hwstring_small']	= "height='$uheight' width='$uwidth'";

			/* Make the file path relative to the upload dir */
			$metadata['file']= _wp_relative_upload_path( $file );

			/* Make thumbnails and other intermediate sizes */
			global $_wp_additional_image_sizes;

			foreach ( $image_size as $s ) {
				$sizes[ $s ] = array( 'width' => '', 'height' => '', 'crop' => FALSE );
				if ( isset( $_wp_additional_image_sizes[ $s ]['width'] ) ) {
					$sizes[ $s]['width'] = intval( $_wp_additional_image_sizes[ $s ]['width'] ); /* For theme-added sizes */
				} else {
					$sizes[ $s ]['width'] = get_option( "{$s}_size_w" ); /* For default sizes set in options */
				}
				if ( isset( $_wp_additional_image_sizes[ $s ]['height'] ) ) {
					$sizes[ $s ]['height'] = intval( $_wp_additional_image_sizes[ $s ]['height'] ); /* For theme-added sizes */
				} else {
					$sizes[ $s ]['height'] = get_option( "{$s}_size_h" ); /* For default sizes set in options */
				}
				if ( isset( $_wp_additional_image_sizes[ $s ]['crop'] ) ) {
					$sizes[ $s ]['crop'] = intval( $_wp_additional_image_sizes[ $s ]['crop'] ); /* For theme-added sizes */
				} else {
					$sizes[ $s ]['crop'] = get_option( "{$s}_crop" ); /* For default sizes set in options */
				}
			}

			$sizes = apply_filters( 'intermediate_image_sizes_advanced', $sizes );
			foreach ( $sizes as $size => $size_data ) {
				$resized = prtfl_image_make_intermediate_size( $file, $size_data['width'], $size_data['height'], $size_data['crop'] );
				if ( $resized ) {
					$metadata['sizes'][ $size ] = $resized;
				}
			}

			/* Fetch additional metadata from exif/iptc */
			$image_meta = wp_read_image_metadata( $file );
			if ( $image_meta ) {
				$metadata['image_meta'] = $image_meta;
			}
		}
		return apply_filters( 'wp_generate_attachment_metadata', $metadata, $attachment_id );
	}
}

if ( ! function_exists( 'prtfl_image_make_intermediate_size' ) ) {
	function prtfl_image_make_intermediate_size( $file, $width, $height, $crop=false ) {
		if ( $width || $height ) {
			$resized_file = prtfl_image_resize( $file, $width, $height, $crop );
			if ( ! is_wp_error( $resized_file ) && $resized_file && $info = getimagesize( $resized_file ) ) {
				$resized_file = apply_filters( 'image_make_intermediate_size', $resized_file );
				return array(
					'file'		=> wp_basename( $resized_file ),
					'width'		=> $info[0],
					'height'	=> $info[1],
				);
			}
		}
		return false;
	}
}

if ( ! function_exists( 'prtfl_image_resize' ) ) {
	function prtfl_image_resize( $file, $max_w, $max_h, $crop = false, $suffix = null, $dest_path = null, $jpeg_quality = 90 ) {
		$size = @getimagesize( $file );
		if ( ! $size ) {
			return new WP_Error( 'invalid_image', __( 'Image size not defined', 'portfolio' ), $file );
		}
		$type = $size[2];

		if ( 3 == $type ) {
			$image = imagecreatefrompng( $file );
		} elseif ( 2 == $type ) {
			$image = imagecreatefromjpeg( $file );
		} elseif ( 1 == $type ) {
			$image = imagecreatefromgif( $file );
		} elseif ( 15 == $type ) {
			$image = imagecreatefromwbmp( $file );
		} elseif ( 16 == $type ) {
			$image = imagecreatefromxbm( $file );
		} else {
			return new WP_Error( 'invalid_image', __( 'We can update only PNG, JPEG, GIF, WPMP or XBM filetype. For other image formats, please manually reload image.', 'portfolio' ), $file );
		}
		if ( ! is_resource( $image ) ) {
			return new WP_Error( 'error_loading_image', $image, $file );
		}
		/* $size = @getimagesize( $file ); */
		list( $orig_w, $orig_h, $orig_type ) = $size;
		$dims = prtfl_image_resize_dimensions( $orig_w, $orig_h, $max_w, $max_h, $crop );

		if ( ! $dims ) {
			return new WP_Error( 'error_getting_dimensions', __( 'Image size changes not defined', 'portfolio' ) );
		}
		list( $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h ) = $dims;
		$newimage = wp_imagecreatetruecolor( $dst_w, $dst_h );
		imagecopyresampled( $newimage, $image, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h );
		/* Convert from full colors to index colors, like original PNG. */
		if ( IMAGETYPE_PNG == $orig_type && function_exists( 'imageistruecolor' ) && ! imageistruecolor( $image ) ) {
			imagetruecolortopalette( $newimage, false, imagecolorstotal( $image ) );
		}
		/* We don't need the original in memory anymore */
		imagedestroy( $image );

		/* $suffix will be appended to the destination filename, just before the extension */
		if ( ! $suffix ) {
			$suffix = "{$dst_w}x{$dst_h}";
		}
		$info = pathinfo( $file );
		$dir = $info['dirname'];
		$ext = $info['extension'];
		$name = wp_basename( $file, ".$ext" );

		if ( ! is_null( $dest_path ) and $_dest_path = realpath( $dest_path ) ) {
			$dir = $_dest_path;
		}
		$destfilename = "{$dir}/{$name}-{$suffix}.{$ext}";

		if ( IMAGETYPE_GIF == $orig_type ) {
			if ( ! imagegif( $newimage, $destfilename ) ) {
				return new WP_Error( 'resize_path_invalid', __( 'Invalid path', 'portfolio' ) );
			}
		} elseif ( IMAGETYPE_PNG == $orig_type ) {
			if ( ! imagepng( $newimage, $destfilename ) ) {
				return new WP_Error( 'resize_path_invalid', __( 'Invalid path', 'portfolio' ) );
			}
		} else {
			/* All other formats are converted to jpg */
			$destfilename = "{$dir}/{$name}-{$suffix}.jpg";
			if ( ! imagejpeg( $newimage, $destfilename, apply_filters( 'jpeg_quality', $jpeg_quality, 'image_resize' ) ) ) {
				return new WP_Error( 'resize_path_invalid', __( 'Invalid path', 'portfolio' ) );
			}
		}

		imagedestroy( $newimage );
		/* Set correct file permissions */
		$stat	= stat( dirname( $destfilename ) );
		$perms	= $stat['mode'] & 0000666; /* Same permissions as parent folder, strip off the executable bits */
		@chmod( $destfilename, $perms );
		return $destfilename;
	}
}

if ( ! function_exists( 'prtfl_image_resize_dimensions' ) ) {
	function prtfl_image_resize_dimensions( $orig_w, $orig_h, $dest_w, $dest_h, $crop = false ) {

		if ( 0 >= $orig_w || 0 >= $orig_h ) {
			return false;
		}
		/* At least one of dest_w or dest_h must be specific */
		if ( 0 >= $dest_w && 0 >= $dest_h ) {
			return false;
		}

		if ( $crop ) {
			/* Crop the largest possible portion of the original image that we can size to $dest_w x $dest_h */
			$aspect_ratio	=	$orig_w / $orig_h;
			$new_w			=	min( $dest_w, $orig_w );
			$new_h			=	min( $dest_h, $orig_h );

			if ( ! $new_w ) {
				$new_w = intval( $new_h * $aspect_ratio );
			}

			if ( ! $new_h ) {
				$new_h = intval( $new_w / $aspect_ratio );
			}

			$size_ratio	=	max( $new_w / $orig_w, $new_h / $orig_h );
			$crop_w		=	round( $new_w / $size_ratio );
			$crop_h		=	round( $new_h / $size_ratio );
			$s_x		=	floor( ( $orig_w - $crop_w ) / 2 );
			$s_y		=	0;
		} else {
			/* Don't crop, just resize using $dest_w x $dest_h as a maximum bounding box */
			$crop_w	=	$orig_w;
			$crop_h	=	$orig_h;
			$s_x	=	0;
			$s_y	=	0;
			list( $new_w, $new_h ) = wp_constrain_dimensions( $orig_w, $orig_h, $dest_w, $dest_h );
		}

		/* If the resulting image would be the same size or larger we don't want to resize it */
		if ( $new_w >= $orig_w && $new_h >= $orig_h ) {
			return false;
		}
		/* The return array matches the parameters to imagecopyresampled() */
		/* Int dst_x, int dst_y, int src_x, int src_y, int dst_w, int dst_h, int src_w, int src_h */
		return array( 0, 0, ( int ) $s_x, ( int ) $s_y, ( int ) $new_w, ( int ) $new_h, ( int ) $crop_w, ( int ) $crop_h );
	}
}

if ( ! function_exists( 'prtfl_theme_body_classes' ) ) {
	function prtfl_theme_body_classes( $classes ) {
		global $prtfl_options;
		if ( function_exists( 'wp_get_theme' ) ) {
			$current_theme = wp_get_theme();
			$classes[] = 'prtfl_' . basename( $current_theme->get( 'ThemeURI' ) );
		}
		if ( in_array( 'page-id-' . $prtfl_options['page_id_portfolio_template'], $classes ) ) {
			$classes[]     = 'prtfl-page-template';
			$classes[]     = 'has-sidebar';
		}
		return $classes;
	}
}

if ( ! function_exists( 'prtfl_register_plugin_links' ) ) {
	function prtfl_register_plugin_links( $links, $file ) {
		global $prtfl_options;
		$base = plugin_basename( __FILE__ );
		if ( $file == $base ) {
			if ( ! is_network_admin() ) {
				$links[]	=	'<a href="edit.php?post_type=' . $prtfl_options['post_type_name'] . '&page=portfolio.php">' . __( 'Settings', 'portfolio' ) . '</a>';
			}
			$links[]	=	'<a href="https://support.bestwebsoft.com/hc/en-us/sections/200538929" target="_blank">' . __( 'FAQ', 'portfolio' ) . '</a>';
			$links[]	=	'<a href="https://support.bestwebsoft.com">' . __( 'Support', 'portfolio' ) . '</a>';
		}
		return $links;
	}
}

if ( ! function_exists( 'prtfl_plugin_action_links' ) ) {
	function prtfl_plugin_action_links( $links, $file ) {
		if ( ! is_network_admin() ) {
			/* Static so we don't call plugin_basename on every plugin row. */
			static $this_plugin;
			if ( ! $this_plugin ) $this_plugin = plugin_basename( __FILE__ );

			if ( $file == $this_plugin ) {
				global $prtfl_options;
				$settings_link = '<a href="edit.php?post_type=' . $prtfl_options['post_type_name'] . '&page=portfolio.php">' . __( 'Settings', 'portfolio' ) . '</a>';
				array_unshift( $links, $settings_link );
			}
		}
		return $links;
	}
}

if ( ! function_exists( 'prtfl_admin_notices' ) ) {
	function prtfl_admin_notices() {
		global $hook_suffix, $prtfl_plugin_info, $prtfl_options, $prtfl_BWS_demo_data;

		if ( 'plugins.php' == $hook_suffix || ( isset( $_GET['page'] ) && 'portfolio.php' == $_GET['page'] ) ) {

			if ( ! $prtfl_BWS_demo_data ) {
				prtfl_include_demo_data();
			}

			if ( isset( $_GET['page'] ) && 'portfolio.php' == $_GET['page'] ) {
				$prtfl_BWS_demo_data->bws_handle_demo_notice( $prtfl_options['display_demo_notice'] );
			}

			if ( 'plugins.php' == $hook_suffix ) {
				if ( ! is_network_admin() ) {
					bws_plugin_banner_to_settings( $prtfl_plugin_info, 'prtfl_options', 'portfolio', 'edit.php?post_type=portfolio&page=portfolio.php', 'Portfolio' );
				}
				if ( 0 == $prtfl_options['widget_updated'] ) {
					/* Save data for settings page */
					if ( isset( $_REQUEST['prtfl_form_submit'] ) && check_admin_referer( plugin_basename( __FILE__ ), 'prtfl_nonce_name' ) ) {
						$prtfl_options['widget_updated'] = 1;
						update_option( 'prtfl_options', $prtfl_options );
					} else { ?>
						<div class="updated" style="padding: 0; margin: 0; border: none; background: none;">
							<div class="prtfl_admin_notices bws_banner_on_plugin_page">
								<form method="post" action="<?php echo $hook_suffix; ?>">
									<div class="text">
										<p>
											<strong><?php _e( "ATTENTION!", 'portfolio' ); ?></strong>
											<?php _e( "In the current version of Portfolio plugin we updated the Technologies widget. If it was added to the sidebar, it will disappear and you will have to add it again.", 'portfolio' ); ?>
										</p>
										<input type="hidden" name="prtfl_form_submit" value="submit" />
										<p class="submit">
											<input type="submit" class="button-primary" value="<?php _e( 'Read and Understood', 'portfolio' ); ?>" />
										</p>
										<?php wp_nonce_field( plugin_basename( __FILE__ ), 'prtfl_nonce_name' ); ?>
									</div>
								</form>
							</div>
						</div>
					<?php }
				}
			} else {
				bws_plugin_suggest_feature_banner( $prtfl_plugin_info, 'prtfl_options', 'portfolio' );
			}
		}
	}
}

/* This function will display title for portfolio type template */
if ( ! function_exists( 'prtfl_template_title' ) ) {
	function prtfl_template_title() {
		global $wp_query, $prtfl_options;

		if ( isset( $wp_query->query_vars["technologies"] ) ) {
			$term = get_term_by( 'slug', $wp_query->query_vars["technologies"], 'portfolio_technologies' );
			echo $prtfl_options['technologies_text_field'] . " " . ( $term->name );
		} elseif ( isset( $wp_query->query_vars["portfolio_executor_profile"] ) ) {
			$term = get_term_by( 'slug', $wp_query->query_vars["portfolio_executor_profile"], 'portfolio_executor_profile' );
			echo $prtfl_options['executor_text_field'] . " <h1>" . ( $term->name ) . "</h1>";
			$_SESSION['prtfl_page_name'] = $prtfl_options['executor_text_field'] . " " . ( $term->name );
			$_SESSION['prtfl_page_url'] = get_pagenum_link( $wp_query->query_vars['paged'] );
		} else {
			the_title( '<h1>', '</h1>' );
		}
	}
}

/* This function will display title for portfolio post type template */
if ( ! function_exists( 'prtfl_post_template_title' ) ) {
	function prtfl_post_template_title() {
		$title = get_the_title();
		echo empty( $title ) ? '(' . __( 'No title', 'portfolio' ) . ')' : '<h1>'. $title . '</h1>' ;
	}
}

/**
 * Prepare arguments for post query
 * @return array|false
 */
if ( ! function_exists( 'prtfl_get_query_args' ) ) {
	function prtfl_get_query_args() {
		global $prtfl_options, $wp_query;
		$count = 0;
		if ( get_query_var( 'paged' ) ) {
			$paged = get_query_var( 'paged' );
		} elseif ( get_query_var( 'page' ) ) {
			$paged = get_query_var( 'page' );
		} else {
			$paged = 1;
		}
		$per_page = $showitems = get_option( 'posts_per_page' );

		if ( ! empty( $wp_query->query_vars["technologies"] ) ) {
			$args = array(
				'post_type' 		=> $prtfl_options['post_type_name'],
				'post_status' 		=> 'publish',
				'orderby' 			=> $prtfl_options['order_by'],
				'order'			 	=> $prtfl_options['order'],
				'posts_per_page'	=> $per_page,
				'paged' 			=> $paged,
				'tax_query' 		=> array(
					array(
						'taxonomy' 	=> 'portfolio_technologies',
						'field' 	=> 'slug',
						'terms' 	=> $wp_query->query_vars["technologies"]
					)
				)
			);
		} elseif ( ! empty( $wp_query->query_vars["portfolio_executor_profile"] ) ) {
			$args = array(
				'post_type' 		=> $prtfl_options['post_type_name'],
				'post_status' 		=> 'publish',
				'orderby'			=> $prtfl_options['order_by'],
				'order' 			=> $prtfl_options['order'],
				'posts_per_page' 	=> $per_page,
				'paged' 			=> $paged,
				'tax_query' 		=> array(
					array(
						'taxonomy' 	=> 'portfolio_executor_profile',
						'field' 	=> 'slug',
						'terms' 	=> $wp_query->query_vars["portfolio_executor_profile"]
					)
				)
			);
		} else {
			$args = array(
				'post_type'			=> $prtfl_options['post_type_name'],
				'post_status'		=> 'publish',
				'orderby'			=> $prtfl_options['order_by'],
				'order'				=> $prtfl_options['order'],
				'posts_per_page'	=> $per_page,
				'paged'				=> $paged
			);
		}

		if ( isset( $args ) ) {
			return $args;
		} else {
			return false;
		}
	}
}

/**
 * Display template content
 * @return void
 */
if ( ! function_exists( 'prtfl_get_content' ) ) {
	function prtfl_get_content( $second_query ) {
		global $post, $prtfl_options;

		$request = $second_query->request;
		$count_portfolio_row_block = 0;
		$prtfl_widht = 99 / $prtfl_options['custom_portfolio_row_count'];

		if ( ! empty( $post ) && ! empty( $post->post_content ) ) {
			$page_content = $post->post_content;
			if ( function_exists( 'mltlngg_the_content_filter' ) ) $page_content = mltlngg_the_content_filter( $page_content );
			/* dublicate filter 'the_content' - as we couldnt use it */
			if ( function_exists( 'wptexturize' ) ) {
				$page_content = wptexturize( $page_content );
			}
			if ( function_exists( 'convert_smilies' ) ) {
				$page_content = convert_smilies( $page_content );
			}
			if ( function_exists( 'wpautop' ) ) {
				$page_content = wpautop( $page_content );
			}
			if ( function_exists( 'shortcode_unautop' ) ) {
				$page_content = shortcode_unautop( $page_content );
			}
			if ( function_exists( 'prepend_attachment' ) ) {
				$page_content = prepend_attachment( $page_content );
			}
			if ( function_exists( 'wp_make_content_images_responsive' ) ) {
				$page_content = wp_make_content_images_responsive( $page_content );
			}
			if ( function_exists( 'do_shortcode' ) ) {
				$page_content = do_shortcode( $page_content ); 
			} ?>
			<div class="portfolio_content entry-content">
				<div class="entry"><?php echo $page_content; ?></div>
			</div>
		<?php }


		if ( $second_query->have_posts() ) {
			while ( $second_query->have_posts() ) {
				$second_query->the_post();
				if ( $count_portfolio_row_block % $prtfl_options['custom_portfolio_row_count'] == 0 ) {?>
					<div class="portfolio_row_count"><?php
				}?>
				<div id="portfolio_row_count_block" class="portfolio_row_count_block" style="width: <?php echo $prtfl_widht ?>%">
				<div class="portfolio_content<?php echo in_array( get_stylesheet(), array( 'twentyfourteen', 'twentythirteen', 'twentytwelve', 'twentynineteen', 'twentytwenty' ) ) ?  ' entry-content' : ''; ?>">
					<div class="entry">
						<?php $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
						$image			= wp_get_attachment_image_src( $post_thumbnail_id, $prtfl_options['image_size_album'] );
						$post_meta		= get_post_meta( $post->ID, 'prtfl_information', true );

						$short_descr = isset( $post_meta['_prtfl_short_descr'] ) ? $post_meta['_prtfl_short_descr'] : '';
						if ( empty( $short_descr ) ) {
							$short_descr = get_the_excerpt();
						}
						$title = get_the_title();
						if ( empty( $title ) ) {
							$title = '(' . __( 'No title', 'portfolio' ) . ')';
						}
						$permalink = get_permalink();
						if ( ! empty( $image[0] ) ) {
							/* get width and height for image_size_album */
							if ( 'portfolio-thumb' != $prtfl_options['image_size_album'] ) {
								$width  = absint( get_option( $prtfl_options['image_size_album'] . '_size_w' ) );
								$height = absint( get_option( $prtfl_options['image_size_album'] . '_size_h' ) );
							} else {
								$width  = $prtfl_options['custom_size_px']['portfolio-thumb'][0];
								$height = $prtfl_options['custom_size_px']['portfolio-thumb'][1];
							}
							$image_alt = get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true ); ?>
							<div class="portfolio_thumb">
								<a rel="bookmark" href="<?php echo $permalink; ?>" title="<?php echo $title; ?>">
									<img src="<?php echo $image[0]; ?>" alt="<?php echo $image_alt; ?>" <?php if ( $width ) echo 'width="' . $width . '"'; if ( $height ) echo 'height="' . $height . '"'; ?> style="<?php if ( $width ) echo 'width:' . $width . 'px;'; if ( $height ) echo 'height:' . $height . 'px;'; ?>" />
								</a>
							</div><!-- .portfolio_thumb -->
						<?php } ?>
						<div class="portfolio_short_content">
							<div class="item_title">
								<p>
									<a href="<?php echo $permalink; ?>" rel="bookmark"><?php echo $title; ?></a>
								</p>
							</div><!-- .item_title -->
							<?php $date_compl	= isset( $post_meta['_prtfl_date_compl'] ) ? $post_meta['_prtfl_date_compl'] : '';
							if ( 1 == $prtfl_options['date_additional_field'] && ! empty( $date_compl ) ) { ?>
								<p>
									<span class="lable"><?php echo '<b>' . $prtfl_options['date_text_field'] . '</b>'; ?></span> <?php echo $date_compl; ?>
								</p>
							<?php }
							$user_id = get_current_user_id();

							$link =	isset( $post_meta['_prtfl_link'] ) ? $post_meta['_prtfl_link'] : '';
							if ( 1 == $prtfl_options['link_additional_field'] && ! empty( $link ) ) {

								if ( false !== parse_url( $link ) ) {
									if ( ( 0 == $user_id && 0 == $prtfl_options['link_additional_field_for_non_registered'] ) || 0 != $user_id ) { ?>
										<p><span class="lable"><?php echo '<b>' . $prtfl_options['link_text_field'] . '</b>'; ?></span> <a href="<?php echo $link; ?>"><?php echo $link; ?></a></p>
									<?php } else { ?>
										<p><span class="lable"><?php echo '<b>' . $prtfl_options['link_text_field'] . '</b>'; ?></span> <?php echo $link; ?></p>
									<?php }
								} else { ?>prtfl_options
									<p><span class="lable"><?php echo '<b>' . $prtfl_options['link_text_field'] . '</b>'; ?></span> <?php echo $link; ?></p>
								<?php }
							}
							if ( 1 == $prtfl_options['shrdescription_additional_field'] ) { ?>
								<p><span class="lable"><?php echo '<b>' . $prtfl_options['shrdescription_text_field'] . '</b>'; ?></span> <?php echo $short_descr; ?></p>
							<?php } ?>
						</div><!-- .portfolio_short_content -->
					</div><!-- .entry -->
					<div class="entry_footer">
						<div class="read_more">
							<a href="<?php the_permalink(); ?>" rel="bookmark"><?php _e( 'Read more', 'portfolio' ); ?></a>
						</div><!-- .read_more -->
						<?php $terms = wp_get_object_terms( $post->ID, 'portfolio_technologies' );
						if ( 1 == $prtfl_options['technologies_additional_field'] && ! is_wp_error( $terms ) ) {
							if ( is_array( $terms ) && 0 < count( $terms ) ) { ?>
								<div class="portfolio_terms">
									<?php if ( isset( $prtfl_options['technologies_text_field'] ) ) echo '<b>' . $prtfl_options['technologies_text_field'] . '&nbsp;</b>';
									$links = array();
									foreach ( $terms as $term ) {
										$links[] = '<a href="' . get_term_link( $term->slug, 'portfolio_technologies' ) . '" title="' . sprintf( __( "View all projects in %s" ), $term->name ) . '" ' . '>' . $term->name . '</a>';
									}
									echo implode( ', ', $links ); ?>
								</div><!-- .portfolio_terms --><?php
							}
						} ?>
					</div><!-- .entry_footer -->
				</div><!-- .portfolio_content -->
                </div>
				<?php if ( ( $count_portfolio_row_block % $prtfl_options['custom_portfolio_row_count'] ) == ( $prtfl_options['custom_portfolio_row_count'] - 1 ) ) {?>
                    <div class="clear"></div>
                    </div><!-- .portfolio_row_count --><?php
                }
                $count_portfolio_row_block = $count_portfolio_row_block + 1;
            }
		}
		if ( 0 != $count_portfolio_row_block % $prtfl_options['custom_portfolio_row_count'] )  {
			?></div><?php
		}
		?>
       <div class="clear"></div><?php
	}
}

/**
 * Display post template content
 * @return void
 */
if ( ! function_exists( 'prtfl_post_get_content' ) ) {
	function prtfl_post_get_content() {
		global $post, $prtfl_options;

		while ( have_posts() ) : the_post(); ?>
			<article class="portfolio_content entry-content">
				<div class="entry">
					<?php global $post;
					$portfolio_options = get_option( 'prtfl_options' );
					$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
					$image			= wp_get_attachment_image_src( $post_thumbnail_id, $prtfl_options['image_size_album'] );
					$post_meta		= get_post_meta( $post->ID, 'prtfl_information', true );

					if ( ! empty( $image[0] ) ) {
						$image_large = wp_get_attachment_image_src( $post_thumbnail_id, 'large' );
						$image_desc = get_post( $post_thumbnail_id );
						$image_desc = $image_desc->post_content;
						/* get width and height for image_size_album */
						if ( 'portfolio-thumb' != $prtfl_options['image_size_album'] ) {
							$width  = absint( get_option( $prtfl_options['image_size_album'] . '_size_w' ) );
							$height = absint( get_option( $prtfl_options['image_size_album'] . '_size_h' ) );
						} else {
							$width  = $prtfl_options['custom_size_px']['portfolio-thumb'][0];
							$height = $prtfl_options['custom_size_px']['portfolio-thumb'][1];
						}
						$image_alt = get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true ); ?>
						<div class="portfolio_thumb">
							<a class="lightbox" data-fancybox="portfolio_fancybox" href="<?php echo $image_large[0]; ?>" title="<?php echo $image_desc; ?>">
								<img src="<?php echo $image[0]; ?>" alt="<?php echo $image_alt; ?>" <?php if ( $width ) echo 'width="' . $width . '"'; if ( $height ) echo 'height="' . $height . '"'; ?> />
							</a>
						</div><!-- .portfolio_thumb -->
					<?php } ?>
					<div class="portfolio_short_content">
						<?php $date_compl	= isset( $post_meta['_prtfl_date_compl'] ) ? $post_meta['_prtfl_date_compl'] : '';
						if ( 1 == $portfolio_options['date_additional_field'] && ! empty( $date_compl ) ) { ?>
							<p>
								<span class="lable"><?php echo '<b>' . $portfolio_options['date_text_field'] . '</b>'; ?></span> <?php echo $date_compl; ?>
							</p>
						<?php }
						$user_id = get_current_user_id();

						$link =	isset( $post_meta['_prtfl_link'] ) ? $post_meta['_prtfl_link'] : '';
						if ( 1 == $portfolio_options['link_additional_field'] && ! empty( $link ) ) {

							if ( false !== parse_url( $link ) ) { ?>
								<?php if ( ( 0 == $user_id && 0 == $portfolio_options['link_additional_field_for_non_registered'] ) || 0 != $user_id ) { ?>
									<p><span class="lable"><?php echo '<b>'.  $portfolio_options['link_text_field'] . '</b>'; ?></span> <a href="<?php echo $link; ?>"><?php echo $link; ?></a></p>
								<?php } else { ?>
									<p><span class="lable"><?php echo '<b>' . $portfolio_options['link_text_field'] . '</b>'; ?></span> <?php echo $link; ?></p>
								<?php }
							} else { ?>
								<p><span class="lable"><?php echo '<b>' . $portfolio_options['link_text_field'] . '</b>'; ?></span> <?php echo $link; ?></p>
							<?php }
						}
						if ( 1 == $portfolio_options['description_additional_field'] ) {
							$full_descr = $post->post_content != "" ? $post->post_content : '';
							if ( empty( $full_descr ) ){
								$full_descr = isset( $post_meta['_prtfl_short_descr'] ) ? $post_meta['_prtfl_short_descr'] : '';
							} else {
								if ( function_exists( 'mltlngg_the_content_filter' ) ) {
									$full_descr = mltlngg_the_content_filter( $full_descr );
								}
								/* dublicate filter 'the_content' - as we couldnt use it */
								if ( function_exists( 'wptexturize' ) ) {
									$full_descr = wptexturize( $full_descr );
								}
								if ( function_exists( 'convert_smilies' ) ) {
									$full_descr = convert_smilies( $full_descr );
								}
								if ( function_exists( 'wpautop' ) ) {
									$full_descr = wpautop( $full_descr );
								}
								if ( function_exists( 'shortcode_unautop' ) ) {
									$full_descr = shortcode_unautop( $full_descr );
								}
								if ( function_exists( 'prepend_attachment' ) ) {
									$full_descr = prepend_attachment( $full_descr );
								}
								if ( function_exists( 'wp_make_content_images_responsive' ) ) {
									$full_descr = wp_make_content_images_responsive( $full_descr );
								}
								if ( function_exists( 'do_shortcode' ) ) {
									$full_descr = do_shortcode( $full_descr );
								}
							}
							if ( ! empty( $full_descr ) ) { ?>
								<div style = "clear: both;"><span class="lable"><?php echo '<b>' . $prtfl_options['description_text_field'] . '</b>'; ?></span> <?php echo $full_descr; ?></div>
							<?php }
						}

						if ( 0 != $user_id || 0 == $portfolio_options['svn_additional_field_for_non_logged'] ) {
							$svn = isset( $post_meta['_prtfl_svn'] ) ? $post_meta['_prtfl_svn'] : '';
							if ( 1 == $portfolio_options['svn_additional_field'] && ! empty( $svn ) ) { ?>
								<p><span class="lable"><?php echo '<b>' . $portfolio_options['svn_text_field'] . '</b>'; ?></span> <?php echo $svn; ?></p>
							<?php }
						}
						if ( $user_id ) {
							$executors_profile = wp_get_object_terms( $post->ID, 'portfolio_executor_profile' );
							if ( 1 == $portfolio_options['executor_additional_field'] && ! empty( $executors_profile ) ) { ?>
								<p><span class="lable"><?php echo '<b>' . $portfolio_options['executor_text_field'] . '</b>'; ?></span>
								<?php $count = 0;
								foreach ( $executors_profile as $profile ) {
									if ( $count > 0 ) {
										echo ', ';
									} ?>
									<a href="<?php echo get_term_link( $profile->slug, 'portfolio_executor_profile' ); ?>" title="<?php echo $profile->name; ?> profile" target="_blank"><?php echo $profile->name; ?></a>
									<?php $count++;
								} ?>
								</p>
							<?php }
						} ?>
					</div><!-- .portfolio_short_content -->
					<div class="portfolio_images_block" data-columns="<?php echo $portfolio_options['custom_image_row_count'] ?>">
						<?php if ( metadata_exists( 'post', $post->ID, '_prtfl_images' ) ) {
							$array_post_thumbnail_id = array_filter( explode( ',', get_post_meta( $post->ID, '_prtfl_images', true ) ) );
						} else {
							/* Compatibility with old plugin version 2.37 */
							$args = array(
								'post_parent'		=> $post->ID,
								'post_type'			=> 'attachment',
								'post_mime_type'	=> 'image',
								'numberposts'		=> -1,
								'orderby'			=> 'menu_order',
								'order'				=> 'ASC',
								'exclude'			=> $post_thumbnail_id,
								'fields'			=> 'ids'
							);
							$array_post_thumbnail_id = get_children( $args );
						}
						$count_element = count( $array_post_thumbnail_id );

						foreach ( $array_post_thumbnail_id as $key => $value ) {
							$image			=	wp_get_attachment_image_src( $value, $prtfl_options['image_size_photo'] );
							$image_large	=	wp_get_attachment_image_src( $value, 'large' );
							$image_alt		=	get_post_meta( $value, '_wp_attachment_image_alt', true );
							$image_title	=	get_post_meta( $value, '_wp_attachment_image_title', true );
							$image_desc 	=	get_post( $value );
							$image_desc		=	$image_desc->post_content;

							/* get width and height for image_size_photo */
							if ( 'portfolio-photo-thumb' != $prtfl_options['image_size_photo'] ) {
								$width  = absint( get_option( $prtfl_options['image_size_photo'] . '_size_w' ) );
								$height = absint( get_option( $prtfl_options['image_size_photo'] . '_size_h' ) );
							} else {
								$width  = $prtfl_options['custom_size_px']['portfolio-photo-thumb'][0];
								$height = $prtfl_options['custom_size_px']['portfolio-photo-thumb'][1];
							}

							if ( 0 == $key ) { ?>
								<span class="lable"><?php echo '<b>' . $portfolio_options['screenshot_text_field'] . '</b>'; ?></span>
								<div class="portfolio_images_rows">
							<?php } ?>
							<div class="portfolio_images_gallery">
								<a class="lightbox" data-fancybox="portfolio_fancybox" href="<?php echo $image_large[0]; ?>" title="<?php echo $image_desc; ?>">
									<img src="<?php echo $image[0]; ?>" alt="<?php echo $image_alt; ?>" <?php if ( $width ) echo 'width="' . $width . '"'; if ( $height ) echo 'height="' . $height . '"'; ?> style="<?php if ( $width ) echo 'width:' . $width . 'px;'; if ( $height ) echo 'height:' . $height . 'px;'; ?>" />
								</a>
								<br /><?php echo $image_title;?>
							</div>
							<?php if ( 0 == ( $key + 1 ) % $portfolio_options['custom_image_row_count'] && 0 != $key && $key + 1 != $count_element ) { ?>
								</div><!-- .portfolio_images_rows -->
								<div class="portfolio_images_rows">
							<?php }
						}
						if ( 0 < $count_element ) { ?>
							</div><!-- .portfolio_images_rows -->
						<?php } ?>
					</div><!-- .portfolio_images_block -->
				</div><!-- .entry -->
				<div class="entry_footer entry-footer">
					<?php $terms = wp_get_object_terms( $post->ID, 'portfolio_technologies' );
					if ( 1 == $portfolio_options['technologies_additional_field'] && ! ( empty( $terms ) || is_wp_error( $terms ) ) ) {
						if ( is_array( $terms ) && 0 < count( $terms ) ) { ?>
							<div class="portfolio_terms">
								<?php if ( isset( $portfolio_options['technologies_text_field'] ) ) echo '<b>'. $portfolio_options['technologies_text_field'] . '&nbsp;</b>';
								$links = array();
								foreach ( $terms as $term ) {
									$links[] = '<a href="' . get_term_link( $term->slug, 'portfolio_technologies' ) . '" title="' . sprintf( __( "View all projects in %s" ), $term->name ) . '" ' . '>' . $term->name . '</a>';
								}
								echo implode( ', ', $links ); ?>
							</div><!-- .portfolio_terms -->
						<?php }
					} ?>
				</div><!-- .entry_footer .entry-footer -->
			</article><!-- .portfolio_content -->
		<?php endwhile;
	}
}

/* This function prints pagination for portfolio post type template */
if ( ! function_exists( 'prtfl_pro_pagination' ) ) {
	function prtfl_pro_pagination( $second_query, &$args ) {
		global $wp_query, $prtfl_options;
		$count_all_albums = $second_query->found_posts;

		$request 	= $wp_query->request;
		$paged 		= $showitems = $args['paged'];
		$per_page 	= $args['posts_per_page'];
		$pages 		= intval( $count_all_albums / $per_page );

		if ( $count_all_albums % $per_page > 0 ) {
			$pages += 1;
		}
		$range = 2;

		if ( ! $pages ) {
			$pages = 1;
		}
		if ( 1 != $pages ) { ?>
			<div class='clear'></div>
			<div id="portfolio_pagenation">
				<div class="pagination">
					<div class="<?php echo 'twentynineteen' == get_stylesheet() ? 'nav-links' : '' ?>">
						<?php if ( 2 < $paged && $paged > $range + 1 && $showitems < $pages ) {
							echo "<a href='" . get_pagenum_link( 1 ) . "'>&laquo;</a>";
						}
						if ( 1 < $paged && $showitems < $pages ) {
							echo "<a href='" . get_pagenum_link( $paged - 1 ) . "'>&lsaquo;</a>";
						}
						for ( $i = 1; $i <= $pages; $i++ ) {
							if ( 1 != $pages && ( ! ( $i >= $paged + $range + 1 || $i <= $paged - $range - 1 ) || $pages <= $showitems ) ) {
								echo ( $paged == $i ) ? "<span class='current'>" . $i . "</span>":"<a href='" . get_pagenum_link( $i ) . "' class='inactive' >" . $i . "</a>";
							}
						}
						if ( $paged < $pages && $showitems < $pages ) {
							echo "<a href='" . get_pagenum_link( $paged + 1 ) . "'>&rsaquo;</a>";
						}
						if ( $paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages ) {
							echo "<a href='" . get_pagenum_link( $pages ) . "'>&raquo;</a>";
						} ?>
                        <div class='clear'></div>
                    </div>
				</div><!-- .pagination -->
				<?php if ( function_exists( 'pgntn_display_pagination' ) ) pgntn_display_pagination( 'custom', $second_query ); ?>
			</div><!-- #portfolio_pagenation -->
		<?php }
	}
}

/* add shortcode content  */
if ( ! function_exists( 'prtfl_shortcode_button_content' ) ) {
	function prtfl_shortcode_button_content( $content ) { ?>
		<div id="prtfl" style="display:none;">
			<fieldset>
				<label>
					<input type="number" value="3" min="0" max="1000" name="prtfl_display_count" id="prtfl_display_count" class="small-text" />
					<span>
						<?php _e( 'The number of portfolio projects to display', 'portfolio' ); ?>
					</span>
				</label>
			</fieldset>
			<input class="bws_default_shortcode" type="hidden" name="default" value="[latest_portfolio_items count=3]" />
			<?php $script = "function prtfl_shortcode_init() {
                ( function( $ ) {
                    $( '.mce-reset #prtfl_display_count' ).on( 'change', function() {
                        var count = $( '.mce-reset #prtfl_display_count' ).val();
                        var shortcode = '[latest_portfolio_items count=' + count + ']';
                        $( '.mce-reset #bws_shortcode_display' ).text( shortcode );
                    } );
                } )( jQuery );
            }";
			wp_register_script( 'prtfl_display_script', '' );
			wp_enqueue_script( 'prtfl_display_script' );
			wp_add_inline_script( 'prtfl_display_script', sprintf( $script ) ); ?>
			<div class="clear"></div>
		</div>
	<?php }
}

/* add help tab  */
if ( ! function_exists( 'prtfl_add_tabs' ) ) {
	function prtfl_add_tabs() {
		global $prtfl_options;
		$screen = get_current_screen();
		if ( ( ! empty( $screen->post_type ) && $prtfl_options['post_type_name'] == $screen->post_type ) ||
			( ! empty( $screen->taxonomy ) && 'portfolio_executor_profile' == $screen->taxonomy ) ||
			( ! empty( $screen->taxonomy ) && 'portfolio_technologies' == $screen->taxonomy ) ||
			( isset( $_GET['page'] ) && 'portfolio.php' == $_GET['page'] ) ) {
			$args = array(
				'id' 			=> 'prtfl',
				'section' 		=> '200538929'
			);
			bws_help_tab( $screen, $args );
		}
	}
}

if ( ! function_exists( 'prtfl_plugin_deactivation' ) ) {
	function prtfl_plugin_deactivation() {
		global $wpdb, $prtfl_BWS_demo_data;

		if ( function_exists( 'is_multisite' ) && is_multisite() ) {
			$old_blog = $wpdb->blogid;
			/* Get all blog ids */
			$blogids = $wpdb->get_col( "SELECT `blog_id` FROM $wpdb->blogs" );
			foreach ( $blogids as $blog_id ) {
				switch_to_blog( $blog_id );
				prtfl_include_demo_data();
				$prtfl_BWS_demo_data->bws_remove_demo_data();
			}
			switch_to_blog( $old_blog );
		} else {
			global $prtfl_BWS_demo_data;

			if ( ! $prtfl_BWS_demo_data ) {
				prtfl_include_demo_data();
			}
			$prtfl_BWS_demo_data->bws_remove_demo_data();
		}
	}
}

if ( ! function_exists( 'prtfl_plugin_uninstall' ) ) {
	function prtfl_plugin_uninstall() {
		global $wpdb;
		require_once( ABSPATH . 'wp-admin/includes/plugin.php' );

		$plugins_list = get_plugins();

		if ( function_exists( 'is_multisite' ) && is_multisite() ) {
			$old_blog = $wpdb->blogid;
			/* Get all blog ids */
			$blogids = $wpdb->get_col( "SELECT `blog_id` FROM $wpdb->blogs" );
			foreach ( $blogids as $blog_id ) {
				switch_to_blog( $blog_id );
				if ( ! array_key_exists( 'portfolio-pro/portfolio-pro.php', $plugins_list ) ) {
					delete_option( 'widget_portfolio_technologies_widget' );
					delete_option( 'prtfl_options' );
					delete_option( 'prtfl_tag_update' );
					delete_post_meta_by_key( 'prtfl_information' );
					delete_post_meta_by_key( '_prtfl_images' );
					delete_post_meta_by_key( 'prtfl_featured' );
				}
			}
			switch_to_blog( $old_blog );
		} else {
			if ( ! array_key_exists( 'portfolio-pro/portfolio-pro.php', $plugins_list ) ) {
				delete_option( 'widget_portfolio_technologies_widget' );
				delete_option( 'prtfl_options' );
				delete_option( 'prtfl_tag_update' );
				delete_post_meta_by_key( 'prtfl_information' );
				delete_post_meta_by_key( '_prtfl_images' );
				delete_post_meta_by_key( 'prtfl_featured' );
			}
		}

		require_once( dirname( __FILE__ ) . '/bws_menu/bws_include.php' );
		bws_include_init( plugin_basename( __FILE__ ) );
		bws_delete_plugin( plugin_basename( __FILE__ ) );
	}
}


if ( ! function_exists( 'prtfl_get_data' ) ) {
    function prtfl_get_data( $prtfl_id ) {

      $post_type = array('bws-portfolio');
    
      $prtfl_posts = $prtfl_images_all = array();

      if ( 'all' == $prtfl_id || is_array( $prtfl_id ) ) {

        $prtfl_id_list = ( is_array( $prtfl_id ) && ! empty( $prtfl_id ) ) ? $prtfl_id  : array();
        $args = ( is_array( $prtfl_id ) ) ? array( 'post_type' => 'bws-portfolio',
                                                         'include' => $prtfl_id_list ) : array( 'post_type' => 'bws-portfolio');
        $prtfl_posts = get_posts( $args );

	    } else if ( is_int( $prtfl_id ) || is_string( $prtfl_id ) ) {

	      $prtfl_int_id = is_int( $prtfl_id ) ? $prtfl_id : intval( $prtfl_id );
	      $prtfl_posts = get_post( $prtfl_int_id );

	    }
	    
	    $prtfl_posts_end = array();
	 	foreach ( (array)$prtfl_posts as $key => $prtfl_post ) {

		    $prtfl_meta = get_post_meta( $prtfl_post->ID, '' );
		    unset($prtfl_meta['_edit_lock']);
		    unset($prtfl_meta['_edit_last']);

		    foreach ( $prtfl_meta['prtfl_information']  as $key => $prtfl_information ) {

		    	$prtfl_information =  isset( $prtfl_information ) ? unserialize( $prtfl_information ) : "";
		    	$prtfl_meta['prtfl_information'][$key] = $prtfl_information;
		    }

		    foreach ( $prtfl_meta['_prtfl_images']  as $key => $prtfl_images ) {
		    	
		    	$prtfl_images_all =  isset( $prtfl_images ) ? explode( ',' , $prtfl_images ) : "";
		    	$args = array(  'post_type' => 'attachment','include' => $prtfl_images_all ) ;
		    	$prtfl_images = ! empty( $prtfl_images_all ) ? get_posts( $args ) : "";
		    	$prtfl_meta['_prtfl_images'][$key] = $prtfl_images;
		    }

		    $prtfl_posts[$key]->prtfl_post_meta = $prtfl_meta;
	    }

        return $prtfl_posts;
    }
}


if ( ! function_exists( 'prtfl_widgets_init' ) ) {
	function prtfl_widgets_init() {
		register_widget( "Prtfl_Widget" );
	}
}

/**
 * Class extends WP class WP_Widget, and create new widget
 *
 */
if ( ! class_exists( 'Prtfl_Widget' ) ) {
	class Prtfl_Widget extends WP_Widget {
		/**
		 * constructor of class
		 */
		public function __construct() {
			parent::__construct(
				'prtfl_widget',
				__( 'Latest Portfolio Items', 'portfolio' ),
				array( 'description' => __( 'Displays the latest Portfolio projects.', 'portfolio' ) )
			);
		}
		/**
		 * Function to displaying widget in front end
		 * @param array()	 $args 	array with sidebar settings
		 * @param array()	 $instance 	array with widget settings
		 * @return void
		 */
		public function widget( $args, $instance ) {

			$widget_title = ( ! empty( $instance['widget_title'] ) ) ? apply_filters( 'widget_title', $instance['widget_title'], $instance, $this->id_base ) : '';
			$widget_count_posts = ( ! empty( $instance['widget_count_posts'] ) ) ?  $instance['widget_count_posts']: '';
			$widget_count_colums = ( ! empty( $instance['widget_count_colums'] ) ) ?  $instance['widget_count_colums']: '';

			$atts['count'] = $widget_count_posts;
			$content = prtfl_latest_items( $atts, $widget_count_colums );
			echo $args['before_widget'] . $args['before_title'] . $widget_title . $args['after_title'] . $content;
		}

		public function form( $instance ) {
			global $sbscrbr_options;

			$widget_title           = isset( $instance['widget_title'] ) ? stripslashes( sanitize_text_field( $instance['widget_title'] ) ) : '';
			$widget_count_posts     = isset( $instance['widget_count_posts'] ) ? stripslashes( sanitize_text_field( $instance['widget_count_posts'] ) ) : 5;
			$widget_count_colums    = isset( $instance['widget_count_colums'] ) ? stripslashes( sanitize_text_field( $instance['widget_count_colums'] ) ) : 3;
			?>
			<p>
				<label for="<?php echo $this->get_field_id( 'widget_title' ); ?>">
					<?php _e( 'Title', 'portfolio' ); ?>:
					<input class="widefat" id="<?php echo $this->get_field_id( 'widget_title' ); ?>" name="<?php echo $this->get_field_name( 'widget_title' ); ?>" type="text" value="<?php echo $widget_title; ?>"/>
				</label>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'widget_count_posts' ); ?>">
					<?php _e( 'Number of Projects:', 'portfolio' ); ?>:
					<input class="widefat" id="<?php echo $this->get_field_id( 'widget_count_posts' ); ?>" name="<?php echo $this->get_field_name( 'widget_count_posts' ); ?>" type="number" min="1" max="100" value="<?php echo $widget_count_posts; ?>" />
				</label>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'widget_count_colums' ); ?>">
					<?php _e( 'Number of Colums:', 'portfolio' ); ?>:
					<input class="widefat" id="<?php echo $this->get_field_id( 'widget_count_colums' ); ?>" name="<?php echo $this->get_field_name( 'widget_count_colums' ); ?>" type="number" min="1" max="100" value="<?php echo $widget_count_colums; ?>" />
				</label>
			</p>
		<?php }

		public function update( $new_instance, $old_instance ) {
			$instance = array();
			$instance['widget_title']          = ( ! empty( $new_instance['widget_title'] ) ) ? strip_tags( $new_instance['widget_title'] ) : null;
			$instance['widget_count_posts']    = ( ! empty( $new_instance['widget_count_posts'] ) ) ? strip_tags( $new_instance['widget_count_posts'] ) : null;
			$instance['widget_count_colums']    = ( ! empty( $new_instance['widget_count_colums'] ) ) ? strip_tags( $new_instance['widget_count_colums'] ) : null;
			return $instance;
		}
	}
}

/* Activate plugin */
register_activation_hook( __FILE__, 'prtfl_plugin_activate' );
/* Add portfolio settings page in admin menu */
add_action( 'admin_menu', 'add_prtfl_admin_menu' );
add_action( 'admin_init', 'prtfl_admin_init' );
add_action( 'init', 'prtfl_init' );
add_action( 'plugins_loaded', 'prtfl_plugins_loaded' );
/* Save custom data from admin  */
add_action( 'save_post', 'prtfl_save_postdata', 1, 2 );
add_filter( 'content_save_pre', 'prtfl_content_save_pre', 10, 1 );

/* this function add custom fields and images for PDF&Print plugin in Portfolio post */
add_filter( 'bwsplgns_get_pdf_print_content', 'prtfl_add_pdf_print_content' );

add_action( 'admin_enqueue_scripts', 'prtfl_admin_head' );
add_action( 'wp_enqueue_scripts', 'prtfl_wp_enqueue_scripts' );
add_action( 'wp_head', 'prtfl_wp_head' );
add_action( 'wp_footer', 'prtfl_wp_footer' );

/* add theme name as class to body tag */
add_filter( 'body_class', 'prtfl_theme_body_classes' );

/* Add widget for portfolio technologies */
add_action( 'widgets_init', 'prtfl_register_widget' );

add_action( 'wp_ajax_prtfl_update_image', 'prtfl_update_image' );

add_shortcode( 'latest_portfolio_items', 'prtfl_latest_items' );
/* custom filter for bws button in tinyMCE */
add_filter( 'bws_shortcode_button_content', 'prtfl_shortcode_button_content' );

add_filter( 'request', 'prtfl_request_filter' );
/* Display tachnologies taxonomy */
add_filter( 'pre_get_posts', 'prtfl_technologies_get_posts' );
add_filter( 'rewrite_rules_array', 'prtfl_custom_permalinks' );
/* Additional links on the plugin page */
add_filter( 'plugin_row_meta', 'prtfl_register_plugin_links', 10, 2 );
add_filter( 'plugin_action_links', 'prtfl_plugin_action_links', 10, 2 );

add_action( 'widgets_init', 'prtfl_widgets_init' );

add_filter( 'nav_menu_css_class', 'prtfl_add_portfolio_ancestor_to_menu', 10, 2 );

add_action( 'admin_notices', 'prtfl_admin_notices' );

register_deactivation_hook( __FILE__, 'prtfl_plugin_deactivation' ); /* Deactivate plugin */
