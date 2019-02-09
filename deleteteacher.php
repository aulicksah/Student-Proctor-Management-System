<?php
$con=mysqli_connect("localhost","root","","dsce_cse")or die("server not connected");

$tid=$_REQUEST['tid'];

$del="delete from teacher where tid=$tid";

if(mysqli_query($con,$del))
{

	header("location:adminteacher.php");

}
else
{
echo mysqli_error();
}

?>