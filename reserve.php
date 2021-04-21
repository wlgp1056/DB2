
<?php
for($i=1; $i<=12; $i++){
	if(isset($_POST[$i])) {
		$j = 999+$i;
		if(isset($_COOKIE['user_id'])) {
			$user = $_COOKIE['user_id'];
		}
		if(isset($_COOKIE['nm_na'])) {
			$user = $_COOKIE['nm_na'];
		}
		$d = mysqli_connect("localhost","root","vixx0524","movie", "3307"); 
		$query = "select * from movie where mvno=$j";
		$info = mysqli_query($d, $query);
		$row1 = mysqli_fetch_array($info);
		$mvname= $row1['mvname'];
		setcookie('movie', $mvname); 
		echo $_COOKIE['movie'];
		echo $mvname."<br>";
		echo $row1['director'];
		}	
}

	?>
<?php
 if (isset($_POST['submit'])) {
		 $seat = $_POST['chk_info'];
	 	 setcookie('mn_seat', $seat); 
	  }
	  else {
	 
	
		 ?>
		 <form method="post" action="complete.php">
		 <br>
		 <center><h2>좌석배치도</h2>
		 <table border=1>
		 <tr>
		 <td><input type="checkbox" name="chk_info" value="A1"></td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="A2"></td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="A3"></td><td>   </td>
		 <td>   </td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="A4"></td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="A5"></td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="A6"></td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="A7"></td><td>   </td>
		 <td>   </td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="A8"></td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="A9"></td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="A10"></td><td>   </td></tr>
		 <tr align='center'><td> A1 </td><td>   </td><td> A2 </td><td>   </td><td> A3 </td><td>   <td>   </td><td>   </td>   </td><td> A4  </td><td>   </td><td> A5  </td><td>   </td><td> A6 </td><td>   </td><td> A7 </td><td>   <td>   </td><td>   </td>   </td><td> A8 </td><td>   </td><td> A9 </td><td>   </td><td> A10 </td><td>   </td></tr>
		 <tr>
		 <td><input type="checkbox" name="chk_info" value="B1"></td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="B2"></td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="B3"></td><td>   </td>
		 <td>   </td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="B4"></td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="B5"></td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="B6"></td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="B7"></td><td>   </td>
		 <td>   </td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="B8"></td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="B9"></td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="B10"></td><td>   </td></tr>
		 <tr align='center'><td> B1 </td><td>   </td><td> B2 </td><td>   </td><td> B3 </td><td>   <td>   </td><td>   </td>   </td><td> B4 </td><td>   </td><td> B5 </td><td>   </td><td> B6 </td><td>   </td><td> B7 </td><td>   <td>   </td><td>   </td>   </td><td> B8 </td><td>   </td><td> B9 </td><td>   </td><td> B10 </td><td>   </td></tr>
		 <tr>
		 <td><input type="checkbox" name="chk_info" value="C1"></td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="C2"></td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="C3"></td><td>   </td>
		 <td>   </td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="C4"></td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="C5"></td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="C6"></td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="C7"></td><td>   </td>
		 <td>   </td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="C8"></td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="C9"></td><td>   </td>
		 <td><input type="checkbox" name="chk_info" value="C10"></td><td>   </td></tr>
		 <tr align='center'><td> C1 </td><td>   </td><td> C2 </td><td>   </td><td> C3 </td><td>   <td>   </td><td>   </td>   </td><td> C4 </td><td>   </td><td> C5 </td><td>   </td><td> C6 </td><td>   </td><td> C7 </td><td>   <td>   </td><td>   </td>   </td><td> C8 </td><td>   </td><td> C9 </td><td>   </td><td> C10 </td><td>   </td></tr>		 
		 <input type="submit" name="submit" value="발권하기">
		 </form>

		 <?php
	 } //else
	
?>