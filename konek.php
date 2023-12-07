<?php
date_default_timezone_set('Asia/Jakarta');
$hostname = 'localhost:3307';
$username = 'root';
$password = '';
$database = 'surat2';

$konek = mysqli_connect($hostname, $username, $password, $database);
