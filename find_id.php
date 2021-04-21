<style type="text/css">
   .topline{border-top:2px solid black;
   } /*위쪽에 줄을 긋는다*/
   .botline{border-bottom:2px solid black; 
   }/*아래쪽에 줄을 긋는다*/
   .buttonline{border-top:2px solid black; 
               border-bottom:2px solid black; 
   }/*위, 아래쪽에 줄을 긋는다*/
 a:visited {text-decoration: none; color: #333333; 
 }
 
</style>
<?php

$d = mysqli_connect("localhost","root","vixx0524","movie","3307");
if (!$d) 
	die("fail to connect");
?>

<form method="post" action="find_id.php">
<h1> <p align=center> 아이디 찾기</p> </h1>
<table align=center border=0 cellspacing=0 width=500 bordercolordark=white bordercolorlight=#999999>
<tr> <td class="topline" width=150> <p align=center> 이름 입력 </p></td>
     <td class="topline" width=250> <input type="text" name="name"> </td>
	 <td class="buttonline" rowspan="2" align=center> 
	  <button type="submit" name="submit" style="height:100px; width:130px">아이디찾기
	 </td>
</tr>
<tr> <td class="botline" width=150> <p align=center>전화번호 입력 </p></td>
     <td class="botline" width=250> <input type="text" name="tel" style="height:25px">
	 </td> 
</tr>
</table>
<?php
if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$tel = $_POST['tel'];
	$query = "select * from mem where m_name='$name' && m_tel='$tel'";
    $result = mysqli_query($d, $query);
    $row = mysqli_fetch_array($result);
	if ($row["m_name"] == $name) {
		echo "<p align=center><br> 찾으시는 아이디는 ".$row['m_id']."입니다.<br>";
		echo '<a href="login2.php" target="_self" style="text-decoration:none">로그인하시겠습니까?</p>'; 
	}
	else {
		print "<br> 찾으시는 아이디가 없습니다. <br>";
		echo '<a href="find_id.php" target="_self" style="text-decoration:none">ID찾기</p>'; 
	}
}
mysqli_close($d);
?>