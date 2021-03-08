<html>
<head>
<title>Customer Form</title>
</head>

<body>
<div align="center">
<h1 style="text-align:center"><u>Insert Data</u></h1>

<form method="post" action="" >
Name :
<input type = "text" name = "txtname" />
<br><br>
Item Purchased :
<input type = "text" name = "txtitem">
<br><br>
Mobile No :
<input type ="text" name ="txtmobno">
<br><br>

<input type="submit" value="submit" name="insert">
<input type="submit" name="view" value="view">
</div>



<?php
$conn=mysqli_connect("localhost","20mca049","2737","20mca049");
if(isset($_POST["insert"]))
{
if($conn)
{
echo "Mysql connection ok<br>";

$name =$_POST['txtname'];
$item = $_POST['txtitem'];
$mobno =$_POST['txtmobno'];


$qry="INSERT INTO tbl_customer(c_name,item_purchased,mob_no) VALUES ('$name','$item','$mobno')";

if(mysqli_query($conn, $qry))
{
echo "Data inserted successfully<br>";
}
}
}
?>

<?php

if(isset($_POST["view"]))
{
$qry="select * from tbl_customer";
$result=mysqli_query($conn, $qry);
?>
<h1 style="text-align:center"><u>CUSTOMER DETAILS</u></h1>
<table align="center" border="1">
<tr>
<th>NO</th>
<th>Name</th>
<th>Item Purchased</th>
<th>Mobile No</th>
</tr>
<?php
while ($row = mysqli_fetch_assoc($result))

{
echo "<tr>";
echo "<td>".$row['c_no']."</td>";
echo "<td>".$row['c_name']."</td>";
echo "<td>".$row['item_purchased']."</td>";
echo "<td>".$row['mob_no']."</td>";

echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
}
?>

</body>
</html>
