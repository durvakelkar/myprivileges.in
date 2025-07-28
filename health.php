<?php
include('database.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="fi.css">
<link rel="stylesheet" type="text/css" href="he.css"/>
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<title>Health Schemes</title>
<style>
.section{
width:100%;
height:920px;
background: url("2.jpeg") center;
background-size: cover;
}
.schemes p{
font-size: 16px;
padding: 10px;
}
.schemes button{
background: #fa9579;
padding:5px 25px;
border: none;
color: white;
margin: 10px 0px;
border-radius: 10px;
text-decoration:none;
}
.schemes:hover button{
background: white;
color: blue;
}
div.popup-container{
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: rgba(0, 0, 0, 0.2);
display: flex;
flex-direction: row;
align-items: center;
justify-content: center;
display: none;
}
div.popup-container div.popup{
background-color: #f0f0f0;
width: 350px;
border-radius: 5px;
padding: 20px 25px 30px 25px;
}
div.popup-container div.popup h2{
display: flex;
flex-direction: row;
align-items: center;
justify-content: space-between;
margin-bottom: 30px;
color: #30475e;
}
div.popup-container div.popup h2 button{
border: none;
background-color: transparent;
outline: none;
font-size: 20px;
font-weight: 550;
color: #797775;
}
div.popup-container div.popup input{
width: 100%;
margin-bottom: 20px;
background-color: transparent;
border: none;
border-bottom: 2px solid #30475e;
border-radius: 0;
padding: 5px 0;
font-weight: 550;
font-size: 14px;
outline: none;
}
div.popup-container div.popup button.login-btn{
font-weight: 550;
font-style: 15px;
color: white;
background-color: #30475e;
padding: 4px 10px;
border: none;
outline: none;
margin-top: 5px;
}
</style>
</head>
<body>
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
<div class="section">
<h1>Health Schemes</h1>
<div class="container">
<div class="schemes">
<h3>Female Family Planning Tubectomy</h3>
<p>
For better family planning any female who has undergone tubectomy gets a cash benefit.
She is also eligible for one promotion if she is a gov. servant.
<br><b>Eligibility Criteria</b><br>
1)State of residence should be Delhi.
2)Gender should be female.
</p>
<button onclick="popup('log')">Check Eligibility</button>
</div>
<div class="schemes">
<h3>Rajiv Gandhi Shilpi Swasthya Bima Yojana</h3>
<p>
This scheme aims at financially enabling the artisans community to access the best of
healthcare facilities in country.
<br><b>Eligibility Criteria</b><br>
1)Handicraft artisans.
2)Annual limit per family 1+4(includes self,spouse and three dependent family members).
3)All craft persons(male/female) between age group of one day to 80years. All craft persons
will be eligible to be covered under the e scheme subject to the conditions as applicable under
RSBY of M/O labour and employment.
</p>
<button onclick="popup('log')">Check Eligibility</button>
</div>
</div>
</div>
<div class="popup-container" id="log">
<div class="popup">
<form method="POST" action="#" autocomplete="off">
<h2>
<span>Check Eligibilty</span>
<button type="reset" onclick="popup('log')">X</button>
</h2>
<input type="text" placeholder="Full Name" name="name" id="name">
<input type="text" placeholder="Address" name="address">
<input type="date" placeholder="D.O.B." name="dob" id="dob">
<input type="submit" name="Apply" value="Apply" class="login-btn"><br><br>
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
</body>
</html>