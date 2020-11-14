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
<script type="text/javascript">
function ktra()
{
var txt=""
if(form.txttenkh.value=="")
{
alert("Ban chua nhap ho ten:");
}
if(form.txtdiachi.value=="")
{
alert("Ban chua nhap dia chi:");
}
if(form.txtdienthoai.value=="")
{
alert("Ban chua nhap dien thoai:");
}
if(form.txtemail.value=="")
{
alert("Ban chua nhap email:");
}
else 
 	{
 	 var r=confirm("Góp ý thành công")
  	if (r==true)
    {
    document.write("Chào Mừng bạn đến với NSphone!")
	document.write("<a href='index.html'>Quay lại trang chủ</a>")
    }
  else
    {
    document.write("Gửi góp ý thất bại")
    }
}
}
</script>
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
                    <h2 class="title">GÓP Ý</h2>
                    <div class="entry">
                    <form id="form" action="xlylienhe.php" method="get">
                    
                    <table width="400" border="0">
                      <tr>
                        <td width="40">Họ tên</td>
                        <td width="144">
                          <p>
                            <label for="txttenkh"></label>
                            <input class="form-control"type="text" name="txttenkh" id="txttenkh" />
                          </p>
                       </td>
                      </tr>
                      <tr>
                        <td>Địa chỉ</td>
                        <td>
                          <p>
                            <label for="txtdiachi"></label>
                            <input class="form-control"type="text" name="txtdiachi" id="txtdiachi" />
                          </p>
                       </td>
                      </tr>
                      <tr>
                        <td>Điện thoại</td>
                        <td><form id="form3" method="post" action="">
                          <p>
                            <label for="txtdienthoai"></label>
                            <input class="form-control"type="text" name="txtdienthoai" id="txtdienthoai" />
                          </p>
                       </td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><form id="form4" method="post" action="">
                          <p>
                            <label for="txtemail"></label>
                            <input class="form-control"type="text" name="txtemail" id="txtemail" />
                          </p>
                       </td>
                      </tr>
                      <tr>
                        <td>Ý kiến</td>
                        <td><form id="form5" method="post" action="">
                          <p>
                            <label for="txtykien"></label>
                            <textarea name="txtykien" id="txtykien" cols="45" rows="5"></textarea>
                          </p>
                       </td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><form id="form6" method="post" action="">
                          <p>
                            <input class="btn btn-success"type="submit" name="gui" id="gui" value="Gửi đi" onclick="ktra()" />
                            <input class="btn btn-danger"type="submit" name="huy" id="huy" value="Hủy bỏ" />
                          </p>
                        </td>
                      </tr>
                    </table>
<p>
                    
				  <table>
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
