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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script
src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
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
width: 1500px;
height: 850px;
margin:15px 350px;
background: #E6E6FA;
flex-wrap: wrap;
justify-content: space-around;
display:flex;
">
<form action="#" method="POST" enctype="multipart/form-data">
<div class="title">
Upload Documents
</div>
<div class="form">
<div class="mb-3">
<label for="file" class="form-label">Upload Your Image</label>
<input type="file" class="form-control" name="image1" id = "image">
</div>
<div class="mb-3">
<label for="file" class="form-label">Upload your Signature</label>
<input type="file" class="form-control" name="image2" id = "file">
</div>
<div class="mb-3">
<label for="file" class="form-label">Upload Previous Exam
Marksheet</label>
<input type="file" class="form-control" name="file1" id = "file">
</div>
<div class="mb-3">
<label for="file" class="form-label">Upload Income
Certificate</label>
<input type="file" class="form-control" name="file2" id = "file">
</div>
<div class="mb-3">
<label for="file" class="form-label">Upload Birth Certificate</label>
<input type="file" class="form-control" name="file3" id = "file">
</div>
<div class="mb-3">
<label for="file" class="form-label">Upload Disability
Certificate</label>
<input type="file" class="form-control" name="file5" id = "file">
</div>
<div class="mb-3">
<label for="file" class="form-label">Upload Bank
Passbook</label>
<input type="file" class="form-control" name="bfile" id = "bfile">
</div>
<div class="input_field">
<input type="submit" name="submit" value="submit" class="btn">
</div>
<div class="input_field">
<a href="1ed3.php">Back</a>
</div>
</div>
</form>
</div>
</body>
</html>
<?php
if($_POST['submit'])
{
$name=$_POST['fname'];
$uname=$_SESSION['uno'];
//print_r($_FILES["file"]);
$filename1=$_FILES["image1"]["name"];
$tempname1=$_FILES["image1"]["tmp_name"];
$filesize1=$_FILES["image1"]["size"];
$filetype1=$_FILES["image1"]["type"];
$filename2=$_FILES["image2"]["name"];
$tempname2=$_FILES["image2"]["tmp_name"];
$filesize2=$_FILES["image2"]["size"];
$filetype2=$_FILES["image2"]["type"];
$filename3=$_FILES["file1"]["name"];
$tempname3=$_FILES["file1"]["tmp_name"];
$filesize3=$_FILES["file1"]["size"];
$filetype3=$_FILES["file1"]["type"];
$filename4=$_FILES["file2"]["name"];
$tempname4=$_FILES["file2"]["tmp_name"];
$filesize4=$_FILES["file2"]["size"];
$filetype4=$_FILES["file2"]["type"];
$filename5=$_FILES["file3"]["name"];
$tempname5=$_FILES["file3"]["tmp_name"];
$filesize5=$_FILES["file3"]["size"];
$filetype5=$_FILES["file3"]["type"];
$filename6=$_FILES["file4"]["name"];
$tempname6=$_FILES["file4"]["tmp_name"];
$filesize6=$_FILES["file4"]["size"];
$filetype6=$_FILES["file4"]["type"];
$filename7=$_FILES["file5"]["name"];
$tempname7=$_FILES["file5"]["tmp_name"];
$filesize7=$_FILES["file5"]["size"];
$filetype7=$_FILES["file5"]["type"];
$folder="images/";
/*$data=[];
$data=[$filename1,$filename2,$filename3,$filename4,$filename5,$filename6,$filename7,$filena
me8];
$files=implode('',$data);
*/
$q1="select scap_srno from scheme_applicant where uno='$uname'";
$appno=pg_query($conn,$q1);
$row = pg_fetch_row($appno);
$no=$row[0];
if($filename1)
{
$q2="insert into doc_uploaded (labelname,filename,size,type,scap_srno)
values('UImage','$filename1','$filesize1','$filetype1','$no')";
$qe=pg_query($conn,$q2) or die('user not found');
move_uploaded_file($tempname1,$folder.$filename1);
if($qe)
{
echo "inserted";
}
}
if($filename2)
{
$q2="insert into doc_uploaded (labelname,filename,size,type,scap_srno)
values('USignature','$filename2','$filesize2','$filetype2','$no')";
$qe=pg_query($conn,$q2) or die('user not found');
move_uploaded_file($tempname2,$folder.$filename2);
if($qe)
{
echo "inserted";
}
}
if($filename3)
{
$q2="insert into doc_uploaded (labelname,filename,size,type,scap_srno)
values('Marksheet','$filename3','$filesize3','$filetype3','$no')";
$qe=pg_query($conn,$q2) or die('user not found');
move_uploaded_file($tempname3,$folder.$filename3);
if($qe)
{
echo "inserted";
}
}
if($filename4)
{
$q2="insert into doc_uploaded (labelname,filename,size,type,scap_srno)
values('IncomeCert','$filename4','$filesize4','$filetype4','$no')";
$qe=pg_query($conn,$q2) or die('user not found');
move_uploaded_file($tempname4,$folder.$filename4);
if($qe)
{
echo "inserted";
}
}
if($filename5)
{
$q2="insert into doc_uploaded (labelname,filename,size,type,scap_srno)
values('BirthCert','$filename5','$filesize5','$filetype5','$no')";
$qe=pg_query($conn,$q2) or die('user not found');
move_uploaded_file($tempname5,$folder.$filename5);
if($qe)
    {
echo "inserted";
}
}
if($filename6)
{
$q2="insert into doc_uploaded (labelname,filename,size,type,scap_srno)
values('DisabilityCert','$filename6','$filesize6','$filetype6','$no')";
$qe=pg_query($conn,$q2) or die('user not found');
move_uploaded_file($tempname6,$folder.$filename6);
if($qe)
{
echo "inserted";
}
}
if($filename7)
{
$q2="insert into doc_uploaded (labelname,filename,size,type,scap_srno)
values('BankPassbook','$filename7','$filesize7','$filetype7','$no')";
$qe=pg_query($conn,$q2) or die('user not found');
move_uploaded_file($tempname7,$folder.$filename7);
if($qe)
{
echo "inserted";
}
}
//echo $folder;
//echo "<img src='$folder' height='100px' width='100px'>";
}
?>
