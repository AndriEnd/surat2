<?php
date_default_timezone_set('Asia/Jakarta');
$hostname = 'localhost:3307';
$username = 'root';
$password = '';
$database = 'backup_surat';

$konek = mysqli_connect($hostname, $username, $password, $database);

// if ($konek) {
// die("koneksi gagal : "(mysqli_connect_error()));
//} else {
//return ($konek);
//} -->
