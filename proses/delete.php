<?php
//lakukan koneksi ke MySQL
mysql_connect("localhost","root","");

//Pilih database tempat tabel akan dibuat
mysql_select_db("uts");

//ambil nilai variabel no yang diambil dari URL
$nomor = $_GET['no'];

//lakukan query DELETE
$del = mysql_query("DELETE FROM bukutamu WHERE kode=$nomor");
if($del){
	echo "<script>alert('Data Berhasil Di Delete'); window.location = 'admin.php?page=bukutamu'</script>";
}else{
    echo "Gagal";
}
?>