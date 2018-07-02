<article id="tm-dashboard">
    <div id="toc-tm-dashboard" class="toc-id"></div>
    <h3 id="tm-dashboard"><?php _e( 'Jetimpex Dashboard' ); ?></h3>

<p>
	<?php _e( 'Jetimpex Dashboard is a service plugin. It will help you to update and backup template version easily. ' ); ?>
</p>

<p><?php _e( 'After plugin installation it adds two new blocks: <strong>Dashdoard</strong> and <strong>Updates</strong>.' ); ?></p>

<pre class="unstyled" style= "width:900px; height:100px"; >
<?php assets_manager()->get_image( 'assets/images/tm-dashboard.png', 'img-preview', _( 'About' ) ); ?>
</pre>

<h4><?php _e( 'Dashboard' ); ?></h4>

<p>
    <?php _e( 'In this section you can find various information about:' ); ?>
</p>
<pre class="unstyled" style= "width:900px; height:820px"; >
<?php assets_manager()->get_image( 'assets/images/sys-info.png', 'img-preview', _( 'About' ) ); ?>
</pre>


<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'system information' ); ?></dt>
            <dd>
                <?php _e( 'here you can see your site URL, home URL, and multisite information;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'theme' ); ?></dt>
            <dd>
                <?php _e( 'here you can see your current theme ID, name, version, and whether you are using a child theme;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'server' ); ?></dt>
            <dd>
                <?php _e( 'here you can see server memory, post max size, upload max filesize, max input time and max execution time;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'active plugins' ); ?></dt>
            <dd>
                 <?php _e( 'here you can see your active plugin names;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'installed themes' ); ?></dt>
            <dd>
                <?php _e( 'here you can see the name of your installed theme or the list of installen themes;' ); ?>
            </dd>
        </dl>
    </li>
</ul>
<pre class="unstyled" style= "width:900px;" >
<?php assets_manager()->get_image( 'assets/images/helpful.png', 'img-preview', _( 'About' ) ); ?>
</pre>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'helpful links' ); ?></dt>
            <dd>
                <?php _e( 'here you can find some helpful links which can guide you;' ); ?>
            </dd>
        </dl>
    </li>
</ul>
<pre class="unstyled" style= "width:900px;" >
<?php assets_manager()->get_image( 'assets/images/recplug.png', 'img-preview', _( 'About' ) ); ?>
</pre>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'recommended plugins' ); ?></dt>
            <dd>
                <?php _e( 'in this block you\'ll see a list of recommended plugins for your current theme, and you can install the missing ones easily.' ); ?>
            </dd>
        </dl>
    </li>
</ul>


<h4><?php _e( 'Updates' ); ?></h4>

<p><?php _e( 'If you want to get your theme updates you have to registrate your template. Please, enter the order ID and Template ID and click on <strong>SUBMIT</strong> button. When new updates will be available you will get a notification in your admin panel. Be aware that you need to fill in both fields in order to get fresh updates.' ); ?></p>
<pre class="unstyled" style= "width:800px;" >
<?php assets_manager()->get_image( 'assets/images/updates.png', 'img-preview', _( 'About' ) ); ?>
</pre>


<h4><?php _e( 'Backup' ); ?></h4>

<p><?php _e( 'This function allows you to create backups of your theme at will.
To make a backup you just need to press the button <strong>Backup Theme</strong> and a backup will be made instantly.' ); ?></p>

<p>
<?php _e( 'There is also a variety of settings for backups. Here they are:' ); ?></p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'backup before update' ); ?></dt>
            <dd>
                <?php _e( 'an option enables backup before update, in this case a backup is made automatically right before the theme update changes will take place;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'scheduled Backup' ); ?></dt>
            <dd>
                <?php _e( 'here you can enable a sheduled backup;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'backup' ); ?></dt>
            <dd>
                 <?php _e( 'in this field you can set the specific frequency when the backup is to be made;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'time of backup' ); ?></dt>
            <dd>
                <?php _e( 'here you can set particular time for backup;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'number of backup copies' ); ?></dt>
            <dd>
                <?php _e( 'here you can set how many backup copies are to be made, the setting will define only the number of automatically made backups, you still can make as many backups manually as you need to.' ); ?>
            </dd>
        </dl>
    </li>
   </ul>

<pre class="unstyled" style= "width:900px;" >
<?php assets_manager()->get_image( 'assets/images/dashboard-backup.png', 'img-preview', _( 'About' ) ); ?>
</pre>


<p> <?php _e( 'When all the changes are made you can save your settings by pressing the button <strong>Save Options</strong>. That\'s it!' ); ?></p>



<h4><?php _e( 'Backup List' ); ?></h4>

<p> <?php _e( 'To view the list of existing backups and make changes in it you need to view <strong>Updates</strong> tab on your <strong>Administration Panel</strong>. At the bottom of the page you\'ll see the list where you can view backup copies of your theme, made both automatically and manually. ' ); ?></p>

<ul>

<p><li><?php _e( 'The note <strong>A</strong> on the line with backup means that this backup was made automatically.' ); ?></li></p>
<p><li><?php _e( '<strong>Backup Date</strong> shows the date and time when the backup was made.' ); ?></li></p>
<p><li><?php _e( '<strong>Version</strong> shows the version of your theme backup.' ); ?></li></p>
</ul>

<p> <?php _e( 'You can also restore, download and delete your backups.' ); ?></p>

<pre class="unstyled" style= "width:1000px;" >
<?php assets_manager()->get_image( 'assets/images/list-backup.png', 'img-preview', _( 'About' ) ); ?>
</pre>


</article>
