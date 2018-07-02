<div id="toc-smart-slider" class="toc-id"></div>
<h3 id="about-widget"><?php _e( 'Smart Slider' ); ?></h3>

	<p><?php _e( 'This widget is used to setup and display slider on the website.' ); ?></p>

<?php assets_manager()->get_image( 'assets/images/temp/smart-slider-widget.png', 'img-preview', _( 'Menu Settings Screen' ) ); ?>

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
                <?php _e( 'select taxonomy type of the slides;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'select category' ); ?></dt>
            <dd>
                <?php _e( 'here you can select category to pull the slides from;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'select tags' ); ?></dt>
            <dd>
                <?php _e( 'here you can select tags to pull the slides from;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'posts count' ); ?></dt>
            <dd>
                <?php _e( 'this property defines the number of posts / slides to display;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'display title ' ); ?></dt>
            <dd>
                <?php _e( 'here you can define whether to Hide/Show post\'s title in a slide;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'display content' ); ?></dt>
            <dd>
                <?php _e( 'here you can define whether to Hide/Show post\'s content in a slide body;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'display more button' ); ?></dt>
            <dd>
                <?php _e( 'here you can define whether to Hide/Show the Read More button;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'more button text' ); ?></dt>
            <dd>
                <?php _e( 'read more button label;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'content words trimmed count' ); ?></dt>
            <dd>
                <?php _e( 'this property defines the excerpt words limit by choosing the number of words from post\'s content;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'slider width' ); ?></dt>
            <dd>
                <?php _e( 'this property defines the slider width;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'slider height' ); ?></dt>
            <dd>
                <?php _e( 'this property defines the slider height;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'slider orientation' ); ?></dt>
            <dd>
                <?php _e( 'this property specifies the slider orientation. Smart slider slides are automatically set up in Horizontal / Landscape slide orientation, but you can change the slide orientation to Portrait / Vertical Portrait slide orientation;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'slide distance(px)' ); ?></dt>
            <dd>
                <?php _e( 'this property specifies the distance between slides in px;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'slide duration(ms)' ); ?></dt>
            <dd>
                <?php _e( 'this property specifies slides duration (in ms) to trigger swipe to the next/previous slide during long swipes;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'use fade effect' ); ?></dt>
            <dd>
                <?php _e( 'this property defines whether to enable / disable fade effect on sliding;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'use navigation' ); ?></dt>
            <dd>
                <?php _e( 'here you can define whether to Hide/Show the navigation arrows;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'indicates whether the arrows will fade in only on hover' ); ?></dt>
            <dd>
                <?php _e( 'this property specifies whether the arrows will fade in only on hover;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'use pagination' ); ?></dt>
            <dd>
                <?php _e( 'here you can define whether to Hide/Show bullet navigation on slides;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'use autoplay' ); ?></dt>
            <dd>
                <?php _e( 'this property specifies whether to enable / disable autoplaying for slides;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'display fullScreen button' ); ?></dt>
            <dd>
                <?php _e( 'here you can define whether to Hide/Show full screen button to display slider in full screen mode. It is not available in WordPress customizer preview;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'indicates if the slides will be shuffled' ); ?></dt>
            <dd>
                <?php _e( 'this property specifies whether to shuffle slides randomly. Disabled by default;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'use infinite scrolling' ); ?></dt>
            <dd>
                <?php _e( 'this property specifies whether to enable/disable infinite scrolling on sliding;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'display thumbnails' ); ?></dt>
            <dd>
                <?php _e( 'here you can define whether to Hide/Show slide thumbnails below the slider;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'display thumbnails arrows' ); ?></dt>
            <dd>
                <?php _e( 'here you can define whether to Hide/Show arrows navigation for thumbnails;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'set the position of the thumbnail scroller' ); ?></dt>
            <dd>
                <?php _e( 'this property sets the position of the thumbnail scroller. It is set to bottom by default.' ); ?>
            </dd>
        </dl>
    </li>
</ul>
