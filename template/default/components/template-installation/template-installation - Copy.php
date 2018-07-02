tmt<article>
<div id="toc-wordPress-engine-installation" class="toc-id"></div>

<h2 id="template-installation"><?php _e( 'Template Installation' ); ?></h2>

<p><?php printf( _( 'TemplateMonster theme is built as a WordPress theme, so you need to have WordPress engine installed first. If you have not installed it yet, please refer to the %sWordPress Installation%s section.' ), '<a href="#wordpress-installation">', '</a>' ); ?></p>

<h3 id="wordpress-installation"><?php _e( 'WordPress Installation' ); ?></h3>

<p><?php _e( 'Download the required WordPress version. You can check which release is required on the template preview page in the requirements list. Make sure you download the correct version.' ); ?></p>

<p><?php printf( _( 'You can download the WordPress platform on the official WordPress.org website: %sDownload WordPress%s. If you need another release, follow this link: %sWordPress versions archive%s. Once the platform is downloaded, you’ll need to unpack the files. You can use any file archiver that supports ZIP format to unpack the %sZIP%s file.' ), '<a href="http://wordpress.org/download/">', '</a>', '<a href="http://wordpress.org/download/release-archive/">', '</a>', '<strong>', '</strong>' ); ?></p>

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
<ul>
	<li><?php _e( 'Click the <strong>Database</strong> button at the top navigation menu to see the list of databases.' ); ?></li>

<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/database-create-1.jpg' ); ?>" alt="<?php _e( 'phpMyAdmin Welcome Screen' ); ?>"></figure>

	<li><?php _e( 'Enter database name in the <strong>Create new database</strong> field.' ); ?></li>

<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/database-create-2.jpg' ); ?>" alt="<?php _e( 'phpMyAdmin Databases List Screen' ); ?>"></figure>

	<li><?php _e( 'Click the <strong>Create</strong> button.' ); ?></li>
</ul>

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
	<p><?php _e( 'Please note that the prefix of WordPress database tables should be <strong>wp_</strong>.' ); ?></p>
</blockquote>

<p><?php _e( 'You need to enter the WordPress database connection details here.' ); ?></p>

<h4 id="website-details"><?php _e( 'Website Details' ); ?></h4>

<p><?php _e( 'You need to enter the next details:' ); ?></p>

<ul>
	<li><?php _e( 'website name;' ); ?></li>
	<li><?php _e( 'administrator login and password;' ); ?></li>
	<li><?php _e( 'website e-mail.' ); ?></li>
</ul>

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

<h3 id="manual-installation"><?php _e( 'Manual Installation' ); ?></h3>

<p><?php printf( _( 'Now you can proceed to theme installation: %stheme_name.zip%s.Follow the steps listed below:' ), '<strong>', '</strong>' ); ?></p>
<p><?php _e( '1. Extract the template package.' ); ?></p>

<?php assets_manager()->get_image( 'assets/images/add-theme-dashboard.png', 'img-preview', _( '' ) ); ?>

<p><?php _e( '2. Navigate to the <strong>Appearance &gt; Themes section</strong> at the admin panel of the site and open the <strong>theme</strong> folder.' ); ?></p>

<p><?php _e( '3. Locate the archive named as theme-name.zip and install the theme by pressing <strong>Install Now</strong>.' ); ?></p>

<?php assets_manager()->get_image( 'assets/images/add-theme-select.png', 'img-preview', _( '' ) ); ?>

<p><?php _e( '4. Next please press on <strong>Activate</strong> link.' ); ?></p>

<?php assets_manager()->get_image( 'assets/images/add-theme-success.png', 'img-preview', _( '' ) ); ?>

<div id="toc-install-with-cherry-wizard" class="toc-id"></div>

<h3 id="install-with-cherry-wizard"><?php _e( 'Cherry Wizard Installation' ); ?></h3>


<p>

    <?php _e( 'After theme activation you will get a notice which offers you to install TM Wizard plugin.
        To continue plugins and demo contents installation with TM Wizard plugin just hit <strong>Begin installing plugin</strong> link.
        You will be transfered to the page where you can select the needed plugins.'); ?>

</p>

<?php assets_manager()->get_image( 'assets/images/step1.png', 'img-preview', _( '' ) ); ?>

<p><?php _e( 'Then please click on <strong>Install</strong> link.' ); ?></p>


<?php assets_manager()->get_image( 'assets/images/step2.png', 'img-preview', _( '' ) ); ?>

<p>

    <?php _e( 'After TM Wizard plugin has been successfully installed and activated click on <strong>Return to the Dashboard</strong> link' ); ?>

</p>

<?php assets_manager()->get_image( 'assets/images/step3.png', 'img-preview', _( '' ) ); ?>


<h4><?php _e( 'Plugins Installation' ); ?></h4>

<p>
        <?php _e( 'After installation and activation TM Wizard plugin you will get a notice which offers you to continue the plugins and demo contents installation with TM Wizard plugin.' ); ?>
        <?php _e( 'Then click on <strong>START INSTALL</strong> on the top of the page to start installation of the recommended plugins.' ); ?>
    </p>

<?php assets_manager()->get_image( 'assets/images/step4.png', 'img-preview', _( '' ) ); ?>

<p>
        <?php _e( 'On the Wizard Home page you can check if your server configurations meet <strong>WordPress minimal requirements</strong>. If any doesnt\'t meet you can continue the installation process, but it will take more time and can drive to bugs.' ); ?></p>
        <p><?php _e( 'If your server configurations meet <strong>WordPress minimal requirements</strong> please click on <strong>NEXT</strong> link.' ); ?>
    </p>

<?php assets_manager()->get_image( 'assets/images/step5.png', 'img-preview', _( '' ) ); ?>

<p>
        <?php _e( 'Then you have to select the skin and click on <strong>SELECT SKIN</strong> link. Also you can view demo.' ); ?>
    </p>

<?php assets_manager()->get_image( 'assets/images/step6.png', 'img-preview', _( '' ) ); ?>

<p>
        <?php _e( 'If you want to fill the website with your content and optimally install it use <strong>Lite Install</strong>.' ); ?>
    <br>
        <?php _e( 'The full version of the template will be suitable for you if you need its COMPLETE functionality, without additional settings. It contains more images and pages of the specific plugins content; some skins contain more plugins. Make a sure you need Full version. If you have opted for Full Install version, please click on <strong>Full Install</strong>.' ); ?>
    </p>

    <p>
        <strong><?php _e( 'PAY ATTENTION!</strong>' ); ?>
    <br>
       <?php _e( 'If your server configurations don\'t meet the WordPress minimal requirements and you couldn\'t install Full Version, try Lite one.' ); ?>
    </p>

    <p>
        <?php _e( 'Green Install Plugin box means the installation process has been successfully completed.' ); ?>
    </p>

<?php assets_manager()->get_image( 'assets/images/step8.png', 'img-preview', _( '' ) ); ?>

    <p>
        <?php _e( 'Red Install Plugin box means the installation process hasn\'t been completed. Press on <strong>Details</strong> link you will see where is the problem and please refer to ' ); ?>   <a href="https://support.template-help.com/"><?php _e( 'TemplateMonster Support department.' ); ?></a>
</p>


<?php assets_manager()->get_image( 'assets/images/step9.png', 'img-preview', _( '' ) ); ?>

     <p>
        <?php _e( 'After plugins installation you will get a notice which offers to <strong> append demo content to your existing content</strong> or <strong>completely rewrite it</strong>.' ); ?>
    <br>
        <?php _e( 'When you have taken the option please click on <strong>START</strong>.' ); ?>

    </p>

    <p>
<div class="alert alert-warning">
    <br>
      <?php _e( ' If you select  <strong>Replace my existing content with demo content</strong> your whole content will be completely and irreversibly deleted!' ); ?>
    </p>
</div>

<?php assets_manager()->get_image( 'assets/images/tm-wizard8.png', 'img-preview', _( '' ) ); ?>

    <p>
       <?php _e( 'If you select <strong>Replace my existing content with demo content</strong> you will have to enter your password to confirm and start content replacing and importing sample data will start.' ); ?>
    </p>

<?php assets_manager()->get_image( 'assets/images/importing_sample_data2.png', 'img-preview', _( '' ) ); ?>

    <p>
       <?php _e( 'On this step TM Wizard plugin regenerates thumbnails for all imported images. This process may take some minutes.' ); ?>
    </p>

<?php assets_manager()->get_image( 'assets/images/regenerate_thumbnails.png', 'img-preview', _( '' ) ); ?>

    <p>
       <?php _e( 'Import is finished. TM Wizard plugin offers you to select options <strong>VIEW YOUR SITE</strong> or <strong>CUSTOMIZE YOUR THEME</strong>.' ); ?>
    </p>

<?php assets_manager()->get_image( 'assets/images/import_finished.png', 'img-preview', _( '' ) ); ?>


<div id="toc-upload-via-ftp" class="toc-id"></div>
<h3 id="upload-via-ftp"><?php _e( 'Upload via FTP' ); ?></h3>
<p><?php _e( 'To use this method, you need to have access to your WordPress site files on FTP through the File Manager of your hosting control panel or an FTP client like Filezilla, CuteFTP, Total Commander, etc.' ); ?></p>
<ol>
	<li><?php printf( _( 'Unzip the %stheme-name.zip%s files to any folder on your hard drive (first, right-click each of the .zip files, select Unzip to %stheme-name%s respectively, so you get the one folder called theme-name).' ), '<strong>', '</strong>', '<strong>', '</strong>' ); ?></li>
	<li><?php printf( _( 'Upload the %stheme-name%s folder to the %s/wp-content/themes/%s directory on your FTP server.' ), '<strong>', '</strong>', '<strong>', '</strong>' ); ?></li>
	<li><?php _e( 'Log in to your WordPress admin panel (add /wp-admin after your domain name in the browser address bar).' ); ?></li>
	<li><?php printf( _( 'Go to the menu %s Appearance &gt; Themes %s.' ), '<strong>', '</strong>' ); ?></li>
	<li><?php printf( _( 'Under the %sAvailable Themes%s section find %stheme-name%s and activate it by clicking the %sActivate%s button.' ), '<strong>', '</strong>', '<strong>', '</strong>', '<strong>', '</strong>' ); ?></li>
</ol>




<h4><?php _e( 'Manual Plugin Installation' ); ?></h4>

<p><?php _e( 'If you need to install plugins manually, you can do it this way.' ); ?></p>

<ul>
<p><li><?php _e( 'install plugins from <strong>theme/(your theme name)/assets/includes/plugins</strong>;' ); ?></li></p>

<p><li><?php _e( 'go to ' ); ?>

<a href="https://wordpress.org/"><?php _e( 'Wordpress.org' ); ?></a>

<?php _e( 'and download the necessary plugins;' ); ?></li></p>

<p><li><?php _e( 'go to <strong> plugins</strong> tab on your administration panel and click on <strong> add new</strong> button; ' ); ?></li></p>

<?php assets_manager()->get_image( 'assets/images/pl1.png', 'img-preview', _( 'About' ) ); ?>

<p><li><?php _e( 'you will see the the search field that can help you search the necessary plugins by keywords, you can install them from your administration panel at once;' ); ?></li></p>

<?php assets_manager()->get_image( 'assets/images/pl3.png', 'img-preview', _( 'About' ) ); ?>

<p><li><?php _e( 'you can also upload the plugins from your PC if you already have them on your computer in .zip format. Just click on <strong> upload plugin</strong> button and choose the needed files. ' ); ?></li></p>
</ul>

<?php assets_manager()->get_image( 'assets/images/pl2.png', 'img-preview', _( 'About' ) ); ?>




<h4 id="manual-sample-data-installation"><?php _e( 'Manual sample data installation' ); ?></h4>
<h5 id="for-installing-the-sample-data-manualy-please-follow-the-instructions-listed-below"><?php _e( 'For installing the sample data manualy please follow the instructions listed below.' ); ?></h5>
<ul>
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
    <?php _e( 'Importing the SQL file to your database will overwrite your existing content and website settings. DO NOT import the SQL file if you want to keep the existing content.' ); ?>
</div>

<div class="alert alert-info">
    <?php _e( 'Always back up your database before performing any modifications.' ); ?>
</div>

	<li>
		<p><?php _e( 'Open your WordPress database using a database management tool. Usually, the database tool is called <strong>PhpMyadmin</strong>.' ); ?></p>
	</li>
	<li>
		<p><?php _e( 'Go to the <strong>Import</strong> tab and import the <strong>.sql</strong> file.' ); ?></p>
	</li>

<?php assets_manager()->get_image( 'assets/images/importing-data-base-panel.png', 'img-preview', _( 'About' ) ); ?>

	<li>
		<p><?php printf( _( 'Go to %s Settings &gt; Permalinks %s.' ), '<strong>', '</strong>' ); ?></p>
	</li>
	<li>
		<p><?php _e( 'Click the <strong>Save Changes</strong> button.' ); ?></p>
	</li>
	<li><p><?php _e(  '  Refresh your home page. That’s it, the template has been installed with demo sample content.' ); ?></p></li>
</ul>
</article>