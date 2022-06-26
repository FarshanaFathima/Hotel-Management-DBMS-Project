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
$sql = "SELECT e.EID,e.Ename FROM employees e where e.MID=$MID ";
$result = $conn->query($sql);

echo "<center>
<link href=\"MR.css\" type=\"text/css\" rel=\"stylesheet\">
<table border='1'>
<tr>
<th>Employee ID</th>
<th>Employee Name</th>




</tr>";





while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['EID'] . "</td>";
echo "<td>" . $row['Ename'] . "</td>";




echo "</tr>";
}
echo "</table></center>

<body>
<center>
<h3>
<button class=\"siz2\" onclick=\"goBack()\">EmployeeHome</button>

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