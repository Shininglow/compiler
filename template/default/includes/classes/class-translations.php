<?php
	class Translations{
		/**
		 * A reference to an instance of this class.
		 *
		 * @since 1.0.0
		 * @var object
		 */
		private static $instance = null;

		private $domine = 'default';

		private $language = array();

		public function __construct() {
			$this->register_locale();
		}

		public function register_locale(){
			$locale = $this->get_language( 'locale', false );
			$key    = $this->get_language( 'key', false );
			$lang   = substr($locale, 0, 2 );

			putenv( 'LANG=' . $locale . '.utf8');
			setlocale( LC_ALL, $key, $key . '.utf8' );

			bind_textdomain_codeset( $locale, 'UTF-8' );
			bindtextdomain( $locale, TEMPLATE_PATH . '/languages' );
			textdomain( $locale );
		}

		public function get_language( $value = 'key', $echo = true ){
			if ( empty( $this->language ) ) {
				$allLanguages = config_manager()->get_info( 'language', false );
				$locale       = ( isset( $_GET['language'] ) && $_GET['language'] ) ? $_GET['language'] : config_manager()->get_info( 'default_language', false ) ;
				$language     = $allLanguages[ $locale ] ;
				$key          = substr( $locale, 0, 2 );

				$this->language = array(
					'language' => $language,
					'key'      => $key,
					'locale'    => $locale,
				);
			}

			$outputValue = array_key_exists( $value, $this->language ) ? $this->language[ $value ] : false ;

			if ( ! $echo ) {
				return $outputValue;
			}

			echo $outputValue;
		}

		public function get_text( $text = '' ){
			return gettext( $text );
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

	if ( ! function_exists( 'translations' ) ) {

		/**
		 * Returns instanse of the plugin class.
		 *
		 * @since  1.0.0
		 * @return object
		 */
		function translations() {
			return Translations::get_instance();
		}
	}

	if ( ! function_exists( '_e' ) ) {
		function _e( $text = 'text' ){
			echo translations()->get_text( $text );
		}
	}
?>
