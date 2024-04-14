<!-- <?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<?php
if (isset($_GET['nik'])) {
    $nik = $_GET['nik'];
    $sql = "SELECT * FROM data_penduduk WHERE nik='$nik'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $no_kk = $_POST['no_kk'];
    $nama = $data['nama'];
    $jekel = $data['jekel'];
    $tempat_lahir = $data['tempat_lahir'];
    $tanggal_lahir = $data['tanggal_lahir'];
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
}
?>
<div class="page-inner">
					<div class="row">
						<div class="col-md-12">	
						<form method="POST">
							<div class="card">
								<div class="card-header">
									<div class="card-title">FORM UBAH PENDUDUK</div>
								</div>
								<div class="card-body">
									<div class="row">
											<div class="col-md-6 col-lg-6">
												<div class="form-group">
													<label>NIK</label>
													<input type="text" readonly="" name="nik" value="<?php echo $username; ?>" class="form-control" autofocus>
												</div>
												<div class="form-group">
													<label>Nama</label>
													<input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>" placeholder="Nama..">
												</div>
												<div class="form-group">
													<label>Tempat Lahir</label>
													<input type="text" name="tempat" class="form-control" value="<?php echo $tempat; ?>" placeholder="Tempat Lahir.." >
												</div>
												<div class="form-group">
													<label>Tanggal Lahir</label>
													<input type="date" name="tanggal" class="form-control"  value="<?php echo $tanggal; ?>">
												</div>
												<div class="form-group">
													<label>Jenis Kelamin</label>
													<select name="jekel" class="form-control">
														<option disabled="" selected="">Pilih Jenis Kelamin</option>
														<option value="Laki-Laki" <?php if ($jekel == "Laki-Laki") echo 'selected' ?>>Laki-Laki</option>
														<option value="Perempuan" <?php if ($jekel == "Perempuan") echo 'selected' ?>>Perempuan</option>
													</select>
												</div>
												<div class="form-group">
													<label>Alamat</label>
													<textarea name="alamat" class="form-control"  cols="30" rows="10" placeholder="Alamat.."><?php echo $alamat; ?></textarea>
												</div>
												<div class="form-group">
													<label>Status Warga</label>
													<select name="status_warga" class="form-control">
														<option disabled="" selected="">Pilih Status Warga</option>
														<option value="Sekolah" <?php if ($status_warga == "Sekolah") echo 'selected' ?>>Sekolah</option>
														<option value="Kerja" <?php if ($status_warga == "Kerja") echo 'selected' ?>>Kerja</option>
														<option value="Belum Kerja" <?php if ($status_warga == "Belum Kerja") echo 'selected' ?>>Belum Kerja</option>
													</select>
												</div>
												<div class="form-group">
													<label>Password</label>
													<input type="text" name="password" value="<?php echo $password; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
													<label>Hak Akses</label>
													<select name="hak_akses" class="form-control">
														<option value="Pemohon" <?php if ($hak_akses == "Pemohon") echo 'selected' ?>>Pemohon</option>
														<option value="Lurah" <?php if ($hak_akses == "Lurah") echo 'selected' ?>>Lurah</option>
														<option value="Staf" <?php if ($hak_akses == "Staf") echo 'selected' ?>>Staf</option>
                                                        <option value="Staf" <?php if ($hak_akses == "Admin") echo 'selected' ?>>Staf</option>
													</select>
												</div>
											</div>
									</div>
								</div>
								<div class="card-action">
									<button name="ubah" class="btn btn-success btn-sm">Ubah</button>
									<a href="?halaman=tampil_penduduk" class="btn btn-default btn-sm">Batal</a>
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
	nama='$nama' WHERE nik='$nik'";
    $query = mysqli_query($konek, $sql);

    if ($query) {
        echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_penduduk">';
    } else {
        echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=ubah_penduduk">';
    }
}
?> -->

<?php
if (isset($_GET['nik'])) {
    $nik = $_GET['nik'];
    $tampil_nik = "SELECT * FROM data_penduduk WHERE nik=$nik";
    $query = mysqli_query($konek, $tampil_nik);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $nik = $data['nik'];
    $nama = $data['nama'];
    $tempat_lahir = $data['tempat_lahir'];
    $tanggal_lahir = $data['tanggal_lahir'];
    $jekel = $data['jekel'];
    $agama = $data['agama'];
    $alamat = $data['alamat'];
    $Email = $_POST['email'];
    $telepon = $data['telepon'];
    $status_warga = $data['status_warga'];
    $status_perkawinan = $data['status_perkawinan'];
    $status_hdk = $data['status_hdk'];
    $pend_terakhir = $data['pend_terakhir'];
    $alamat = $data['alamat'];
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
                        <div class="card-title">UBAH PENDUDUK</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="number" name="nik" class="form-control" placeholder="NIK Anda.." value="<?= $nik; ?>">
                                </div>
                                <div class="form-group">
                                    <label>No. KK</label>
                                    <input type="number" name="no_kk" class="form-control" placeholder="Nomor Kartu Keluarga" value="<?= $no_kk; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap Anda.." value="<?= $nama; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="jekel" class="form-control">
                                        <option disabled="" selected="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-Laki" <?php if ($jekel == "Laki-Laki") echo 'selected' ?>>Laki-Laki</option>
                                        <option value="Perempuan" <?php if ($jekel == "Perempuan") echo 'selected' ?>>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" value="<?= $tempat_lahir; ?>" placeholder="Tempat Lahir Anda..">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" value="<?= $tanggal_lahir; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="nama" name="email" class="form-control" placeholder="Email" value="<?= $Email; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <input type="nama" name="telepon" class="form-control" placeholder="Nomor Telepon" value="<?= $telepon; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Golongan Darah</label>
                                    <select name="gol_darah" class="form-control" value="<?= $gol_darah; ?>">
                                        <option disabled="" selected="">Golongan Darah</option>
                                        <option value="O" <?php if ($gol_darah == "O") echo 'selected' ?>>O</option>
                                        <option value="A" <?php if ($gol_darah == "A") echo 'selected' ?>>A</option>
                                        <option value="B" <?php if ($gol_darah == "B") echo 'selected' ?>>B</option>
                                        <option value="AB" <?php if ($gol_darah == "AB") echo 'selected' ?>>AB</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Agama</label>
                                    <select name="agama" class="form-control">
                                        <option disabled="" selected="">Agama</option>
                                        <option value="Islam" <?php if ($agama == "Islam") echo 'selected' ?>>Islam</option>
                                        <option value="Katolik" <?php if ($agama == "Katolik") echo 'selected' ?>>Katolik</option>
                                        <option value="Kristen" <?php if ($agama == "Kristen") echo 'selected' ?>>Kristen</option>
                                        <option value="Budha" <?php if ($agama == "Budha") echo 'selected' ?>>Budha</option>
                                        <option value="Hindu" <?php if ($agama == "Hindu") echo 'selected' ?>>Hindu</option>
                                        <option value="Konghucu" <?php if ($agama == "Konghucu") echo 'selected' ?>>Budha</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>RT / RW</label>
                                    <input type="nama" name="status_warga" class="form-control" placeholder="RT / RW" value="<?= $status_warga; ?>">
                                </div>
                                <div class="form-group">
                                    <label>status_perkawinan</label>
                                    <select name="status_perkawinan" class="form-control">
                                        <option disabled="" selected="">Status Perkawinan</option>
                                        <option value="Berkeluarga" <?php if ($status_perkawinan == "Berkeluarga") echo 'selected' ?>>Berkeluarga</option>
                                        <option value="Belum Berkeluarga" <?php if ($status_perkawinan == "Belum Berkeluarga") echo 'selected' ?>>Belum Berkeluarga</option>
                                        <option value="Janda" <?php if ($status_perkawinan == "Janda") echo 'selected' ?>>Janda</option>
                                        <option value="Duda" <?php if ($status_perkawinan == "Duda") echo 'selected' ?>>Duda</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Status HDK</label>
                                    <input type="status_hdk" name="status_hdk" class="form-control" placeholder="status HDK" value="<?= $status_hdk; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Pendidikan</label>
                                    <select name="pend_terakhir" class="form-control">
                                        <option disabled="" selected="">Pendidikan</option>
                                        <option value="Tidak Lulus Sekolah" <?php if ($pend_terakhir == "Tidak Lulus Sekolah") echo 'selected' ?>>Tidak Lulus Sekolah</option>
                                        <option value="SD" <?php if ($pend_terakhir == "SD") echo 'SD' ?>>SD</option>
                                        <option value="SMP" <?php if ($pend_terakhir == "SMP") echo 'SMP' ?>>SMP</option>
                                        <option value="SMA / SEDERAJAT" <?php if ($pend_terakhir == "SMA / SEDERAJAT") echo 'selected' ?>>SMA / SEDERAJAT</option>
                                        <option value="S1" <?php if ($pend_terakhir == "S1") echo 'selected' ?>>S1</option>
                                        <option value="S2" <?php if ($pend_terakhir == "S2") echo 'selected' ?>>S2</option>
                                        <option value="S3" <?php if ($pend_terakhir == "S3") echo 'selected' ?>>S3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="comment">Alamat</label>
                                    <textarea class="form-control" name="alamat" rows="5"><?= $alamat ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <input type="pekerjaan" name="pekerjaan" class="form-control" placeholder="Pekerjaan " value="<?= $pekerjaan; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Nama Ayah</label>
                                    <input type="nama" name="nama_ayah" class="form-control" placeholder="Nama Ayah" value="<?= $nama_ayah; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Nama Ibu</label>
                                    <input type="nama" name="nama_ibu" class="form-control" placeholder="Nama Ibu" value="<?= $nama_ibu; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button name="ubah" class="btn btn-success">Ubah</button>
                        <a href="?halaman=tampil_pendudukgit  " class="btn btn-default">Batal</a>
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
        echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_penduduk">';
    } else {
        echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=ubah_penduduk">';
    }
}

?>