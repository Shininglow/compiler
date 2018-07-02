<div id="toc-recent-posts" class="toc-id"></div>
    <h3 id="recent-posts"><?php _e( 'Recent Posts' ); ?></h3>

	<p><?php _e( 'This widget is used to display recent posts on the homepage.' ); ?></p>

    <?php assets_manager()->get_image( 'assets/images/temp/recent-posts-widget.png', 'img-preview', _( 'Menu Settings Screen' ) ); ?>

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
            <dt><?php _e( 'number of posts to show' ); ?></dt>
            <dd>
                <?php _e( 'this property allows you to change the number of the displayed posts;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'display post date' ); ?></dt>
            <dd>
                <?php _e( 'show/hide post date.' ); ?>
            </dd>
        </dl>
    </li>

</ul>
