<html>
<title>Employee Update</title>
<body style= "background-color:white">
<center>
<img src=""  alt="Cannot be Display" width="400" height="110" >
</center>
<form align="center" action="employee_update.php" method="POST"><b><br>
<h3>Update Employee</h3>
Employee Personal Details :
<h5>Fields with <span style="color:red;">*</span> Must be Filled Before Updating </h5>
ID<span style="color:red;">*</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input  placeholder="Employee ID" type="text" name="emp_id" required><br><br>
Last Name<span style="color:red;">*</span> &nbsp&nbsp&nbsp&nbsp <input placeholder="Last Name" type="text" name="emp_lname" required><br><br>
First Name<span style="color:red;">*</span>&nbsp&nbsp&nbsp&nbsp <input placeholder="First Name" type="text" name="emp_fname" required><br> <br>
Middle Name<span style="color:red;">*</span> <input placeholder="Middle Name" type="text" name="emp_mname" required><br> <br>
Extenstion &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input placeholder="Extension" type="text" name="emp_ename" ><br> <br>
Address<span style="color:red;">*</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input placeholder="Address" type="text" name="emp_addr" required><br><br>
Contact #<span style="color:red;">*</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input placeholder="Contact" type="text" name="emp_contact" required> <br><br>
<span title="Format YYYY-MM-DD">Birthdate<span style="color:red;">*</span> &nbsp&nbsp&nbsp&nbsp&nbsp <input placeholder="YYYY-MM-DD" type="text" name="emp_bdate" required><br><br></span>
<tr><td align="left">Sex<span style="color:red;">*</span></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<td align="right"><select name="emp_sex">
  <option value = "Male">Male</option><option value="Female">Female</option></select></td></tr><br><br>
<tr><td align="left">Status<span style="color:red;">*</span></td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<td align="right"><select name="emp_stat">
  <option value = "Single">Single</option><option value="Married">Married</option></select></td></tr><br><br><br>
<td align="left">Employment Details :</td><br><br><br>
Position<span style="color:red;">*</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input placeholder="Position" style="text" name="emp_pos" required><br><br>
Rate Per Hour<span style="color:red;">*</span> <input placeholder="Rate Per Hour"  type="text" name="rateperhour" required><br><br>
Department<span style="color:red;">*</span>&nbsp&nbsp&nbsp <input placeholder="Dep." style="text" name="emp_dep" required><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="Submit" value="UPDATE">
</form>
<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="mainpagepayroll.php" >Back to Mainpage</a>

<?php
//create connection
$conn = mysqli_connect('localhost','root','','finals');
//check connection
if(!$conn)
{
die("Connection Failed". mysqli_connect_error());	
}
$sql = "SELECT * FROM emp_info";
$result = mysqli_query($conn,$sql);
echo "<table border='1' style='width:1260px'>";
echo "<tr>";
echo "<th>EmpID</th>";
echo "<th>Lname</th>";
echo "<th>Fname</th>";
echo "<th>Mname</th>";
echo "<th >Ename</th>";
echo "<th>Address</th>";
echo "<th>Contact</th>";
echo "<th>Birthdate</th>";
echo "<th>Sex</th>";
echo "<th>Status</th>";
echo "<th>Position</th>";
echo "<th>Rate Per Hour</th>";
echo "<th>Department</th>";
echo "<br><br>";
if(mysqli_num_rows($result)>0){
//output data of each row
while($row=mysqli_fetch_assoc($result)){
 echo "<tr><td align=center>".$row['Emp_ID']."</td>"."<td align=center>".$row['Lname']."</td>"."<td align=center>".$row['Fname']."</td>"."<td align=center>".$row['Mname']."</td>"."<td align=center>".$row['Ename']."</td>"."<td align=center>".$row['Addr']."</td>"."<td align=center>".$row['Contact']."</td>"."<td align=center>".$row['Bdate']."</td>"."<td align=center>".$row['Sex']."</td>"."<td align=center>".$row['Status']."</td>"."<td align=center>".$row['Position']."</td>"."<td align=center>".$row['RatePerHour']."</td>"."<td align=center>".$row['Department']."</td></tr>";
}
}
echo "</table>";
mysqli_close($conn);
?>

</body>
</html>