<?php
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

    $q1=mysqli_query($con,"UPDATE employee SET fname='$cap1',lname='$cap2',age='$age',empid='$cap3',bday='$bd',department='$department',position='$position',grade='$grade',salary='$salary' where empid ='$cap3'");
    if($q1)
    {
      echo"Record Successfully Updated";
    }
    else
    {

      echo"<center>Your Record not Updated</center>" ;
    }
 }
?>


<!DOCTYPE html>

<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <title>Nova Corp</title>
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
<body background="front.jpg">
<center>

<h1  align="center"><br><br>Employee Information System</h1>

<center><a href="home.php">ADD</a>&nbsp&nbsp&nbsp&nbsp<a href="update1.php">UPDATE</a>&nbsp&nbsp&nbsp&nbsp<a href="delete.php">DELETE</a>&nbsp&nbsp&nbsp&nbsp<a href="search.php">SEARCH</a><br><br></center>

<p>Enter the employee id of employee whose details are to be updated</p>
</center>
<form  method="post" name="reg" onsubmit="return validate()">
  
 <div>
    <label>Employee ID:<br></label>
    <input type="text" name="empid">
   
  </div>
 <p>Enter the new details</p>
  <div>
    <label>First Name:<br></label>
    <input type="text" name="fname">
  </div>
  <div>
    <label>Last Name:<br></label>
    <input type="text" name="lname">

  </div>
    <div>
    <label>Age:<br></label>
    <input type="text" name="age">

  </div>
 

  <div>
      <label for="bday">DOB:</label>
      <input type="date" id="bday" name="bday">
  </div>
  <div>
    <label>Department:<br></label>
    <select name="department">
      <option >Select department</option>
      <option value="CSE">CSE</option>
      <option value="ECE">ECE</option>
      <option value="BME">BME</option>
      <option value="EEE">EEE</option>
    </select>
  </div>

  <div>
    <label>Position:<br></label>
    <select name="position">
      <option >Select position</option>
      <option value="HEAD">HEAD</option>
      <option value="STAFF">STAFF</option>
      <option value="CLERK">CLERK</option>
    </select>
  </div>
  <div> 
    <label>Grade<br></label>
    <select name="grade">
      <option >Select grade</option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
      
      
    </select>
  </div>
  <div>
    <label>Salary No:<br></label>
    <input type="text" name="salary">

  </div>
<br><br>
  <div>
      <button  name="bsubmit" >Submit</button>
  </div>

  

</form>

</body>
</html>


