
<?php
	session_start(); 
 ?>
<?php require_once("includes/connection.php");?>
<?php include("includes/permission.php");?>


<?php
	require('layouts/header.php');

	if (isset($_GET['controller'])) {
		$controller = $_GET['controller'];
	} else {
		$controller = '';
	}

	switch ($controller) {
		case 'test':
			echo "trang test";
			break;
		
		default:
			require('pages/home.php');
			break;
	}

	require('layouts/footer.php'); ?>