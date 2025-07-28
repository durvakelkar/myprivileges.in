reg.php
<?php
include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User - Register</title>
<link rel="stylesheet" href="st.css">
</head>
<body background="ed.jpg">
<div class="reg">
<center>
<br><h2>Registration</h2><br>
<form method="POST" action="reg.php">
    <label for="name">Enter name:</label><br>
<input type="text" placeholder="Full Name" name="name" id="name" required><br><br>
<label for="email">Enter email:</label><br>
<input type="email" placeholder="ex.abc2@gmal.com" name="email" id="email"
required><br><br>
<label for="contact">Enter Contact no.:</label><br>
<input type="text" name="contact_no" id="contact_no" required><br><br>
<label for="uno">Create user name:</label><br>
<input type="text" placeholder="length 8" name="uno" id="uno" required><br><br>
<label for="password">Create password:</label><br>
<input type="password" name="pass" id="pass" required><br><br>
<label for="confirm_password">Confirmed Password:</label><br>
<input type="password" name="cpass" id="cpass" required><br><br>
<br>
<input type="submit" value="Submit" name="submit" style="background-color: #fa9579;
border-radius: 5px; padding: 3px 10px;
border: 1px solid #000;">
<input type="reset" value="Reset" name="reset" style="background-color: #fa9579;
border-radius: 5px; padding: 3px 10px;
border: 1px solid #000;"><br>
</form>
<br>already have an account?<a href="first.php"> Sign In</a>
<br><br><br><br><br>
</center>
<div>
<?php
if($_POST['submit'])
{
$str1=$_POST['name'];
$str2=$_POST['email'];
$str3=$_POST['contact_no'];
$str4=$_POST['uno'];
$str5=$_POST['pass'];
$str6=$_POST['cpass'];
if(strlen($str4)!=8)
{
echo "User name should be 8 character";
}
else if(strlen($str5)!=7)
{
echo "password should be 7 character";
}
else if($str5!=$str6)
{
echo "password is not same ";
}
else if($str1!="" && $str1!="" && $str2!="" && $str3!="" && $str4!="" && $str5!="" && $str6!="")
{
$q = "insert into users values('$str1','$str2',$str3,'$str4','$str5','$str6')";
$rs = pg_query($conn,$q);
if (!$rs) {
echo "Duplicate data.<br>";
} else {
echo "successfully inserted.";
}
}
else
{
echo "Please fill all filled";
}
}
?>
</body>
</html>
