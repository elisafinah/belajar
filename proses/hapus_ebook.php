<?php

//mysql_connect('localhost', 'root', '12345');
//mysql_select_db('upload');
include '../koneksi.php';
error_reporting(0);

// membaca id file yang akan dihapus
$id = $_GET['id'];

// membaca nama file yang akan dihapus berdasarkan id
$query = "SELECT * FROM upload WHERE id = '$id'";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
$namaFile = $data['name'];

// query untuk menghapus informasi file berdasarkan id
$query = "DELETE FROM upload WHERE id = $id";
mysql_query($query);

// menghapus file dalam folder sesuai namanya
if (unlink("data/" . $namaFile)) {
	// jika berhasil menyimpan
	header('location: tampil.php?msg=hapus_success');
} else {
	// jika gagal menyimpan
	header('location: tampil.php?msg=hapus_failed');
}
?>