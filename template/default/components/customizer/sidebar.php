<div id="toc-sidebar" class="toc-id"></div>
<h3 id="sidebar"><?php _e( 'Sidebar' ); ?></h3>
<p><?php _e( 'Here you can configure the position of template sidebars.' ); ?></p>
<?php
	get_customizer_sub_component(
		array(
			'sidebar-position',
		)
	);
?>


<h5><?php _e( 'Sidebar Position:' ); ?></h5>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'no sidebars' ); ?></dt>
            <dd>
                <?php _e( 'no sidebar will be displayed;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'sidebar on left side' ); ?></dt>
            <dd>
                <?php _e( 'sidebar will be displayed on the left side;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'sidebar on right side' ); ?></dt>
            <dd>
                <?php _e( 'sidebar will be displayed on the right side.' ); ?>
            </dd>
        </dl>
    </li>
    </ul>
