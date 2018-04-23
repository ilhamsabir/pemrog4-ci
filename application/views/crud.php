<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3" style="margin-bottom: 2rem">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
				Tambah data
			</button>

			<button class="btn btn-success">Export to xls</button>

		</div>

		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">CRUD </div>
					<div class="panel-body">
						<table class="table table-condensed" id="table-buku">
							<thead>
								<tr>
									<th>Kode Buku</th>
									<th>Judul Buku</th>
									<th>Pengarang</th>
									<th>Kategori</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$offset=0;
									$no=$offset;
									foreach($data_buku as $row){ ?>
									<tr id="row-tabel" data-id="<?php echo $row->kd_buku; ?>">
										<td><?php echo $row->kd_buku; ?></td>
										<td><?php echo $row->judul; ?></td>
										<td><?php echo $row->pengarang; ?></td>
										<td><?php echo $row->kategori; ?></td>
										<td>
											<button class="btn btn-warning btn-xs" data-id="<?php echo $row->kd_buku;?>">
												<i class="fa fa-pencil"></i> Edit
											</button>
											<button class="btn btn-danger btn-xs" id="delete-row" data-id="<?php echo $row->kd_buku;?>">
												<i class="fa fa-trash"></i> Delete
											</button>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Modal Form</h4>
			</div>
			<div class="modal-body">
				<div class="form-group clearfix">
					<label class="col-sm-4 control-label" for="Nome">Kode Buku</label>
					<div class="col-sm-8">
						<input type="" class="form-control" name="kd_buku" id="buku-kode">
					</div>
				</div>
				<!-- Text input-->
				<div class="form-group clearfix">
					<label class="col-sm-4 control-label" for="Nome">Judul Buku</label>
					<div class="col-sm-8">
						<input type="" class="form-control" name="judul" id="buku-judul">
					</div>
				</div>

				<div class="form-group clearfix">
					<label class="col-sm-4 control-label" for="Nome">Nama Pengarang</label>
					<div class="col-sm-8">
						<input type="" class="form-control" name="pengarang" id="buku-pengarang">
					</div>
				</div>

				<div class="form-group clearfix">
					<label class="col-sm-4 control-label" for="Nome">Kategori</label>
					<div class="col-sm-8">
						<input type="" class="form-control" name="kategori" id="buku-kategori">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="" class="btn btn-sm btn-primary" id="save-btn">Save</button>
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script src="<?php echo base_url();?>assets/js/vendor/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/crud.js"></script>