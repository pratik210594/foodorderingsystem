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
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="assets/css/style.css" rel="stylesheet"><!-- Main Template CSS-->
 
 
 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<style>
.checked {
  color: orange;
}
</style>
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
		<center>MENU</center>
		
		
		




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

						$getmenu = "select Item,Price from menu";

						$result = mysqli_query($con,$getmenu);

						$count = "1";
						if(mysqli_num_rows($result) > 0)
						{
							while($row = mysqli_fetch_assoc($result))
							{
								//++$count;
								$item = $row['Item'];
								$item_copy = $item;
								echo "<center>";
								echo "<div class = 'card'>";
								echo "<div class = 'card-body'>";
										echo "<div class = 'row'> 
								
									<!-- Food Photo -->
												<div class ='column col-lg-4 col-md-6'>
												
												<img src ='assets/img/food_menu/pasta.jpg' class='testimonial-item' style='width:100px; height:90% ; border: 1px solid #fff;margin: 0 auto;'>
												
											 </div>
									<!-- End Food Photo -->
										";
										
										$item = str_replace(' ', '', $item);
										echo "<div class ='column col-lg-5 col-md-6'>";
										echo "<label id=".$item."_name> ".$item_copy." </label>";
										echo "<span class='fa fa-star checked'></span>
												<span class='fa fa-star checked'></span>
												<span class='fa fa-star checked'></span>
												<span class='fa fa-star'></span>
												<span class='fa fa-star'></span>";
										//echo "</div>";
										//echo "<div class = 'column col-lg-4 col-md-6'>";
										echo "<i class='fa fa-rupee'><label id=".$item."_price style='padding-left:1p'>".$row['Price']." </label></i>";
										//echo "</div>";
										//echo "</div>";
								
								$item = str_replace(' ', '', $item);
								
						echo"
						
								
									
									
					
									<!-- Food name and quantity -->
									
										<input type='number' class='form-control' id=".$item." oninput='myFunction(".$item.")' name='count".$item."' style ='width:30%' background:rgb(239, 79, 95); step='1' value ='0' min='0' max='100'><br>
									
									
									<!-- End Food name and quantity -->
								</div>
							</div>
							</div> 
							</div> 
						";

							}
						}
						}
?>
  <center> <input type ="submit"  class="btn-login" value="order"></center>

		</div>


<!--- Billing Detail -->
		
		<div class = "column col-lg-6 col-md-6">
		<center>BILL</center>
		<p id="demo"></p>
		</div>
		
		
<!--- Billing Detail ends --->

 <script>
	function myFunction(element) {
	  
	  var item_count = document.getElementById(element.id).value;
	  var item_price = document.getElementById(element.id+"_price").innerHTML;
	  var total = 0;
	  if(document.getElementById(element.id+"label")=== null)
	  {
		 // alert(element.id+"_price");
		 var labeltag = document.createElement("LABEL");						//Item Name
		 labeltag.id = element.id+"label";
		 labeltag.innerHTML = element.id ;

		 	
		 var demo = document.getElementById("demo");
		 demo.appendChild(labeltag);

		 var itemcount_element = document.createElement("LABEL");				//Item Quantity
		 itemcount_element.id = element.id+"count";
		 itemcount_element.innerHTML = ": "+item_count;
		 labeltag.appendChild(itemcount_element);
						 
		 var itemprice_element = document.createElement("LABEL");
		 itemprice_element.id = element.id+"price";								// Item Price
		 itemprice_element.innerHTML = "X "+item_price;
		 //total = int(total + item_price);
		 itemcount_element.appendChild(itemprice_element);
		 
		 var lineBreak = document.createElement("BR");							//New Line
		 demo.appendChild(lineBreak);
		 
		  var total_element = document.createElement("LABEL");
		 total_element.id = "Total";											// Item Price
		 total_element.innerHTML = total;
		// demo.appendChild(total_element);
		
	  }
	  else{
		 //alert(itemcount);
		 var change_count = document.getElementById(element.id+"count");
		 change_count.innerHTML = ": "+item_count;
		 //labeltag.appendChild(itemcount_element);
		 
		 var itemprice_element = document.createElement("LABEL");
		 itemprice_element.id = element.id+"price";
		 itemprice_element.innerHTML = "X "+item_price;
		 change_count.appendChild(itemprice_element);
	  }
	  
	  
	  //alert(element.id);
	 // document.getElementById("demo").innerHTML = element.id +" " + x;
	}
</script>
</div>
</form>
</div>
</body>
</html>
