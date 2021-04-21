<meta charset = "UTF-8">
<center>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<table width = "800">
			<tr height = "40">
				<td align = "center"><b>[회원가입]</b></td>
			</tr>
		</table>
		<table width = "700" height = "600" cellpadding = "0" style = "border-collapse:collapse; font-size:9pt;">
			<tr class = "" height = "30">
				<td width = "5%" align = "center">*</td>
				<td width = "15%">회원 ID</td>
				<td><input type = "text" name = "wUserID" />
			</tr>
			<tr height = "7">
				<td colspan = "3"><hr /></td>
			</tr>
			<tr class = "" height = "30">
				<td width = "5%" align = "center">*</td>
				<td width = "15%">비밀번호</td>
				<td><input type = "password" name = "wUserPW" id = "pw" onchange = "isSame()" /></td>
			 </tr>
			 	<tr height = "7">
				<td colspan = "3"><hr /></td>
			</tr>
			<tr class = "" height = "30">
				<td width = "5%" align = "center">*</td>
				<td width = "15%">비밀번호 확인</td>
				<td><input type = "password" name = "wUserPWConfirm" id = "pwCheck" onchange = "isSame()" />&nbsp;&nbsp;<span id = "same"></span></td>
			</tr>
				<tr height = "7">
				<td colspan = "3"><hr /></td>
			</tr>
			<tr class = "" height = "30">
				<td width = "5%" align = "center">*</td>
				<td width = "15%">이 름</td>
				<td><input type = "text" name = "wUserName" placeholder = "홍길동"/></td>
			 </tr>
			 	<tr height = "7">
				<td colspan = "3"><hr /></td>
			</tr>
			</tr>
			<tr class = "" height = "30">
				<td width = "5%" align = "center">*</td>
				<td width = "15%">휴대전화</td>
				<td><input type = "tel" name = "wUserCellPhone" placeholder = "010-1111-1111"/></td>
			 </tr>
			 	<tr height = "7">
				<td colspan = "3"><hr /></td>
			</tr>
			<tr class = "" height = "30">
				<td width = "5%" align = "center">*</td>
				<td width = "15%">주민등록번호</td>
				<td><input type = "text" name = "wUserNumber" placeholder = "990105"/></td>
			 </tr>
			 </table>
			 <br />
			 <table>
				<tr height = "40">
					<td><input type = "submit" value = "회원가입" name="submit"/></a></td>
				</tr>
			</table>
		</form>
	</center>
<?php
if (isset($_POST['submit'])) {
	$d = mysqli_connect("localhost","root","vixx0524","movie", "3307");
	
	$id = $_POST['wUserID'];
	$pw =$_POST['wUserPW'];
	$name = $_POST['wUserName'];
	$tel = $_POST['wUserCellPhone'];
	$isAdult = $_POST['wUserNumber'];
	
	if (!empty($id) && !empty($pw) && !empty($name) && !empty($tel) && !empty($isAdult)) {
			$query = "INSERT INTO mem VALUES ('$id','$pw','$tel','$name','$isAdult')";
			$join = mysqli_query($d, $query);
			if ($join) {
				echo "<script>alert(\"회원가입이 완료 되었습니다.\");</script>";
				echo '<p align=center><a href="login2.php"  target="_self" style="text-decoration:none" align=center>로그인</p>';
			}
	}
	else {
		echo "비어있는 값이 있습니다.";
		echo "<a href='join.php'> &lt; &lt; 돌아가기 </a>";
	}
}

mysqli_close($d);
?>