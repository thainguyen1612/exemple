<?php include("dbconnect.php") ?>
<?php
$tenkh =$_POST["tenkh"];
$diachi =$_POST["diachi"];
$dienthoai =$_POST["dienthoai"];
$email =$_POST["email"];
$ykien =$_POST["ykien"];
$result = mysql_query("INSERT INTO lienhe (tenkh,diachi,dienthoai, email, ykien) VALUES ('$tenkh',  '$diachi',  '$dienthoai', '$email',  '$ykien')");
echo "<script>alert('Xin cam on quy khach da gop y');location='index.php'; </script>"
?>
