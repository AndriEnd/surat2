<?php include '../konek.php';
include '../convert_romawi.php';  ?>
<?php
if (isset($_GET['id_request_sktm'])) {
    $id = $_GET['id_request_sktm'];
    $sql = "SELECT * FROM data_request_sktm natural join data_penduduk WHERE id_request_sktm='$id'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
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
    $pekerjaan = $data['pekerjaan'];
    $status_warga = $data['status_warga'];
    $request = $data['request'];
    $keperluan = $data['keperluan'];
    $acc = $data['acc'];
    $format4 = date('d F Y', strtotime($acc));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKTM_<?php echo $id; ?>_<?php echo $nama; ?>_<?php echo $nik; ?></title>
</head>

<body>

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
        <table border="0" align="right">
            <tr align="left">
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
</body>

</html>
<script>
    window.print();
</script>