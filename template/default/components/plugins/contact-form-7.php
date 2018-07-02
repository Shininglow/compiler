<article id="contact-form-7">
	<div id="toc-contact-form-7" class="toc-id"></div>
	<h3 id="contact-form-7"><?php _e( 'Contact form 7' ); ?></h3>

<p>
<?php _e( 'Contact form 7 plugin can manage multiple contact forms. It also lets you customize the form and the mail contents flexibly with simple markup.' ); ?></p>


<h4><?php _e( 'Displaying a Form' ); ?></h4>

<p><?php _e( 'Let’s start with displaying a form on your page. First, open the <strong>Contact > Contact Forms</strong> menu in your WordPress administration panel.' ); ?></p>
<p><?php _e( 'You can manage multiple contact forms there.' ); ?></p>

<pre class="unstyled" style= "width:900px; height:200px"; >
<?php assets_manager()->get_image( 'assets/images/contact-form-0.png', 'img-preview', _( 'About' ) ); ?>
</pre>


<p><?php _e( 'Just after installing the Contact Form 7 plugin, you’ll see a default form - <strong>Contact form 1</strong> and a code like this:' ); ?></p>
<pre class="unstyled" style= "background-color:#f9f9f9; width:900px; text-align: center;">
<h1></h1>
<pre class="prettyprint"> [contact-form-7 id="2526" title="Contact form 1"] </pre>
</pre>

<p><?php _e( 'Copy this code. Then open (<strong>Pages > Edit</strong>) of the page where you wish to place the contact form. A popular practice is creating a page named <strong>Contact</strong> for the contact form page. Paste the code you\'ve copied into the contents of the page.' ); ?></p>

<p><?php _e( 'Now your contact form setup is complete. Your site visitors can now find the form and start submitting messages to you.' ); ?></p>

<p><?php _e( 'Next, let’s see how you can customize your form and mail content.' ); ?></p>

<h4><?php _e( 'Customizing a Form' ); ?></h4>

<p><?php _e( 'Title for this contact form is just a label for a contact form and is used for administrative purposes only. You can use any title you like, e.g. <strong>Job Application Form</strong> and so on.' ); ?></p>

<pre class="unstyled" style= "width:900px"; >
<?php assets_manager()->get_image( 'assets/images/contact-form-1.png', 'img-preview', _( 'About' ) ); ?>
</pre>
<p><?php _e( 'In the form you can enter different tag generators. They can be generated automatically.' ); ?></p>
<ul>
<p><li><?php _e( '<strong>text</strong> - form-tag generator for text;' ); ?></li></p>
<p><li><?php _e( '<strong>email</strong> - form-tag generator for email;' ); ?></li></p>
<p><li><?php _e( '<strong>text</strong> - form-tag generator for text;' ); ?></li></p>
<p><li><?php _e( '<strong>tel</strong> - form-tag generator for phone numbers;' ); ?></li></p>
<p><li><?php _e( '<strong>date</strong> - form-tag generator for date input;' ); ?></li></p>
<p><li><?php _e( '<strong>text area</strong> - form-tag generator for text areas;' ); ?></li></p>
<p><li><?php _e( '<strong>drop-down menu</strong> - form-tag generator for drop-down menus;' ); ?></li></p>
<p><li><?php _e( '<strong>checkboxes</strong> - form-tag generator for adding chackboxes;' ); ?></li></p>
<p><li><?php _e( '<strong>acceptance</strong> - form-tag generator for creating acceptance checkbox;' ); ?></li></p>
<p><li><?php _e( '<strong>quiz</strong> - form-tag generator for creating a quiz;' ); ?></li></p>
<p><li><?php _e( '<strong>reCapthca</strong> - form-tag generator for adding a captcha;' ); ?></li></p>
<p><li><?php _e( '<strong>file</strong> - form-tag generator for adding files;' ); ?></li></p>
<p><li><?php _e( '<strong>submit</strong> - form-tag generator for creating submit form.' ); ?></li></p>
</ul>

<p><?php _e( 'You can also customize the form content using HTML and form tags.
Line breaks and blank lines in this field are automatically formatted with &lt;br/&gt; and &lt;p&gt; HTML tags.' ); ?> </p>

<p><?php _e( 'Tag generators (<strong>3</strong>). By using these tag generators, you can generate form-tags without knowledge of them.' ); ?></p>

<p><?php _e( 'For more information about form-tags, see <a href="http://contactform7.com/tag-syntax/"  target="_blank">How Tags Work</a>.' ); ?></p>

<h5><?php _e( 'Mail Tab' ); ?></h5>

<pre class="unstyled" style= "width:900px"; >
<?php assets_manager()->get_image( 'assets/images/contact-form-2.png', 'img-preview', _( 'About' ) ); ?>
</pre>

<p><?php _e( 'You can edit the mail template for the mail which is sent in response to a form submission. You can use <a href="http://contactform7.com/tag-syntax/#mail_tag"  target="_blank">mail-tags</a> in these fields.' ); ?></p>

<p><?php _e( 'An additional mail template is also available. It is called Mail(2) and its content can differ from the primary Mail template.' ); ?> </p>

<p><?php _e( 'For more information, see ' ); ?> <?php printf( _( '%1$sSetting Up Mail%2$s'), '<a href="http://contactform7.com/setting-up-mail/" target="_blank">', '</a>'); ?> <?php _e( 'page.' ); ?>
</p>

<h5><?php _e( 'Messages Tab' ); ?></h5>

<pre class="unstyled" style= "width:900px"; >
<?php assets_manager()->get_image( 'assets/images/contact-form-3.png', 'img-preview', _( 'About' ) ); ?>
</pre>

<p><?php _e( 'You can edit various kinds of messages, including <strong>Validation errors occurred,</strong> <strong>Please fill in the required field,</strong> etc.' ); ?></p>

<p><?php _e( 'Make sure that you enter only plain text here.' ); ?></p>


<blockquote class="alert alert-info">
	<p><?php _e( 'HTML tags and entities are not allowed in the message fields.' ); ?></p>
</blockquote>

<h5><?php _e( 'Additional Settings Tab' ); ?></h5>

<pre class="unstyled" style= "width:900px"; >
<?php assets_manager()->get_image( 'assets/images/contact-form-4.png', 'img-preview', _( 'About' ) ); ?>
</pre>

<p><?php _e( 'You can add customization code snippets here. For more details, see' ); ?>

<a href="https://wordpress.org/plugins/contact-form-7/"><?php _e( 'Contact Form 7.' ); ?></a></p>
</article>


