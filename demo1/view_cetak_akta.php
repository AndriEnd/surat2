<?php include '../konek.php';
include '../convert_romawi.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
if (isset($_GET['id_request_akta'])) {
    $id = $_GET['id_request_akta'];
    $sql = "SELECT * FROM data_request_akta natural join data_user WHERE id_request_akta='$id'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $id = $data['id_request_akta'];
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
    $nama_anak = $data['nama_anak'];
    $status_anak = $data['status_anak'];
    $anak_ke = $data['anak_ke'];
    $alamat = $data['alamat'];
    $status_warga = $data['status_warga'];
    $request = $data['request'];
    $keterangan = $data['keterangan'];
    $keperluan = $data['keperluan'];
    $status = $data['status'];

    $acc = $data['acc'];
    $format4 = date('d F Y', strtotime($acc));
    if ($format4 == 0) {
        $format4 = "kosong";
    } elseif ($format4 == 1) {
        $format4;
    }

    if ($status == 3) {
        $keterangan = "Sudah ACC Lurah, surat sedang dalam proses cetak oleh RT";
    }
}
if (isset($_GET['id_request_kk'])) {
    $id = $_GET['id_request_kk'];
    $sql = "SELECT * FROM data_request_kk natural join data_penduduk WHERE id_request_kk='$id'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $pekerjaan = $data['pekerjaan'];
    $alamat = $data['alamat'];
    $status_warga = $data['status_warga'];
    $status_perkawinan = $data['status_perkawinan'];
    $status_hdk = $data['status_hdk'];
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
                        <form action="" enctype="multipart/form-data" method="POST">
                            <div class="form-group">
                                <label>Keterangan</label>
                                <select name="dicetak" id="" class="form-control">
                                    <option value="">Pilih</option>
                                    <option value="Surat dicetak, bisa diambil!">Surat dicetak, bisa diambil!</option>
                                </select>
                                <br><br>
                                <b>Upload File Keterangan Lahir</b><br>
                                <input type="file" name="akta" class="form-control" size="37" required>
                                <br><br>
                                <input type="submit" name="ttd" value="Kirim" class="btn btn-success btn-sm">
                            </div>
                        </form>

                        <?php
                        if (isset($_POST['ttd'])) {
                            $cetak = $_POST['dicetak'];
                            $file_akta = $_FILES['akta']['name']; // nama file
                            $file_tmp = $_FILES['akta']['tmp_name']; // lokasi file
                            $file_destination = "../outputSurat/AKTA/" . $file_akta; // folder file                           
                            $konek = mysqli_connect($hostname, $username, $password, $database,); // info file
                            $sql = "UPDATE data_request_akta SET file_akta='$file_akta' WHERE id_request_akta=$id";
                            //$sql = "INSERT INTO data_request_akta (file_akta) VALUES ('$file_akta') WHERE id_request_akta=$id"; // Insert to DB where ID
                            $query = mysqli_query($konek, $sql,);
                            $update = mysqli_query($konek, "UPDATE data_request_akta SET keterangan='$cetak', status=3 WHERE id_request_akta=$id");

                            if ($update && $query) {
                                if (move_uploaded_file($file_tmp, $file_destination)) {
                                    echo "<script language='javascript'>swal('Selamat...', 'Kirim Berhasil', 'success');</script>";
                                    echo '<meta http-equiv="refresh" content="3; url=?halaman=surat_dicetak">';
                                } else {
                                    echo "<script language='javascript'>swal('Gagal...', 'Kirim Gagal', 'error');</script>";
                                    echo '<meta http-equiv="refresh" content="3; url=?halaman=view_akta">';
                                }
                            }
                        }
                        ?>
                    </div>
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
                    <a href="cetak_akta.php?id_request_akta=<?= $id; ?>" target="_blank" class="btn btn-info btn-border btn-round btn-sm">
                        <span class="btn-label">
                            <i class="fa fa-print"></i>
                        </span>
                        Print
                    </a>
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
                    <br>
                    <table border="0" align="center">
                        <tr>
                            <td>
                                <center>
                                    <font size="4"><b>SURAT KETERANGAN LAHIR</b></font><br>
                                    <hr style="margin:0px" color="black">
                                    <span>Nomor : 145.6 /<?php echo $id; ?>/ KP.01 /<?php echo $romawi; ?>/<?php echo $format1; ?> </span>
                                </center>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <table border="0" align="center">
                        <tr>
                            <td>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan di bawah ini Lurah Sumber Bahagia Kecamatan Seputih Banyak<br> Lampung Tengah, Menerangkan bahwa :
                            </td>
                        </tr>
                    </table>
                    <br>
                    <table border="0" align="center">
                        <tr>
                            <td>Nama Anak</td>
                            <td>:</td>
                            <td><?php echo $nama_anak; ?></td>
                        </tr>
                        <tr>
                            <td>Tempat, Tanggal Lahir</td>
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
                            <td>Status Warga</td>
                            <td>:</td>
                            <td><?php echo $status_warga; ?></td>
                        </tr>
                        <tr>
                            <td>Status anak</td>
                            <td>:</td>
                            <td><?php echo $status_anak; ?></td>
                        </tr>
                        <tr>
                            <td>Anak Ke -</td>
                            <td>:</td>
                            <td><?php echo $anak_ke; ?></td>
                        </tr>
                        <tr>
                            <td>Nama Ibu</td>
                            <td>:</td>
                            <td><?php echo $nama; ?></td>
                        </tr>
                        <tr>
                            <td>No. NIK</td>
                            <td>:</td>
                            <td><?php echo $nik; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?php echo $alamat; ?></td>
                        </tr>
                        <tr>
                            <td>Keperluan</td>
                            <td>:</td>
                            <td><?php echo $keperluan; ?></td>
                        </tr>
                        <tr>


                            <?php
                            if ($request == "Surat Keterangan lahir") {
                                $request = "Surat Keterangan Lahir";
                            }
                            ?>

                        </tr>
                    </table>
                    <br>
                    <table border="0" align="center">
                        <tr>
                            <td>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat ini diberikan kepada yang bersangkutan agar dapat dipergunakan<br>&nbsp;&nbsp;&nbsp;&nbsp;untuk sebagaimana mestinya.
                            </td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <br>
                    <table border="0" align="center">
                        <tr align="">
                            <th></th>
                            <th width="100px"></th>
                            <th>Sumber Bahagia, <?php echo $format4; ?></th>
                        </tr>
                        <tr align="left">
                            <td><b></b></td>
                            <td></td>
                            <td>Kepala Desa Sumber Bahagia </td>
                        </tr>
                        <tr align="left">
                            <td rowspan="15"></td>
                            <td>
                                <!--<td style="text-align: left"> <img src="../main/img/qr1.PNG" alt="" style="width: 60px; height: 60px;"></td>-->
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