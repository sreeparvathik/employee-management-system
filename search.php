
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <title>Nova Corp</title>
  <script type="text/javascript" >
    function validate(){
      if(document.ser.empid.value=='')
          {
            window.alert("Please Enter Employee ID :");
            document.ser.empid.focus();
            return false;

          }
    }
  </script>
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

<body background="back.jpg" >
  <center>
    <br><br><br><br><h1  align="center">Employee Information System</h1>
  
    <a href="home.php">ADD</a>&nbsp&nbsp&nbsp&nbsp<a href="update1.php">UPDATE</a>&nbsp&nbsp&nbsp&nbsp<a href="delete.php">DELETE</a>&nbsp&nbsp&nbsp&nbsp<a href="search.php">SEARCH</a><br><br>
    <form method="POST" name="ser" onsubmit="return validate()">
        <label>Enter Employee ID</label>
      <div>
        <input type="text" name="entry">
      </div>
      <br><br>
      <div>
        <button name="bsubmit">Search</button>
      </div>
      
      
    </form>
  </center>
</body>
</html>


<?php

 require 'db_conn.php';

 $ent=isset($_POST['entry']) ? $_POST['entry'] : '';
 $cap=mb_strtoupper($ent, 'UTF-8'); 

if(isset($_POST['bsubmit']))
 {

$result=mysqli_query($con,"select * from employee where empid='$cap'");


while($row = mysqli_fetch_assoc($result)) {
        echo "FIRST NAME: " . $row["fname"]. "<br> LAST NAME: " . $row["lname"]. "<br> empid REG NO: " . $row["empid"]."<br> ADMISSION NO: ". $row["age"]. "<br>DOB: ". $row["bday"]."<br> DEPARTMENT: ". $row["department"]."<br>POSITION: ". $row["position"]."<br>GRADE: ". $row["grade"]."<br> salary NO: ". $row["salary"];
    }
 
  


}

 mysqli_close($con);




?>

