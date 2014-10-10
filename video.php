<html>
	<head>
	<title>Video Streaming</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	</head>
<body>
<?php
	include "../koneksi.php";
	$id = $_GET['vid'];
	$eksekusi=mysql_query("SELECT * FROM video where id = '$id'");
	$data=mysql_fetch_array($eksekusi);
	
		
	echo "Judul : ".$data['video']."<br>";
	
?> 

<div id="container2" style="z-index:1;"></div>
<script type="text/javascript" src="swfobject.js"></script>

<div>
<script type="text/javascript">
	var s1 = new SWFObject("http://localhost/digiku/video/player.swf","ply","420","380","9","#maroon");
	s1.addParam("flashvars","file=<?php echo $data['video']; ?>");
	s1.addParam("allowfullscreen","true");
	s1.addParam("allowscriptaccess","always");
	s1.write("container2");
</script>
</div>
<a href="index2.php?page=video"><h2>Kembali</h2>

</body>
</html>
