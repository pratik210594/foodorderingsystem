<?php 
//echo "Reached here:";
session_start();
$con = mysqli_connect("localhost","root","","foodorderingsystem");

$getmenu = "select Item from menu";

$result = mysqli_query($con,$getmenu);
//echo "here".$_SESSION['username'];
$createorder = "create table ".$_SESSION['username']."(item varchar(20), item_count bigint(5)) " ;		//creating table ofuser order
$resultcreateorder = mysqli_query($con, $createorder);
echo $createorder;



//$count = "1";
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$item =  $row['Item'];
		$item = str_replace(' ', '', $item);
		$_SESSION['Item'] =  $_GET['count'.$item];
		if($_SESSION['Item'] == 1){
		echo  $item." ".$_SESSION['Item']."<br>";
		
		$insertorder ="insert into ".$_SESSION['username']." values('".$item."', ".$_SESSION['Item'].") ";
		
		$resultinsertorder = mysqli_query($con,$insertorder);
	//	if($resultinsertorder)
		//	mysqli_error($con);
		//echo $insertorder;
		$resultinsertorder = mysqli_query($con,$insertorder);
		$insertusername ="insert into pending_order (username)values('"."eee"."') ";
		echo $insertusername;
		
		$resultinsertusername = mysqli_query($con, $insertusername);
	//	
	}
	
	}
}

?>