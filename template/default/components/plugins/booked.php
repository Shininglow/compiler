<article id="booked">
	<div id="toc-booked" class="toc-id"></div>
	<h3 id="booked"><?php _e( 'Booked Appointments' ); ?></h3>

 <p> <?php printf( _( '%1$sBooked%2$s'), '<a href="https://getbooked.io/" target="_blank">', '</a>'); ?>

 <?php _e( 'is a powerful and easy-to-use appointment booking plugin for WordPress.' ); ?></p>

<h4><?php _e( 'Create a Profile Page' ); ?></h4>

<p><?php _e( 'If you would like your customers to manage their own appointments and edit their profile, you\'ll want to activate the profile page. It\'s an easy process though, just follow the guide below:' ); ?></p>

<ol>
	<li><?php _e( 'Create a page and give it a title. <strong>Profile</strong> works too, but it can be whatever you want it to be.' ); ?></li>
	<li><?php _e( 'Add the <strong>[booked-login]</strong> shortcode to the page so your users can log in to view their profile.' ); ?></li>
	<li><?php _e( 'Go to the <strong>Booked Settings</strong> panel <strong>(Appointments > Settings)</strong> and choose this new page from the dropdown in the <strong>General Settings</strong> tab.' ); ?></li>
</ol>

<p><?php _e( 'Just after installing the Contact Form 7 plugin, you’ll see a default form named <strong>Contact form 1</strong> and a code like this:' ); ?></p>

<h5><?php _e( 'General Settings' ); ?></h5>

<ul>
	<li>
		<dl class="inline-term">
			<dt><?php _e( 'profile page' ); ?></dt>
			<dd><?php _e( 'as described above, you will choose the page you want to use for the profile from this dropdown;' ); ?></dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt><?php _e( 'time slot intervals' ); ?></dt>
			<dd><?php _e( 'when creating your default time slots (described below), you can choose the intervals at which you can choose your time slots. Just change it with this dropdown.' ); ?></dd>
		</dl>
	</li>
</ul>

<h5><?php _e( 'User Emails' ); ?></h5>

<p><?php _e( 'All emails can be turned off one by one by simply removing the content of the email in the fields. If nothing is there then no email is sent. All emails have special tokens you can use in place of actual content. This content is placed into the email when it gets sent. The tokens are listed above each email form.' ); ?></p>


<ul>
	<li>
		<dl class="inline-term">
			<dt><?php _e( 'registration' ); ?></dt>
			<dd><?php _e( 'this is the email that is sent to your new users, welcoming them to your website;' ); ?></dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt><?php _e( 'appointment confirmation' ); ?></dt>
			<dd><?php _e( 'this email is sent to the user when they book an appointment as a confirmation that the appointment has been submitted;' ); ?></dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt><?php _e( 'appointment approval' ); ?></dt>
			<dd><?php _e( 'this is the email that is sent to the user when their appointment is approved;' ); ?></dd>
		</dl>
	</li>
	<li>
		<dl class="inline-term">
			<dt><?php _e( 'appointment cancellation' ); ?></dt>
			<dd><?php _e( 'this is the email that is sent to the user if their appointment is cancelled by the website admin.' ); ?></dd>
		</dl>
	</li>
</ul>


<h5><?php _e( 'Appointment Creation' ); ?></h5>

<p><?php _e( 'The power of <strong>Booked</strong> is that your customers can pick and choose from available time slots when they would like to book their appointment. However, in some cases the admin needs this power. You can create appointments quickly and easily using the appointment calendar:' ); ?></p>


<ul>
	<li>
		<?php _e( 'click <strong>Appointments</strong> in the admin panel;' ); ?>
	</li>
	<li>
		<?php _e( 'you will see a big calendar, showing the current month (if the current date is wrong, please make sure the correct time zone is selected from <strong>Settings > General</strong>);' ); ?>
	</li>
	<li>
		<?php _e( 'pick the day on which you want to book the appointment;' ); ?>
	</li>
	<li>
		<?php _e( 'choose a time slot and click the <strong>New Appointment</strong> button;' ); ?>
	</li>
	<li>
		<?php _e( 'if this is a current customer, you can simply select them from the user dropdown;' ); ?>
	</li>
	<li>
		<?php _e( 'if this is a new customer, you can quickly add them as a new user by using the registration fields. The first name and email are the only required fields;' ); ?>
	</li>
	<li>
		<?php _e( 'when the appointment is booked, the user will get an email welcoming them to the site (with a username/password) as well as an appointment confirmation email. These emails can be customized/turned off from the <strong>Booked Settings</strong> panel.	' ); ?>
	</li>
</ul>

<h5><?php _e( 'Appointment Cancellation' ); ?></h5>

<p><?php _e( 'To cancel someone\'s appointment, simply find the appointment on the calendar and click the <strong> ×</strong> next to their name in the time slot from which you want to remove them.' ); ?></p>


<h4><?php _e( 'Shortcode' ); ?></h4>

<pre class="unstyled" style= "background-color:#f9f9f9; padding:5px 5px 5px 5px; line-height: 8px">

<pre class="prettyprint prettyprinted" style=""><span class="pun">[</span><span class="pln">booked-calendar year</span><span class="pun">=</span><span class="str">"2016"</span><span class="pln"> month</span><span class="pun">=</span><span class="str">"7"</span><span class="pln"> calendar</span><span class="pun">=</span><span class="str">"12"</span><span class="pln"> switcher</span><span class="pun">=</span><span class="str">"true"</span><span class="pun">]</span></pre>
</pre>

<h4><?php _e( 'Default Time Slots' ); ?></h4>

<p><?php _e( 'Setting your default time slots is at the heart of the Booked plugin. Each day is assigned to default time slots. For example, if your business is open on Monday – Friday from 8:00am – 4:00pm and you have 2 employees available every hour, you would create 2 times slots every hour from 8–4, Monday – Friday.' ); ?></p>

<h5><?php _e( 'Bulk Time Slot Entry' ); ?></h5>

<p><?php _e( 'To quickly add a bunch of time slots, you can use the Bulk time slot entry option:' ); ?></p>

<ul>
	<li>
		<?php _e( 'click <strong>Add</strong> at the top of the day you\'re adding time slots to;' ); ?>
	</li>
	<li>
		<?php _e( 'switch to the <strong>Bulk</strong> tab;' ); ?>
	</li>
	<li>
		<?php _e( 'for the <strong>Start time</strong>, select 8:00am;' ); ?>
	</li>
	<li>
		<?php _e( 'for the <strong>End time</strong>, select 4:00pm;' ); ?>
	</li>
	<li>
		<?php _e( 'leave the next dropdown as <strong>Every 1 hour</strong> to set your time slots every hour;' ); ?>
	</li>
	<li>
		<?php _e( 'choose <strong>2 time slots</strong> as the last option, and then click "<strong>Add</strong>;' ); ?>
	</li>
	<li>
		<?php _e( 'your available time slots for that day will then be added and your customers can start booking the appointments!' ); ?>
	</li>
</ul>

<h5><?php _e( 'Single Time Slot Entry' ); ?></h5>

<p><?php _e( 'Alternatively, you can add a single time slot to any day/time:' ); ?></p>

<ul>
	<li>
		<?php _e( 'click <strongAdd</strong> at the top of the day you\'re adding time slots to;' ); ?>
	</li>
	<li>
		<?php _e( 'choose a <strong>Start time</strong> and <strong>End time</strong> and then select how many time slots you want to add;' ); ?>
	</li>
	<li>
		<?php _e( 'click <strong>Add</strong> and that time slot entry will be added as a default for that day.' ); ?>
	</li>
</ul>


<h4><?php _e( 'Adding Custom Time Slots' ); ?></h4>

<ul>
	<li>
		<?php _e( 'go to the Booked Settings panel and then go to the <strong>Custom Time Slots</strong> tab;' ); ?>
	</li>
	<li>
		<?php _e( 'click the <strong>Add Date(s)</strong> button;' ); ?>
	</li>
	<li>
		<?php _e( 'choose the calendar you want to use (if applicable);' ); ?>
	</li>
	<li>
		<?php _e( 'choose the <strong>Start Date</strong>;' ); ?>
	</li>
	<li>
		<?php _e( 'if this is a one day setting, you can leave the <strong>End Date</strong> blank. If this is a date range, choose the <strong>End Date</strong>;' ); ?>
	</li>
	<li>
		<?php _e( 'to add a single time slot, click the <strong>+ Single Time Slot</strong> button. To bulk add time slots, click the <strong>+ Bulk Time Slots</strong> button;' ); ?>
	</li>
	<li>
		<?php _e( 'for single time slots, you\'ll choose how many available appointments for this time slot and then you\'ll choose the start and end times. Alternatively, you can check the <strong>All day</strong> checkbox to make this an all day time slot;' ); ?>
	</li>
	<li>
		<?php _e( 'to add bulk time slots, choose how many available appointments there are, choose a start and end time for the entire span of your day, choose the time between each slot if you need a 10 minute break for example. Then choose the interval for the time slots to be entered.' ); ?>
	</li>
</ul>

<p><?php _e( 'For more information, please visit' ); ?>

<?php printf( _( '%1$svideo tutorial.%2$s'), '<a href="https://www.youtube.com/watch?v=bD-BcS7p4vQ" target="_blank">', '</a>'); ?>
</p>

<h4><?php _e( 'Adding Vacation/Closed Dates' ); ?></h4>

<ul>
	<li>
		<?php _e( 'go to the Booked Settings panel and then go to the <strong>Custom Time Slots</strong> tab;' ); ?>
	</li>
	<li>
		<?php _e( 'click the <strong>Add Date(s)</strong> button;' ); ?>
	</li>
	<li>
		<?php _e( 'choose the calendar you want to use (if applicable);' ); ?>
	</li>
	<li>
		<?php _e( 'choose the <strong>Start Date</strong>;' ); ?>
	</li>
	<li>
		<?php _e( 'if this is a one day setting, you can leave the <strong>End Date</strong> blank. If this is a date range, choose the <strong>End Date</strong>;' ); ?>
	</li>
	<li>
		<?php _e( 'check the <strong>Disable appointments</strong> checkbox to make this a vacation/closed date.;' ); ?>
	</li>
	<li>
		<?php _e( 'that\'s it.' ); ?>
	</li>
</ol>

<p><?php _e( 'For more information, please visit' ); ?>

<?php printf( _( '%1$svideo tutorial%2$s'), '<a href="https://www.youtube.com/watch?v=0n5zdYoaHzc" target="_blank">', '</a>'); ?>.</p>

</article>
