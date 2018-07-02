<div id="toc-logo-&amp;-favicon" class="toc-id"></div>
<h3 id="logo--favicon"><?php _e( 'Logo &amp; Favicon' ); ?></h3>
<p><?php _e( 'You can configure logo and favicon here.' ); ?></p>
<?php
	get_customizer_sub_component(
		array(
			'logo-favicon',
			'header-logo-type',
			'header-logo-url',
			'invert-header-logo-url',
			'retina-header-logo-url',
			'invert-retina-header-logo-url',
			'header-logo-font-family',
			'header-logo-font-style',
			'header-logo-font-weight',
			'header-logo-font-size',
			'header-logo-character-set',
		)
	);
?>
<h5><?php _e( 'Logo Type' ); ?></h5>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'image' ); ?></dt>
            <dd>
            	<?php _e( 'you can choose a logo image from the media library in the next option;' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'text' ); ?></dt>
            <dd>
            	<?php _e( 'your WordPress Site Title will be shown instead.' ); ?>
            </dd>
        </dl>
    </li>
</ul>

<h5><?php _e( 'Logo Upload' ); ?></h5>

<p><?php _e( 'Click the <strong>Choose Media</strong> button to select the logo image from the media library or upload your image;' ); ?></p>




<h5><?php _e( 'Retina Logo Upload' ); ?></h5>

<p><?php _e( 'Here you can upload the logo for retina-ready devices.' ); ?></p>



<h5><?php _e( 'Site Icon' ); ?></h5>

<p><?php _e( 'Icon image that is displayed in the browser address bar and browser tab heading.  Icons must be square. Max icon (.ico) size is 32x32 px. You can also upload favicon for retina displays. Max retina icon size: 512x512 px. Also you can <strong>Enable Retina optimization</strong> and <strong>Show preloader when open a page</strong> via selecting the checkbox.' ); ?></p>

