<?php
mysql_connect("localhost","root","");
mysql_select_db("lib");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>DigitalLibrary</title>
<link rel="shortcut icon" href="images/favicon.png" >
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link href="css/style1.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	</head>

<body>

<div id="container">

<div id="header">
<!--
	<form id="form1" method="post" action="">
	  <img src="images/search.png" alt="Search" />
	  <input type="text" name="textfield" value=" Search For..." />
	  <input class=" button" type="submit" name="Submit" value="GO" />
	</form>
	
	<h1>Stylized Beauty</h1>-->
</div>

<div id="menu_container">
	<div id="menu">
	<ul>
   <li class='active '><a href="index.php">Home</a></li>
   <!-- penambahan menu(sub menu)-->
   <!--<li><a href="index2.php?page=profile">Profile</a></li>-->
   <li><a href="ebook.php"><span>E-Book</span></a></li>
   <li><a href='#'><span>Video</span></a></li>
    <li><a href='#'><span>About</span></a></li>
</ul>
	</div>
</div>

<div id="content">
<div id="katalog">
 <div id="rightcolumn">
		<h2> Kategori e-Book</h2>
			<?php include "righmenu.php"; ?>
        </div>
</div>
<div id="posts" style="margin-top:0px;">
	<p>Pilih E-Book Berdasarkan <b>Kategori</b> yang ada disebelah kanan</p>
	
	<h3>Pencarian Ebook</h3>
	<form name="pencarian" method="POST">
	<table>
  <tr>
    <td><label for="judul">Judul</label> <input class="wide" name="judul" type="text" required="required" placeholder="Masukkan judul"/></td>
    <td><label for="judul">Pengarang</label> <input class="wide" name="pengarang" type="text" required="required" placeholder="Masukkan Pengarang"/></td>
    <td><label for="kategori">Kategori</label><select name="kategori">Kategori
																		<?php
																		mysql_connect("localhost","root",""); // koneksi database
																		mysql_select_db("lib");
																		$sql = mysql_query("SELECT * FROM kategori");
																		while($data = mysql_fetch_array($sql)){
																		echo "<option value=' ".$data['kategori']." '>".$data['kategori']."</option>";
																		}
																		?>
																		</select> <input type="submit" name="submit" value="Cari" /> </td>
  </tr>
</table>
	</form>
	<div style="margin:auto auto 70px;">
            <div class="rounded_3 shadow_3 content">
                    <table id="zebra-table" align="center">
                    <thead>
                        <tr>
                            <th width="20">No.</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
	<?php
// konfigurasi
$db_host = "localhost";  // nama host
$db_user = "root";  // username mysql
$db_pass = ""; //password isi sesuai seting server Anda.
$db_name = "lib";  // karena nama database yang kita buat adalah pencarian

// koneksi ke database
$link = mysql_pconnect ($db_host, $db_user, $db_pass) or die ("Ga bisa connect");
mysql_select_db ($db_name) or die ("Ga bisa select database");

// menampilkan data

if ((isset($_POST['submit'])) AND ($_POST['judul'] ) OR ($_POST['pengarang'] ) OR ($_POST['kategori'] )) {
  $judul = $_POST['judul'];
  $pengarang = $_POST['pengarang'];
  $kategori = $_POST['kategori'];
  $sql = mysql_query("SELECT * FROM upload WHERE judul LIKE '%$judul%' OR pengarang LIKE '%$pengarang%' 
  OR kategori LIKE '%$kategori%' LIMIT 0, 50")or die(mysql_error());
  //menampilkan jumlah hasil pencarian
  $jumlah = mysql_num_rows($sql); 
  if ($jumlah > 0) {
    echo '<p>Ada '.$jumlah.' data yang sesuai.</p>';
   $i = 1;
        while ($res=mysql_fetch_array($sql)) {
		?>
		<tr class="<?php
                        if ($i % 2 == 0) {
                            echo "odd";
                        } else {
                            echo "even";
                        }
                            ?>">
                                <td><p><?php echo $i; ?></p></td>
                                <td><p><?php echo $res['judul']; ?></p></td>
                                <td><p><?php echo $res['pengarang']; ?></p></p></td>
                               
                                
                                <td><?php
                            
							echo "<p><a href='kategori/pendidikan_lihat.php?id=" . $res['id'] . "'>Lihat</a></p>";
							
							?>
				
                            </td>
                            </tr>
				<?php
                            $i++;
							$prev = $page - 1;
							$next = $page + 1;
                        }
                        
                    echo"</tbody>";
                echo"</table>";
          
      }
	  else {
   // menampilkan pesan zero data
    echo '<p>Maaf, hasil pencarian tidak ditemukan.</p>';
  }
  }
  else {
   // menampilkan pesan zero data
    echo '<p>Masukkan kata kuncinya.</p>';
  }
  

?>
	
</div>

</div>

		<div style="clear:both;"></div>

		</div>
<!--		
<div id="footer">

	<p>SEKOLAH PASCA SARJANA || UIN MAULANA MALIK IBRAHIM MALANG</p>
</div>-->

</div>

</body>
</html>

