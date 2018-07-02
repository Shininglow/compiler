'use strict';

module.exports = function generateDocumentation( settings, modules, inputLanguage = false ) {
	let allLanguages = Object.keys( settings.language ).map( function( key ) { return key } ),
		languageColection = ( inputLanguage ) ? [ inputLanguage ] : [ ...allLanguages ],
		language,
		languageKey,
		languageFolder,
		component,
		componentKey,
		components = settings.components,
		componentFolder,
		src =  `./template/${ settings.template }/*.php`;

	for ( languageKey in languageColection ) {

		language = languageColection[ languageKey ];
		languageFolder = ( settings.default_language === language ) ? '' : `${ language.toLowerCase() }/`;

		for ( componentKey in components ) {
			component = components[ componentKey ];
			componentFolder = ( component === settings.main_component ) ? '' : component;

			modules.gulp
				.src( src )
				.pipe( modules.php2html( {
					getData: {
						language: language,
						component: component,
						settings: settings,
						generate: true
					},
					verbose: true
				} ) )
				.pipe( modules.gulp.dest( `${ settings.outPutFolder }/${ settings.slug }/${ languageFolder }${ componentFolder }` ) );
		}
	};
	//console.log( 'Generated documentation successfully!' );
	return modules.gulp;
}
