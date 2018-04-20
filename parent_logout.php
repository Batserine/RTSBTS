<?php 
session_start();
session_destroy();
echo "<script>
	alert('user logged out');
	window.location.href='parent_login.php';
	</script>
	";

exit();


 ?>