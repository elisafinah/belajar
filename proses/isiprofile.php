<?php
//lakukan koneksi ke MySQL
mysql_connect("localhost","root","");

//Pilih database tempat tabel akan dibuat
mysql_select_db("uts");


$judul = htmlspecialchars($_POST['judul']);
$isi = htmlspecialchars($_POST['isi']);
//jika user tekan enter atau barisbaru, kasih tag <br>
$komentar = nl2br($isi);

$query = mysql_query("INSERT INTO profil VALUES(null,'$judul','$isi','$fileName')");
if($query){
    header("location: tampil.php?msg=success");
}

else{
    header("location: tampil.php?msg=failed");
}
?>