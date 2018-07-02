<div id="toc-wordpress-engine-installation" class="toc-id"></div>

<h2 id="template-installation"><?php _e( 'Template Installation' ); ?></h2>

<p><?php printf( _( 'JetImpex theme is built as a WordPress theme, so you need to have WordPress engine installed first. If you have not installed it yet, please refer to the %sWordPress Installation%s section.' ), '<a href="#wordpress-installation">', '</a>' ); ?></p>

<h3 id="wordpress-installation"><?php _e( 'WordPress Installation' ); ?></h3>

<p><?php _e( 'Download the required WordPress version. You can check which release is required on the template preview page in the requirements list. Make sure you download the correct version.' ); ?></p>

<p><?php printf( _( 'You can download the WordPress platform on the official WordPress.org website: %sDownload WordPress%s. If you need another release, follow this link: %sWordPress versions archive%s. Once the platform is downloaded, you’ll need to unpack the files. You can use any file archiver that supports ZIP format to unpack the %sZIP%s file.' ), '<a href="http://wordpress.org/download/">', '</a>', '<a href="http://wordpress.org/download/release-archive/"><strong>', '</strong></a>', '<strong>', '</strong>' ); ?></p>

<p><?php printf( _( 'These tutorials will show you how to unpack the archived files, if you have %sWindows OS (using WinZip)%s and if you have %sMAC OS (using StuffitExpander):%s' ), '<strong>', '</strong>', '<strong>', '</strong>' ); ?></p>

<ul>
	<li><a href="https://www.templatemonster.com/help/extract-archived-files-mac-os.html"><?php _e( 'Unpacking archive (MAC OS);' ); ?></a></li>
	<li><a href="https://www.templatemonster.com/help/extract-archived-files-windows-os.html"><?php _e( 'Unpacking archive (Windows OS);' ); ?></a></li>
	<li><a href="https://www.templatemonster.com/help/downloading-and-installing-winzip.html"><?php _e( 'How to download and install WinZip;' ); ?></a></li>
	<li><a href="https://www.templatemonster.com/help/how-unzip-template-mac.html"><?php _e( 'How to unpack the template (MAC OS);' ); ?></a></li>
	<li><a href="https://www.templatemonster.com/help/how-unzip-template-mac.html"><?php _e( 'How to unpack the template (Windows OS).' ); ?></a></li>
</ul>

<p><?php _e( 'Once the WordPress platform files and folders are unpacked, you need to upload them to the hosting server.' ); ?></p>

<p><?php printf( _( 'Upload the files and folders to the server into the %sPUBLIC_HTML%s or %sWWW%s directory.' ), '<strong>', '</strong>', '<strong>', '</strong>' ); ?></p>

<blockquote class="alert alert-info">
	<p><?php _e( 'If you can’t find the PUBLIC_HTML or WWW directory on your hosting server, contact your hosting provider and find out where you should upload the website files to.' ); ?></p>
</blockquote>

<p><?php _e( 'You can also take a look at these tutorials that give detailed information on how to upload the files to a hosting server:' ); ?></p>

<ul>
	<li><a href="https://www.templatemonster.com/help/how-upload-files-server-2.html"><?php _e( 'How to upload the files to server;' ); ?></a></li>
	<li><a href="https://www.templatemonster.com/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html"><?php _e( 'How to upload the files to server using cPanel (WebHost Manager, WHM).' ); ?></a></li>
</ul>

<p><?php _e( 'Next, you need to create a database for the WordPress platform.' ); ?></p>

<p><?php _e( 'You can create it using the database management tool in the hosting cpanel (usually it is PhpMyAdmin). With the help of phpMyAdmin you can create a new database in 3 simple steps (check the slides below):' ); ?></p>

	<li><?php _e( 'Click the Database button at the top navigation menu to see the list of databases.' ); ?></li>

<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/database-create-1.jpg' ); ?>" alt="<?php _e( 'phpMyAdmin Welcome Screen' ); ?>"></figure>

	<li><?php _e( 'Enter database name in the <strong>Create new database</strong> field.' ); ?></li>

<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/database-create-2.jpg' ); ?>" alt="<?php _e( 'phpMyAdmin Databases List Screen' ); ?>"></figure>

	<li><?php _e( 'Click the <strong>Create</strong> button.' ); ?></li>

<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/database-create-3.jpg' ); ?>" alt="<?php _e( 'phpMyAdmin Databases List Screen' ); ?>"></figure>

<p><?php _e( 'You will see the new database in the list now. Click on its name to access it.' ); ?></p>

<blockquote class="alert alert-info">
	<p><?php _e( 'If you face any difficulties while creating the database, contact your hosting provider for tech support.' ); ?></p>
</blockquote>

<p><?php _e( 'You can also check the following tutorials:' ); ?></p>

<ul>
	<li><a href="https://www.templatemonster.com/help/how-create-database.html"><?php _e( 'How to create database;' ); ?></a></li>
	<li><a href="https://www.templatemonster.com/help/how-to-create-mysql-database-with-godaddy.html"><?php _e( 'How to create MySQL database with GoDaddy.' ); ?></a></li>
</ul>

<p><?php _e( 'Enter the WordPress directory path into the browser address bar and click Enter. WordPress installation will begin.' ); ?></p>

<h4 id="creating-the-configuration-file"><?php _e( 'Creating the Configuration File' ); ?></h4>

<p><?php _e( 'WordPress installation screen will inform you that the configuration file is missing. Click <strong>Create Configuration File</strong> to create it.' ); ?></p>

<h4 id="database-details"><?php _e( 'Database Details' ); ?></h4>

<blockquote class="alert alert-info">
	<p><?php _e( 'Please note that the prefix of WordPress database tables should be wp_.' ); ?></p>
</blockquote>

<p><?php _e( 'You need to enter the WordPress database connection details here.' ); ?></p>

<h4 id="website-details"><?php _e( 'Website Details' ); ?></h4>

<p><?php _e( 'You need to enter the next details:' ); ?></p>

<ol>
	<li><?php _e( 'website name;' ); ?></li>
	<li><?php _e( 'administrator login and password;' ); ?></li>
	<li><?php _e( 'website e-mail.' ); ?></li>
</ol>

<p><?php _e( 'Click <strong>Install WordPress</strong>.' ); ?></p>

<p><?php _e( 'If you have entered the correct details, you will see a successful installation message and the WordPress dashboard access button.' ); ?></p>

<p><?php _e( 'You can also take a look at these video tutorials:' ); ?></p>

<ul>
	<li><a href="https://www.templatemonster.com/help/WordPress-how-to-install-the-engine-to-hostgator-server-manual-installation.html"><?php _e( 'How to install WordPress engine to HostGator (manual installation);' ); ?></a></li>
	<li><a href="https://www.templatemonster.com/help/WordPress-how-to-install-the-engine-to-bluehost-server-manual-installation.html"><?php _e( 'How to install WordPress engine to Bluehost (manual installation);' ); ?></a></li>
	<li><a href="https://www.templatemonster.com/help/WordPress-how-to-install-the-engine-to-siteground-server-manual-installation.html"><?php _e( 'How to install WordPress engine to SiteGround (manual installation);' ); ?></a></li>
	<li><a href="https://www.templatemonster.com/help/how-to-install-WordPress-to-godaddy-server-manual-installation.html"><?php _e( 'How to install WordPress engine to GoDaddy (manual installation);' ); ?></a></li>
	<li><a href="https://www.templatemonster.com/help/WordPress-how-to-install-the-engine-to-just-host-server-manual-installation.html"><?php _e( 'How to install JustHost engine to Bluehost (manual installation).' ); ?></a></li>
</ul>

<div id="toc-manual-theme-installation" class="toc-id"></div>

<h3 id="manual-installation"><?php _e( 'Cherry Wizard Theme Installation' ); ?></h3>

<p>
    <?php _e( 'If you have Cherry Theme Wizard plugin installed you can proceed to the first step of your theme installation. The process is rather quick and easy, it won’t take long.' ); ?>
</p>

<p>
    <?php _e( 'Go to the <strong>Administration panel > Tools > Cherry Theme Wizard</strong> and a window will appear offering you to install a new theme. To start the installation process fill in the fields <strong>Template ID</strong> and <strong> Order ID </strong>.' ); ?>
</p>

<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/2.png' ); ?>" alt="<?php _e( 'About' ); ?>"></figure>


<p>
    <?php _e( 'The uploading and installation process will begin. It may take some time, so wait for several minutes before the theme will be completely installed to your Wordpress Engine.' ); ?>
</p>

<p>
    <?php _e( 'Then you’ll see a new window that will offer you to choose whether you want to automatically generate a Child Theme, or you would rather use Parent Theme.' ); ?>
</p>

<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/3.png' ); ?>" alt="<?php _e( 'About' ); ?>"></figure>

<p>
    <?php _e( 'A Child Theme affords you to customize it without worrying about occasionally damaging it. All the changes will be made and saved in the Child Theme.Installing a Child Theme is a safe way to do the further customization.' ); ?>
<p>

<p>
    <?php _e( 'When the Child Theme is generated you’ll see a window informing you that the theme was successfully installed.' ); ?>
</p>

<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/4.png' ); ?>" alt="<?php _e( 'About' ); ?>"></figure>








<div id="toc-install-with-cherry-wizard" class="toc-id"></div>

<h3 id="install-with-cherry-wizard"><?php _e( 'Cherry Wizard Plugins Installation' ); ?></h3>


<p>
    <?php _e( 'The second step includes making all the necessary preparations and installing plugins. It is important to install all the needed plugins for your theme to make it work correctly and enjoy all of its advantages.' ); ?>
</p>

<div class="alert alert-info">
    <?php _e( 'Notice: the plugins are installed with the help of TM Wizard Plugin, which comes together with your theme, you don’t need to download or activate it separately. Just go straight to the plugins installation step.' ); ?>
</div>

<p>
    <?php _e( 'Right after the theme was installed you’ll see a new window offering you to select skin and start installation. Select the skin you prefer the most, view the list of recommended plugins and proceed further.' ); ?>
</p>

 <figure class="img-polaroid">
        <img src="projects/cherry-wizard/img/images/5.png" alt="" >
</figure>

<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/5.png' ); ?>" alt="<?php _e( 'About' ); ?>"></figure>

<p><?php _e( 'The next step will offer you to choose how you want your demo content to be installed. It can be installed in two ways:' ); ?><p>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'full version' ); ?></dt>
            <dd>
                <?php _e( 'contains the entire amount of sample data to be used in the template, it is recommended to install it if you have a premium hosting plan;' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'lite version' ); ?></dt>
            <dd>
                <?php _e( 'lite version - contains optimized amount of sample data with the smaller number of posts and images, it is recommended to use it if you have an entry-level hosting plan.' ); ?>
            </dd>
        </dl>
    </li>
</ul>

<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/6.png' ); ?>" alt="<?php _e( 'About' ); ?>"></figure>

<p>
    <?php _e( 'After that you’ll be led to <strong>Configure Plugins</strong> menu, where you’ll be able to view the list of plugins before installing them to your theme.' ); ?>
</p>

<p><?php _e( 'The list usually contains such plugins categories:' ); ?> </p>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'required plugins' ); ?></dt>
            <dd>
                <?php _e( 'the category contains the minimal list of service plugins needed for your theme;' ); ?>
            </dd>
        </dl>
    </li>

     <li>
        <dl class="inline-term">
            <dt><?php _e( 'recommended plugins' ); ?></dt>
            <dd>
                <?php _e( 'in the category you can view the recommended set of basic plugins needed to display the template’s pages. If you don’t install them, some sections of your website will not be displayed;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'extra plugins' ); ?></dt>
            <dd>
                <?php _e( 'the category lists the plugins that are available to use together with your template and may be needed for the additional functionality of your theme.' ); ?>
            </dd>
        </dl>
    </li>
</ul>

<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/7.png' ); ?>" alt="<?php _e( 'About' ); ?>"></figure>


<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/8.png' ); ?>" alt="<?php _e( 'About' ); ?>"></figure>

<p>
    <?php _e( 'After you’ve chosen the plugin categories you want to install, you will be immediately led to the installation. You’ll be able to monitor it by observing the indicators and the process bar.' ); ?>
</p>

<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/9.png' ); ?>" alt="<?php _e( 'About' ); ?>"></figure>

<p><?php _e( 'When the installation will be complete you’ll see the latter notice:' ); ?> </p>

<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/10.png' ); ?>" alt="<?php _e( 'About' ); ?>"></figure>








<div id="toc-install-content-wizard" class="toc-id"></div>

<h3 id="install-content-wizard"><?php _e( 'Cherry Wizard Demo Content Installation' ); ?></h3>

<p>
    <?php _e( 'The next step will be to install demo content that comes with your theme. It usually adds to your theme the necessary content, such as images, posts and other sample data.' ); ?>
</p>

<p><?php _e( 'A window will appear offering you to:' ); ?></p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'append demo content to the existing content' ); ?></dt>
            <dd>
                <?php _e( 'this way the new sample data will be added to the existing one;' ); ?>
            </dd>
        </dl>
    </li>

     <li>
        <dl class="inline-term">
            <dt><?php _e( 'replace the existing content with demo content' ); ?></dt>
            <dd>
                <?php _e( 'this option will delete your existing content and will install the new sample data instead of it;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'skip demo content installation' ); ?></dt>
            <dd>
                <?php _e( 'choose this option if you don’t want to install demo content and you want to keep the already existing one.' ); ?>
            </dd>
        </dl>
    </li>
</ul>

<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/11.png' ); ?>" alt="<?php _e( 'About' ); ?>"></figure>

<p>
    <?php _e( 'If you’ve chosen to install the demo content, the next step will lead you to the <strong> Importing Sample Data</strong> window, where you’ll need to enter your password to start importing (it is the password you usually use when you go to Administration Panel).' ); ?>
</p>

<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/12.png' ); ?>" alt="<?php _e( 'About' ); ?>"></figure>

<p>
    <?php _e( 'After that you’ll be able to monitor the process of importing sample data.
    You’ll see the bars that will show the progress.' ); ?>
</p>

<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/13.png' ); ?>" alt="<?php _e( 'About' ); ?>"></figure>

<p>
    <?php _e( 'When the demo content will be successfully installed you’ll see the latter notice.' ); ?>
</p>

<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/14.png' ); ?>" alt="<?php _e( 'About' ); ?>"></figure>

<p><?php _e( 'Now you can view your website or proceed to the further customization!' ); ?> </p>




























<div class="alert alert-warning">
    <br>
      <?php _e( ' You can also install the theme manually. If you don\'t want to use Cherry Wizard just follow the steps listed below.' ); ?>
    </p>
</div>

<p><?php _e( '1. Extract the template package.' ); ?></p>

<?php assets_manager()->get_image( 'assets/images/add-theme-dashboard.png', 'img-preview', _( 'About' ) ); ?>

<p><?php _e( '2. Navigate to the <strong>Appearance &gt; Themes section</strong> at the admin panel of the site and open the <strong>theme</strong> folder.' ); ?></p>

<p><?php _e( '3. Locate the archive named as theme-name.zip and install the theme by pressing <strong>Install Now</strong>.' ); ?></p>

<?php assets_manager()->get_image( 'assets/images/add-theme-select.png', 'img-preview', _( 'About' ) ); ?>

<p><?php _e( '4. Next please press on <strong>Activate</strong> link.' ); ?></p>

<?php assets_manager()->get_image( 'assets/images/add-theme-success.png', 'img-preview', _( 'About' ) ); ?>















<div id="toc-upload-via-ftp" class="toc-id"></div>
<h3 id="upload-via-ftp"><?php _e( 'Upload via FTP' ); ?></h3>
<p><?php _e( 'To use this method, you need to have access to your WordPress site files on FTP through the File Manager of your hosting control panel or an FTP client like Filezilla, CuteFTP, Total Commander, etc.' ); ?></p>
<ol>
	<li><?php printf( _( 'Unzip the %stheme-name.zip%s files to any folder on your hard drive (first, right-click each of the .zip files, select Unzip to… %stheme-name%s respectively, so you get the one folder called theme-name).' ), '<strong>', '</strong>', '<strong>', '</strong>' ); ?></li>
	<li><?php printf( _( 'Upload the %stheme-name%s folder to the %s/wp-content/themes/%s directory on your FTP server.' ), '<strong>', '</strong>', '<strong>', '</strong>' ); ?></li>
	<li><?php _e( 'Log in to your WordPress admin panel (add /wp-admin after your domain name in the browser address bar).' ); ?></li>
	<li><?php printf( _( 'Go to the menu %s Appearance &gt; Themes %s.' ), '<strong>', '</strong>' ); ?></li>
	<li><?php printf( _( 'Under the %sAvailable Themes%s section find %stheme-name%s and activate it by clicking the %sActivate%s button.' ), '<strong>', '</strong>', '<strong>', '</strong>', '<strong>', '</strong>' ); ?></li>
</ol>




<h4><?php _e( 'Manual Plugin Installation' ); ?></h4>

<p><?php _e( 'If you need to install plugins manually, you can do it this way.' ); ?></p>

<p><li><?php _e( 'Install plugins from <strong>theme/(your theme name)/assets/includes/plugins</strong>.' ); ?></li></p>


<p><li><?php _e( 'go to ' ); ?>

<a href="https://wordpress.org/"><?php _e( 'Wordpress.org' ); ?></a>

<?php _e( 'and download the necessary plugins;' ); ?></li></p>

<p><li><?php _e( 'go to <strong> plugins</strong> tab on your administration panel and click on <strong> add new</strong> button; ' ); ?></li></p>

<?php assets_manager()->get_image( 'assets/images/pl1.png', 'img-preview', _( 'About' ) ); ?>

<p><li><?php _e( 'you will see the the search field that can help you search the necessary plugins by keywords, you can install them from your administration panel at once;' ); ?></li></p>

<?php assets_manager()->get_image( 'assets/images/pl3.png', 'img-preview', _( 'About' ) ); ?>

<p><li><?php _e( 'you can also upload the plugins from your PC if you already have them on your computer in .zip format. Just click on <strong> upload plugin</strong> button and choose the needed files. ' ); ?></li></p>

<?php assets_manager()->get_image( 'assets/images/pl2.png', 'img-preview', _( 'About' ) ); ?>




<h4 id="manual-sample-data-installation"><?php _e( 'Manual sample data installation' ); ?></h4>
<h5 id="for-installing-the-sample-data-manualy-please-follow-the-instructions-listed-below"><?php _e( 'For installing the sample data manualy please follow the instructions listed below.' ); ?></h5>
<ol>
	<li>
		<p><?php printf( _( 'Open the %s theme/manual_install %s folder of your downloaded template package.' ), '<strong>', '</strong>' ); ?></p>
	</li>
	<li>
		<p><?php _e( 'Upload the <strong>uploads</strong> folder to the wp-content directory of your WordPress installation, accept folder(s) replacement. Please note that your images may be replaced with sample images.' ); ?></p>
	</li>
	<li><?php printf( _( 'Open the %s theme-name.sql %s file that is located in the %s theme/manual_install%s  folder in any text editor (preferably Sublime Text or Notepad) and replace all instances of %s your_website_url_here %s with your website URL in the entire document using the %s Find and Replace %s tool (hit Ctrl+H hot keys to open this window). E.g.: http://www.mywebsite.com. Please, make sure that you do not have the forward slash <strong>/</strong> sign at the end of the address and the url starts with http://www. Save your changes and close the file.' ), '<strong>', '</strong>', '<strong>', '</strong>', '<strong>', '</strong>', '<strong>', '</strong>' ); ?></li>
	<li>
		<p><?php printf( _( 'Open the %s theme-name.sql %s file that is located in the %s theme/manual_install %s folder in any text editor (preferably Sublime Text or Notepad) and replace all instances of %s your_website_url_here %s with your website URL in the entire document using the %s Find and Replace %s tool (hit Ctrl+H hot keys to open this window). E.g.: http://www.mywebsite.com. Please, make sure that you do not have the forward slash <strong>/</strong> sign at the end of the address and the url starts with http://www. Save your changes and close the file.' ), '<strong>', '</strong>', '<strong>', '</strong>', '<strong>', '</strong>', '<strong>', '</strong>' ); ?></p>
	</li>

<?php assets_manager()->get_image( 'assets/images/rename-dump-data-base.png', 'img-preview', _( 'About' ) ); ?>

	<li>
		<p><?php printf( _( 'Now you can import the dump file with the %s phpMyAdmin %s tool or some other database management tool.' ), '<strong>', '</strong>' ); ?></p>
	</li>
<div class="alert alert-warning">
    <?php _e( 'ATTENTION: Importing the SQL file to your database will overwrite your existing content and website settings. DO NOT import the SQL file if you want to keep the existing content.' ); ?>
</div>

<div class="alert alert-info">
    <?php _e( 'NOTE: Always back up your database before performing any modifications.' ); ?>
</div>

	<li>
		<p><?php _e( 'Open your WordPress database using a database management tool. Usually, the database tool is called PhpMyadmin.' ); ?></p>
	</li>
	<li>
		<p><?php _e( 'Go to the Import tab and import the .sql file.' ); ?></p>
	</li>

<?php assets_manager()->get_image( 'assets/images/importing-data-base-panel.png', 'img-preview', _( 'About' ) ); ?>

	<li>
		<p><?php printf( _( 'Go to %s Settings &gt; Permalinks %s.' ), '<strong>', '</strong>' ); ?></p>
	</li>
	<li>
		<p><?php _e( 'Click the Save Changes button.' ); ?></p>
	</li>
	<li> <p><?php _e( 'Refresh your home page. That’s it, the template has been installed with demo sample content.' ); ?></p></li>
</ol>



