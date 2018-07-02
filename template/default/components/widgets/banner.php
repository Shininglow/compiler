<div id="toc-banner" class="toc-id"></div>
    <h3 id="banner"><?php _e( 'Banner' ); ?></h3>

	<p><?php _e( 'This widget is designed to add banners to the website.' ); ?></p>

    <?php assets_manager()->get_image( 'assets/images/temp/banner.png', 'img-preview', _( 'Banner' ) ); ?>

    <ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'source' ); ?></dt>
            <dd>
                <?php _e( 'choose the source image for the banner;' ); ?>

            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'link' ); ?></dt>
            <dd>
                <?php _e( 'this option allows you to add a link to a particular banner. Hover on a thumbnail in the customizer and click the button in the middle of it to specify the address;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'open in' ); ?></dt>
            <dd>
                <?php _e( 'specify whether to open the link in a current window or in a new one. ' ); ?>
            </dd>
        </dl>
    </li>
</ul>
