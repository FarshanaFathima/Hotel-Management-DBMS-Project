
<!DOCTYPE html>
<html>
<head>
<title>RECEPTION HOME</title>
<link href="RH.css" type="text/css" rel="stylesheet">

<center>
<border>

<?php
$conn=mysqli_connect("localhost", "root", "","dbms") or die("Couldn't select database.");
mysqli_select_db($conn,"dbms") or die("Couldn't select database.");

$EID = $_POST['EID'];
$password = $_POST['password'];

$sql = "SELECT * FROM employees WHERE EID = '$EID' AND password = '$password' and designation in('Receptionist')";
$result = mysqli_query($conn,$sql) or die(mysqli_error());
$numrows = mysqli_num_rows($result);
if($numrows > 0)
   {
    #echo "<a href=s_room.php>ROOM DETAILS</a>";
	echo "<br>";
	echo "<form method=\"POST\" action=\"ReceptionRoom.php\"><h3>ROOM DETAILS   <input type=\"submit\" value=\"$EID\" name=\"EID\" class=\"sizes\"></h3> </form>";
	echo "<form method=\"POST\" action=\"ReceptionAmenities.php\"><h3>AMENITIES   <input type=\"submit\" value=\"$EID\" name=\"EID\" class=\"sizes\"></h3> </form>";
	echo "<form method=\"POST\" action=\"ReceptionCustomer.php\"><h3>CUSTOMER   <input type=\"submit\" value=\"$EID\" name=\"EID\" class=\"sizes\"></h3> </form>";
	echo "<form method=\"POST\" action=\"ReceptionHotel.php\"><h3>HOTEL   <input type=\"submit\" value=\"$EID\" name=\"EID\" class=\"sizes\"></h3> </form>";
	echo "<form method=\"POST\" action=\"ReceptionCaterer.php\"><h3>CATERER   <input type=\"submit\" value=\"$EID\" name=\"EID\" class=\"sizes\"></h3> </form>";
	
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