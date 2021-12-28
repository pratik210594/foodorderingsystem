<html>
<body>
<head>

 <meta charset="utf-8">
 <meta content="width=device-width, initial-scale=1.0" name="viewport">

 <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
 <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
 <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
 <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
 <link href="assets/css/style.css" rel="stylesheet"><!-- Main Template CSS-->
 
 
 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>

<div class="container " data-aos="fade-up">
<!-- header-->
	  <div id="nav-placeholder">
		<script>
		$(function(){
		  $("#nav-placeholder").load("nav.html");
		});
		</script>
	  </div>
		<br><br><br><br>
<!-- end of header-->

<div class = "row">
		<!-- Item listing -->
		<div class = "column col-lg-6 col-md-6">
		hi
		
		
		




<?php

						session_start();
						$customer = $_GET['usertype'];
						$username = $_GET['username'];
						//echo $customer;
						//echo "<script>localStorage.setItem('username',".$customer.")</script>";
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
						
						<div class = 'row'>
							
							<!-- Food Photo -->
							<div class ='column col-lg-3 col-md-6'>
									<div class='testimonial-item'>
									<img src ='assets/img/food_menu/pasta.jpg' class='testimonial-item' style='width:90px; border-radius:50%; border: 4px solid #fff;margin: 0 auto;'>
									</div>
							</div>
							<!-- End Food Photo -->
			
							<!-- Food name and quantity -->
							<div class = 'column col-lg-9 col-md-6'>
								<input type='number' id='itemcount' name='count".$item."' style ='width :5cm' step='1' value ='0' min='0' max='100'><br>
							</div>
							
							<!-- End Food name and quantity -->
						</div>
						";

							}
						}
						}
?>
<input type ="submit" value="order">

		</div>


<!--- Billing Detail -->
		
		<div class = "column col-lg-6 col-md-6">
		hi
		</div>
		
		
<!--- Billing Detail ends --->
</div>
</form>
</div>
</body>
</html>
