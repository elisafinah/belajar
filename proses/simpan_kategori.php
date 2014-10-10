<?php
//lakukan koneksi ke MySQL
mysql_connect("localhost","root","");

//Pilih database tempat tabel akan dibuat
mysql_select_db("lib");

$id = htmlspecialchars($_POST['id_kategori']);
$kategori = htmlspecialchars($_POST['kategori']);
//jika user tekan enter atau barisbaru, kasih tag <br>

$query = mysql_query("INSERT INTO kategori VALUES('$id','$kategori')");
if($query){
    header("location: tampil.php?msg=success");
}

else{
    header("location: tampil.php?msg=failed");
}
?>