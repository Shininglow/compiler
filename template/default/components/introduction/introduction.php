<article>
<h2 id="introduction"><?php _e( 'Introduction' ); ?></h2>
<h5 id="thank-you-for-purchasing-a-wordpress-template-this-documentation-consists-of-several-parts-and-covers-the-entire-process-of-installing-and-setting-up-a-wordpress-website-from-scratch"><?php _e( 'Thank you for purchasing a WordPress template. This documentation consists of several parts and covers the entire process of installing and setting up a WordPress website from scratch.' ); ?></h5>


<figure class="img-preview" style= "width:900px";><a href="http://documentation.jetimpex.com/wordpress/quick-guide/" target="_blank"><img src="<?php url_manager()->get_assets_url( 'assets/images/banner-for-documents.png' ); ?>" alt="<?php _e( 'Banner' ); ?>"></a></figure>



<h3 id="what-is-wordpress-cms"><?php _e( 'What is WordPress CMS?' ); ?></h3>
<p><?php printf( _( 'WordPress is a free open-source blogging tool and content management system (CMS) based on PHP and MySQL. With its help you can create and administrate websites or powerful on-line applications without possessing any special technical skills. Due to the ease of use and flexibility, WordPress has become the most popular platform for website development. <a href="http://wordpress.org/about/" target="_blank">Learn More.</a> '), '' ); ?></p>


<h3 id="what-is-a-wordpress-template"><?php _e( 'What is a WordPress Template?' ); ?></h3>
<p><?php _e( 'WordPress template is a theme for the WordPress CMS platform. You can easily change your website appearance by installing a new WordPress template in a few easy steps. Despite its simplicity, a WordPress template contains all the necessary source files that can be altered the way you need.' ); ?></p>
<<<<<<< HEAD
=======



<h3 id="template-structure">Template Structure</h3>
<p>The template package includes several folders. Let’s check what’s inside:</p>
<ul id="template-structure-list">
	
	<li><i class="fa fa-folder"></i><strong>theme</strong> - contains WordPress theme files.		<ul>
			<li><i class="fa fa-file"></i><strong>theme-name.zip</strong> - archive with the theme (child theme). Contains all theme files. It must be installed through the WordPress extension manager.</li>
			<li><i class="fa fa-folder"></i><strong>sample_data</strong> - contains the files that make the WordPress website look like on our live demo.				<ul>
					<li><i class="fa fa-file"></i><strong>content.xml</strong> - contains all themeplate sample data (posts, pages, categories, etc).</li>
				</ul>
			</li>
			<li><i class="fa fa-folder"></i><strong>manual_install</strong> - contains files that make the WordPress website look like on our live demo.				<ul>
					<li><i class="fa fa-folder"></i><strong>uploads</strong> - contains theme images.</li>
					<li><i class="fa fa-file"></i><strong>theme-name.sql</strong> - database file (contains theme content).</li>
				</ul>
			</li>
			<li><i class="fa fa-file"></i><strong>documentation.txt</strong> - contains documentation link information.</li>
			<li><i class="fa fa-file"></i><strong>info.txt</strong> - instructions on how to extract source files.</li>
		</ul>
	</li>
</ul>
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc


<h3 id="preparation"><?php _e( 'Preparation' ); ?></h3>
<h6 id="before-installing-a-wordpress-website-you-need-to-get-fully-prepared-we-recommend-you-to-get-the-following-aspects-covered"><?php _e( 'Before installing a WordPress website, you need to get fully prepared. We recommend you to get the following aspects covered:' ); ?></h6>
<h4 id="software"><?php _e( 'Software' ); ?></h4>
<p><?php _e( 'Before you start working with the WordPress template, you should download the required software. You can check the required software on the template preview page.' ); ?></p>
<<<<<<< HEAD
	<ol><p><li>
=======
<ul><ul>
	<ul><p><li>
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc
		<?php _e( 'First of all, you will need the right software to extract files from the password protected sources_#########.zip archive. You can use WinZip 9 or a later version (if you have Windows OS) or Stuffit Expander 10 or a later version (if you have Mac OS).' ); ?></li></p>
	<p><li><?php _e( 'You might also need Adobe Photoshop. It is used to edit the source .PSD files in case you need to change the graphic design and images of the template.' ); ?></li></p>
	<p><li><?php _e( 'To edit the source code of the template, you can use code editors like Adobe Dreamweaver, Notepad++, Sublime Text, etc.' ); ?></li></p>
	<p><li><?php _e( 'To upload the files to a hosting server, you will need an FTP manager like Total Commander, FileZilla, CuteFTP, etc.' ); ?></li></p>
<<<<<<< HEAD
</ol>
=======
</ul></ul></ul>
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc

<h4 id="hosting"><?php _e( 'Hosting' ); ?></h4>
<p><?php _e( 'Since WordPress CMS is a PHP/MySQL platform, you need to have the hosting server prepared for it.' ); ?></p>
<p><?php printf( _( 'In case you already have a hosting server, you need to check whether it is compatibile with <a href="http://wordpress.org/about/requirements/" target="_blank">WordPress hosting requirements</a> '), '' ); ?>or not. In other words, whether you can host a WordPress website with it.</p>

<p><?php _e( 'Our theme itself requires Apache or Nginx hosting servers with the following configuration settings:' ); ?></p>
<h5 id="recommended-configuration"><?php _e( 'Recommended Configuration' ); ?></h5>
<ol>
	<li>
<<<<<<< HEAD
		<p><?php printf( _( 'In  define the following:' ), '<strong>php.ini</strong>' ); ?></p>	</li>
		<p></p>
=======
		<p><?php printf( _( 'In  define the following:' ), '<strong>php.ini</strong>' ); ?></p>
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc

<pre class="unstyled" style="background-color:#f9f9f9; padding:5px 5px 5px 20px; line-height: 2px; height: 380px;"><ul>
<ul>
<h1></h1>
					<p>‘max_execution_time’ =&gt; 60;</p>
					<p>‘memory_limit’ =&gt; 128;</p>
					<p>‘post_max_size’ =&gt; 8;</p>
					<p>‘upload_max_filesize’ =&gt; 8;</p>
					<p>‘max_input_time’ =&gt; 45;</p>
					<p>‘file_uploads’ =&gt; ‘on’;</p>
					<p>‘safe_mode’ =&gt; ‘off’.</p>
	<p>In the file <strong>.htaccess</strong>, ‘php_value max_execution_time’ =&gt; 60.</p>
</pre>
	<li>
		<p><?php _e( '50 MB of disk space.' ); ?></p>
	</li>
	<li>
		<p><?php _e( 'Memory limit per process: 64mb (128mb or more recommended).' ); ?></p>
	</li>
</ul>
<h5 id="php-and-mysql"><?php _e( 'PHP and MySQL;' ); ?></h5>
<p><?php _e( 'Minimal required version of PHP is 5.2.4 and MySQL 5. PHP 5.2 is already not safe as contains critical vulnerabilities that can be used to harm your website. Some Theme extensions will not work with PHP 5.2 and require version 5.4 or later.' ); ?></p>
<p><?php _e( 'Recommended settings are:' ); ?></p>
<ol>
<<<<<<< HEAD
	<li>PHP 5.4;</li>
	<li>MySQL 5.5 or later;</li>
	<li>mod_rewrite;</li>
	<li>php fopen;</li>
	<li>suPHP.</li>
</ol>
<p><?php _e( 'You can also install WordPress on your PC or laptop through a local server. You can use the following software to create a local server: <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong>, etc. All of these support WordPress and can be installed as a regular software.' ); ?></p>
<p><?php _e( 'These tutorials will help you set up the local server:' ); ?></p>
<p>
		1. <a href="https://www.templatemonster.com/help/how-to-install-appserv-web-development-environment.html"><?php _e( 'How to install AppServ web development environment;' ); ?></a>
</p><p>
		2. <a href="https://www.templatemonster.com/help/how-to-install-wamp-web-development-environment.html"><?php _e( 'How to install WAMP web development environment;' ); ?></a>
</p><p>
		3. <a href="https://www.templatemonster.com/help/how-to-install-xamp-web-development-environment.html"><?php _e( 'How to install XAMP web development environment.' ); ?></a>
</p>
</article>
=======
	<li> PHP 5.4;</li>
	<li> MySQL 5.5 or later;</li>
	<li> mod_rewrite;</li>
	<li> php fopen;</li>
	<li> suPHP.</li>
</ol>

<p><?php _e( 'You can also install WordPress on your PC or laptop through a local server. You can use the following software to create a local server: <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong>, etc. All of these support WordPress and can be installed as a regular software.' ); ?></p>
<p><?php _e( 'These tutorials will help you set up the local server:' ); ?></p>
<ol>
	<li>
		<a href="https://jetimpex.com/wordpress/support/knowledge-base/app-serv-web-development-environment-installation/" target="_blank">How to install AppServ web development environment;</a>
		
	</li>
	<li>
		<a href="https://jetimpex.com/wordpress/support/knowledge-base/wamp-web-development-environment-installation/"target="_blank">How to install WAMP web development environment;</a>

	</li>
	<li>
		<a href="https://jetimpex.com/wordpress/support/knowledge-base/xamp-web-development-environment-installation/""target="_blank">How to install XAMP web development environment.</a>


	</li>
	</article>
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc

