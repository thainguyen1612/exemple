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
				<div class="post"></div>
                    <div class="post">
                    <h2 class="title">Các sản phẩm khuyến mại trong ngày</h2>
                    
                    
                    <table width="400" border="1">
                      <tr>
                        <td width="40">Họ tên</td>
                        <td width="144"><form id="form1" method="post" action="">
                          <p>
                            <label for="tenkh2"></label>
                            <input type="text" name="tenkh" id="tenkh2" />
                          </p>
                        </form></td>
                      </tr>
                      <tr>
                        <td>Địa chỉ</td>
                        <td><form id="form2" method="post" action="">
                          <p>
                            <label for="diachi"></label>
                            <input type="text" name="diachi" id="diachi" />
                          </p>
                        </form></td>
                      </tr>
                      <tr>
                        <td>Điện thoại</td>
                        <td><form id="form3" method="post" action="">
                          <p>
                            <label for="dienthoai"></label>
                            <input type="text" name="dienthoai" id="dienthoai" />
                          </p>
                        </form></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><form id="form4" method="post" action="">
                          <p>
                            <label for="email"></label>
                            <input type="text" name="email" id="email" />
                          </p>
                        </form></td>
                      </tr>
                      <tr>
                        <td>Ý kiến</td>
                        <td><form id="form5" method="post" action="">
                          <p>
                            <label for="ykien"></label>
                            <textarea name="ykien" id="ykien" cols="45" rows="5"></textarea>
                          </p>
                        </form></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><form id="form6" method="post" action="">
                          <p>
                            <input type="submit" name="gui" id="gui" value="Gửi đi" />
                            <input type="submit" name="huy" id="huy" value="Hủy bỏ" />
                          </p>
                        </form></td>
                      </tr>
                    </table>
                    <p>
                    
				  <table>
                    <tr>            
     
<?php 
$query="SELECT * FROM sanpham where hienthi='1' order by id_sp desc";
$kq=mysql_query ($query) or die(error());
$i=1;
echo"<table width='500' border='0' cellpadding='0px' cellspacing='0px'>";
echo"<tr>";
while($r=mysql_fetch_array($kq))
{
	echo"<td width='120' align='center' bgcolor='#666666'><img src=".$r['hinhanh']." width ='120' height='150'><br><ahref='?go=detail_sp&id=".$r['id_sp']."'id='text_lq'>".$r['tensp']."</a><br><b>Gia:</b>".$r['gia'].".000 VND</td>";
	
	if($i%3==0)
	{
		echo "</tr><tr>";
	}
	$i=$i+1;
}

                       ?>
                    </tr>
                  </table>
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
