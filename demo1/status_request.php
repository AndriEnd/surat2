<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<div class="page-inner">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="card-title">STATUS LAYANAN SURAT KETERANGAN TIDAK MAMPU</h4>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="add1" class="display table table-striped table-hover">
							<thead>
								<tr>
									<th>Tanggal Request</th>
									<th>NIK</th>
									<th>Nama Lengkap</th>
									<th>Scan KTP</th>
									<th>Scan KK</th>
									<th>Keperluan</th>
									<th>Status</th>
									<th>Keterangan</th>
									<th>Download Surat</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM data_request_sktm natural join data_user WHERE nik=$_SESSION[nik]";
								$konek = mysqli_connect($hostname, $username, $password, $database,); // info file
								$query = mysqli_query($konek, $sql);
								while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
									$tgl = $data['tanggal_request'];
									$format = date('d F Y', strtotime($tgl));
									$nik = $data['nik'];
									$nama = $data['nama'];
									$status = $data['status'];
									$ktp = $data['scan_ktp'];
									$kk = $data['scan_kk'];
									$keperluan = $data['keperluan'];
									$keterangan = $data['keterangan'];
									$file_sktm = $data['file_sktm'];
									$id_request_sktm = $data['id_request_sktm'];
									$file_sktm = $data['file_sktm']; // file sktm

									if ($status == "1") {
										$status = "<b style='color:green'>Sudah ACC RT</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC RT</b>";
									} elseif ($status == "2") {
										$status = "<b style='color:blue'>Sudah ACC Lurah</b>";
									} elseif ($status == "3") {
										$status = "<b style='color:green'>SURAT SUDAH DICETAK</b>";
									}
								?>
									<tr>
										<td><?php echo $format; ?></td>
										<td><?php echo $nik; ?></td>
										<td><?php echo $nama; ?></td>
										<td><img src="../dataFoto/scan_ktp/<?php echo $ktp; ?>" width="50" height="50" alt=""></td>
										<td><img src="../dataFoto/scan_kk/<?php echo $kk; ?>" width="50" height="50" alt=""></td>
										<td><?php echo $keperluan; ?></td>
										<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
										<td><i><?php echo $keterangan; ?></i></td>
										<td>
											<a href="download_sktm.php?file=<?php echo $file_sktm; ?>"><?php echo $file_sktm; ?></a> <!-- Button link -->
										</td>
										</td>
										<td>
											<div class="form-button-action">
												<a href="?halaman=ubah_sktm&id_request_sktm=<?= $id_request_sktm; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data">
														<i class="fa fa-edit"></i>
													</button>
												</a>
												<a href="?halaman=tampil_status&id_request_sktm=<?= $id_request_sktm; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
														<i class="fa fa-times"></i>
													</button>
												</a>
											</div>
										</td>
									</tr>
								<?php
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="card-title">STATUS LAYANAN SURAT KETERANGAN USAHA</h4>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="add2" class="display table table-striped table-hover">
							<thead>
								<tr>
									<th>Tanggal Request</th>
									<th>NIK</th>
									<th>Nama Lengkap</th>
									<th>Scan KTP</th>
									<th>Scan KK</th>
									<th>Usaha</th>
									<th>Keperluan</th>
									<th>Status</th>
									<th>Keterangan</th>
									<th>Download Surat</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM data_request_sku natural join data_user WHERE nik=$_SESSION[nik]";
								$konek = mysqli_connect($hostname, $username, $password, $database,); // info file
								$query = mysqli_query($konek, $sql);
								while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
									$tgl = $data['tanggal_request'];
									$format = date('d F Y', strtotime($tgl));
									$nik = $data['nik'];
									$nama = $data['nama'];
									$status = $data['status'];
									$ktp = $data['scan_ktp'];
									$kk = $data['scan_kk'];
									$usaha  = $data['usaha'];
									$keperluan = $data['keperluan'];
									$keterangan = $data['keterangan'];
									$id_request_sku = $data['id_request_sku'];
									$file_sku = $data['file_sku']; // file_sku

									if ($status == "1") {
										$status = "<b style='color:green'>Sudah ACC RT</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC RT</b>";
									} elseif ($status == "2") {
										$status = "<b style='color:blue'>Sudah ACC Lurah</b>";
									} elseif ($status == "3") {
										$status = "<b style='color:green'>SURAT SUDAH DICETAK</b>";
									}
								?>
									<tr>
										<td><?php echo $format; ?></td>
										<td><?php echo $nik; ?></td>
										<td><?php echo $nama; ?></td>
										<td><img src="../dataFoto/scan_ktp/<?php echo $ktp; ?>" width="50" height="50" alt=""></td>
										<td><img src="../dataFoto/scan_kk/<?php echo $kk; ?>" width="50" height="50" alt=""></td>
										<td><?php echo $usaha; ?></td>
										<td><?php echo $keperluan; ?></td>
										<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
										<td><i><?php echo $keterangan; ?></i></td>
										<td>
											<a href="download_sku.php?file=<?php echo $file_sku; ?>"><?php echo $file_sku; ?></a> <!-- Button link -->
										</td>
										<td>
											<div class="form-button-action">
												<a href="?halaman=ubah_sku&id_request_sku=<?= $id_request_sku; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data">
														<i class="fa fa-edit"></i>
													</button>
												</a>
												<a href="?halaman=tampil_status&id_request_sku=<?= $id_request_sku; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus">
														<i class="fa fa-times"></i>
													</button>
												</a>
											</div>
										</td>

									</tr>
								<?php
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>


		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="card-title">STATUS LAYANAN SURAT KETERANGAN KARTU KELUARGA</h4>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="add3" class="display table table-striped table-hover">
							<thead>
								<tr>
									<th>Tanggal Request</th>
									<th>NIK</th>
									<th>Nama Lengkap</th>
									<th>Scan KTP</th>
									<th>Scan KK</th>
									<th>Keperluan</th>
									<th>Status</th>
									<th>Keterangan</th>
									<th>Download Surat</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM data_request_kk natural join data_user WHERE nik=$_SESSION[nik]";
								$konek = mysqli_connect($hostname, $username, $password, $database,); // info file
								$query = mysqli_query($konek, $sql);
								while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
									$tgl = $data['tanggal_request'];
									$format = date('d F Y', strtotime($tgl));
									$nik = $data['nik'];
									$nama = $data['nama'];
									$status = $data['status'];
									$ktp = $data['scan_ktp'];
									$kk = $data['scan_kk'];
									$keperluan = $data['keperluan'];
									$keterangan = $data['keterangan'];
									$file_kk = $data['file_kk']; // file_kk
									$id_request_kk = $data['id_request_kk'];


									if ($status == "1") {
										$status = "<b style='color:green'>Sudah ACC RT</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC RT</b>";
									} elseif ($status == "2") {
										$status = "<b style='color:blue'>Sudah ACC Lurah</b>";
									} elseif ($status == "3") {
										$status = "<b style='color:green'>SURAT SUDAH DICETAK</b>";
									}
								?>
									<tr>
										<td><?php echo $format; ?></td>
										<td><?php echo $nik; ?></td>
										<td><?php echo $nama; ?></td>
										<td><img src="../dataFoto/scan_ktp/<?php echo $ktp; ?>" width="50" height="50" alt=""></td>
										<td><img src="../dataFoto/scan_kk/<?php echo $kk; ?>" width="50" height="50" alt=""></td>
										<td><?php echo $keperluan; ?></td>
										<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
										<td><i><?php echo $keterangan; ?></i></td>
										<td>
											<a href="download_kk.php?file=<?php echo $file_kk; ?>"><?php echo $file_kk; ?></a> <!-- Button link -->
										</td>
										<td>
											<div class="form-button-action">
												<a href="?halaman=ubah_kk&id_request_kk=<?= $id_request_kk; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data">
														<i class="fa fa-edit"></i>
													</button>
												</a>
												<a href="?halaman=tampil_status&id_request_kk=<?= $id_request_kk; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus">
														<i class="fa fa-times"></i>
													</button>
												</a>
											</div>
										</td>
									</tr>
								<?php
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>


		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="card-title">STATUS LAYANAN SURAT KETERANGAN DOMISILI</h4>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="add4" class="display table table-striped table-hover">
							<thead>
								<tr>
									<th>Tanggal Request</th>
									<th>NIK</th>
									<th>Nama Lengkap</th>
									<th>Scan KTP</th>
									<th>Scan KK</th>
									<th>Status</th>
									<th>Keperluan</th>
									<th>Keterangan</th>
									<th>Download Surat</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM data_request_skd natural join data_user WHERE nik=$_SESSION[nik]";
								$konek = mysqli_connect($hostname, $username, $password, $database,); // info file
								$query = mysqli_query($konek, $sql);
								while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
									$tgl = $data['tanggal_request'];
									$format = date('d F Y', strtotime($tgl));
									$nik = $data['nik'];
									$nama = $data['nama'];
									$status = $data['status'];
									$ktp = $data['scan_ktp'];
									$kk = $data['scan_kk'];
									$keterangan = $data['keterangan'];
									$keperluan = $data['keperluan'];
									$id_request_skd = $data['id_request_skd'];
									$file_skd = $data['file_skd']; // file_skd

									if ($status == "1") {
										$status = "<b style='color:green'>Sudah ACC Rt</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC RT</b>";
									} elseif ($status == "2") {
										$status = "<b style='color:blue'>Sudah ACC Lurah</b>";
									} elseif ($status == "3") {
										$status = "<b style='color:green'>SURAT SUDAH DICETAK</b>";
									}
								?>
									<tr>
										<td><?php echo $format; ?></td>
										<td><?php echo $nik; ?></td>
										<td><?php echo $nama; ?></td>
										<td><img src="../dataFoto/scan_ktp/<?php echo $ktp; ?>" width="50" height="50" alt=""></td>
										<td><img src="../dataFoto/scan_kk/<?php echo $kk; ?>" width="50" height="50" alt=""></td>
										<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
										<td><?= $keperluan; ?></td>
										<td><i><?= $keterangan; ?></i></td>
										<td>
											<a href="download_skd.php?file=<?php echo $file_skd; ?>"><?php echo $file_skd; ?></a> <!-- Button link -->
										</td>
										<td>
											<div class="form-button-action">
												<a href="?halaman=ubah_skd&id_request_skd=<?= $id_request_skd; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data">
														<i class="fa fa-edit"></i>
													</button>
												</a>
												<a href="?halaman=tampil_status&id_request_skd=<?= $id_request_skd; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus">
														<i class="fa fa-times"></i>
													</button>
												</a>
											</div>
										</td>
									</tr>

								<?php
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="card-title">STATUS LAYANAN SURAT KETERANGAN AKTA</h4>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="add5" class="display table table-striped table-hover">
							<thead>
								<tr>
									<th>Tanggal Request</th>
									<th>NIK</th>
									<th>Nama Lengkap</th>
									<th>Scan KTP</th>
									<th>Scan KK</th>
									<th>Status</th>
									<th>Keperluan</th>
									<th>Keterangan</th>
									<th>Download Surat</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM data_request_akta natural join data_user WHERE nik=$_SESSION[nik]";
								$konek = mysqli_connect($hostname, $username, $password, $database,); // info file
								$query = mysqli_query($konek, $sql);
								while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
									$tgl = $data['tanggal_request'];
									$format = date('d F Y', strtotime($tgl));
									$nik = $data['nik'];
									$nama = $data['nama'];
									$status = $data['status'];
									$ktp = $data['scan_ktp'];
									$kk = $data['scan_kk'];
									$keterangan = $data['keterangan'];
									$keperluan = $data['keperluan'];
									$file_akta = $data['file_akta']; // file_akta

									$id_request_akta = $data['id_request_akta'];

									if ($status == "1") {
										$status = "<b style='color:green'>Sudah ACC RT</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC RT</b>";
									} elseif ($status == "2") {
										$status = "<b style='color:blue'>Sudah ACC Lurah</b>";
									} elseif ($status == "3") {
										$status = "<b style='color:green'>SURAT SUDAH DICETAK</b>";
									}
								?>
									<tr>
										<td><?php echo $format; ?></td>
										<td><?php echo $nik; ?></td>
										<td><?php echo $nama; ?></td>
										<td><img src="../dataFoto/scan_ktp/<?php echo $ktp; ?>" width="50" height="50" alt=""></td>
										<td><img src="../dataFoto/scan_kk/<?php echo $kk; ?>" width="50" height="50" alt=""></td>
										<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
										<td><?= $keperluan; ?></td>
										<td><i><?= $keterangan; ?></i></td>
										<td>
											<a href="download_akta.php?file=<?php echo $file_akta; ?>"><?php echo $file_akta; ?></a> <!-- Button link -->
										</td>
										<td>
											<div class="form-button-action">
												<a href="?halaman=ubah_akta&id_request_akta=<?= $id_request_akta; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data">
														<i class="fa fa-edit"></i>
													</button>
												</a>
												<a href="?halaman=tampil_status&id_request_akta=<?= $id_request_akta; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus">
														<i class="fa fa-times"></i>
													</button>
												</a>
											</div>
										</td>
									</tr>

								<?php
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>


		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="card-title">STATUS LAYANAN SURAT KETERANGAN KTP</h4>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="add6" class="display table table-striped table-hover">
							<thead>
								<tr>
									<th>Tanggal Request</th>
									<th>NIK</th>
									<th>Nama Lengkap</th>
									<th>Scan KTP</th>
									<th>Scan KK</th>
									<th>Status</th>
									<th>Keperluan</th>
									<th>Keterangan</th>
									<th>Download Surat</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM data_request_ktp natural join data_user WHERE nik=$_SESSION[nik]";
								$konek = mysqli_connect($hostname, $username, $password, $database,); // info file
								$query = mysqli_query($konek, $sql);
								while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
									$tgl = $data['tanggal_request'];
									$format = date('d F Y', strtotime($tgl));
									$nik = $data['nik'];
									$nama = $data['nama'];
									$status = $data['status'];
									$ktp = $data['scan_ktp'];
									$kk = $data['scan_kk'];
									$keterangan = $data['keterangan'];
									$keperluan = $data['keperluan'];
									$file_ktp = $data['file_ktp']; // file_ktp
									$id_request_ktp = $data['id_request_ktp'];

									if ($status == "1") {
										$status = "<b style='color:green'>Sudah ACC RT</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC RT</b>";
									} elseif ($status == "2") {
										$status = "<b style='color:blue'>Sudah ACC Lurah</b>";
									} elseif ($status == "3") {
										$status = "<b style='color:green'>SURAT SUDAH DICETAK</b>";
									}
								?>
									<tr>
										<td><?php echo $format; ?></td>
										<td><?php echo $nik; ?></td>
										<td><?php echo $nama; ?></td>
										<td><img src="../dataFoto/scan_ktp/<?php echo $ktp; ?>" width="50" height="50" alt=""></td>
										<td><img src="../dataFoto/scan_kk/<?php echo $kk; ?>" width="50" height="50" alt=""></td>
										<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
										<td><?= $keperluan; ?></td>
										<td><i><?= $keterangan; ?></i></td>
										<td>
											<a href="download_ktp.php?file=<?php echo $file_ktp; ?>"><?php echo $file_ktp; ?></a> <!-- Button link -->
										</td>
										<td>
											<div class="form-button-action">
												<a href="?halaman=ubah_ktp&id_request_ktp=<?= $id_request_ktp; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data">
														<i class="fa fa-edit"></i>
													</button>
												</a>
												<a href="?halaman=tampil_status&id_request_ktp=<?= $id_request_ktp; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus">
														<i class="fa fa-times"></i>
													</button>
												</a>
											</div>
										</td>
									</tr>

								<?php
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
if (isset($_GET['id_request_skd'])) {
	$hapus = mysqli_query($konek, "DELETE FROM data_request_skd WHERE id_request_skd=$id_request_skd");
	if ($hapus) {
		echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	}
} elseif (isset($_GET['id_request_sktm'])) {
	$hapus = mysqli_query($konek, "DELETE FROM data_request_sktm WHERE id_request_sktm=$id_request_sktm");
	if ($hapus) {
		echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	}
} elseif (isset($_GET['id_request_kk'])) {
	$hapus = mysqli_query($konek, "DELETE FROM data_request_kk WHERE id_request_kk=$id_request_kk");
	if ($hapus) {
		echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	}
} elseif (isset($_GET['id_request_sku'])) {
	$hapus = mysqli_query($konek, "DELETE FROM data_request_sku WHERE id_request_sku=$id_request_sku");
	if ($hapus) {
		echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	}
} elseif (isset($_GET['id_request_akta'])) {
	$hapus = mysqli_query($konek, "DELETE FROM data_request_akta WHERE id_request_akta=$id_request_akta");
	if ($hapus) {
		echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	}
} elseif (isset($_GET['id_request_ktp'])) {
	$hapus = mysqli_query($konek, "DELETE FROM data_request_ktp WHERE id_request_ktp=$id_request_ktp");
	if ($hapus) {
		echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	}
}
?>