<article>
<div id="toc-help-and-support" class="toc-id"></div>
<h2>Extras</h2>
<h5><?php _e( 'We’ve tried to make this documentation as easy and understandable as possible. However, in case of any difficulties with Wordpress template, you can contact our technical support department with any suggestions regarding documentation and template improvement. You can contact our tech support using:' ); ?></h5>

<h3 id="help-and-support"><?php _e( 'Help and Support' ); ?></h3>
<ul>
	<li><a href="http://chat.template-help.com/"><?php _e( 'Chat;' ); ?></a></li>
	<li><a href="http://support.template-help.com/index.php?/Tickets/Submit"><?php _e( 'Ticket System.' ); ?></a></li>
</ul>
<div id="toc-cookies" class="toc-id"></div>
<h3><?php _e( 'Cookies' ); ?></h3>
<p><?php _e( 'According to the EU law on cookies, you must add a module to your site that will display a warning message about cookies used on your website. We recommend the following modules:' ); ?></p>
<ul>
	<li><a href="https://wordpress.org/plugins/creare-eu-cookie-law-banner/screenshots/"><?php _e( 'WP Cookie Banner;' ); ?></a></li>
	<li><a href="https://wordpress.org/plugins/cookie-banner/"><?php _e( 'Cookie Banner.' ); ?></a></li>
</ul>
<div id="toc-documentation" class="toc-id"></div>
<h3><?php _e( 'Documentation' ); ?></h3>
<ul>
	<li><a href="https://wordpress.org/about/"><?php _e( 'WordPress - Beginner’s Guide;' ); ?></a></li>
	<li><a href="https://codex.wordpress.org/FAQ"><?php _e( 'FAQ;' ); ?></a></li>
	<li><a href="https://codex.wordpress.org/Main_Page"><?php _e( 'WordPress Tutorials.' ); ?></a></li>
</ul>
<div id="toc-google-services" class="toc-id"></div>
<h3><?php _e( 'Loading Data from Google Servers' ); ?></h3>
<p><?php _e( 'Some countries have issues connecting to Google servers. This can cause issues with loading Google Fonts. To resolve these issues, please do the following:' ); ?></p>
<h5><?php _e( 'If you come across an error “Can not load Google Fonts:” please do the following' ); ?></h5>
<p><?php _e( 'Open the function.php file in your theme and add the following:' ); ?></p>
<pre>
<code class="language-php hljs">
add_filter( <span class="hljs-string">'cherry_google_fonts_cdn'</span>, <span class="hljs-string">'cherry_china_fonts_url'</span> );


<span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">cherry_china_fonts_url</span><span class="hljs-params">( $url )</span> </span>{
	<span class="hljs-keyword">return</span> <span class="hljs-string">'//china.fonts.url.com/'</span>;
}

</code>
</pre>

<div id="toc-changelog" class="toc-id"></div>
<h3><?php _e( 'Changelog' ); ?></h3>

<p><?php _e( 'Here you can view the latest updates implemented in the Monstroid 2 versions.' ); ?></p>

<h5><?php _e( 'Monstroid2 v1.3.0 (June 02, 2017):' ); ?></h5>
<ul>
	<li><p><?php _e( '3 New Design Skins:' ); ?></p>
			<ul>
				<li><p><?php _e( 'Agency - creative web design;' ); ?></p></li>
				<li><p><?php _e( 'News Magazine;' ); ?></p></li>
				<li><p><?php _e( 'Portfolio - theme enhanced with the cherry projects plugin.' ); ?></p></li></li>
			</ul>
	<li><p><?php _e( 'Cherry plugin compatibility: ' ); ?></p>
			<ul>
				<li><p><?php _e( 'Cherry Socialize;' ); ?></p></li>
				<li><p><?php _e( 'Cherry Search;' ); ?></p></li>
				<li><p><?php _e( 'Cherry Trending Post.' ); ?></p></li></li>
			</ul>
	<li><p><?php _e( 'Moto plugin compatibility:' ); ?></p>
			<ul>
				<li><p><?php _e( 'Hotel Booking;' ); ?></p></li>
				<li><p><?php _e( 'Restaurant Menu;' ); ?></p></li>
				<li><p><?php _e( 'Timetable and Event Schedule.' ); ?></p></li></li>
			</ul>
	<li><p><?php _e( 'Google Analytics option added;' ); ?></p></li>
	<li><p><?php _e( 'Maintenance mode option added;' ); ?></p></li>
	<li><p><?php _e( 'Minor bug fixes.' ); ?></p></li>
</ul>
<h5><?php _e( 'Monstroid2 v1.2.0 (April 19, 2017):' ); ?></h5>

<ul>
	<li><p><?php _e( 'WooCommerce version 3.0 full compatibility.' ); ?></p></li>
</ul>

<h5><?php _e( 'Monstroid2 v1.0.2 (March 1, 2017):' ); ?></h5>

<ul>
	<li><p><?php _e( 'RTL (right-to-left) languages support;' ); ?></p></li>
	<li><p><?php _e( 'multi-language localization for customizer (FR, DE, RU, ES);' ); ?></p></li>
	<li><p><?php _e( 'fully compatible with WPML and Polylang plugins;' ); ?></p></li>
</ul>

<p><?php _e( 'The following update contains 4 new design skins:' ); ?></p>

<ul>
	<li><p><?php _e( 'theme enhanced with the TM Gallery plugin;' ); ?></p></li>
	<li><p><?php _e( 'language school Lingua theme;' ); ?></p></li>
	<li><p><?php _e( 'landing page theme;' ); ?></p></li>
	<li><p><?php _e( 'marketing-centered theme.' ); ?></p></li>
</ul>

<h5><?php _e( 'Monstroid2 v1.0.1 (February 3, 2017):' ); ?></h5>

<ul>
	<li><p><?php _e( 'a child theme, that allows you to save any changes you have made to the styles.css and functions.php, etc.;' ); ?></p></li>
	<li><p><?php _e( 'newly added regular, invert and footer logo options;' ); ?></p></li>
	<li><p><?php _e( 'improved resizing options and columns sorting;' ); ?></p></li>
	<li><p><?php _e( 'visually enhanced hotel booking plugin;' ); ?></p></li>
	<li><p><?php _e( 'additional styling for headers and footers of all other Monstroid 2 skins.' ); ?></p></li>
</ul>
<div id="toc-rtl" class="toc-id"></div>

<h3><?php _e( 'RTL Support' ); ?></h3>

<p><?php _e( 'From 1.0.2. Monstroid 2 theme supports RTL (right-to-left) localization. ' ); ?></p>

<p><?php _e( 'This means that Administration panel in your theme can be translated in languages, that need RTL to be viewed correctly.' ); ?></p>


<ul>
	<li><p><?php _e( 'to enable RTL localization proceed to Administration panel. Click on <strong>Settings</strong> tab in the left column and choose <strong>General</strong>. A <strong>General Settings</strong> window will open;' ); ?></p></li>


<figure class="img-preview" style= "height:265px; width:900px";><img src="<?php url_manager()->get_assets_url( 'assets/images/rtl2.png' ); ?>" alt="<?php _e( 'Cart' ); ?>"></figure>


	<li><p><?php _e( 'find <strong>Site language</strong> settings and choose a language you need to apply to your theme;' ); ?></p></li>


<figure class="img-preview" style= "height:100px; width:900px";><img src="<?php url_manager()->get_assets_url( 'assets/images/rtl3.png' ); ?>" alt="<?php _e( 'Cart' ); ?>"></figure>



	<li><p><?php _e( 'Click on <strong> Save changes</strong> button for your changes to be applied and saved.' ); ?></p></li>
</ul>

<figure class="img-preview" style= "height:100px; width:900px";><img src="<?php url_manager()->get_assets_url( 'assets/images/rtl4.png' ); ?>" alt="<?php _e( 'Cart' ); ?>"></figure>
</article>
