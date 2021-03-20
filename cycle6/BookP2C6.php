<html>
<body bgcolor="87ceeb">
<center><h2>BOOK INFORMATIONS</h2></center>

<form action="" method="post">

<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td> Accession No :</td>
<td> <input type="text" name="txtacno" size="48"> </td>
</tr>
<tr>
<td> Title :</td>
<td> <input type="text" name="txttitle" size="48"> </td>
</tr>
<tr>
<td> Author :</td>
<td> <input type="text" name="txtauthor" size="48"> </td>
</tr>
<tr>
<td> Edition :</td>
<td> <input type="text" name="txtedition" size="48"> </td>
</tr>
<tr>
<td> Publication: </td>
<td> <input type="text" name="txtpublication" size="48"> </td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" name='insert' value="Submit">
<input type="reset" value="Reset">
<td><a href="BookSearchP2C6.php">Search</a></td>
<!--input type="text" name="search_id" -->
<!--input type="submit" name='search' value="Search" -->
</td>
</tr>
</table>
</form>

<?php
if(isset($_POST['insert']))
{
 $conn =mysqli_connect("localhost","20mca049","2737","20mca049");
if($conn)
 {
echo "Mysql connection ok<br>";

$acno =$_POST['txtacno'];
$title = $_POST['txttitle'];
$author =$_POST['txtauthor'];
$edition =$_POST['txtedition'];
$publisher =$_POST['txtpublication'];

$sql="INSERT INTO tbl_book(accessno,title,author,edition,publisher) VALUES ('$acno','$title','$author','$edition','$publisher')";

if(mysqli_query($conn, $sql))
{
echo "Data inserted successfully<br>";
}

mysqli_close($conn);
}
}
?>
</table>


</body>
</html>