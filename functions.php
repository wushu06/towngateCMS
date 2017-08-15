<?php
/**
 * towngate Grills.
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * Documentation standards:
 * https://make.wordpress.org/core/handbook/best-practices/inline-documentation-standards/php/
 *
 * @package		WordPress
 * @subpackage	towngate
 * @since		1.0.2
 *
 * @author		The Bigger Boat
 */

/**
 * Increase memory and processing time.
 *
 * @since  1.0.1
 */

ini_set( 'upload_max_size' , '64M' );
ini_set( 'post_max_size', '64M');
ini_set( 'max_execution_time', '300' );


/**
 * Define theme path for quicker referencing.
 *
 * @since  1.0.1
 */

define( 'THEME_DIR', get_template_directory_uri() );







/**
 * Core theme class.
 *
 * Sets up WordPress hooks for actions and filters that are used in the theme.
 *
 * @since 1.0.1
 */

class towngateGrills {

	/**
	 * Set up our action and filter hooks.
	 */
	public function __construct() {

		/**
		 * Remove Generator Meta Tag.
		 *
		 * @since 1.0.1
		 */

		remove_action( 'wp_head', 'wp_generator' );

		/**
		 * Set up stylesheets and scripts.
		 *
		 * @since 1.0.1
		 */

		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );

		/**
		 * Set up image sizes and menu assignment.
		 *
		 * @since 1.0.1
		 */

		add_action( 'init', array( $this, 'towngate_init' ) );

		/**
		 * Additional active menu classes.
		 *
		 * @since 1.0.1
		 */

		
	}


	/**
	 * Enqueue scripts and styles for the front end.
	 * 
	 * @since 1.0.1
	 * @access public
	 */

	public function enqueue_styles() {
		

		// Include the fontawesome library.
		wp_enqueue_style( 'towngate-fontawesome', THEME_DIR .'/css/font-awesome.min.css', array(), '1.0.1' );
		wp_enqueue_style( 'towngate-fontawesome-animation', THEME_DIR .'/css/font-awesome-animation.css', array(), '1.0.1' );
		wp_enqueue_style( 'bootstrap_css', THEME_DIR .'/css/bootstrap.min.css', array(), '1.0.1' );
		// Set up our base stylesheet.
		//wp_enqueue_style( 'towngate-masonry', THEME_DIR . '/css/isotope-docs.css', array(), '1.0.1' );
		wp_enqueue_style( 'towngate-style', THEME_DIR . '/css/main.css', array(), '1.0.1' );
		


		// Add latest jQuery.
		wp_deregister_script( 'jquery' );
		wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.1.1.min.js', array(), '3.1.1', true );

		

		// Set up our required theme scripts.
	    wp_enqueue_script( 'bootstrap_js', THEME_DIR . '/js/bootstrap.min.js', array( 'jquery' ), '1.0.1', false );


	     wp_enqueue_script( 'masonry_js', THEME_DIR . '/js/masonry.min.js', array( 'jquery' ), '1.0.1', false );
		wp_enqueue_script( 'towngate-app', THEME_DIR . '/js/app.js', array( 'jquery' ), '1.0.1', false );
	}


	/**
	 * Set up the theme information.
	 * 
	 * This assigns image sizes, registers nav menus and enables HTML5 components.
	 * 
	 * @since 1.0.1
	 * @access public
	 */

	public function towngate_init() {
		

		// Register our image sizes.
		add_theme_support( 'post-thumbnails' );

	}




}

// Here we go! - Mario, 2017
new towngateGrills;