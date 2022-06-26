<?php

$MID=$_POST['MID'];



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

$sql ="INSERT INTO  employees(EID,Ename,Designation,MID,password) values('$EID','$Ename','$Design','$MID','$pass')";

if ($conn->query($sql) === TRUE) {
    echo "created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>