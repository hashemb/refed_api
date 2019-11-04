<?php
include('conn.php');

	$username = $_GET['un_signup'];
	$password = $_GET['pw_signup'];	

	$checkq = "select id from user where un = '$username';";
	//echo $checkq;
	$checkresult = mysqli_query($conne, $checkq);
	$num = mysqli_num_rows($checkresult);
	if( $num > 0 ) { $check['success'] = false; $check['id'] = null; echo json_encode($check); }
	else {
	$sql = "INSERT INTO user VALUES (NULL, '$username', '$password');";
	if(!$result=mysqli_query($conne, $sql)) echo mysqli_error($con);
	else { $check['success'] = true; $check['id'] = mysqli_insert_id($conne); };
	echo json_encode($check);
	mysqli_close($conne);
	}
?>