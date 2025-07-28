<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Schemes</title>
<link rel="stylesheet" href="s.css">
<link rel="stylesheet" href="
https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
body{
width:100%;
height:920px;
background: url("ed.jpg") center;
background-size: cover;
}
.left-content {
width: 1915px;
height: 1200px;
margin: auto;
background: #E6E6FA;
flex-wrap: wrap;
justify-content: space-around;
display:flex;
}
.schemes{
flex-basis: 95%;
margin: 10px 0px;
text-align:center;
padding: 14px 0px;
border: 1px solid grey;
background: 0px 0px 10px 3px black;
}
.schemes p{
font-size: 16px;
padding: 10px;
}
.schemes a {
background: #fa9579;
padding:7px 30px;
width:200px;
border: none;
color: white;
margin: 10px 0px;
border-radius: 70%;
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
<h1 style="margin-left:800px; margin-top:15px">
Available Schemes
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
<div class="schemes">
<h3>Birsa Munda Krushi Yojana</h3>
<p>
The scheme provides financial assistance to farmers belongs to scheduled tribe farmers for
sustainable irrigation facilities like new well,old well repairing,farm pond,micro irrigation and
electric connection for these facilities.<br>This scheme extended by the Maharashtra state
Agriculture Department can be availed by applying online on the MahaDBT portal.
</p>
<a href=""><i class="fa-solid fa-circle-right"></i></a>
</div>
<div class="schemes">
<h3>District cess fund scheme for agricultural equipments</h3>
<p>
Under this scheme farmers can get 50% subsidy on agricultural equipment such as cycle
tiller,tarpaulin,chaff cutter,hand pump etc. upto Rs.12,000.
</p>
<a href=""><i style="size:50px;"class="fa-solid fa-circle-right"></i></a>
</div>
<div class="schemes">
<h3>Post Matric Scholarship for Students with disability(central)</h3>
<p>
Scheme encourages students who have finished their matriculation to pursue higher<br>
studies by providing them with a scholarship upto 14,400 per annum.
</p>
<a href="1ed.php"><i class="fa-solid fa-circle-right"></i></a>
</div>
<div class="schemes">
<h3>Rajashree Shahu Maharaj Shikshan Shulka Shishyavruti Yojana</h3>
<p>
The scheme provides 50% and 100% of a students tuition fee for professional courses and
non-professional courses
respectively.<br>Scholarship is applicable to economically weaker sections.<br>Parents
income should be below Rs.8,00,000 per annum to avail this scheme
</p>
<a href=""><i class="fa-solid fa-circle-right"></i></a>
</div>
<div class="schemes">
<h3>Female Family Planning Tubectomy</h3>
<p>
For better family planning any female who has undergone tubectomy gets a cash benefit.
She is also eligible for one promotion if she is a gov. servant.
</p>
<a href=""><i class="fa-solid fa-circle-right"></i></a>
</div>
<div class="schemes">
<h3>Rajiv Gandhi Shilpi Swasthya Bima Yojana</h3>
<p>
The scheme provides financial assistance to farmers belongs to scheduled tribe farmers for
sustainable irrigation facilities like new well,old well repairing,farm pond,micro irrigation and
electric connection for these facilities.<br>This scheme extended by the Maharashtra state
Agriculture Department can be availed by applying online on the MahaDBT portal.
</p>
<a href=""><i class="fa-solid fa-circle-right"></i></a>
</div>
</div>
</div>
</body>
</html>
