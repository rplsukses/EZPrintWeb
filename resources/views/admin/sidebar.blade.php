<!-- Sidebar -->
<!DOCTYPE html>
<body class="">
	<div class="wrapper">
		<div class="sidebar" data-background-color="white" data-color="purple" data-image="">
			<div class="logo">
				<a class="simple-text logo-normal" href="{{ route ('index') }}">HALAMAN ADMIN</a>
			</div>
			<div class="sidebar-wrapper">
				<ul class="nav">
					<li class="nav-item <?php if(stripos($_SERVER['REQUEST_URI'], 'admin/index')) {echo "active";}?>">
						<a class="nav-link" href="{{ route ('index') }}"><i class="material-icons">dashboard</i>
						<p>Dashboard</p></a>
					</li>
					<li class="nav-item <?php if(stripos($_SERVER['REQUEST_URI'], 'admin/inbox')) {echo "active";}?>">
						<a class="nav-link" href="{{ route ('inbox') }}"><i class="material-icons">mail</i>
						<p>Inbox</p></a>
					</li>
					<li class="nav-item <?php if(stripos($_SERVER['REQUEST_URI'], 'admin/transaksi')) {echo "active";}?>">
						<a class="nav-link" href="{{ route ('transaksi') }}"><i class="material-icons">assignment</i>
						<p>Transaksi</p></a>
					</li>
					<li class="nav-item <?php if(stripos($_SERVER['REQUEST_URI'], 'admin/user')) {echo "active";}?>">
						<a class="nav-link" href="{{ route ('user') }}"><i class="material-icons">supervisor_account</i>
						<p>User</p></a>
					</li>
					<li class="nav-item <?php if(stripos($_SERVER['REQUEST_URI'], 'admin/mitra')) {echo "active";}?>">
						<a class="nav-link" href="{{ route ('mitra') }}"><i class="material-icons">store</i>
						<p>Mitra</p></a>
					</li>
					<li class="nav-item <?php if(stripos($_SERVER['REQUEST_URI'], 'admin/kategori')) {echo "active";}?>">
						<a class="nav-link" href="{{ route ('kategori') }}"><i class="material-icons">chrome_reader_mode</i>
						<p>Kategori</p></a>
					</li>
					<li class="nav-item <?php if(stripos($_SERVER['REQUEST_URI'], 'admin/admin')) {echo "active";}?>">
						<a class="nav-link" href="{{ route ('admin') }}"><i class="material-icons">person</i>
						<p>Admin</p></a>
					</li>
				</ul>
			</div>
		</div>
		<!-- End Sidebar -->
