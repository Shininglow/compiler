module.exports = function compileScss( settings, modules ){
	let compileSettings = {
			outputStyle: 'compressed',
			suffix: '.min'
		};

	return modules.gulp
		.src( `${ settings.outPutFolder }/${ settings.slug }/${ settings.assets_path }/sass/style.scss` )
		.pipe( modules.plumber() )
		.pipe( modules.autoprefixer() )
		.pipe( modules.sass( compileSettings ) )
		.pipe( modules.rename( { suffix: compileSettings.suffix } ) )
		.pipe( modules.gulp.dest( `${ settings.outPutFolder }/${ settings.slug }/${ settings.assets_path }/css/min/` ) );
}
