<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
if (isset($_GET['id_request_kk'])) {
	$id = $_GET['id_request_kk'];
	$tampil_nik = "SELECT * FROM data_request_kk NATURAL JOIN data_user WHERE id_request_kk=$id";
	$query = mysqli_query($konek, $tampil_nik);
	$data = mysqli_fetch_array($query, MYSQLI_BOTH);
	$nik = $data['nik'];
	$nama = $data['nama'];
	$keperluan = $data['keperluan'];
	$warga_negara = $data['warga_negara'];
	$ktp = $data['scan_ktp'];
	$kk = $data['scan_kk'];

	$nama_anggota  = $data['nama_anggota']; // anggota kel
	$nik_anggota  =  $data['nik_anggota'];
	$tempat_anggota  = $data['tempat_anggota'];
	$tgl_anggota  =  $data['tgl_anggota'];
	$jekel_anggota  =  $data['jekel_anggota'];
	$agama_anggota  =  $data['agama_anggota'];
	$hdk_anggota  =  $data['hdk_anggota'];
}
if (isset($_GET['id_request_kk'])) {
	$id = $_GET['id_request_kk'];
	$sql = "SELECT * FROM data_request_kk natural join data_penduduk WHERE id_request_kk='$id'";
	$query = mysqli_query($konek, $sql);
	$data = mysqli_fetch_array($query, MYSQLI_BOTH);
	$no_kk = $data['no_kk'];
	$pekerjaan = $data['pekerjaan'];
	$alamat = $data['alamat'];
	$jekel = $data['jekel'];
	$status_warga = $data['status_warga'];
	$status_hdk = $data['status_hdk'];
	$status_perkawinan = $data['status_perkawinan'];

	$nama_anggota  = $data['nama_anggota']; // anggota kel
	$nik_anggota  =  $data['nik_anggota'];
	$tempat_anggota  = $data['tempat_anggota'];
	$tgl_anggota  =  $data['tgl_anggota'];
	$jekel_anggota  =  $data['jekel_anggota'];
	$agama_anggota  =  $data['agama_anggota'];
	$hdk_anggota  =  $data['hdk_anggota'];
}
?>
<div class="page-inner">
	<div class="row">
		<div class="col-md-12">
			<form method="POST" enctype="multipart/form-data">
				<div class="card">
					<div class="card-header">
						<div class="card-title">UBAH DATA LAYANAN SURAT KARTU KELUARGA</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="form-group">
									<label>NIK</label>
									<input type="text" name="nik" class="form-control" value="<?= $nik . ' - ' . $nama; ?>" readonly>
								</div>
								<div class="form-group">
									<label>No.KK</label>
									<input type="text" name="no_kk" class="form-control" value="<?= $no_kk; ?>" readonly>
								</div>
								<div class="form-group">
									<label>Keperluan</label>
									<input type="text" name="keperluan" class="form-control" value="<?= $keperluan; ?>" placeholder="Keperluan Anda..">
								</div>
								<div class="form-group">
									<label>Kewarganegaraan</label>
									<input type="text" name="warga_negara" class="form-control" value="<?= $warga_negara; ?>" placeholder="Kewarganegaraan">
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="form-group">
									<label>Scan KTP</label><br>
									<img src="../dataFoto/scan_ktp/<?= $ktp; ?>" width="200" height="100" alt="">
								</div>
								<div class="form-group">
									<input type="file" name="ktp" class="form-control" value="<?= $ktp; ?>" size="37">
								</div>
							</div>
							<table border="1" align="center">
								<tr align="center">
									<th>No.</th>
									<th>Nama</th>
									<th>NIK</th>
									<th>No. KK</th>
									<th>Tempat, Tanggal lahir</th>
									<th>Jenis Kelamin</th>
									<th>Agama</th>
									<th>Status HDK</th>
								</tr>
								<?php
								$no = 0;
								$query = mysqli_query($konek, $sql);
								while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
									$no++;
									$nama_anggota = $data['nama_anggota'];
									$nik_anggota = $data['nik_anggota'];
									$format_anggota = date('d F Y', strtotime($tgl_anggota));
									$jekel_anggota = $data['jekel_anggota'];
									$agama_anggota = $data['agama_anggota'];
									$hdk = $data['hdk_anggota'];
								?>
									<tbody>
										<tr align="center">
											<th><?php echo $no++; ?></th>
											<th><?php echo $nama_anggota; ?></th>
											<td><?php echo $nik_anggota; ?></td>
											<td><?php echo $tempat_anggota . ", " . $format_anggota; ?></td>
											<td><?php echo $jekel_anggota; ?></td>
											<td><?php echo $agama_anggota; ?></td>
											<td><?php echo $hdk_anggota; ?></td>
										</tr>
									</tbody>
								<?php
								}
								?>
							</table>
						</div>
					</div>
					<div class="card-action">
						<button name="ubah" class="btn btn-success">Ubah</button>
						<a href="?halaman=tampil_status" class="btn btn-default">Batal</a>
					</div>
				</div>
		</div>
		</form>
	</div>
</div>

<?php
if (isset($_POST['ubah'])) {
	$keperluan = $_POST['keperluan'];
	$warga_negara = $_POST['warga_negara'];
	$nama_ktp = isset($_FILES['ktp']);
	$file_ktp = $_POST['nik'] . "_" . ".jpg";
	$nama_kk = isset($_FILES['kk']);
	$file_kk = $_POST['nik'] . "_" . ".jpg";
	$sql = "UPDATE data_request_kk SET keperluan='$keperluan' WHERE id_request_kk=$id";
	$query = mysqli_query($konek, $sql);

	if ($query) {
		echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	}
}

?>