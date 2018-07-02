<div id="toc-page-layout" class="toc-id"></div>
<h3 id="page-layout"><?php _e( 'Page Layout' ); ?></h3>
<p><?php _e( 'Here you can select the layout pattern for the header, content and footer containers.' ); ?></p>
<?php
	get_customizer_sub_component(
		array(
			'page-layout',
			'header-container-type',
			'content-container-type',
			'footer-container-type',
			'container-width',
			'sidebar-width',
		)
	);
?>
<h5><?php _e( 'Header Type' ); ?></h5>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Boxed' ); ?></dt>
            <dd>
            	<?php _e( 'boxed layout will have fixed width and left/right indents.' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Full Width' ); ?></dt>
            <dd>
            	<?php _e( 'wide layout will fit window width.' ); ?>
            </dd>
        </dl>
    </li>

</ul>

<h5><?php _e( 'Content Type' ); ?></h5>

        <ul class="marked-list">
            <li>
                <dl class="inline-term">
                    <dt><?php _e( 'Boxed' ); ?></dt>
                    <dd>
                        <?php _e( 'boxed layout will have fixed width and left/right indents.' ); ?>
                    </dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt><?php _e( 'Full Width' ); ?></dt>
                    <dd>
                        <?php _e( 'wide layout will fit window width.' ); ?>
                    </dd>
                </dl>
            </li>

        </ul>

<h5><?php _e( 'Footer Type' ); ?></h5>


        <ul class="marked-list">
            <li>
                <dl class="inline-term">
                    <dt><?php _e( 'Boxed' ); ?></dt>
                    <dd>
                        <?php _e( 'boxed layout will have fixed width and left/right indents.' ); ?>
                    </dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt><?php _e( 'Full Width' ); ?></dt>
                    <dd>
                        <?php _e( 'wide layout will fit window width.' ); ?>
                    </dd>
                </dl>
            </li>

        </ul>

<h5><?php _e( 'Container Width (px)' ); ?></h5>

<p><?php _e( 'The width of main website container in pixels. ' ); ?></p>

<h5><?php _e( 'Sidebar Width' ); ?></h5>

<p><?php _e( 'The width ratio of the sidebar and main template container, can take two values: 1/3 or 1/4.' ); ?> </p>

<h5><?php _e( 'Main Box Color' ); ?></h5>

<p><?php _e( 'Choose the color for a main box.' ); ?> </p>

<h5><?php _e( 'Container Padding Bottom (px)' ); ?></h5>

<p><?php _e( 'The width of bottom content padding in pixels. ' ); ?></p>