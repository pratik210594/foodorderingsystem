

<html>
<head>


 <meta charset="utf-8">
 <meta content="width=device-width, initial-scale=1.0" name="viewport">

 <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
 <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
 <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
 <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
 <link href="assets/css/style.css" rel="stylesheet"><!-- Main Template CSS-->
 
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
 <script src="assets/js/session_login.js"></script>
 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>


  <!-- header-->
	  <div id="nav-placeholder">
		<script>
		$(function(){
		  $("#nav-placeholder").load("nav.html");
		});
		</script>
	  </div>
		
<!-- end of header-->

<form action = "foodorder.php" method ="get">
<br><br><br><br>
 <div class="container text-center text-md-left" data-aos="fade-up">
	<div class= "card-header-tabs" ng-app="ngblurApp" ng-controller="ngblurCtrl">
    	<label class ="col-form-label-lg">Username: </label><input type="text" id="takeinput" name="username" ng-model="username" ng-blur="getdetails()"><br>
			
		<label class ="col-form-label-lg">Mobile No:</label><input type="text" name="mobileno"><br>
		Customer: <input type="radio" name="usertype" value="Customer"><br>
		Admin: <input type ="radio" name="usertype" value ="Admin"><br>
		
		<input type="submit" class="btn-login" value="Login">
	
<p id="name">{{result}}</p>
	
		<script type="text/javascript">

			//	var ProductName = sessionStorage.getItem('ProductName');
				document.getElementById("name").innerHTML = ProductName;
		</script>

	</div>
</div>

</body>



<script type="text/javascript">

var app = angular.module('ngblurApp', []);

app.controller('ngblurCtrl', function ($scope) {

$scope.getdetails = function () {
var ProductName = document.getElementById("takeinput").value;
//sessionStorage.setItem('ProductName', ProductName);
$scope.result = "You Came Out of Control";

}

});

</script>
</html>