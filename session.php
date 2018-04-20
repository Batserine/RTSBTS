<?php
	session_start();
	if(!isset($_SESSION["username"])){
		echo "<script>
		window.location.href='parent_login.php';
		</script>
		";
	}else{
		$username = $_SESSION["username"];
	}
?>