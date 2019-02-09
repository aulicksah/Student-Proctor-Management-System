<?php
$con=mysqli_connect("localhost","root","","dsce_cse")or die("server not connected");

$sid=$_REQUEST['sid'];

$del="delete from student where sid=$sid";

if(mysqli_query($con,$del))
{

	header("location:teacherdashboard.php");

}
else
{
echo mysqli_error();
}

?>