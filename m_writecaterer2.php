<?php

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

$sql = "INSERT INTO  caterer(CaID,Caname,TenureS,TenureE,BID) values('$CaID','$Caname','$TenureS','$TenureE','$BID')";
if ($conn->query($sql) === TRUE) {
    echo "created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>