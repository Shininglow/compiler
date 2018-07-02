<div id="toc-bbpress-members" class="toc-id"></div>
    <h3 id="bbpress-members"><?php _e( 'BuddyPress Members' ); ?></h3>

	<p><?php _e( 'This widget is designed to show the list of recently active, popular, and newest members.' ); ?></p>

<figure class="img-preview" style= "width:900px";><img src="<?php url_manager()->get_assets_url( 'assets/images/temp/buddypress-members.png' ); ?>" alt="<?php _e( 'Cart' ); ?>"></figure>

	<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'title' ); ?></dt>
            <dd>
				<?php _e( 'set the title of the widget.' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'link widget title to Members directory' ); ?></dt>
            <dd>
                <?php _e( 'set the title to be displayed in the sidebar;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'max members to show' ); ?></dt>
            <dd>
                <?php _e( 'set the number of members to show;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'default members to show' ); ?></dt>
            <dd>
                <?php _e( 'active, newest or popular.' ); ?>
            </dd>
        </dl>
    </li>

</ul>
