<?php


$con = mysqli_connect("localhost","root","","foodorderingsystem");

$getuser = "select * from pending_order";
$username;
$result = mysqli_query($con,$getuser);

if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
	
		echo "<br>";
		 $username = $row['username'];
	
	$a ="<button id ='".$username."' onclick='myFunction(".$username.")'>".$username."</button>";
				

		echo $a;
	}
	
		
		
}


$result = mysqli_query($con,$getuser);
?>
 <script>
function myFunction(username) {
		
	var result="
	$getorder = 'select * from ;
	$username = '1';
	echo 'a';
	$result = mysqli_query($con,$getuser);
	";
		

	 
	document.write(result);
 // alert(document.getElementById(demo).innerHTML);
  alert(username.id);
 

}
</script>

