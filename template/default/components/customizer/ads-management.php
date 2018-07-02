<div id="toc-ads-management" class="toc-id"></div>
<h3 id="ads-management"> <?php _e( 'Ads Management' ); ?></h3>
<p><?php _e( 'This option allows you to add various kinds of ads to the website.
Just add a particular shortcode to any of the listed sections:' ); ?></p>
<ul>
	<?php
		get_customizer_sub_component(
			array(
				'ads-management',
				'ads-header',
				'ads-home-before-loop',
				'ads-post-before-content',
				'ads-post-before-comments',
			)
		);
	?>
</ul>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'header;' ); ?></dt>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'front page before loop;' ); ?></dt>
        </dl>
    </li>

        <li>
        <dl class="inline-term">
            <dt><?php _e( 'post before content;' ); ?></dt>
        </dl>
    </li>

            <li>
        <dl class="inline-term">
            <dt><?php _e( 'post before comments.' ); ?></dt>
        </dl>
    </li>
</ul>
