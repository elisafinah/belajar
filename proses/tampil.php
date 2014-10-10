<?php
session_start();
include '../koneksi.php';
include 'ceklogin.php';
?>
<!DOCTYPE html PUBLIC "">
<html>
    <head>
        <title>
            DigiLib 
        </title>
        <link rel="stylesheet" href="../proses/css/reset.css" type="text/css" />
        <link rel="stylesheet" href="../proses/css/normalize.css" type="text/css" />
        <link rel="stylesheet" href="../proses/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="../proses/css/style.css" type="text/css" />
		<link rel="stylesheet" href="../proses/css/gaya.css" type="text/css" />
        <script type="text/javascript" src="../script/jquery-latest.js"></script>   <!-- class jquery -->
        <script type="text/javascript" src="../script/jquery.tablesorter.js"></script>  <!-- javascript untuk tabel sortingnya -->
        <script>
            $(document).ready(function(){
                $(".view").tablesorter({sortList:[[0,0],[1,0]], widgets: ['zebra']});
            });
        </script>
    </head>
    <body>
            <div style="margin:auto auto 70px;">
            <div class="rounded_3 shadow_3 content" style="min-width: 1000px;">
                <h3 style="font-family:verdana;font-size:22">Selamat Datang di E-Library || Admin</h3>

                <?php
                $message = $_GET['msg'];

                if ($message == 'success') {
                    ?>
                    <div class="info">Success</div>
                <?php } else if ($message == 'failed') { ?>
                    <div class="error">Error</div>
                <?php } ?>

                <?php if ($_SESSION['role'] == 'admin') {
                    ?>
                    <div class="left">
						<a href="profile.php"> Edit Profile </a> |
                        <a href="form.php"> Tambahkan E-Book </a> |
						<a href="tambah_video.php"> Tambahkan Video </a> |
						<a href="tambah_kategori.php"> Tambahkan Kategori </a> |
						<a href="mod_menuutama/menuutama.php"> Tambahkan Menu </a> |
						<a href="mod_submenu/submenu.php"> Tambahkan Sub-Menu </a> |
                        <!--<a href="../users.php">Daftar Pengguna</a> |-->
						
                    </div>
                <?php } ?>
                <a href="../logout.php" class="right">Logout</a>
                <br/>
				<p><h3 align="center"> Daftar E-Book</h3></p>

                <table class="view">
                    <thead>
                        <tr>
                            <th width="20">No.</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Tebal Buku</th>
                            <th>ISBN</th>
                            <th>Kategori</th>
                            <th>Bahasa</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $metu = mysql_query("select * from upload order by judul");
                        $i = 1;
                        while ($data = mysql_fetch_array($metu)) {
                            ?>
                            <tr class="<?php
                        if ($i % 2 == 0) {
                            echo "odd";
                        } else {
                            echo "even";
                        }
                            ?>">
                                <td><?php echo $i; ?></td>
                                <td><?php echo $data['judul']; ?></td>
                                <td><?php echo $data['pengarang']; ?></td>
                                <td><?php echo $data['penerbit']; ?></td>
                                <td><?php echo $data['thnterbit']; ?></td>
                                <td><?php echo $data['tebal']; ?> halaman</td>
                                <td><?php echo $data['isbn']; ?></td>
                                <td><?php echo $data['kategori']; ?></td>
                                <td><?php echo $data['bahasa']; ?></td>
                                <td><?php
                            echo $data['opsi'];
                            echo "<a href='download.php?id=" . $data['id'] . "'>Download</a>";

                            if ($_SESSION['role'] == 'admin') {
                                ?>
                                        |<a class="delete" href="edit_ebook.php?id=<?php echo $data['id'] ?>">Edit</a>|
                                        <a class="delete" href="hapus_ebook.php?id=<?php echo $data['id'] ?>">Delete</a>
                                    <?php } ?>

                                </td>
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
				<br>
				<p><h3 align="center"> Daftar Video</h3></p>
				<br>
				<table class="view">
                    <thead>
                        <tr>
                            <th width="20">No.</th>
                            <th>Judul</th>
							<th>Aksi</th>
                       </tr>
                    </thead>
					<tbody>
                        <?php
                        $metu = mysql_query("select * from video order by judul");
                        $i = 1;
                        while ($data = mysql_fetch_array($metu)) {
                            ?>
                            <tr class="<?php
                        if ($i % 2 == 0) {
                            echo "odd";
                        } else {
                            echo "even";
                        }
                            ?>">
                                <td><?php echo $i; ?></td>
                                <td><?php echo $data['judul']; ?></td>
								<td><?php
                            echo $data['opsi'];
                            echo "<a href='download.php?id=" . $data['id'] . "'>Download</a>";

                            if ($_SESSION['role'] == 'admin') {
                                ?>
								<a class="delete" href="edit_video.php?id=<?php echo $data['id'] ?>">Edit</a> |
                                <a class="delete" href="hapus_video.php?id=<?php echo $data['id'] ?>">Delete</a>
                                    <?php } ?>

                                </td>
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
						</tbody>
						</table>
            </div>
        </div>
    </body>
</html>