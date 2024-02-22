<?php
include '../konek.php';
date_default_timezone_set('Asia/Jakarta');
?>

<?php
$tahun = "";
$request = "";
if (!isset($_POST['tampilkan'])) {
	$tahun = isset($_POST['tahun']) ? $_POST['tahun'] : '';
	$request = isset($_POST['request']) ? $_POST['request'] : '';
	$sql = "SELECT
		data_user.nik,
		data_user.nama,
		data_request_sktm.acc,
		data_request_sktm.keperluan,
		data_request_sktm.request
	FROM
		data_user
	INNER JOIN data_request_sktm ON data_request_sktm.nik = data_user.nik
	WHERE data_request_sktm.status = 3
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
	WHERE data_request_skd.status = 3
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
	WHERE data_request_kk.status = 3
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
	WHERE data_request_sku.status = 3
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
	WHERE data_request_akta.status = 3
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
	WHERE data_request_ktp.status = 3";
	$query = mysqli_query($konek, $sql);
} elseif (isset($_POST['tampilkan'])) {
	$konek = mysqli_connect($hostname, $username, $password, $database);
	try {
		$pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		die("Koneksi gagal: " . $e->getMessage());
	}
	$tahun = isset($_POST['tahun']) ? $_POST['tahun'] : '';
	$request = isset($_POST['request']) ? $_POST['request'] : '';

	$sql = "SELECT
	data_user.nik,
	data_user.nama,
	data_request_sktm.acc,
	data_request_sktm.keperluan,
	data_request_sktm.request
	FROM
		data_user
	INNER JOIN data_request_sktm ON data_request_sktm.nik = data_user.nik
	WHERE YEAR(data_request_sktm.acc) = :tahun AND data_request_sktm.request = :request
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
    WHERE YEAR(data_request_kk.acc) = :tahun AND data_request_kk.request = :request
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
    WHERE YEAR(data_request_sku.acc) = :tahun AND data_request_sku.request = :request
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
    WHERE YEAR(data_request_skd.acc) = :tahun AND data_request_skd.request = :request
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
    WHERE YEAR(data_request_akta.acc) = :tahun AND data_request_akta.request = :request
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
    WHERE YEAR(data_request_ktp.acc) = :tahun AND data_request_ktp.request = :request
	";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':tahun', $tahun, PDO::PARAM_INT); // Ubah menjadi PDO::PARAM_INT jika tahun berupa angka
	$stmt->bindParam(':request', $request, PDO::PARAM_STR);
	$stmt->execute();
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$pdo = null;
}
?>
<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">LAPORAN PERTAHUN </h2>
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
								<h3> PILIH PRIODE TAHUN</h3>
								<select name="tahun" class="form-control">
									<option value="">Pilih Tahun</option>
									<option value="2020">2020</option>
									<option value="2021">2021</option>
									<option value="2022">2022</option>
									<option value="2023">2023</option>
									<option value="2024">2024</option>
									<option value="2025">2025</option>
									<option value="2026">2026</option>
									<option value="2027">2027</option>
									<option value="2028">2028</option>
									<option value="2029">2029</option>
								</select>
								<h3> PILIH JENIS SURAT</h3>
								<select name="request" id="request" class="form-control">
									<option>Pilih Surat</option>
									<option value="SKTM">SKTM</option>
									<option value="SKU">SKU</option>
									<option value="SKD">SKD</option>
									<option value="AKTA">AKTA</option>
									<option value="KTP">KTP</option>
									<option value="KARTU KELUARGA">KK</option>
								</select>

								<!--<select name="request" class="form-control">
									<option value="">Pilih Surat</option>
									<option value="SKTM" <?php if ($request == "SKTM") {
																echo "tampilkan";
															} ?>>SKTM</option>
									<option value="SKU" <?php if ($request == "SKU") {
															echo "tampilkan";
														} ?>>SKU</option>
									<option value="AKTA" <?php if ($request == "AKTA") {
																echo "tampilkan";
															} ?>>KETERANGAN LAHIR</option>
									<option value="KTP" <?php if ($request == "KTP") {
															echo "tampilkan";
														} ?>>KTP</option>
									<option value="KARTU KK" <?php if ($request == "KARTU KK") {
																	echo "tampilkan";
																} ?>>KK</option>
									<option value="SKD" <?php if ($request == "SKD") {
															echo "tampilkan";
														} ?>>SKD</option>
								</select> -->

								<div class="form-group">
									<input type="submit" name="tampilkan" value="Tampilkan" class="btn btn-primary btn-sm">
									<a href="?halaman=laporan_pertahun">
										<input type="submit" value="Reload" class="btn btn-primary btn-sm"></a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="card-tools">
						<a href="cetak_tahun.php?tahun=<?php echo $tahun; ?>" target="_blank" class="btn btn-info btn-border btn-round btn-sm">
							<span class="btn-label">
								<i class="fa fa-print"></i>
							</span>
							Print All
						</a>
					</div>
				</div>

				<div class="card-body">
					<table class="table mt-3">

						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Tanggal ACC</th>
								<th scope="col">Nama</th>
								<th scope="col">Nik</th>
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
			</div>
		</div>
	</div>
</div>