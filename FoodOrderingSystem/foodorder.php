<html>
<body>

<?php

session_start();
$customer = $_GET['usertype'];
$username = $_GET['username'];
//echo $customer;

$_SESSION['usertype'] = $customer;
$_SESSION['username'] = $username;
//echo $session['usertype'];
	if(!strcmp($customer,"Admin"))
	{
		if(strcmp($username, "Pratik"))
		{
			//echo "Wrong login credentials for admin<br>";
			echo '<script>alert("Wrong login credentials for admin	")</script>';
  
			require 'index.php';
			exit();
		}
		else
		{
			require 'admin.php';
			exit();
		}
	}
	else{
	?>
	
	<form action="orderplaced.php" method="get">
	<?php
//$admin = $_GET[];
$con = mysqli_connect("localhost","root","","foodorderingsystem");

$getmenu = "select Item from menu";

$result = mysqli_query($con,$getmenu);

$count = "1";
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		//++$count;
		echo $row['Item'];
		$item = $row['Item'];
		$item = str_replace(' ', '', $item);
echo"
<html>
<body>

 <input type='number' id='itemcount' name='count".$item."' style ='width :1cm' step='1' value ='0'><br>
</body>
</html>
";

	}
}
}
?>
<input type ="submit" value="order">
</form>
</body>
</html>
