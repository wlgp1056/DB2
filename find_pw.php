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
$dbc=mysqli_connect("localhost","root","vixx0524","movie", "3307");
if (!$dbc) 
	die("fail to connect");
?>
<form method="post" action="find_pw.php">
<h1> <p align=center> 비밀번호 찾기</p> </h1>
<table align=center border=0 cellspacing=0 width=500 bordercolordark=white bordercolorlight=#999999>
<tr> <td class="topline" width=150> <p align=center> 아이디 입력 </p></td>
     <td class="topline" width=250> <input type="text" name="id"> </td>
	 <td class="buttonline" rowspan="2" align=center> 
	  <button type="submit" name="submit" style="height:100px; width:130px">비밀번호변경하기
	 </td>
</tr>
<tr> <td class="botline" width=150> <p align=center>전화번호 입력 </p></td>
     <td class="botline" width=200> <input type="text" name="tel" style="height:25px">
	 </td> 
</tr>
</table>

<?php
if(isset($_POST['submit'])) {
	$id = $_POST['id'];
	$tel = $_POST['tel'];
	$query =  "select * from mem where m_id='$id' && m_tel='$tel'";
	$result = mysqli_query($dbc, $query);
	if(mysqli_num_rows($result) == 1) {
		$npass = rand(1000, 9999);
		$query = "update mem set m_pw='$npass' where m_id='$id'&& m_tel ='$tel'";
		$result = mysqli_query($dbc, $query);
		if ($result) {
			print "<p align=center> <br>임시 비밀번호가 ".$npass."로 변경되었습니다.<br>";
			echo '<p align=center> <a href="login2.php" target="_self" style="text-decoration:none">로그인하시겠습니까?</p></a>'; 
		}
			
		else {
			print "비밀번호 변경에 실패하였습니다.<br>";
			echo '<a href="find_pw.php" target="_self" style="text-decoration:none">비번찾기</p>'; 
		}
	}
	else 
		echo "해당하는 아이디가 없습니다.";
	
}
?>