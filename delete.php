<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	<title>Nova Corp</title>
	
	<script type="text/javascript" >
		function validate(){
			if(document.del.empid.value=='')
	        {
	          window.alert("Please Enter empid Reg No!");
	          document.del.empid.focus();
	          return false;

	        }
		}
	</script>
</head>

<body background="front.jpg">
	
	<center>
		<h1  align="center">Employee Information System</h1>
	
		<a href="home.php">ADD</a>&nbsp&nbsp&nbsp&nbsp<a href="update1.php">UPDATE</a>&nbsp&nbsp&nbsp&nbsp<a href="delete.php">DELETE</a>&nbsp&nbsp&nbsp&nbsp<a href="search.php">SEARCH</a><br><br>
	</center>




<center>
<form method="POST" action="" name="del" onsubmit="return validate()">


<tr>
		<td>Enter Employee ID</td>
		<td><input type="text" name="empid" /></td>
	</tr>

		<td>&nbsp;</td>
		
		<button name="bsubmit">Delete</button>
	</tr>
 </table>
</form>
</center>
</body>
</html>


<?php
require'db_conn.php';

$empid=isset($_POST['empid']) ? $_POST['empid'] : '';

$cap3=mb_strtoupper($empid, 'UTF-8');

if(isset($_POST['bsubmit']))
 {

 $del=mysqli_query($con,"DELETE FROM employee where empid='$cap3'");


if($del)
{
 echo"<center>Record Successfully Deleted</center>";
}
else
{

echo"<center>Your Record Not Deleted</center>" ;
}
 }
?>
