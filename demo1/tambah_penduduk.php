<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <form method="POST">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">FORM TAMBAH PENDUDUK</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="number" name="nik" class="form-control" placeholder="NIK.." autofocus>
                                </div>
                                <div class="form-group">
                                    <label>No.KK</label>
                                    <input type="number" name="no_kk" class="form-control" placeholder="Nomor KK..">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="nama" name="nama" class="form-control" placeholder="Nama..">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="jekel" class="form-control">
                                        <option disabled="" selected="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir..">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="nama" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <input type="nama" name="telepon" class="form-control" placeholder="Nomor Telepon">
                                </div>
                                <div class="form-group">
                                    <label>Golongan Darah</label>
                                    <select name="gol_darah" class="form-control">
                                        <option disabled="" selected="">Pilih Golongan Darah</option>
                                        <option value="O">O</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Agama</label>
                                    <select name="agama" class="form-control">
                                        <option disabled="" selected="">Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>RT / RW</label>
                                    <input type="nama" name="status_warga" class="form-control" placeholder="RT/RW">
                                </div>
                                <div class="form-group">
                                    <label>Status Perkawinan</label>
                                    <select name="status_perkawinan" class="form-control">
                                        <option disabled="" selected="">Pilih Status</option>
                                        <option value="Berkeluarga">Berkeluarga</option>
                                        <option value="Belum Berkeluarga">Belum Berkeluarga</option>
                                        <option value="Janda">Janda</option>
                                        <option value="Duda">Duda</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Status HDK</label>
                                    <input type="status_hdk" name="status_hdk" class="form-control" placeholder="Status..">
                                </div>
                                <div class="form-group">
                                    <label>Pendidikan</label>
                                    <select name="pend_terakhir" class="form-control">
                                        <option disabled="" selected="">Pilih Pendidikan</option>
                                        <option value="Tidak Lulus Sekolah">Tidak Lulus Sekolah</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA/SEDERAJAT">SMA/SEDERAJAT</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control" cols="30" rows="10" placeholder="Alamat.."></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <input type="pekerjaan" name="pekerjaan" class="form-control" placeholder="Pekerjaan..">
                                </div>

                                <div class="form-group">
                                    <label>Nama Ayah</label>
                                    <input type="nama" name="nama_ayah" class="form-control" placeholder="Nama Ayah..">
                                </div>
                                <div class="form-group">
                                    <label>Nama Ibu</label>
                                    <input type="nama" name="nama_ibu" class="form-control" placeholder="Nama Ibu..">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button name="simpan" class="btn btn-success btn-sm">Simpan</button>
                        <a href="?halaman=tampil_penduduk" class="btn btn-default btn-sm">Batal</a>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>

<?php
if (isset($_POST['simpan'])) {
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

    $sql = "INSERT INTO data_penduduk (nik,no_kk,nama,jekel,tempat_lahir,tanggal_lahir,email,telepon,gol_darah,agama,status_warga,status_perkawinan,status_hdk,pend_terakhir,alamat,pekerjaan,nama_ayah,nama_ibu) VALUES ('$nik','$no_kk','$nama','$jekel','$tempat_lahir','$tanggal_lahir','$Email','$telepon','$gol_darah','$agama','$status_warga','$status_perkawinan','$status_hdk','$pend_terakhir','$alamat','$pekerjaan','$nama_ayah','$nama_ibu')";
    $query = mysqli_query($konek, $sql);

    if ($query) {
        echo "<script language='javascript'>swal('Selamat...', 'Simpan Berhasil', 'success');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_penduduk">';
    } else {
        echo "<script language='javascript'>swal('Gagal...', 'Simpan Gagal', 'error');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=tambah_penduduk">';
    }
}
?>