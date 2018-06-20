<?php
session_start();
require '../config/koneksi.php';

  if (!isset($_GET['Id_pemasukan'])) {
    echo "Not Found";
    die();
  }

  $sql = "delete from pemasukan where Id_pemasukan=" . $_GET['Id_pemasukan'];
  $status = mysqli_query($link, $sql);

  if ($status) {
    $_SESSION['status_proses'] = "Pemasukan Berhasil dihapus.";
  }else{
    $_SESSION['status_proses'] = "Pemasukan Gagal dihapus.";
  }

  header('Location:pemasukan.php');


?>
