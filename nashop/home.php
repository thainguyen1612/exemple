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
<script type="text/javascript">
function hide_float_right() {
    var content = document.getElementById('float_content_right');
    var hide = document.getElementById('hide_float_right');
    if (content.style.display == "none")
    {content.style.display = "block"; hide.innerHTML = '<a href="javascript:hide_float_right()"> Tắt quảng cáo [X]</a>'; }
        else { content.style.display = "none"; hide.innerHTML = '<a href="javascript:hide_float_right()">Xem quảng cáo...</a>';
    }
    }
	function hide_float_left() {
    var content = document.getElementById('float_content_left');
    var hide = document.getElementById('hide_float_left');
    if (content.style.display == "none")
    {content.style.display = "block"; hide.innerHTML = '<a href="javascript:hide_float_left()"> Tắt quảng cáo [X]</a>'; }
        else { content.style.display = "none"; hide.innerHTML = '<a href="javascript:hide_float_left()">Xem quảng cáo...</a>';
    }
    }
	function myF(){
      onl.style.display = "block";
      
    }
    function un(){
        onl.style.display = "none";
}
</script>
<style>
.float-ck { position: fixed; bottom: 0px; z-index: 9000}
* html .float-ck {position:absolute;bottom:auto;top:expression(eval (document.documentElement.scrollTop+document.docum entElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0))) ;}
#float_content_right {border: 1px solid #01AEF0;}
#hide_float_right {text-align:right; font-size: 11px;}
#hide_float_right a {background: #01AEF0; padding: 2px 4px; color: #FFF;}
#float_content_left {border: 1px solid #01AEF0;}
#hide_float_left {text-align:left; font-size: 11px;}
#hide_float_left a {background: #01AEF0; padding: 2px 4px; color: #FFF;}
</style>
<body onLoad="myF()">
    <div class="float-ck" style="right: 0px" >
        <div id="hide_float_right">
        <a href="javascript:hide_float_right()"> Tắt Quảng Cáo [X]</a></div>
        <div id="float_content_right">
        <!-- Start quang cao-->
        <img src="images/3.jpg" width="165" height="115" />
        <!-- End quang cao -->
        </div>
	</div>
    <div class="float-ck" style="left: 0px" >
        <div id="hide_float_left">
        <a href="javascript:hide_float_left()"> Tắt Quảng Cáo [X]</a></div>
        <div id="float_content_left">
        <!-- Start quang cao-->
        <img src="images/3.jpg" width="165" height="115" />
        <!-- End quang cao -->
        </div>
	</div>
    <div id="onl" style="position: fixed; bottom: 0px; top:200px;left:300px;z-index:100;">
        <div style="backgroud-color:black; width:1000px; height=200px;">
            <a href="javascript:un()" style="color:#F00;"> Tắt quảng cáo [X]</a>
            <img src="images/ts4.jpg" width="705" height="315" />
        </div>
    </div>
</body>
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
<?php 
$query="SELECT * FROM sanpham where hienthi='1' order by id_sp desc";
$kq=mysql_query ($query) or die(error());
$i=1;
echo"<ul  class='list-item' width='100%' border='0' border-collapse: separate;
>";
while($r=mysql_fetch_array($kq))
{
	echo"<li style='margin: 8px' width='150' align='center'><img src=".$r['hinhanh']." width ='150' height='230'><br><a href='?go=detail_sp&id=".$r['id_sp']."'id='text_lq'>".$r['tensp']."</a><br><b>Gia:</b>".$r['gia'].".000 VND</li>";
	
	if($i%3==0)
	{
		echo "</tr><tr>";
	}
	$i=$i+1;
}

                       ?>	
                       </p>
                       	</div>
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
