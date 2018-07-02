<?php
if ( ! class_exists( 'Main_Menu' ) ) {

	class Main_Menu{
		/**
		 * A reference to an instance of this class.
		 *
		 * @since 1.0.0
		 * @var object
		 */
		private static $instance = null;

		private $menu_items = array();

		public function __construct(){
			$this->menu_items = array(
				'introduction' => array(
					'label' => _( 'Introduction' ),
				),
				'template-installation' => array(
					'label' => _( 'Template Installation' ),
					'child' => array(
<<<<<<< HEAD
						'wordpress-engine-installation' => _( 'WordPress Installation' ),
						'theme-installation' => _( 'Theme Installation'),
						'cherry-wizard' => _( 'Cherry Wizard Installation / Sample Data Installation' ),
						'manual-installation' => _( 'Manual Installation' ),
					),
=======
						'wordPress-engine-installation' => _( 'WordPress Engine Installation' ),
						'manual-theme-installation' => _( 'Manual Installation'),
						'install-with-cherry-wizard' => _( 'Cherry Wizard Installation'),
						'upload-via-ftp' => _( 'Upload via FTP' ),
						
					),
				
				),
				'basic-configuration' => array(
					'label' => _( 'Basic Configuration' ),
					'child' => array(
						'menu-and-navigation' => _( 'Main Menu Configuration' ),
						'customizer-overview' => _( 'Template Configuration via Customizer' ),
					)
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc
				),
				'customizer' => array(
					'label' => _( 'Customizer' ),
					'child' => array(
						'site-identity' => _( 'Site Identity' ),
						'general-settings' => _( 'General Site Settings' ),
						'logo-&-favicon' => _( 'Logo & Favicon' ),
						'breadcrumbs' => _( 'Breadcrumbs' ),
						'social-links' => _( 'Social Links' ),
						'page-layout' => _( 'Page Layout' ),
<<<<<<< HEAD
						'color-scheme' => _( 'Color Scheme' ),
						'colors' => _( 'Colors' ),
						'typography' => _( 'Typography' ),
=======
						'content-background' => _( 'Content Background' ),
						'color-scheme' => _( 'Color Scheme' ),
						'colors' => _( 'Colors' ),
						'typography' => _( 'Typography' ),				
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc
						'header' => _( 'Header' ),
						'background-image' => _( 'Background Image' ),
						'menu-locations' => _( 'Menus' ),
						'sidebar' => _( 'Sidebar' ),
						'mailchimp' => _( 'MailChimp' ),
						'widgets' => _( 'Widgets' ),						
						'footer' => _( 'Footer' ),
						'ads-management' => _( 'Ads Management' ),
<<<<<<< HEAD
						'woocommerce-options' => _( 'WooCommerce Options' ),
						'blog-settings' => _( 'Blog Settings' ),
						'static-front-page' => _( 'Static Front Page' ),
						'404' => _( '404 Page' ),
						'custom-css' => _( 'Additional CSS' ),
=======
						'blog-settings' => _( 'Blog Settings' ),
						'static-front-page' => _( 'Static Front Page' ),
						'custom-css' => _( 'Additional CSS' ),
						
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc
					)
				),
				'posts-categories' => array(
					'label' => _( 'Posts, Categories and Post Formats' ),
					'child' => array(
						'adding-blog-post' => _( 'Creating a Blog Post' ),
						'adding-a-category' => _( 'Adding a Category' ),
						'post-formats' => _( 'Post Formats' ),
					)
<<<<<<< HEAD
				),
				'elementor' => array(
					'label' => _( 'Elementor' ),
=======
				

                 ),
				'elementor' => array(
					'label' => _( 'Elementor' ),
					'child' => array(
						'general' => _( 'General' ),
						'elementor-page-layout' => _( 'Page Layout' ),
						'elementor-modules' => _( 'Elementor Modules' ),
						'cherry-addons' => _( 'Cherry Addons Modules' ),
					)
				
),
				'builder' => array(
					'label' => _( 'Power Builder' ),
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc
					'child' => array(
						'general' => _( 'General' ),
						'elementor-page-layout' => _( 'Page Layout' ),
						'elementor-modules' => _( 'Modules' ),
						'jet-elements' => _( 'JetElements' ),
					)

				
				),
				'widgets' => array(
					'label' => _( 'Widgets' ),
					'child' => array(
						'about' => _( 'About' ),
						'about-author' => _( 'About Author' ),
						'banner' => _( 'Banner' ),
						'weelfour-products' => _( 'WeelFour Products' ),
						'carousel' => _( 'Carousel' ),
						'cherry-trending-posts' => _( 'Cherry Trending Posts' ),
						'contact-information' => _( 'Contact Information' ),
						'custom-posts' => _( 'Custom Posts' ),
<<<<<<< HEAD
						'featured-posts-block' => _( 'Featured Posts Block' ),
						'image-grid' => _( 'Image Grid' ),
						'instagram' => _( 'Instagram' ),
						'appointment-calendar' => _( 'Appointment Calendar' ),
						'booked-calendar' => _( 'Booked Calendar' ),
						'news-smart-box' => _( 'News Smart Box' ),
						'playlist-slider' => _( 'Playlist Slider' ),
						'smart-slider' => _( 'Smart Slider' ),
						'subscribe-follow' => _( 'Subscribe and Follow' ),
						'taxonomy-tiles' => _( 'Taxonomy Tiles' ),
						'audio' => _( 'Audio' ),
=======
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc
						'archive' => _( 'Archives' ),
						'calendar' => _( 'Calendar' ),
						'categories' => _( 'Categories' ),
						'custom-menu' => _( 'Custom Menu' ),
						'meta' => _( 'Meta' ),
						'pages' => _( 'Pages' ),
						'recent-comments' => _( 'Recent Comments' ),
						'recent-posts' => _( 'Recent Posts' ),
						'image' => _( 'Image' ),
						'rss' => _( 'RSS' ),
						'search' => _( 'Search' ),
						'tag-cloud' => _( 'Tag Cloud' ),
						'text' => _( 'Text' ),
<<<<<<< HEAD
						'video' => _( 'Video' ),
=======
						'smart-slider' => _( 'Smart Slider' ),
						'featured-posts-block' => _( 'Featured Posts Block' ),
						'image-grid' => _( 'Image Grid' ),
						'instagram' => _( 'Instagram' ),
						'appointment-calendar' => _( 'Appointment Calendar' ),
						'news-smart-box' => _( 'News Smart Box' ),
						'playlist-slider' => _( 'Playlist Slider' ),
						'taxonomy-tiles' => _( 'Taxonomy Tiles' ),
						'motopress-slider' => _( 'Motopress Slider' ),
						'easy-twitter-feed-widget-kamn' => _( 'Twitter Timeline' ),
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc
						'tm-about-store' => _( 'TM About Store' ),
						'tm-banners-grid' => _( 'TM Banners Grid' ),
						'tm-custom-menu-bkg' => _( 'TM Custom Menu with Background' ),
						'tm-product-categories-with-thumbnail' => _( 'TM Product Categories with Thumbnail' ),
						'tm-products-carousel' => _( 'TM Products Carousel' ),
						'tm-products-smart-box' => _( 'TM Products Smart Box' ),
						'tm-woocommerce-recent-compare' => _( 'TM WooCommerce Recent Compare' ),
						'tm-woocommerce-wishlist' => _( 'TM WooCommerce Wishlist' ),
						'woocommerce-average-rating' => _( 'Filter Products by Rating' ),
						'woocommerce-cart' => _( 'WooCommerce Cart' ),
						'woocommerce-layered-nav' => _( 'Active Product Filters' ),
						'woocommerce-layered-nav-filters' => _( 'Filter Products by Attribute' ),
						'woocommerce-price-filter' => _( 'Filter Products by Price' ),
						'woocommerce-product-categories' => _( 'WooCommerce Product Categories' ),
						'woocommerce-products' => _( 'WooCommerce Products' ),
						'woocommerce-product-search' => _( 'WooCommerce Product Search' ),
						'woocommerce-product-tags' => _( 'WooCommerce Product Tags' ),
						'woocommerce-recently-viewed' => _( 'WooCommerce Recently Viewed' ),
						'woocommerce-recent-reviews' => _( 'WooCommerce Recent Reviews' ),
						'woocommerce-top-rated-products' => _( 'WooCommerce Top Rated Products' ),
<<<<<<< HEAD
						'events-list' => _( 'The Events List' ),
=======
						'tm-woocommerce-ajax-filter' => _( 'TM WooCommerce Ajax Filter' ),
						'awesome-weather' => _( 'Awesome Weather' ),
						'booked-calendar' => _( 'Booked Calendar' ),
						'timetable-events' => _( 'Timetable Events' ),
						'events-list' => _( 'Events List' ),   
						'shortcode-widget' => _( 'Shortcode Widget' ),                                    	
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc
						'cherry-trending-posts' => _( 'Cherry Trending Posts' ),
						'room-types' => _( 'Room Types' ),
						'search-availability' => _( 'Search Availability' ),
						'restaurant-menu-cart' => _( 'Restaurant Menu Cart' ),
						'restaurant-menu-categories' => _( 'Restaurant Menu Categories' ),
						'restaurant-menu-items' => _( 'Restaurant Menu Items' ),
						'bbpress-forums-list' => _( 'bbPress Forum List' ),
						'bbpress-log-in' => _( 'bbPress Log In' ),
						'bbpress-recent-topics' => _( 'bbPress Recent Topics' ),
						'bbpress-statistics' => _( 'bbPress Statistics' ),
						'bbpress-topic-views-list' => _( 'bbPress Topic Views List' ),
						'bbpress-recent-replies' => _( 'bbPress Recent Replies' ),
						'bbpress-members' => _( 'BuddyPress Members' ),
						'bbpress-recently-active-members' => _( 'BuddyPress Recently Active Members' ),
						'bbpress-who-online' => _( 'BuddyPress Who is Online' ),
<<<<<<< HEAD
						'motopress-slider' => _( 'Motopress Slider' ),
						'tm-woocommerce-ajax-filter' => _( 'TM WooCommerce Ajax Filter' ),
						'woocommerce-currency-switcher' => _( 'WooCommerce Currency Switcher' ),
						'woocommerce-currency-converter' => _( 'WooCommerce Currency Converter' ),
						'woocommerce-currency-rates' => _( 'WooCommerce Currency Rates' ),
						'shortcode-widget' => _( 'Shortcode Widget' ),
						'cherry-socialize' => _( 'Cherry Socialize Instagram' ),
						'willard-products' => _( 'Willard Products' ),
=======
						'woocommerce-currency-switcher' => _( 'WooCommerce Currency Switcher' ),
						'woocommerce-currency-converter' => _( 'WooCommerce Currency Converter' ),
						'woocommerce-currency-rates' => _( 'WooCommerce Currency Rates' ),
						'cherry-socialize' => _( 'Cherry Socialize Instagram' ),
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc
						'idx-areas' => _( 'IDX Areas' ),
						'idx-guided-search' => _( 'IDX  Guided Search' ),
						'idx-listings' => _( 'IDX Listings' ),
						'idx-quick-search' => _( 'IDX Quick Search' ),
						'idx-single-listing' => _( 'IDX Single Listing' ),
						'revolution-slider' => _( 'Revolution Slider' ),
						'cherry-re-properties' => _( 'Cherry Real Estate Properties' ),
						'cherry-re-search' => _( 'Cherry Real Estate Search' ),
						'bbpress-groups' => _( 'BuddyPress Groups' ),
					)
				),
				'plugins' => array(
					'label' => _( 'Plugins' ),
					'child' => array(
						'bbpress' => _( 'bbPress' ),
						'buddypress' => _( 'BuddyPress' ),
						'awesome-weather' => _( 'Awesome Weather' ),
						'booked' => _( 'Booked Appointments' ),
						'cherry-addons-for-elementor' => _( 'Cherry AddOns For Elementor' ),
						'basic-auth' => _( 'JSON Basic Authentication' ),
						'cherry-data-importer' => _( 'Cherry Data Importer' ),
						'cherry-plugin-wizard' => _( 'Cherry Plugin Wizard' ),
						'cherry-popups' => _( 'Cherry PopUps' ),
						'cherry-sidebars' => _( 'Cherry Sidebar Manager' ),
						'cherry-ld-mods-switcher' => _( 'Cherry Live Demo Mods Switcher' ),
						'cherry-plugin-wizard' => _( 'Cherry Plugin Wizard' ),
						'cherry-search' => _( 'Cherry Search' ),  
						'cherry-projects' => _( 'Cherry Projects' ), 
						'cherry-services-list' => _( 'Cherry Services List' ),
<<<<<<< HEAD
						'cherry-socialize' => _( 'Cherry Socialize' ),
=======
						'cherry-sidebars' => _( 'Cherry Sidebar Manager' ),
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc
						'cherry-team-members' => _( 'Cherry Team Members' ),
						'cherry-testi' => _( 'Cherry Testimonials' ),
						'contact-form-7' => _( 'Contact Form 7' ),
<<<<<<< HEAD
						'elementor' => _( 'Elementor' ),
						'shop-feed-for-instagram-by-snapppt' => _( 'Instagram Shop by Snapppt' ),
						'shortcode-widget' => _( 'Shortcode Widget' ),
						'simple-file-downloader' => _( 'Simple File Downloader' ),
						'smart-slider-3' => _( 'Smart Slider 3' ),
=======
                        'power-builder' => _( 'Power Builder' ),
                        'tm-builder-integrator' => _( 'Power Builder Integrator' ),  
                        'shortcode-widget' => _( 'Shortcode Widget' ),
                        'the-events-calendar' => _( 'Events Calendar' ),
                        'the-events-calendar-shortcode' => _( 'Events Calendar Shortcode' ),
                        'tinymce-advanced' => _( 'TinyMCE Small Tag' ),
						'tm-photo-gallery' => _( 'TM Photo Gallery' ),
						'elementor' => _( 'Elementor Page Builder' ),
						'jet-elements' => _( 'Jet Elements' ),
						'revslider' => _( 'Revolution Slider' ),
						'tm-mega-menu' => _( 'TM Mega Menu' ),
						'tm-woocommerce-ajax-filters' => _( 'TM Woocommerce Ajax Filter' ),
                        'tm-woocommerce-compare-wishlist' => _( 'TM WooCommerce Compare Wishlist' ),
                        'tm-woocommerce-package' => _( 'TM WoooCommerce Package' ),
                        'tm-woocommerce-quick-view' => _( 'TM WooCommerce Quick View' ),
                        'woocommerce' => _( 'WooCommerce' ),
                        'woocommerce-currency-switcher' => _( 'WooCommerce Currency Switcher' ),
                        'woocommerce-social-media-share-buttons' => _( 'WooCommerce Social Media Share Buttons' ),
						'smart-slider-3' => _( 'Smart Slider 3' ),
						'tm-timeline' => _( 'TM Timeline' ),						
						'cherry-popups' => _( 'Cherry PopUps' ),						
						'motopress-slider' => _( 'Motopress Slider' ),						                                        
                        'cherry-socialize' => _( 'Cherry Socialize' ),                       
                        'tablepress' => _( 'TablePress' ),
                        'hotel-booking' => _( 'Hotel Booking' ),
                        'mp-restaurant-menu' => _( 'Restaurant Menu' ),
                        'simple-file-downloader' => _( 'Simple File Downloader' ),
                        'tm-photo-gallery' => _( 'TM Photo Gallery' ),
                        'mp-restaurant-menu' => _( 'Restaurant Menu' ),
                        'power-builder-integrator' => _( 'Power Builder Integrator' ),
                        'power-builder' => _( 'Power Builder' ),
                        'simple-file-downloader' => _( 'Simple File Downloader' ),                        
						'cherry-trending-posts' => _( 'Cherry Trending Posts' ),
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc
						'motopress-hotel-booking' => _( 'MotoPress Hotel Booking' ),
						'mp-timetable' => _( 'Timetable & Event Schedule' ),
						'easy-twitter-feed-widget' => _( 'Easy Twitter Feed' ),
						'tm-dashboard' => _( 'Jetimpex Dashboard' ),
						'tm-style-switcher' => _( 'TM Style Switcher' ),
<<<<<<< HEAD
						'tm-timeline' => _( 'TM Timeline' ),
						'tm-woocommerce-ajax-filters' => _( 'TM Woocommerce Ajax Filter' ),
						'tm-woocommerce-compare-wishlist' => _( 'TM WooCommerce Compare Wishlist' ),
						'tm-woocommerce-package' => _( 'TM WoooCommerce Package' ),
						'woocommerce' => _( 'WooCommerce' ),
						'woocommerce-social-media-share-buttons' => _( 'WooCommerce Social Media Share Buttons' ),
						'wp-user-avatar' => _( 'WP User Avatar' ),
						'motopress-slider' => _( 'Motopress Slider' ),
						'woocommerce-currency-switcher' => _( 'WooCommerce Currency Switcher' ),
						'tm-woocommerce-quick-view' => _( 'TM WooCommerce Quick View' ),
						'dsidxpress' => _( 'DsIDXpress' ),
						'revslider' => _( 'Revolution Slider' ),
						'cherry-real-estate' => _( 'Cherry Real Estate' ),
						'wordpress-social-login' => _( 'WordPress Social Login' ),
						'the-events-calendar-shortcode' => _( 'Events Calendar Shortcode' ),
=======
						'dsidxpress' => _( 'DsIDXpress' ),						
						'cherry-real-estate' => _( 'Cherry Real Estate' ),
						'wp-user-avatar' => _( 'WP User Avatar' ),					
						
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc
					)
				),
				'woocommerce-integration' => array(
					'label' => _( 'WooCommerce Integration' ),
					'child' => array(
						'cart' => _( 'Cart' ),
						'checkout' => _( 'Checkout' ),
						'order-tracking-form' => _( 'Order Tracking Form' ),
						'my-account' => _( 'My Account' ),
						'recent-products' => _( 'Recent Products' ),
						'featured-products' => _( 'Featured Products' ),
						'product' => _( 'Product' ),
						'products' => _( 'Products' ),
						'add-to-cart' => _( 'Add to Cart' ),
						'add-to-cart-url' => _( 'Add to Cart URL' ),
						'product-page' => _( 'Product Page' ),
						'product-category' => _( 'Product Category' ),
						'product-categories' => _( 'Product Categories' ),
						'sale-products' => _( 'Sale Products' ),
						'best-selling-products' => _( 'Best-Selling Products' ),
						'top-rated-products' => _( 'Top Rated Products' ),
						'product-attribute' => _( 'Product Attribute' ),
						'related-products' => _( 'Related Products' ),
						'messed-up-shortcodes' => _( 'Messed-Up Shortcodes' ),
						'sorting-products' => _( 'Sorting Products Using Custom Meta Fields' ),
					)
				),
				'woocommerce-settings' => array(
					'label' => _( 'WooCommerce Settings' ),
				),
				'localization' => array(
					'label' => _( 'Localization' ),
					'child' => array(
						'manual-localization' => _( 'Manual Localization' ),
						'poedit' => _( 'Poedit' ),
						'loco-translate' => _( 'Loco Translate Plugin' ),
						'polylang' => _( 'Polylang Plugin' ),
						'wpml' => _( 'The WordPress Multilingual Plugin (WPML)' ),


					)
				),

				'extras' => array(
					'label' => _( 'Extras' ),
					'child' => array(
						'help-and-support' => _( 'Help and Support' ),
						'cookies' => _( 'Cookies' ),
						'documentation' => _( 'Documentation' ),
						'changelog' => _( 'Changelog' ),
<<<<<<< HEAD
=======
						'localization' => _( 'Localization' ),
						
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc
					)
				),
			);
		}

		public function get_menu() {
			echo $this->iterate_items( $this->menu_items );
		}

		private function iterate_items( $array = array(), $child = false, $parent = '' ){
			$components = config_manager()->get_info( 'components', false );
			$main_component = config_manager()->get_info( 'main_component', false );

			$language = translations()->get_language( 'locale', false );
			$default_language = config_manager()->get_info( 'default_language', false );
			$language_folder = ( $language === $default_language || ! $language ) ?  '' : strtolower( $language ) . '/' ;

			$atributs_ul = ( $child ) ? ' class="rd-mobilemenu_submenu" style="display: none;" ' : '' ;
			$output = '<ul' . $atributs_ul . '>';
			$builder_modules = config_manager()->get_info( 'builder-modules', false );

			foreach ( $array as $key => $value ) {

				if( ( ! $child && ! in_array( $key, $components ) ) ||
					( in_array( $key, array( 'builder', 'builder-modules' ) ) && 'false' === $builder_modules )
				){
					continue;
				}

				if ( in_array( $parent, array( 'widgets', 'plugins', 'builder-modules' ) ) ) {
					$sub_component = config_manager()->get_info( $parent, false );

					if ( is_array( $sub_component ) && ( ! in_array( $key, $sub_component ) || ! file_exists( TEMPLATE_PATH . '/components/' . $parent . '/'. $key .'.php' ) ) ) {
						continue;
					}
				}

				if ( $child ) {
					$text = $value;
					$atributs_li = ' class="article" ';
					$atributs_a = ' class="article_link" ';
					$href = url_manager()->get_assets_url( $language_folder . $parent . '/index.html#toc-' . $key, false );
				} else {
					$folder = ( $key === $main_component ) ? '' : $key . '/' ;
					$text = $value['label'];
					$atributs_li = 'class="primery-item"' ;
					$atributs_a = 'class="section_link" ';

					$href = url_manager()->get_assets_url( $language_folder . $folder . 'index.html', false );
				}

				$component = ( $parent ) ? $parent : $key ;
				if ( ! $_GET['generate'] ) {
					$href = '?language=' . $language_folder . '&component=' .  $component . '#toc-' . $key;
				}

				if ( is_array( $value ) && array_key_exists( 'child', $value ) ) {
					$sub_menu = $this->iterate_items( $value['child'], true, $key );

					if ( strpos( $sub_menu, '</li>' ) ) {
						$output .= '<li ' . $atributs_li . '><a ' . $atributs_a . 'id="' . $component .  '" href="' . $href . '" alt="' . $text . '">' . $text . '</a>' . $sub_menu . '</li>';
					}
				} else {
					$output .= '<li ' . $atributs_li . '><a ' . $atributs_a . 'id="' . $component .  '" href="' . $href . '" alt="' . $text . '">' . $text . '</a></li>';
				}
			}

			$output .= '</ul>';

			return $output;
		}

		public function get_language_menu( ) {
			$languages = config_manager()->get_info( 'language', false );

			if ( 1 >= count( $languages ) ) {
				return;
			}

			$main_component = config_manager()->get_info( 'main_component', false );
			$component      = isset( $_GET['component'] ) ? $_GET['component'] : $main_component ;
			$current_component = ( $component === $main_component ) ? '' : '/' . $component ;

			$default_language = config_manager()->get_info( 'default_language', false );

			$current_language = translations()->get_language( 'locale', false );
			$component_path = ( $current_language === $default_language ) ? '' . $current_component : '/' . strtolower( $current_language ) . $current_component ;

			$output = '<div class="language-selector select-hidden">';
			$output .= '<select id="language-selector" data-current-component="' . $component_path . '" style="width: 100%">';

			foreach ( $languages as $key => $text ) {
				$selected = ( $current_language === $key ) ? 'selected="selected"' : '' ;
				$value =( $default_language === $key ) ? '' : '/' . strtolower( $key ) ;
				$href = url_manager()->get_assets_url( 'assets/images/' . $key . '.jpg', false );

				$output .= '<option value="' . $value . $current_component . '" ' . $selected .' data-flag = "' . $href . '">' . $text . '</option>';
			}

			$output .= '</select>';
			$output .= '</div>';

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

	if ( ! function_exists( 'main_menu' ) ) {

		/**
		 * Returns instanse of the plugin class.
		 *
		 * @since  1.0.0
		 * @return object
		 */
		function main_menu() {
			return Main_Menu::get_instance();
		}

		main_menu();
	}
}
?>
