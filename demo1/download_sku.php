<?php
include("konek.php"); // Sesuaikan dengan nama file koneksi Anda

if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // Ambil nama file dari database
    $result = mysqli_query($konek, "SELECT file_sku FROM data_request_sktm WHERE id_request_sktm=$id");
    $row = mysqli_fetch_assoc($result);
    $file_sku = $row['file_sku'];

    // Path ke direktori penyimpanan file
    $file_path = "../outputSurat/SKTM/" . $file_sku;

    // Periksa apakah file ada
    if (file_exists($file_path)) {
        // Set header untuk mengaktifkan pengunduhan
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
        header('Content-Length: ' . filesize($file_path));

        // Baca file dan kirimkan ke output
        readfile($file_path);
        exit;
    } else {
        echo "File tidak ditemukan.";
    }
} else {
    echo "Parameter file_id tidak valid.";
}
