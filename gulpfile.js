;( () => {
	'use strict';

	require( './tools/tools' );
	require( './tools/get-theme-information' );
	require( './tools/check-template' );

	const
	// gulp modules
		modules = {
			gulp: require( 'gulp' ),
			php2html: require( 'gulp-php2html' ),
			yargs: require( 'yargs' ),
			fs: require( 'fs' ),
			notify: require( 'gulp-notify' ),
			nodeNotify: require( 'node-notifier' ),
			copydir: require( 'copy-dir' ),
			sass: require( 'gulp-sass' ),
			autoprefixer: require( 'gulp-autoprefixer' ),
			plumber: require( 'gulp-plumber' ),
			rename: require( 'gulp-rename' ),
			readlineSync: require( 'readline-sync' )
		},
	//Class
		tools           = new GulpTools( modules ),
		templateChecker = new TemplateChecker( modules, `${ __dirname }/template` ),
	// gulp tasks
		generateDoc         = require( './tasks/generate-documentation' ),
		compileScss         = require( './tasks/compile-scss' ),
		compileTemplateScss = require( './tasks/compile-template-scss' ),
		copyAssets          = require( './tasks/copy-assets' ),
		createVariables     = require( './tasks/create-variables' );

	tools.checkTheme();

	let settings = tools.getConfig(),
		languge = tools.getLocale();

	settings.slug = tools.makeSlug( settings.theme_name );

	modules.gulp
		.task( 'generate', [ 'check-template', 'generate-section' ] )
		.task( 'check-template', () => templateChecker.check( settings ) )
		.task( 'create-variables', [ 'check-template' ], () => createVariables( settings, modules ) )
		.task( 'copy-assets', ['create-variables'], () => copyAssets( settings, modules ) )
		.task( 'compile-sass', [ 'copy-assets' ], () => compileScss( settings, modules ) )
		.task( 'generate-section', [ 'compile-sass' ], () => generateDoc( settings, modules, languge ) )
	// Services task
		.task( 'generate-config', ['compile-template-sass'], () => tools.generateConfigJSON( settings ) )
		.task( 'compile-template-sass', ['create-variables'], () => compileTemplateScss( settings, modules ) );

} )();
