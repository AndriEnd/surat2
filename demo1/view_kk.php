<?php include '../konek.php';
include '../convert_romawi.php';
?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
if (isset($_GET['id_request_kk'])) {
    $id = $_GET['id_request_kk'];
    $sql = "SELECT * FROM data_request_kk natural join data_user WHERE id_request_kk='$id'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $id = $data['id_request_kk'];
    $nik = $data['nik'];
    $nama = $data['nama'];
    $tempat = $data['tempat_lahir'];
    $tgl = $data['tanggal_lahir'];
    $tgl2 = $data['tanggal_request'];
    $format1 = date('Y', strtotime($tgl2));
    $format2 = date('d-m-Y', strtotime($tgl));
    $format3 = date('d F Y', strtotime($tgl2));
    $bulan = date('m', strtotime($tgl2));
    $romawi = getRomawi($bulan);
    $agama = $data['agama'];
    $jekel = $data['jekel'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $warga_negara = $data['warga_negara'];
    $keperluan = $data['keperluan'];
    $request = $data['request'];
    $acc = $data['acc'];
    $format4 = date('d F Y', strtotime($acc));
    if ($acc == 0) {
        $acc = "BELUM TTD";
    } elseif ($acc == 1) {
        $acc;
    }
}
if (isset($_GET['id_request_kk'])) {
    $id = $_GET['id_request_kk'];
    $sql = "SELECT * FROM data_request_kk natural join data_penduduk WHERE id_request_kk='$id'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $status_warga = $data['status_warga'];
    $status_perkawinan = $data['status_perkawinan'];
    $pekerjaan = $data['pekerjaan'];

    $nama_anggota  = $data['nama_anggota']; // anggota kel
    $nik_anggota  =  $data['nik_anggota'];
    $tempat_anggota  = $data['tempat_anggota'];
    $tgl_anggota  =  $data['tgl_anggota'];
    $jekel_anggota  =  $data['jekel_anggota'];
    $agama_anggota  =  $data['agama_anggota'];
    $hdk_anggota  =  $data['hdk_anggota'];
}
?>
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold"></h2>
            </div>
        </div>
    </div>
</div>
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-6">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-tools">
                        <form action="" method="POST">
                            <div class="form-group">
                                <input type="date" name="tgl_acc" class="form-control" required="">
                                <div class="form-group">
                                    <input type="submit" name="ttd" value="ACC" class="btn btn-primary btn-sm">
                                </div>
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['ttd'])) {
                            $ket = "Surat sedang dalam proses cetak";
                            $tgl = $_POST['tgl_acc'];
                            $update = mysqli_query($konek, "UPDATE data_request_kk SET acc='$tgl', status=2, keterangan='$ket' WHERE id_request_kk=$id");
                            if ($update) {
                                echo "<script language='javascript'>swal('Selamat...', 'ACC Lurah Berhasil', 'success');</script>";
                                echo '<meta http-equiv="refresh" content="3; url=?halaman=belum_acc_kk">';
                            } else {
                                echo "<script language='javascript'>swal('Gagal...', 'ACC Lurah Gagal', 'error');</script>";
                                echo '<meta http-equiv="refresh" content="3; url=?halaman=view_kk">';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table border="1" align="center">
                        <table border="1" align="center">
                            <table border="0" align="center">
                                <tr>
                                    <td><img src="img/logo1.png" width="70" height="87" alt=""></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <center>
                                            <font size="4">PEMERINTAHAN KABUPATEN LAMPUNG TENGAH</font><br>
                                            <font size="4">KECAMATAN SEPUTIH BANYAK</font><br>
                                            <font size="5"><b>KELURAHAN SUMBER BAHAGIA</b></font><br>
                                            <font size="2"><i>Alamat : JL Simpang Lima Sumber Bahagia Seputih Banyak , 34156</i></font><br>
                                        </center>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="45">
                                        <hr color="black">
                                    </td>
                                </tr>
                            </table>
                            <table border="0" align="center">
                                <tr>
                                    <td>
                                        <center>
                                            <br>
                                            <font size="4"><b>SURAT KETERANGAN / PENGANTAR KARTU KELUARGA</b></font><br>
                                            <hr style="margin:0px" color="black">
                                            <span>Nomor : 145.5 /<?php echo $id; ?>/ KP.01 /<?php echo $romawi; ?>/<?php echo $format1; ?> </span>
                                        </center>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <table border="0" align="center">
                                <tr>
                                    <td align="justify">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan di bawah ini Lurah Sumber Bahagia Kecamatan Seputih Banyak<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lampung Tengah, Menerangkan bahwa :
                                    </td>
                                </tr>
                            </table>
                            <table border="0" align="center">
                                <tr>
                                    <td>NIK</td>
                                    <td>:</td>
                                    <td><?php echo $nik; ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td>:</td>
                                    <td><?php echo $nama; ?></td>
                                </tr>
                                <tr>
                                    <td>Tempat,Tanggal Lahir</td>
                                    <td>:</td>
                                    <td><?php echo $tempat . ", " . $format2; ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td><?php echo $jekel; ?></td>
                                </tr>
                                <tr>
                                    <td>Agama</td>
                                    <td>:</td>
                                    <td><?php echo $agama; ?></td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan</td>
                                    <td>:</td>
                                    <td><?php echo $pekerjaan; ?></td>
                                </tr>
                                <tr>
                                    <td>Kewarganegaraan</td>
                                    <td>:</td>
                                    <td><?php echo $warga_negara; ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><?php echo $alamat; ?></td>
                                </tr>
                                <tr>
                                    <td>Status Perkawinan</td>
                                    <td>:</td>
                                    <td><?php echo $status_perkawinan; ?></td>
                                </tr>
                                <tr>
                                    <td>Keperluan</td>
                                    <td>:</td>
                                    <td><?php echo $keperluan; ?></td>
                                </tr>
                            </table>
                            <table border="0" align="center">
                                <tr>
                                    <td align="justify">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adalah benar penduduk Desa Sumber Baagia Kecamatan Seputih Banyak Kabupaten Lampung Tengah.<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan kartu keluraga ini dibuat dan dipergunakan sebagaianmana mestinya.<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adapun anggota keluarga yang berdasarkan dokumen pendataan kependudukan Desa Sumber Bahagia <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sebagai berikut:
                                    </td>
                                </tr>
                                <br>
                            </table>
                            <br>
                            <table border="1" align="center">
                                <tr align="center">
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>NIK</th>
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
                            <br>
                            <br>
                            <table border="0" align="center">
                                <tr>
                                    <th></th>
                                    <th width="100px"></th>
                                    <th>Sumber Bahagia, <?php echo $format4; ?></th>
                                </tr>
                                <tr>
                                    <td><b></b></td>
                                    <td></td>
                                    <td>Kepala Desa Sumber Bahagia </td>
                                </tr>
                                <tr>
                                    <td rowspan="15"></td>
                                    <td>
                                    <td style="text-align: left"> <img src="../main/img/qr1.PNG" alt="" style="width: 60px; height: 60px;"></td>
                                    </td>
                                    <td rowspan="15"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <td><b></b></td>
                                <td></td>
                                <td><b><u>Setio Hudi</u></b></td>
                                </tr>
                            </table>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>