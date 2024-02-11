<?php 
    if (isset($_GET['file_sku'])) {
    $file_sku    = $_GET['file_sku'];

    $back_dir    ="../outputSurat/SKU/$nama_file";
    $file = $back_dir.$_GET['file_sku'];
     
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename='.basename($file_sku));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: private');
            header('Pragma: private');
            header('Content-Length: ' . filesize($file_sku));
            ob_clean();
            flush();
            readfile($file_sku);
            
            exit;
        } 
        else {
            $_SESSION['pesan'] = "Oops! File - $file_sku - not found ...";
            header("location:tampil_download.php");
        }
    }
?>