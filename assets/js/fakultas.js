var Fakultas = (function () {
	'use strict';

	var module = {};
	var selector = {};

	var jenjang = [{
			id: 0,
			name: '',
		},
		{
			id: 1,
			name: 'S1',
		},
		{
			id: 2,
			name: 'D3',
		},
	];

	var prodi = [{
			id: 0,
			jenjangId: 0,
			name: '',
		},
		{
			id: 1,
			jenjangId: 1,
			name: 'Sistem Informasi',
		},
		{
			id: 2,
			jenjangId: 1,
			name: 'Teknik Informatika',
		},
		{
			id: 3,
			jenjangId: 2,
			name: 'Sistem Informasi',
		},
		{
			id: 4,
			jenjangId: 2,
			name: 'Teknik Informatika',
		},
	];

	module.init = function () {
		module.selector();
		module.getJenjangData();
		module.onChangeJenjangSelect();
		module.submitJenjangProdi();
	};

	module.selector = function () {
		selector.selectJenjang = $('#select-jenjang');
		selector.selectProdi = $('#select-prodi');
		selector.saveBtn = $('#save-btn');
		selector.resultColumn = $('#col-result');
		selector.resultForm = $('#result-form-fakultas');
	};



	// get list prodi data
	module.getJenjangData = function () {
		var option = '';

		jenjang.forEach(element => {
			option += `<option value="${element.id}">${element.name}</option>`;
		});

		selector.selectJenjang.html(option)
	};

	// on change select jenjang
	module.onChangeJenjangSelect = function () {
		selector.selectJenjang.on('change', function () {
			var value = $(this).val();
			var option = '';

			prodi.forEach(elem => {
				if (elem.jenjangId == value) {
					console.log('elem', elem.jenjangId);
					option += `<option value="${elem.id}">${elem.name}</option>`;
				}

			});

			selector.selectProdi.html(option)
		})
	};

	// submit data jenjang dan parodi
	module.submitJenjangProdi = function () {
		selector.saveBtn.on('click', function (e) {
			e.preventDefault();

			var jenjangVal = selector.selectJenjang.val();
			var prodiVal = selector.selectProdi.val();

			// if(jenjangVal ===)
			var resultVal = `
				<span>Jenjang: ${jenjangVal}</span>
				<span>Prodi: ${prodiVal}</span>
			`;
			selector.resultColumn.removeClass('hidden');
			selector.resultForm.html(resultVal);
		})
	};



	return module;
})();

jQuery(document).ready(function ($) {
	Fakultas.init();
});