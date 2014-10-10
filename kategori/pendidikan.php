<?php
mysql_connect("localhost","root","");
mysql_select_db("lib");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>DigitalLibrary</title>
<link rel="shortcut icon" href="../images/favicon.png" >
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link href="../css/style2.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="../themes/default/default.css" type="text/css" media="screen" />
    
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

<div id="posts">
<h3 style="margin-bottom: 10px;
font-family: verdana;
text-shadow: #fff 0 1px 0; text-align:center;"> DATA EBOOK </h3>
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
						$per_page = 10;
						//page
						if(!isset($_GET['page'])){

						$page = 1;
						}else{
						$page = $_GET['page'];
												}
							//start
						if($page<=1){
						$start = 0;
						}
						else{
						$start = $page * $per_page - $per_page;
						}
						
						include("../koneksi.php");
                        $sql = "select * from upload where kategori = ' Pendidikan' limit $start, $per_page";
						
                        $num_rows = mysql_num_rows(mysql_query($sql));
						//banyak pages
						$num_pages = ceil($num_rows / $per_page);
				
						$hasil=mysql_query($sql);
						$i = 1;
                        while ($data = mysql_fetch_array($hasil)) {
                            ?>
                            <tr class="<?php
                        if ($i % 2 == 0) {
                            echo "odd";
                        } else {
                            echo "even";
                        }
                            ?>">
                                <td><p><?php echo $i; ?></p></td>
                                <td><p><?php echo $data['judul']; ?></p></td>
                                <td><p><?php echo $data['pengarang']; ?></p></p></td>
                               
                                
                                <td><?php
                            
							echo "<p><a href='pendidikan_lihat.php?id=" . $data['id'] . "'>Lihat</a></p>";
							
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
				echo"<hr>";
				if($prev > 0 )
		echo"<a href='?page=$prev' style='
    margin-left: 260px;
'> << Previous </a>";
				//next
		//if($page < $num_rows/$per_page)
					echo"<a href='?page=$next' style='
    margin-left: 190px;
'> Next >> </a>";

				?>
				
            </div>
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