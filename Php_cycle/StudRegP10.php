<html>
<head>
<title>General Form</title>
</head>

<body bgcolor="powderblue">

<?php

$conn =mysqli_connect("localhost","20mca049","2737","20mca049");

$sql = "SELECT * FROM STUDENT where id = '$id' ";
$res = mysqli_query($conn,$sql);
$r = mysqli_fetch_array($res);

?>

<form method = "POST" action="StudRegP10.php">


Name :
<input type = "text" name = "txtname"/>
<br><br>
Roll NO :
<input type = "text" name = "txtr_no">
<br><br>
Gender :
<input type ="text" name ="txtgen">
<br><br>
Address :
<textarea name = "txtadd" type = "textarea"></textarea>
<br><br>
<input type = "submit" name = "insert" value = "Save">
<!--input type = "submit" name = "view" value = "View"-->

</form>


<?php

if(isset($_POST['insert']))
 {
  $conn = mysqli_connect("localhost","20mca049","2737","20mca049");
  if($conn)
  {
   echo "Mysql Connection Ok<br>";
   
   $name =$_POST['txtname'];
   $rollno =$_POST['txtr_no'];
   $gender =$_POST['txtgen'];
   $address =$_POST['txtadd'];
   
   $sql = "INSERT INTO tbl_studreg(name,rollno,gender,address) VALUES ('$name','$rollno','$gender','$address')";

   if(mysqli_query($conn, $sql))
   {
    echo "Data Inserted Successfully<br>";
   }
   
  
	$qry = "SELECT * FROM tbl_studreg";
   $result = mysqli_query($conn, $qry);
   
   echo "<table border='1'>
<tr>
<th>Id</th>
<th>Name</th>
<th>Roll NO</th>
<th>Gender</th>
<th>Address</th>
</tr>";
   
   while ($row = mysqli_fetch_assoc($result))

{
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['rollno']."</td>";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['address']."</td>";
echo "</tr>";
}
echo "</table>";


mysqli_close($conn);

  }
 }
 

?>
</body>

</html>
