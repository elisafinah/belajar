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
   <li class='active '><a href='../index.php'><span>Home</span></a></li>
   <!-- penambahan menu(sub menu)-->
   <!--<li class='has-sub '><a href='#'><span>Products</span></a>
      <ul>
         <li><a href='#'><span>Product 1</span></a></li>
         <li><a href='#'><span>Product 2</span></a></li>
      </ul>
   </li>-->
   <li><a href='../page_download.php'><span>Download</span></a></li>
   <li><a href='#'><span>About</span></a></li>
</ul>
	</div>
</div>

<div id="content">
<div id="katalog">
 <div id="rightcolumn">
			<h2 >Library Explorer</h2>
            <ul id="browser" class="filetree">
		<li><span class="folder">Kategori</span>
			<ul>
				<li class="closed"><span class="folder" >E-Book</a></span>
						<ul id="folder21">
						<li><span class="folder"><a href="kategori/pendidikan.php">Pendidikan</span></a></li>
						<li><span class="folder">Agama</span></li>
						<li><span class="folder">Umum</span></li>
						</ul>
						</li>
					<li class="closed"><span class="folder">Video</span>
					<ul id="folder21">
						<li><span class="folder"><a href="kategori/video.php">Pendidikan</span></a></li>
						<li><span class="folder">Agama</span></li>
						<li><span class="folder">Umum</span></li>
						</ul>
						</li>
					<li class="closed"><span class="folder">MP3</span>
					<ul id="folder21">
						<li><span class="folder">Pendidikan</span></li>
						<li><span class="folder">Agama</span></li>
						<li><span class="folder">Umum</span></li>
						</ul></li>
					<!--<ul id="folder21">
						<li><span class="file">File 2.1.1</span></li>
						<li><span class="file">File 2.1.2</span></li>
					</ul>-->
				</li>
			</ul>
		
		
	</ul>
        </div>
</div>

<div id="posts" style="margin-top: 0px;">
<?php
	include "../koneksi.php";
	$id = $_GET['id'];
	$eksekusi=mysql_query("SELECT * FROM video where id = '$id'");
	$data=mysql_fetch_array($eksekusi);
	echo "<p style='font-size:15px;text-align:center'>".$data['judul']."</p>";

?> 

<div id="container2" style="z-index:1; margin-left:150px; margin-top:20px;"></div>
<script type="text/javascript" src="../swfobject.js"></script>

<div>
<script type="text/javascript">
	var s1 = new SWFObject("http://localhost/finish/video/player.swf","ply","420","380","9","#maroon");
	s1.addParam("flashvars","file=<?php echo $data['video']; ?>");
	s1.addParam("allowfullscreen","true");
	s1.addParam("allowscriptaccess","always");
	s1.write("container2");
</script>
</div>

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
