<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Haikufish
 * @subpackage Plugin_Haikufish/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Plugin_Haikufish
 * @subpackage Plugin_Haikufish/admin
 * @author     Your Name <email@example.com>
 */
class Plugin_Haikufish_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_haikufish    The ID of this plugin.
	 */
	private $plugin_haikufish;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_haikufish       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_haikufish, $version ) {

		$this->plugin_haikufish = $plugin_haikufish;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Haikufish_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Haikufish_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_haikufish, plugin_dir_url( __FILE__ ) . 'css/plugin-haikufish-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Haikufish_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Haikufish_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_haikufish, plugin_dir_url( __FILE__ ) . 'js/plugin-haikufish-admin.js', array( 'jquery' ), $this->version, false );

	}

/**
* Creates a new custom post type
*
* @since 1.0.0
* @access public
* @uses register_post_type()
*/
public static function new_cpt_haiku() {
	$cap_type = 'post';
	$plural = 'Haikus';
	$single = 'Haiku';
	$cpt_name = 'haiku';
	$opts['can_export'] = TRUE;
	$opts['capability_type'] = $cap_type;
	$opts['description'] = '';
	$opts['exclude_from_search'] = FALSE;
	$opts['has_archive'] = FALSE;
	$opts['hierarchical'] = FALSE;
	$opts['map_meta_cap'] = TRUE;
	$opts['menu_icon'] = 'dashicons-clipboard';
	$opts['menu_position'] = 25;
	$opts['public'] = TRUE;
	$opts['publicly_querable'] = TRUE;
	$opts['query_var'] = TRUE;
	$opts['register_meta_box_cb'] = '';
	$opts['rewrite'] = FALSE;
	$opts['show_in_admin_bar'] = TRUE;
	$opts['show_in_menu'] = TRUE;
	$opts['show_in_nav_menu'] = TRUE;
	$opts['show_in_rest'] = TRUE; 
	
	$opts['labels']['add_new'] = esc_html__( "Add New {$single}", 'haiku' );
	$opts['labels']['add_new_item'] = esc_html__( "Add New {$single}", 'haiku' );
	$opts['labels']['all_items'] = esc_html__( $plural, 'haikus' );
	$opts['labels']['edit_item'] = esc_html__( "Edit {$single}" , 'haiku' );
	$opts['labels']['menu_name'] = esc_html__( $plural, 'haikus' );
	$opts['labels']['name'] = esc_html__( $plural, 'haikus' );
	$opts['labels']['name_admin_bar'] = esc_html__( $single, 'haiku' );
	$opts['labels']['new_item'] = esc_html__( "New {$single}", 'haiku' );
	$opts['labels']['not_found'] = esc_html__( "No {$plural} Found", 'haikus' );
	$opts['labels']['not_found_in_trash'] = esc_html__( "No {$plural} Found in Trash", 'haikus' );
	$opts['labels']['parent_item_colon'] = esc_html__( "Parent {$plural} :", 'haikus' );
	$opts['labels']['search_items'] = esc_html__( "Search {$plural}", 'haikus' );
	$opts['labels']['singular_name'] = esc_html__( $single, 'haiku' );
	$opts['labels']['view_item'] = esc_html__( "View {$single}", 'haiku' );

	register_post_type( strtolower( $cpt_name ), $opts );

	} // new haiku

		/**
* Creates a new custom post type
*
* @since 1.0.0
* @access public
* @uses register_post_type()
*/
public static function new_cpt_haiku_prompt() {
	$cap_type = 'post';
	$plural = 'Haiku Prompts';
	$single = 'Haiku Prompt';
	$cpt_name = 'haiku-prompt';
	$opts['can_export'] = TRUE;
	$opts['capability_type'] = $cap_type;
	$opts['description'] = '';
	$opts['exclude_from_search'] = FALSE;
	$opts['has_archive'] = FALSE;
	$opts['hierarchical'] = FALSE;
	$opts['map_meta_cap'] = TRUE;
	$opts['menu_icon'] = 'dashicons-plus-alt2';
	$opts['menu_position'] = 25;
	$opts['public'] = TRUE;
	$opts['publicly_querable'] = TRUE;
	$opts['query_var'] = TRUE;
	$opts['register_meta_box_cb'] = '';
	$opts['rewrite'] = FALSE;
	$opts['show_in_admin_bar'] = TRUE;
	$opts['show_in_menu'] = TRUE;
	$opts['show_in_nav_menu'] = TRUE;
	
	$opts['labels']['add_new'] = esc_html__( "Add New {$single}", 'haiku prompt' );
	$opts['labels']['add_new_item'] = esc_html__( "Add New {$single}", 'haiku prompt' );
	$opts['labels']['all_items'] = esc_html__( $plural, 'haiku prompts' );
	$opts['labels']['edit_item'] = esc_html__( "Edit {$single}" , 'haiku prompt' );
	$opts['labels']['menu_name'] = esc_html__( $plural, 'haiku prompt' );
	$opts['labels']['name'] = esc_html__( $plural, 'haiku prompt' );
	$opts['labels']['name_admin_bar'] = esc_html__( $single, 'haiku prompt' );
	$opts['labels']['new_item'] = esc_html__( "New {$single}", 'haiku prompt' );
	$opts['labels']['not_found'] = esc_html__( "No {$plural} Found", 'haiku prompts' );
	$opts['labels']['not_found_in_trash'] = esc_html__( "No {$plural} Found in Trash", 'haiku prompts' );
	$opts['labels']['parent_item_colon'] = esc_html__( "Parent {$plural} :", 'haiku prompts' );
	$opts['labels']['search_items'] = esc_html__( "Search {$plural}", 'haiku prompts' );
	$opts['labels']['singular_name'] = esc_html__( $single, 'haiku prompt' );
	$opts['labels']['view_item'] = esc_html__( "View {$single}", 'haiku prompt' );

	register_post_type( strtolower( $cpt_name ), $opts );

	} // new haiku prompt

}
