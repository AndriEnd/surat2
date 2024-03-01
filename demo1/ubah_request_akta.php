<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
if (isset($_GET['id_request_akta'])) {
    $id = $_GET['id_request_akta'];
    $tampil_nik = "SELECT * FROM data_request_akta NATURAL JOIN data_user WHERE id_request_akta=$id";
    $query = mysqli_query($konek, $tampil_nik);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $nik = $data['nik'];
    $id = $data['id_request_akta'];
    $nama = $data['nama'];
    $tgl = $data['tanggal_request'];
    $format1 = date('d-m-Y', strtotime($tgl));
    $ktp = $data['scan_ktp'];
    $kk = $data['scan_kk'];
    $keperluan = $data['keperluan'];
    $nama_anak = $data['nama_anak'];
    $anak_ke = $data['anak_ke'];
    $status_anak = $data['status_anak'];
}
?>
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">UBAH DATA LAYANAN SURAT KETERANGAN AKTA</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="text" name="nik" class="form-control" value="<?= $nik . ' - ' . $nama; ?>" readonly>
                                </div>
                                <!-- <div class="form-group">
                                    <label>No.KK </label>
                                    <input type="text" class="form-control" value="<?= $no_kk; ?>" readonly>
                                </div> -->
                                <div class="form-group">
                                    <label>Nama Anak</label>
                                    <input type="text" name="nama_anak" class="form-control" value="<?= $nama_anak; ?>" placeholder="Nama Anak.." autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Anak Ke -</label>
                                    <input type="text" name="anak_ke" class="form-control" value="<?= $anak_ke; ?>" placeholder="Anak Ke - " autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Status Anak</label>
                                    <input type="text" name="status_anak" class="form-control" value="<?= $status_anak; ?>" placeholder="status_anak " autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Keperluan</label>
                                    <input type="text" name="keperluan" class="form-control" value="<?= $keperluan; ?>" placeholder="Anak Ke - ">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>Scan KTP</label><br>
                                    <img src="../dataFoto/scan_ktp/<?= $ktp; ?>" width="200" height="100" alt="">
                                </div>
                                <div class="form-group">
                                    <input type="file" name="kk" class="form-control" size="37">
                                </div>
                                <div class="form-group">
                                    <label>Scan KK</label><br>
                                    <img src="../dataFoto/scan_kk/<?= $kk; ?>" width="200" height="100" alt="">
                                </div>
                                <div class="form-group">
                                    <input type="file" name="kk" class="form-control" size="37">
                                </div>
                            </div>
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
    $nama_ktp = isset($_FILES['ktp']);
    $file_ktp = $_POST['nik'] . "_" . ".jpg";
    $nama_kk = isset($_FILES['kk']);
    $file_kk = $_POST['nik'] . "_" . ".jpg";
    $keperluan = $_POST['keperluan'];
    $nama_anak = $_POST['nama_anak'];
    $anak_ke = $_POST['anak_ke'];
    $sql = "UPDATE data_request_akta SET scan_ktp='$file_ktp',scan_kk='$file_kk',keperluan='$keperluan',nama_anak='$nama_anak',anak_ke='$anak_ke',status_anak='$status_anak' WHERE id_request_akta=$id";
    $query = mysqli_query($konek, $sql);

    if ($query) {
        echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
    } else {
        echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=request_akta">';
    }
}

?>