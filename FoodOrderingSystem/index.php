<?php
//session_start();
?>

<html>
<body>
<form action = "foodorder.php" method ="get">
Username: <input type="text" name="username"><br>
Mobile No.<input type="text" name="mobileno"><br>
Customer: <input type="radio" name="usertype" value="Customer"><br>
Admin: <input type ="radio" name="usertype" value ="Admin"><br>
<input type="submit" value="Login">
</body>
</html>