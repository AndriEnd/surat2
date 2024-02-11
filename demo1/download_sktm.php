<?php
// Tentukan folder file yang boleh di download
$folder = "files/";
// Lalu cek menggunakan fungsi file_exist
if (!file_exists($folder.$_GET['file_sku'])) {
  echo "<h1>Access forbidden!</h1>
      <p> Anda tidak diperbolehkan mendownload file ini.</p>";
  exit;
}

// Apabila mendownload file di folder files
else {
  header("Content-Type: octet/stream");
  header("Content-Disposition: attachment; 
  filename=\"".$_GET['file_sku']."\"");
  $fp = fopen($folder.$_GET['file'], "r");
  $data = fread($fp, filesize($folder.$_GET['file_sku']));
  fclose($fp);
  print $data;
}
?>