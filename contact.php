<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact form Using HTML and CSS | LiteMap </title>
<!-- CSS -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="fi.css">
<link rel="stylesheet" href="cs.css">
<!-- Boxicons CSS -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body background="ed.jpg">
<header>
<h2>Government Schemes</h2>
<nav>
<ul>
<li><a class="active" href="first.php">Home</a></li>
<li>
<a href="#" style="padding: 0px 25px;">Schemes
<i class="fas fa-caret-down"></i>
</a>
<ul style=" top: 140px;">
<li><a href="agri.php">Agricultural schemes
<i class="fas fa-caret-right"></i>
</a>
</li>
<li> <a href="edu.php">Educational schemes
<i class="fas fa-caret-right"></i></a>
</li>
<li><a href="health.php">Health schemes
<i class="fas fa-caret-right"></i>
</a>
</li>
</ul>
</li>
<li><a href="contact.php">Contact</a></li>
<li><a href="first.php#about">About</a></li>
</ul>
</nav>
<div class='sign-in-up'>
<button type='button' onclick="popup('login-popup')">LOGIN</button>
</div>
<div class="popup-container" id="login-popup">
<div class="popup">
<form method="POST" action="#" autocomplete="off">
<h2>
<span>USER LOGIN</span>
<button type="reset" onclick="popup('login-popup')">X</button>
</h2>
<input type="text" placeholder="Username" name="username" id="username">
<input type="password" placeholder="Password" name="password">
<input type="submit" name="login" value="Login" class="login-btn"><br><br>
<h3 style="display: flex;
flex-direction: row;
align-items: center;
justify-content: space-between;
margin-bottom: 30px;
color: #30475e;">Don't have account?</h3><a href="reg.php">Sign Up Now</a>
</form>
</div>
</div>
<script>
function popup(popup_name)
{
get_popup=document.getElementById(popup_name);
if(get_popup.style.display=="flex")
{
get_popup.style.display="none";
}
else
{
get_popup.style.display="flex";
}
}
</script>
<?php
session_start();
if(isset($_POST['username']))
{
$uname=$_POST['username'];
$password=$_POST['password'];
$ispresent = 0;
$q = "select uno, pass from users";
$result=pg_query($q) or die ("Sorry error occured while connection");
while($row=pg_fetch_array($result))
{
if(($uname == $row[0]) && ($password==$row[1]))
{
$ispresent=1;
}
}
if($ispresent==0)
{
?>
<script>alert("Sorry Wrong User Id or Password")</script>
<?php
return false;
}
else
{
session_start();
$_SESSION['uno']=$uname;
header("location: dis.php");
}
}
?>
</header>
<section>
<div class="container">
<div class="contactInfo">
<div>
<h2>GET IN TOUCH</h2>
<p>Feel free to contact us anytime. We will get back to you as soon as we can!</p>
<ul class="info">
<li>
<i class="bx bx-location-plus"></i>
<span>Modern College Pune-5</span>
</li>
<li>
<i class="bx bx-envelope"></i>
<span>myprivileges@scheme.com</span>
</li>
<li>
<i class="bx bx-phone"></i>
<span>011100065</span>
</li>
</ul>
<ul class="social-media">
<li><i class="bx bxl-facebook"></i></li>
<li><i class="bx bxl-instagram-alt"></i></li>
<li><i class="bx bxl-youtube"></i></li>
</ul>
</div>
</div>
<div class="contactForm">
<h2>SAY SOMETHING</h2>
<div class="formBox">
<div class="inputBox w50">
<input type="text" required>
<span>First Name</span>
</div>
<div class="inputBox w50">
<input type="text" required>
<span>Last Name</span>
</div>
<div class="inputBox w50">
<input type="email" required>
<span>Email Address</span>
</div>
<div class="inputBox w50">
<input type="text" required>
<span>Mobile Number</span>
</div>
<div class="inputBox w100">
<textarea name="msg" required></textarea>
<span>Write your message here...</span>
</div>
<div class="inputBox w100">
<input type="submit" value="SEND">
</div>
</div>
</div>
</div>
</section>
</body>
</html>
