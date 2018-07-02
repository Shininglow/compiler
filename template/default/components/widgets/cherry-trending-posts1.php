<article id="cherry-trending-posts">
<div id="toc-cherry-trending-posts" class="toc-id"></div>
<h3 id="cherry-trending-posts"><?php _e( 'Cherry Trending Posts' ); ?></h3>

	<p><?php _e( 'This widget is used to display the most popular and trending posts on your blog.' ); ?></p>

<?php assets_manager()->get_image( 'assets/images/temp/cherry-trend.png', 'img-preview', _( 'Menu Settings Screen' ) ); ?>

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
            <dt><?php _e( 'title length in characters' ); ?></dt>
            <dd>
                <?php _e( 'select the title length, set 0 to hide it, -1 - to show full length;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'filter by' ); ?></dt>
            <dd>
                <?php _e( 'filter posts by views, rating or comments;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'show from' ); ?></dt>
            <dd>
                <?php _e( 'define if you want to show posts from categories or from tags;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'select category' ); ?></dt>
            <dd>
                <?php _e( 'select posts of which category you want to be displayed;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'number of posts to show ' ); ?></dt>
            <dd>
                <?php _e( 'select the number of posts to be shown or choose -1 to show all of them;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'excerpt length in words' ); ?></dt>
            <dd>
                <?php _e( 'here you can define the length of the shown post excerpt in words;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'display meta' ); ?></dt>
            <dd>
                <?php _e( 'choose what meta information you want to be displayed;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'button text' ); ?></dt>
            <dd>
                <?php _e( 'type in the button text.' ); ?>
            </dd>
        </dl>
    </li>
