<article id="booked-appointment">
    <div id="toc-booked-appointment" class="toc-id"></div>
    <h3 id="booked-appointment"><?php _e( 'Booked Appointment' ); ?></h3>

	<p><?php _e( 'This widget is designed to display appointment calendar.' ); ?></p>


<?php assets_manager()->get_image( 'assets/images/temp/booked-appointment.png', 'img-preview', _( 'Booked calendar' ) ); ?>


    <ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt> <?php _e( 'title' ); ?></dt>
            <dd>
                <?php _e( 'enter the  title of the widget;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt> <?php _e( 'calendar to display' ); ?></dt>
            <dd>
                <?php _e( 'choose the calendar to display;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt> <?php _e( 'month' ); ?></dt>
            <dd>
                <?php _e( 'choose the month to display;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt> <?php _e( 'year' ); ?></dt>
            <dd><?php _e( 'choose the year to display.' ); ?>
            </dd>
        </dl>
    </li>
</ul></article>
