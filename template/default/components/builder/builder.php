<article>
	<div id="toc-elements" class="toc-id"></div>
	<h2><?php _e( 'Power Builder' ); ?></h2>
	<h5><?php _e( 'Power Builder is a professional solution for quick and worry-free customizing of WordPress themes. It uses multiple building blocks that allow users to create a fully functional and compelling website much faster. Let’s take a look at all the features included in the pack.' ); ?></h5>
	<h3><?php _e( 'Elements' ); ?></h3>
	<p><?php _e( 'Basically, the builder offers three main sections that will help you build various kinds of layouts.' ); ?></p>
	<div id="toc-sections" class="toc-id"></div>
	<h3><?php _e( 'Sections' ); ?></h3>
	<p><?php _e( 'Sections are on the top of the list of the elements you will use in designing the website. Here you can add various kinds of column rows and modules depending on the design of your project.' ); ?></p>
	<?php assets_manager()->get_image( 'assets/images/sections.png', 'img-preview', _('Insert Columns dialog') ); ?>

	<h4><?php _e( 'Section Settings' ); ?></h4>
	<p><?php _e( 'After adding a section, you need to customize it in accordance with the specifications of the project. For that you need to click the Settings icon. In the popup window you will see a full list of options. Let’s take a look at each one of them separately.' ); ?></p>
	<?php assets_manager()->get_image( 'assets/images/section-module-settings.png', 'img-preview', _('Section Module Settings') ); ?>
	<ul>
		<li><?php printf( _( '%1$sBackground Image%2$s - if defined, this image will be used as the background for this module. To remove a background image, simply delete the URL from the settings field.'), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%1$sTransparent Background Color%2$s - Enabling this option will remove the background color of this section, allowing the website background color or background image to show through.'), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%1$sBackground Video MP4%2$s - all videos should be uploaded in both .MP4 .WEBM formats to ensure maximum compatibility in all browsers. Upload the .MP4 version here. Important Note: Video backgrounds are disabled from mobile devices. Instead, your background image will be used. For this reason, you should define both a background image and a background video to ensure best results.'), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%1$sBackground Video Webm%2$s - all videos should be uploaded in both .MP4 .WEBM formats to ensure maximum compatibility in all browsers. Important Note: Video backgrounds are disabled from mobile devices. Instead, your background image will be used. For this reason, you should define both a background image and a background video to ensure best results.'), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%1$sBackground Video Width%2$s - in order for videos to be sized correctly, you must input the exact width (in pixels) of your video here.'), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%1$sBackground Video Height%2$s - in order for videos to be sized correctly, you must input the exact height (in pixels) of your video here.'), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%1$sPause Video%2$s - allow video to be paused by other players when they begin playing.'), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%1$sShow Inner Shadow%2$s - here you can select whether or not your section has an inner shadow. This can look great when you have colored backgrounds or background images.'), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%1$sUse Parallax Effect%2$s - if enabled, your background image will stay fixed as your scroll, creating a fun parallax-like effect.'), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%1$sCustom Padding%2$s - adjust padding to specific values, or leave blank to use the default padding.'), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%1$sKeep Custom Padding on Mobile%2$s - allow custom padding to be retained on mobile screens.'), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%1$sDisable on%2$s - this will disable the module on selected devices.'), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%1$sAdmin Label%2$s - this will change the label of the section in the builder for easy identification when collapsed.'), '<strong>', '</strong>' ); ?></li>
	</ul>
	<div id="toc-rows" class="toc-id"></div>
	<h3><?php _e( 'Rows' ); ?></h3>
	<p><?php _e( 'These elements are added inside the Sections. There are also different types of Rows in which you can add the necessary modules to give the site any functionality and look. All the rows are fully responsive and will look and perform well on any screen resolution.' ); ?></p>
	<?php assets_manager()->get_image( 'assets/images/insert-rows.png', 'img-preview', _('Insert Columns dialog') ); ?>
	<h4><?php _e( 'Row Properties' ); ?></h4>
	<p><?php _e( 'Rows also can be customized exactly the same way as the sections. After selecting a proper row type, you can start customizing it in accordance with the specifications of your project.' ); ?></p>
	<?php assets_manager()->get_image( 'assets/images/row-module-settings.png', 'img-preview', _('Row Module Settings') ); ?>
	<ul>
		<li><?php printf( _( '%1$sMake This Row Fullwidth%2$s - enable this option to extend the width of this row to the edge of the browser window.'), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%1$sUse Custom Width%2$s - change to <strong>Yes</strong> if you would like to adjust the width of this row to a non-standard width.'), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%1$sUse grid padding%2$s - change to <strong>No</strong> if you would like to delete grid padding.'), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%1$sCustom Padding%2$s - adjust padding to specific values, or leave blank to use the default padding.'), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%1$sKeep Custom Padding on Mobile%2$s - allow custom padding to be retained on mobile screens.'), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%1$sDisable on%2$s - this will disable the module on selected devices.'), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%1$sAdmin Label%2$s - this will change the label of the row in the builder for easy identification when collapsed.'), '<strong>', '</strong>' ); ?></li>
	</ul>
	<div id="toc-modules" class="toc-id"></div>
	<h3><?php _e( 'Modules' ); ?></h3>
	<p><?php _e( 'The third element required to start designing your website is Modules. Each of the offered Modules can be added to any column.' ); ?></p>
	<?php assets_manager()->get_image( 'assets/images/insert-module.png', 'img-preview', _('Insert Module') ); ?>

	<p><?php _e( 'Once the rows and sections are customized you can start adjusting the modules. First of all, you need to choose a proper module from the list and add it to the Row area. After that you can start customizing the modules. Note: each module has a different set of options.' ); ?></p>
	<?php assets_manager()->get_image( 'assets/images/module-properties.png', 'img-preview', _('Module Properties') ); ?>
	<div id="toc-layout-options" class="toc-id"></div>
	<h3><?php _e( 'Layout Options' ); ?></h3>
	<p><?php _e( 'To make the procedure of designing and customizing the site even more comfortable, Power Builder offers you an assortment of layout options. All of them are described below.' ); ?></p>
	<h4><?php _e( 'Save to Library' ); ?></h4>
	<p><?php _e( 'You can save any custom layout you have built and use it later, on another page or on another website. Just press the “Save to Library” button at the top of the panel and the layout will be added to the library.' ); ?></p>
	<?php assets_manager()->get_image( 'assets/images/save-to-library-button.png', 'img-preview', _('Save to Library') ); ?>
	<p><?php printf( _( 'In the popup window you only need to type down the name of the layout you want to save and press the %1$sSave%2$s button.'), '<strong>', '</strong>' ); ?></p>
	<?php assets_manager()->get_image( 'assets/images/save-to-library-dialog.png', 'img-preview', _('Save to Library Dialog') ); ?>
	<h4><?php _e( 'Load from Library' ); ?></h4>
	<p><?php printf( _( 'Once you need to insert the layout created earlier, simply click %1$sLoad from Library%2$s %1$s&gt;%2$s %1$sAdd from library%2$s, find the saved layout and press %1$sLoad%2$s.'), '<strong>', '</strong>' ); ?></p>
	<?php assets_manager()->get_image( 'assets/images/load-layout-dialog.png', 'img-preview', _('Load Layout dialog') ); ?>
	<h4><?php _e( 'Clear Layout' ); ?></h4>
	<p><?php _e( 'This option allows you to erase all the changes and start building the layout from scratch. Note that all the changes will be deleted, so make sure that you won’t need this layout saved in the library.' ); ?></p>
	<?php assets_manager()->get_image( 'assets/images/clear-layout-dialog.png', 'img-preview', _('Clear Layout dialog') ); ?>
</article>
