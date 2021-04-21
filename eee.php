
<?php
/*
$err_msg = "";
if (isset($_COOKIE['user_id']) || isset($_COOKIE['nm_na'])) {
	print "Hello~";
	if (isset($_COOKIE['user_id']))  {
		setcookie("user_id", "", time()-3600);
	}
	if (isset($_COOKIE['nm_na'])) {
		setcookie("nm_na", "", time()-3600);
	}
	?>
	
*/
?>
<!DOCTYPE html>
<html>

 <head>
 <meta charset="UTF-8">
<title> 지쓰리무비 </title>
 <style type="text/css">
 .box1 {border:3px solid FFFFFF; height:200px; width:250px;
         position:fixed; top:10px; left:20px;}
 a:link {text-decoration:none; color:black}
 #menu { table-layout : fixed; width:100%; Vlink:white;} 
 .center { text-align: center;}
 .right { text-align: right;}
 .2 { color:blue; font-weight:bold;} 
 #below { style:color: rgb(102, 102, 102); font-family: 돋움, dotum; font-size: 11px; line-height: 16px;}
 </style>
 <?php
 if(!isset($_POST['mn_seat'])) {
	 if (isset($_POST['submit'])) {
		 $mn_seat = $_POST['chk_info'];
		 if($mn_seat=="1") {
			 $seat = "A1";
		 }
		 else if($mn_seat=="2") {
			 $seat = "A2";
		 }
		 else if($mn_seat=="3") {
			 $seat = "A3";
		 }
		 else if($mn_seat=="4") {
			 $seat = "A4";
		 }
		 else if($mn_seat=="5") {
			 $seat = "A5";
		 }
		 else if($mn_seat=="6") {
			 $seat = "A6";
		 }
		 else if($mn_seat=="7") {
			 $seat = "A7";
		 }
		 else if($mn_seat=="8") {
			 $seat = "A8";
		 }
		 else if($mn_seat=="9") {
			 $seat = "A9";
		 }
		 else if($mn_seat=="10") {
			 $seat = "A10";
		 }
		 setcookie('mn_seat',$seat);
	 }
	 else {
	 ?>
 </head>

 <bodystyle="background-image:url('/images/j3icuhlh');background-repeat:repeat-x;background- position:left top;" >
 <hr>
 <h1 class="center">
<a href="main.php">지쓰리무비</a>
</h1>
<center><h2>좌석배치도<br>screen
<table border=1>
<tr>
<td><input type="checkbox" name="chk_info" value="1"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="2"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="3"></td><td>   </td>
<td>   </td><td>   </td>
<td><input type="checkbox" name="chk_info" value="4"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="5"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="6"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="7"></td><td>   </td>
<td>   </td><td>   </td>
<td><input type="checkbox" name="chk_info" value="8"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="9"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="10"></td><td>   </td></tr>
<tr align='center'><td> A1 </td><td>   </td><td> A2 </td><td>   </td><td> A3 </td><td>   <td>   </td><td>   </td>   </td><td> A4  </td><td>   </td><td> A5  </td><td>   </td><td> A6 </td><td>   </td><td> A7 </td><td>   <td>   </td><td>   </td>   </td><td> A8 </td><td>   </td><td> A9 </td><td>   </td><td> A10 </td><td>   </td></tr>
 
<tr>
<td><input type="checkbox" name="chk_info" value="11"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="12"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="13"></td><td>   </td>
<td>   </td><td>   </td>
<td><input type="checkbox" name="chk_info" value="14"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="15"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="16"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="17"></td><td>   </td>
<td>   </td><td>   </td>
<td><input type="checkbox" name="chk_info" value="18"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="19"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="20"></td><td>   </td></tr>
<tr align='center'><td> B1 </td><td>   </td><td> B2 </td><td>   </td><td> B3 </td><td>   <td>   </td><td>   </td>   </td><td> B4 </td><td>   </td><td> B5 </td><td>   </td><td> B6 </td><td>   </td><td> B7 </td><td>   <td>   </td><td>   </td>   </td><td> B8 </td><td>   </td><td> B9 </td><td>   </td><td> B10 </td><td>   </td></tr>
 
<tr>
<td><input type="checkbox" name="chk_info" value="21"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="22"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="23"></td><td>   </td>
<td>   </td><td>   </td>
<td><input type="checkbox" name="chk_info" value="24"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="25"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="26"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="27"></td><td>   </td>
<td>   </td><td>   </td>
<td><input type="checkbox" name="chk_info" value="28"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="29"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="30"></td><td>   </td></tr>
<tr align='center'><td> C1 </td><td>   </td><td> C2 </td><td>   </td><td> C3 </td><td>   <td>   </td><td>   </td>   </td><td> C4 </td><td>   </td><td> C5 </td><td>   </td><td> C6 </td><td>   </td><td> C7 </td><td>   <td>   </td><td>   </td>   </td><td> C8 </td><td>   </td><td> C9 </td><td>   </td><td> C10 </td><td>   </td></tr>
 
<tr>
<td><input type="checkbox" name="chk_info" value="31"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="32"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="33"></td><td>   </td>
<td>   </td><td>   </td>
<td><input type="checkbox" name="chk_info" value="34"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="35"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="36"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="37"></td><td>   </td>
<td>   </td><td>   </td>
<td><input type="checkbox" name="chk_info" value="38"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="39"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="40"></td><td>   </td></tr>
<tr align='center'><td> D1 </td><td>   </td><td> D2 </td><td>   </td><td> D3 </td><td>   <td>   </td><td>   </td>   </td><td> D4 </td><td>   </td><td> D5 </td><td>   </td><td> D6 </td><td>   </td><td> D7 </td><td>   <td>   </td><td>   </td>   </td><td> D8 </td><td>   </td><td> D9 </td><td>   </td><td> D10 </td><td>   </td></tr>
 
<tr>
<td><input type="checkbox" name="chk_info" value="41"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="42"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="43"></td><td>   </td>
<td>   </td><td>   </td>
<td><input type="checkbox" name="chk_info" value="44"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="45"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="46"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="47"></td><td>   </td>
<td>   </td><td>   </td>
<td><input type="checkbox" name="chk_info" value="48"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="49"></td><td>   </td>
<td><input type="checkbox" name="chk_info" value="50"></td><td>   </td></tr>
<tr align='center'><td> E1 </td><td>   </td><td> E2 </td><td>   </td><td> E3 </td><td>   <td>   </td><td>   </td>   </td><td> E4 </td><td>   </td><td> E5 </td><td>   </td><td> E6 </td><td>   </td><td> E7 </td><td>   <td>   </td><td>   </td>   </td><td> E8 </td><td>   </td><td> E9 </td><td>   </td><td> E10 </td><td>   </td></tr>
<footer align="center">
<form method="post" action="eee.php">
<div><input type="submit" name="submit" value="발권하기">
</footer>
<?php
	 }
 }
?>