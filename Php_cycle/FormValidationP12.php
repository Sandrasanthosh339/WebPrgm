<html>
<head></head>
<title>Form Validation</title>
<body>
<style>
.error {color: #FF0000;}
</style>
<?php
$sid=$name=$branch=$mark="";
if(isset($_POST["submit"]))
{
if(empty($_POST["sid"]))
{
$iderror="Student id required";
}
elseif($_POST["sid"]>100)
{
$iderror1="Enter a value less than 100";
} 
else
{
$sid=$_POST["sid"];
}
if(empty($_POST["name"]))
{
$nameerror="Student name required";
}
else
{
$name=$_POST["name"];
}
if(empty($_POST["branch"]))
{
$brancherror="Branch required";
}
else
{
$branch=$_POST["branch"];
}
if(empty($_POST["mark"]))
{
$markerror="Enter your mark";
}
elseif($_POST["mark"]>1200)
{
$markerror1="Enter a valid value";
}
else
{
$mark=$_POST["mark"];
}
}
?>
<form method="post" action="FormValidationP12.php" >
<h1 style="text-align:center"><u>STUDENT REGISTRATION FORM</u></h1>

<table align="center">
<tr>
<td>ID</td>
<td>:</td>
<td><input type="text" name="sid"><span class="error">*<?php echo $iderror; echo $iderror1;?></span></td></tr>

<tr>
<td>Name</td>
<td>:</td>
<td><input type="text" name="name"><span class="error">*<?php echo $nameerror; ?></span></td></tr>
<tr>
<td>Branch</td>
<td>:</td>
<td><input type="text" name="branch"><span class="error">*<?php echo $brancherror; ?></span></td></tr>
<tr>
<td>Mark</td>
<td>:</td>
<td><input type="text" name="mark"><span class="error">*<?php echo $markerror;echo $markerror1; ?></span></td></tr>
<tr>
<td>&nbsp;</td></tr>
<tr>
<td colspan="2" style="text-align:right"><input type="submit" value="submit" name="submit"></td></tr>
</table>
</form>


</body>
</html>
