<?php
include("conn.php");
if(isset($_GET['secid']))
{
	$secid = $_GET['secid'];
	$result = array();
	$gettopsq = mysqli_query($conne, "select * from topic where secid = '$secid' order by ord");	
	while($rows = mysqli_fetch_assoc($gettopsq))
	{
		array_push($result, $rows);
	}
	
}
echo json_encode($result);
?>

