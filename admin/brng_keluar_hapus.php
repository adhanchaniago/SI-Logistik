<?php
// untuk koneksi
include_once ('../db/koneksi.php');

$idtrns = $_GET['id_transaksi'];
$sql    = "DELETE FROM dta_trnsaksi_brng_keluar WHERE id_transaksi = '$idtrns'";
$query  = $mysqli->query($sql);

if ($query) {
  header('location:'.'dt_barangkeluar.php?&hapus');
}

 ?>
