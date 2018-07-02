'use strict';

class TemplateChecker {

	constructor( modules = {}, path = '' ) {
		this.path     = path;
		this.modules  = modules;
	}

	check( setting ){
		let checkResult = this.checkTemplate( setting ),
			information = '',
			key, value, componentName, elementInfo;

		if ( Object.keys( checkResult )[0] ) {
			information += '\nThere is no translations for these components:\n\n';

			for ( key in checkResult ) {
				componentName = key.replace( /-|_/g, ' ' );
				componentName = componentName.charAt( 0 ).toUpperCase() + componentName.slice( 1 ) + ':\n';

				information += componentName ;

				elementInfo = checkResult[ key ].map( function( element, index ){
					element = element.replace( /-|_/g, ' ' );
					element = '\t - ' + element.charAt(0).toUpperCase() + element.slice(1);
					return element;
				} );
				elementInfo = elementInfo.join( '\n' )

				information += elementInfo + '\n\n' ;
			}

			console.log( information );

			if ( this.modules.readlineSync.keyInYN( 'Do you want to generate documentation?' ) ) {
					return this.modules.gulp;
			}
			console.log('Ok, not generating.');
			process.exit(1);
		}
	}

	checkTemplate ( setting ) {
		let templateName = setting.template,
			components = {
				section: {
					path: `${ this.path }/${ templateName }/components`,
					theme: setting.components,
					template: [],
				},
				widgets: {
					path: `${ this.path }/${ templateName }/components/widgets`,
					theme: setting.widgets,
					template: [],
				},
				plugins: {
					path: `${ this.path }/${ templateName }/components/plugins`,
					theme: setting.plugins,
					template: [],
				},
				builder_modules: {
					path: `${ this.path }/${ templateName }/components/builder-modules`,
					theme: setting['builder-modules'],
					template: [],
				},
				customizer: {
					path: `${ this.path }/${ templateName }/components/customizer`,
					theme: setting['customizer'],
					template: [],
				},
			},
			shortagComponents = {};

		for ( let key in components ) {
			let component = components[ key ];

			if( this.modules.fs.existsSync( component.path ) ) {
				component.template = this.modules.fs.readdirSync( component.path );
				component.template = component.template.map( function( element ){
					return element.replace( /(\.php|\.html|\.md)$/g, '' );
				} )

				for ( let themeKey in component.theme ) {
					let themeComponent = component.theme[ themeKey ];

					if ( -1 === component.template.indexOf( themeComponent ) ) {
						if ( ! shortagComponents[ key ] ) {
							shortagComponents[ key ] = [];
						}

						shortagComponents[ key ].push( themeComponent );
					}
				}
			}
		}

		return shortagComponents;
	}
}

global.TemplateChecker = TemplateChecker;
