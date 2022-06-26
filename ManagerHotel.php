<?php

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
$sql = "SELECT BID,Bname,Phone_no FROM hotels";
$result = $conn->query($sql);

echo "<center>
<link href=\"MR.css\" type=\"text/css\" rel=\"stylesheet\">
<table border='1'>
<tr>
<th>BID</th>
<th>Branch</th>
<th>Phone_no</th>

</tr>";





while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['BID'] . "</td>";
echo "<td>" . $row['Bname'] . "</td>";
echo "<td>" . $row['Phone_no'] . "</td>";

echo "</tr>";
}
echo "</table></center>

<body>
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