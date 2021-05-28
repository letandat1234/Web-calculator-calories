<?php
session_start();

?>

<head>

  <title> ✈ Travel Blog Website </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>

  </style>
</head>
<?php 
//Gọi file connection.php 
require_once("includes/connection.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
if (isset($_POST["btn_submit"])) {
	// lấy thông tin người dùng
	$username = $_POST["username"];
	$password = $_POST["password"];
		
	//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
	//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
	$username = strip_tags($username);
	$username = addslashes($username);
	$password = strip_tags($password);
	$password = addslashes($password);

	if ($username == "" || $password =="") {
		echo "username hoặc password bạn không được để trống!";
	}else{
		$sql = "select * from users where username = '$username' and password = '$password' ";
		$query = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($query);
		if ($num_rows ==0) {
			echo "tên đăng nhập hoặc mật khẩu không đúng !";
		}else  {
			// Lấy ra thông tin người dùng và lưu vào session
			while ( $data = mysqli_fetch_array($query) ) {
	    		$_SESSION["user_id"] = $data["id"];
				$_SESSION['username'] = $data["username"];
				$_SESSION["email"] = $data["email"];
				$_SESSION["fullname"] = $data["fullname"];
				$_SESSION["is_block"] = $data["is_block"];
				$_SESSION["permision"] = $data["permision"];
	    	}
			
                // Thực thi hành động sau khi lưu thông tin vào session
                //  chuyển hướng đến trang web index.php
			header('Location: admin/index.php');
		}
	}
}
?>
<div  style="width:1350px; height: 700px; border-color: blue; color: black; border: 1px; text-align: center;float: center; padding-top: 100px; background-image: url(https://a.ftscrt.com/static/images/splash/Sunrise_BG_01.jpg);">
	<form method="POST" action="dang-nhap.php">
	<fieldset>
	    <h3>Login</h3>
	    	
	    		
	    			<LABEL >Username </LABEL>
	    			<input type="text" name="username" size="25">
	    		
	    	<br>
	    	<br>
	    		<label>Password</label>
<input type="password" name="password" size="25">
	    		
	    		<br>
	    		<br>
	    	 <button type="submit" name="btn_submit" value="Đăng nhập"> LOGIN</button>
	    		
	    		
	    
 
		 
			
  </fieldset>

  </form>
<div style="">
	<a href="http://localhost/calo-calc/calo-calc/dang-ky.php"><input type="submit" name="btn_submit"  value="Dang ky"></a>
</div>
	
</div>





