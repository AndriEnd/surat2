<?php include '../konek.php'; ?>

<?php
if (isset($_GET['nik'])) {
	$tampil_nik ="SELECT * FROM data_penduduk 
	JOIN data_user ON data_penduduk.nik = data_user.nik 
	WHERE data_penduduk.nik = '$_SESSION[nik]'";
	$query = mysqli_query($konek, $tampil_nik);
	$data = mysqli_fetch_array($query, MYSQLI_BOTH);
	$nik = $data['nik'];
	$no_kk = $data['no_kk'];
	$nama = $data['nama'];
	$Email = $data['email'];
	$tempat_lahir = $data['tempat_lahir'];
	$gol_darah = $data['gol_darah'];
	$status_warga = $data['status_warga'];
	$tanggal_lahir = $data['tanggal_lahir'];
	$jekel = $data['jekel'];
	$agama = $data['agama'];
	$alamat = $data['alamat'];
	$telepon = $data['telepon'];
	$status_warga = $data['status_warga'];
	$status_perkawinan = $data['status_perkawinan'];
	$status_hdk = $data['status_hdk'];
	$pend_terakhir = $data['pend_terakhir'];
	$pekerjaan = $data['pekerjaan'];
	$nama_ayah = $data['nama_ayah'];
	$nama_ibu = $data['nama_ibu'];
}


?>

<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<div class="page-inner">
	<div class="row">
		<div class="col-md-12">
			<form method="POST">
				<div class="card">
					<div class="card-header">
						<div class="card-title">UBAH BIODATA</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="form-group">
									<label>NIK</label>
									<input type="number" name="nik" class="form-control" placeholder="NIK Anda.." value="<?= $nik; ?>">
								</div>
								<div class="form-group">
									<label>No.KK</label>
									<input type="number" name="no_kk" class="form-control"  placeholder="No.KK Anda.." value="<?= $no_kk; ?>">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="text" name="email" class="form-control" value="<?= $Email; ?>" placeholder="Alamat Email Anda" value="<?= $Email; ?>">
								</div>
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input type="text" name="nama" class="form-control" value="<?= $nama; ?>" placeholder="Nama Lengkap Anda.." value="<?= $nama; ?>">
								</div>
								<div class="form-check">
									<label>Jenis Kelamin</label><br />
									<label class="form-radio-label">
										<input class="form-radio-input" type="radio" name="jekel" value="<?= $jekel ?>" checked="">
										<span class="form-radio-sign">Laki-Laki</span>
									</label>
									<label class="form-radio-label ml-3">
										<input class="form-radio-input" type="radio" name="jekel" value="<?= $jekel ?>">
										<span class="form-radio-sign">Perempuan</span>
									</label>
								</div>
								<div class="form-group">
									<label>Tempat Lahir</label>
									<input type="text" name="tempat_lahir" class="form-control" value="<?= $tempat_lahir; ?>" value="<?= $tempat_lahir; ?>" placeholder="Tempat Lahir Anda..">
								</div>
								<div class="form-group">
									<label>Tanggal Lahir</label>
									<input type="date" name="tanggal_lahir" class="form-control" value="<?= $tanggal_lahir; ?>">
								</div>
								<div class="form-group">
									<label>Nomor Telepon</label>
									<input type="text" name="telepon" class="form-control" value="<?= $telepon; ?>" placeholder="Nomer Telepon Anda" value="<?= $telepon; ?>">
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="form-group">
									<label>Golongan Darah</label>
									<select name="gol_darah" class="form-control" value="<?= $gol_darah; ?>">
										<option disabled="" selected="">Pilih Golongan Darah</option>
										<option value='O'>O</option>
										<option value='A'>A</option>
										<option value='B'>B</option>
										<option value='AB'>AB</option>
									</select>
								</div>
								<div class="form-group">
									<label>Agama</label>
									<select name="agama" class="form-control"  placeholder="Pilih Agama" value="<?= $Agama; ?> ">
										

										<option <?php if ($agama == 'Islam') {
													echo "selected";
												} ?> value='Islam'>Islam</option>

										<option <?php if ($agama == 'Katolik') {
													echo "selected";
												} ?> value='Kristen'>Katolik</option>

										<option <?php if ($agama == 'Kristen') {
													echo "selected";
												} ?> value='Kristen'>Kristen</option>

										<option <?php if ($agama == 'Hindu') {
													echo "selected";
												} ?> value='Hindu'>Hindu</option>

										<option <?php if ($agama == 'Budha') {
													echo "selected";
												} ?> value='Budha'>Budha</option>
									</select>
								</div>
								<div class="form-group">
									<label for="comment">RT / RW</label>
									<input type="text" name="status_warga" value="<?= $status_warga; ?>" class="form-control" placeholder="Status Warga" value="<?= $status_warga; ?>">
								</div>
								<div class="form-group">
									<label>Status perkawinan</label>
									<select name="status_perkawinan" class="form-control"  placeholder="Pilih Status" value="<?= $status_perkawinan; ?> ">
										
										<option value='Belum Berkeluarga'>Belum Berkeluarga</option>
										<option value='Sudah Berkeluarga'>Sudah Berkeluarga</option>
										<option value='Janda'>Janda</option>
										<option value='Duda'>Duda</option>
									</select>
								</div>
								<div class="form-group">
									<label for="comment">Status HDK</label>
									<input type="text" name="status_hdk" value="<?= $status_hdk; ?>" class="form-control" placeholder="Status hdk" value="<?= $status_hdk; ?>">
								</div>
								<div class="form-group">
									<label>Pendidikan</label>
									<select name="pend_terakhir" class="form-control" value="<?= $pend_terakhir; ?>">
										<option disabled="" selected="">Pendidikan</option>
										<option value='Tidak Lulus Sekolah'>Tidak Lulus Sekolah</option>
										<option value='SD'>SD</option>
										<option value='SMP'>SMP</option>
										<option value='SMA / SEDERAJAT'>SMA / SEDERAJAT</option>
										<option value='S1'>S1</option>
										<option value='S2'>S2</option>
										<option value='S3'>S3</option>
									</select>
								</div>
								<div class="form-group">
									<label>Pekerjaan</label>
									<input type="text" name="pekerjaan" class="form-control" value="<?= $pekerjaan; ?>" placeholder="Pekerjaan" value="<?= $pekerjaan; ?>">
								</div>
								<div class="form-group">
									<label for="comment">Alamat</label>
									<textarea class="form-control" value="<?= $alamat; ?>" name="alamat" rows="5"><?= $alamat ?> </textarea>
								</div>
								<div class="form-group">
									<label>Nama Ayah</label>
									<input type="text" name="nama_ayah" value="<?= $nama_ayah; ?>" class="form-control" placeholder="Nama Ayah" value="<?= $nama_ayah; ?>">
								</div>
								<div class="form-group">
									<label>Nama Ibu</label>
									<input type="text" name="nama_ibu" value="<?= $nama_ibu; ?>" class="form-control" placeholder="Nama Ibu" value="<?= $nama_ibu; ?>">
								</div>
							</div>
						</div>
					</div>
					<div class="card-action">
						<button name="ubah" class="btn btn-success">Ubah</button>
						<a href="?halaman=beranda" class="btn btn-default">Batal</a>
					</div>
				</div>
		</div>
		</form>
	</div>
</div>

<?php
if (isset($_POST['ubah'])) {
	$nik = $_POST['nik'];
	$no_kk = $_POST['no_kk'];
	$nama = $_POST['nama'];
	$jekel = $_POST['jekel'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$Email = $_POST['email'];
	$telepon = $_POST['telepon'];
	$gol_darah = $_POST['gol_darah'];
	$agama = $_POST['agama'];
	$status_warga = $_POST['status_warga'];
	$status_perkawinan = $_POST['status_perkawinan'];
	$status_hdk = $_POST['status_hdk'];
	$pend_terakhir = $_POST['pend_terakhir'];
	$alamat = $_POST['alamat'];
	$pekerjaan = $_POST['pekerjaan'];
	$nama_ayah = $_POST['nama_ayah'];
	$nama_ibu = $_POST['nama_ibu'];


	$sql = "UPDATE data_penduduk SET
	nama='$nama',
    no_kk='$no_kk',
    jekel='$jekel',
    tempat_lahir='$tempat_lahir',
	tanggal_lahir='$tanggal_lahir',
	email='$Email',
	telepon='$telepon',
    gol_darah='$gol_darah',
	agama='$agama',
	status_warga='$status_warga',
    status_perkawinan='$status_perkawinan',
    status_hdk='$status_hdk',
    pend_terakhir='$pend_terakhir',
    alamat='$alamat',
    pekerjaan='$pekerjaan',
    nama_ayah='$nama_ayah',
    nama_ibu='$nama_ibu' WHERE nik=$nik";
	$query = mysqli_query($konek, $sql);

	
	if ($query) {
		echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_pemohon">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=ubah_pemohon">';
	}
}


?>