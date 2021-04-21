<?php

$d = mysqli_connect("localhost","root","vixx0524","movie", "3307");

if(!$d)
   echo mysqli_connect_error()."<br>";

$id = $_POST['wUserID'];
$pw =$_POST['wUserPW'];
$name = $_POST['wUserName'];
$tel = $_POST['wUserCellPhone'];
$isAdult = $_POST['wUserNumber'];

$query = "insert into mem(m_id, m_pw, m_tel, m_name, m_iden) values ('$id','$pw','$tel','$name','$isAdult')";
$result = mysqli_query($d, $query);

$query = "select m_id from mem where m_id ='$id'";
$result = mysqli_query($d, $query);

while($row = mysqli_fetch_array($result)){
   print $row['m_id']."님 회원가입 성공하셨습니다 ! <br>";
    ?>
	<a href="main.php" target="_self" style="text-decoration:none">메인화면 돌아가기</p> 
<?php
	}

mysqli_close($d);
?>