<div id="toc-custom-posts" class="toc-id"></div>
    <h3 id="custom-posts"><?php _e( 'Custom Posts' ); ?></h3>

    <p><?php _e( 'This widget is used to setup and display custom posts.' ); ?></p>

    <?php assets_manager()->get_image( 'assets/images/temp/custom-posts.png', 'img-preview', _( 'Custom posts' ) ); ?>

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
            <dt><?php _e( 'choose taxonomy type' ); ?></dt>
            <dd>
                <?php _e( 'select a proper taxonomy type. You can choose from <strong>Category, Tag, Post Format</strong>;' ); ?>
            </dd>
        </dl>
    </li>

    </li>
        <li>
        <dl class="inline-term">
            <dt><?php _e( 'category' ); ?></dt>
            <dd>
                <?php _e( 'select the category from which the posts will be displayed;' ); ?>
            </dd>
        </dl>
    </li>

    </li>
        <li>
        <dl class="inline-term">
            <dt><?php _e( 'tag' ); ?></dt>
            <dd>
                <?php _e( 'specify the tag to display posts;' ); ?>
            </dd>
        </dl>
    </li>

    </li>
        <li>
        <dl class="inline-term">
            <dt><?php _e( 'post format' ); ?></dt>
            <dd>
                <?php _e( 'specify the post format;' ); ?>
            </dd>
        </dl>
    </li>

     <li>
        <dl class="inline-term">
            <dt><?php _e( 'posts count ' ); ?></dt>
            <dd>
                <?php _e( 'here you can define the number of posts to display;' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'offset post' ); ?> </dt>
            <dd>
                <?php _e( 'this property specifies the number of posts to displace or pass over;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'title words length' ); ?> </dt>
            <dd>
                <?php _e( 'this property sets the number of words limit for post\'s title. Set 0 to hide title;' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'excerpt words length' ); ?></dt>
            <dd>
                <?php _e( 'this property sets the number of excerpt words;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'display post meta data' ); ?></dt>
            <dd>
                <?php _e( 'this feature adds meta data to the post;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'post read more button label' ); ?></dt>
            <dd>
                <?php _e( 'add text to the <strong>Read More</strong> button.' ); ?>
            </dd>
        </dl>
    </li>
</ul>
