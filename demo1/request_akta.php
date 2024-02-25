<?php include '../konek.php'; ?>
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
                        <div class="card-title">FORM LAYANAN SURAT KETERANGAN LAHIR</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>NIK & Nama</label>
                                    <input type="text" class="form-control" value="<?= $nik . ' - ' . $nama; ?>" readonly>
                                </div>

                                <div class="form-group">
                                    <input type="hidden" name="nik" class="form-control" value="<?= $nik; ?>" readonly>
                                </div>
                                <!-- <div class="form-group">
                                    <label>Nama Anak</label>
                                    <input type="text" name="nama_anak" class="form-control" placeholder="Nama Anak.." autofocus>
                                </div> -->
                                <div class="form-group">
                                    <label>Anak Ke -</label>
                                    <input type="text" name="anak_ke" class="form-control" placeholder="Anak Ke - " autofocus>
                                </div>

                                <div class="form-group">
                                    <label>Keperluan </label>
                                    <input type="text" name="keperluan" class="form-control" placeholder="Keperluan" autofocus>
                                </div>

                                <div class="form-group">
                                    <label>Surat Kelahiran</label>
                                    <input type="file" name="ktp" class="form-control" size="37" required>
                                </div>
                                <div class="form-group">
                                    <label>Scan KK</label>
                                    <input type="file" name="kk" class="form-control" size="37" required>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button name="kirim" class="btn btn-success">Kirim</button>
                        <a href="?halaman=beranda" class="btn btn-default">Batal</a>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>

<?php
if (isset($_POST['kirim'])) {
    $nik = $_POST['nik'];
    $keperluan = $_POST['keperluan'];
    $nama_ktp = isset($_FILES['ktp']);
    $file_ktp = $_POST['nik'] . "_" . ".jpg";
    $nama_kk = isset($_FILES['kk']);
    $file_kk = $_POST['nik'] . "_" . ".jpg";
    $nama_anak = $_POST['nama_anak'];
    $anak_ke = $_POST['anak_ke'];
    $sql = "INSERT INTO data_request_akta (nik,scan_ktp,scan_kk,keperluan,anak_ke,nama_anak,status_anak) VALUES ('$nik','$file_ktp','$file_kk','$keperluan','$anak_ke','$nama_anak','$status_anak')";
    $query = mysqli_query($konek, $sql)  or die(mysqli_connect_error());

    if ($query) {
        copy($_FILES['ktp']['tmp_name'], "../dataFoto/scan_ktp/" . $file_ktp);
        copy($_FILES['kk']['tmp_name'], "../dataFoto/scan_kk/" . $file_kk);
        echo "<script language='javascript'>swal('Selamat...', 'Kirim Berhasil', 'success');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
    } else {
        echo "<script language='javascript'>swal('Gagal...', 'Kirim Gagal', 'error');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=request_akta">';
    }
}

?>