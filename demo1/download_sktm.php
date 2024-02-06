<?php include '../konek.php'; ?> // Sesuaikan dengan nama file koneksi Anda
<?php


// Ambil nama file dari database
$result = mysqli_query($konek, $sql, "SELECT file_sktm FROM data_request_sktm WHERE id_request_sktm= $id_request_sktm");
$row = mysqli_fetch_assoc($result);
$file_sktm = $row['file_sktm'];

// Path ke direktori penyimpanan file
$file_path = "../outputSurat/SKTM/" . $file_sktm;
if (isset($_GET['file_sktm'])) {
    $id_request_sktm  = $_GET['id_request_sktm'];
    // $id_request_sktm = $data['id_request_sktm'];
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
?>