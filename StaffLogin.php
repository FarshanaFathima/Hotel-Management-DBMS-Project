
<!DOCTYPE html>
<html>
<head>
<title>LOGIN PAGE</title>
</head>
<link rel="stylesheet" type="text/css" href="Stafflog.css">

<body>

<h1 class="center">WELCOME</h1>
<br>
<h2 class="center">PLEASE FILL IN LOGIN DETAILS</h2>
<br>


<center>
<form method="POST" action="StaffHome.php">
	EID<input type="integer" name="EID">
 <br>
 Password<input type="password" name="password">
 <br>
 <br>
 <input type="submit" value="Login">
<br>
</form>
</center>
<body>
<center>
<h3>
<button class=siz2 onclick=goBack()>HomePage</button>

<script>
function goBack() {
  window.history.go(-1);
}
</script>
</h3>
</center>
</body>
</body>


</html>