<?php include '../konek.php';
include '../convert_romawi.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_GET['id_request_sktm'])) {
    $id = $_GET['id_request_sktm'];
    $sql = "SELECT * FROM data_request_sktm natural join data_penduduk WHERE id_request_sktm='$id'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $id = $data['id_request_sktm'];
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
    $pekerjaan = $data['pekerjaan'];
    $jekel = $data['jekel'];
    $Email = $data['email'];
    $alamat = $data['alamat'];
    $status_warga = $data['status_warga'];
    $keperluan = $data['keperluan'];
    $request = $data['request'];
    $keterangan = $data['keterangan'];
    $status = $data['status'];
    $file_sktm = $data['file_sktm'];
    $receiver_email = $data['email'];
    
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
                                <input type=text name="dicetak" id="" class="form-control" value="Surat SKTM Sudah Selesai Diproses, Silahkan Unduh Pada Halaman Website Sisurat!">
                                <br>
                                <br>
                                <b>Upload File SKTM</b><br>
                                <input type="file" name="sktm" class="form-control" size="37" required>
                                <br><br>
                                <input type="submit" name="ttd" value="Kirim" class="btn btn-success btn-sm">
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['ttd'])) {

                            $cetak = $_POST['dicetak'];
                            $file_sktm = $_FILES['sktm']['name']; // nama file
                            $file_tmp = $_FILES['sktm']['tmp_name']; // lokasi file
                            $file_destination = "../outputSurat/SKTM/" . $file_sktm; // folder file                           
                            $konek = mysqli_connect($hostname, $username, $password, $database,); // info file
                            $sql = "UPDATE data_request_sktm SET file_sktm='$file_sktm' WHERE id_request_sktm=$id";
                            // $sql = "INSERT INTO data_request_sktm (file_sktm) VALUES ('$file_sktm') WHERE id_request_sktm=$id"; // Insert to DB where ID
                            $query = mysqli_query($konek, $sql,);
                            $update = mysqli_query($konek, "UPDATE data_request_sktm SET keterangan='$cetak', status=3 WHERE id_request_sktm=$id");
                            
                            $sender_name = "AdminSisurat";
                            $sender_email = "noreply@mailer.org";
                            //
                            $username = "techsisurat@gmail.com";
                            $password = "rduzkgkzwezrslgx";
                            //
                            $receiver_email = $data['email']; // Mengakses nilai 'email' dalam $_POST
                            $message = $_POST['dicetak']; // Mengakses nilai 'dicetak' dalam $_POST
                            $subject = 'Status Pengajuan Surat'; // Mengakses nilai 'sktm' dalam $_POST
                            
                            $mail = new PHPMailer(true);
                            $mail->isSMTP();
                            //$mail->SMTPDebug = 2;
                            $mail->Host = 'smtp.gmail.com';
                            $mail->SMTPAuth = true;
                        
                            $mail->SMTPSecure = 'ssl';
                            $mail->Port = 465;
                            
                            $mail->setFrom($sender_email, $sender_name);
                            $mail->Username = $username;
                            $mail->Password = $password;
                        
                            $mail->Subject = $subject;
                            $mail->msgHTML($message);
                            $mail->addAddress($receiver_email);
                            if ($update && $query) {
                                if (move_uploaded_file($file_tmp, $file_destination) && $mail->send()) {
                                    echo "<script language='javascript'>swal('Selamat...', 'Kirim Berhasil', 'success');</script>";
                                    echo '<meta http-equiv="refresh" content="3; url=?halaman=surat_dicetak">'; 
                                } else {
                                    echo "<script language='javascript'>swal('Gagal...', 'Kirim Gagal', 'error');</script>";
                                    echo '<meta http-equiv="refresh" content="3; url=?halaman=view_sktm">';
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
                    <a href="cetak_sktm.php?id_request_sktm=<?= $id; ?>" target="_blank" class="btn btn-info btn-border btn-round btn-sm">
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
                        </tr>
                        <tr>
                            <td colspan="60">
                                <hr color="black">
                            </td>
                        </tr>
                    </table>
                    <br>
                    <table border="0" align="center">
                        <tr>
                            <td>
                                <center>
                                    <font size="4"><b>SURAT KETERANGAN TIDAK MAMPU</b></font><br>
                                    <hr style="margin:0px" color="black">
                                    <span>Nomor : 145.1 /<?php echo $id; ?>/ KP.01 /<?php echo $romawi; ?>/<?php echo $format1; ?> </span>
                                </center>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <table border="0" align="center">
                        <tr>
                            <td>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yang bertanda tangan di bawah ini Lurah Sumber Bahagia Kecamatan Seputih Banyak <br> Lampung Tengah, Menerangkan bahwa :
                            </td>
                        </tr>
                    </table>
                    <br>
                    <table border="0" align="center">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?php echo $nama; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php echo $Email; ?></td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>:</td>
                            <td><?php echo $nik; ?></td>
                        </tr>
                        <tr>
                            <td>Tempat ,Tanggal Lahir </td>
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
                            <td>RT / RW </td>
                            <td>:</td>
                            <td><?php echo $status_warga; ?></td>
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

                            if ($request == "TIDAK MAMPU") {
                                $request = "Surat Keterangan Tidak Mampu";
                            }

                            ?>
                        </tr>
                    </table>
                    <br>
                    <table border="0" align="center">
                        <tr>
                            <td>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahwa nama tersebut benar- benar warga kami dan menurut sepanjang pengetahuan kami <br> dari laporan RT setempat dan hingga surat ini dikeluarkan yang bersanggkutan benar - benar<br> berasal dari keluarga tidak mampu.&nbsp;&nbsp;<br><br>Demikian surat ini diberikan kepada yang bersangkutan agar dapat dipergunakan <br> untuk sebagaimana mestinya.&nbsp;&nbsp;&nbsp;&nbsp;
                            </td>
                        </tr>
                    </table>
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