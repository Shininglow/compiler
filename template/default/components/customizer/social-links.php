<div id="toc-social-links" class="toc-id"></div>
<h3 id="social-links"><?php _e( 'Social Links' ); ?></h3>
<p><?php _e( 'Here you can set up site social links.' ); ?></p>
<?php
	get_customizer_sub_component(
		array(
			'social-links',
			'header-social-links',
			'footer-social-links',
			'blog-post-share-buttons',
			'single-post-share-buttons',
		)
	);
?>

<ul class="marked-list">
    <li class="hide">
        <dl class="inline-term">
            <dt><?php _e( 'show social links in header' ); ?></dt>
            <dd>
                <?php _e( 'displays the list of links to social networks pages in site header;' ); ?>
            </dd>
        </dl>
    </li>

    <li class="hide">
        <dl class="inline-term">
            <dt><?php _e( 'show social links in footer' ); ?></dt>
            <dd>
                <?php _e( 'displays the list of links to social networks pages in site footer;' ); ?>
            </dd>
        </dl>
    </li>
        <li>
        <dl class="inline-term">
            <dt><?php _e( 'show social sharing to blog posts (only default blog) ' ); ?> </dt>
            <dd>
                <?php _e( 'displays <strong>share in social networks</strong> buttons in blog posts;' ); ?>
             </dd>
        </dl>
    </li>
        <li>
        <dl class="inline-term">
            <dt><?php _e( 'show social sharing to single blog post ' ); ?> </dt>
            <dd>
                <?php _e( 'displays <strong>share in social networks</strong> buttons on a single blog post;' ); ?>
             </dd>
        </dl>
    </li>
   </ul>


