
<!DOCTYPE html>
<html>
<head>
<title>LOGIN PAGE</title>
</head>
<link rel="stylesheet" type="text/css" href="Managerlo.css">

<body>

<h1 class="center">WELCOME</h1>
<br>
<h2 class="center">PLEASE FILL IN LOGIN DETAILS</h2>
<br>


<center>
<form method="POST" action="ManagerHome.php">
	MID<input type="integer" name="MID">
 <br>
 Password<input type="password" name="password">
 <br>
 <br>
 <input type="submit" value="Login">
<br>
</form>
</center>
<h3>
<button class="siz2" onclick="goBack()">Home</button>

<script>
function goBack() {
  window.history.go(-1);
}
</script>
</h3>
</body>


</html>