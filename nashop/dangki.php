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
                <p></div>
        <div class="post">
                <h2 class="title">Các sản phẩm khuyến mại trong ngày</h2>
<?php 
$query="SELECT * FROM sanpham where hienthi='1' order by id_sp desc";
$kq=mysql_query ($query) or die(error());
$i=1;
echo"<ul class='list-item' style='margin-top: 20px'>";
while($r=mysql_fetch_array($kq))
{
	echo"<li width='150' align='center' bgcolor='#CC0066'><img src=".$r['hinhanh']." width ='120' height='150'><br><ahref='?go=detail_sp&id=".$r['id_sp']."'id='text_lq'>".$r['tensp']."</a><br><b>Gia:</b>".$r['gia'].".000 VND</li>";
	
	$i=$i+1;
}
                       ?>	
</ul>
                     </p>
   	           <form action="xldangki.php" method="get" id="dk">
               <table width="400" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>
      <input class="form-control" type="text" name="u"  /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <input class="form-control" type="password" name="p"  /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <input class="form-control" type="password" name="rp"  /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <input class="form-control" type="text" name="diachi" id="diachi" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <input class="form-control" type="text" name="email" id="email" /></td>
  </tr>
  <tr style="margin-top: 10px;">
    <td>&nbsp;</td>
    <td><input class="btn btn-success" type="submit" name="dk" id="dk" value="Submit" />
      <input class="btn btn-danger" type="reset" name="ré" id="ré" value="Reset" /></td>
  </tr>
</table>

               
               </form>
        </div>
				</div>
</div>
		  <!-- end #content --><!-- end #sidebar -->
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
