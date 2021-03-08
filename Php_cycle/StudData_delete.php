<?php

$conn =mysqli_connect("localhost","20mca049","2737","20mca049");

$id=$_GET["id"];
if($conn)
{

$qry1="delete from STUDENT where id='$id'";
if(mysqli_query($conn, $qry1))
{
echo "Data Removed<br>";
} 
}
?>