<div id="toc-blog-settings" class="toc-id"></div>
<h3 id="blog-settings"><?php _e( 'Blog Settings' ); ?></h3>
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
            <dt><?php _e( 'number of words in excerpt' ); ?></dt>
            <dd>
                <?php _e( 'set the number of words in post excerpt;' ); ?>
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
<<<<<<< HEAD
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'show read more button' ); ?></dt>
            <dd>
                <?php _e( 'enable read more button here;' ); ?>
            </dd>
        </dl>
    </li>
=======
    
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc

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


