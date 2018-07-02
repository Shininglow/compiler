'use strict';

module.exports = function copyAssets( settings, modules ) {
	modules.copydir.sync(
		`${ __dirname }/../template/${ settings.template }/${ settings.assets_path }/`,
		`${ settings.outPutFolder }/${ settings.slug }/${ settings.assets_path }`
	);

	return modules.gulp;
}
