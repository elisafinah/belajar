<?php
error_reporting(0);
// setting nama folder tempat upload
$uploaddir = 'data/';

// membaca nama file yang diupload
$fileName = $_FILES['userfile']['name'];     

// nama file temporary yang akan disimpan di server
$tmpName  = $_FILES['userfile']['tmp_name']; 

// membaca ukuran file yang diupload
$fileSize = $_FILES['userfile']['size'];

// membaca jenis file yang diupload
$fileType = $_FILES['userfile']['type'];

$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$thnterbit = $_POST['thnterbit'];
$tebal = $_POST['tebal'];
$isbn = $_POST['isbn'];
$kategori = $_POST['kategori'];
$bahasa = $_POST['bahasa'];
$ikhtisar = $_POST['ikhtisar'];


include '../koneksi.php';

// menyimpan properti atau informasi file ke tabel upload dalam db upload
// dengan terlebih dahulu mengecek ada tidaknya nama file dalam tabel

$query = "SELECT count(*) as jum FROM upload WHERE name = '$fileName'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);

if ($data['jum'] > 0)
{
   $query = "UPDATE upload SET size = '$fileSize' WHERE name = '$fileName'";
}
else $query = "INSERT INTO upload (name, temp, size, type, judul, pengarang, penerbit, thnterbit, tebal, isbn, kategori, bahasa, ikhtisar) VALUES ('$fileName', '$tmpName', '$fileSize', '$fileType','$judul','$pengarang','$penerbit','$thnterbit','$tebal','$isbn','$kategori','$bahasa','$ikhtisar')";

mysql_query($query);

// menggabungkan nama folder dan nama file
$uploadfile = $uploaddir . $fileName;

// proses upload file ke folder 'data'
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    header('location: tampil.php?msg=success');
} else {
    header('location: tampil.php?msg=failed');
}


?>