<?php
$EID = $_POST['EID'];
#echo "$MID";
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
$sql = "SELECT r.BID, r.Room_no,r.Room_type,r.Rate FROM rooms r,manager m,employees e where e.MID=m.MID and e.EID='$EID' and r.BID=m.BID";
$result = $conn->query($sql);
echo "<br><br><br><br><br><br>";
echo "<center>
<link href=\"SR.css\" type=\"text/css\" rel=\"stylesheet\">
<table border='1'>
<tr>
<th>BID</th>
<th>Room No</th>
<th>Room type</th>
<th>Rate</th>
</tr>";





while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['BID'] . "</td>";
echo "<td>" . $row['Room_no'] . "</td>";
echo "<td>" . $row['Room_type'] . "</td>";
echo "<td>" . $row['Rate'] . "</td>";
echo "</tr>";
}
echo "</table></center>
<body>
<center>
<h3>
<button class=\"siz2\" onclick=\"goBack()\">StaffHome</button>

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