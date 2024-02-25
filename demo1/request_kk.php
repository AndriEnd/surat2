<?php include '../konek.php';
?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
$tampil_nik = "SELECT * FROM data_user WHERE nik=$_SESSION[nik]";
$query = mysqli_query($konek, $tampil_nik);
$data = mysqli_fetch_array($query, MYSQLI_BOTH);
$nik = $data['nik'];
$nama = $data['nama'];
?>
<div class="page-inner">
	<div class="row">
		<div class="col-md-12">
			<form method="POST" enctype="multipart/form-data">
				<div class="card">
					<div class="card-header">
						<div class="card-title">FORM LAYANAN SURAT KETERANGAN KARTU KELUARGA</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="form-group">
									<label>NIK & Nama </label>
									<input type="text" class="form-control" value="<?= $nik . ' - ' . $nama; ?>" readonly>
								</div>
								<div class="form-group">
									<input type="hidden" name="nik" class="form-control" value="<?= $nik; ?>" readonly>
								</div>

								<div class="form-group">
									<label>Keperluan</label>
									<input type="text" name="keperluan" class="form-control" placeholder="Keperluan Anda.." autofocus>
								</div>
								<div class="form-group">
									<label>Kewarganegaraan</label>
									<input type="text" name="warga_negara" class="form-control" placeholder="kewarganegaraan" autofocus>
								</div>
								<!--<div class="form-group">
									<label>Anggota Keluarga</label>
									<input type="text" name="anggota_keluarga" class="form-control" placeholder="Anggota  Keluarga" autofocus>
								</div> -->

								<div class="form-group">
									<label>Scan KTP</label>
									<input type="file" name="ktp" class="form-control" size="37" required>
								</div>
							</div>

							<div class="col-md-6 col-lg-6">
								<div class="control-group after-add-more">
									<h2>Anggota Keluarga</h2>
									<label>NIK</label>
									<input type="text" name="nik_anggota" class="form-control">

									<label>Nama</label>
									<input type="text" name="nama_anggota" class="form-control">

									<label>Tempat Lahir</label>
									<input type="text" name="tempat_anggota" class="form-control" placeholder="Tempat Lahir..">

									<label>Tanggal Lahir</label>
									<input type="date" name="tgl_anggota" class="form-control">

									<label>Jenis Kelamin</label>
									<select class="form-control" name="jekel_anggota">
										<option>Laki-Laki</option>
										<option>Perempuan</option>
									</select>

									<label>Agama</label>
									<select class="form-control" name="agama_anggota">
										<option>Islam</option>
										<option>Katolik</option>
										<option>Kristen</option>
										<option>Budha</option>
										<option>Hindu</option>
										<option>Konghucu</option>
									</select>
									<label>Status HDK</label>
									<input type="text" name="hdk_anggota" class="form-control">
									<br>
								</div>
								<button class="btn btn-success add-more" type="button">
									<i class="glyphicon glyphicon-plus">
									</i> Tambah Anggota +
								</button>
								<hr>
								<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
								<script>
									$(document).ready(function() {
										$(".add-more").click(function() {
											var html = $(".after-add-more:first").clone();
											html.find("input").val("");
											html.find("select").val("");
											html.find(".remove").show();
											$(".after-add-more:last").after(html);
										});

										$("body").on("click", ".remove", function() {
											$(this).closest(".after-add-more").remove();
										});
									});
								</script>
							</div>
						</div>
					</div>
					<div class="card-action">
						<button name="kirim" class="btn btn-success">Kirim</button>
						<a href="?halaman=beranda" class="btn btn-default">Batal</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>


<?php
if (isset($_POST['kirim'])) {
	$nik = $_POST['nik'];
	$keperluan = $_POST['keperluan'];
	$anggota_keluarga = $_POST['anggota_keluarga'];
	$warga_negara = $_POST['warga_negara'];
	$nama_ktp = isset($_FILES['ktp']);
	$file_ktp = $_POST['nik'] . "_" . ".jpg";
	$nama_kk = isset($_FILES['kk']);
	$file_kk = $_POST['nik'] . "_" . ".jpg";
	$nama_anggota  = $_POST['nama_anggota']; // anggota kel
	$nik_anggota  = $_POST['nik_anggota'];
	$tempat_anggota  = $_POST['tempat_anggota'];
	$tgl_anggota  = $_POST['tgl_anggota'];
	$jekel_anggota  = $_POST['jekel_anggota'];
	$agama_anggota  = $_POST['agama_anggota'];
	$hdk_anggota  = $_POST['hdk_anggota'];

	$sql = "INSERT INTO data_request_kk 
	(nik,
	scan_ktp,
	scan_kk,
	keperluan,
	warga_negara,
	nama_anggota,
	nik_anggota,
	tempat_anggota,
	tgl_anggota,
	jekel_anggota,
	agama_anggota,
	hdk_anggota) 
	VALUES 
	('$nik',
	'$file_ktp',
	'$file_kk',
	'$keperluan',
	'$warga_negara',
	'$nama_anggota',
	'$nik_anggota',
	'$tempat_anggota',
	'$tgl_anggota',
	'$jekel_anggota',
	'$agama_anggota',
	'$hdk_anggota')";

	//$sql = "INSERT INTO data_penduduk 
	//(nik,nama,jekel,tempat_lahir,tanggal_lahir,telepon,agama,status_hdk) 
	//VALUES ('$nik','$nama','$jekel','$tempat_lahir','$tanggal_lahir','$tanggal_lahir','$agama','$status_hdk')";
	//$query = mysqli_query($konek, $sql);

	$query = mysqli_query($konek, $sql) or die(mysqli_connect_error());

	if ($query) {
		copy($_FILES['ktp']['tmp_name'], "../dataFoto/scan_ktp/" . $file_ktp);
		echo "<script language='javascript'>swal('Selamat...', 'Kirim Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Kirim Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=request_kk">';
	}
}
?>