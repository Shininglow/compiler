<?php
	define( 'TEMPLATE_PATH', dirname( __DIR__ ) );

	require_once( 'classes/class-config-manager.php' );
	require_once( 'classes/class-translations.php' );
	require_once( 'classes/class-url-manager.php' );
	require_once( 'classes/class-main-menu.php' );
	require_once( 'classes/class-assets-manager.php' );

	if ( ! function_exists( 'get_content' ) ) {

		function get_content(){
			$main_component = config_manager()->get_info( 'main_component', false );
			$component = isset( $_GET['component'] ) ? $_GET['component'] : $main_component ;

			require_once( TEMPLATE_PATH . '/components/' . $component . '/'. $component .'.php' );
		}
	}

	if ( ! function_exists( 'toggle_class' ) ) {

		function toggle_class( $primary ='', $secondary ='' ){
			$component      = isset( $_GET['component'] ) ? $_GET['component'] : $main_component ;
			$main_component = config_manager()->get_info( 'main_component', false );

			echo ( $main_component === $component || ! $component ) ? $primary : $secondary ;
		}
	}

	if ( ! function_exists( 'get_sub_component' ) ) {

		function get_sub_component( $primary_component =''){
			$sub_component = config_manager()->get_info( $primary_component, false );

			if ( $sub_component ) {
				foreach ( $sub_component as $sub_key ) {
					$file_path = TEMPLATE_PATH . '/components/' . $primary_component . '/'. $sub_key .'.php';
					if ( file_exists( $file_path ) ) {
						require_once( $file_path );
					}
				}
			}
		}
	}

	if ( ! function_exists( 'get_customizer_component' ) ) {

		function get_customizer_component( $components = array() ){
			if ( ! empty( $components ) ) {

				foreach ( $components as $value ) {

					$file_path = TEMPLATE_PATH . '/components/customizer/'. $value .'.php';

					if ( file_exists( $file_path ) ) {

						require_once( $file_path );
					}
				}
			}
		}
	}

	if ( ! function_exists( 'get_customizer_sub_component' ) ) {

		function get_customizer_sub_component( $components = array()  ){
			if ( ! empty( $components ) ) {

				foreach ( $components as $value ) {

					$file_path = TEMPLATE_PATH . '/components/customizer/'. $value .'.php';

					if ( file_exists( $file_path ) ) {

						require_once( $file_path );
					}
				}
			}
		}
	}

?>
