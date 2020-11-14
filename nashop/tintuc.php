<?php
include ("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Black Coffee 
Description: A two-column, fixed-width design for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20110707

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Black Coffee  by Free CSS Templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="header">
	<div id="menu">
		<ul>
			<li class="active"><a href="home.php">Trang chủ</a></li>
			<li><a href="sanpham.php">Sản Phẩm</a></li>
			<li><a href="khuyenmai.php">Khuyến Mại</a></li>
			<li><a href="lienhe.php">Liên Hệ</a></li>
            <li><a href="gioithieu.php">Giới Thiệu</a></li>
            <li><a href="tintuc.php">Tin Tức</a></li>
             <li><a href="dangki.php">Đăng Kí</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="logo">
		<h1><a href="#">Cac loai truyen va sach </a></h1>
		<h2>template design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a></h2>
	</div>
	<hr />
</div>
<!-- end #header -->
<!-- end #header-wrapper -->
<!-- end #logo -->
<div id="page">
	<div id="page-bgtop">
		<div id="page-bgbtm">
			<div id="content">
				<div class="post">
					<p>
                    	<table>
                        <tr>            
     
<?php 
$result = mysql_query("SELECT * FROM thoisu");
while($rowcn=mysql_fetch_array($result))
{?>
<table width="100%" border="0" cellspacing="2" cellpadding="2">
<tr>
<td width="161" height="170"><img src="<?php echo $rowcn['anh']?>" width="140" height="180"/> </td>
<td width="225" height="170"><a href="#" style="color:#CF0; font-size:16px"><?php echo $rowcn['tieude']?></a><br/><?php echo $rowcn ['tomtat']?><br/>
<a href="#" style="text-transform:inherit; text-align:right;">Chi tiết</a></td>

                       </tr>
                       </table>
                       <?php
}
?>
                       </p>
				</div>
</div>
			<!-- end #content -->
			<div id="sidebar">
				<ul>
					<li>
						<h2>Aliquam tempus</h2>
						<div id="bg1">
							<div id="bg2">
								<p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, volutpat.</p>
							</div>
						</div>
					</li>
					<li>
						<h2>Pellenque ornare </h2>
						<div id="bg1">
							<div id="bg2">
								<ul>
									<li><a href="#">Nec metus sed donec</a></li>
									<li><a href="#">Magna lacus bibendum mauris</a></li>
									<li><a href="#">Velit semper nisi molestie</a></li>
									<li><a href="#">Eget tempor eget nonummy</a></li>
									<li><a href="#">Nec metus sed donec</a></li>
									<li><a href="#">Velit semper nisi molestie</a></li>
									<li><a href="#">Eget tempor eget nonummy</a></li>
									<li><a href="#">Nec metus sed donec</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<h2>Turpis nulla</h2>
						<div id="bg1">
							<div id="bg2">
								<ul>
									<li><a href="#">Nec metus sed donec</a></li>
									<li><a href="#">Magna lacus bibendum mauris</a></li>
									<li><a href="#">Velit semper nisi molestie</a></li>
									<li><a href="#">Eget tempor eget nonummy</a></li>
									<li><a href="#">Nec metus sed donec</a></li>
									<li><a href="#">Nec metus sed donec</a></li>
									<li><a href="#">Magna lacus bibendum mauris</a></li>
									<li><a href="#">Velit semper nisi molestie</a></li>
									<li><a href="#">Eget tempor eget nonummy</a></li>
									<li><a href="#">Nec metus sed donec</a></li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<!-- end #sidebar -->
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #page -->
	</div>
</div>
<div id="footer-bgcontent">
	<div id="footer">
		<p>Copyright (c) 2011 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
	</div>
	<!-- end #footer -->
</div>
</body>
</html>
