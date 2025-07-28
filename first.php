<?php
include('database.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User - Login and Register</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="fi.css">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body style= "width:100%; height:1820px; background: url('ed.jpg') center; background-size:
cover;">
<header>
<h2>Government Schemes</h2>
<nav>
<ul>
<li><a class="active" href="#home">Home</a></li>
<li>
<a href="#" style="padding: 0px 25px;">Schemes
<i class="fas fa-caret-down"></i>
</a>
<ul style=" top: 140px;">
<li><a href="agri.php">Agricultural Schemes
    <i class="fas fa-caret-right"></i>
</a>
</li>
<li> <a href="edu.php">Educational Schemes
<i class="fas fa-caret-right"></i></a>
</li>
<li><a href="health.php">Health Schemes
<i class="fas fa-caret-right"></i>
</a>
</li>
</ul>
</li>
<li><a href="contact.php">Contact</a></li>
<li><a href="#about">About</a></li>
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
color: #30475e;">Don't have an account?</h3><a href="reg.php">Sign Up Now</a>
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
<section class="home" id="home" style=" display: flex; align-items: center;
min-height: 90vh;
background: ;
background-size: cover;
background-position: center;">
<div class="content" style=" max-width: 40rem;">
<h3 style="padding: 1rem 0;font-size: 5rem; color: #333;">Welcome to
MyPrivileges</h3>
<span style="font-size: 3rem;
color:var(--pink);
padding: 1rem 0;
line-height: 2.3;">Find Your Schemes Here!</span>
<p style=" font-size: 2rem;
color:white;
padding: 1rem 0;
line-height: 1.5;">Here is your solution to remove the obstacles in your dreams.Know the
schemes that are made for you, by checking your eligibility.</p>
</div>
</section>
<!--About section starts-->
<section class="about" id="about" style="
min-height: 80vh;
background:
background-size: cover;
background-position: center;">
<h1 class="heading" style="text-align: center;
font-size: 4rem;
color: white;
padding: 2rem;
margin: 1rem 0;
background: #30475e;
"><span style="color: var(--pink);">about</span> us</h1>
<div class="row" style="display: flex;
align-items: center;
gap: 2rem;
flex-wrap: wrap;
pad: 2rem 0;
padding-bottom: 3rem;
">
<div class="video-container" style=" flex: 1 3 40rem;
position: relative;">
<video src="2.mp4 " loop autoplay muted style=" width: 100%;
border: 1.5rem solid #fff;
border-radius: .5rem;
box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
object-fit: cover;"></video>
<h3 style="position: absolute;
top: 50%;
transform: translateY(-50%);
font-size: 3rem;
background: #fff;
width: 100%;
padding: 1rem 2rem;
text-align: center;
mix-blend-mode: screen;">Scheme Benefits</h3>
</div>
<div class="content" style="flex: 1 1 40rem;">
<h3 style=" font-size: 3rem;
color: #333;
">Why choose us?</h3>
<p style="font-size: 1.5rem;
color: black;
padding: .5rem 0;
padding-top: 1rem;
line-height: 1.5;"><b>We are here for providing the information about various government
schemes.The schemes that help you to fulfill your dreams.These schemes are related to the
agriculture,educational and health sectors.<b> </p>
<a href="#" class="btn" style="display: inline-block;
margin-top: 1rem;
border-radius: 5rem;
background: #333;
color: #fff;
padding: .9rem 3.5rem;
cursor: pointer;
font-size: 1.7rem;">Learn More</a>
</div>
</div>
</section>
<!--About section ends-->
</body>
</html>
<?php
include('database.php');
session_start();
?>