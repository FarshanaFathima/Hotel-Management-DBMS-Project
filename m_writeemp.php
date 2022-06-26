<!DOCTYPE html>
<html>
<body>

<?php
$conn=mysqli_connect("localhost", "root", "","dbms") or die("Couldn't select database.");
mysqli_select_db($conn,"dbms") or die("Couldn't select database.");

#$MID = $_POST['MID'];
#echo "$MID";
#$password = $_POST['password'];

$sql = "SELECT * FROM employees  ";
$result = mysqli_query($conn,$sql) or die(mysqli_error());
$numrows = mysqli_num_rows($result);
if($numrows > 0)
   {
    #echo "<a href=s_room.php>ROOM DETAILS</a>";
	echo "<br>";
	echo "<form method=\"POST\" action=\"m_writeemp1.php\"><h3>Employee id   <input type=\"integer\"  name=\"EID\" ></h3> ";
	echo " <h3>Employee Name<input type=\"text\" name=\"Ename\"></h3>";
	echo "<h3>Designation</h3>";
	echo "<select name=\"Design\" >";
	echo"<option value='Receptionist'>Receptionist</option>";
	echo"<option value='Maintenance'>Maintenance</option>";
	echo"<option value='House_keeping'>House Keeping</option>";
	echo"<option value='Security'>Security</option>";
	echo"</select>";
	echo "<h3>Employee Password<input type=\"text\" name=\"pass\"></h3>";
	echo "<form method=\"POST\" action=\"m_writeemp2.php\"<h3>Manager ID</h3>";

  echo"<select name=\"MID\">";
 echo"<option value='10'>10</option>";
 echo"<option value='20'>20</option>";
 echo"<option value='30'>30</option>";
 echo"</select>";
  echo"<input type=\"submit\" value=\"Submit\"></form>";
 echo"</form>";
	
	
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