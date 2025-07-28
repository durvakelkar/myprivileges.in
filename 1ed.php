<?php
include('database.php');
session_start();
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
<title>User Homepage</title>
<link rel="stylesheet" href="s.css">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
body{
width:100%;
height:100;
background: url("ed.jpg") center;
background-repeat:no-repeat;
background-size: cover;
}
.left-content {
width: 1915px;
height: 200px;
margin:auto;
background: #E6E6FA;
flex-wrap: wrap;
justify-content: space-around;
display:flex;
}
.sch{
flex-basis: 30%;
margin: 30px 0px;
text-align:center;
padding: 30px 0px;
border: 1px solid grey;
background: 0px 0px 10px 3px black;
}
.sch a{
background: #fa9579;
padding:7px 30px;
width:200px;
border: none;
color: white;
margin: 10px 0px;
border-radius: 70%;
text-decoration:none;
}
.container{
width: 1915px;
height: 730px;
margin:auto;
background: #E6E6FA;
flex-wrap: wrap;
justify-content: space-around;
display:flex;
}
.schemes{
flex-basis: 70%;
margin: 90px 10px;
text-align:center;
padding: 14px 0px;
border: 1px solid grey;
background: 0px 0px 10px 3px black;
}
.schemes p{
font-size: 16px;
padding: 10px;
}
.schemes a{
background: #fa9579;
padding:7px 30px;
border: none;
color: white;
margin: 10px 0px;
border-radius: 10px;
text-decoration:none;
}
.schemes:hover{
background: #FFF0F5;
}
.schemes:hover a{
background: LightPink;
color: blue;
}
/*.left-content p{
flex-basis: 100%;
margin: 10px 0px;
text-align:center;
padding: 20px 0px;
border: 1px solid grey;
background: 0px 0px 10px 3px black;
}
.left-content h1 {
font-weight: bold;
margin-bottom: 50px;
font-size: 55px;
text-align: center;
}*/
@media screen and (max-width: 600px){
.left-content {
width: 100%;
flex-direction: column;
}
.left-content p{
margin: 10px;
}
.left-content h1{
font-size: 28px;
}
.left-content {
width: 100%;
position: relative;
}
</style>
</head>
<body>
<div class="wrapper">
<input type="checkbox" id="btn" hidden>
<label for="btn" class="menu-btn">
<i class="fas fa-bars"></i>
<i class="fas fa-times"></i>
</label>
<nav id="sidebar">
<div class="title">Side Menu</div>
<ul class="list-items">
<li><a href="first.php"><i class="fas fa-home"></i>Home</a></li>
<li><a href="#"><i class="fas fa-user"></i>My Profile</a></li>
<li><a href="#"><i class="fas fa-address-book"></i>My Schemes</a></li>
<li><a href="out.php"><i class="fas fa-sign-out"></i>Log Out</a></li>
<li><a href="#"><i class="fas fa-stream"></i>Delete Account</a></li>
<div class="icons">
<a href="#"><i class="fab fa-facebook-f"></i></a>
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-github"></i></a>
<a href="#"><i class="fab fa-youtube"></i></a>
</div>
</ul>
</nav>
<div class="left-content">
<h1 style="margin-left:500px; margin-top:15px">
Eduacational Scheme
</h1>
<div class="user">
<h2 style="color:black; font-size: 28px; text-decoration:none;
margin-left:550px;">Welcome</h2>
<?php
$uname=$_SESSION['uno'];
if($uname==true)
{
}
else
{
header("location: first.php");
}
$q="select name from users where uno='$uname'";
$result=pg_query("$q")or die ("user not found");
$row = pg_fetch_row($result);
$name=$row[0];
// $_SESSION['name']=$name;
?>
<h3 style="text-color:black;margin-left:550px; "><?php echo $name;?></h3>
</div>
<div class="sch">
<h3>Fill Personal Details</h3>
<br> <a href="1ed2.php" ><i class="fa-solid fa-circle-right"></i></a>
</div>
<div class="sch">
<h3>Fill Educational Details</h3>
<br> <a href="1ed3.php" ><i class="fa-solid fa-circle-right"></i></a>
</div>
<div class="sch">
<h3>Upload Documents</h3>
<br> <a href="1ed4.php" ><i class="fa-solid fa-circle-right"></i></a>
</div>
</div>
<div class="container">
<div class="schemes">
<h3>Post Matric Scholarship for Students with disability(central)</h3>
<p>
Scheme encourages students who have finished their matriculation to pursue higher<br>
studies by providing them with a scholarship upto 14,400 per annum.
<br><b>Criteria:</b><br>
1)Atleast 40% disability<br>
2)Parents income should be below Rs.2,50,000 per annum<br>
3)Scholarship holders receiving coaching in any pre-exam center from state/central gov.
can't opt.<br>
4)Must be matric or higher secondary pass out from a recognized univercity/board of
secondary education.<br>
5)Student passing one stage of education are studying for same stage of education will not
be eligible.
<br><b>Required Documents:</b><br>
1)Income Certificate<br>
2)Birth Certificate<br>
3)Passport size photo<br>
4)Previous exam marksheet<br>
5)Disability certificate<br>
6)Bank Passbook<br>
</p>
<a href="1ed2.php">Apply</a> <a href="dis.php">Back</a>
</div>
</div>
</div>
</body>
</html>