<div id="toc-mailchimp" class="toc-id"></div>
<h3 id="mailchimp"><?php _e( 'MailChimp' ); ?></h3>
<p><?php _e( 'Here you can setup MailChimp settings for subscribe widget.' ); ?></p>
<?php
	get_customizer_sub_component(
		array(
			'mailchimp-api-key',
			'mailchimp-list-id',
		)
	);
?>


<h5><?php _e( 'MailChimp API Key' ); ?></h5>

<p><?php _e( 'If you want to set up an integration with your MailChimp account, you\'ll need to generate an API key, and insert in this field.' ); ?></p>

<h5><?php _e( 'MailChimp List ID' ); ?></h5>

<p>
    <?php _e( 'Each MailChimp list has a unique List ID that integrations, plugins, and widgets may require to connect and transfer subscriber data.' ); ?>
</p>

<p>
	<?php _e( 'After the template installation you\'ll see the following message: "Please set up MailChimp API key and List ID" instead of the subscribe and follow form.' ); ?>
</p>

<div class="alert alert-info">
	<?php _e( 'Subscribe and follow form will be displayed, after you paste MailChimp API key and MailChimp list ID' ); ?>
</div>

<p>
	<?php _e( 'For more information, please visit official' ); ?>

<?php printf( _( '%1$sdocumentation.%2$s'), '<a href="http://kb.mailchimp.com/accounts/management/about-api-keys" target="_blank">', '</a>'); ?>
</p>
