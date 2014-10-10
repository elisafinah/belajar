<?php

include "../koneksi.php";
$judul = $_POST['judul'];
$path = $_POST['video'];
$target = "../video/";
$target = $target . basename($_FILES['video']['name']);
$namafile = $_FILES['video']['name'];
//echo " Path ".$path ."aaaaaa";
//echo " sada ".$namafile."asfd";
//echo " Target  " .$target;
$query = "INSERT INTO video(judul,video)VALUES ('$judul','$namafile')";
$result = mysql_query($query);

if(empty($judul)){
echo "<b>Please fill all field then try agian</b>";
}else{
if(move_uploaded_file($_FILES['video']['tmp_name'], $target)){
header('location: tampil.php?msg=success');
}
else{
echo "Sorry, there was a problem uploading your file.";
}
echo "<br/>";
}
?>

<?php
/*
  include "../koneksi.php";
  $judul = $_POST['judul'];
  //$path = $_POST['video'];
  
  if($_POST[submit]=='Simpan'){
    $fileName = $_FILES['video']['name'];
    $fileSize = $_FILES['video']['size'];
    $fileError = $_FILES['video']['error'];
    if($fileSize > 0 || $fileError == 0){
    $move = move_uploaded_file($_FILES['video']['tmp_name'],'../video/'.$fileName);
    if($move){
    mysql_query("INSERT INTO video(judul,video)VALUES ('$judul','$fileName')");
    header('location: tampil.php?msg=success');
    }else{
      echo "Gagal mengupload file";
    }
 }else{
    echo "Anda harus menambahkan gambar ";
 }
}else{
    echo "hahaha";
}
*/
?>

