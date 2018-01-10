<?php
	require_once('auth.php');
require'db_conn.php';


$fn=isset($_POST['fname']) ? $_POST['fname'] : '';
$ln=isset($_POST['lname']) ? $_POST['lname'] : '';
$age=isset($_POST['age']) ? $_POST['age'] : '';
$empid=isset($_POST['empid']) ? $_POST['empid'] : '';

$rawdate = htmlentities(isset($_POST['bday']) ? $_POST['empid'] : '');
$bd = date('Y-m-d', strtotime($rawdate));
$department=isset($_POST['department']) ? $_POST['department'] : '';

$position=isset($_POST['sem']) ? $_POST['sem'] : '';
$grade=isset($_POST['grade']) ? $_POST['grade'] : '';
$salary=isset($_POST['salary']) ? $_POST['salary'] :'';


$cap1=strtoupper($fn);
$cap2=strtoupper($ln);
$cap3=mb_strtoupper($empid, 'UTF-8');

if(isset($_POST['bsubmit']))
 {
 	
 $q1=mysqli_query($con,"insert into employee values('$cap1','$cap2','$age','$cap3','$bd','$department','$position','$grade','$salary');");
if($q1)
{
 echo"Record Successfully Added";
}
else
{

echo"Could not add your record" ;
}
 }
?>




<!DOCTYPE html>

<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">

	
	<title>Nova Corp</title>
	<link rel="shortcut icon" href="images/mec.jpg">
	<script type="text/javascript" src="js/validate.js"></script>  

 <style>
     body {
	  text-align:center;
      background="back.jpg";
      color:black;
     }

    div{
            width:180px;            
            display:inline-block;
            text-align:center;
            text-align:top;
        }


   </style>
</head>
<body  background="back.jpg" >
<p align="center" class="style1">Login successful </p>
	
<center>




<h1  align="center">Employee Information System</h1>

<center><a href="home.php">ADD</a>&nbsp&nbsp&nbsp&nbsp<a href="update1.php">UPDATE</a>&nbsp&nbsp&nbsp&nbsp<a href="delete.php">DELETE</a>&nbsp&nbsp&nbsp&nbsp<a href="search.php">SEARCH</a><br><br></center>


</center>
<form  method="post" name="reg" onsubmit="return validate()">
	
	<div>
		<label>First Name:</label>
		<input type="text" name="fname">
	</div>
	<div><br>
		<label>Last Name:</label>
		<input type="text" name="lname">

	</div><br>
		<div>
		<label>Age::</label>
		<input type="text" name="age">

	</div>
	<div><br>
		<label>Employee ID:</label>
		<input type="text" name="empid">

	</div>

	<div><br>
	    <label for="bday">DOB:</label>
	    <input type="date" id="bday" name="bday">
  </div>
	<div><br>
		<label>Department:</label><br>
		<select name="department">
			<option >Select department</option>
			<option value="CSE">CSE</option>
			<option value="ECE">ECE</option>
			<option value="BME">BME</option>
			<option value="EEE">EEE</option>
		</select>
	</div>

	<div><br>
		<label>Position:</label><br>
		<select name="sem">
			<option >Select position</option>
			<option value="HEAD">HEAD</option>
			<option value="STAFF">STAFF</option>
			<option value="CLERK">CLERK</option>
		</select>
	</div>
	<div><br>	
		<label>Grade</label><br>
		<select name="grade">
			<option >Select grade</option>
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			
			
		</select>
	</div>
	<div><br>
		<label>Salary No:<br></label>
		<input type="text" name="salary">

	</div>

	<div><br>
  		<button  name="bsubmit" >Submit</button>
	</div>

	

</form>
<p align="center"><a href="index.php">logout</a></p>
</body>
</html>