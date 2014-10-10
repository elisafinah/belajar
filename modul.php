<?php
  $halaman = $_GET['page'];
  switch($halaman){
	  
	case 'pendidikan':
      include "kategori/pendidikan.php";
      break; 
	case 'video':
      include "lihat_video.php";
      break;	
	
    default: 
			echo"<p>Pilih <b>Kategori</b> Pada Bagian Right Sidebar</p>";
      break;
  }
?>
