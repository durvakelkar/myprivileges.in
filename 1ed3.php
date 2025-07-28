<?php
include('database.php');
session_start();
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>User Details</title>
<link rel="stylesheet" href="s.css">
<link rel="stylesheet" href="data.css">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
body{
width:100%;
height:100;
background: #E6E6FA;
background-repeat:no-repeat;
background-size: cover;
}
.left-content {
width: 1915px;
height: 300px;
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
<div class="container" style="
width: 1230px;
height: 850px;
margin:10px 400px;
background: #E6E6FA;
flex-wrap: wrap;
justify-content: space-around;
display:flex;
">
<form action="1ed3.php" method="POST">
<div class="title">
Educational Details
</div>
<div class="form">
<div class="input_field">
<label>Secondary School Name</label>
<input type="text" name="sname" class="input">
</div>
<div class="input_field">
<label>Address of school:</label>
<input type="text" name="sadd" class="input">
</div>
<div class="input_field">
<label>State</label>
<input type="text" name="state" class="input">
</div>
<div class="input_field">
<label>City</label>
<input type="text" name="city" class="input">
</div>
<div class="input_field">
<label>Date of Joining of school</label>
<input type="date" name="dj" class="input">
</div>
<div class="input_field">
<label>Date of Leaving of School</label>
<input type="date" name="dl" class="input">
</div>
<div class="input_field">
<label>Total Marks</label>
<input type="text" name="tm" class="input">
</div>
<div class="input_field">
<label>Obtained Marks</label>
<input type="text" name="num" class="input">
</div>
<div class="input_field">
<label>Percentage</label>
<input type="text" name="per" class="input">
</div>
<div class="input_field">
<label>CGPA</label>
<input type="text" name="cgpa" class="input">
</div>
<div class="input_field">
<label>SGPA</label>
<input type="text" name="sgpa" class="input">
</div>
<div class="input_field">
<input type="submit" name="submit" value="submit" class="btn">
</div>
<div class="input_field">
<a href="1ed2.php">Back</a>
</div>
</div>
</form>
</div>
</body>
</html>
<?php
if($_POST['submit'])
{
$uname=$_SESSION['uno'];
//echo $uname;
$sname=$_POST['sname'];
$sadd=$_POST['sadd'];
$state=$_POST['state'];
$city=$_POST['city'];
$djoin=$_POST['dj'];
$dleave=$_POST['dl'];
$tm=$_POST['tm'];
$obm=$_POST['num'];
$percentage=$_POST['per'];
$cgpa=$_POST['cgpa'];
$sgpa=$_POST['sgpa'];
$q1="select scap_srno from scheme_applicant where uno='$uname'";
$appno=pg_query($conn,$q1);
$row = pg_fetch_row($appno);
$no=$row[0];
$q2="insert into edu_detail
(sname,sadd,state,city,djoi,dleav,tmarks,obtmarks,per,cgpa,sgpa,scap_srno)
values('$sname','$sadd','$state','$city','$djoin','$dleave','$tm','$obm','$percentage','$cgpa','$sgpa
','$no')";
$data=pg_query($conn,$q2);
if($data)
{
echo "Data inserted into database";
}
else
{
echo "Failed.";
}
/*create table edu_detail(sid serial primary key,sname varchar,sadd varchar,state varchar,city
varchar,djoi date,dleav date,tmarks float,obtmarks float,per varchar,cgpa float,sgpa
float,scap_srno int references scheme_applicant);
CREATE TABLE
*/
}
?>
<?php
include('database.php');
session_start();
?>
