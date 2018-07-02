<article id="the-events-calendar-shortcode">

<div id="toc-the-events-calendar-shortcode" class="toc-id"></div>
<h3 id="the-events-calendar-shortcode"><?php _e( 'The Events Calendar Shortcode' ); ?></h3>


	<p><?php _e( 'This plugin adds a shortcode for use with The Events Calendar Plugin.
    With this plugin, just add the shortcode on a page to display a list of your events. For example to show next 8 events in the category festival:' ); ?></p>

         <div class="alert alert-info">
        <?php _e( '[ecs-list-events cat="festival" limit="8"]' ); ?>
    </div>

<?php assets_manager()->get_image( 'assets/images/events-calendar-shortcodes.png', 'img-preview', _( 'About' ) ); ?>

<h4><?php _e( 'Shortcode Options' ); ?></h4>


    <ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt> <?php _e( 'basic shortcode' ); ?></dt>
            <dd>
                <?php _e( '[ecs-list-events];' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt> <?php _e( 'cat – represents single event category' ); ?></dt>
            <dd>
                 <?php _e( '[ecs-list-events cat=]\'festival\'];' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( ' limit – total number of events to show' ); ?></dt>
            <dd>
                <?php _e( '[ecs-list-events limit=\'3\'];' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'order – order of the events to be shown' ); ?></dt>
            <dd>
                <?php _e( 'value can be ‘ASC’ or ‘DESC’. Default is ‘ASC’. Order is based on event date. [ecs-list-events order=\'DESC\'];' ); ?>
            </dd>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'date – to show or hide date' ); ?></dt>
            <dd>
                <?php _e( ' value can be ‘true’ or ‘false’. Default is true. [ecs-list-events eventdetails=\'false\'];' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'venue – to show or hide the venue' ); ?></dt>
            <dd>
                <?php _e( 'value can be ‘true’ or ‘false’. Default is false. [ecs-list-events venue=\'true\'];' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'excerpt – to show or hide the excerpt and set excerpt length' ); ?></dt>
            <dd>
                <?php _e( '[ecs-list-events excerpt=\'true\'] displays excerpt with length 100;' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'thumb – to show or hide thumbnail image' ); ?></dt>
            <dd>
                <?php _e( '[ecs-list-events thumb=\'true\'] displays post thumbnail in default thumbnail dimension from media settings;' ); ?>

            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'message – message to show when there are no events' ); ?></dt>
            <dd>
                <?php _e( ' defaults to ‘There are no upcoming events at this time’;' ); ?>

            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'viewall – determines whether to show ‘View all events’ or not' ); ?></dt>
            <dd>
                <?php _e( 'values can be ‘true’ or ‘false’. Default to ‘true’ [ecs-list-events cat=\'festival\' limit=\'3\' order=\'DESC\' viewall=\'false\'];' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'contentorder – manage the order of content with commas' ); ?></dt>
            <dd>
               <?php _e( 'default to title, thumbnail, excerpt, date, venue. [ecs-list-events cat=\'festival\' limit=\'3\' order=\'DESC\' viewall=\'false\' contentorder=\'title, thumbnail, excerpt, date, venue\'];' ); ?>

            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'month – show only specific Month' ); ?></dt>
            <dd>
               <?php _e( ' type ‘current’ for displaying current month only [ecs-list-events cat=’festival’ month=’2015-06′];' ); ?>

            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'past – show outdated events' ); ?></dt>
            <dd>
                <?php _e( '[ecs-list-events cat=\'festival\' past=\'yes\'];' ); ?>
            </dd>
        </dl>
    </li>
    </li>
        <li>
        <dl class="inline-term">
            <dt><?php _e( 'key – order with start date' ); ?></dt>
            <dd>
                 <?php _e( '[ecs-list-events cat=\'festival\' key=\'start date\'].' ); ?>

            </dd>
        </dl>
    </li>
</ul>
</article>

