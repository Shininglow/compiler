<article>


<div id="toc-manual-localization" class="toc-id"></div>
	<h3><?php _e( 'Localization' ); ?></h3>

	<p><?php _e( 'WordPress theme contains a localization option which allows to make your site bilingual or multilingual. Your site can attract more visitors from other countries. Using plugins and other options listed below you can customize your site, add posts, create new tags or categories, and then easily change the language for each of them.' ); ?></p>

	<h3><?php _e( 'Manual Localization' ); ?></h3>
	<p><?php _e( 'WordPress offers a very easy option to change languages in your theme.' ); ?></p>

	<ul>
		<li><?php _e( 'go to <strong>Settings</strong> > <strong>General</strong> in your theme\'s dashboard;' ); ?></li>
		<li><?php _e( 'at the bottom of your page you will find <strong>Site Language</strong> option. Choose the needed language in the dropdown menu and click <strong>Save Changes</strong> button;' ); ?></li>
		<li><?php _e( 'after the language has been switched, you need to translate your theme. To do so, go to <strong>wp-content > themes > theme name > languages</strong>, where you should have the proper language files installed in this directory.' ); ?></li>
	</ul>

	<p><?php _e( 'If you do not see the language you want to use in the list, you can manually install language packs in WordPress.' ); ?></p>

	<p><?php _e( 'WordPress uses a gettext system for translations, where a main .pot template file can be found and used. Each language consists of two files: with .po and .mo extension. You will need a .mo file for your language.' ); ?></p>

	<ul>
		<li><?php _e( 'go to the <a href="https://make.wordpress.org/polyglots/teams/" target="_blank"> WordPress translation teams page </a>. Check if there is a WordPress translation available for your language;' ); ?></li>
		<li><?php _e( 'click on the <strong>percentage value</strong> to see the status of the translation progress in your language and then click on current WordPress version;' ); ?></li>
		<li><?php _e( 'you will be transferred to <strong>GlotPress</strong> (a web-based app used by WordPress team to manage and translate WordPress projects);' ); ?></li>
		<li><?php _e( 'go to the bottom until you see the <strong>Export</strong> section;' ); ?></li>
		<li><?php _e( 'in the dropdown, select <strong>Machine Object Message Catalog</strong> (.mo) and then click on <strong>Export</strong> link.' ); ?></li>
		<li><?php _e( 'repeat the same actions for <strong>Portable Object Message Catalog</strong> (.po) and then click on the <strong>Export</strong> link;' ); ?></li>
		<li><?php _e( 'download and unzip the language pack on your computer. Connect to your website using an FTP client. Once connected, upload the language files to /wp-content/languages folder;' ); ?></li>
		<li><?php _e( 'once the file has been uploaded, go to the WordPress dashboard;' ); ?></li>
		<li><?php _e( 'go to <strong>Settings > General > Site Language</strong> option, and you will find the language you have just uploaded.' ); ?></li>
	</ul>


<div id="toc-poedit" class="toc-id"></div>

<h3 id="poedit"><?php _e( 'Poedit' ); ?></h3>
	

	<p><?php _e( 'WordPress theme can also be localized by using Poedit program. Localization becomes possible because of using GNU gettext framework for translation and such types of files as POT (Portable Object Template), PO (Portable Objects) and MO (Machine Objects) files.' ); ?></p>

	<h5><?php _e( 'Installing Poedit' ); ?></h5>

	<ul>
		<li><?php _e( 'to start your theme\'s localization you need to download and install <strong><a href="https://poedit.net/" target="_blank"> Poedit</a></strong>;' ); ?></li>
		<li><?php _e( 'once Poedit has been installed, open it, and go to <strong>File > New Catalog</strong>;' ); ?></li>
		<li><?php _e( 'go to <strong>Catalog Properties</strong> window > <strong>Translation Properties</strong> tab > Fill in your project\'s information. 

		<strong>Note!</strong> Each tab in the Catalog Properties window should be filled.' ); ?></li>

		<li><?php _e( 'go to the <strong>Sources paths</strong> tab. Enter the path for the folder which will be used by Poedit program to search for source files containing text you need to translate;' ); ?></li>
		<li><?php _e( 'go to the <strong>Sources keywords</strong> tab. Define the functions to be used to localize the text in files, <strong>_()</strong> and <strong>_e()</strong>. Click <strong>OK</strong> button;' ); ?></li>
		<li><?php _e( 'on this step name and save your POT file. We recommend to choose <strong>.pot</strong> extension and save the file in a folder in your theme directory;' ); ?></li>
		<li><?php _e( 'Poedit will scan folders specified in the Sources path tab, once you click <strong>OK</strong> button. The program will generate a list of the localized text in your theme\'s files;' ); ?></li>
		<li><?php _e( 'the final step - save your POT file, and your theme is ready for translation!' ); ?></li>
	</ul>


	<h5><?php _e( 'Localization using Poedit' ); ?></h5>

	<ul>
		<li><?php _e( 'open Poedit and select <strong>Create new translation</strong>. In the pop-up window select WordPress theme you need to translate. Your theme\'s default translation template in <strong>THEMEXXX/lang/YYY.po</strong> (where <strong>THEMEXXX</strong> is the name of your theme and <strong>YYY</strong> – default language of the theme). Open it;' ); ?></li>
		<li><?php _e( 'in the appeared dropdown menu select a language you need to translate your theme to. Click <strong>OK</strong> button and go ahead to translate your theme;' ); ?></li>
		<li><?php _e( 'highlight any string you want to translate in the <strong>Source text</strong> section. In the <strong>Translation section</strong> enter a desired translation of the source string:' ); ?></li>
		<li><?php _e( 'after your theme has been translated, save the file in the same directory as the original template;' ); ?></li>
		<li><?php _e( 'upload the <strong>.po</strong> file you have saved on previous step, and <strong>.mo</strong> file (the same as you have saved, but containing .mo extension, is generated automatically by Poedit) to the corresponding directory on your hosting account;' ); ?></li>
		<li><?php _e( 'open <strong>wp-config.php</strong> file, which is located in your WordPress installation, and add it to the line: <strong>define ("WPLANG", "ZZZ");</strong>, where <strong>ZZZ</strong> is the name of the file you have used to save your translation;' ); ?></li>
		<li><?php _e( 'your theme will now appear translated!' ); ?></li>

	</ul>


<div id="toc-loco-translate" class="toc-id"></div>
	
<h3 id="loco-translate"><?php _e( 'Loco Translate Plugin' ); ?></h3>

	<p><?php _e( 'With <strong><a href="https://wordpress.org/plugins/loco-translate/" target="_blank">Loco Translate </a></strong> you can do built-in translation and editing of your files via WordPress admin panel, and use such tools as extracting strings and generating templates. Loco Translate has protected language directory for saving custom translations. It supports native MO file compilation and PO features. The plugin has such important features as configurable PO file backups and built-in WordPress local codes. ' ); ?></p>

	<h5><?php _e( 'Installing Loco Translate plugin' ); ?></h5>

	<ul>
		<li><?php _e( 'unzip all files to the /wp-content/plugins/loco-translate directory;' ); ?></li>
		<li><?php _e( 'log into WordPress admin and activate the <strong>Loco Translate</strong> plugin through the <strong>Plugins</strong> menu;' ); ?></li>
		<li><?php _e( 'go to <strong>Loco Translate</strong> > <strong>Home</strong> in the left-hand menu to start translating.' ); ?></li>
	</ul>

    
    <?php _e( 'Detailed instructions how to use Loco Translate plugin can be seen in <a href="https://localise.biz/wordpress/plugin/beginners" target="_blank">Beginner\'s Guide</a>,' ); ?> <a href="https://localise.biz/wordpress/plugin/overview" target="_blank">Technical overview</a>.


<div id="toc-polylang" class="toc-id"></div>

<h3 id="polylang"><?php _e( 'Polylang plugin' ); ?></h3>
	<p> <?php _e( '<strong><a href="https://wordpress.org/plugins/polylang/" target="_blank">Polylang plugin</a></strong> provides a number of useful options, such as RTL language support, ability to make your site either bilingual or multilingual, automatic copy of categories, post tags, etc. when adding a new post or page translation, and customizable language switcher.' ); ?></p>

	<h5><?php _e( 'Installing Polylang plugin' ); ?></h5>

	<ul>
	    <p> Make sure you are using WordPress 4.0 or later and that your server is running PHP 5.2.4 or later (same requirement as WordPress itself). If you tried other multilingual plugins, deactivate them before activating Polylang. </p>
		<li> unzip all files to the /wp-content/plugins/polylang directory; </li>
		<li> log into WordPress admin and activate the <strong>Polylang</strong> plugin through the <strong>Plugins</strong> menu; </li>
		<li> go to the <strong>languages settings</strong> page and create the languages you need; </li>
		<li> add the <strong>language switcher</strong> widget to let your visitors switch the language. </li>
	</ul>

	<p> Note! Your theme should be with the corresponding .mo files (Polylang automatically downloads them when they are available for themes and plugins in this repository). If your theme is not internationalized yet, please refer to the <a href="https://developer.wordpress.org/themes/functionality/internationalization/" target="_blank">Theme Handbook</a>.

<div id="toc-wpml" class="toc-id"></div>

	<h3 id="wpml"><?php _e( 'The WordPress Multilingual Plugin (WPML)' ); ?></h3>

	<?php _e( '<strong><a href="https://wpml.org/" target="_blank">WPML plugin</a></strong> is a user-friendly plugin which help you to build multilingual sites both personal and corporate ones. With WPML you will be able to translate pages, menus, posts and the whole texts. Every WordPress theme that uses API runs multilingual with this plugin. ' ); ?>

	<h5><?php _e( 'Installing WPML plugin' ); ?></h5>

	<ul>
	    <p>The first time you use WPML, you need to manually download it and install. Then, register to receive automated updates to future versions. </p>
	    <li> log in to your <strong>WPML.org</strong> account; </li>
		<li> go to the <strong>Downloads</strong> section; </li>
		<li> log into WordPress admin and activate the <strong>Polylang</strong> plugin through the <strong>Plugins</strong> menu; </li>
		<li> download the needed <strong>WPML components</strong>. You will receive a ZIP file for each one of WPML’s components; </li>
		<li> unzip each file. A directory will be created; </li>
		<li> download the needed <strong>WPML components</strong>. You will receive a ZIP file for each one of WPML’s components; </li>
		<li> upload the unzipped directories to <strong>/wp-content/plugins</strong> directory; </li>
		<li> go back to the <strong>Plugins</strong> page and enable the newly uploaded/added plugins; </li>
		<li> follow <strong>WPML’s setup wizard</strong> to add languages to your site. </li>
	</ul>


	<p> You can find more detailed instructions and guides in <a href="https://wpml.org/documentation/" target="_blank">WPML Documentation</a>.
<h5>
	<p> Additional information about Localization can be also found on <a href="https://jetimpex.com/" target="_blank">JetImpex Support Portal</a>.</p>
	</h5>


</article>
