<div id="toc-image-grid" class="toc-id"></div>
    <h3 id="image-grid"><?php _e( 'Image Grid' ); ?></h3>

	<p><?php _e( 'This widget is used to display the image grid. By default, you have to select an appropriate category or tags in order to display the grid.' ); ?></p>

<figure class="img-preview" style= "width:900px";><img src="<?php url_manager()->get_assets_url( 'assets/images/temp/image-grid-widget.png' ); ?>" alt="<?php _e( 'About' ); ?>"></figure>

    <ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'widget title' ); ?></dt>
            <dd>
                <?php _e( 'this property specifies the widget title;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'choose taxonomy type' ); ?></dt>
            <dd>
                <?php _e( 'here you can define the items selection source: by category or tag;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'select category to show' ); ?></dt>
            <dd>
                <?php _e( 'exact category to display posts from;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'select tags to show ' ); ?></dt>
            <dd>
                <?php _e( 'exact tag to display posts from;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'post sorted' ); ?></dt>
            <dd>
                <?php _e( 'this property specifies how to sort out the posts on display;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'posts number' ); ?></dt>
            <dd>
                <?php _e( 'defines the number of posts/images displayed;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'offset post' ); ?></dt>
            <dd>
                <?php _e( 'this property specifies the number of post to displace or pass over;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'title words length' ); ?></dt>
            <dd>
                <?php _e( 'this property sets the number of words limit for post\'s title. Set 0 to hide title;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'columns number' ); ?></dt>
            <dd>
                <?php _e( 'here you can define the number of columns to display the images (up to 4). If you want to display the widget in the sidebar, you can display it only in one column;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'items padding ( size in pixels )' ); ?></dt>
            <dd>
                <?php _e( 'this property specifies the distance between the elements in pixels.' ); ?>
            </dd>
        </dl>
    </li>
</ul>
