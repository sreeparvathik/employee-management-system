<!DOCTYPE html>

<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/index.css"> 
	<title>MEC | SIS</title>
	<link rel="shortcut icon" href="images/mec.jpg">
	<script type="text/javascript" src="js/validate.js"></script>  

</head>
<body>
	<div class="container">
		<p align="center">

	   	<img src='images/mec.jpg' alt='Logo'>
	   </p>
	</div>
<center>




<h1  align="center">STUDENT INFORMATION SYSTEM</h1>

<center><a href="index1.php">ADD</a>&nbsp&nbsp&nbsp&nbsp<a href="update1.php">UPDATE</a>&nbsp&nbsp&nbsp&nbsp<a href="delete1.php">DELETE</a>&nbsp&nbsp&nbsp&nbsp<a href="search.php">SEARCH</a><br><br></center>


</center>
<form  method="post" name="reg" onsubmit="return validate()">
	
	<div>
		<label>First Name:<br></label>
		<input type="text" name="fname">
	</div>
	<div>
		<label>Last Name:<br></label>
		<input type="text" name="lname">

	</div>
		<div>
		<label>Admission No:<br></label>
		<input type="text" name="admn">

	</div>
	<div>
		<label>KTU Register No:<br></label>
		<input type="text" name="ktu">

	</div>

	<div>
	    <label for="bday">DOB:</label>
	    <input type="date" id="bday" name="bday">
  </div>
	<div>
		<label>Branch:<br></label>
		<select name="branch">
			<option >Select Branch</option>
			<option value="CSE">CSE</option>
			<option value="ECE">ECE</option>
			<option value="BME">BME</option>
			<option value="EEE">EEE</option>
		</select>
	</div>

	<div>
		<label>Semester:<br></label>
		<select name="sem">
			<option >Select Semester</option>
			<option value="S1">S1</option>
			<option value="S2">S2</option>
			<option value="S3">S3</option>
			<option value="S4">S4</option>
			<option value="S5">S5</option>
			<option value="S6">S6</option>
			<option value="S7">S7</option>
			<option value="S8">S8</option>
		</select>
	</div>
	<div>	
		<label>Batch<br></label>
		<select name="batch">
			<option >Select Batch</option>
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="NA">NA</option>
			
			
		</select>
	</div>
	<div>
		<label>Roll No:<br></label>
		<input type="text" name="roll">

	</div>

	<div>
  		<button  name="bsubmit" >Submit</button>
	</div>

	

</form>

</body>
</html>


<?php
require'db_conn.php';


$fn=isset($_POST['fname']) ? $_POST['fname'] : '';
$ln=isset($_POST['lname']) ? $_POST['lname'] : '';
$admn=isset($_POST['admn']) ? $_POST['admn'] : '';
$ktu=isset($_POST['ktu']) ? $_POST['ktu'] : '';

$rawdate = htmlentities(isset($_POST['bday']) ? $_POST['ktu'] : '');
$bd = date('Y-m-d', strtotime($rawdate));
$branch=isset($_POST['branch']) ? $_POST['branch'] : '';

$semester=isset($_POST['sem']) ? $_POST['sem'] : '';
$batch=isset($_POST['batch']) ? $_POST['batch'] : '';
$roll=isset($_POST['roll']) ? $_POST['roll'] :'';


$cap1=strtoupper($fn);
$cap2=strtoupper($ln);
$cap3=mb_strtoupper($ktu, 'UTF-8');

if(isset($_POST['bsubmit']))
 {
 	
 $q1=mysqli_query($con,"insert into student values('$cap1','$cap2','$admn','$cap3','$bd','$branch','$semester','$batch','$roll');");
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

