<?php
include("conn.php");
if(isset($_GET['tid']))
{
	$tid = $_GET['tid'];
	$result = array();
	$getsecsq = mysqli_query($conne, "select * from object where topicid = '$tid' order by ord");	
	while($rows = mysqli_fetch_assoc($getsecsq))
	{
		array_push($result, $rows);
	}
	
}
echo json_encode($result);
?>

