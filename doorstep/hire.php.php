<?php
if( $_SERVER['REQUEST_METHOD'] === 'POST' )
{
$conn_error='Could not connect';
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='doorstep';

if(@mysql_connect($mysql_host,$mysql_user,$mysql_pass))
{
	if(@mysql_select_db($mysql_db))
	{
		echo 'Ok';
	}
}


$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$address=$_POST['address'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$dob=$_POST['dob'];
$resume=$_POST['resume'];



if(isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['address'])&&isset($_POST['email'])&&isset($_POST['phone'])&&isset($_POST['dob'])&&isset($_POST['resume']))
{

	if($fname!="" && $lname!="" && $address!="" && $email!="" && $phone!=""&&$dob!="")
	{

	$query=mysql_query("insert into hire values('$fname','$lname','$address','$email','$phone','$dob','$resume')");
		if($query)
		{
		echo '<script type="text/javascript">alert("Updated successfully");</script>';
		}
		else
		{
		echo '<script type="text/javascript">alert("Did not update in the database");</script>';
		}

	}


}
else
{
	echo '<script type="text/javascript">alert("Please enter the data");</script>';
}

}
?>


<html>
<head>
<title>Doorstep Meals-We're hiring</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="icon" href="icon.png">
<script language="JavaScript">

function validate()
{
var fname= document.personal_info.firstname.value;
var lname= document.personal_info.lastname.value;
var address= document.personal_info.address.value;
var email= document.personal_info.email.value;
var phone= document.personal_info.phone.value;
var dob= document.personal_info.dob.value;

var check_name=/^[a-zA-Z][a-zA-Z ]+[a-zA-Z]*$/
var check_num=/^[0-9]{10}$/
var check_email=/^[a-zA-Z][a-zA-Z\d]+[._]?[a-zA-Z\d]*@[a-zA-Z]+(.[a-zA-Z]+){1,2}$/


if(check_email.test(email))
{

}
else 
{
alert("invalid email address");
}

<!--
if(check_name.test(fname)&&check_name.test(lname)&&check_num.test(phone)&&check_email.test(email))
{

}
else
{
alert("Some error occurred!");
} 
-->
}


</script>
</head>
<div class="top_part" >
<H1 class=>Doorstep Meals</h1>
<ul>
  <li><a href="dummy1.html">Home</a></li>
  <li><a href="ordering.html">Ordering</a></li>
  <li><a href="offers.html">Offers</a></li>
  <li><a href="hire.html" class="active" >We're Hiring</a></li>
  <li style="float:right"><a class="active" href="#Sign In">Sign In</a></li>
</ul>
</div>
<div >
<form name="personal_info" style="text-align:left;" method="POST">
<fieldset style="width:50%;margin:auto;margin-top:20px;">
    <legend>PERSONAL INFORMATION</legend>
	
	<label for="firstname">FIRST NAME:</label><br>
	<input type="text" name="firstname" ><br>
	
	<label for="lastname">LAST NAME:</label><br>
	<input type="text" name="lastname" ><br>
	
	<label for="address">ADDRESS:</label><br>
	<textarea rows="5"  name="address" >
	</textarea><br>
	
	<label for="email">EMAIL:</label><br>
	<input type="email" name="email" ><br>
	
	<label for="phone">PHONE:</label><br>
	<input type="tel" name="phone" ><br>
	
	<label for="dob">DATE OF BIRTH:</label><br>
	<input type="date" name="dob" ><br>
	
	<label for="resume">UPLOAD RESUME:</label><br>

<form action="upload1.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"><br><br>
	<input type="submit" value="Submit">
</form>

	<input type="submit" name="submit" value="SUBMIT" onclick="validate()" method="GET">
</fieldset>
</form>
</div>