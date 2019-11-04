<?php
include("conn.php");
if(isset($_GET['mod']))
{
	$modid = $_GET['mod'];
	$result = array();
	$getsecsq = mysqli_query($conne, "select * from section where modid = '$modid' order by ord");	
	while($rows = mysqli_fetch_assoc($getsecsq))
	{
		array_push($result, $rows);
	}
	
}
echo json_encode($result);
?>

