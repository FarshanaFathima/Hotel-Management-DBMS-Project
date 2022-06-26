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
	echo "<form method=\"POST\" action=\"m_writecaterer1.php\"><h3>Caterer id   <input type=\"integer\"  name=\"CaID\" ></h3> ";
	echo " <h3>Caterer Name<input type=\"text\" name=\"Caname\"></h3>";
	echo " <h3>Tenure starting date<input type=\"date\" name=\"TenureS\"></h3>";
	echo " <h3>Tenure ending date<input type=\"date\" name=\"TenureE\"></h3>";
	
	echo "<form method=\"POST\" action=\"m_writecaterer2.php\"<h3>Branch ID</h3>";

  echo"<select name=\"BID\">";
 echo"<option value='1'>1</option>";
 echo"<option value='2'>2</option>";
 echo"<option value='3'>3</option>";
 echo"</select><br>";
 echo"<br>";
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