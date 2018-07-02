<div id="toc-about-author" class="toc-id"></div>
    <h3 id="about-author"><?php _e( 'About Author' ); ?></h3>

	<p><?php _e( 'This widget is used to display blog author information.' ); ?></p>

<figure class="img-preview" style= "width:900px";><img src="<?php url_manager()->get_assets_url( 'assets/images/temp/about-author-widget.png' ); ?>" alt="<?php _e( 'About' ); ?>"></figure>


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
</ul>
