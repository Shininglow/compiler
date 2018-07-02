<div id="toc-archive" class="toc-id"></div>
    <h3 id="archive"><?php _e( 'Archives' ); ?></h3>

	<p><?php _e( 'This widget is designed to display archives.' ); ?></p>

<figure class="img-preview" style= "width:900px";><img src="<?php url_manager()->get_assets_url( 'assets/images/temp/archives.png' ); ?>" alt="<?php _e( 'About' ); ?>"></figure>

    <ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt> <?php _e( 'title' ); ?></dt>
            <dd>
                <?php _e( 'enter the title of the widget;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'display as dropdown' ); ?></dt>
            <dd>
                <?php _e( 'this option allows to display the categories as a dropdown list;' ); ?>
            </dd>
        </dl>
    </li>
     <li>
        <dl class="inline-term">
            <dt><?php _e( 'show post counts' ); ?></dt>
            <dd>
                <?php _e( 'show/hide post counts.' ); ?>
            </dd>
        </dl>
    </li>
</ul>
