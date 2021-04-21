<?php
 if (isset($_POST['submit'])) {
		 $seat = $_POST['chk_info'];
	 	 setcookie('mn_seat', $seat); 
		 $d = mysqli_connect("localhost","root","vixx0524","movie", "3307"); 
if(isset($_COOKIE['user_id'])) {
			$user = $_COOKIE['user_id'];
		}
		if(isset($_COOKIE['nm_na'])) {
			$user = $_COOKIE['nm_na'];
		}
		$movie = $_COOKIE['movie'];
		$seat2 = $_COOKIE['mn_seat'];
		print "이름 : ".$user."<br>";
		print "영화 : ".$movie."<br>";
		print "좌석 번호 : ".$seat2."<br>";
		$query = "insert into reservation_n values ('$user', '$movie', '$seat2')";
		$info = mysqli_query($d, $query);
		 }
	
?>