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
include '../konek.php';

if (isset($_GET['bulan'])) {
    $bulan = $_GET['bulan'];
    $request = isset($_GET['request']) ? $_GET['request'] : '';
    try {
        $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
        $stmt->bindParam(':bulan', $bulan, PDO::PARAM_INT);
        $stmt->bindParam(':request', $request, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Koneksi gagal: " . $e->getMessage());
    } finally {
        $pdo = null; // Tutup koneksi PDO setelah selesai digunakan
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Laporan Bulan <?php echo date('F'); ?></title>
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
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Tanggal Request</th>
                    <th>Tanggal ACC</th>
                    <th>Nama</th>
                    <th>Keperluan</th>
                    <th>Layanan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1; // Mulai dari nomor 1
                if (isset($result) && is_array($result)) {
                    foreach ($result as $data) {
                        // Pastikan variabel diambil dari data iterasi
                        $req = $data['tanggal_request'];
                        $format1 = date('d F Y', strtotime($data['acc']));
                        $nama = $data['nama'];
                        $keperluan = $data['keperluan'];
                        $request = $data['request'];
                ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $req; ?></td>
                            <td><?php echo $format1; ?></td>
                            <td><?php echo $nama; ?></td>
                            <td><?php echo $keperluan; ?></td>
                            <td><?php echo $request; ?></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
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