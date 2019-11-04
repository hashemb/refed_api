<?php
include("conn.php");
$un = $_GET['un_login'];
$pw = $_GET['pw_login'];
$sqlogin = mysqli_query($conne, "select * from user where un like '$un' AND pw like '$pw'");
$rows = mysqli_num_rows($sqlogin);
$arr = mysqli_fetch_array($sqlogin);

$id = $arr['id'];
if($rows > 0 ){ $check['success'] = true; $check['id'] = $id; }
else { $check['success'] = false; $check['id'] = null; }
echo json_encode($check);
mysqli_close($conne);

?>