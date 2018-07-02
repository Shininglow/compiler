<?php
if ( ! class_exists( 'Config_Manager' ) ) {

	class Config_Manager{
		/**
		 * A reference to an instance of this class.
		 *
		 * @since 1.0.0
		 * @var object
		 */
		private static $instance = null;

		public $config = null;

		public function __construct(){
			$this->get_config();
		}

		private function get_config(){

			if ( isset( $_GET['settings'] ) ) {
				$this->config = $_GET['settings'];
			} else {
				$config_path = TEMPLATE_PATH . '\\theme-config.json';

				if ( ! file_exists( $config_path ) ) {
					die( 'Dos not exist <b>theme-config.json</b> file in template.' );
				}
				$this->config = json_decode( file_get_contents( $config_path ), true );
			}
		}

		public function get_info( $key = '', $echo = true ){

			if( empty( $this->config ) ){
				$this->get_config();
			}

			$value = array_key_exists( $key, $this->config ) ? $this->config[ $key ] : false ;

			if ( ! $echo ) {
				return $value;
			}

			echo $value;
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
				self::$instance = new self;
			}

			return self::$instance;
		}
	}

	if ( ! function_exists( 'config_manager' ) ) {

		/**
		 * Returns instanse of the plugin class.
		 *
		 * @since  1.0.0
		 * @return object
		 */
		function config_manager() {
			return Config_Manager::get_instance();
		}

		config_manager();
	}
}
?>
