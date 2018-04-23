var Crud = (function () {
	'use strict';

	var module = {};
	var selector = {};
	var host = 'http://localhost/pemrog4/ci'


	module.init = function () {
		// module.initDataTable();
		module.selector();
		module.submitCrud();
		module.deleteData();
	};

	module.selector = function () {
		selector.judul = $('#buku-judul');
		selector.kode_buku = $('#buku-kode');
		selector.pengarang = $('#buku-pengarang');
		selector.kategori = $('#buku-kategori');
		selector.submitCrud = $('#save-btn');
		selector.deleteRowBtn = $('#delete-row');
		selector.editRowBtn = $('#edit-row');
	};

	module.initDataTable = function () {
		$('#table-buku').DataTable({
			dom: 'Bfrtip',
			buttons: [
				'copy', 'csv', 'excel', 'pdf', 'print'
			]
		});
	};

	module.submitCrud = function () {
		selector.submitCrud.on('click', function () {

			var judul = selector.judul.val().trim();
			var pengarang = selector.pengarang.val().trim();
			var kategori = selector.kategori.val().trim();
			var kd_buku = selector.kode_buku.val().trim();

			var url = host + '/crud/prosestambah';

			var form = new FormData();
			form.append('judul', judul);
			form.append('kd_buku', kd_buku);
			form.append('pengarang', pengarang);
			form.append('kategori', kategori);

			$.ajax({
				url: url,
				type: "POST",
				cache: false,
				dataType: 'JSON',
				contentType: false,
				processData: false,
				data: form,
				success: function (response) {
					console.log(response.data);

					$('.form-control').val('');

					$('#formModal').modal('hide');

					// module.appendDataToTable(response.data);
					window.location.reload(true)
				}
			});
		});
	};

	module.deleteData = function () {
		$('body').on('click', '#delete-row', function (e) {
			e.preventDefault();
			console.log('da')
			const kdBuku = $(this).attr('data-id');

			var url = host + '/crud/delete/' + kdBuku;

			$.ajax({
				url: url,
				type: "GET",
				cache: false,
				dataType: 'JSON',
				contentType: false,
				processData: false,
				success: function (response) {
					window.location.reload(true)
				}
			});
		})
	};

	return module;
})();

jQuery(document).ready(function ($) {
	Crud.init();
});