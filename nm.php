<html>
<head>
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
 </head>
<body>
 <h1><p align=center>비회원 가입</p></h1>
 
 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 <table align=center border=0 cellspacing=0 width=500 bordercolordark=white bordercolorlight=#999999>
	<tr>
	 <td class="topline" width=150> <p align=center> * 이름 </p> </td>
	 <td class="topline" width=250> <input type="text" name="nm_na" /> <br />
	 </td>
	 <td class="buttonline" rowspan="4" align=center> <button type="submit" name="submit" style="height:100px; width:130px" >비회원 로그인</td>
	</tr>
	<tr>
	 <td class="botline" class="topline" width=150><p align=center>* 전화 번호(-없이 입력) </p></td>
	 <td class="botline" width=200> <input type="text" name="nm_tel" style="height:25px"></td>
	</tr>
	<tr>
	 <td class="botline" width=150><p align=center>* 생년월일(YYMMDD) </p></td>
	 <td class="botline" width=200> <input type="text" name="nm_iden" style="height:25px"></td>
	</tr>
	<tr>
	 <td class="botline" width=150><p align=center>* 비밀번호(4자리) </p></td>
	 <td class="botline" width=200> <input type="text" name="nm_pw" style="height:25px"></td>
	</tr>
	<tr>
	 <td> <a href="main.php" target="_self" style="text-decoration:none">메인화면</p> </td>
	 </tr>
	</table>
	</form>
	
<?php
 if (isset($_POST['submit'])) {
		$d = mysqli_connect("localhost", "root", "vixx0524", "movie", "3307");
		$nm_na = $_POST['nm_na'];
		$nm_tel = $_POST['nm_tel'];
		$nm_iden = $_POST['nm_iden'];
		$nm_pw = $_POST['nm_pw'];
		
		if (strlen($nm_na)<0) {
		 echo "이름을 다시 입력해주세요.<br>";
		 echo "<a href='nm.php'> &lt;&lt; 돌아가기 </a>";
		}
		else if (strlen($nm_iden)>7) {
		 echo "생년월일6자리를 다시써주세요<br>";
         echo "<a href='nm.php'> &lt;&lt; 돌아가기 </a>";
	 }
	 else if (strlen($nm_pw)>5){
      echo "비밀번호4자를 다시 입력해주세요<br>";
      echo "<a href='nm.php'> &lt; &lt; 돌아가기 </a>";
     }
	 else if  (!empty($nm_na) && !empty($nm_tel) && !empty($nm_iden) && !empty($nm_pw)) {
			$query = "insert into nomem values('$nm_na','$nm_tel','$nm_iden','$nm_pw')";
			$join = mysqli_query($d, $query);
			if ($join) {
				setcookie('nm_na', $nm_na);
				setcookie('nm_tel', $nm_tel);
				setcookie('nm_iden', $nm_iden);
				setcookie('nm_pw', $nm_pw);
				echo "<p align=center>비회원 로그인이 완료 되었습니다.<br>";
				echo "<p align=center>정보를 잘 확인하고 기억하세요!.<br>";
				echo "<p align=center>".$nm_na."<br>";
				echo "<p align=center>".$nm_tel."<br>";
				echo "<p align=center>".$nm_iden."<br>";
				echo "<p align=center>".$nm_pw."<br>";
				 echo '<a href="movie.php" target="_self" style="text-decoration:none">영화보기</p>';
				/*$next_url = 'https://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/main.php';
				header('Location:'.$next_url);*/
			}
		}//empty
		else {
			$err_msg="입력되지 않은 값들이 있습니다.<br>";
		}
	} //submit
?>

