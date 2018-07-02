<?php
if ( ! class_exists( 'URL_Manager' ) ) {

	class URL_Manager{
		/**
		 * A reference to an instance of this class.
		 *
		 * @since 1.0.0
		 * @var object
		 */
		private static $instance = null;

		private $language = '';
		private $default_language = '';

		public function __construct( $lenguage = '' ){
			$this->lenguage         = $lenguage;
			$this->default_language = config_manager()->get_info( 'default_language', false );
		}

		public function get_assets_url( $asset_url = '', $echo = true ){
			$sub_url = '';

			if ( isset( $_GET['generate'] ) ) {
				$main_component = config_manager()->get_info( 'main_component', false );
				$component      = isset( $_GET['component'] ) ? $_GET['component'] : $main_component ;

				$sub_url = ( $main_component === $component ) ? './' : '../' ;
				$sub_url .= ( $this->lenguage === $this->default_language ) ? '' : '../' ;
			}

			$asset_url = $sub_url . $asset_url ;

			if ( ! $echo ) {
				return $asset_url;
			}

			echo $asset_url;
		}

		public function get_home_url( $echo = true ){
			$component      = isset( $_GET['component'] ) ? $_GET['component'] : $main_component ;
			$main_component = config_manager()->get_info( 'main_component', false );
			$home_url = ( $main_component === $component ) ? './index.html' : '../index.html' ;

			if ( ! $echo ) {
				return $home_url;
			}

			echo $home_url;
		}

		/**
		 * Returns the instance.
		 *
		 * @since  1.0.0
		 * @return object
		 */
		public static function get_instance( $lenguage ) {

			// If the single instance hasn't been set, set it now.
			if ( null == self::$instance ) {
				self::$instance = new self( $lenguage );
			}

			return self::$instance;
		}
	}

	if ( ! function_exists( 'url_manager' ) ) {

		/**
		 * Returns instanse of the plugin class.
		 *
		 * @since  1.0.0
		 * @return object
		 */
		function url_manager( $lenguage = '' ) {
			return URL_Manager::get_instance( $lenguage );
		}

		url_manager( translations()->get_language( 'locale', false ) );
	}
}
?>
