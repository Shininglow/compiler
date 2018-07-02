<article>
	<div id="toc-adding-blog-post" class="toc-id"></div>
	<h2 id="posts-categories-and-posts-formats"><?php _e( 'Posts, Categories and Posts Formats' ); ?></h2>
	<h5 id="this-section-will-show-you-some-basics-on-working-with-wordpress-content-in-wordpress-is-stored-as-posts-and-categories-lets-see-how-to-work-with-them"><?php _e( 'This section will show you some basics on working with WordPress. Content in WordPress is stored as posts and categories. Let’s see how to work with them.' ); ?></h5>
	<h3 id="creating-a-blog-post"><?php _e( 'Creating a Blog Post' ); ?></h3>
	<p><?php _e( 'To add a blog post, you need to do the following:' ); ?></p>
	<ul>
		<li><?php printf( _( 'open the %sPosts%s tab;' ), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( 'click %sAdd New%s;' ), '<strong>', '</strong>' ); ?></li>
		<li><?php _e( 'add content to the post.' ); ?></li>
	</ul>
	<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/create-new-post.png' ); ?>" alt="<?php _e( 'Posts Menu' ); ?>"></figure>
	<p><?php printf( _( 'You can check detailed information about adding posts at <a href="https://codex.wordpress.org/Posts_Add_New_SubPanel" target="_blank">Posts Screen.</a> '), '' ); ?>

	<div id="toc-adding-a-category" class="toc-id"></div>
	<h3 id="adding-a-category"><?php _e( 'Adding a Category' ); ?></h3>
	<p><?php _e( 'To add a category you need to do the following:' ); ?></p>
	<ul>
		<li><?php printf( _( 'open the %sPosts%s tab;' ), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( 'click %sCategories%s to see all categories;' ), '<strong>', '</strong>' ); ?></li>
		<li><?php _e( 'enter new category name;' ); ?></li>
		<li><?php printf( _( 'click %sAdd New Category%s;' ), '<strong>', '</strong>' ); ?></li>
		<li><?php _e( 'click <strong>Publish</strong>.' ); ?></li>
	</ul>
	<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/posts-categories.png' ); ?>" alt="<?php _e( 'Posts Categories Menu' ); ?>"></figure>
	<p><?php printf( _( 'You can check detailed information about adding categories at <a href="https://codex.wordpress.org/Posts_Categories_SubPanel" target="_blank">Posts Categories Screen.</a> '), '' ); ?>




	<div id="toc-post-formats" class="toc-id"></div>
	<h3 id="post-formats"><?php _e( 'Post Formats' ); ?></h3>
	<p><?php _e( 'Post formats are used to customize the available post options and markup. You can choose a post format on the post editing screen.' ); ?></p>
	<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/post-format.png' ); ?>" alt="<?php _e( 'Post Format Screen' ); ?>"></figure>
	<p><?php printf( _( 'You can check detailed information on post formats on <a href="https://codex.wordpress.org/Post_Formats" target="_blank" target="_blank">Post Formats page.</a> '), '' ); ?>



	<p><?php _e( 'Check the list of available posts formats with description and settings below.' ); ?></p>
	<h4 id="standard-post-format"><?php _e( 'Standard Post Format' ); ?></h4>
	<p><?php _e( 'Standard post format has the following fields:' ); ?></p>
	<ul>
		<li><?php printf( _( '%spost title%s - post title;' ), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%spost content%s - post content;' ), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%scategories%s - post categories;' ), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%stags%s - post tags;' ), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%sfeatured image%s - post featured image.' ), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( 'other fields that can be enabled in %sScreen Options%s in the top right corner.' ), '<strong>', '</strong>' ); ?></li>
	</ul>
	<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/post-format-standard.png' ); ?>" alt="<?php _e( 'Add new Standard Post' ); ?>"></figure>
	<h4 id="aside"><?php _e( 'Aside' ); ?></h4>
	<p><?php _e( 'Aside is a simplified standard post format. In other words, there is only a content field, so you don’t need to enter the title and other options.' ); ?></p>
	<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/post-format-standard.png' ); ?>" alt="<?php _e( 'Add new Aside Post' ); ?>"></figure>
	<h4 id="audio"><?php _e( 'Audio' ); ?></h4>
	<p><?php printf( _( '%sAudio format%s is used to publish audio content.' ), '<strong>', '</strong>' ); ?></p>
	<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/post-format-audio.png' ); ?>" alt="<?php _e( 'Add new Audio Post' ); ?>"></figure>
	<p><?php _e( 'You can edit the following fields in the media gallery file settings:' ); ?></p>
	<ul>
		<li><?php printf( _( '%surl%s - audio file direct URL;' ), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%stitle%s - audio track name;' ), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%sartist%s - audio track performer;' ), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%salbum%s - audio track album;' ), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%sdescription%s - audio track description.' ), '<strong>', '</strong>' ); ?></li>
	</ul>
	<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/post-format-audio-attachment-details.png' ); ?>" alt="<?php _e( 'Audio Attachment Details' ); ?>"></figure>
	<h4 id="chat"><?php _e( 'Chat' ); ?></h4>
	<p><?php printf( _( '%sChat%s format is a post with content in the form of successive messages.' ), '<strong>', '</strong>' ); ?></p>
	<p><i class="fa fa-angle-right"></i><?php _e( ' Ann: Hello Mike!' ); ?></p>
	<p><i class="fa fa-angle-right"></i><?php _e( ' Mike: Hello Ann!' ); ?></p>
	<p><i class="fa fa-angle-right"></i><?php _e( ' Ann: How are you Mike?' ); ?></p>
	<p><i class="fa fa-angle-right"></i> <?php _e( 'Mike: Not bad Ann.' ); ?></p>
	<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/post-format-chat.png' ); ?>" alt="<?php _e( 'Chat' ); ?>"></figure>
	<h4 id="gallery"><?php _e( 'Gallery' ); ?></h4>
	<p><?php _e( 'The main feature of this post format is the possibility to add an unlimited number of images.' ); ?></p>
	<h5 id="adding-a-gallery"><?php _e( 'Adding a gallery:' ); ?></h5>
	<p><?php printf( _( '1. Click %sAdd Media%s.' ), '<strong>', '</strong>' ); ?></p>
	<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/add-media.png' ); ?>" alt="<?php _e( 'Add Media' ); ?>"></figure>
	<p><?php printf( _( '2. Drag files or click %sSelect Files%s to add images from the local computer.' ), '<strong>', '</strong>' ); ?></p>
	<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/insert-media.png' ); ?>" alt="<?php _e( 'Insert Media' ); ?>"></figure>
	<p><?php printf( _( '3. After the images are uploaded, you can find them in Media Library. Click %sUploaded to this post%s to view the images.' ), '<strong>', '</strong>' ); ?></p>
	<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/uploaded-images.png' ); ?>" alt="<?php _e( 'Uploaded Images' ); ?>"></figure>
	<p><?php _e( 'After editing, you can close the media library. The uploaded images will be added automatically.' ); ?></p>
	<p><?php _e( 'Gallery post format has the same fields that the standard post format has (e.g. title, content, category, etc).' ); ?></p>
	<h4 id="image"><?php _e( 'Image' ); ?></h4>
	<p><?php printf( _( '%sImage format%s is a format that includes one image uploaded through the %sFeatured Image%s option.' ), '<strong>', '</strong>', '<strong>', '</strong>' ); ?></p>
	<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/post-format-image-editor.png' ); ?>" alt="<?php _e( 'Add new Image Post' ); ?>"></figure>
	<h4 id="link"><?php _e( 'Link' ); ?></h4>
	<p><?php printf( _( '%sLink%s post format can be created in the visual editor by adding a %sURL%s in standard post format. %sPost title%s will be used as the URL text.' ), '<strong>', '</strong>', '<strong>', '</strong>', '<strong>', '</strong>' ); ?></p>
	<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/post-format-link.png' ); ?>" alt="<?php _e( 'Add new Link Post' ); ?>"></figure>
	<p><?php _e( 'Moreover, you can add a description of the target page and link any part of the text.' ); ?></p>
	<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/post-format-link-variant.png' ); ?>" alt="<?php _e( 'External Link Post' ); ?>"></figure>
	<h4 id="quote"><?php _e( 'Quote' ); ?></h4>
	<p><?php printf( _( '%sQuote%s post is used to publish the statements.' ), '<strong>', '</strong>' ); ?></p>
	<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/post-format-quote.png' ); ?>" alt="<?php _e( 'Add new Quote Post' ); ?>"></figure>
	<h4 id="status"><?php _e( 'Status' ); ?></h4>
	<p><?php printf( _( '%sStatus%s post is a message with content limited to 140 symbols. It is displayed with the author’s avatar.' ), '<strong>', '</strong>' ); ?></p>
	<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/post-format-status.png' ); ?>" alt="<?php _e( 'Add new Status Post' ); ?>"></figure>
	<h4 id="video"><?php _e( 'Video' ); ?></h4>
	<p><?php printf( _( '%sVideo%s post is used to publish video content.' ), '<strong>', '</strong>' ); ?></p>
	<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/post-format-video.png' ); ?>" alt="<?php _e( 'Add new Video Post' ); ?>"></figure>
	<p><?php _e( 'There are two ways of adding video into the post:' ); ?></p>
	<ul>
		<li><?php printf( _( '%sEmbedded Code%s - used to add video from the external sources like Youtube, Vimeo, etc.' ), '<strong>', '</strong>' ); ?></li>
		<li><?php _e( 'Add video through the <strong>Media Library</strong>.' ); ?></li>
	</ul>
	<p><?php _e( 'You can edit the following fields in settings:' ); ?></p>
	<ul>
		<li><?php printf( _( '%sm4v%s- direct link to the video in m4v format with delete function;' ), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%1$sadd alternative source for maximum HTML5 playback%2$s - alternative source of various video formats (%3$smp4%4$s, %3$sogv%4$s, %3$swebm%4$s);' ), '<strong>', '</strong>', '<em>', '</em>' ); ?></li>
		<li><?php printf( _( '%sposter image%s - set an image for video poster;' ), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%spreload%s - set video preloader (auto, metadata, none);' ), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%sautoplay%s - set video to autoplay;' ), '<strong>', '</strong>' ); ?></li>
		<li><?php printf( _( '%sloop%s - loop video.' ), '<strong>', '</strong>' ); ?></li>
	</ul>
	<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/post-format-video-settings.png' ); ?>" alt="<?php _e( 'Video Details' ); ?>"></figure>
</article>
