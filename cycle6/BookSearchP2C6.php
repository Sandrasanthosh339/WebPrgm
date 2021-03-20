
<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>BOOK INFORMATIONS</h2></center>
<form action = "" method="post">
<br>
<center>Enter the title of the book to be searched :
<input type="text" name="txtsearch" size="48">
<br></br>
<input type="submit"  name='search' value="Submit">
<input type="reset" value="Cancel" >
</center>
<br>
</form>


<?php

if(isset($_POST['search']))
{
 $conn =mysqli_connect("localhost","20mca049","2737","20mca049");
if($conn)
 {
echo "Mysql connection ok<br>";

$search = $_REQUEST["txtsearch"];
//$search = $_POST["txtsearch"];

$query = "SELECT * FROM tbl_book WHERE title like '%$search%'"; //search with a book name in the table book_info
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0)

{
?>

<table border="2" align="center" cellpadding="5" cellspacing="5">

<tr>
<th> ACCESSION NO </th>
<th> TITLE </th>
<th> AUTHOR </th>
<th> EDITION </th>
<th> PUBLICATION </th>
</tr>

<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["accessno"];?> </td>
<td><?php echo $row["title"];?> </td>
<td><?php echo $row["author"];?> </td>
<td><?php echo $row["edition"];?> </td>
<td><?php echo $row["publisher"];?> </td>
</tr>
<?php
}
}
else
echo "<center>No books found in the library by the name $search </center>" ;
 }
 }
?>
</table>
</body>
</html>
