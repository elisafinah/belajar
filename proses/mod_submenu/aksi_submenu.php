<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
mysql_connect("localhost","root","");
mysql_select_db("lib");

$module=$_GET[module];
$act=$_GET[act];

// Hapus sub menu
if ($module=='submenu' AND $act=='hapus'){
  mysql_query("DELETE FROM submenu WHERE id_sub='$_GET[id]'");
  header('location:../tampil.php');
}

// Input sub menu
elseif ($module=='submenu' AND $act=='input'){
    mysql_query("INSERT INTO submenu(nama_sub,
                                    id_main,
                                    link_sub) 
                            VALUES('$_POST[nama_sub]',
                                   '$_POST[menu_utama]',
                                   '$_POST[link_sub]')");
  header('location:../tampil.php');
}

// Update sub menu
elseif ($module=='submenu' AND $act=='update'){
    mysql_query("UPDATE submenu SET nama_sub  = '$_POST[nama_sub]',
                                   id_main = '$_POST[menu_utama]',
                                   link_sub  = '$_POST[link_sub]'  
                             WHERE id_sub   = '$_POST[id]'");
  header('location:../tampil.php');
}
}
?>
