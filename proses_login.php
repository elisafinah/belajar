<?php
 
// memulai session
session_start();
 
mysql_connect('localhost', 'root', '');
mysql_select_db('uts');
 
$username = $_POST['username'];
$password = $_POST['password'];
 
// query untuk mendapatkan record dari username
$query = mysql_query("select * from user where username='$username' and password='$password'");
$data = mysql_fetch_array($query);
 
if (mysql_num_rows($query) == 1) {
	// kalau username dan password sudah terdaftar di database
	// buat session dengan nama username dengan isi nama user yang login
	$_SESSION['username'] = $username;
	$_SESSION['role'] = $data['role'];
	header('location:proses/tampil.php');
} else {
	// kalau username ataupun password tidak terdaftar di database
	header('location:index.php?error=4');
}

?>
