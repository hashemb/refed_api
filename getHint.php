<?php

include("conn.php");
if(isset($_GET['oid']))
{
	$oid = $_GET['oid'];
	$result = array();
	$getsecsq = mysqli_query($conne, "select * from object where id = '$oid' order by ord");
	while($rows = mysqli_fetch_assoc($getsecsq))
	{
        array_push($result, $rows['hint']);
        array_push($result, $rows['hintpic']);
        
	}
	
}

echo json_encode($result);

?>