<?php
include '../koneksi.php';
include 'ceklogin.php';
?>
<!DOCTYPE html PUBLIC "">
<html>
    <head>
        <link rel="stylesheet" href="css/reset.css" type="text/css" />
        <link rel="stylesheet" href="css/normalize.css" type="text/css" />
        <link rel="stylesheet" href="css/gaya.css" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    <body>
        <div style="margin:auto; padding:50px 0 30px; text-align:center;">
            
        </div>
        <div style="margin: auto auto 70px;">
            <form class="rounded_3 shadow_3"  enctype="multipart/form-data" action="isiprofile.php" method="POST" style="width:400px; margin:auto;">
                <fieldset class="rounded_3">
                    <h3>PROFILE</h3>
                    <a href="tampil.php"><input class="right" type="button" value="Batal" style="margin-right: 5px"/></a> 
                    <div>
                        <label for="judul">Judul</label> <input class="wide" name="judul" type="text" required="required" placeholder="Masukkan judul"/>
                        <label for="isi">Isi</label> <textarea class="wide" name="isi" type="textarea" rows="3" cols="59"style="max-width: 384px; min-width: 384px; height: 52px;" placeholder="Silahkan masukkan tentang isi" required=""></textarea>
                        <input type="submit" value="Upload" />
                    </div>
					<?php
$data = mysql_query("SELECT * FROM profil ORDER BY kode DESC");
$w = 1;
while($d=mysql_fetch_array($data)){
    //buat warna selang-seling
   // if($w == 1){
     //   $warna = "#ffffff";
      //  $w = 0;
    //}else{
      //  $warna = "#efefef";
       // $w = 1;
    //}
    //echo "<div style=\"background-color:$warna;padding:5\">";
	echo"<h2><a href=detail.php?no=".$d['kode'].">".$d['judul']."</a></h2><br>";
    echo "<p>".$d['isi']."</p><br>";
	echo "<img align='left' src='".$d['gambar']."' width='150' />";
	 //echo "<font size=1>Waktu : ".$d['waktu']."</font><br>";
    //echo "</div><p>\n";
	
}
?>
                </fieldset>
            </form>
        </div>
		
    </body>
</html>