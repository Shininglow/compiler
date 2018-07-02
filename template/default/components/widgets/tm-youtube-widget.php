	<article id="tm-youtube">
    <div id="toc-tm-youtube" class="toc-id"></div>
    <h3 id="tm-youtube"><?php _e( 'TM YouTube Subscribe Widget' ); ?></h3>

	<p><?php _e( 'This widget is used to setup and display YouTube subscribe form on the website.' ); ?></p>

<?php assets_manager()->get_image( 'assets/images/widgets/temp/tm-youtube-widget.png', 'img-polaroid' ); ?>

	<ul class="marked-list">
<?php if ($project == 'stylepark') { ?>
     <li>
        <dl class="inline-term">
            <dt><?php _e( 'Choose widget background' ); ?></dt>
            <dd>
                <?php _e( 'The option allows you to change the widget background' ); ?>
            </dd>
        </dl>
    </li>

<?php } ?>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Title' ); ?></dt>
            <dd>
				<?php _e( 'This property specifies the widget title' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'API key' ); ?></dt>
            <dd>
                <?php _e( 'Enter your YouTube API key' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Channel Title' ); ?></dt>
            <dd>
                <?php _e( 'Enter the title of your channel' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Channel URL' ); ?></dt>
            <dd>
                <?php _e( 'Enter the URL address of your channel' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Text to display when there are no video ' ); ?></dt>
            <dd>
                <?php _e( 'Text that will come up if the video is unavailable' ); ?>
            </dd>
        </dl>
    </li>
     <li>
        <dl class="inline-term">
            <dt><?php _e( 'Text to display when there is one video' ); ?> </dt>
            <dd>
                <?php _e( 'Text that will come up when only one video is uploaded' ); ?>
            </dd>
        </dl>
    </li>
     <li>
        <dl class="inline-term">
            <dt><?php _e( 'Text to display when there is more than one video' ); ?> </dt>
            <dd>
                <?php _e( 'Text that will come up if more than one video is available on the channel' ); ?>
            </dd>
        </dl>
    </li>
</ul>

</article>