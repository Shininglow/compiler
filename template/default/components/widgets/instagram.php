<div id="toc-instagram" class="toc-id"></div>
    <h3 id="instagram"><?php _e( 'Instagram' ); ?></h3>

	<p><?php _e( 'This widget is used to setup and display Instagram feed on the website.' ); ?></p>

    <?php assets_manager()->get_image( 'assets/images/temp/instagram-widget.png', 'img-preview', _( 'Menu Settings Screen' ) ); ?>

	<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'title' ); ?></dt>
            <dd>
				<?php _e( 'this property specifies the widget title;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'hashtag (enter without `#` symbol)' ); ?></dt>
            <dd>
                <?php _e( 'here you can set a hashtag to display the images, selected by this property;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'number of photos' ); ?> </dt>
            <dd>
                <?php _e( 'this property defines the number of images to show;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'caption' ); ?></dt>
            <dd>
                <?php _e( 'hide/show caption below the images;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'date' ); ?></dt>
            <dd>
                <?php _e( 'hide/show date below the images.' ); ?>
            </dd>
        </dl>
    </li>
</ul>
