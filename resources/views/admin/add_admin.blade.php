@extends ('admin/header')
@extends ('admin/footer')
@extends ('admin/sidebar')

			<!-- Content -->
			<div class="main-panel">
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header card-header-primary">
									<h4 class="card-title">Tambah Admin</h4>
								</div>
								<div class="card-body">
									<form>
										<div class="form-group">
											<label>Masukkan ID</label> <input class="form-control" placeholder="your ID" type="text">
										</div>
										<div class="form-group">
											<label>Masukkan Password</label> <input class="form-control" placeholder="your password" type="text">
										</div>
										<div class="form-group">
											<label>Masukkan Nama</label> <input class="form-control" placeholder="your name" type="text">
										</div>
										<div class="form-group">
											<label>Masukkan Email</label> <input class="form-control" placeholder="your email" type="text">
										</div>
									</form><a class="btn btn-primary pull-right" href="admin.php">ADD</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</body>
</html>
