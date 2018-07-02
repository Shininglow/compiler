<div id="toc-recent-comments" class="toc-id"></div>
    <h3 id="recent-comments"><?php _e( 'Recent Comments' ); ?></h3>

	<p><?php _e( 'This widget is used to display the recent comments to the posts on the homepage.' ); ?></p>

    <?php assets_manager()->get_image( 'assets/images/temp/recent-comments-widget.png', 'img-preview', _( 'Menu Settings Screen' ) ); ?>

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
                <dt><?php _e( 'number of comments to show' ); ?></dt>
                <dd>
                    <?php _e( 'this property allows you to change the number of the displayed comments.' ); ?>
                </dd>
            </dl>
        </li>
    </ul>
