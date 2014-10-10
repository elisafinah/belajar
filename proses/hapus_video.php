<?php

include '../koneksi.php';
error_reporting(0);

// membaca id file yang akan dihapus
$id = $_GET['id'];

// membaca nama file yang akan dihapus berdasarkan id
$query = "SELECT * FROM video WHERE id = '$id'";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
$namaFile = $data['video'];

// query untuk menghapus informasi file berdasarkan id
$query = "DELETE FROM video WHERE id = $id";
mysql_query($query);

// menghapus file dalam folder sesuai namanya
if (unlink("../video/" . $namaFile)) {
	// jika berhasil menyimpan
	header('location: tampil.php?msg=hapus_success');
} else {
	// jika gagal menyimpan
	header('location: tampil.php?msg=hapus_failed');
}
?>