<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading"></div>
				<form action="<?php echo base_url();?>">
					<div class="panel-body">
							<!-- Text input-->
							<div class="form-group clearfix">
								<label class="col-sm-6 control-label">Username</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="username" value="">
								</div>
							</div>

							<div class="form-group clearfix">
								<label class="col-sm-6 control-label">Password</label>
								<div class="col-sm-6">
									<input type="password" class="form-control" name="password" value="">
								</div>
							</div>

							<div class="form-group clearfix">
								<label class="col-sm-6 control-label">Nama lengkap</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="name_lengkap" value="">
								</div>
							</div>

							<div class="form-group clearfix">
								<label class="col-sm-6 control-label">E-mail</label>
								<div class="col-sm-6">
									<input type="email" class="form-control" name="email" value="">
								</div>
							</div>

							<div class="form-group clearfix">
								<label class="col-sm-6 control-label">No tlp/ Hp</label>
								<div class="col-sm-6">
									<input type="numbe" class="form-control" name="nohp" value="">
								</div>
							</div>

							<div class="form-group clearfix">
								<label class="col-sm-6 control-label">Surat permohonan</label>
								<div class="col-sm-6">
									<input type="file" class="form-control" name="filePermohonan" value="" id="srt-permohonan">
								</div>
							</div>

							<div class="form-group clearfix">
								<label class="col-sm-6 control-label">Surat ijin usaha perdagangan</label>
								<div class="col-sm-6">
									<input type="file" class="form-control" name="srt_ijin" value="" id="srt-ijin">
								</div>
							</div>

							<div class="form-group clearfix">
								<label class="col-sm-6 control-label">Tanda daftar perusahaan</label>
								<div class="col-sm-6">
									<input type="file" class="form-control" name="tnd-perusahaan" value="" id="srt-perusahaan">
								</div>
							</div>
						</div>
						<div class="panel-footer">
							<button type="" class="btn btn-sm btn-primary">Save</button>
							<button type="reset" class="btn btn-sm btn-warning">Reset</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- form result  -->
		<div class="col-sm-6 col-sm-offset-3 hidden" id="col-result">
			<div class="panel panel-default">
					<div class="panel-body">
						<div class="jumbotron" id="result-form-fakultas">

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/vendor/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/upload-document.js"></script>