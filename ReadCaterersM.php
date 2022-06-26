<?php
$MID = $_POST['MID'];
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
$sql =  "SELECT CaID,Caname,TenureS,TenureE,BID FROM caterer";
$result = $conn->query($sql);

echo "<center>
<link href=\"MR.css\" type=\"text/css\" rel=\"stylesheet\">
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
<button class=\"siz2\" onclick=\"goBack()\">ManagerHome</button>

<script>
function goBack() {
  window.history.go(-2);
}
</script>
</h3>
</center>
</body>";



$conn->close();
?>