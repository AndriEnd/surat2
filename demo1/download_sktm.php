<?php include '../konek.php'; ?>

<?php
// Buat file download_sktm.php untuk meng-handle proses download
if (isset($_GET['url'])) {
  $id = $_GET['url']; // Ganti 'id' menjadi 'url'

  // Ambil data file SKTM dari database berdasarkan id
  $sql = "SELECT file_sktm FROM data_request_sktm WHERE id_request_sktm = $id";
  $result = mysqli_query($konek, $sql);

  if ($result) {
    $row = mysqli_fetch_assoc($result);
    $file_sktm = $row['file_sktm']; // Ganti 'sktm' menjadi 'file_sktm'

    // Path file SKTM
    $file_path = "../outputSurat/SKTM/" . $file_sktm;

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
