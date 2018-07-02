<div id="toc-tag-cloud" class="toc-id"></div>
    <h3 id="tag-cloud"><?php _e( 'Tag Cloud' ); ?></h3>

	<p><?php _e( 'The widget allows you to display tag cloud on the website.' ); ?></p>

    <?php assets_manager()->get_image( 'assets/images/temp/tag_cloud.png', 'img-preview', _( 'Menu Settings Screen' ) ); ?>

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
            <dt><?php _e( 'taxonomy' ); ?></dt>
            <dd>
                <?php _e( 'choose a proper taxonomy type. ' ); ?>
            </dd>
        </dl>
    </li>
</ul>
