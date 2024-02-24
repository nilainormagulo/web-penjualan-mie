<?php include "navigasi.php"; ?>
 
<div class="container">
		<div class="row">
			<div class="col-md-12">	
				<h3>Silahkan Login Terlebih Dahulu</h3>
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
						Login
				</button>
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">INPUT DATA</h4>	
							</div>
							<div class="modal-body">
								<form action="?" method="post">
									<div class="form-group">
									<label for="nim">Nama</label>
									<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
									</div>
									<div class="form-group">
									<label for="nama">No Telepon</label>
									<input type="text" class="form-control" name="No Telepon" placeholder="Isikan Nomor Telepon">
									</div>
									<div class="form-group">
									<label for="alamat">Alamat</label>
									<textarea name="alamat"class="form-control" placeholder="Isikan Alamat Lengkap"></textarea>
									</div>
									<button type="submit" class="btn btn-info">Simpan</button>
									<button type="reset" class="btn btn-info">Batal</button>
								</form>
							</div>	
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Tutup LOgin</button>
							</div>
						</div>
					</div>
				</div>	
			</div>
	</div>
</div>
<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>