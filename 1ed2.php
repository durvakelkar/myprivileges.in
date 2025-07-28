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
schemes:hover{
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
height: 1100px;
margin:0px 400px;
background: #E6E6FA;
flex-wrap: wrap;
justify-content: space-around;
display:flex;
">
<form action="1ed4.php" method="POST">
<div class="title">
Fill Personal Data
</div>
<div class="form">
<div class="input_field">
<label>First Name</label>
<input type="text" name="fname" class="input">
</div>
<div class="input_field">
<label>Middle Name</label>
<input type="text" name="mname" class="input">
</div>
<div class="input_field">
<label>Last Name</label>
<input type="text" name="lname" class="input">
</div>
<div class="input_field">
<label>Gender</label>
<select class="select" name="gender">
<option value="not selected">Select</option>
<option value="male">Male</option>
<option value="female">Female</option>
<option value="other">Other</option>
</select>
</div>
<div class="input_field">
    <label>D.O.B.</label>
<input type="date" name="date" class="input">
</div>
<div class="input_field">
<label>Marital Status</label>
<input type="text" placeholder="eg.married,unmarried" name="mar" class="input">
</div>
<div class="input_field">
<label>Religion</label>
<input type="text" name="religion" class="input">
</div>
<div class="input_field">
<label>Category</label>
<select class="select" name="category">
<option value="not selected">Select</option>
<option value="open">Open</option>
<option value="obc">OBC</option>
<option value="sbc">SBC</option>
<option value="st">ST</option>
<option value="sc">SC</option>
<option value="nt">NT</option>
<option value="vjnt">VJNT</option>
</select>
</div>
<div class="input_field">
<label>Annual Income</label>
<input type="text" name="income" class="input">
</div>
<div class="input_field">
<label>Qualification</label>
<select class="select" id="quali" name="quali" required>
<option value="not selected">select</option>
<option value="10th">Secondary School</option>
<option value="12th">Higher Secondary School</option>
<option value="UG">Graduate</option>
<option value="PG">Post Graduate</option>
</select>
</div>
<div class="input_field">
<label>contact number</label>
<input type="text" name="num" class="input">
</div>
<div class="input_field">
<label>Email</label>
<input type="email" name="mail" class="input">
</div>
<div class="input_field">
<label>Are you an employee?</label>
<label> Yes <input type="radio" name="q1" id="q1" value="yes"> </label>
<label> No<input type="radio" name="q1" id="q1" value="no"> </label>
</div>
<div class="input_field">
<label>Disability?</label>
<label> Yes <input type="radio" name="q2" id="q2" value="yes"> </label>
<label> No<input type="radio" name="q2" id="q2" value="no"> </label>
</div>
<div class="input_field">
<label>Temparary Address</label>
<textarea class="textarea" name="text1"></textarea>
</div>
<div class="input_field">
<label>Permanent Address</label>
<textarea class="textarea" name="text2"></textarea>
</div>
<div class="input_field">
<input type="submit" name="submit" value="submit" class="btn">
</div>
<a type="submit" name="back" value="back" class="btn" href="1ed.php">Back</a>
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
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$dob=$_POST['date'];
$marital=$_POST['mar'];
$rel=$_POST['religion'];
$cat=$_POST['category'];
$income=$_POST['income'];
$quali=$_POST['quali'];
$num=$_POST['num'];
$email=$_POST['mail'];
$q1=$_POST['q1'];
$q2=$_POST['q2'];
$tadd=$_POST['text1'];
$padd=$_POST['text2'];
$query="insert into scheme_applicant
(fname,mname,lname,gender,dob,marital_status,religion,category,income,qualification,contact_
no,email,is_emp,is_disable,tadd,padd,uno)
values('$fname','$mname','$lname','$gender','$dob','$marital','$rel','$cat','$income','$quali',$num,
'$email','$q1','$q2','$tadd','$padd','$uname')";
$data=pg_query($conn,$query);
if($data)
{
echo "Data inserted into database";
}
else
{
echo "Failed";
}
}
?>
