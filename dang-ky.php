
<?php require_once("includes/connection.php"); ?>
<?php
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$username = $_POST["username"];
		$password = $_POST["pass"];
		$name = $_POST["name"];

		$email = $_POST["email"];
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($username == "" || $password == "" || $name == "" || $email == "") {
			echo "bạn vui lòng nhập đầy đủ thông tin";
		}else{
			  
			$sql = "INSERT INTO users(username, password, fullname, email, createdate ) VALUES ( '$username', '$password', '$name', '$email', now())";
			// thực thi câu $sql với biến conn lấy từ file connection.php
			mysqli_query($conn,$sql);
			echo "chúc mừng bạn đã đăng ký thành công";
		}
	}

?>
<div  style="width:1350px; height: 700px; border-color: blue; color: black; border: 1px; text-align: center;float: center; padding-top: 100px; background-image: url(https://a.ftscrt.com/static/images/splash/Sunrise_BG_01.jpg);">
	<form action="dang-ky.php" method="post">
		<h3>Register</h3>
			<label> Username :</label>
			<input type="text" id="username" name="username" size="25">
			<br>
			<br>
			<label>Password :</label>
				<input type="password" id="pass" name="pass" size="25">
			<br>
			<br>
				<label>Name:   </label>
				<input type="text" id="name" name="name" size="25">
				<br>
				<br>
		<label>Email :  </label>
				<input style="padding-left: 10px;" type="text" id="email" name="email" size="25">
				<br>
				<br>
			<input type="submit" name="btn_submit" value="Dang ky"></td>
		
		
	</form>

</div>
