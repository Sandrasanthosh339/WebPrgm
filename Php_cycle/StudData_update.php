<html>
<head>
<title>Update Form</title>
</head>

<body>
<?php
$id = $_GET['id'];

$conn =mysqli_connect("localhost","20mca049","2737","20mca049");

$sql = "SELECT * FROM STUDENT where id = '$id' ";
$res = mysqli_query($conn,$sql);
$r = mysqli_fetch_array($res);

?>

<form method = "post" action = "StudData_update.php">
<!--h1 style= "text-align:center"><u>UPDATE</u></h1-->
<input type ="hidden" name= "id" value="<?php echo $_GET['id'];?>">

<table align= "center">
<tr>
<td>Id</td>
<td>:</d>
<td>
<input type="text" name="sid" value="<?php echo $r['id'];?>">
</td>
</tr>

<tr>
<td>Name</td>
<td>:</d>
<td>
<input type="text" name="name" value="<?php echo $r['name'];?>">
</td>
</tr>

<tr>
<td>Branch</td>
<td>:</d>
<td>
<input type="text" name="branch" value="<?php echo $r['branch'];?>">
</td>
</tr>

<tr>
<td>Mark</td>
<td>:</d>
<td>
<input type="text" name="mark" value="<?php echo $r['mark'];?>">
</td>
</tr>

<tr>
<td colspan="2" style="text-align:right">
<td>
<input type="submit" name="update" value="UPDATE">
</td>
</tr>

</table>
</form>

<?php

if(isset($_POST["update"]))
 {

   $id=$_POST['id'];
   $name=$_POST['name'];
   $branch=$_POST['branch'];
   $mark=$_POST['mark'];
   
   $qry = "update STUDENT set name='$name', branch='$branch', mark='$mark' where id='$id'";
 
   
   if(mysqli_query($conn, $qry))
    {
	  echo "Data Upadated Successfully<br>";
	}
 }
?>



</body>
</html>
 


