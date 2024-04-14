<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-right">
                        <h4 class="card-title">Data Penduduk</h4>
                        <a href="?halaman=tambah_penduduk" class="btn btn-primary btn-round ml-auto">
                            <i class="fa fa-plus"></i>
                            Add Penduduk
                        </a>
                    </div>
                    <div class="card-tools">
                        <a href="cetak_penduduk.php?<?php echo $data_penduduk; ?>" target="_blank" class="btn btn-info btn-border btn-round btn-sm">
                            <span class="btn-label">
                                <i class="fa fa-print"></i>
                            </span>
                            Print
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Modal -->
                    <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header no-bd">
                                    <h5 class="modal-title">
                                        <span class="fw-mediumbold">
                                            New
                                        </span>
                                        <span class="fw-light">
                                            Row
                                        </span>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="small">Create a new row using this form, make sure you fill them all</p>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group form-group-default">
                                                <label>Name</label>
                                                <input id="addName" type="text" class="form-control" placeholder="fill name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-0">
                                            <div class="form-group form-group-default">
                                                <label>Position</label>
                                                <input id="addPosition" type="text" class="form-control" placeholder="fill position">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Office</label>
                                                <input id="addOffice" type="text" class="form-control" placeholder="fill office">
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                <div class="modal-footer no-bd">
                                    <button type="button" id="addRowButton" class="btn btn-primary">Add</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="">
                        <div class="table-responsive">
                            <table id="add1" class="display table table-striped table-hover">
                                <!-- TAMPIL OPTION -->
                                
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>No.KK</th>
                                        <th>NIK / Nama</th>
                                        <th>Alamat</th>
                                        <th>Golongan Darah</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tempat & Tanggal Lahir</th>
                                        <th>Email</th>
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
                                        $Email = $data['email'];
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
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $no_kk; ?></td>
                                            <td><?php echo $nik . ' - ' . $nama; ?></td>
                                            <td><?php echo $alamat; ?></td>
                                            <td><?php echo $gol_darah; ?></td>
                                            <td><?php echo $jekel; ?></td>
                                            <td><?php echo $tempat_lahir . ", " . $tanggal_lahir; ?></td>
                                            <td> <?php echo $Email; ?></td>
                                            <td><?php echo $telepon; ?></td>
                                            <td><?php echo $agama; ?></td>
                                            <td><?php echo $status_warga; ?></td>
                                            <td><?php echo $status_perkawinan; ?></td>
                                            <td><?php echo $status_hdk; ?></td>
                                            <td><?php echo $pend_terakhir; ?></td>
                                            <td><?php echo $pekerjaan; ?></td>
                                            <td><?php echo $nama_ayah; ?></td>
                                            <td><?php echo $nama_ibu; ?></td>

                                            <td>
                                                <div class="form-button-action">
                                                    <a href="?halaman=ubah_penduduk&nik=<?php echo $nik; ?>" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit penduduk">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="?halaman=tampil_penduduk&nik=<?php echo $nik; ?>" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus penduduk">
                                                        <i class="fa fa-times"></i>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
if (isset($_GET['nik'])) {
    $sql_hapus = "DELETE FROM data_penduduk WHERE nik='" . $_GET['nik'] . "'";
    $query_hapus = mysqli_query($konek, $sql_hapus);
    if ($query_hapus) {
        echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_penduduk">';
    } else {
        echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_penduduk">';
    }
}
?>