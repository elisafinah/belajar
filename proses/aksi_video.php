<?php
include "../koneksi.php";
$judul = $_POST['judul'];
$path = $_POST['video'];
$target = "C:/xampp/htdocs/finish/video/";
$target = $target . basename($_FILES['video']['name']);

$path = str_replace("C:/xampp/htdocs","http://localhost",$target);
$query = "INSERT INTO video(judul,video)VALUES ('$judul','$path')";
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

