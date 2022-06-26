
<!DOCTYPE html>
<html>
<head>
<link href="MH.css" type="text/css" rel="stylesheet">
<?php
$conn=mysqli_connect("localhost", "root", "","dbms") or die("Couldn't select database.");
mysqli_select_db($conn,"dbms") or die("Couldn't select database.");

$MID = $_POST['MID'];
$password = $_POST['password'];

$sql = "SELECT * FROM manager WHERE MID = '$MID' AND password = '$password' ";
$result = mysqli_query($conn,$sql) or die(mysqli_error());
$numrows = mysqli_num_rows($result);
if($numrows > 0)
   {
    #echo "<a href=s_room.php>ROOM DETAILS</a>";
	echo "<br><br><br><br><br><br><br><br>";
	echo "<center><border class=\"twe\">";
	echo "<form method=\"POST\" action=\"ManagerRoom.php\"><h3>ROOM DETAILS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"submit\" value=\"$MID\" name=\"MID\" class=\"sizes\"></h3> </form>";
	echo "<form method=\"POST\" action=\"ManagerCaterers.php\"><h3>CATERER DETAILS&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"submit\" value=\"$MID\"name=\"MID\" class=\"sizes\"></h3></form>";
   echo "<form method=\"POST\" action=\"ManagerHotel.php\"><h3>HOTEL DETAILS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"submit\" value=\"$MID\" name=\"MID\" class=\"sizes\"></h3> </form>";
	echo "<form method=\"POST\" action=\"ManagerEmployee.php\"><h3>EMPLOYEE DETAILS&nbsp;<input type=\"submit\" value=\"$MID\"name=\"MID\" class=\"sizes\"></h3> </form>";
	echo "<form method=\"POST\" action=\"ManagerAmenities.php\"><h3>AMENITIES DETAILS&nbsp;<input type=\"submit\" value=\"$MID\"name=\"MID\" class=\"sizes\"></h3> </form>";
	echo "<form method=\"POST\" action=\"ManagerCustomer.php\"><h3>CUSTOMER DETAILS&nbsp;<input type=\"submit\" value=\"$MID\" name=\"MID\"class=\"sizes\"></h3> </form>";
	echo "</border></center>";
	#echo "<a href=s_amenities.php>AMENITIES DETAILS</a>";
	
   }
else
   {
    echo 'Access Denied';
   }
   ?>
   
</head>
<body>
<center>
<h3>
<button class="siz2" onclick="goBack()">HomePage</button>

<script>
function goBack() {
  window.history.go(-2);
}
</script>
</h3>
</center>
</body>
</html>