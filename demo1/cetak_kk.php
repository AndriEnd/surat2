<?php include '../konek.php';
include '../convert_romawi.php'; ?>
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
    $nama = $data['nama'];
    $warga_negara = $data['warga_negara'];
    $status_warga = $data['status_warga'];
    $request = $data['request'];
    $keterangan = $data['keterangan'];
    $status = $data['status'];
    $acc = $data['acc'];
    $keperluan = $data['keperluan'];
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
    $jekel = $data['jekel'];
    $status_warga = $data['status_warga'];
    $status_hdk = $data['status_hdk'];
    $status_perkawinan = $data['status_perkawinan'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CETAK KK</title>
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
                $nama = $data['nama'];
                $nik = $data['nik'];
                $format2 = date('d F Y', strtotime($tgl));
                $jekel = $data['jekel'];
                $agama = $data['agama'];
                $status_hdk = $data['status_hdk'];
            ?>
                <tbody>
                    <tr align="center">
                        <th><?php echo $no++; ?></th>
                        <th><?php echo $nama; ?></th>
                        <td><?php echo $nik; ?></td>
                        <td><?php echo $tempat . ", " . $format2; ?></td>
                        <td><?php echo $jekel; ?></td>
                        <td><?php echo $agama; ?></td>
                        <td><?php echo $status_hdk; ?></td>
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
                <th>Lampung Tengah, <?php echo $format4; ?></th>
            </tr>
            <tr>
                <td>Tanda Tangan <br> Yang Bersangkutan </td>
                <td></td>
                <td>Lurah Sumber Bahagia</td>
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
            <tr>
                <td><b style="text-transform:uppercase"><u>(<?php echo $nama; ?>)</u></b></td>
                <td></td>
                <td><b><u>(LURAH)</u></b></td>
            </tr>
        </table>
    </table>
</body>

</html>
<script>
    window.print();
</script>