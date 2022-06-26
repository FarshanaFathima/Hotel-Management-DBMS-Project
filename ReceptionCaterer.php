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
$sql = "SELECT c.CaID,c.Caname,c.TenureS,c.TenureE,c.BID FROM caterer c,manager m,employees e where m.BID=c.BID and m.MID=e.MID and e.EID=$EID";
$result = $conn->query($sql);
echo "<br><br><br><br><br><br>";
echo "<center>
<link href=\"RR.css\" type=\"text/css\" rel=\"stylesheet\">
<table border='1'>
<tr>
<th>Caterer ID</th>
<th>Caterer Name</th>
<th>Tenure Start</th>
<th>Tenure End</th>
<th>BID</th>

</tr>";





while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['CaID'] . "</td>";
echo "<td>" . $row['Caname'] . "</td>";
echo "<td>" . $row['TenureS'] . "</td>";
echo "<td>" . $row['TenureE'] . "</td>";
echo "<td>" . $row['BID'] . "</td>";


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