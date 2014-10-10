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
   <li><a href="kategori/ebook.php"><span>E-Book</span></a></li>
   <li><a href="kategori/video.php"><span>Video</span></a></li>
    <li><a href='#'><span>About</span></a></li>
</ul>
	</div>
</div>

<div id="content">
<script type="text/javascript" src="scripts/jquery-1.3.2.js"></script>
	<script type="text/javascript">
$(document).ready(function(){
	$(".trigger").click(function(){
		$(".panel").toggle("fast");
		$(this).toggleClass("active");
		return false;
	});
});
</script>
<div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <!--<img src="images/toystory.jpg" data-thumb="images/toystory.jpg" alt="" />-->
                <a href="http:pasca.uin-malang.ac.id"><img src="images/pasca.jpg" data-thumb="images/pasca.jpg" alt="" title="Pasca Sarjana UIN MAULANA MALIK IBRAHIM MALANG" ></a>
				<a href="http:pasca.uin-malang.ac.id"><img src="images/pasca2.jpg" data-thumb="images/pasca2.jpg" alt="" title="Pasca Sarjana UIN MAULANA MALIK IBRAHIM MALANG" ></a>
                <img src="images/pasca3.jpg" data-thumb="images/pasca3.jpg" alt="" data-transition="slideInLeft" />
               <!--<img src="images/walle.jpg" data-thumb="images/walle.jpg" alt="" data-transition="slideInLeft" />
                <img src="images/nemo.jpg" data-thumb="images/nemo.jpg" alt="" title="#htmlcaption" />-->
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
        </div>

    </div>
	
    <script type="text/javascript" src="scripts/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
<div id="posts">
	<!--
	<h2>Welcome To Your Website <img src="images/printer.gif" alt="Print Article" width="16" height="16" /> <img src="images/email.gif" alt="Email Article" width="16" height="16" /></h2>
	<p><span class="dropcap">S</span>o here you have another design. This one is <a href="http://validator.w3.org/check?uri=referer">XHTML strict<img src="images/page_white_go.gif" alt="External Link" width="16" height="16" /></a> and it works from 800x600 and up. Feel free to take this one apart and exchange the header, bg or whatever other parts. If you do use this design, it would be great if you let me know. As usual, you don't have to acknowledge my work if you don't want to.</p>
	<div class="blockquote">&quot;This is a block quote, in case you need to quote things... Who doesn't love quoting?!... Well, I don't do it very much.&quot;</div>
	<p>I wanted to add that I got the menu from the <a href="http://www.oswd.org/design/preview/id/2820">neuphoric</a> template, and the icons are from the free set by <a href="http://www.famfamfam.com">famfamfam<img src="images/page_white_go.gif" alt="External Link" width="16" height="16" /></a> (and the are freakin sweet). This could be a personal website, or could even just be a blog. Use it however you like.</p>
	<div class="comments">8 Comments<img src="images/comment.gif" alt="Comments" /></div><br />
	-->
	<h2>Welcome To Digital Library<img src="images/printer.gif" alt="Print Article" width="16" height="16" /> <img src="images/email.gif" alt="Email Article" width="16" height="16" /></h2>
	<p><span class="dropcap">I</span>ni adalah Situs Digital Library dari Sekolah Pasca Sarjana Universitas Islam Negeri Maulana Malik Ibrahim Malang, disini anda dapat menikmati fasilitas download berbagai macam kategori buku secara gratis, kami juga akan selalu mengupdate buku-buku terbaru, agar memudahkan para pengunjung dalam mencari pengetahuannya.</p>
	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Ut <a href="#">suscipit turpis</a> vel augue. In ut risus. Aenean ultrices ultrices felis. Sed elementum tempus ante. Vestibulum mattis iaculis purus. Maecenas nec magna feugiat tellus placerat tempus. In porttitor enim eget eros. Pellentesque commodo, neque ut tincidunt tincidunt, lectus nulla rutrum tortor, nec condimentum sem pede eu ipsum.</p>
	<div class="comments">3 Comments<img src="images/comment.gif" alt="Comments" /></div>
	<br />
	
	<h2>Lorem Ipsum Dolor <img src="images/printer.gif" alt="Print Article" width="16" height="16" /> <img src="images/email.gif" alt="Email Article" width="16" height="16" /></h2>
	<p><span class="dropcap">A</span>enean ultrices ultrices felis. Lorem <a href="#">ipsum</a><a href="http://www.famfamfam.com"><img src="images/page_white_go.gif" alt="External Link" width="16" height="16" /></a> dolor sit amet, consectetuer adipiscing elit. Ut suscipit turpis vel augue. In ut risus. Sed elementum tempus ante. Vestibulum mattis iaculis purus. Maecenas nec magna feugiat tellus placerat tempus. In porttitor enim eget eros. Pellentesque commodo, neque ut tincidunt tincidunt, lectus nulla rutrum <a href="#">tortor</a>, nec condimentum sem pede eu ipsum.</p>
	<div class="comments">14 Comments<img src="images/comment.gif" alt="Comments" /></div>
	<br />

</div>

</div>
<div class="panel">
	<!--
		<div id="registration">
 <h2>Create an Account</h2>-->

 <form id="login" action="proses_login.php" method="post" class="form">
 <?php 
			$error = $_GET['error'];
			
			if ($error == 1) {
			?>
			<div class="error">Username dan Password belum diisi.</div>
			<?php } else if ($error == 2) {?>
			<div class="error">Username belum diisi.</div>
			<?php } else if ($error == 3) {?>
			<div class="error">Password belum diisi.</div>
			<?php } else if ($error == 4) {?>
			<div class="error">Username dan Password tidak terdaftar.</div>
			<?php } ?>
 	<fieldset>
                 
         
            <p>Username</p><input type='text' class="text" name='username' placeholder="Username" />
         
		  <p>
            <label for="password">Password</label> </p>
            <input type='password' name='password' class="text" placeholder="Password" />
        
        
        <!--
         <p>
            <label for="tel">Phone Number</label>
            <input id="tel" name="tel" type="tel" class="text" value="" />
         </p>
        
         <p>
            <label for="email">Email</label>
            <input id="email" name="email" type="email" class="text" value="" />
         </p>
        
        
         <p><input id="acceptTerms" name="acceptTerms" type="checkbox" />
            <label for="acceptTerms">
                I agree to the <a href="">Terms and Conditions</a> and <a href="">Privacy Policy</a>
            </label>
         </p>-->
       
         <p>
            <button id="registerNew" type="submit" name="submit">Register</button>
         </p>
 	</fieldset>

 </form>
</div>
		<div style="clear:both;"></div>

		</div>
		<a class="trigger" href="#">Log-in</a>
<div id="footer">

	<p>SEKOLAH PASCA SARJANA || UIN MAULANA MALIK IBRAHIM MALANG</p>
</div>

</div>

</body>
</html>