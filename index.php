<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
	#container{margin:auto; width:1200px;}
	#header { background-color:#903;width:1200px;min-height:200px;}
	#menu{ background-color:#F63;min-height:100px;width:1200px;margin-top:10px;}
	#left{ background-color:#63C;min-height:600px;width:290px;float:left; margin-right:10px; margin-top:10px; margin-bottom:10px;}
	#mid{ background-color:#6CC;min-height:600px;width:600px;float:left;margin-top:10px;margin-bottom:10px;}
	#right{ background-color:#FCC;min-height:600px;width:290px;float:left; margin-left:10px;margin-top:10px;margin-bottom:10px;}
	#footer{ background-color:#000;width:1200px;min-height:200px;clear:left; margin-top:10px;}
</style>
<body>
<div id="container">
	<div id="header"></div>
    <div id="menu">
    	 <a href ="trangchu.php"> Trang Chu </a>
         <a href ="tintuc.php"> Tin Tuc </a>
         <a href ="sanpham.php"> San Pham</a>
    </div>
    <div id="left">
    	<a href="gt.php">Giơi Thiệu</a>
        <a href="lh.php"> Liên Hệ</a>
    </div>
    <div id="mid">
    	<?php
			if(!isset($_GET["id"]))
			{include("menu.php");}
			else{
			$k = $_GET["id"];
			switch($id){
			case 1:include("trangchu.php");break;
			case 2:include("tintuc.php");break;
			case 3:include("sanpham.php");break;
			case 4:include("gioithieu.php");break;
			case 5:include("lienhe.php");break;
			case 6:include("dangnhap.php");break;
			case 7:include("dangki.php");break;}
			}
		?>
    </div>
    <div id="right"></div>
    <div id="footer"></div>
</div>
</body>
</html>