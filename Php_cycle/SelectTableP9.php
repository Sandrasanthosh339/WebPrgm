<html>
<head>
<title>Display Table Format</title>
</head>

<body>

<?php

 $conn =mysqli_connect("localhost","20mca049","2737","20mca049");
if($conn)
 {
echo "Mysql connection ok<br>";
echo "<h1><u>STUDENT DATA</u></h1>";
 $sql = "SELECT * FROM STUDENT";
$res = mysqli_query($conn, $sql);

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Branch</th>
<th>Mark</th>
</tr>";
while ($row = mysqli_fetch_assoc($res))
{
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['branch']."</td>";
echo "<td>".$row['mark']."</td>";
echo "</tr>";
}

echo "</table>";

mysqli_close($conn);
}
?>
</body>
</html>