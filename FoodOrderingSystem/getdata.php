<html>
<body>

<?php
$q = $_GET['cars'];





//echo $q;
$con = mysqli_connect('localhost','root','','foodorderingsystem');

$sql="SELECT * FROM ".$q."";
//echo $sql;
$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result) > 0)
{

	while($row = mysqli_fetch_array($result)) {
  
		echo $row['item'];
	}
  }
?>
</body>
</html>