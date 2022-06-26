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
$sql = "SELECT c.CID,c.Cname,c.Phone_no,c.Room_no,c.BID FROM customer c,manager m,employees e where c.BID=m.BID and m.MID=e.MID and e.EID=$EID";
$result = $conn->query($sql);
echo "<br><br><br><br><br><br>";
echo "<center>
<link href=\"RR.css\" type=\"text/css\" rel=\"stylesheet\">
<table border='1'>
<tr>
<th>Customer ID</th>
<th>Customer Name</th>
<th>Phone_no</th>
<th>Room_no</th>
<th>Branch ID</th>



</tr>";





while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['CID'] . "</td>";
echo "<td>" . $row['Cname'] . "</td>";
echo "<td>" . $row['Phone_no'] . "</td>";
echo "<td>" . $row['Room_no'] . "</td>";
echo "<td>" . $row['BID'] . "</td>";




echo "</tr>";
}
echo "</table></center>
<body>
<center>
<h3>
<button class=\"siz2\" onclick=\"goBack()\">CustomerHome</button>

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