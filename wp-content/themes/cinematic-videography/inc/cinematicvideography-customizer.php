<?php
/**
 * Cinematic Videography Theme Customizer.
 *
 * @package Cinematic Videography
 */

 if ( ! class_exists( 'cinematicvideography_Customizer' ) ) {

	/**
	 * Customizer Loader
	 *
	 * @since 1.0.0
	 */
	class cinematicvideography_Customizer {

		/**
		 * Instance
		 *
		 * @access private
		 * @var object
		 */
		private static $instance;

		/**
		 * Initiator
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self;
			}
			return self::$instance;
		}

		/**
		 * Constructor
		 */
		public function __construct() {
			/**
			 * Customizer
			 */
			add_action( 'customize_preview_init',                  array( $this, 'cinematicvideography_customize_preview_js' ) );
			add_action( 'customize_controls_enqueue_scripts', 	   array( $this, 'cinematicvideography_customizer_script' ) );
			add_action( 'customize_register',                      array( $this, 'cinematicvideography_customizer_register' ) );
			add_action( 'after_setup_theme',                       array( $this, 'cinematicvideography_customizer_settings' ) );
		}
		
		/**
		 * Add postMessage support for site title and description for the Theme Customizer.
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 */
		function cinematicvideography_customizer_register( $wp_customize ) {
			
			$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
			$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
			$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
			$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
			$wp_customize->get_setting('custom_logo')->transport = 'refresh';			
			
			/**
			 * Helper files
			 */
			require CINEMATIC_VIDEOGRAPHY_PARENT_INC_DIR . '/customizer/sanitization.php';
		}


	
		
		/**
		 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
		 */
		function cinematicvideography_customize_preview_js() {
			wp_enqueue_script( 'cinematicvideography-customizer', CINEMATIC_VIDEOGRAPHY_PARENT_INC_URI . '/customizer/assets/js/customizer-preview.js', array( 'customize-preview' ), '20151215', true );
		}
		
		
		function cinematicvideography_customizer_script() {
			 wp_enqueue_script( 'cinematicvideography-customizer-section', CINEMATIC_VIDEOGRAPHY_PARENT_INC_URI .'/customizer/assets/js/customizer-section.js', array("jquery"),'', true  );	
		}

		// Include customizer customizer settings.
			
		function cinematicvideography_customizer_settings() {	
			   require CINEMATIC_VIDEOGRAPHY_PARENT_INC_DIR . '/customizer/customizer-options/cinematicvideography-header.php';
			   require CINEMATIC_VIDEOGRAPHY_PARENT_INC_DIR . '/customizer/customizer-options/cinematicvideography-frontpage.php';
			   require CINEMATIC_VIDEOGRAPHY_PARENT_INC_DIR . '/customizer/customizer-options/cinematicvideography-footer.php';
			   require CINEMATIC_VIDEOGRAPHY_PARENT_INC_DIR . '/customizer/customizer-pro/class-customize.php';
		}

	}
}// End if().

/**
 *  Kicking this off by calling 'get_instance()' method
 */
cinematicvideography_Customizer::get_instance();