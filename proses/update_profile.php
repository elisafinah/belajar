<?php
//lakukan koneksi ke MySQL
mysql_connect("localhost","root","");

//Pilih database tempat tabel akan dibuat
mysql_select_db("uts");

//ambil nilai variabel no yang diambil dari form POST
$id = htmlspecialchars($_POST['kode']);
$judul = htmlspecialchars($_POST['judul']);
$isi = htmlspecialchars($_POST['isi']);

//lakukan query update

$update = mysql_query("UPDATE profil
    SET judul='$judul',
    isi='$isi'
    WHERE kode=$id");
    
if($update){
    echo "<script>alert('Data Berhasil Di Update'); window.location = 'tampil.php'</script>";
}else{
    echo "<script>alert('Data Gagal Di Update'); window.location = 'tampil.php'</script>";
}
?>