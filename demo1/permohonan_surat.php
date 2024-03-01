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
						<h4 class="card-title">JENIS LAYANAN SURAT KETERANGAN TIDAK MAMPU</h4>
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
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM data_request_sktm natural join data_user  where status=2";
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
									$id_request_sktm = $data['id_request_sktm'];


									if ($status == "2") {
										$status = "<b style='color:blue'>SUDAH ACC LURAH</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC</b>";
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
										<td>
											<div class="form-button-action">
												<a href="?halaman=view_cetak_sktm&id_request_sktm=<?= $id_request_sktm; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Cetak">
														<i class="fa fa-edit"></i>
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
						<h4 class="card-title">JENIS LAYANAN SURAT KETERANGAN USAHA</h4>
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
									<th>Keperluan</th>
									<th>Status</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM data_request_sku natural join data_user WHERE status=2";
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

									if ($status == "2") {
										$status = "<b style='color:blue'>SUDAH ACC LURAH</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC</b>";
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
										<td>
											<div class="form-button-action">
												<a href="?halaman=view_cetak_sku&id_request_sku=<?= $id_request_sku; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Cetak">
														<i class="fa fa-edit"></i>
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
						<h4 class="card-title">JENIS LAYANAN SURAT KETERANGAN KARTU KELUARGA</h4>
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
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM data_request_kk natural join data_user where status=2";
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
									$id_request_kk = $data['id_request_kk'];


									if ($status == "2") {
										$status = "<b style='color:blue'>SUDAH ACC LURAH</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC</b>";
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
										<td>
											<div class="form-button-action">
												<a href="?halaman=view_cetak_kk&id_request_kk=<?= $id_request_kk; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Cetak">
														<i class="fa fa-edit"></i>
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
						<h4 class="card-title">JENIS LAYANAN SURAT KETERANGAN DOMISILI</h4>
					</div>
				</div>
				<!--<form method="POST"> -->
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
									<th>Keperluan</th>
									<th>Status</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM data_request_skd natural join data_user  where status=2";
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
									$id_request_skd = $data['id_request_skd'];


									if ($status == "2") {
										$status = "<b style='color:blue'>SUDAH ACC LURAH</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC</b>";
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
										<td>
											<div class="form-button-action">
												<a href="?halaman=view_cetak_skd&id_request_skd=<?= $id_request_skd; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Cetak">
														<i class="fa fa-edit"></i>
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
				<!-- </form> -->
			</div>
		</div>


		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="card-title">JENIS LAYANAN SURAT KETERANGAN LAHIR</h4>
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
									<th>Keperluan</th>
									<th>Status</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM data_request_akta natural join data_user  where status=2";
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
									$id_request_akta = $data['id_request_akta'];


									if ($status == "2") {
										$status = "<b style='color:blue'>SUDAH ACC LURAH</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC</b>";
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
										<td>
											<div class="form-button-action">
												<a href="?halaman=view_cetak_akta&id_request_akta=<?= $id_request_akta; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Cetak">
														<i class="fa fa-edit"></i>
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
						<h4 class="card-title">JENIS LAYANAN SURAT KETERANGAN KTP</h4>
					</div>
				</div>
				<!-- <form method="POST"> -->
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
									<th>Keperluan</th>
									<th>Status</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM data_request_ktp natural join data_user  where status=2";
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
									$id_request_ktp = $data['id_request_ktp'];


									if ($status == "2") {
										$status = "<b style='color:blue'>SUDAH ACC LURAH</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC</b>";
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
										<td>
											<div class="form-button-action">
												<a href="?halaman=view_cetak_ktp&id_request_ktp=<?= $id_request_ktp; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Cetak">
														<i class="fa fa-edit"></i>
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
				<!-- </form> -->
			</div>
		</div>

	</div>
</div>