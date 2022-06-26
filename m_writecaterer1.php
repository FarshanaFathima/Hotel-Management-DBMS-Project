<?php
$CaID= $_POST['CaID'];
$Caname= $_POST['Caname'];
$TenureS= $_POST['TenureS'];

$TenureE=$_POST['TenureE'];
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
    echo "created successfully
	<body>
<h3>
<button class=\"siz2\" onclick=\"goBack()\">CatererPage</button>

<script>
function goBack() {
  window.history.go(-2);
}
</script>
</h3>
</body>
	";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>