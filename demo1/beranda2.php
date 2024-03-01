<?php
error_reporting(0);
if (!isset($_SESSION)) {
	session_start();
}
if (isset($_SESSION['password']) == "" || ($_SESSION['hak_akses']) == "") {
	header('location:login.php');
} else {
	$hak_akses = $_SESSION['hak_akses'];
}
?>
<?php
if ($hak_akses == "RT") {
?>
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Halo <?php echo $nama; ?>!</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="page-inner">
		<!-- Card -->
		<h3 class="fw-bold text-uppercase">DAFTAR ACC RT</h3>
		<!-- Card With Icon States Background -->
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body ">
						<div class="row align-items-center">
							<a href="?halaman=sudah_acc_sktm">
								<div class="col-icon">
									<div class="icon-big text-center icon-primary bubble-shadow-small">
										<i class="flaticon-envelope-2"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SURAT KETERANGAN TIDAK MAMPU</p>
									<?php
									$sql = "SELECT * FROM data_request_sktm WHERE status=0";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];

									// if($status=="1"){
									// 	$count ="Belum ada request";
									// }


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=sudah_acc_sku">
								<div class="col-icon">
									<div class="icon-big text-center icon-success bubble-shadow-small">
										<i class="flaticon-envelope-2"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SURAT KETERANGAN USAHA</p>
									<?php
									$sql = "SELECT * FROM data_request_sku WHERE status=0";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];

									// if($status=="1"){
									// 	$count ="Belum ada request";
									// }


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=sudah_acc_kk">
								<div class="col-icon">
									<div class="icon-big text-center icon-warning bubble-shadow-small">
										<i class="flaticon-envelope-2"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SURAT KETERANGAN KARTU KELUARGA</p>
									<?php
									$sql = "SELECT * FROM data_request_kk WHERE status=0";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];

									// if($status=="1"){
									// 	$count ="Belum ada request";
									// }


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=sudah_acc_skd">
								<div class="col-icon">
									<div class="icon-big text-center icon-secondary bubble-shadow-small">
										<i class="flaticon-envelope-2"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SURAT KETERANGAN DOMISILI</p>
									<?php
									$sql = "SELECT * FROM data_request_skd WHERE status=0";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];

									// if($status=="1"){
									// 	$count ="Belum ada request";
									// }


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=sudah_acc_akta">
								<div class="col-icon">
									<div class="icon-big text-center icon-danger bubble-shadow-small">
										<i class="flaticon-envelope-2"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SURAT KETERANGAN LAHIR</p>
									<?php
									$sql = "SELECT * FROM data_request_akta WHERE status=0";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];

									// if($status=="1"){
									// 	$count ="Belum ada request";
									// }


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=sudah_acc_ktp">
								<div class="col-icon">
									<div class="icon-big text-center icon-info bubble-shadow-small">
										<i class="flaticon-envelope-2"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SURAT KETERANGAN LAHIR</p>
									<?php
									$sql = "SELECT * FROM data_request_ktp WHERE status=0";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];

									// if($status=="1"){
									// 	$count ="Belum ada request";
									// }


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
} elseif ($hak_akses == "Lurah") {
?>
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Halo <?php echo $hak_akses; ?>!</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="page-inner">
		<!-- Card -->
		<h4 class="page-title">DAFTAR ACC KELURAHAN</h4>
		<!-- Card With Icon States Background -->
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body ">
						<div class="row align-items-center">
							<a href="?halaman=belum_acc_sktm">
								<div class="col-icon">
									<div class="icon-big text-center icon-primary bubble-shadow-small">
										<i class="flaticon-envelope-3"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SURAT KETERANGAN TIDAK MAMPU</p>
									<?php
									$sql = "SELECT * FROM data_request_sktm WHERE status=1";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=belum_acc_sku">
								<div class="col-icon">
									<div class="icon-big text-center icon-success bubble-shadow-small">
										<i class="flaticon-envelope-3"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SURAT KETERANGAN USAHA</p>
									<?php
									$sql = "SELECT * FROM data_request_sku WHERE status=1";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];

									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=belum_acc_kk">
								<div class="col-icon">
									<div class="icon-big text-center icon-warning bubble-shadow-small">
										<i class="flaticon-envelope-3"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SURAT KETERANGAN KARTU KELUARGA</p>
									<?php
									$sql = "SELECT * FROM data_request_kk WHERE status=1";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];
									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=belum_acc_skd">
								<div class="col-icon">
									<div class="icon-big text-center icon-secondary bubble-shadow-small">
										<i class="flaticon-envelope-3"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SURAT KETERANGAN DOMISILI</p>
									<?php
									$sql = "SELECT * FROM data_request_skd WHERE status=1";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];
									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=belum_acc_akta">
								<div class="col-icon">
									<div class="icon-big text-center icon-danger bubble-shadow-small">
										<i class="flaticon-envelope-3"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SURAT KETERANGAN LAHIR</p>
									<?php
									$sql = "SELECT * FROM data_request_akta WHERE status=1";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];
									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=belum_acc_ktp">
								<div class="col-icon">
									<div class="icon-big text-center icon-info bubble-shadow-small">
										<i class="flaticon-envelope-3"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SURAT KETERANGAN KARTU TANDA PENDUDUK </p>
									<?php
									$sql = "SELECT * FROM data_request_ktp WHERE status=1";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];
									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
} elseif ($hak_akses == "Admin") {
?>
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Halo <?php echo $hak_akses; ?>!</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="page-inner">
		<!-- Card -->
		<h4 class="page-title">DAFTAR ACC KELURAHAN</h4>
		<!-- Card With Icon States Background -->
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body ">
						<div class="row align-items-center">
							<a href="?halaman=belum_acc_sktm">
								<div class="col-icon">
									<div class="icon-big text-center icon-primary bubble-shadow-small">
										<i class="flaticon-envelope-3"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SURAT KETERANGAN TIDAK MAMPU</p>
									<?php
									$sql = "SELECT * FROM data_request_sktm WHERE status=1";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];
									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=belum_acc_sku">
								<div class="col-icon">
									<div class="icon-big text-center icon-success bubble-shadow-small">
										<i class="flaticon-envelope-3"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SURAT KETERANGAN USAHA</p>
									<?php
									$sql = "SELECT * FROM data_request_sku WHERE status=1";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];
									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=belum_acc_kk">
								<div class="col-icon">
									<div class="icon-big text-center icon-warning bubble-shadow-small">
										<i class="flaticon-envelope-3"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SURAT KETERANGAN KARTU KELUARGA</p>
									<?php
									$sql = "SELECT * FROM data_request_kk WHERE status=1";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];
									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=belum_acc_skd">
								<div class="col-icon">
									<div class="icon-big text-center icon-secondary bubble-shadow-small">
										<i class="flaticon-envelope-3"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SURAT KETERANGAN DOMISILI </p>
									<?php
									$sql = "SELECT * FROM data_request_skd WHERE status=1";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];
									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=belum_acc_akta">
								<div class="col-icon">
									<div class="icon-big text-center icon-danger bubble-shadow-small">
										<i class="flaticon-envelope-3"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SURAT KETERANGAN LAHIR</p>
									<?php
									$sql = "SELECT * FROM data_request_akta WHERE status=1";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=belum_acc_ktp">
								<div class="col-icon">
									<div class="icon-big text-center icon-info bubble-shadow-small">
										<i class="flaticon-envelope-3"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SURAT KETERANGAN KARTU TANDA PENDUDUK</p>
									<?php
									$sql = "SELECT * FROM data_request_ktp WHERE status=1";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
}
?>