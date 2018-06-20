<?php
session_start();
require '../config/koneksi.php';

  if (!isset($_GET['Id_pengeluaran'])) {
    echo "Not Found";
    die();
  }

  $sql = "delete from pengeluaran where Id_pengeluaran=" . $_GET['Id_pengeluaran'];
  $status = mysqli_query($link, $sql);

  if ($status) {
    $_SESSION['status_proses'] = "Pengeluaran Berhasil dihapus.";
  }else{
    $_SESSION['status_proses'] = "Pengeluaran Gagal dihapus.";
  }

  header('Location:pengeluaran.php');


?>
