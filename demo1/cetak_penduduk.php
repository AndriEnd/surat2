<?php include '../konek.php';
include '../convert_romawi.php' ?>
<?php
if (isset($_GET['data_penduduk'])) {
    $sql = "SELECT * FROM data_penduduk ";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $nik = $data['nik'];
    $nama = $data['nama'];
    $no_telepon = $data['no_telpon'];
    $tempat = $data['tempat_lahir'];
    $tgl = $data['tanggal_lahir'];
    $tgl2 = $data['tanggal_request'];
    $format1 = date('Y', strtotime($tgl2));
    $format2 = date('d-m-Y', strtotime($tgl));
    $format3 = date('d F Y', strtotime($tgl2));
    $format4 = date('d F Y', strtotime($acc));
    $bulan = date('m', strtotime($tgl2));
    $romawi = getRomawi($bulan);
    $agama = $data['agama'];
    $jekel = $data['jekel'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $status_warga = $data['status_warga'];
    $status_hdk = $data['status_hdk'];
    $request = $data['request'];
    $usaha = $data['usaha'];
    $keperluan = $data['keperluan'];
    $pend_terakhir = $data['pend_terakhir'];
    $pekerjaan = $data['pekerjaan'];
    $acc = $data['acc'];
    $keperluan = $data['keperluan'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAPORAN DATA PENDUDUK TAHUN <?php echo date('Y'); ?></title>
</head>

<body>
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
    <center>
        <table border="1" align="center" class="table table-bordered">
            <tr align="center">
                <th>No.</th>
                <th>No.KK</th>
                <th>NIK
                    <br> Nama
                </th>

                <th>Alamat</th>
                <th>Golongan
                    <br>Darah
                </th>
                <th>Jenis Kelamin</th>
                <th>Tempat
                    <br> Tanggal Lahir
                </th>
                <th>Telepon</th>
                <th>Agama</th>
                <th>RT / RW</th>
                <th>Status
                    <br>Perkawinan
                </th>
                <th>Status HDK</th>
                <th>Pendidikan</th>
                <th>Pekerjaan</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
            </tr>
            <?php
            $no = 1;
            $tampil = "SELECT * FROM data_penduduk";
            $query = mysqli_query($konek, $tampil);
            while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
                $no;
                $no_kk = $data['no_kk'];
                $nik = $data['nik'];
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
                <tbody>
                    <tr align="center">
                        <th><?php echo $no++; ?></th>
                        <td><?php echo $no_kk; ?></td>
                        <td><?php echo $nik; ?> <?php echo $nama; ?></td>
                        <td><?php echo $alamat; ?></td>
                        <td><?php echo $gol_darah; ?></td>
                        <td><?php echo $jekel; ?></td>
                        <td><?php echo $tempat_lahir . ", " . $tanggal_lahir; ?></td>
                        <td><?php echo $telepon; ?></td>
                        <td><?php echo $agama; ?></td>
                        <td><?php echo $status_warga; ?></td>
                        <td><?php echo $status_perkawinan; ?></td>
                        <td><?php echo $status_hdk; ?></td>
                        <td><?php echo $pend_terakhir; ?></td>
                        <td><?php echo $pekerjaan; ?></td>
                        <td><?php echo $nama_ayah; ?></td>
                        <td><?php echo $nama_ibu; ?></td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>
    </center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <table border='0' align="right">
        <tr>
            <td style="text-align: center"><b>Lampung Tengah, <?php echo date('d F Y'); ?></b></td>
        </tr>
    </table>
    <br><br><br><br><br>
    <table border='0' align="right">
        <tr>
            <td style="text-align: center"><b>Lurah Kel.Sumber Bahagia</b></td>
        </tr>
        <tr>
            <td style="text-align: center"><b>(Lurah)</b></td>
        </tr>
    </table>
</body>

</html>
<script>
    window.print();
</script>