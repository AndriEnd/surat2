<?php include '../konek.php'; ?>
<?php
$tampil_nik = "SELECT * FROM data_penduduk 
JOIN data_user ON data_penduduk.nik = data_user.nik 
WHERE data_penduduk.nik = '$_SESSION[nik]'";
$query = mysqli_query($konek, $tampil_nik);
$data = mysqli_fetch_array($query, MYSQLI_BOTH);
$nik = $data['nik'];
$no_kk = $data['no_kk'];
$Email = $data['email'];
$nama = $data['nama'];
$jekel = $data['jekel'];
$tempat_lahir = $data['tempat_lahir'];
$tanggal = $data['tanggal_lahir'];
$tanggal_lahir = date("d-F-Y", strtotime($tanggal));
$telepon = $data['telepon'];
$alamat = $data['alamat'];
$gol_darah = $data['gol_darah'];
$agama = $data['agama'];
$status_warga = $data['status_warga'];
$status_perkawinan = $data['status_perkawinan'];
$status_hdk = $data['status_hdk'];
$pend_terakhir = $data['pend_terakhir'];
$pekerjaan = $data['pekerjaan'];
$nama_ayah = $data['nama_ayah'];
$nama_ibu = $data['nama_ibu'];

?>
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">BIODATA ANDA</h4>
                        <a href="?halaman=ubah_pemohon&nik=<?= $nik; ?>" class="btn btn-sm btn-warning btn-round ml-auto">
                            <i class="fa fa-edit"></i>
                            Lengkapi Biodata
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <td>:</td>
                                <td><?= $nik; ?></td>
                            </tr>
                            <tr>
                                <th>No.KK</th>
                                <td>:</td>
                                <td><?= $no_kk; ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>:</td>
                                <td><?= $Email; ?></td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>:</td>
                                <td><?= $nama; ?></td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>:</td>
                                <td><?= $jekel; ?></td>
                            </tr>
                            <tr>
                                <th>Tempat Tanggal Lahir</th>
                                <td>:</td>
                                <td><?= $tempat_lahir . ' ,  ' . $tanggal_lahir; ?></td>
                            </tr>
                            <tr>
                                <th>Nomor Telepon</th>
                                <td>:</td>
                                <td><?= $telepon; ?></td>
                            </tr>
                            <tr>
                                <th>Golongan Darah</th>
                                <td>:</td>
                                <td><?= $gol_darah; ?></td>
                            </tr>

                            <tr>
                                <th>Agama</th>
                                <td>:</td>
                                <td><?= $agama; ?></td>
                            </tr>
                            <tr>
                                <th>RT / RW</th>
                                <td>:</td>
                                <td><?= $status_warga; ?></td>
                            </tr>
                            <tr>
                                <th>Status Perkawinan</th>
                                <td>:</td>
                                <td><?= $status_perkawinan; ?></td>
                            </tr>
                            <tr>
                                <th>Pendidikan</th>
                                <td>:</td>
                                <td><?= $pend_terakhir; ?></td>
                            </tr>
                            <tr>
                                <th>Pekerjaan</th>
                                <td>:</td>
                                <td><?= $pekerjaan; ?></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>:</td>
                                <td><?= $alamat; ?></td>
                            </tr>
                            <tr>
                                <th>Nama Ayah</th>
                                <td>:</td>
                                <td><?= $nama_ayah; ?></td>
                            </tr>
                            <tr>
                                <th>Nama Ibu</th>
                                <td>:</td>
                                <td><?= $nama_ibu; ?></td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>