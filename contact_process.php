<?php
$cfrom = $_REQUEST['email'];
$name = $_REQUEST['name'];
$subject = $_REQUEST['subject'];
$cmessage = $_REQUEST['message'];

$con=mysqli_connect("localhost","root","","mosa");
if(!$con)
{
	dei('not connect' .mysqli_error($con));
}

$result=mysqli_query($con,"insert into website(cfrom,name,subject,cmessage) value ('$cfrom','$name','$subject','$cmessage')");

if(!$result)
{
	die('not insert' .mysqli_error($con).$result);
}
mysqli_close($con);
?>
<html>
<body>
<h3>name:<?php echo $name?>is inserted
</body>
</html>
