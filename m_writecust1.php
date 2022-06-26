<?php
$Roomno= $_POST['roomno'];
$Cname= $_POST['Cname'];
$phone= $_POST['phone'];


$BID=$_POST['BID'];


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
    echo "created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>