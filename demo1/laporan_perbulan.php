<?php
include '../konek.php';
date_default_timezone_set('Asia/Jakarta');
?>
<?php

if (!isset($_POST['tampilkan'])) {
	$bulan = isset($_POST['bulan']) ? $_POST['bulan'] : '';

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
} elseif (isset($_POST['tampilkan'])) {
	$konek = mysqli_connect($hostname, $username, $password, $database);
	try {
		$pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		die("Koneksi gagal: " . $e->getMessage());
	}
	$bulan = isset($_POST['bulan']) ? $_POST['bulan'] : '';
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
}
?>
<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">LAPORAN PERBULAN </h2>
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
								<h3> PILIH PRIODE BULAN</h3>
								<select name="bulan" id="bulan" class="form-control">
									<option>Pilih Bulan</option>
									<option value="1">Januari</option>
									<option value="2">Februari</option>
									<option value="3">Maret</option>
 									<option value="4">April</option>
									<option value="5">Mei</option>
									<option value="6">Juni</option>
									<option value="7">Juli</option>
									<option value="8">Agustus</option>
									<option value="9">September</option>
									<option value="10">Oktober</option>
									<option value="11">Nopember</option>
									<option value="12">Desember</option>
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
								<div class="form-group">
									<input type="submit" name="tampilkan" value="Tampilkan" class="btn btn-primary btn-sm">
									<a href="?halaman=laporan_perbulan">

									</a>
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
						<a href="cetak_bulan.php?bulan=<?php echo $bulan; ?>,<?php echo $request; ?>" target="_blank" class="btn btn-info btn-border btn-round btn-sm">
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
			</div>
		</div>
	</div>
</div>