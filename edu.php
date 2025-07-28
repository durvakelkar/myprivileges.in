<?php
include('database.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="fi.css">
<link rel="stylesheet" type="text/css" href="he.css"/>
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<title>Educational Schemes</title>
<style>
.section{
width:100%;
height:1500px;
background: url("e.webp") center;
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
width: 450px;
border-radius: 5px;
padding: 20px 25px 40px 25px;
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
    <div class="container">
<h1>Educational Schemes</h1>
<div class="schemes">
<h3>Post Matric Scholarship for Students with disability(central)</h3>
<p>
The scheme encourages students who have finished their matriculation to pursue higher
<br> studies by providing them with a scholarship upto 14,400 per annum.
<br><b>Criteria:</b><br>
1)Atleast 40% disability.<br>
2)Parents income should be below Rs.2,50,000 per annum.<br>
3)Scholarship holders receiving coaching in any pre-exam center from state/central gov.
can't opt.<br>
4)Must be matric or higher secondary pass out from a recognized university/board of
secondary education.<br>
5)Student passing one stage of education or are studying for same stage of education will
not be eligible.
<br><b>Required Documents:</b><br>
1)Income Certificate<br>
2)Birth Certificate<br>
3)Passport size photo<br>
4)Previous exam marksheet<br>
5)Disability certificate<br>
6)Exam Passbook<br>
</p>
<button onclick="popup('log-popup')">Check Eligibility</button>
</div>
<div class="schemes">
<h3>Rajashree Shahu Maharaj Shikshan Shulka Shishyavruti Yojana</h3>
<p>
The scheme covers 50% and 100% of a students tuition fee for professional courses and
non-professional courses
respectively.<br>This scholarship is applicable to the students belonging to the economically
weaker sections.<br>Parents income should be below Rs.8,00,000 per annum to avail this
scheme.
<br><b>Criteria:</b><br>
1)State of residence=Maharashtra<br>
2)Education level=candidate must be 10th passed out atleast<br>
3)Annual income must be less than 800000<br>
4)Minimum 60% marks<br>
5)Student should take admission under general category.
<br><b>Required Documents:</b><br>
1)Aadhar card<br>
2)Undertaking(if candidate belongs to maharashtra,karnataka border area)<br>
3)Affidavit<br>
4)Passport size photo<br>
5)Gap Certificate<br>
6)Attendance Certificate<br>'
7)Income Certificate<br>
8)Bank Passbook<br>
9)Previous Exam Marksheet<br>
10)College Fee Receipt<br>
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
<label>Full Name<span style=color:red;>*</span></label>
<input type="text" placeholder="" name="name" id="name"required>
<label>Address<span style=color:red;>*</span></label>
<input type="text" placeholder="" name="address" required>
<label>D.O.B.<span style=color:red;>*</span></label>
<input type="date" placeholder="" name="dob" id="dob">
<label for="qualification" >Choose educational level:<span
style=color:red;>*</span></label>
<select id="quali." required>
<option value=""></option>
<option value="10th">Secondary School</option>
<option value="12th">Higher Secondary School</option>
<option value="UG">Graduate</option>
<option value="PG">Post Graduate</option>
</select>
<br><br>
<label>Enter the percentage<span style=color:red;>*</span></label>
<input type="number" placeholder="60% or more required" name="address" required>
<br><br>
<label>State of Residence<span style=color:red;>*</span></label>
<input type="text" placeholder="" name="state" id="state" required>
<label>Category<span style=color:red;>*</span></label>
<input type="text" placeholder="eg.:-general,obc,st,sc" name="category" id="category"
required>
<label>Annual Income(Self/Parents):<span style=color:red;>*</span></label>
<input type="number" min="1" max="800000" placeholder="less than 8L income must"
name="income" id="income" required>
<br><br>
<input type="submit" name="send" value="submit" class="login-btn"><br><br>
</form>
</div>
</div>
<div class="popup-container" id="log-popup">
<div class="popup">
<form method="POST" action="#" autocomplete="off">
<h2>
    <span>Check Eligibilty</span>
<button type="reset" onclick="popup('log-popup')">X</button>
</h2>
<label> Is atleast 40% disability?<span style=color:red;>*</span></label>
<br><label> Yes <input type="radio" name="q1" id="q1" value="yes"> </label>
<br><label> No<input type="radio" name="q1" id="q1" value="no"> </label>
<br><br><label>Are you a Scholarship holder receiving coaching in any pre-exam center from
state/central gov.?<span style=color:red;>*</span>
<br>Yes<input type="radio" placeholder="Yes" name="yes_no" id="yes_no"
value="yes"checked>
<br>No<input type="radio" placeholder="No" name="yes_no" id="yes_no" value="no"
checked>
</label>
<br><br> <label>Annual Income(Self/Parents):<span style=color:red;>*</span></label>
<input type="text" placeholder="" name="income" id="income" required>
<p style="color:red;">Annual income is more than 2.5L,Not Eligible</p>
<br><br><label for="qualification" >Choose educational level:<span
style=color:red;>*</span></label>
<select id="quali." required>
<option value=""></option>
<option value="10th">Secondary School</option>
<option value="12th">Higher Secondary School</option>
<option value="UG">Graduate</option>
<option value="PG">Post Graduate</option>
</select>
<br><br><br><label>Have you passed one stage of education or studying for the same
stage of education? <span style=color:red;>*</span></label>
<br>Yes<input type="radio" placeholder="Yes" name="y_n" id="y_n" value="yes"checked>
<br>No<input type="radio" placeholder="No" name="y_n" id="y_n" value="no"checked>
<input type="submit" name="submit" value="submit" class="login-btn"><br><br>
<a href="first.php">Back</a>
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
if($_POST['send'])
{
$category=$_POST['category'];
$state=$_POST['state'];
if($state!='Maharashtra' && $state!='maharashtra')
{
?>
<script>alert("Residence is not Maharashtra.Not Eligible")</script>
<?php
if($category!='general')
{
?>
<script>alert("Category should be general.Not Eligible")</script>
<?php
}
}
else if($category!='general')
{
?>
<script>alert("Category should be general.Not Eligible")</script>
<?php
}
else
{
?>
<script>alert("Eligible you can apply for this scheme by login")</script>
<?php
}
}
if($_POST['submit'])
{
$q1=$_POST['q1'];
$q2=$_POST['yes_no'];
$q3=$_POST['y_n'];
if($q1=='no')
{
?>
<script>alert("atleast 40% disability required,Not Eligible")</script>
<?php
if($q2=='yes')
{
?>
<script>alert("Receiving coaching can't opt,Not Eligible")</script>
<?php
}
if($q3=='yes')
{
?>
<script>alert("pass one stage of education are studying for same stage of
education not allowed,Not Eligible")</script>
<?php
}
}
else if($q2=='yes')
{
?>
<script>alert("Receiving coaching can't opt,Not Eligible")</script>
<?php
if($q3=='yes')
{
?>
<script>alert("pass one stage of education are studying for same stage of
education not allowed,Not Eligible")</script>
<?php
}
}
else if($q3=='yes')
{
?>
<script>alert("pass one stage of education are studying for same stage of
education not allowed,Not Eligible")</script>
<?php
}
else
{
?>
<script>alert("Eligible you can apply for this scheme by login")</script>
<?php
}
}
?>
</body>
</html>