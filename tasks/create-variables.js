'use strict';

module.exports = function createVariables( settings, modules ) {
	let files = {
		variables: {
			path: `${ __dirname }/../template/${ settings.template }/${ settings.assets_path }/sass/_variables.scss`,
			content:''
		},
		fonts: {
			path: `${ __dirname }/../template/${ settings.template }/${ settings.assets_path }/sass/_fonts.scss`,
			content:''
		}
	},
	filesIndex,
	streem;

	for ( filesIndex in files ) {
		let variableType = filesIndex;

		switch( variableType ) {
			case 'variables':
				files[ filesIndex ].content = '';

				for ( let color in settings.colors) {
					files[ filesIndex ].content += `$${ color }Color: ${ settings.colors[ color ] };\n`;
				}

				files[ filesIndex ].content +=`$defaultHeaderColor: $primaryColor;\n$heroBanner: "${ settings.header_banner }";\n`;
				files[ filesIndex ].content = files[ filesIndex ].content.replace( /\t/g, '' );
			break;
			case 'fonts':
				let importFonts = `@import url("${ settings.font.body_src }");`;
				importFonts += ( settings.font.body_src !== settings.font.header_logo_src ) ? `\n@import url("${ settings.font.header_logo_src }");` : '' ;

				files[ filesIndex ].content = `\
					${ importFonts }\n\
					$fontFamily: ${ settings.font.body };\n\
					$logoFontFamily: ${ settings.font.header_logo };\n\
				`.replace( /\t/g, '' );
			break;
		}

		streem = modules.fs.writeFileSync(
			files[ filesIndex ].path,
			files[ filesIndex ].content,
			'utf8'
		);
	};

	return modules.gulp;
}
