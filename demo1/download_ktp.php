<?php

if (isset($_GET['file'])) {
    // Mendapatkan nama file dari parameter URL
    $file_name = $_GET['file'];

    // Mendefinisikan path ke file
    $file_path = "../outputSurat/KTP/" . $file_name; // Ganti dengan path yang sesuai

    // Memeriksa apakah file ada
    if (file_exists($file_path)) {
        // Mengatur header untuk memaksa download
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $file_name . '"');
        header('Content-Length: ' . filesize($file_path));

        // Membaca file dan mengirimkannya ke browser
        readfile($file_path);
        exit;
    } else {
        echo "File tidak ditemukan.";
    }
} else {
    echo "Permintaan tidak valid.";
}
