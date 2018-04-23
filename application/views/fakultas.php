<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">Prodi</div>
					<div class="panel-body">
						<!-- Text input-->
						<div class="form-group clearfix">
							<label class="col-sm-3 control-label" for="Nome">Jenjang</label>
							<div class="col-sm-9">
								<select class="form-control" name="jenjang" id="select-jenjang">
								</select>
							</div>
						</div>

						<div class="form-group clearfix">
							<label class="col-sm-3 control-label" for="Nome">Prodi</label>
							<div class="col-sm-9">
							<select class="form-control" name="prodi" id="select-prodi">
							</select>
							</div>
						</div>
					</div>
					<div class="panel-footer">
						<button type="" class="btn btn-sm btn-primary" id="save-btn">Save</button>
						<button type="" class="btn btn-sm btn-warning">Reset</button>
					</div>
				</div>
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
<script src="<?php echo base_url();?>assets/js/fakultas.js"></script>
