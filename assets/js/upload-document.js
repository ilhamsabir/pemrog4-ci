var UploadDocument = (function () {
	'use strict';

	var module = {};
	var selector = {};
	var host = 'http://localhost/pemrog4/ci'

	module.init = function () {
		module.selector();
		module.onUploadSrtPermohonan();
	};

	module.selector = function () {
		selector.srtPermohonan = $('#srt-permohonan');
		selector.srtIjin = $('#srt-ijin');
		selector.srtPerusahaan = $('#srt-perusahaan');
	};


	module.onUploadSrtPermohonan = function () {
		selector.srtPermohonan.on('change', function (e) {
			var fileName = 'filePermohonan';
			var value = $(this).val();
			var url = host + '/uploaddocument/uploadSrtPermohonan';

			if (value !== '') {
				module.doUpload(url, value, fileName)
			}

		})
	};

	module.doUpload = function (url, value, fileName) {

		var form = new FormData();
		form.append(fileName, value);

		$.ajax({
			url: url,
			// dataType: 'json',
			cache: false,
			// contentType: false,
			processData: false,
			type: 'post',
			contentType: 'multipart/form-data',
			data: form,
			success: function (response) {
				console.log('response', response)
			},
			error: function (e) {
				console.log('e', e)
			}
		});
	};

	return module;
})();

jQuery(document).ready(function ($) {
	UploadDocument.init();
});