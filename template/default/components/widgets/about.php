<div id="toc-about" class="toc-id"></div>
<h2 id="widgets"><?php _e( 'Widgets' ); ?></h2>
<h5>Widgets are basic components of a website, which can be placed to different widget areas, for e.g. to sidebar, header, footer, before or after content, or any other custom area. </h5>

<h5>Widgets have different functions and can be set and tuned up in <strong>Customizer > Widgets</strong> tab.</h5>

    <h3 id="about"><?php _e( 'About ' ); ?></h3>


	<p><?php _e( 'This widget is used to display information about your site.' ); ?></p>

<figure class="img-preview" style= "width:900px";><img src="<?php url_manager()->get_assets_url( 'assets/images/temp/about.png' ); ?>" alt="<?php _e( 'About' ); ?>"></figure>

	<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'title' ); ?></dt>
            <dd>
				<?php _e( 'widget\'s text title;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'logo' ); ?></dt>
            <dd>
				<?php _e( 'you can select a logo for the widget;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'enable tagline' ); ?> </dt>
            <dd>
				<?php _e( 'enable/disable tagline;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'content' ); ?></dt>
            <dd>
                <?php _e( 'add content to this field.' ); ?>
            </dd>
        </dl>
    </li>
</ul>
