<div id="toc-text" class="toc-id"></div>
    <h3 id="text"><?php _e( 'Text' ); ?></h3>

	<p><?php _e( 'The widget allows you to display various text blocks, you can also use it to insert the shortcodes.' ); ?></p>

    <?php assets_manager()->get_image( 'assets/images/temp/text.png', 'img-preview', _( 'Menu Settings Screen' ) ); ?>

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
            <dt><?php _e( 'content' ); ?></dt>
            <dd>
                <?php _e( 'insert any kind of content;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'automatically add paragraphs' ); ?></dt>
            <dd>
                <?php _e( 'this option enables the  <strong>Automatically add paragraphs</strong> function.' ); ?>
            </dd>
        </dl>
    </li>
</ul>
