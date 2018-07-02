
<article>
<<<<<<< HEAD
<div id="toc-template-installation" class="toc-id"></div>
<div id="toc-wordpress-engine-installation" class="toc-id"></div>
<h2 id="wordpress-installation"><?php _e( 'Template Installation' ); ?></h2>
<h5><?php printf( _( 'JetImpex theme is built as a WordPress theme, so you need to have WordPress engine installed first. If you have not installed it yet, please refer to the %sWordPress Installation%s section.' ), '<a href="#wordpress-installation">', '</a>' ); ?></h5>
<figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/ti/process.jpg' ); ?>" alt="<?php _e( 'process' ); ?>"></figure>
=======
<div id="toc-wordPress-engine-installation" class="toc-id"></div>
<h2 id="wordPress-engine-installation"><?php _e( 'Template Installation' ); ?></h2>

<h5><?php printf( _( 'JetImpex theme is built as a WordPress theme, so you need to have WordPress engine installed first. If you have not installed it yet, please refer to the <a href="#wordpress-installation" target="_blank">WordPress Installation</a> section.' ), '</a>' ); ?></h5>



<div id="toc-template-installation" class="toc-id"></div>

<h3 id="template-installation"><?php _e( 'WordPress Installation' ); ?></h3>
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc


<<<<<<< HEAD
<h3 id="wordpress-engine-installation"><?php _e( 'WordPress Installation' ); ?></h3>

<ol>
  <h5 id="useful-tips:"><strong>Step 1. Download WordPress Engine:</strong></h5>

    <ol>
      <li> <?php _e( 'You can use the <strong>Download WordPress</strong> button on the main page of the<a href="https://wordpress.org" target="_blank"> official website</a> to get the most recent version of WordPress;' ); ?></li>
      <li><?php _e( ' Extract files from the downloaded WordPress engine package. Check the following tutorials to unpack the archive:' ); ?></li>
    </ol>

   <ul>
    <li><a href="https://jetimpex.com/wordpress/support/knowledge-base/winzip-downloading-and-installation/" target="_blank">WinZip Downloading and Installation;</a></li>
    <li><a href="https://jetimpex.com/wordpress/support/knowledge-base/archived-files-extraction/" target="_blank">Archived Files Extraction;</a></li>
    <li><a href="https://jetimpex.com/wordpress/support/knowledge-base/archived-files-extraction-for-windows/" target="_blank">Archived Files Extraction for Windows;</a></li>
    <li><a href="https://jetimpex.com/wordpress/support/knowledge-base/template-extraction-on-mac-os/" target="_blank">Template Extraction on MAC OS.</a></li>
=======
<p><?php printf( _( 'You can download the WordPress platform on the official WordPress.org website: <a href="https://wordpress.org/download/" target="_blank">WordPress versions archive</a>.  Once the platform is downloaded, you’ll need to unpack the files. You can use any file archiver that supports ZIP format to unpack the %sZIP%s file.' ), '<strong>', '</strong>' ); ?></p>

<p><?php printf( _( 'These tutorials will show you how to unpack the archived files, if you have %sWindows OS (using WinZip)%s and if you have %sMAC OS (using StuffitExpander):%s' ), '<strong>', '</strong>', '<strong>', '</strong>' ); ?></p>

<ul>
	<li><a href="https://jetimpex.com/wordpress/support/knowledge-base/winzip-downloading-and-installation/"target="_blank"><?php _e( 'WinZip Downloading and Installation;' ); ?></a></li>
	<li><a href="https://jetimpex.com/wordpress/support/knowledge-base/archived-files-extraction/"target="_blank"><?php _e( 'Archived Files Extraction;' ); ?></a></li>
	<li><a href="https://jetimpex.com/wordpress/support/knowledge-base/archived-files-extraction-for-windows/"target="_blank"><?php _e( 'Archived Files Extraction for Windows;' ); ?></a></li>
	<li><a href="https://jetimpex.com/wordpress/support/knowledge-base/template-extraction-on-mac-os/"target="_blank"><?php _e( 'Template Extraction on MAC OS.' ); ?></a></li>
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc
</ul>


<h5 id="useful-tips:"><strong>Step 2. Upload the extracted files to hosting server:</strong></h5>


<<<<<<< HEAD
 <p>WordPress engine files should be uploaded to the root directory on your server. It is usually named www or public_html.</p>
 <p>
The following tutorials will help you:
</p><ul>
    <li><a href="https://jetimpex.com/wordpress/support/knowledge-base/uploading-files-to-a-server-using-ftp/" target="_blank">Uploading Files to a Server Using FTP;</a></li>
    <li><a href="https://jetimpex.com/wordpress/support/knowledge-base/uploading-files-to-a-server-with-cpanel/" target="_blank">Uploading Files to a Server with cPanel.</a></li>
=======
<p><?php _e( 'You can also take a look at these tutorials that give detailed information on how to upload the files to a hosting server:' ); ?></p>

<ul>
	<li><a href="https://jetimpex.com/wordpress/support/knowledge-base/uploading-files-to-a-server-using-ftp/"target="_blank"><?php _e( 'Uploading Files to a Server Using FTP;' ); ?></a></li>
	<li><a href="https://jetimpex.com/wordpress/support/knowledge-base/uploading-files-to-a-server-with-cpanel/"target="_blank"><?php _e( 'Uploading Files to a Server with cPanel.' ); ?></a></li>
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc
</ul>

<h5 id="useful-tips:"><strong>Step 3. Create a database for the WordPress platform:</strong></h5>

 <p>A new database can be created in your Hosting Control Panel. You can check the following tutorials and select which way is preferable to you:</p>

<ul>
    <li><a href="https://jetimpex.com/wordpress/support/knowledge-base/creating-database/" target="_blank">Creating a Database;</a></li>
    <li><a href="https://jetimpex.com/wordpress/support/knowledge-base/creating-database-manually/" target="_blank">Creating Database Manually;</a></li>
    <li><a href="https://jetimpex.com/wordpress/support/knowledge-base/creating-mysql-database-godaddy/" target="_blank">Creating MySQL Database with GoDaddy;</a></li>
    <li><a href="https://jetimpex.com/wordpress/support/knowledge-base/creating-database-siteground/" target="_blank">Creating a Database with SiteGround;</a></li>
    <li><a href="https://jetimpex.com/wordpress/support/knowledge-base/creating-database-justhost-server/" target="_blank">Creating a Database with JustHost Server;</a></li>
    <li><a href="https://jetimpex.com/wordpress/support/knowledge-base/creating-database-bluehost-server/" target="_blank">Creating a Database with BlueHost Server.</a></li>
</ul>

<h5 id="useful-tips:"><strong>Step 4. Installing WordPress:</strong></h5>


<ol>
      <li>Open your web browser and type in your domain name (or your domain name / subdirectory) and click <strong>Enter</strong>;
</li>

      <li>The first page of installation will appear. Click <strong>Create a Configuration file</strong>;</li>
      <li>Click <strong>Let’s Go</strong> button and fill in Database Connection Details:</li>



<blockquote class="alert alert-info">
    <p>It is recommended to use the default "wp_" database table prefix for the proper sample data installation.</p>
</blockquote>

<<<<<<< HEAD
=======
<p><?php _e( 'You can also check the following tutorials:' ); ?></p>

<ul>
	<li><a href="https://jetimpex.com/wordpress/support/knowledge-base/creating-a-database/"target="_blank"><?php _e( 'Creating a Database;' ); ?></a></li>
	<li><a href="https://jetimpex.com/wordpress/support/knowledge-base/creating-mysql-database-with-godaddy/"target="_blank"><?php _e( 'Creating MySQL Database with GoDaddy.' ); ?></a></li>
</ul>
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc

 <figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/ti/3.png' ); ?>" alt="<?php _e( 'process' ); ?>"></figure>

     <li>Fill in the fields with Website Details as shown below:</li>

 <figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/ti/4.png' ); ?>" alt="<?php _e( 'process' ); ?>"></figure></ol>


<li>Click <strong>Install WordPress</strong> button.</li>

<p>If you have entered the correct details, you will see a successful installation message and the WordPress dashboard access button.
</p>


<h4 id="useful-tips:">Useful Tips:</h4>


<ul>
<<<<<<< HEAD
   <li><a href="https://jetimpex.com/wordpress/support/knowledge-base/manual-wordpress-installation-hostgator-server/" target="_blank">Manual WordPress Installation to HostGator Server;</a></li>
   <li><a href="https://jetimpex.com/wordpress/support/knowledge-base/manual-wordpress-installation-godaddy-server/" target="_blank">Manual WordPress Installation to GoDaddy Server;</a></li>
   <li><a href="https://jetimpex.com/wordpress/support/knowledge-base/manual-wordpress-installation-justhost-server/" target="_blank">Manual WordPress Installation to JustHost Server.</a></li>
</ul>

<div id="toc-theme-installation" class="toc-id"></div>

<h3 id="theme-installation">Theme Installation</h3>

<p>Now you can proceed to theme installation: modulet.zip (hereandafter <strong>theme-name.zip</strong>). Follow the steps listed below:</p>

<p>1. Extract the template package.</p>

  <figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/ti/5.png' ); ?>" alt="<?php _e( 'process' ); ?>"></figure>
<p>2. Navigate to the <strong>Appearance > Themes</strong> section at the admin panel of the site and open the theme folder.</p>

<p>3. Locate the archive named as <strong>theme-name.zip</strong> and install the theme by pressing Install Now.</p>

 <figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/ti/6.png' ); ?>" alt="<?php _e( 'process' ); ?>"></figure>

<p>4. Next please click on <strong>Activate</strong> link.</p>

 <figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/ti/7.png' ); ?>" alt="<?php _e( 'process' ); ?>"></figure>

<div id="toc-cherry-wizard" class="toc-id"></div>

<h3 id="cherry-wizard"><?php _e( 'Cherry Wizard Installation / Sample Data Installation' ); ?></h3>
=======
	<li><a href="https://jetimpex.com/wordpress/support/knowledge-base/manual-wordpress-installation-to-hostgator-server/"target="_blank"><?php _e( 'Manual WordPress Installation to HostGator Server;' ); ?></a></li>
	<li><a href="https://jetimpex.com/wordpress/support/knowledge-base/manual-wordpress-installation-bluehost/"target="_blank"><?php _e( 'Manual WordPress Installation to BlueHost Server;' ); ?></a></li>
	<li><a href="https://jetimpex.com/wordpress/support/knowledge-base/manual-wordpress-installation-to-siteground-server/"target="_blank"><?php _e( 'Manual WordPress Installation to SiteGround Server;' ); ?></a></li>
	<li><a href="https://jetimpex.com/wordpress/support/knowledge-base/manual-wordpress-installation-to-godaddy-server/"target="_blank"><?php _e( 'Manual WordPress Installation to GoDaddy Server;' ); ?></a></li>
	<li><a href="https://jetimpex.com/wordpress/support/knowledge-base/manual-wordpress-installation-to-justhost-server/"target="_blank"><?php _e( 'Manual WordPress Installation to JustHost Server.' ); ?></a></li>
</ul>

<div id="toc-manual-theme-installation" class="toc-id"></div>

<h3 id="manual-theme-installation"><?php _e( 'Manual Installation' ); ?></h3>

<p><?php printf( _( 'Now you can proceed to theme installation: %stheme_name.zip%s.Follow the steps listed below:' ), '<strong>', '</strong>' ); ?></p>
<p><?php _e( '1. Extract the template package.' ); ?></p>

<?php assets_manager()->get_image( 'assets/images/add-theme-dashboard.png', 'img-preview', _( '' ) ); ?>

<p><?php _e( '2. Navigate to the <strong>Appearance &gt; Themes section</strong> at the admin panel of the site and open the <strong>theme</strong> folder.' ); ?></p>

<p><?php _e( '3. Locate the archive named as theme-name.zip and install the theme by pressing <strong>Install Now</strong>.' ); ?></p>

<?php assets_manager()->get_image( 'assets/images/add-theme-select.png', 'img-preview', _( '' ) ); ?>

<p><?php _e( '4. Next please press on <strong>Activate</strong> link.' ); ?></p>

<?php assets_manager()->get_image( 'assets/images/add-theme-success.png', 'img-preview', _( '' ) ); ?>

>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc


<p>After theme activation you will get a notice which offers you to install Cherry Plugin Wizard. To continue plugins and demo contents installation with Cherry Plugin Wizard just hit <strong>Begin installing plugin</strong> link. You will be transfered to the page where you can select the needed plugins.</p>

 <figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/ti/8.png' ); ?>" alt="<?php _e( 'process' ); ?>"></figure>

<p>Then please click on <strong>>Install</strong> link.</p>

 <figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/ti/9.png' ); ?>" alt="<?php _e( 'process' ); ?>"></figure>

<p>After Cherry Plugin Wizard has been successfully installed and activated click on <strong>Return to the Dashboard</strong> link.</p>

<<<<<<< HEAD
 <figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/ti/10.png' ); ?>" alt="<?php _e( 'process' ); ?>"></figure>
=======
<h3 id="install-with-cherry-wizard"><?php _e( 'Cherry Wizard Installation' ); ?></h3>
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc

<h4>Plugins Installation</h4>

<p>
<<<<<<< HEAD
        After installation and activation Cherry Plugin Wizard you will get a notice which offers you to continue the plugins and demo contents installation with Cherry Plugin Wizard.        Then click on <strong>START INSTALL</strong> on the top of the page to start installation of the recommended plugins.    </p>

 <figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/ti/11.png' ); ?>" alt="<?php _e( 'process' ); ?>"></figure>

<p>
        On the Wizard Home page you can check if your server configurations meet <strong>WordPress minimal requirements</strong>. If any doesnt't meet you can continue the installation process, but it will take more time and can drive to bugs.</p>

<p>If your server configurations meet <strong>WordPress minimal requirements</strong> please click on <strong>NEXT</strong> link.    </p>

 <figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/ti/12.png' ); ?>" alt="<?php _e( 'process' ); ?>"></figure>

<p>
        Green Install Plugin box means the installation process has been successfully completed.    </p>
 <figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/ti/13.png' ); ?>" alt="<?php _e( 'process' ); ?>"></figure>
<p>
        Red Install Plugin box means the installation process hasn't been completed. Press on <strong>Details</strong> link you will see where is the problem and please refer to    <a href="https://jetimpex.com/wordpress/" target="_blank">JetImpex Support Portal.</a>
</p>
 <figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/ti/14.png' ); ?>" alt="<?php _e( 'process' ); ?>"></figure>
<p>
        After plugins installation you will get a notice which offers to <strong> append demo content to your existing content</strong> or <strong>completely rewrite it</strong>.    <br>
        When you have taken the option please click on <strong>START</strong>.
    </p>

=======

    <?php _e( 'After theme activation you will get a notice which offers you to install Cherry Plugin Wizard.
        To continue plugins and demo contents installation with Cherry Plugin Wizard just hit <strong>Begin installing plugin</strong> link.
        You will be transfered to the page where you can select the needed plugins.'); ?>

</p>
<?php assets_manager()->get_image( 'assets/images/step1.png', 'img-preview', _( '' ) ); ?>

<p><?php _e( 'Then please click on <strong>Install</strong> link.' ); ?></p>


<?php assets_manager()->get_image( 'assets/images/step2.png', 'img-preview', _( '' ) ); ?>

<p>

    <?php _e( 'After Cherry Plugin Wizard has been successfully installed and activated click on <strong>Return to the Dashboard</strong> link' ); ?>

</p>

<?php assets_manager()->get_image( 'assets/images/step3.png', 'img-preview', _( '' ) ); ?>


<h4><?php _e( 'Plugins Installation' ); ?></h4>

<p>
        <?php _e( 'After installation and activation Cherry Plugin Wizard you will get a notice which offers you to continue the plugins and demo contents installation with Cherry Plugin Wizard.' ); ?>
        <?php _e( 'Then click on <strong>START INSTALL</strong> on the top of the page to start installation of the recommended plugins.' ); ?>
    </p>

<?php assets_manager()->get_image( 'assets/images/step4.png', 'img-preview', _( '' ) ); ?>
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc

<div class="alert alert-warning">
    <br>
       If you select  <strong>Replace my existing content with demo content</strong> your whole content will be completely and irreversibly deleted!    <p></p>
</div>
 <figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/ti/15.png' ); ?>" alt="<?php _e( 'process' ); ?>"></figure>
<p>
<<<<<<< HEAD
       If you select <strong>Replace my existing content with demo content</strong> you will have to enter your password to confirm and start content replacing and importing sample data will start.    </p>
 <figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/ti/16.png' ); ?>" alt="<?php _e( 'process' ); ?>"></figure>
<p>
       On this step Cherry Plugin Wizard regenerates thumbnails for all imported images. This process may take some minutes.    </p>
 <figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/ti/17.png' ); ?>" alt="<?php _e( 'process' ); ?>"></figure>
<p>
       Import is finished. Cherry Plugin Wizard offers you to select options <strong>VIEW YOUR SITE</strong> or <strong>CUSTOMIZE YOUR THEME</strong>.    </p>
=======
        <?php _e( 'On the Wizard Home page you can check if your server configurations meet <strong>WordPress minimal requirements</strong>. If any doesnt\'t meet you can continue the installation process, but it will take more time and can drive to bugs.' ); ?></p>
        <p><?php _e( 'If your server configurations meet <strong>WordPress minimal requirements</strong> please click on <strong>NEXT</strong> link.' ); ?>
    </p>

<?php assets_manager()->get_image( 'assets/images/step5.png', 'img-preview', _( '' ) ); ?>



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
        <?php _e( 'Red Install Plugin box means the installation process hasn\'t been completed. Press on <strong>Details</strong> link you will see where is the problem and please refer to ' ); ?>   <a href="https://jetimpex.com/wordpress/"><?php _e( 'JetImpex Support Portal.' ); ?></a>
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
       <?php _e( 'On this step Cherry Plugin Wizard regenerates thumbnails for all imported images. This process may take some minutes.' ); ?>
    </p>

<?php assets_manager()->get_image( 'assets/images/regenerate_thumbnails.png', 'img-preview', _( '' ) ); ?>

    <p>
       <?php _e( 'Import is finished. Cherry Plugin Wizard offers you to select options <strong>VIEW YOUR SITE</strong> or <strong>CUSTOMIZE YOUR THEME</strong>.' ); ?>
    </p>

<?php assets_manager()->get_image( 'assets/images/import_finished.png', 'img-preview', _( '' ) ); ?>

>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc

 <figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/ti/18.png' ); ?>" alt="<?php _e( 'process' ); ?>"></figure>

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



<h4>Manual Plugin Installation</h4>



<p>If you need to install plugins manually, you can do it this way.</p>


<ul>
<p></p><li>install plugins from <strong>theme/(your theme name)/assets/includes/plugins</strong>;</li><p></p>

<p></p><li>go to
<a href="https://wordpress.org/">Wordpress.org</a>

and download the necessary plugins;</li><p></p>

<p></p><li>go to <strong> plugins</strong> tab on your administration panel and click on <strong> add new</strong> button; </li><p></p>

 <figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/ti/19.png' ); ?>" alt="<?php _e( 'process' ); ?>"></figure>

<p></p><li>you will see the the search field that can help you search the necessary plugins by keywords, you can install them from your administration panel at once;</li><p></p>

 <figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/ti/20.png' ); ?>" alt="<?php _e( 'process' ); ?>"></figure>

<p></p><li>you can also upload the plugins from your PC if you already have them on your computer in .zip format. Just click on <strong> upload plugin</strong> button and choose the needed files. </li><p></p>
</ul>

 <figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/ti/21.png' ); ?>" alt="<?php _e( 'process' ); ?>"></figure>

<h4 id="manual-sample-data-installation">Manual sample data installation</h4>

<h5 id="for-installing-the-sample-data-manualy-please-follow-the-instructions-listed-below">For installing the sample data manualy please follow the instructions listed below.</h5>

<ul>
    <li>
<<<<<<< HEAD
        <p>Open the <strong> theme/manual_install </strong> folder of your downloaded template package.</p>
    </li>
    <li>
        <p>Upload the <strong>uploads</strong> folder to the wp-content directory of your WordPress installation, accept folder(s) replacement. Please note that your images may be replaced with sample images.</p>
    </li>
    <li>Open the <strong> theme-name.sql </strong> file that is located in the <strong> theme/manual_install</strong>  folder in any text editor (preferably Sublime Text or Notepad) and replace all instances of <strong> your_website_url_here </strong> with your website URL in the entire document using the <strong> Find and Replace </strong> tool (hit Ctrl+H hot keys to open this window). E.g.: http://www.mywebsite.com. Please, make sure that you do not have the forward slash <strong>/</strong> sign at the end of the address and the url starts with http://www. Save your changes and close the file.</li>

 <figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/ti/22.png' ); ?>" alt="<?php _e( 'process' ); ?>"></figure>
    <li>
        <p>Open the <strong> theme-name.sql </strong> file that is located in the <strong> theme/manual_install </strong> folder in any text editor (preferably Sublime Text or Notepad) and replace all instances of <strong> your_website_url_here </strong> with your website URL in the entire document using the <strong> Find and Replace </strong> tool (hit Ctrl+H hot keys to open this window). E.g.: http://www.mywebsite.com. Please, make sure that you do not have the forward slash <strong>/</strong> sign at the end of the address and the url starts with http://www. Save your changes and close the file.</p>
    </li>
    <li>
        <p>Now you can import the dump file with the <strong> phpMyAdmin </strong> tool or some other database management tool.</p>
=======
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
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc
    </li>
<div class="alert alert-warning">
    Importing the SQL file to your database will overwrite your existing content and website settings. DO NOT import the SQL file if you want to keep the existing content.</div>

<div class="alert alert-info">
    Always back up your database before performing any modifications.</div>

    <li>
<<<<<<< HEAD
        <p>Open your WordPress database using a database management tool. Usually, the database tool is called <strong>PhpMyadmin</strong>.</p>
    </li>
    <li>
        <p>Go to the <strong>Import</strong> tab and import the <strong>.sql</strong> file.</p>
    </li>

 <figure class="img-preview"><img src="<?php url_manager()->get_assets_url( 'assets/images/ti/23.png' ); ?>" alt="<?php _e( 'process' ); ?>"></figure>
    <li>
        <p>Navigate to WordPress dashboard and go to <strong> Settings &gt; Permalinks</strong>.</p>
    </li>
    <li>
        <p>Click the <strong>Save Changes</strong> button.</p>
    </li>
    <li><p>  Refresh your home page. That’s it, the template has been installed with demo sample content.</p></li>
=======
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
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc
</ul>



</article>




