<?php
include '../konek.php';
?>
<!-- Fonts and icons -->
<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
<script>
    WebFont.load({
        google: {
            "families": ["Lato:300,400,700,900"]
        },
        custom: {
            "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
            urls: ['../assets/css/fonts.min.css']
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
</script>

<!-- CSS Files -->
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/atlantis.min.css">

<!-- CSS Just for demo purpose, don't include it in your project -->
<link rel="stylesheet" href="../assets/css/demo.css">
<?php
if (isset($_GET['bulan'])) {
    $bln = $_GET['bulan'];
    $sql = "SELECT
	data_user.nik,
	data_user.nama,
	data_request_sktm.acc,
	data_request_sktm.keperluan,
	data_request_sktm.request
	FROM
		data_user
	INNER JOIN data_request_sktm ON data_request_sktm.nik = data_user.nik
	WHERE MONTH(data_request_sktm.acc) = :bulan AND data_request_sktm.request = :request
	UNION
    SELECT
        data_user.nik,
        data_user.nama,
        data_request_kk.acc,
        data_request_kk.keperluan,
        data_request_kk.request
    FROM
        data_user
    INNER JOIN data_request_kk ON data_request_kk.nik = data_user.nik
    WHERE MONTH(data_request_kk.acc) = :bulan AND data_request_kk.request = :request
	UNION
    SELECT
        data_user.nik,
        data_user.nama,
        data_request_sku.acc,
        data_request_sku.keperluan,
        data_request_sku.request
    FROM
        data_user
    INNER JOIN data_request_sku ON data_request_sku.nik = data_user.nik
    WHERE MONTH(data_request_sku.acc) = :bulan AND data_request_sku.request = :request
	UNION
    SELECT
        data_user.nik,
        data_user.nama,
        data_request_skd.acc,
        data_request_skd.keperluan,
        data_request_skd.request
    FROM
        data_user
    INNER JOIN data_request_skd ON data_request_skd.nik = data_user.nik
    WHERE MONTH(data_request_skd.acc) = :bulan AND data_request_skd.request = :request
	UNION
    SELECT
        data_user.nik,
        data_user.nama,
        data_request_akta.acc,
        data_request_akta.keperluan,
        data_request_akta.request
    FROM
        data_user
    INNER JOIN data_request_akta ON data_request_akta.nik = data_user.nik
    WHERE MONTH(data_request_akta.acc) = :bulan AND data_request_akta.request = :request
	UNION
    SELECT
        data_user.nik,
        data_user.nama,
        data_request_ktp.acc,
        data_request_ktp.keperluan,
        data_request_ktp.request
    FROM
        data_user
    INNER JOIN data_request_ktp ON data_request_ktp.nik = data_user.nik
    WHERE MONTH(data_request_ktp.acc) = :bulan AND data_request_ktp.request = :request
	";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':bulan', $bulan, PDO::PARAM_INT); // Ubah menjadi PDO::PARAM_INT jika bulan berupa angka
    $stmt->bindParam(':request', $request, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $pdo = null;



    if ($bln == "1") {
        $bln = "JANUARI";
    } elseif ($bln == "2") {
        $bln = "FEBRUARI";
    } elseif ($bln == "3") {
        $bln = "MARET";
    } elseif ($bln == "4") {
        $bln = "APRIL";
    } elseif ($bln == "5") {
        $bln = "MEI";
    } elseif ($bln == "6") {
        $bln = "JUNI";
    } elseif ($bln == "7") {
        $bln = "JULI";
    } elseif ($bln == "8") {
        $bln = "AGUSTUS";
    } elseif ($bln == "9") {
        $bln = "SEPTEMBER";
    } elseif ($bln == "10") {
        $bln = "OKTOBER";
    } elseif ($bln == "11") {
        $bln = "NOVEMBER";
    } elseif ($bln == "12") {
        $bln = "DESEMBER";
    }


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> LAPORAN BULAN <?php echo date('F'); ?></title>
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
                    <font size="4"><b>PEMERINTAHAN KABUPATEN LAMPUNG TENGAH</b></font><br>
                    <font size="4"><b>KECAMATAN SEPUTIH BANYAK</b></font><br>
                    <font size="4"><b>KELURAHAN SUMBER BAHAGIA</b></font><br>
                    <font size="2"><i>Alamat : JL Simpang Lima Sumber Bahagia Seputih Banyak , 34156</i></font><br>
                    <!-- <font size="4"><b>PERIODE BULAN <?php echo $bln; ?></b></font><br> -->
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
        <div class="card-body">
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal ACC</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Keperluan</th>
                        <th scope="col">Request</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 0;
                    if (isset($result) && is_array($result)) {
                        foreach ($result as $data) {
                            $no++;
                            $nik = $data['nik'];
                            $nama = $data['nama'];
                            $tanggal = $data['acc'];
                            $tgl = date('d F Y', strtotime($tanggal));
                            $keperluan = $data['keperluan'];
                            $request = $data['request'];
                    ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $tgl; ?></td>
                                <td><?php echo $nama; ?></td>
                                <td><?php echo $nik; ?></td>
                                <td><?php echo $keperluan; ?></td>
                                <td><?php echo $request; ?></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </center>
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
            <td style="text-align: center"><b>Lurah Sumber Bahagia</b></td>
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