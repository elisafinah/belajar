<?php
include '../koneksi.php';
include 'ceklogin.php';
?>
<!DOCTYPE html PUBLIC "">
<html>
    <head>
        <title>
            Form Kategori
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
            <form class="rounded_3 shadow_3"  enctype="multipart/form-data" action="simpan_kategori.php" method="POST" style="width:400px; margin:auto;">
                <fieldset class="rounded_3">
                    <h3>Masukkan Kategori</h3>
                    <a href="tampil.php"><input class="right" type="button" value="Batal" style="margin-right: 5px"/></a> 
<!--                    <a href="index.php" class="right" style="margin-right: 5px;"><h3>Batal</h3></a>-->
                    <div>
						<label for="id">ID</label> <input class="wide" name="id_kategori" type="text" required="required" placeholder="Masukkan ID"/>
                        <label for="kategori">Nama Kategori</label> <input class="wide" name="kategori" type="text" required="required" placeholder="Masukkan judul"/>
                        <input type="submit" value="Simpan" />
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>