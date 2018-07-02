<article id="give">
    <div id="toc-give" class="toc-id"></div>
    <h3 id="events-list"><?php _e( 'Give Donation' ); ?></h3>

	<p>This widget displays the list of events with date, time, description, place and other informationon your site.</p>

<?php assets_manager()->get_image( 'assets/images/temp/give.png', 'img-preview', _( 'About' ) ); ?>

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
                set the number of events to display;
            </dd>
        </dl>
    </li>
     <li>
        <dl class="inline-term">
            <dt>show widget only if there are upcoming events:</dt>
            <dd>
                show/hide widget only if there are upcoming events;
            </dd>
        </dl>
    </li>
     <li>
        <dl class="inline-term">
            <dt>generate JSON-LD data</dt>
            <dd>
                on/off generate JSON-LD data.
            </dd>
        </dl>
    </li>
</ul>
