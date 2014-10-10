<?php
mysql_connect("localhost","root","");
mysql_select_db("lib");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>DigitalLibrary</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link href="../css/style2.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../css/jquery.treeview.css" />
	<script src="../scripts/jquery.js" type="text/javascript"></script>
	<script src="../scripts/jquery.cookie.js" type="text/javascript"></script>
	<script src="../scripts/jquery.treeview.js" type="text/javascript"></script>
	<script type="text/javascript" src="../demo.js"></script>
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
   <li class='active '><a href="../index.php">Home</a></li>
   <!-- penambahan menu(sub menu)-->
   <!--<li><a href="index2.php?page=profile">Profile</a></li>-->
   <li><a href="ebook.php"><span>E-Book</span></a></li>
   <li><a href="video.php"><span>Video</span></a></li>
    <li><a href='#'><span>About</span></a></li>
</ul>
	</div>
</div>

<div id="content">
<div id="katalog">
 <div id="rightcolumn">
			<h2> Kategori e-Book</h2>
			<?php include "../righmenu.php"; ?>
        </div>
</div>

<div id="posts" style="margin-top: 0px;">
<?php
	include "../koneksi.php";
	$id = $_GET['id'];
	$eksekusi=mysql_query("SELECT * FROM upload where id='$id'");
	while($data=mysql_fetch_array($eksekusi))
	{
	echo $data['opsi'];
	echo "<h2>Informasi E-book</h2>";
	
	echo"<p>Judul : ".$data['judul']."</p>";
	echo"<p>Pengarang : ".$data['pengarang']."</p>";
	echo"<p>Kategori : Sejarah </p><hr>";
	echo"<iframe style='margin-left:0px;' height='600' width='720' frameborder='0' src='../proses/data/".$data['name']."'></iframe></br>";
	}
	
	
?> 
</div>

</div>
		<div style="clear:both;"></div>

		</div>
		
<div id="footer">

	<p>SEKOLAH PASCA SARJANA || UIN MAULANA MALIK IBRAHIM MALANG</p>
</div>

</div>

</body>
</html>
