/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */
 var base_url = location.protocol + '//' + location.host + '/';
 
 CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.filebrowserBrowseUrl = base_url + 'storage/app/admin/ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = base_url + 'storage/app/admin/ckfinder/ckfinder.html?type=Images';
	config.filebrowserFlashBrowseUrl = base_url + 'storage/app/admin/ckfinder/ckfinder.html?type=Flash';
	config.filebrowserUploadUrl = base_url + 'storage/app/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	config.filebrowserImageUploadUrl = base_url + 'storage/app/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	config.filebrowserFlashUploadUrl = base_url + 'storage/app/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
