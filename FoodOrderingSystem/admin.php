<html>
<body>
<form action ="getdata.php" method="get">
<?php


$con = mysqli_connect("localhost","root","","foodorderingsystem");

$getuser = "select * from pending_order";
$username;
$result = mysqli_query($con,$getuser);

if(mysqli_num_rows($result) > 0)
{
	echo"<select name='cars' id='cars'>";

	while($row = mysqli_fetch_assoc($result))
	{
	
		echo "<br>";
		 $username = $row['username'];
	$a = " <option value='".$username."'>".$username."</option>";
//	$a ="<button id ='".$username."' onclick='myFunction(".$username.")'>".$username."</button>";
				

		echo $a;
	}
	
		
		
}
echo"<input type ='submit'>";

$result = mysqli_query($con,$getuser);

 echo"
 <script>
function myFunction(username) {
	
   //username.executeSql('select * from a');
  document.getElementById('demo').innerHTML=username.id;
 // alert(username.id);
  
}
</script>";

?>

</form>
</body>
</html>