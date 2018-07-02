<article>
	<div id="toc-menu-and-navigation" class="toc-id"></div>
	<h2 id="basic-configuration"><?php _e( 'Basic Configuration' ); ?></h2>
	<h5 id="this-section-defines-basic-theme-configuration"><?php _e( 'This section defines basic theme configuration.' ); ?></h5>
	<h3 id="main-menu-configuration"><?php _e( 'Main Menu Configuration' ); ?></h3>
	<p><?php printf( _( 'Navigate to %s Dashboard &gt; Appearance &gt; Menus %s in order to create the menu. Next please follow <strong>create a new menu</strong> link, type Menu Name and save settings by pressing the %sSave Menu %s button. Then you’re ready to start adding menu items, by default you can add pages, posts, categories, formats, or custom links.'), '<strong>', '</strong>', '<strong>', '</strong>' ); ?></p>
	<p><?php printf( _( 'After adding menu items and saving the menu you should define its position on the website. You can do that at the %s Manage Locations %s tab or right below the menu, in the %s Menu Settings %s section. Your template includes a few sections (locations) to place your menu. It can be also displayed on the website using widgets.'), '<strong>', '</strong>', '<strong>', '</strong>' ); ?></p>
	<ul>
		<li><?php _e( 'Top;' ); ?></li>
		<li><?php _e( 'Main;' ); ?></li>
		<li><?php _e( 'Footer;' ); ?></li>
		<li><?php _e( 'Social.' ); ?></li>
	</ul>
	<p><?php _e( 'Then you can define the menu position and check the result with the help of the customizer tool.' ); ?></p>
	<p><?php printf( _( 'In order to show the list of social icons you need to create a separate menu with %sSocial Menu%s title. Then please create menu items for the required social networks, and place this menu at the similar %sSocial%s section. Social icons will be automatically applied. In order to change them to custom ones, you just need to replace the images with the same filenames and save changes. These icons will be also used in the %sFollow%s block.' ), '<strong>', '</strong>', '<strong>', '</strong>', '<strong>', '</strong>' ); ?></p>

	<?php assets_manager()->get_image( 'assets/images/social-menu.png', 'img-preview', _( 'Menu Settings Screen' ) ); ?>
	<div id="toc-customizer-overview" class="toc-id"></div>
	<h3 id="template-configuration-via-customizer"><?php _e( 'Template Configuration via Customizer' ); ?></h3>
	<p><?php _e( 'Now your theme can be configured with the convenient intuitive WYSIWYG editor interface. Our template extends its functionality, so you have additional settings available.' ); ?></p>
	<p><?php printf( _( 'There are two ways to start configuring. First is to navigate to %s Appearance &gt; Customize %s section. Second way is to press on %sCustomize%s at the top left corner of site. This way allows you to edit the page you’re currently viewing. And the first way initially shows the site front page by default.' ), '<strong>', '</strong>', '<strong>', '</strong>' ); ?></p>
	<p><?php printf( _( 'Left side of the site interface lists the available settings. Page template is displayed at the right side of the screen. After adding the changes you can save them by pressing the %sSave &amp; Publish%s button.' ), '<strong>', '</strong>' ); ?></p>
	<?php assets_manager()->get_image( 'assets/images/temp/customizer.png', 'img-preview', _( 'Customizer Screen' ) ); ?>
</article>
