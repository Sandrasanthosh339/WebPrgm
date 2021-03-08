<html>
<head>
<title>Student Form</title>
</head>
<body>
<form method =  "POST" action="">

Name :
<input type = "text" name = "txtname" />
<br><br>
Branch :
<input type = "text" name = "txtbranch">
<br><br>
Mark :
<input type ="text" name ="txtmark">
<br><br>

<input type = "submit" name = "insert" value = "Save">
<input type = "Reset" value = "Cancel">
<br><br>




</form>

<?php
if(isset($_POST['insert']))
{
 $conn =mysqli_connect("localhost","20mca049","2737","20mca049");
if($conn)
 {
echo "Mysql connection ok<br>";

$name =$_POST['txtname'];
$branch = $_POST['txtbranch'];
$mark =$_POST['txtmark'];

$sql="INSERT INTO STUDENT(name,branch,mark) VALUES ('$name','$branch','$mark')";

if(mysqli_query($conn, $sql))
{
echo "Data inserted successfully<br>";
}

//Selection

$qry = "SELECT * FROM STUDENT";
$result = mysqli_query($conn, $qry);

echo "<table border='1'>
<tr>
<th>Id</th>
<th>Name</th>
<th>Branch</th>
<th>Mark</th>
<th>Update</th>
<th>Delete</th>
</tr>";
while ($row = mysqli_fetch_assoc($result))

{
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['branch']."</td>";
echo "<td>".$row['mark']."</td>";
echo "<td bgcolor='green'><a href='StudData_update.php?id=$row[id]'><font color='white'>Update</a>";
echo "<td bgcolor='green'><a href='StudData_delete.php?id=$row[id]'><font color='white'>Delete</a>";
echo "</tr>";
}
echo "</table>";


mysqli_close($conn);
}
}
?>

</body>

</html>