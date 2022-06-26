<?php
$EID = $_POST['EID'];
$servername="localhost";
$username="root";
$password="";
$dbname="dbms";
//create connection
$conn= new mysqli($servername,$username,$password,$dbname);

//check connection

if($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}
//echo"connected successfully";
$sql = "SELECT a.BID,a.amenity FROM amenities a,manager m,employees e where e.MID=m.MID and e.EID=$EID and a.BID=m.BID";
$result = $conn->query($sql);
echo "<br><br><br><br><br><br>";
echo "
<center>
<link href=\"SR.css\" type=\"text/css\" rel=\"stylesheet\"><table border='1'>
		<tr>
		<th>Branch ID</th>
		<th>amenity </th>
		</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['BID'] . "</td>";
echo "<br>";
echo "<td>" . $row['amenity'] . "</td>";

echo "</tr>";
}
echo "</table></center>
<body>
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



$conn->close();
?>