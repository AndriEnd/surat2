<?php
date_default_timezone_set('Asia/Jakarta');
$hostname = 'localhost:3307';
$username = 'root';
$password = '';
$database = 'backup_surat';

$konek = mysqli_connect($hostname, $username, $password, $database);
