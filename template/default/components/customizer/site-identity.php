<div id="toc-site-identity" class="toc-id"></div>
<h2 id="customizer"><?php _e( 'Customizer' ); ?></h2>

<h6>	<p><?php _e( 'Customizer is a WYSIWYG theme settings interface. You can setup typography, navigation, widgets positioning, background images and colors settings here. Our theme installation will provide you with a wider range of settings, such as social networks configuration, page layouts setting, sidebars, block setting and much more. The main advantage is that you can see the result immediately, and you can change it in no time flat without having to work with the files or code.' ); ?></p>
</h6>
	<p><?php printf( _( 'There are two ways to start configuring. First is to navigate to %s Appearance &gt; Customize %s section. Second way is to press on %sCustomize%s at the top left corner of site. This way allows you to edit the page you’re currently viewing. And the first way initially shows the site front page by default.' ), '<strong>', '</strong>', '<strong>', '</strong>' ); ?></p>
	<p><?php printf( _( 'Left side of the site interface lists the available settings. Page template is displayed at the right side of the screen. After adding the changes you can save them by pressing the %sSave &amp; Publish%s button.' ), '<strong>', '</strong>' ); ?></p>
	<?php assets_manager()->get_image( 'assets/images/temp/customizer.png', 'img-preview', _( 'Customizer Screen' ) ); ?>


<h5><p> Below is the list of settings which can be customized according to your needs:</p><h5>

<h3 id="site-identity"><?php _e( 'Site Identity' ); ?></h3>
<p><?php _e( 'Here you can setup site identity.' ); ?></p>

<h5><?php _e( 'Site Title' ); ?></h5>

<p><?php _e( 'Your website title goes here.' ); ?></p>


<h5><?php _e( 'Tagline' ); ?></h5>

<p><?php _e( 'This a short statement similar to a subtitle or advertising slogan.' ); ?></p>

<h5><?php _e( 'Show Tagline after Logo' ); ?></h5>

<p><?php _e( 'This property specifies whether to show or hide tagline after logo.' ); ?></p>

<h5><?php _e( 'Show ToTop Button' ); ?></h5>

<p><?php _e( 'This property specifies whether to enable or disable topTop button.' ); ?></p>

<h5><?php _e( 'Show Page Preloader' ); ?></h5>

<p><?php _e( 'This property specifies whether to show placeholder or not.' ); ?></p>

<?php
	get_customizer_sub_component(
		array(
			'totop-visibility',
			'page-preloader',
		)
	);
?>


