




<!DOCTYPE html>
<html>
<head>
<link href=\"RR.css\" type=\"text/css\" rel=\"stylesheet\">
</head>
<body>

		
<?php
$conn=mysqli_connect("localhost", "root", "","dbms") or die("Couldn't select database.");
mysqli_select_db($conn,"dbms") or die("Couldn't select database.");

#$MID = $_POST['MID'];
#echo "$MID";
#$password = $_POST['password'];
$EID=$_POST['EID'];
$sql ="SELECT * FROM customer c,employees e,manager m where e.EID='$EID' and e.MID=m.MID and m.BID=c.BID ";
$result = mysqli_query($conn,$sql) or die(mysqli_error());
$result1 = mysqli_query($conn, $sql);
$numrows = mysqli_num_rows($result);

$result2 = mysqli_query($conn, $sql);

$options ="";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
	
}
if($numrows > 0)
   {
    #echo "<a href=s_room.php>ROOM DETAILS</a>";
	echo "<br>";
	 echo"<form method=\"POST\" action=\"r_removecust1.php\"<h3>SELECT THE NAME OF CUSTOMER YOU WANT TO DELETE<br><select name=Caname ></h3>
            <?php echo $options;
				?>
				
			<input type=\"submit\" value=\"Submit\">	
        </select></form>";
     }
else
   {
    echo 'Access Denied';
   }
   ?>
</body>
</html>