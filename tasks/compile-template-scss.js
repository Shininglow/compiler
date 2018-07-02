module.exports = function compileScss( settings, modules ){
	let compileSettings = {
			outputStyle: 'compressed',
			suffix: '.min'
		};

	return modules.gulp
		.src( `${ __dirname }/../template/${ settings.template }/assets/sass/style.scss` )
		.pipe( modules.plumber() )
		.pipe( modules.autoprefixer() )
		.pipe( modules.sass( compileSettings ) )
		.pipe( modules.rename( { suffix: compileSettings.suffix } ) )
		.pipe( modules.gulp.dest( `${ __dirname }/../template/${ settings.template }/assets/css/min/` ) );
}
