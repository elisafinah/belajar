<link href="css/style2.css" rel="stylesheet" type="text/css" />
<?php               
echo "<ul>";
   $main=mysql_query("SELECT * FROM submenu WHERE id_main=3");

   while($r=mysql_fetch_array($main)){
     echo "<li><a href='$r[link_sub]'><p>$r[nama_sub]</a></p>
                       </li>";
  }        
echo "</ul>";
?>
