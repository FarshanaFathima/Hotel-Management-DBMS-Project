<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "dbms";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM caterer";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2

$result2 = mysqli_query($connect, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}
?>




<!DOCTYPE html>
<html>
<body>

		
<?php
$conn=mysqli_connect("localhost", "root", "","dbms") or die("Couldn't select database.");
mysqli_select_db($conn,"dbms") or die("Couldn't select database.");

#$MID = $_POST['MID'];
#echo "$MID";
#$password = $_POST['password'];

$sql = "SELECT * FROM caterer";
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
	

	 echo"<form method=\"POST\" action=\"m_removecat.php\"<h3>SELECT THE NAME OF CATERER YOU WANT TO DELETE<br><select name=Caname ></h3>
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



























<!--<form action="m_writeemp1.php" method="post">
 Employee ID<br>
 <input type="integer" name="EID">
 <br>
 Employee Name<br>
 <input type="text " name="Ename">
 <br>
 Designation<br>
 <input type="text " name="Desig">
 <br>
 

 <br>
 Manager ID<br>
 <form action="m_writeemp2.php" method="post">
 <select name="MID">
 <option value='1'>10</option>
 <option value='2'>20</option>
 <option value='3'>30</option>
 </select>
  <input type="submit" value="Submit">
 </form>
 <br>
 <br><br>
 
 
</form>-->


		


</body>
</html>