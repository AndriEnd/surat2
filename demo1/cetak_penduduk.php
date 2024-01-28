<?php include '../konek.php';
include '../convert_romawi.php' ?>
<?php
if (isset($_GET['data_penduduk'])) {
    $sql = "SELECT * FROM data_penduduk ";
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
    $status_warga = $data['status_warga'];
    $request = $data['request'];
    $usaha = $data['usaha'];
    $keperluan = $data['keperluan'];
    $pekerjaan = $data['pekerjaan'];
    $acc = $data['acc'];
    $format4 = date('d F Y', strtotime($acc));
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Penduduk</title>
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
                        <font size="4"><b>Laporan Data Penduduk</b></font><br>
                        <hr style="margin:0px" color="black">
                        <!--<span>Nomor : 145.2 /<?php echo $id; ?>/ KP.01 /<?php echo $romawi; ?>/<?php echo $format1; ?> </span> -->
                    </center>
                </td>
            </tr>
            <div class="page-inner mt--5">
                <table border="0" align="center">
                    <tr>
                        <td>
                            <br>Laporan Data Penduduk Kelurahan Sumber Bahagia &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br> Sebagai berikut :
                        </td>
                    </tr>
                </table>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-tools">
                                    <a href="cetak_penduduk.php?tahun=<?php echo $tahun; ?>" target="_blank" class="btn btn-info btn-border btn-round btn-sm">
                                        <span class="btn-label">
                                            <i class="fa fa-print"></i>
                                        </span>
                                        Print
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table mt-3">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>NIK / Nama</th>
                                            <th>No.KK</th>
                                            <th>Alamat</th>
                                            <th>Golongan Darah</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat & Tanggal Lahir</th>
                                            <th>Telepon</th>
                                            <th>Agama</th>
                                            <th>RT / RW</th>
                                            <th>Status Perkawinan</th>
                                            <th>Status HDK</th>
                                            <th>Pendidikan</th>
                                            <th>Pekerjaan</th>
                                            <th>Nama Ayah</th>
                                            <th>Nama Ibu</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $tampil = "SELECT * FROM data_penduduk";
                                        $query = mysqli_query($konek, $tampil);
                                        while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
                                            $nik = $data['nik'];
                                            $no_kk = $data['no_kk'];
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
                                        }
                                        ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <table border="0" align="center">
                    <tr>
                        <th></th>
                        <th width="100px"></th>
                        <th>Lampung Tengah <?php echo $format4; ?></th>
                    </tr>
                    <tr>
                        <td>Tanda Tangan <br> Yang Bersangkutan </td>
                        <td></td>
                        <td>Lurah Sumber Bahagia </td>
                    </tr>
                    <tr>
                        <td rowspan="15"></td>
                        <td></td>
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
    </table>
</body>
</div>

</html>
<script>
    window.print();
</script>