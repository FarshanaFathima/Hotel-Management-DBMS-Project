<!DOCTYPE html>
<html>
<title>ReceptionCaterer</title>
<link href="RH.css" type="text/css" rel="stylesheet">

<center>
<border>

<?php
$conn=mysqli_connect("localhost", "root", "","dbms") or die("Couldn't select database.");
mysqli_select_db($conn,"dbms") or die("Couldn't select database.");

$EID = $_POST['EID'];


$sql = "SELECT * FROM employees WHERE EID = '$EID'  ";
$result = mysqli_query($conn,$sql) or die(mysqli_error());
$numrows = mysqli_num_rows($result);
if($numrows > 0)
   {
    #echo "<a href=ReceptionRoom.php>ROOM DETAILS</a>";
	echo "<br>";
	echo "<form method=\"POST\" action=\"ReadCustomerR.php\"><h3>DISPLAY CUSTOMERS  <input type=\"submit\" value=\"$EID\" name=\"EID\" class=\"sizes\"></h3> </form>";
	echo "<form method=\"POST\" action=\"WriteCustomerR.php\"><h3>WRITE CUSTOMER <input type=\"submit\" value=\"$EID\" name=\"EID\" class=\"sizes\"></h3> </form>";
	echo "<form method=\"POST\" action=\"r_removecust.php\"><h3>DELETE CUSTOMER <input type=\"submit\" value=\"$EID\" name=\"EID\" class=\"sizes\"></h3> </form>";
	echo "<body>
<center>
<h3>
<button class=\"siz2\" onclick=\"goBack()\">ReceptionHome</button>

<script>
function goBack() {
  window.history.go(-1);
}
</script>
</h3>
</center>
</body>";
	
	#echo "<a href=ReceptionAmenities.php>AMENITIES DETAILS</a>";
	
   }
else
   {
    echo 'Access Denied';
   }
   ?>
  
</border>
</center>
</head>
<body>
</body>
</html>