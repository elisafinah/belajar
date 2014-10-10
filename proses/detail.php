        <link rel="stylesheet" href="css/reset.css" type="text/css" />
        <link rel="stylesheet" href="css/normalize.css" type="text/css" />
        <link rel="stylesheet" href="css/gaya.css" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
      <body>
        
        <div style="margin: auto auto 70px;">
            <form class="rounded_3 shadow_3"  enctype="multipart/form-data" action="update_profile.php" method="POST" style="width:400px; margin:auto;">
                <fieldset class="rounded_3">
                    <h3>EDIT PROFILE</h3>
<?php
include '../koneksi.php';

//ambil nilai variabel no yang diambil dari URL
$nomor = $_GET['no'];
//lakukan query SELECT
$data = mysql_query("SELECT * FROM profil WHERE kode='$nomor'");
while($d = mysql_fetch_array($data)){
    echo "Kode : ".$d['kode']."<p>";
    echo "<input type=\"hidden\" name=\"kode\" class=\"wide\" value=\"".$d['kode']."\">";
    echo "Judul :<br>";
    echo "<input type=\"text\" name=judul class=\"wide\" placeholder=\"Masukkan Judul\"value=\"".$d['judul']."\"><p>";
	 echo "Isi :<br>";
    echo "<textarea name=isi class=\"wide\" placeholder=\"Masukkan Isi\" rows=\"3\" cols=\"59\"style=\"max-width: 384px; min-width: 384px; height: 52px;\">".$d['isi']."</textarea><p>";
	
	echo $data;
}
?>
<input type="submit" value="update">
</fieldset>
</form>
</div>

</body>