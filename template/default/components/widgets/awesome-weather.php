<article id="awesome-weather">
    <div id="toc-awesome-weather" class="toc-id"></div>
    <h3 id="awesome-weather"><?php _e( 'Awesome Weather' ); ?></h3>

	<p>This widget is used to display current weather according to your location on the website.</p>

<?php assets_manager()->get_image( 'assets/images/temp/awesome-weather.png', 'img-preview', _( 'About' ) ); ?>

    <ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>title</dt>
            <dd>
                set the title to be displayed in the sidebar;
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>show</dt>
            <dd>
                set your location to be displayed in the sidebar;
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'search for your location' ); ?> </dt>
            <dd>
                <?php _e( 'this property defines the location you want to show;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'OpenWeatherMap City ID' ); ?></dt>
            <dd>
                <?php _e( 'this property aloows to find the ID for your city;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Override Title' ); ?></dt>
            <dd>
                <?php _e( 'hide/show date the title.' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Background Color' ); ?></dt>
            <dd>
                <?php _e( 'This property defines whether to show or hide the Background Color of the Awesome Weather widget' ); ?>
            </dd>
        </dl>
    </li>
</ul>
