<?php

$Caname= $_POST['Caname'];



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

$sql = "DELETE FROM  CUSTOMER WHERE Cname='$Caname'";

if ($conn->query($sql) === TRUE) {
    echo " YOUR RECORD HAS BEEN DELETED successfully
	<body>
<center>
<h3>
<button class=\"siz2\" onclick=\"goBack()\">ReceptionHome</button>

<script>
function goBack() {
  window.history.go(-2);
}
</script>
</h3>
</center>
</body>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>