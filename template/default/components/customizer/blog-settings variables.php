<div id="toc-blog-settings" class="toc-id"></div>
<h3 id="blog-settings"><?php _e( 'Blog' ); ?></h3>
<p><?php _e( 'Here you can configure your blog.' ); ?></p>
<?php
	get_customizer_sub_component(
		array(
			'blog-layout-type',
			'blog-sticky-type',
			'blog-sticky-icon',
			'blog-sticky-label',
			'blog-posts-content',
			'blog-featured-image',
			'blog-read-more-text',
			'blog-post-author',
			'blog-post-publish-date',
			'blog-post-categories',
			'blog-post-tags',
			'blog-post-comments',
			'blog-post',
		)
	);
?>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'layout' ); ?></dt>
            <dd>
                <?php _e( 'select the grid layout pattern for pages with custom blog layout;' ); ?>
            </dd>
        </dl>

    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'sticky label type' ); ?></dt>
            <dd>
                <?php _e( 'text label, font icon, text with icon;' ); ?>
            </dd>
        </dl>

    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'icon for sticky post' ); ?></dt>
            <dd>
                <?php _e( 'select the specific icon for sticky post;' ); ?>
            </dd>
        </dl>

    </li>


    <li>
        <dl class="inline-term">
            <dt><?php _e( 'post content' ); ?></dt>
            <dd>
                <?php _e( 'select how you want to display the post content in blog listing;' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'featured image' ); ?></dt>
            <dd>
                <?php _e( 'set dimensions for post featured images;' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'read more button text' ); ?></dt>
            <dd>
                <?php _e( 'this setting specifies the <strong>Read More</strong> button label text;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'show post author' ); ?></dt>
            <dd>
                <?php _e( 'show / hide post author;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'show publish date' ); ?></dt>
            <dd>
                <?php _e( 'show / hide publish date;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'show categories' ); ?></dt>
            <dd>
                <?php _e( 'show / hide categories;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'show tags' ); ?></dt>
            <dd>
                <?php _e( 'show / hide tags;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'show comments' ); ?></dt>
            <dd>
                <?php _e( 'show / hide comments.' ); ?>
            </dd>
        </dl>
    </li>

</ul>




<h4> <p> Blog React </p> </h4>
<p><?php _e( 'Here you can configure your blog.' ); ?></p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'use react blog appearance' ); ?></dt>
            <dd>
                <?php _e( 'enable / disable using react blog appearance;' ); ?>
            </dd>
        </dl>
    </li>

     <li>
        <dl class="inline-term">
            <dt><?php _e( 'react blog layout' ); ?></dt>
            <dd>
                <?php _e( 'define the layout type you want to use on your blog page);' ); ?>
            </dd>
        </dl>

    </li>

     <li>
        <dl class="inline-term">
            <dt><?php _e( 'number of posts per page' ); ?></dt>
            <dd>
                <?php _e( 'set the value of posts to show per one page;' ); ?>
            </dd>
        </dl>

    </li>

       

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'transition to new posts' ); ?></dt>
            <dd>
                <?php _e( 'specify the style of transition to new posts;' ); ?>
            </dd>
        </dl>
    </li>
     <li>
        <dl class="inline-term">
            <dt><?php _e( 'featured image' ); ?></dt>
            <dd>
                <?php _e( 'set dimensions for post featured images;' ); ?>
            </dd>
        </dl>
    </li>
    

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'number of posts to load' ); ?></dt>
            <dd>
                <?php _e( 'turn on Load More button to use this option;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'desktop' ); ?></dt>
            <dd>
                <?php _e( 'select how much posts to load per page on desktop;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'laptop' ); ?></dt>
            <dd>
                <?php _e( 'select how much posts to load per page on laptop;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'horizontal tablet layout' ); ?></dt>
            <dd>
                <?php _e( 'select how much posts to load per page on horizontal tablet;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'vertical tablet layout' ); ?></dt>
            <dd>
                <?php _e( 'select how much posts to load per page on vertical tablet;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'phone' ); ?></dt>
            <dd>
                <?php _e( 'select how much posts to load per page on phone.' ); ?>
            </dd>
        </dl>
    </li>