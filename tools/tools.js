'use strict';

class GulpTools {

	constructor( modules = {} ) {
		this.modules  = modules;
	}

	getPath() {
		let path = false,
			argv = this.modules.yargs.argv.path;

		if ( undefined !== argv && true !== argv ) {
			path = ( this.modules.yargs.argv.path + '/' ).replace( /\\\\$|\/\/$|\\\/$|\\/g, '\/' );
		}

		return path;
	}

	getLocale() {
		return ( this.modules.yargs.argv.locale ) ? this.modules.yargs.argv.locale : false ;
	}

	checkTheme() {
		let themePath = this.getPath();

		if ( ! themePath ) {
			console.log( 'Pleas enter theme path. Example: gulp generate --path theme_path' );
			process.exit();
		}

		if( ! this.modules.fs.existsSync( themePath ) ){
			console.log( 'Theme not found.' );
			process.exit();
		}

		return true;
	}

	getConfig() {
		let themePath      = this.getPath(),
			ThemeInfoClass = null,
			globalConfig   = {},
			themeConfig    = {},
			themeInfo      = {};

		try{
			globalConfig = require( '../config.json' );
		} catch( error ) {
			console.log( `${ error.name }: Global config.json in tool has syntax error.` );
			process.exit();
		}

		if ( themePath && this.modules.fs.existsSync( `${ themePath }config.json` ) ) {

			try{
				themeConfig = require( `${ themePath }config.json` );
			} catch( error ) {
				console.log( `${ error.name }: config.json in theme has syntax error.` );
				process.exit();
			}
		}

		ThemeInfoClass = new ThemeInformation( themePath, globalConfig, this.modules )
		themeInfo = ThemeInfoClass.getInfo();

		return Object.assign( globalConfig, themeInfo, themeConfig );
	}

	makeSlug( name ){
		let slug = name.toLowerCase();

		slug = slug.replace( /\s|_|&/gim, '-' )

		return slug;
	}

	generateConfigJSON( settings ) {
		let outputFilename = `${ __dirname }\\template\\${ settings.template }\\theme-config.json`.replace( 'tools\\', '' );

		this.modules.fs.writeFile( outputFilename, JSON.stringify( settings, null, 4 ), function( err ) {
			if ( err ) {
				console.log( err );
			} else {
				console.log( `JSON saved to - ${ outputFilename }` );
			}
		} );
	}
}

global.GulpTools = GulpTools;
