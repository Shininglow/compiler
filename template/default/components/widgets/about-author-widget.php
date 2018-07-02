<article id="about-author">
    <div id="toc-about-author-widget" class="toc-id"></div>
    <h3 id="about-author"><?php _e( 'About Author' ); ?></h3>

	<p><?php _e( 'This widget is used to display blog author information.' ); ?></p>

    <?php assets_manager()->get_image( 'assets/images/temp/about-author-widget.png', 'img-preview', _( 'Menu Settings Screen' ) ); ?>

	<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'title' ); ?></dt>
            <dd>
				<?php _e( 'widgets text title;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'select user to show' ); ?></dt>
            <dd>
				<?php _e( 'you can select a user / author from a dropdown list to show on the page;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'author avatar size' ); ?> </dt>
            <dd>
				<?php _e( 'here you can define the author avatar image size, set it to 0 to hide the avatar, it will be applied only to gravatar;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'custom avatar image' ); ?> </dt>
            <dd>
				<?php _e( 'here you can choose and upload the custom author avatar image;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'link' ); ?></dt>
            <dd>
                <?php _e( 'here you can set a link, or leave it empty to hide;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'link label' ); ?></dt>
            <dd>
                <?php _e( 'here you can set a link text.' ); ?>
            </dd>
        </dl>
    </li>
</ul></article>
