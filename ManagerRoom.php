<?php
$MID = $_POST['MID'];
echo "$MID";
echo "<center> <h1 color:red; >Rooms in Hotel Managed By You:</h1> <br></center>";
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
$sql = "SELECT r.BID, r.Room_no,r.Room_type,r.Rate FROM rooms r,manager m where m.BID=r.BID and m.MID=$MID";
$result = $conn->query($sql);

echo "<center>
<link href=\"MR.css\" type=\"text/css\" rel=\"stylesheet\">
<table border='1' class=\"sty\">
<tr>
<th>BID</th>
<th>Room No</th>
<th>Room type</th>
<th>Rate</th>
</tr>";






while($row = mysqli_fetch_array($result))
{
echo "<center>";
echo "<tr>";
echo "<td>" . $row['BID'] . "</td>";
echo "<td>" . $row['Room_no'] . "</td>";
echo "<td>" . $row['Room_type'] . "</td>";
echo "<td>" . $row['Rate'] . "</td>";
echo "</tr>";

}

echo "</table>";
echo "<center>";
echo "
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



$conn->close();
?>