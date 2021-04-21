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
 </head>

 <bodystyle="background-image:url('/images/j3icuhlh');background-repeat:repeat-x;background- position:left top;" >
 <hr>
 <h1 class="center">
<a href="main.php">지쓰리무비</a>
</h1>

<body>
<?php
$d = mysqli_connect("localhost","root","vixx0524","movie", "3307");
?>

<table border-collapse:collapse;  id="menu">
<tr bgcolor=#D1B2FF>
<th> <a href="movie.php" title="movie"> 영화 </th>
<th> <a href="reserve.php" title="reserve"> 예매 </th>
<th> <a href="event.php" title="event"> 이벤트 </th>
<th> <a href="snackbar.html" title="snackbar" > SNACKBAR </th>
<th> <a href="logout.php" title="logout"> 로그아웃 </th>
</tr>
</table>
<table width=100% border=0 align="center" cellpadding=0 cellspacing=0>
<tr>
<td valign="top" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td valign="top">
     
<table width=100% border=0 align="center" cellpadding=0 cellspacing=0>
<tr> 
<td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">

<br><br>

<hr>
<br><br>
<!-- 이미지보이는 부분 시작 -->
<table align="center" cellpadding="0" cellspacing="0" width="100%" border="0">
<tr><td align='center'>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td height='2'></td></tr><tr>
<td align='center'>
<table width="100%" border="0" cellspacing="0" cellpadding="0"><tr>

<td width="24%" align="center" valign='top'>
<table cellpadding='0' cellspacing='0' border='0'>
<tr><td background='/home/skin/newskin13/board/skin/latest/gallery_title/img/la_bg.gif' valign='top' align='center'>
<img src="m1.png" width='250' height='300' border='0' style='border:1 solid #d7d7d7'>
</td></tr>
<?php
 
 $query = "select * from movie where mvno=1000";
 $info = mysqli_query($d, $query);
 $row1 = mysqli_fetch_array($info);
 $movename1 = $row1['mvname'];
 
 $query = "select * from mv_timetable where mvt_no = 3000";
 $result = mysqli_query($d,$query);
 $row = mysqli_fetch_array($result);

?>
<tr><td style='padding-top:5px' width='210' align='center'> 
<?php
print "영화제목 : ".$movename1."<br>";
print "장르 : ".$row1['genre']."<br>";
print "감독 : ".$row1['director']."<br>";
print "연령 : ".$row1['age_rate']."<br>";
?>
<form  method = "post" action = "reserve.php">

<input type = "radio" name = "time" value = "9:40">
<?php
print $row['mv_stime'];?>
<input type = "radio" name = "time" value = "11:00"> 
<?php
print $row['mv_etime'];
print "<br>"."상영관 : ".$row['theater'];
?>
</td></tr>
<tr><td style='padding-top:5px' width='210' align='center'>
<input type = "submit" name="1" value = "예매하기">
</td></tr></table></td>
</form>

<td width="24%" align="center" valign='top'>
<table cellpadding='0' cellspacing='0' border='0'>
<tr><td background='/home/skin/newskin13/board/skin/latest/gallery_title/img/la_bg.gif' valign='top' align='center'>
<img src='m2.png' width='250' height='300' border='0' style='border:1 solid #d7d7d7'>
</td></tr>
<?php
 $query = "select * from movie where mvno=1001";
 $result = mysqli_query($d, $query);
 $row1 = mysqli_fetch_array($result);
 
 $query = "select * from mv_timetable where mvt_no = 3100";
 $result = mysqli_query($d,$query);
 $row = mysqli_fetch_array($result);
?>
<tr><td style='padding-top:5px' width='210' align='center'> 
<?php
print "영화제목 : ".$row1['mvname']."<br>";
print "장르 : ".$row1['genre']."<br>";
print "감독 : ".$row1['director']."<br>";
print "연령 : ".$row1['age_rate']."<br>";
?>
<form  method = "post" action = "reserve.php">
<input type = "radio" name = "time" value = "9:30">
<?php
print $row['mv_stime'];?>
<input type = "radio" name = "time" value = "18:20"> 
<?php
print $row['mv_etime'];
print "<br>"."상영관 : ".$row['theater'];
?>
</td></tr>
<tr><td style='padding-top:5px' width='210' align='center'>
<input type = "submit" name="2" value = "예매하기">
</td></tr></table></td>
</form>


<td width="24%" align="center" valign='top'>
<table cellpadding='0' cellspacing='0' border='0'>
<tr><td background='/home/skin/newskin13/board/skin/latest/gallery_title/img/la_bg.gif' valign='top' align='center'>
<img src='m3.png' width='250' height='300' border='0' style='border:1 solid #d7d7d7'>
</td></tr>
<?php
 $query = "select * from movie where mvno=1002";
 $result = mysqli_query($d, $query);
 $row1 = mysqli_fetch_array($result);
 
 $query = "select * from mv_timetable where mvt_no = 3200";
 $result = mysqli_query($d,$query);
 $row = mysqli_fetch_array($result);
?>
<tr><td style='padding-top:5px' width='210' align='center'> 
<?php
print "영화제목 : ".$row1['mvname']."<br>";
print "장르 : ".$row1['genre']."<br>";
print "감독 : ".$row1['director']."<br>";
print "연령 : ".$row1['age_rate']."<br>";
?>
<form  method = "post" action = "reserve.php">
<input type = "radio" name = "time" value = "12:40">
<?php
print $row['mv_stime'];?>
<input type = "radio" name = "time" value = "19:30"> 
<?php
print $row['mv_etime'];
print "<br>"."상영관 : ".$row['theater'];
?></td></tr>
<tr><td style='padding-top:5px' width='210' align='center'>
<input type = "submit" name="3" value = "예매하기">
</td></tr></table></td>

<td width="24%" align="center" valign='top'>
<table cellpadding='0' cellspacing='0' border='0'>
<tr><td background='/home/skin/newskin13/board/skin/latest/gallery_title/img/la_bg.gif' valign='top' align='center'>
<img src='m4.png' width='250' height='300' border='0' style='border:1 solid #d7d7d7'>
</td></tr>
<?php
 $query = "select * from movie where mvno=1003";
 $result = mysqli_query($d, $query);
 $row1 = mysqli_fetch_array($result);
 
 $query = "select * from mv_timetable where mvt_no = 3300";
 $result = mysqli_query($d,$query);
 $row = mysqli_fetch_array($result);
?>
<tr><td style='padding-top:5px' width='210' align='center'> 
<?php
print "영화제목 : ".$row1['mvname']."<br>";
print "장르 : ".$row1['genre']."<br>";
print "감독 : ".$row1['director']."<br>";
print "연령 : ".$row1['age_rate']."<br>";
?>
<form  method = "post" action = "reserve.php">
<input type = "radio" name = "time" value = "7:40">
<?php
print $row['mv_stime'];?>
<input type = "radio" name = "time" value = "21:00"> 
<?php
print $row['mv_etime'];
print "<br>"."상영관 : ".$row['theater'];
?></td></tr>
<tr><td style='padding-top:5px' width='210' align='center'>
<input type = "submit" name="4" value = "예매하기"></td></tr></table></td> 
</tr></table></td></tr></table></td></tr></table>
<!-- 이미지보이는 부분 끝 -->

<!-- 두번째 이미지 부분 시작 -->
<p>&nbsp </p><p>&nbsp </p> <p>&nbsp </p>
<table align="center" cellpadding="0" cellspacing="0" width="100%" border="0">
<tr><td align='center'>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td height='2'></td></tr><tr>
<td align='center'>
<table width="100%" border="0" cellspacing="0" cellpadding="0"><tr>

<td width="24%" align="center" valign='top'>
<table cellpadding='0' cellspacing='0' border='0'>
<tr><td background='/home/skin/newskin13/board/skin/latest/gallery_title/img/la_bg.gif' valign='top' align='center'>
<img src="m5.png" width='250' height='300' border='0' style='border:1 solid #d7d7d7'>
</td></tr>
<?php
 $query = "select * from movie where mvno=1004";
 $result = mysqli_query($d, $query);
 $row1 = mysqli_fetch_array($result);
 
 $query = "select * from mv_timetable where mvt_no = 3400";
 $result = mysqli_query($d,$query);
 $row = mysqli_fetch_array($result);
?>
<tr><td style='padding-top:5px' width='210' align='center'> 
<?php
print "영화제목 : ".$row1['mvname']."<br>";
print "장르 : ".$row1['genre']."<br>";
print "감독 : ".$row1['director']."<br>";
print "연령 : ".$row1['age_rate']."<br>";
?>
<form  method = "post" action = "reserve.php">
<input type = "radio" name = "time" value = "15:00">
<?php
print $row['mv_stime'];?>
<input type = "radio" name = "time" value = "24:00"> 
<?php
print $row['mv_etime'];
print "<br>"."상영관 : ".$row['theater'];
?></td></tr>
<tr><td style='padding-top:5px' width='210' align='center'>
<input type = "submit"  name="5" value = "예매하기">
</td></tr></table></td>

<td width="24%" align="center" valign='top'>
<table cellpadding='0' cellspacing='0' border='0'>
<tr><td background='/home/skin/newskin13/board/skin/latest/gallery_title/img/la_bg.gif' valign='top' align='center'>
<img src='m6.png' width='250' height='300' border='0' style='border:1 solid #d7d7d7'>
</td></tr>
<?php
 $query = "select * from movie where mvno=1005";
 $result = mysqli_query($d, $query);
 $row1 = mysqli_fetch_array($result);
 
 $query = "select * from mv_timetable where mvt_no = 3500";
 $result = mysqli_query($d,$query);
 $row = mysqli_fetch_array($result);
?>
<tr><td style='padding-top:5px' width='210' align='center'> 
<?php
print "영화제목 : ".$row1['mvname']."<br>";
print "장르 : ".$row1['genre']."<br>";
print "감독 : ".$row1['director']."<br>";
print "연령 : ".$row1['age_rate']."<br>";
?>
<form  method = "post" action = "reserve.php">
<input type = "radio" name = "time" value = "8:10">
<?php
print $row['mv_stime'];?>
<input type = "radio" name = "time" value = "14:20"> 
<?php
print $row['mv_etime'];
print "<br>"."상영관 : ".$row['theater'];
?></td></tr>
<tr><td style='padding-top:5px' width='210' align='center'>
<input type = "submit"  name="6" value = "예매하기">
</td></tr></table></td>

<td width="24%" align="center" valign='top'>
<table cellpadding='0' cellspacing='0' border='0'>
<tr><td background='/home/skin/newskin13/board/skin/latest/gallery_title/img/la_bg.gif' valign='top' align='center'>
<img src='m7.png' width='250' height='300' border=0' style='border:1 solid #d7d7d7'>
</td></tr>
<?php
 $query = "select * from movie where mvno=1006";
 $result = mysqli_query($d, $query);
 $row1 = mysqli_fetch_array($result);
 
 $query = "select * from mv_timetable where mvt_no = 3600";
 $result = mysqli_query($d,$query);
 $row = mysqli_fetch_array($result);
?>
<tr><td style='padding-top:5px' width='210' align='center'> 
<?php
print "영화제목 : ".$row1['mvname']."<br>";
print "장르 : ".$row1['genre']."<br>";
print "감독 : ".$row1['director']."<br>";
print "연령 : ".$row1['age_rate']."<br>";
?>
<form  method = "post" action = "reserve.php">
<input type = "radio" name = "time" value = "13:10">
<?php
print $row['mv_stime'];?>
<input type = "radio" name = "time" value = "19:30"> 
<?php
print $row['mv_etime'];
print "<br>"."상영관 : ".$row['theater'];
?></td></tr>
<tr><td style='padding-top:5px' width='210' align='center'><input type = "submit"  name="7" value = "예매하기">
</td></tr></table></td>

<td width="24%" align="center" valign='top'>
<table cellpadding='0' cellspacing='0' border='0'>
<tr><td background='/home/skin/newskin13/board/skin/latest/gallery_title/img/la_bg.gif' valign='top' align='center'>
<img src='m8.png' width='250' height='300' border=0' style='border:1 solid #d7d7d7'>
</td></tr>
<?php
 $query = "select * from movie where mvno=1007";
 $result = mysqli_query($d, $query);
 $row1 = mysqli_fetch_array($result);
 
 $query = "select * from mv_timetable where mvt_no = 3700";
 $result = mysqli_query($d,$query);
 $row = mysqli_fetch_array($result);
?>
<tr><td style='padding-top:5px' width='210' align='center'> 
<?php
print "영화제목 : ".$row1['mvname']."<br>";
print "장르 : ".$row1['genre']."<br>";
print "감독 : ".$row1['director']."<br>";
print "연령 : ".$row1['age_rate']."<br>";
?>
<form  method = "post" action = "reserve.php">
<input type = "radio" name = "time" value = "15:40">
<?php
print $row['mv_stime'];?>
<input type = "radio" name = "time" value = "22:10"> 
<?php
print $row['mv_etime'];
print "<br>"."상영관 : ".$row['theater'];
?></td></tr>
<tr><td style='padding-top:5px' width='210' align='center'><input type = "submit" name="8"  value = "예매하기">
</td></tr></table></td> 
</tr></table></td></tr></table></td></tr></table>

<!-- 세번째 이미지 부분 끝-->
<p>&nbsp </p><p>&nbsp </p> <p>&nbsp </p>
<table align="center" cellpadding="0" cellspacing="0" width="100%" border="0">
<tr><td align='center'>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td height='2'></td></tr><tr>
<td align='center'>
<table width="100%" border="0" cellspacing="0" cellpadding="0"><tr>

<td width="24%" align="center" valign='top'>
<table cellpadding='0' cellspacing='0' border='0'>
<tr><td background='/home/skin/newskin13/board/skin/latest/gallery_title/img/la_bg.gif' valign='top' align='center'>
<img src="m9.png" width='250' height='300' border='0' style='border:1 solid #d7d7d7'>
</td></tr>
<?php
 $query = "select * from movie where mvno=1008";
 $result = mysqli_query($d, $query);
 $row1 = mysqli_fetch_array($result);
 
 $query = "select * from mv_timetable where mvt_no = 3800";
 $result = mysqli_query($d,$query);
 $row = mysqli_fetch_array($result);
?>
<tr><td style='padding-top:5px' width='210' align='center'> 
<?php
print "영화제목 : ".$row1['mvname']."<br>";
print "장르 : ".$row1['genre']."<br>";
print "감독 : ".$row1['director']."<br>";
print "연령 : ".$row1['age_rate']."<br>";
?>
<form  method = "post" action = "reserve.php">
<input type = "radio" name = "time" value = "13:10">
<?php
print $row['mv_stime'];?>
<input type = "radio" name = "time" value = "16:30"> 
<?php
print $row['mv_etime'];
print "<br>"."상영관 : ".$row['theater'];
?></td></tr>
<tr><td style='padding-top:5px' width='210' align='center'><input type = "submit" name="9"  value = "예매하기">
</td></tr></table></td>

<td width="24%" align="center" valign='top'>
<table cellpadding='0' cellspacing='0' border='0'>
<tr><td background='/home/skin/newskin13/board/skin/latest/gallery_title/img/la_bg.gif' valign='top' align='center'>
<img src='m10.png' width='250' height='300' border='0' style='border:1 solid #d7d7d7'>
</td></tr>
<?php
 $query = "select * from movie where mvno=1009";
 $result = mysqli_query($d, $query);
 $row1 = mysqli_fetch_array($result);
 
 $query = "select * from mv_timetable where mvt_no = 3900";
 $result = mysqli_query($d,$query);
 $row = mysqli_fetch_array($result);
?>
<tr><td style='padding-top:5px' width='210' align='center'> 
<?php
print "영화제목 : ".$row1['mvname']."<br>";
print "장르 : ".$row1['genre']."<br>";
print "감독 : ".$row1['director']."<br>";
print "연령 : ".$row1['age_rate']."<br>";
?>
<form  method = "post" action = "reserve.php">
<input type = "radio" name = "time" value = "9:50">
<?php
print $row['mv_stime'];?>
<input type = "radio" name = "time" value = "18:00"> 
<?php
print $row['mv_etime'];
print "<br>"."상영관 : ".$row['theater'];
?></td></tr>
<tr><td style='padding-top:5px' width='210' align='center'><input type = "submit"  name="10" value = "예매하기">
</td></tr></table></td>

<td width="24%" align="center" valign='top'>
<table cellpadding='0' cellspacing='0' border='0'>
<tr><td background='/home/skin/newskin13/board/skin/latest/gallery_title/img/la_bg.gif' valign='top' align='center'>
<img src='m11.png' width='250' height='300' border=0' style='border:1 solid #d7d7d7'>
</td></tr>
<?php
 $query = "select * from movie where mvno=1010";
 $result = mysqli_query($d, $query);
 $row1 = mysqli_fetch_array($result);
 
 $query = "select * from mv_timetable where mvt_no = 4000";
 $result = mysqli_query($d,$query);
 $row = mysqli_fetch_array($result);
?>
<tr><td style='padding-top:5px' width='210' align='center'> 
<?php
print "영화제목 : ".$row1['mvname']."<br>";
print "장르 : ".$row1['genre']."<br>";
print "감독 : ".$row1['director']."<br>";
print "연령 : ".$row1['age_rate']."<br>";
?>
<form  method = "post" action = "reserve.php">
<input type = "radio" name = "time" value = "12:30">
<?php
print $row['mv_stime'];?>
<input type = "radio" name = "time" value = "15:30"> 
<?php
print $row['mv_etime'];
print "<br>"."상영관 : ".$row['theater'];
?></td></tr>
<tr><td style='padding-top:5px' width='210' align='center'><input type = "submit" name="11" value = "예매하기">
</td></tr></table></td>

<td width="24%" align="center" valign='top'>
<table cellpadding='0' cellspacing='0' border='0'>
<tr><td background='/home/skin/newskin13/board/skin/latest/gallery_title/img/la_bg.gif' valign='top' align='center'>
<img src='m12.png' width='250' height='300' border=0' style='border:1 solid #d7d7d7'>
</td></tr>
<?php
 $query = "select * from movie where mvno=1011";
 $result = mysqli_query($d, $query);
 $row1 = mysqli_fetch_array($result);
 
 $query = "select * from mv_timetable where mvt_no = 4100";
 $result = mysqli_query($d,$query);
 $row = mysqli_fetch_array($result);
?>
<tr><td style='padding-top:5px' width='210' align='center'> 
<?php
print "영화제목 : ".$row1['mvname']."<br>";
print "장르 : ".$row1['genre']."<br>";
print "감독 : ".$row1['director']."<br>";
print "연령 : ".$row1['age_rate']."<br>";
?>
<form  method = "post" action = "reserve.php">
<input type = "radio" name = "time" value = "21:10">
<?php
print $row['mv_stime'];?>
<input type = "radio" name = "time" value = "24:20"> 
<?php
print $row['mv_etime'];
print "<br>"."상영관 : ".$row['theater'];
?></td></tr>
<tr><td style='padding-top:5px' width='210' align='center'><input type = "submit"  name="12" value = "예매하기">
</td></tr></table></td> 
</tr></table></td></tr></table></td></tr></table>
<p>&nbsp </p><p>&nbsp </p> <p>&nbsp </p>

<footer align="center">
<p><span id="below">전라남도 목포시 해양대학로 91 </span><br>
<span id="below">대표이사 : 장현지 | 사업자등록번호 : 111-22-33333 </span><br>
<span id="below">개인정보 책임자 : 신지은 | 대표이메일 : wlgp1056@naver.com</span><br>
<span id="below">고객센터 : 061-1111-1111</span><br>
</p>
</footer>
  
</body>
</html>


