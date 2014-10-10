<?php
include '../koneksi.php';
include 'ceklogin.php';
?>
<!DOCTYPE html PUBLIC "">
<html>
    <head>
        <title>
            Form Data Buku
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
            <form class="rounded_3 shadow_3"  enctype="multipart/form-data" action="upload.php" method="POST" style="width:400px; margin:auto;">
                <fieldset class="rounded_3">
                    <h3>Masukkan Data Buku</h3>
                    <a href="tampil.php"><input class="right" type="button" value="Batal" style="margin-right: 5px"/></a> 
<!--                    <a href="index.php" class="right" style="margin-right: 5px;"><h3>Batal</h3></a>-->
                    <div>
                        <label for="judul">Judul</label> <input class="wide" name="judul" type="text" required="required" placeholder="Masukkan judul"/>
                        <label for="pengarang">Pengarang</label> <input class="wide" name="pengarang" type="text" required="required" placeholder="Masukkan nama pengarang"/>
                        <label for="penerbit">Penerbit</label> <input class="wide" name="penerbit" type="text" required="required" placeholder="Masukkan nama penerbit"/>
                        <label for="thnterbit">Tahun Terbit</label> <input class="wide" name="thnterbit" type="text" required="required" placeholder="Masukkan tahun terbit"/>
                        <label for="tebal">Tebal Buku</label> <input class="wide" name="tebal" type="text" required="required" placeholder="Masukkan tebal buku (jumlah halaman)"/>
                        <label for="isbn">ISBN</label> <input class="wide" name="isbn" type="text" required="required" placeholder="Masukkan ISBN"/>
                        <label for="kategori">Kategori</label><select name="kategori">Kategori
																		<?php
																		mysql_connect("localhost","root",""); // koneksi database
																		mysql_select_db("lib");
																		$sql = mysql_query("SELECT * FROM submenu where id_main = 3");
																		while($data = mysql_fetch_array($sql)){
																		echo "<option value=' ".$data['nama_sub']." '>".$data['nama_sub']."</option>";
																		}
																		?>
																		</select>
                        <label for="bahasa">Bahasa</label> <input class="wide" name="bahasa" type="text" required="required" placeholder="Pilih kategori bahasa"/>
                        <label for="ikhtisar">Ikhtisar</label> <textarea class="wide" name="ikhtisar" type="textarea" rows="3" cols="59"style="max-width: 384px; min-width: 384px; height: 52px;" placeholder="Silahkan masukkan tentang isi yang ada dalam buku" required=""></textarea>
                        <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                        <label for="userfile">Cari File</label> <input name="userfile" type="file" required="required"/>
                        <input type="submit" value="Upload" />
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>