<?php
if ( ! class_exists( 'Assets_Manager' ) ) {

	class Assets_Manager{
		/**
		 * A reference to an instance of this class.
		 *
		 * @since 1.0.0
		 * @var object
		 */
		private static $instance = null;

		private $url_manager = null;

		public function __construct( $lenguage = '' ){
			$this->url_manager = url_manager();
		}

		public function get_image( $url = '', $class = '', $alt = '' ){
			$output = '';

			if ( file_exists( TEMPLATE_PATH . '/' . $url ) ) {
				$class = ( $class ) ? ' class="' . $class . '"' : '' ;
				$alt = ( $alt ) ? ' alt="' . $alt . '"' : '' ;
				$url = $this->url_manager->get_assets_url( $url, false );

				$output .= '<figure' . $class . '>';
				$output .= '<img src="' . $url . '"' . $alt . '>';
				$output .= '</figure>';

			}

			echo $output;
		}

		/**
		 * Returns the instance.
		 *
		 * @since  1.0.0
		 * @return object
		 */
		public static function get_instance() {

			// If the single instance hasn't been set, set it now.
			if ( null == self::$instance ) {
				self::$instance = new self();
			}

			return self::$instance;
		}
	}

	if ( ! function_exists( 'assets_manager' ) ) {

		/**
		 * Returns instanse of the plugin class.
		 *
		 * @since  1.0.0
		 * @return object
		 */
		function assets_manager() {
			return Assets_Manager::get_instance();
		}

		assets_manager();
	}
}
?>
