<?php
	require_once( 'includes/function.php' );
?>
<!DOCTYPE html>
<html lang="<?php translations()->get_language(); ?>">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Language" content="<?php translations()->get_language(); ?>">
		<meta name="format-detection" content="telephone=no">
		<?php $primary = config_manager()->get_info( 'colors', false ); ?>
		<meta name="msapplication-TileColor" content="<?php echo $primary[ 'primary' ]; ?>">
		<title><?php config_manager()->get_info( 'theme_name' ); ?></title>
		<meta name="description" content="<?php config_manager()->get_info( 'description' ); ?>">
		<meta name="keywords" content="<?php config_manager()->get_info( 'tags' ); ?>">
		<?php $favicon = config_manager()->get_info( 'favicon', false ); ?>
		<link rel="icon" href="<?php url_manager()->get_assets_url( $favicon ); ?>" type="image/x-icon">
		<link rel="stylesheet" href="<?php url_manager()->get_assets_url( 'assets/css/min/style.min.css' ); ?>">

		<!--[if lt IE 9]>
		<html class="lt-ie9">
			<div style='clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/">
					<img src="assets/images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
				</a>
			</div>
			<script src="assets/js/html5shiv.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="app" class="wrap">
			<div class="rd-mobilemenu active">
				<div class="logo">
					<a href="<?php url_manager()->get_home_url(); ?>">
						<img src="<?php url_manager()->get_assets_url( 'assets/images/temp/logo.png' ); ?>" alt="<?php config_manager()->get_info( 'theme_name' ); ?>">
					</a>
				</div>
				<?php main_menu()->get_language_menu(); ?>
				<div class="rd-mobilemenu_ul">
					<div class="scrollable-area">
						<?php main_menu()->get_menu(); ?>
					</div>
				</div>
				<div class="copyright"><?php printf( _( '%1$s JetImpex %2$sPrivacy Policy%3$s'), '&copy;', '<a href="https://jetimpex.com/privacy-policy/" target="_blank">', '</a>' ); ?></div>
			</div>
			<div class="page-content active">
				<button class="rd-mobilepanel_toggle active"><span></span></button>
				<div class="rd-mobilepanel <?php toggle_class( 'introduction', 'fixed'); ?>">
					<h1 class="rd-mobilepanel_title"><?php config_manager()->get_info( 'theme_name' ); ?></h1>
					<div class="tm-title-caption"><?php _e( 'Home Decor & Furnishing', 'default'); ?></div>
				</div>
				<div class="page">
					<main id="main">
						<div class="container">
							<?php get_content(); ?>
						</div>
					</main>
				</div>
			</div>
		</div>

		<script src="<?php url_manager()->get_assets_url( 'assets/js/jquery.js' ); ?>"></script>
		<script src="<?php url_manager()->get_assets_url( 'assets/js/jquery.ui.totop.js' ); ?>"></script>
		<script src="<?php url_manager()->get_assets_url( 'assets/js/highlight.min.js' ); ?>"></script>
		<script src="<?php url_manager()->get_assets_url( 'assets/js/jquery.rd-navbar.js' ); ?>"></script>
		<script src="<?php url_manager()->get_assets_url( 'assets/js/select2.min.js' ); ?>"></script>
		<script src="<?php url_manager()->get_assets_url( 'assets/js/script.js' ); ?>"></script>
	</body>
</html>
