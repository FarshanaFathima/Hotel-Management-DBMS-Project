<!DOCTYPE html>
<html>
<head>
<title>ManagerHome</title>
<link href="MH.css" type="text/css" rel="stylesheet">

<center>
<border>

<?php
$conn=mysqli_connect("localhost", "root", "","dbms") or die("Couldn't select database.");
mysqli_select_db($conn,"dbms") or die("Couldn't select database.");

$MID = $_POST['MID'];


$sql = "SELECT * FROM manager WHERE MID = '$MID'  ";
$result = mysqli_query($conn,$sql) or die(mysqli_error());
$numrows = mysqli_num_rows($result);
if($numrows > 0)
   {
    #echo "<a href=s_room.php>ROOM DETAILS</a>";
	echo "<br>";
	echo "<form method=\"POST\" action=\"ReadCustomerM.php\"><h3>DISPLAY CUSTOMERS  <input type=\"submit\" value=\"$MID\" name=\"MID\" class=\"sizes\"></h3> </form>";
	echo "<form method=\"POST\" action=\"m_writecust.php\"><h3>WRITE CUSTOMER <input type=\"submit\" value=\"$MID\" name=\"MID\" class=\"sizes\"></h3> </form>";
	echo "<form method=\"POST\" action=\"m_removecust.php\"><h3>DELETE CUSTOMER <input type=\"submit\" value=\"$MID\" name=\"MID\" class=\"sizes\"></h3> </form>";
	echo "<body>
<center>
<h3>
<button class=\"siz2\" onclick=\"goBack()\">ManagerHome</button>

<script>
function goBack() {
  window.history.go(-1);
}
</script>
</h3>
</center>
</body>";
	#echo "<a href=s_amenities.php>AMENITIES DETAILS</a>";
	
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