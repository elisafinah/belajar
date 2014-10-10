        <link rel="stylesheet" href="css/reset.css" type="text/css" />
        <link rel="stylesheet" href="css/normalize.css" type="text/css" />
        <link rel="stylesheet" href="css/gaya.css" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
      <body>
        
        <div style="margin: auto auto 70px;">
            <form class="rounded_3 shadow_3"  enctype="multipart/form-data" action="update_ebook.php" method="POST" style="width:400px; margin:auto;">
                <fieldset class="rounded_3">
                    <h3>EDIT EBOOK</h3>
					<a href="tampil.php"><input class="right" type="button" value="Batal" style="margin-right: 5px"/></a> 
					
<?php
include '../koneksi.php';

//ambil nilai variabel no yang diambil dari URL
$nomor = $_GET['id'];
//lakukan query SELECT
$data = mysql_query("SELECT * FROM upload WHERE id='$nomor'");
while($d = mysql_fetch_array($data)){
    echo "id : ".$d['id']."<p>";
    echo "<input type=\"hidden\" name=\"id\" class=\"wide\" value=\"".$d['id']."\">";
    echo "Judul :<br>";
    echo "<input type=\"text\" name=judul class=\"wide\" placeholder=\"Masukkan Judul\"value=\"".$d['judul']."\"><p>";
	echo "Pengarang :<br>";
    echo "<input type=\"text\" name=pengarang class=\"wide\" placeholder=\"Masukkan Pengarang\"value=\"".$d['pengarang']."\"><p>";
	echo "Penerbit :<br>";
    echo "<input type=\"text\" name=penerbit class=\"wide\" placeholder=\"Masukkan Penerbit\"value=\"".$d['penerbit']."\"><p>";
	echo "Tahun Terbit:<br>";
    echo "<input type=\"text\" name=thnterbit class=\"wide\" placeholder=\"Masukkan Tahun Terbit\"value=\"".$d['thnterbit']."\"><p>";
	echo "Tebal :<br>";
    echo "<input type=\"text\" name=tebal class=\"wide\" placeholder=\"Masukkan Tebal Buku\"value=\"".$d['tebal']."\"><p>";
	echo "ISBN :<br>";
    echo "<input type=\"text\" name=isbn class=\"wide\" placeholder=\"Masukkan ISBN\"value=\"".$d['isbn']."\"><p>";
	echo "Kategori :<br>";
    echo "<input type=\"text\" name=kategori class=\"wide\" placeholder=\"Masukkan Kategori\"value=\"".$d['kategori']."\"><p>";
	echo "Bahasa :<br>";
    echo "<input type=\"text\" name=bahasa class=\"wide\" placeholder=\"Masukkan Bahasa\"value=\"".$d['bahasa']."\"><p>";
	echo "Ikhtisar :<br>";
    echo "<textarea name=ikhtisar class=\"wide\" placeholder=\"Masukkan Ikhtisar buku\" rows=\"3\" cols=\"59\"style=\"max-width: 384px; min-width: 384px; height: 52px;\">".$d['ikhtisar']."</textarea><p>";
	echo "Cari File :<br>";
    echo "<input type=\"file\" name=userfile>";
	//echo $data;
}
?><input type="submit" value="Upload" />
</fieldset>
</form>
</div>

</body>