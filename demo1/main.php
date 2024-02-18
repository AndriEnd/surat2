<?php
session_start();
if (isset($_SESSION['password']) == "" || ($_SESSION['hak_akses']) == "") {
	header('location:login.php');
} else {
	$hak_akses = $_SESSION['hak_akses'];
	$nama = $_SESSION['nama'];
	$nik = $_SESSION['nik'];
}
?>
<?php include 'header.php'; ?>
<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
	<div class="sidebar-wrapper scrollbar scrollbar-inner">
		<div class="sidebar-content">
			<ul class="nav nav-info">
				<li class="nav-item active">
					<a href="main.php">
						<i class="fas fa-home"></i>
						<p>Dashboard</p>
					</a>
				<li class="nav-section">
					<span class="sidebar-mini-icon">
						<i class="fa fa-ellipsis-h"></i>
					</span>
					<h4 class="text-section">fitur</h4>
				</li>
				<?php
				if ($hak_akses == "Pemohon") {
				?>
					<li class="nav-item">
						<a href="?halaman=tampil_pemohon">
							<i class="fas fa-user-alt"></i>
							<p>Biodata Anda</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="?halaman=tampil_status">
							<i class="far fa-envelope"></i>
							<p>Status Layanan</p>
						</a>
					</li>
					<!--<li class="nav-item">
							<a href="?halaman=tampil_download">
								<i class="far fa-calendar-check"></i>
								<p>Download Surat</p>
							</a>
						</li> -->

				<?php
				}
				if ($hak_akses == "RT") {
				?>
					<!--<li class="nav-item">
							<a href="?halaman=permohonan_surat">
								<i class="far fa-calendar-check"></i>
								<p>Cetak Surat</p>
							</a>
						</li> -->
					<li class="nav-item">
						<a href="?halaman=tampil_penduduk">
							<i class="far fa-user"></i>
							<p>Data Penduduk</p>
						</a>
						<!--<li class="nav-item">
							<a href="?halaman=surat_dicetak">
								<i class="far fa-calendar-check"></i>
								<p>Surat Selesai</p>
							</a>
						</li> -->
					<?php
				}
					?>

					<li class="mx-4 mt-2">
						<a href="logout.php" class="btn btn-danger btn-block"><span class="btn-label mr-2"> <i class="icon-logout"></i> </span>Logout</a>
					</li>
			</ul>
		</div>
	</div>
</div>

<div class="main-panel">
	<div class="content">
		<?php
		if (isset($_GET['halaman'])) {
			$hal = $_GET['halaman'];
			switch ($hal) {
				case 'beranda';
					include 'beranda.php';
					break;

				case 'ubah_pemohon';
					include 'ubah_pemohon.php';
					break;
				case 'tampil_pemohon';
					include 'tampil_pemohon.php';
					break;
				case 'tampil_download';
					include 'tampil_download.php';
					break;

				case 'request_sktm';
					include 'request_sktm.php';
					break;
				case 'request_sku';
					include 'request_sku.php';
					break;
				case 'request_kk';
					include 'request_kk.php';
					break;
				case 'request_skd';
					include 'request_skd.php';
					break;
				case 'request_akta';
					include 'request_akta.php';
					break;
				case 'request_ktp';
					include 'request_ktp.php';
					break;

				case 'tampil_status';
					include 'status_request.php';
					break;

				case 'belum_acc_sktm';
					include 'belum_acc_sktm.php';
					break;
				case 'belum_acc_sku';
					include 'belum_acc_sku.php';
					break;
				case 'belum_acc_kk';
					include 'belum_acc_kk.php';
					break;
				case 'belum_acc_skd';
					include 'belum_acc_skd.php';
					break;
				case 'belum_acc_akta';
					include 'belum_acc_akta.php';
					break;
				case 'belum_acc_ktp';
					include 'belum_acc_ktp.php';
					break;

				case 'sudah_acc_sktm';
					include 'acc_sktm.php';
					break;
				case 'sudah_acc_sku';
					include 'acc_sku.php';
					break;
				case 'sudah_acc_kk';
					include 'acc_kk.php';
					break;
				case 'sudah_acc_skd';
					include 'acc_skd.php';
					break;
				case 'sudah_acc_akta';
					include 'acc_akta.php';
					break;
				case 'sudah_acc_ktp';
					include 'acc_ktp.php';
					break;

				case 'detail_sktm';
					include 'detail_sktm.php';
					break;
				case 'detail_sku';
					include 'detail_sku.php';
					break;
				case 'detail_kk';
					include 'detail_kk.php';
					break;
				case 'detail_skd';
					include 'detail_skd.php';
					break;
				case 'detail_akta';
					include 'detail_akta.php';
					break;
				case 'detail_ktp';
					include 'detail_ktp.php';
					break;

				case 'cetak_sktm';
					include 'cetak_sktm.php';
					break;
				case 'tampil_user';
					include 'tampil_user.php';
					break;
				case 'tambah_user';
					include 'tambah_user.php';
					break;
				case 'ubah_user';
					include 'ubah_user.php';
					break;

				case 'ubah_sktm';
					include 'ubah_request_sktm.php';
					break;
				case 'ubah_sku';
					include 'ubah_request_sku.php';
					break;
				case 'ubah_kk';
					include 'ubah_request_kk.php';
					break;
				case 'ubah_skd';
					include 'ubah_request_skd.php';
					break;
				case 'ubah_akta';
					include 'ubah_request_akta.php';
					break;
				case 'ubah_ktp';
					include 'ubah_request_ktp.php';
					break;

				case 'download_sktm';
					include 'download_sktm.php';
					break;
				case 'download_sku';
					include 'download_sku.php';
					break;
				case 'download_kk';
					include 'download_kk.php';
					break;
				case 'downlaod_skd';
					include 'downlaod_skd.php';
					break;
				case 'download_akta';
					include 'download_akta.php';
					break;
				case 'download_ktp';
					include 'download_ktp.php';
					break;

				case 'laporan_perbulan';
					include 'laporan_perbulan.php';
					break;
				case 'laporan_pertahun';
					include 'laporan_pertahun.php';
					break;
				default:
					echo "<center>HALAMAN KOSONG </center>";
					break;
			}
		} else {
			include 'beranda.php';
		}
		?>
	</div>
	<?php include 'footer.php'; ?>