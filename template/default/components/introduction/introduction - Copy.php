<h2 id="introduction"><?php _e( 'Introduction' ); ?></h2>
<h5 id="thank-you-for-purchasing-a-wordpress-template-this-documentation-consists-of-several-parts-and-covers-the-entire-process-of-installing-and-setting-up-a-wordpress-website-from-scratch"><?php _e( 'Thank you for purchasing a WordPress template. This documentation consists of several parts and covers the entire process of installing and setting up a WordPress website from scratch.' ); ?></h5>
<h3 id="what-is-wordpress-cms"><?php _e( 'What is WordPress CMS?' ); ?></h3>
<p><?php printf( _( 'WordPress is a free open-source blogging tool and content management system (CMS) based on PHP and MySQL. With its help you can create and administrate websites or powerful on-line applications without possessing any special technical skills. Due to the ease of use and flexibility, WordPress has become the most popular platform for website development. %1$sLearn More%2$s'), '<a href="http://wordpress.org/about/">', '</a>' ); ?></p>
<h3 id="what-is-a-wordpress-template"><?php _e( 'What is a WordPress Template?' ); ?></h3>
<p><?php _e( 'WordPress template is a theme for the WordPress CMS platform. You can easily change your website appearance by installing a new WordPress template in a few easy steps. Despite its simplicity, a WordPress template contains all the necessary source files that can be altered the way you need.' ); ?></p>
<h3 id="template-structure"><?php _e( 'Template Structure' ); ?></h3>
<p><?php _e( 'The template package includes several folders. Let’s check what’s inside:' ); ?></p>
<ul id="template-structure-list">
	<li><i class="fa fa-folder"></i><?php printf( _( '%1$s - contains screen-shots of the template. However, they are not required to edit the template.' ), '<strong>screenshots</strong>' ); ?></li>
	<li><i class="fa fa-folder"></i><?php printf( _( '%1$s - contains WordPress theme files.' ), '<strong>theme</strong>' ); ?>
		<ul>
			<li><i class="fa fa-file"></i><?php printf( _( '%1$s - archive with the theme (child theme). Contains all theme files. It must be installed through the WordPress extension manager.' ), '<strong>theme-name.zip</strong>' ); ?></li>
			<li><i class="fa fa-folder"></i><?php printf( _( '%1$s - contains the files that make the WordPress website look like on our live demo.' ), '<strong>sample_data</strong>' ); ?>
				<ul>
					<li><i class="fa fa-file"></i><?php printf( _( '%1$s - contains all themeplate sample data (posts, pages, categories, etc).' ), '<strong>content.xml</strong>' ); ?></li>
				</ul>
			</li>
			<li><i class="fa fa-folder"></i><?php printf( _( '%1$s - contains files that make the WordPress website look like on our live demo.' ), '<strong>manual_install</strong>' ); ?>
				<ul>
					<li><i class="fa fa-folder"></i><?php printf( _( '%1$s - contains theme images.' ), '<strong>uploads</strong>' ); ?></li>
					<li><i class="fa fa-file"></i><?php printf( _( '%1$s - database file (contains theme content).' ), '<strong>theme-name.sql</strong>' ); ?></li>
				</ul>
			</li>
			<li><i class="fa fa-file"></i><?php printf( _( '%1$s - contains documentation link information.' ), '<strong>documentation.txt</strong>' ); ?></li>
			<li><i class="fa fa-file"></i><?php printf( _( '%1$s - instructions on how to extract source files.' ), '<strong>info.txt</strong>' ); ?></li>
		</ul>
	</li>
</ul>
<h3 id="preparation"><?php _e( 'Preparation' ); ?></h3>
<h6 id="before-installing-a-wordpress-website-you-need-to-get-fully-prepared-we-recommend-you-to-get-the-following-aspects-covered"><?php _e( 'Before installing a WordPress website, you need to get fully prepared. We recommend you to get the following aspects covered:' ); ?></h6>
<h4 id="software"><?php _e( 'Software' ); ?></h4>
<p><?php _e( 'Before you start working with the WordPress template, you should download the required software. You can check the required software on the template preview page.' ); ?></p>
<ol>
	<li>
		<p><?php _e( 'First of all, you will need the right software to extract files from the password protected sources_#########.zip archive. You can use WinZip 9 or a later version (if you have Windows OS) or Stuffit Expander 10 or a later version (if you have Mac OS).' ); ?></p>
	</li>
	<li>
		<p><?php _e( 'You might also need Adobe Photoshop. It is used to edit the source .PSD files in case you need to change the graphic design and images of the template.' ); ?></p>
	</li>
	<li>
		<p><?php _e( 'To edit the source code of the template, you can use code editors like Adobe Dreamweaver, Notepad++, Sublime Text, etc.' ); ?></p>
	</li>
	<li>
		<p><?php _e( 'To upload the files to a hosting server, you will need an FTP manager like Total Commander, FileZilla, CuteFTP, etc.' ); ?></p>
	</li>
</ol>
<h4 id="hosting"><?php _e( 'Hosting' ); ?></h4>
<p><?php _e( 'Since WordPress CMS is a PHP/MySQL platform, you need to have the hosting server prepared for it.' ); ?></p>
<p><?php printf( _( 'In case you already have a hosting server, you need to check whether it is compatibile with %1$sWordPress hosting requirements%2$s or not. In other words, whether you can host a WordPress website with it.' ), '<a href="http://wordpress.org/about/requirements/">', '</a>' ); ?></p>
<p><?php _e( 'Our theme itself requires Apache or Nginx hosting servers with the following configuration settings:' ); ?></p>
<h5 id="recommended-configuration"><?php _e( 'Recommended Configuration' ); ?></h5>
<ol>
	<li>
		<p><?php printf( _( 'In  define the following:' ), '<strong>php.ini</strong>' ); ?></p>
<pre class="unstyled" style= "background-color:#f9f9f9; padding:20px 20px 20px 100px";>
			<li>‘max_execution_time’ =&gt; 60;</li>
			<li>‘memory_limit’ =&gt; 128;</li>
			<li>‘post_max_size’ =&gt; 8;</li>
			<li>‘upload_max_filesize’ =&gt; 8;</li>
			<li>‘max_input_time’ =&gt; 45;</li>
			<li>‘file_uploads’ =&gt; ‘on’;</li>
			<li>‘safe_mode’ =&gt; ‘off’.</li>
		</ul>
	</li>
	<li>In the file <strong>.htaccess</strong>, '‘php_value max_execution_time’ =&gt; 60.</li>
	<li>In the file <strong>wp-config.php</strong>, '‘set_time_limit’ =&gt; 60.</li>
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
	<li>PHP 5.4;</li>
	<li>MySQL 5.5 or later;</li>
	<li>mod_rewrite;</li>
	<li>php fopen;</li>
	<li>suPHP.</li>
</ol>
<p><?php _e( 'You can also install WordPress on your PC or laptop through a local server. You can use the following software to create a local server: <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong>, etc. All of these support WordPress and can be installed as a regular software.' ); ?></p>
<p><?php _e( 'These tutorials will help you set up the local server:' ); ?></p>
<ul>
	<li>
		<a href="https://www.templatemonster.com/help/how-to-install-appserv-web-development-environment.html"><?php _e( 'How to install AppServ web development environment;' ); ?></a>
	</li>
	<li>
		<a href="https://www.templatemonster.com/help/how-to-install-wamp-web-development-environment.html"><?php _e( 'How to install WAMP web development environment;' ); ?></a>
	</li>
	<li>
		<a href="https://www.templatemonster.com/help/how-to-install-xamp-web-development-environment.html"><?php _e( 'How to install XAMP web development environment.' ); ?></a>
	</li>
</ul>
