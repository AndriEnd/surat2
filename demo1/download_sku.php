<?php
// Buat file download_sku.php untuk meng-handle proses download
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data file SKU dari database berdasarkan id
    $sql = "SELECT file_sku FROM data_request_sku WHERE id_request_sku = $id";
    $result = mysqli_query($konek, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $file_sku = $row['file_sku'];

        // Path file SKU
        $file_path = "../outputSurat/SKU/" . $file_sku;

        // Cek apakah file ada
        if (file_exists($file_path)) {
            // Set header untuk melakukan download
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file_path));
            readfile($file_path);
            exit;
        } else {
            // Jika file tidak ditemukan
            echo "<script language='javascript'>alert('File tidak ditemukan');</script>";
        }
    } else {
        // Jika query tidak berhasil
        echo "<script language='javascript'>alert('Query error');</script>";
    }
}
