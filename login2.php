<?php
$err_msg = "";
if (!isset($_COOKIE['user_id'])) {
	if (isset($_POST['submit'])) {
		$d = mysqli_connect("localhost", "root", "vixx0524", "movie", "3307");
		$id = $_POST['id'];
		$pass = $_POST['pass'];
		
		if (!empty($id) && !empty($pass)) {
			$query = "select m_id, m_pw from mem where m_id='$id' and m_pw='$pass'";
			$data = mysqli_query($d, $query);
			if (mysqli_num_rows($data) == 1) {
				setcookie('user_id', $id);
				setcookie('user_pass', $pass);
				$next_url = 'https://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/movie.php';
				header('Location:'.$next_url);
			}
			else {
				$err_msg = "로그인을 위해 정확한 id와 password를 입력하세요 <br>";
			}
		}//empty
		else {
			$err_msg="입력되지 않은 값들이 있습니다.<br>";
		}
	} //submit
}//$_COOKIE
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<body>
 <h1><p align=center> Log In</p></h1>
 <?php
 if (empty($_COOKIE['user_id'])) {
	 echo '<p>'.$err_msg.'</p>'; ?>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<table align=center border=0 cellspacing=0 width=500 bordercolordark=white bordercolorlight=#999999>
	<tr>
	 <td class="topline" width=150> <p align=center> ID </p> </td>
	 <td class="topline" width=250> <input type="text" name="id" value="<?php
	 if (!empty($id)) 
		echo $id; ?>" /> <br />
	 </td>
	 <td class="buttonline" rowspan="2" align=center> <button type="submit" name="submit" style="height:100px; width:130px" >로그인</td>
	</tr>
	<tr>
	 <td class="botline" width=150><p align=center> PW </p></td>
	 <td class="botline" width=200> <input type="password" name="pass" style="height:25px"></td>
	</tr>
	<tr>
	 <td colspan=3>
	 <a href="join.php" target="_self" style="text-decoration:none">회원가입 하시겠습니까?</p> 
	 </td>
	</tr>
	<tr>
	 <td> <a href="find_id.php" target="_self" style="text-decoration:none">ID찾기</p> </td>
	 <td> <a href="find_pw.php" target="_self" style="text-decoration:none">PW찾기</p> </td>
	 <td> <a href="nm.php" target="_self" style="text-decoration:none">비회원</p> </td>
	 </tr>
	</table>
	</form>
	<?php
 }
 else {
	 ?>
	 <form method="post" action="main.php">
	 <?php
	 echo('<p> You are logged in as '.$_COOKIE['user_id'].'</p>');
	 echo "<a href='logout.php'>Log out</a>";
 }
 ?>
 </body> </html>
