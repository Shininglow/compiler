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
						'wordpress-engine-installation' => _( 'WordPress Installation' ),
						'manual-theme-installation' => _( 'Cherry Wizard Theme Installation' ),
						'install-with-cherry-wizard' => _( 'Cherry Wizard Plugins Installation' ),
						'install-content-wizard' => _( 'Cherry Wizard Demo Content Installation' ),
						'manual-installation' => _( 'Manual Installation' ),
					),
				
				),
				'basic-configuration' => array(
					'label' => _( 'Basic Configuration' ),
					'child' => array(
						'menu-and-navigation' => _( 'Main Menu Configuration' ),
						'customizer-overview' => _( 'Template Configuration via Customizer' ),
					)
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
						'color-scheme' => _( 'Color Scheme' ),
						'colors' => _( 'Colors' ),
						'typography' => _( 'Typography' ),				
						'header' => _( 'Header' ),
						'background-image' => _( 'Background Image' ),
						'menu-locations' => _( 'Menus' ),
						'sidebar' => _( 'Sidebar' ),
						'mailchimp' => _( 'MailChimp' ),
						'widgets' => _( 'Widgets' ),						
						'ads-management' => _( 'Ads Management' ),
						'footer' => _( 'Footer' ),
						'blog-settings' => _( 'Blog Settings' ),
						'static-front-page' => _( 'Static Front Page' ),
						'custom-css' => _( 'Additional CSS' ),
						
					)
				),
				'posts-categories' => array(
					'label' => _( 'Posts, Categories and Post Formats' ),
					'child' => array(
						'adding-blog-post' => _( 'Creating a Blog Post' ),
						'adding-a-category' => _( 'Adding a Category' ),
						'post-formats' => _( 'Post Formats' ),
					)
				),
				'elementor' => array(
					'label' => _( 'Elementor' ),
					
				),
				'builder' => array(
					'label' => _( 'Power Builder' ),
					'child' => array(
						'elements' => _( 'Elements' ),
						'sections' => _( 'Sections' ),
						'rows' => _( 'Rows' ),
						'modules' => _( 'Modules' ),
						'layout-options' => _( 'Layout Options' ),
					)
				),
				'builder-modules' => array(
					'label' => _( 'Power Builder Modules' ),
					'child' => array(
						'accordion' => _( 'Accordion' ),
						'audio' => _( 'Audio' ),
						'bar-counters' => _( 'Bar Counters' ),
						'blog' => _( 'Blog' ),
						'blurb' => _( 'Blurb' ),
						'brands-showcase' => _( 'Brands Showcase' ),
						'button' => _( 'Button' ),
						'carousel' => _( 'Carousel' ),
						'circle-counter' => _( 'Circle Counter' ),
						'contact-form' => _( 'Contact Form' ),
						'countdown-timer' => _( 'Countdown Timer' ),
						'cta' => _( 'Call to Action' ),
						'divider' => _( 'Divider' ),
						'image' => _( 'Image' ),
						'map' => _( 'Map' ),
						'number-counter' => _( 'Number Counter' ),
						'post-slider' => _( 'Post Slider' ),
						'posts' => _( 'Posts' ),
						'pricing-tables' => _( 'Pricing Tables' ),
						'sidebar' => _( 'Sidebar' ),
						'slider' => _( 'Slider' ),
						'social-media-follow' => _( 'Social Media Follow' ),
						'tabs' => _( 'Tabs' ),
						'taxonomy' => _( 'Taxonomy' ),
						'team-member' => _( 'Team' ),
						'person' => _( 'Person' ),
						'testimonial' => _( 'Testimonial' ),
						'text' => _( 'Text' ),
						'toggle' => _( 'Toggle' ),
						'video-slider' => _( 'Video Slider' ),
						'video' => _( 'Video' ),
						'projects-terms' => _( 'Projects Terms' ),
						'projects' => _( 'Projects' ),
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
						'contact-information' => _( 'Contact Information' ),
						'custom-posts' => _( 'Custom Posts' ),
						'subscribe-follow' => _( 'Subscribe and Follow' ),
						'archive' => _( 'Archives' ),
						'calendar' => _( 'Calendar' ),
						'categories' => _( 'Categories' ),
						'custom-menu' => _( 'Custom Menu' ),
						'meta' => _( 'Meta' ),
						'pages' => _( 'Pages' ),
						'recent-comments' => _( 'Recent Comments' ),
						'recent-posts' => _( 'Recent Posts' ),
						'rss' => _( 'RSS' ),
						'search' => _( 'Search' ),
						'tag-cloud' => _( 'Tag Cloud' ),
						'text' => _( 'Text' ),
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
						'tm-about-store' => _( 'TM About Store' ),
						'tm-banners-grid' => _( 'TM Banners Grid' ),
						'tm-custom-menu-bkg' => _( 'TM Custom Menu with Background' ),
						'tm-product-categories-with-thumbnail' => _( 'TM Product Categories with Thumbnail' ),
						'tm-products-carousel' => _( 'TM Products Carousel' ),
						'tm-products-smart-box' => _( 'TM Products Smart Box' ),
						'tm-woocommerce-recent-compare' => _( 'TM WooCommerce Recent Compare' ),
						'tm-woocommerce-wishlist' => _( 'TM WooCommerce Wishlist' ),
						'woocommerce-average-rating' => _( 'WooCommerce Average Rating' ),
						'woocommerce-cart' => _( 'WooCommerce Cart' ),
						'woocommerce-layered-nav' => _( 'WooCommerce Layered Nav' ),
						'woocommerce-layered-nav-filters' => _( 'WooCommerce Layered Nav Filters' ),
						'woocommerce-price-filter' => _( 'WooCommerce Price Filter' ),
						'woocommerce-product-categories' => _( 'WooCommerce Product Categories' ),
						'woocommerce-products' => _( 'WooCommerce Products' ),
						'woocommerce-product-search' => _( 'WooCommerce Product Search' ),
						'woocommerce-product-tags' => _( 'WooCommerce Product Tags' ),
						'woocommerce-recently-viewed' => _( 'WooCommerce Recently Viewed' ),
						'woocommerce-recent-reviews' => _( 'WooCommerce Recent Reviews' ),
						'woocommerce-top-rated-products' => _( 'WooCommerce Top Rated Products' ),
						'tm-woocommerce-ajax-filter' => _( 'TM WooCommerce Ajax Filter' ),
						'awesome-weather' => _( 'Awesome Weather' ),
						'booked-calendar' => _( 'Booked Calendar' ),
						'timetable-events' => _( 'Timetable Events' ),
						'events-list' => _( 'Events List' ),   
						'shortcode-widget' => _( 'Shortcode Widget' ),                                    	
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
						'woocommerce-currency-switcher' => _( 'WooCommerce Currency Switcher' ),
						'woocommerce-currency-converter' => _( 'WooCommerce Currency Converter' ),
						'woocommerce-currency-rates' => _( 'WooCommerce Currency Rates' ),
						'cherry-socialize' => _( 'Cherry Socialize Instagram' ),
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
						'cherry-data-importer' => _( 'Cherry Data Importer' ),
						'cherry-projects' => _( 'Cherry Projects' ), 
						'cherry-services-list' => _( 'Cherry Services List' ),
						'cherry-sidebars' => _( 'Cherry Sidebar Manager' ),
						'cherry-team-members' => _( 'Cherry Team Members' ),
						'cherry-testi' => _( 'Cherry Testimonials' ),
						'contact-form-7' => _( 'Contact Form 7' ),
						'elementor' => _( 'Elementor Page Builder' ),
						'smart-slider-3' => _( 'Smart Slider 3' ),
						'tm-timeline' => _( 'TM Timeline' ),
						'cherry-plugin-wizard' => _( 'Cherry Plugin Wizard' ),
						'ecwid-shopping-cart' => _( 'Ecwid Shopping Cart' ),
						'jet-elements' => _( 'Jet Elements for Elementor' ),
						'cherry-popups' => _( 'Cherry PopUps' ),
						'motopress-slider' => _( 'Motopress Slider' ),
						'power-builder' => _( 'Power Builder' ),
                        'tm-builder-integrator' => _( 'Power Builder Integrator' ),
                        'tm-mega-menu' => _( 'TM Mega Menu' ),
                        'cherry-search' => _( 'Cherry Search' ),
                        'tm-woocommerce-ajax-filters' => _( 'TM Woocommerce Ajax Filter' ),
                        'tm-woocommerce-compare-wishlist' => _( 'TM WooCommerce Compare Wishlist' ),
                        'tm-woocommerce-package' => _( 'TM WoooCommerce Package' ),
                        'tm-woocommerce-quick-view' => _( 'TM WooCommerce Quick View' ),
                        'woocommerce' => _( 'WooCommerce' ),
                        'woocommerce-currency-switcher' => _( 'WooCommerce Currency Switcher' ),
                        'woocommerce-social-media-share-buttons' => _( 'WooCommerce Social Media Share Buttons' ),
                        'cherry-socialize' => _( 'Cherry Socialize' ),
                        'shortcode-widget' => _( 'Shortcode Widget' ),
                        'the-events-calendar' => _( 'Events Calendar' ),
                        'the-events-calendar-shortcode' => _( 'Events Calendar Shortcode' ),
                        'tinymce-small-tag-master' => _( 'TinyMCE Small Tag' ),
                        'tm-photo-gallery' => _( 'TM Photo Gallery' ),
                        'tablepress' => _( 'TablePress' ),
                        'hotel-booking' => _( 'Hotel Booking' ),
                        'mp-restaurant-menu' => _( 'Restaurant Menu' ),
                        'simple-file-downloader' => _( 'Simple File Downloader' ),
                        'tm-photo-gallery' => _( 'TM Photo Gallery' ),
                        'mp-restaurant-menu' => _( 'Restaurant Menu' ),
                        'power-builder-integrator' => _( 'Power Builder Integrator' ),
                        'power-builder' => _( 'Power Builder' ),
                        'simple-file-downloader' => _( 'Simple File Downloader' ),
                        'cherry-ld-mods-switcher' => _( 'Cherry Live Demo Mods Switcher' ),
						'cherry-trending-posts' => _( 'Cherry Trending Posts' ),
						'motopress-hotel-booking' => _( 'MotoPress Hotel Booking' ),
						'mp-timetable' => _( 'Timetable & Event Schedule' ),
						'easy-twitter-feed-widget' => _( 'Easy Twitter Feed' ),
						'tm-dashboard' => _( 'Jetimpex Dashboard' ),
						'tm-style-switcher' => _( 'TM Style Switcher' ),
						'dsidxpress' => _( 'DsIDXpress' ),
						'revslider' => _( 'Revolution Slider' ),
						'cherry-real-estate' => _( 'Cherry Real Estate' ),
						'wp-user-avatar' => _( 'WP User Avatar' ),					
						
					)
				),
				'extras' => array(
					'label' => _( 'Extras' ),
					'child' => array(
						'help-and-support' => _( 'Help and Support' ),
						'cookies' => _( 'Cookies' ),
						'documentation' => _( 'Documentation' ),
						'google-services' => _( 'Loading Data from Google Servers' ),
						'changelog' => _( 'Changelog' ),
						'localization' => _( 'Localization' ),
						
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
