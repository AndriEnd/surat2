<?php
include '../konek.php';
include '../request_kk.php';
// Lakukan koneksi ke database
$konek = mysqli_connect($hostname, $username, $password, $database);

// Periksa koneksi
if ($konek->connect_error) {
    die("Koneksi gagal: " . $konek->connect_error);
}

// Ambil data dari formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $anggota_keluarga = $_POST["anggota_keluarga"];

    // Loop melalui data anggota keluarga
    foreach ($anggota_keluarga as $anggota) {
        $nik_anggota = $anggota["nik_anggota"];
        $nama_anggota = $anggota["nama_anggota"];
        $tempat_anggota = $anggota["tempat_anggota"];
        $tgl_anggota = $anggota["tgl_anggota"];
        $jekel_anggota = $anggota["jekel_anggota"];
        $agama_anggota = $anggota["agama_anggota"];
        $hdk_anggota = $anggota["hdk_anggota"];

        // Query untuk insert data ke database
        $query = "INSERT INTO data_request_kk (nik_anggota, nama_anggota, tempat_lahir_anggota, tgl_anggota, jekel_anggota, agama_anggota, hdk_anggota) VALUES ('$nik_anggota', '$nama_anggota', '$tempat_anggota', '$tgl_anggota', '$jekel_anggota', '$agama_anggota', '$hdk_anggota')";

        // Jalankan query
        if ($konek->query($query) === TRUE) {
            echo "Data berhasil disimpan.";
        } else {
            echo "Error: " . $query . "<br>" . $konek->error;
        }
    }

    // Tutup koneksi
    $konek->close();
}
