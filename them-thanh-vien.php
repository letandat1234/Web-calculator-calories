<?php
	session_start(); 
 ?>
<?php require_once("includes/connection.php");?>
<?php include("includes/permission.php");?>
<?php include ("layouts/header.php"); ?>
<?php
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$username = $_POST["username"];
		$password = $_POST["password"];
		$name = $_POST["fullname"];
		$email = $_POST["email"];
		$permission = $_POST["permission"];
		$is_block = 0;
		if (isset($_POST["is_block"])) {
			$is_block = $_POST["is_block"];
		}

		if ($username == "" || $password == "" || $name == "" || $email == "" || $permission == "") {
			echo "Bạn cần điền đầy đủ thông tin !";
		}else{
			// Viết câu lệnh thêm thông tin người dùng
			$sql = "INSERT INTO users (username, password, fullname, email, permision, is_block, createdate) VALUES ('$username', '$password', '$name', '$email', '$permission', '$is_block', now())";
			// thực thi câu $sql với biến conn lấy từ file connection.php
			$result = mysqli_query($conn,$sql);
			if (!$result) {
				echo "Người dùng đã tồn tại vui lòng không trùng username và email !";
			}else{
				header('Location: quan-ly-thanh-vien.php');
			}
			
		}
		
	}
?>

	<form  class="content-wrapper" style="min-height: 365px; padding-left: 15px;"action="them-thanh-vien.php" method="post">
		<table>
			<tr>
				<td colspan="2">
					<h3>Create Account</h3>
				</td>
			</tr>	
			<tr>
				<td nowrap="nowrap">Username :</td>
				<td><input type="text" name="username" id="username" value="" ></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Password :</td>
				<td><input type="password" name="password" id="password" value="" ></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Name :</td>
				<td><input type="text" name="fullname" id="fullname" value="" ></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Email :</td>
				<td><input type="text" id="email" name="email" value=""></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Role :</td>
				<td>
					<select id="permission" name="permission">
						<option value="0">User</option>
						<option value="1">Admin </option>
					
					</select>
				</td>
			</tr>
			<tr>
				<td nowrap="nowrap">Block </td>
				<td><input type="checkbox" id="is_block" name="is_block" value="1" ></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Create account"></td>
			</tr>

		</table>
		
	</form>
<?php include "layouts/footer.php" ?>