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
		<h1><a href="#">CÁC LOẠI TRUYỆN VÀ SÁCH HAY </a></h1>
		<h2>TRANG ĐƯỢC TẠO BỜI GIANG HỒ XỊN <a href="http://www.freecsstemplates.org/">VĨNH PHÚC</a></h2>
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
				<ul>
     
<?php 
if (isset($_GET['pageno'])) {
   $pageno = $_GET['pageno'];
} else {
   $pageno = 1;
} //Nếu $_GET['pageno'] đã được thiết lập trên URL thì gán cho $pageno giá trị của $_GET['pageno'], ngoài ra thì $pageno = 1

#### Xác định tổng số dòng trong database
$query = "SELECT count(*) FROM sanpham";//Nội dung query (đếm dòng)
$result = mysql_query($query);//Thực hiện query với nội dung của $query
$query_data = mysql_fetch_row($result);//Đếm tổng số dòng chính xác
$numrows = $query_data[0]; //Tổng dòng

#### Tỉnh tổng số trang = [tổng dòng] chia cho [số dòng / 1 trang]
$rows_per_page = 5;//Số dòng trong 1 trang
$lastpage      = ceil($numrows/$rows_per_page);//Tỉnh tổng số trang

#### Các nguyên tắc dành cho $pageno
$pageno = (int)$pageno;//$pageno phải là số nguyên
if ($pageno > $lastpage) {
   $pageno = $lastpage;
}//Nếu $pageno lớn hơn tổng trang thì gán cho nó giá trị của tổng trang (bắt buộc phải =< tổng trang)
if ($pageno < 1) {
   $pageno = 1;
}//nếu $pageno < 1 thì gán cho nó giá trị là 1 (bắt buộc >= 1)

#### Thiết lập giới hạn trong query (LIMIT)
$limit = 'LIMIT ' .($pageno - 1) * $rows_per_page .',' .$rows_per_page;
$query = "SELECT * FROM sanpham $limit";
$data = mysql_query("$query");
if(mysql_num_rows($data)> 0)
{
while($rowsp = mysql_fetch_array($data))
  {
?>
<li style="display: flex;">
<div ><img src="<?php echo $rowsp['hinhanh']?>"width="120" height="150" /></div><br />
<div style="margin-left: 20px;"><span style="color:#096; font-size:18px;"> <?php echo $rowsp['tensp']?></span><br /> <span style="color:#39C;"> Giá: <?php echo $rowsp['gia']?>.000 vnđ</span><br /> <span style="color:#309;"> Tác giả:<?php echo $rowsp['tacgia']?></span>
</div>
</li>
<?php
}
}
if ($pageno == 1) {
   echo " First Prev ";
} else {
   echo " <a href='?go=sanpham&pageno=1'>First</a> ";
   $prevpage = $pageno-1;
   echo " <a href='?go=sanpham&pageno=$prevpage'>Prev</a> ";
} // if

echo " $pageno / $lastpage ";

if ($pageno == $lastpage) {
   echo " Next Last ";
} else {
   $nextpage = $pageno+1;
   echo " <a href='?go=sanpham&pageno=$nextpage'>Next</a> ";
   echo " <a href='?go=sanpham&pageno=$lastpage'>Last</a> ";
   
}
?>
</ul>

				</div>
</div>
			<!-- end #content -->
			<div id="sidebar">
				<ul>
					<li>
						<h2>sÁCH ĐẸP</h2>
						<div id="bg1">
							<div id="bg2">
								<p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, volutpat.</p>
							</div>
						</div>
					</li>
					<li>
						<h2>SÁCH HAY </h2>
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
						<h2>SÁCH HẤP DẪN</h2>
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
		<p>Copyright (c) 2011 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/">GIANG HỒ VĨNH PHÚC</a>.</p>
	</div>
	<!-- end #footer -->
</div>
</body>
</html>
