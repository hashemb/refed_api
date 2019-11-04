<?php
include("conn.php");
if(isset($_GET['lang']))
{
	$lang = $_GET['lang'];
	$result = array();
	$getmodsq = mysqli_query($conne, "select * from module where lang = '$lang'");	
	while($rows = mysqli_fetch_assoc($getmodsq))
	{
		array_push($result, $rows);
	}
	
}
else
{
	$getmodsq = mysqli_query($conne, "select * from module");	
	$result = array();
	while($rows = mysqli_fetch_assoc($getmodsq))
	{
		array_push($result, $rows);
	}
		
	
		
}
echo json_encode($result);
?>

