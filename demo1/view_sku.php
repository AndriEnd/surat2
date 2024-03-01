<?php include '../konek.php';
include '../convert_romawi.php';
?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>

<?php
if (isset($_GET['id_request_sku'])) {
    $id = $_GET['id_request_sku'];
    $sql = "SELECT * FROM data_request_sku natural join data_user WHERE id_request_sku='$id'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $id = $data['id_request_sku'];
    $nik = $data['nik'];
    $nama = $data['nama'];
    $tempat = $data['tempat_lahir'];
    $tgl = $data['tanggal_lahir'];
    $tgl2 = $data['tanggal_request'];
    $bulan = date('acc');
    $romawi = getRomawi($bulan);
    $format1 = date('Y', strtotime($tgl2));
    $format2 = date('d-m-Y', strtotime($tgl));
    $format3 = date('d F Y', strtotime($tgl2));
    $bulan = date('m', strtotime($tgl2));
    $romawi = getRomawi($bulan);
    $agama = $data['agama'];
    $jekel = $data['jekel'];
    $keperluan = $data['keperluan'];
    $alamat_usaha = $data['alamat_usaha'];
    $usaha = $data['usaha'];
    $jenis_usaha = $data['jenis_usaha'];
    $alamat_usaha = $data['alamat_usaha'];
    $kepemilikan = $data['kepemilikan'];
    $request = $data['request'];
    $usaha = $data['usaha'];
    $acc = $data['acc'];
    $format4 = date('d F Y', strtotime($acc));
    if ($acc == 0) {
        $acc = "BELUM TTD";
    } elseif ($acc == 1) {
        $acc;
    }
}
if (isset($_GET['id_request_sku'])) {
    $id = $_GET['id_request_sku'];
    $sql = "SELECT * FROM data_request_sku natural join data_penduduk WHERE id_request_sku='$id'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $status_warga = $data['status_warga'];
    $alamat = $data['alamat'];
    $pekerjaan = $data['pekerjaan'];
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
                                <input type="date" name="tgl_acc" class="form-control">
                                <div class="form-group">
                                    <input type="submit" name="ttd" value="ACC" class="btn btn-primary btn-sm">
                                </div>
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['ttd'])) {
                            $ket = "Surat sedang dalam proses cetak";
                            $tgl = $_POST['tgl_acc'];
                            $update = mysqli_query($konek, "UPDATE data_request_sku SET acc='$tgl', status=2, keterangan='$ket' WHERE id_request_sku=$id");
                            if ($update) {
                                echo "<script language='javascript'>swal('Selamat...', 'ACC Lurah Berhasil', 'success');</script>";
                                echo '<meta http-equiv="refresh" content="3; url=?halaman=belum_acc_sku">';
                            } else {
                                echo "<script language='javascript'>swal('Gagal...', 'ACC Lurah Gagal', 'error');</script>";
                                echo '<meta http-equiv="refresh" content="3; url=?halaman=view_sku">';
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
                                        <font size="4"><b>SURAT KETERANGAN USAHA</b></font><br>
                                        <hr style="margin:0px" color="black">
                                        <span>Nomor : 145.2 /<?php echo $id; ?>/ KP.01 /<?php echo $romawi; ?>/<?php echo $format1; ?> </span>
                                    </center>
                                </td>
                            </tr>
                            <table border="0" align="center">
                                <tr>
                                    <td>
                                        <br>Yang bertanda tangan di bawah ini Lurah Sumber Bahagia Kecamatan Seputih Banyak &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br> Menerangkan bahwa :
                                    </td>
                                </tr>
                            </table>
                            <table border="0" align="center">
                                <tr>
                                    <td>Nama</td>
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
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><?php echo $alamat; ?></td>
                                </tr>
                                <tr>
                                    <td>RT /RW </td>
                                    <td>:</td>
                                    <td><?php echo $status_warga; ?></td>
                                </tr>
                            </table>
                            <table border="0" align="center">
                                <tr>
                                    <td>
                                        Sesuai dengan yang bersangkutan benar nama tersebut mempunyai usaha sebagai berikut :
                                    </td>
                                </tr>
                            </table>
                            <table border="0" align="center">
                                <tr>
                                    <td>Nama Usaha</td>
                                    <td>:</td>
                                    <td></td>
                                    <td><?php echo $usaha; ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Usaha</td>
                                    <td>:</td>
                                    <td></td>
                                    <td><?php echo $jenis_usaha; ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat Usaha</td>
                                    <td>:</td>
                                    <td></td>
                                    <td><?php echo $alamat_usaha; ?></td>
                                </tr>
                                <tr>
                                    <td>Status Kepemilikan</td>
                                    <td>:</td>
                                    <td></td>
                                    <td><?php echo $kepemilikan; ?></td>

                                </tr>
                                <tr>
                                    <td>Keperluan</td>
                                    <td>:</td>
                                    <td></td>
                                    <td><?php echo $keperluan; ?></td>
                                </tr>
                            </table>
                            <table border="0" align="center">
                                <tr>
                                    <td>
                                        Demikian surat ini diberikan kepada yang bersangkutan agar dapat dipergunakan untuk &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>sebagaimana mestinya.
                                    </td>
                                </tr>
                            </table>
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
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>