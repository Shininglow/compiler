'use strict';

class ThemeInformation {

	constructor( path = '', settings = {}, modules = {} ) {
		this.path       = path;
		this.modules    = modules;
		this.settings   = settings;
		this.customizer = false;
	}

	getInfo() {
		let styleFile                  = this.getFileContent( `${ this.path }style.css` ),
			data                       = this.getFileData( styleFile ) ;

			data.font                  = this.getFont( `${ this.path }${ this.settings.customizer_path }` );
			data.colors                = this.getColors( `${ this.path }${ this.settings.customizer_path }` );
			data.logo                  = this.getLogo( `${ this.path }${ this.settings.customizer_path }` );

			data.plugins               = this.getComponentList( `${ this.path }${ this.settings.plugin_path }`, this.settings.exclud_plugins );
			data.widgets               = this.get_widgets( `${ this.path }${ this.settings.widget_path }`, this.settings.exclud_widgets, data.plugins, this.settings );

			data.customizer            = this.getAllCustomizerOptions( `${ this.path }${ this.settings.customizer_path }`, this.settings.exclud_customizer );
			data['builder-modules']    = this.get_builder_modules( this.path, this.settings, data.plugins );

		return data;
	}

	getFileData( data, customFields = false ) {
		let parsedData = data.replace( "\r", "\n" ),
			fields = customFields || [
				'Theme Name',
				'Theme URI',
				'Author',
				'Description',
				'Version',
				'License',
				'License URI',
				'Text Domain',
				'Tags',
				'DocumentationID',
				'Template Id',
			],
			outputData = {};

		for ( let key in fields ) {

			let reg = new RegExp( '^[ \t\/*#@]*' + fields[ key ] + ':(.*)$', 'gim' ),
				result = parsedData.match( reg ),
				newKey, value;

			if ( ! result ) {
				continue;
			}

			result = result[0].split( /:(?!\/\/)/ );

			newKey = result[0].replace( /\s/g, '_' ).toLowerCase();
			value = result[1].trim();

			outputData[ newKey ] = value;
		}

		return outputData;
	}

	getFileContent( file ) {
		return this.modules.fs.readFileSync( file , 'utf8' );
	}

	getComponentList( path = '', excludList = [] ) {
		let componentList = false,
			excludPosition;

		if ( this.modules.fs.existsSync( path ) ) {
			componentList = this.modules.fs.readdirSync( path );
		}

		if( componentList && excludList[ 0 ] ) {
			excludList = excludList.map( function( element ){
				element = element.replace( /\s+/g, '-').toLowerCase();
				return element;
			} )

			componentList = componentList.filter( function( element ){
				if ( -1 === excludList.indexOf( element ) ) {
					return true;
				}
			} );
		}

		return componentList;
	}

	getCustomizerOptions( path, options = false ) {
		let outputData = {};

		if ( ! options ) {
			return false;
		}

		if ( ! this.customizer ) {
			this.customizer = this.getFileContent( path ).match( /['"]options['"].*=>.*array.*\([\s\S]*?\);/ )[0];
		}

		for ( let key in options ) {

			let newKey = options[ key ],
				regOption = new RegExp( '[\'"]' + newKey + '[\'"].*=>.*array.*[\\s\\S]*?[\'"]default[\'"]\\s*=>.*,' ),
				option = this.customizer.match( regOption ),
				regField,
				value;
			if ( ! option ) {
				continue;
			}

			regField = new RegExp( '[\'"]default[\'"]\\s*=>\\s*.*,', 'gim' );
			value = option[0].match( regField );


			if ( ! value ) {
				value = '';
			}else{
				value = value[0].split( /\s*=>\s*/gim );
				value = value[1].replace( /(',|",|'|")/gim, '' );
			}

			outputData[ newKey ] = value;
		}

		return outputData;
	}

	getAllCustomizerOptions( path, excludList ){
		let result;

		if ( ! this.customizer ) {
			this.customizer = this.getFileContent( path ).match( /['"]options['"].*=>.*array.*\([\s\S]*?\);/ )[0];
		}

		result = this.customizer.replace( /['"],[\t\s\n]*['"].*['"].*=>.*array/g, '' );
		result = result.match( /(['"].*['"].*=>.*array\()/g );
		result = result.map( function( element ){
			return element.match( /['"].*['"]/ )[0].replace( /['"]/g, '' ).replace( /_/g, '-' );
		} );

		result = result.filter( function( element ){
			if ( -1 === excludList.indexOf( element ) ) {
				return true;
			}
		} );

		return result;
	}

	getFont( path ) {
		let self = this,
			fontSrc = 'https://fonts.googleapis.com/css?family=%%family%%:%%weight%%',
			fontLocation = [
				'body',
				'header_logo'
			],
			fontOptions = [
				'font_weight',
				'font_family'
			],
			outputSettings = {},
			fontFamily,
			fontFamilySrc = '' ;


		fontLocation.forEach( function( locaiot ) {
			let optionsKey = fontOptions.map( function( options ) {
					return `${ locaiot }_${ options }`;
				}),
				options    = self.getCustomizerOptions( path, optionsKey ),
				style      = 'normal',
				weight     = '400',
				fontValue;

			for ( let key in options ) {
				if ( ! options.hasOwnProperty( key ) ) {
					continue;
				}

				let value  = options[ key ],
					matchResult;


				if ( -1 !== key.indexOf( 'font_family' ) ) {
					matchResult = value.match( /^[\w\s]*/ );

					if( fontFamily !== matchResult[0] ){
						fontFamily = matchResult[0].replace( /\s+/g, '+' );
					}

					if ( matchResult[0] ) {
						fontValue = value.replace( matchResult[0], `"${ matchResult[0] }"` );
					}
				}

				if ( -1 !== key.indexOf( 'font_weight' ) ) {
					weight = value;
				}

				if ( -1 !== key.indexOf( 'font_style' ) ) {
					style = ( 'normal' === value ) ? '' : value.slice( 0, 1 ) ;
				}
			}
			outputSettings[ locaiot ] = fontValue;

			fontFamilySrc = fontSrc
				.replace( '%%family%%', fontFamily )
				.replace( '%%weight%%', weight + style );

			outputSettings[ locaiot ] = outputSettings[ locaiot ].replace( ' / ', '/' ).trim();
			outputSettings[ locaiot + '_src' ] = fontFamilySrc;
		} );

		return outputSettings;
	}

	getColors( path ) {
		let colorsOptions = this.getCustomizerOptions(
			path,
			[
				'regular_accent_color_1',
				'regular_accent_color_2',
				'regular_text_color',
				'regular_link_color',
			]
		),
		alternativeSlug = {
			regular_accent_color_1: 'primary',
			regular_accent_color_2: 'secondary',
			regular_text_color: 'text',
			regular_link_color: 'link',
		},
		outputData = {};

		if( outputData ){
			for ( let key in alternativeSlug ) {
				outputData[ alternativeSlug[ key ] ] = colorsOptions[ key ];
			}
		}

		return outputData;
	}

	getLogo( path ) {
		let logoOptions = this.getCustomizerOptions(
			path,
			[
				'header_logo_url',
				'footer_logo_url'
			]
		),
		outputData = {};

		if ( logoOptions ) {
			outputData.logo_url = ( logoOptions['header_logo_url'] ) ? logoOptions['header_logo_url'] : logoOptions['footer_logo_url'] ;
			outputData.logo_url = outputData.logo_url.replace( '%s/', this.path );
		}
		return outputData;
	}

	get_widgets( themePath, exclud_widgets, plugins, settings ){
		let widgets = this.getComponentList( themePath ),
			key;

		widgets = [ ...widgets, ...settings.default_widgets ];

		if ( plugins ) {
			for ( key in settings.widgets_in_plugin ) {
				if ( -1 !== plugins.indexOf( key ) ) {
					widgets.push( ...settings.widgets_in_plugin[ key ] );
				}
			}
		} else {

		}

		widgets = widgets.filter( function( widget ){
			return ( -1 === exclud_widgets.indexOf( widget ) ) ? widget: false;
		} );

		return widgets;
	}

	get_builder_modules( themePath, settings, plugins ){
		let builders        = settings.builder,
			buildersCount   = builders.length - 1,
			exclude         = [ '-item.php' ].join('|'),
			filteredModules = [],
			modulesPath,
			builderName,
			modules;

		if( ! plugins[ 0 ] ){
			return false;
		}

		for ( let index in builders ) {
			if( -1 !== plugins.indexOf( builders[ index ] ) ){
				builderName = builders[ index ];
				break;
			} else if( index == buildersCount ){
				return false;
			}
		}

		modulesPath = `${ themePath }${ settings.plugin_path }/${ builderName }/${ settings.builder_modules_path }`;
		modules     = this.getComponentList( modulesPath, [ 'templates' ] );

		modules.forEach( function( element ){
			if ( -1 === element.search( exclude ) ) {
				element = element.replace( /(^class-builder-module-|\.php$)/g, '' );
				filteredModules.push( element );
			}
		} );

		return filteredModules;
	}
}

global.ThemeInformation = ThemeInformation;
