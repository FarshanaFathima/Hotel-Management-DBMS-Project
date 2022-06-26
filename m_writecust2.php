<?php

$BID=$_POST['BID'];
$roomno=$_POST['roomno'];
$Cname= $_POST['Cname'];
$phone= $_POST['phone'];

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

$sql = "INSERT INTO  customer(Cname,Phone_no,Room_no,BID) values('$Cname','$phone','$roomno','$BID')";
if ($conn->query($sql) === TRUE) {
    echo "<center>created successfully</center><body>
<center>
<h3>
<button class=\"siz2\" onclick=\"goBack()\">CustomerHome</button>

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