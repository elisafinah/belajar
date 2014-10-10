<?php
include '../koneksi.php';
include 'ceklogin.php';
?>
<!DOCTYPE html PUBLIC "">
<html>
    <head>
        <title>
            Form Data Video
        </title>
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
            <form class="rounded_3 shadow_3"  enctype="multipart/form-data" action="aksi_coba.php" method="POST" style="width:400px; margin:auto;">
                <fieldset class="rounded_3">
                    <h3>Input Your Video</h3>
                    <a href="tampil.php"><input class="right" type="button" value="Batal" style="margin-right: 5px"/></a> 
<!--                    <a href="index.php" class="right" style="margin-right: 5px;"><h3>Batal</h3></a>-->
                    <div>
                        <label for="judul">Judul</label> <input class="wide" name="judul" type="text" required="required" placeholder="Masukkan judul"/>
                        <input type="hidden" name="MAX_FILE_SIZE" value="300000000" />
                        <label for="userfile">Upload File</label> <input name="video" type="file" required="required"/>
						
                        <input type="submit" value="Upload" />
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>