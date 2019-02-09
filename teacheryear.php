<?php
session_start();

$con=mysqli_connect("localhost","root","","dsce_cse") or die("Server not connected...");

if(isset($_SESSION['tusername']))
{
$username=$_SESSION['tusername'];
$sel1="select * from teacher where username='$username'";

$res1=mysqli_query($con,$sel1);
	

}
else
{
	header("location:index.php");
}



if(isset($_POST['logout']))
{
unset($_SESSION['username']);
header("location:index.php");
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::HOMEPAGE::</title>
<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="bootstrap-3.1.1/dist/css/bootstrap.min.css "rel="stylesheet" type="text/css" >
<link rel="icon" type="image/png" href="img/Logo.png"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Aref Ruqaa' rel='stylesheet'>
<script type="text/javascript" src="jquery-3.2.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
body {
  margin: 0;
  font-family: Verdana,sans-serif;;
}

.navbar{
	background-attachment: fixed;
    color:#fff;
    background-color: #333;
	position:fixed;
	
}


.navbar a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}


.topnav-right {
  float: right;
}

.table { width: 100%; }



.sidenav {
	font-family: Verdana,sans-serif;
	font-size: 17px;
    height: 100%;
    width:10%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    color:#fff;
    background-color: #333;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
	
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 17px;
	background-color: #333;
    color: #FFF;
    display: block;
}

.sidenav a:hover {
      background-color: #ddd;
  color: black;
}

.main {
    margin-left: 160px; /* Same as the width of the sidenav */
    font-size: 24px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>

</head>


<body style="">

<?php
				
while($rr1=mysqli_fetch_array($res1))
{
?>

<div class="navbar  navbar-fixed-top">
<a>Hello <?php echo $rr1['title']." ".$rr1['name']?></a>
  <div class="topnav-right">
	<form method="post">
    <button type="submit" name="logout" style="background-color: #333; border:none; color:#FFFFFF; padding:12px;">Logout</button>
	</form>
  </div>
  
 
 
</div>

<?php } ?>


<div class="sidenav">
<br/><br/>
 
  <a href="teacherdashboard" style="font-family: Verdana,sans-serif;">SEARCH STUDENT</a>
  <a href="insertstudent.php" style="font-family: Verdana,sans-serif;">ADD STUDENT</a>

</div>

			

<div class="main" style="padding:100px 50px;">

				
				
				
				
				
<?php
			// connect to database
			$con = mysqli_connect('localhost','root','');
			mysqli_select_db($con, 'dsce_cse');
			// define how many results you want per page
			$results_per_page = 20;
			
			
			if (isset($_POST['btn2']))
{
$year = $_POST['year'];



			
			
			
			// find out the number of results stored in database
			$sel="select * from student where currentyear='$year'";
			$result = mysqli_query($con, $sel);
			$number_of_results = mysqli_num_rows($result);
			// determine number of total pages available
			$number_of_pages = ceil($number_of_results/$results_per_page);
			// determine which page number visitor is currently on
			if (!isset($_GET['page'])) {
			  $page = 1;
			} else {
			  $page = $_GET['page'];
			}
			// determine the sql LIMIT starting number for the results on the displaying page
			$this_page_first_result = ($page-1)*$results_per_page;
			// retrieve selected results from database and display them on page
			$sql="select * from student where currentyear='$year' ORDER BY usn asc LIMIT " . $this_page_first_result . "," .  $results_per_page;
			$result = mysqli_query($con, $sql);
			?>
			
			
				<div class="panel panel-default" style="opacity:0.9">
					<div class="panel-heading">  
					<h1 ><?php echo strtoupper ($year) ?> STUDENTS</h1>
					
					</div>
						<div class="panel-body container-fluid">
						          <div class=" col-sm-12"> 

				<table class="display table table-striped table-bordered" id="member" style=" background: rgba(255,228,181,0.7);">
				<thead>
				<tr>
					<th>USN</th>
					<th>Name</th>
					<th>Section</th>
					<th>Contact</th>
					<th style="margin:auto">More Detail</th>
				</tr>
				</thead>
				<tbody>
				
				<?php
			
			while($rr = mysqli_fetch_array($result)) {
				?>
						<tr style="font-size:18px;">
							<td><?php echo $rr['usn']; ?></td>
							<td><?php echo strtoupper ($rr['title']." ".$rr['firstname']." ".$rr['middlename']." ".$rr['lastname']); ?></td>
							<td><?php echo strtoupper ($rr['section']); ?></td>
							<td><?php echo "+91 ".$rr['phone']; ?></td>
							<td><center><a href="studentdetails.php?sid=<?php echo $rr['sid']; ?>"><button  class="btn btn-info" style=" opacity:1">More Details</button></a></center></td>
						
						</tr>
				<?php } ?>		
								</tbody>
				 <tfoot>
					<tr>
						<th>ID</th>
					<th>Name</th>
					<th>Section</th>
					<th>Contact</th>
					<th style="margin:auto">More Detail</th>
					</tr>
				</tfoot>
				</table>

			</div>
			</div>
			
			
						
				
				
				
			<center><h4>Page No.:</h4>	
				
		<?php
			// display the links to the pages
			for ($page=1;$page<=$number_of_pages;$page++) {
		?>	
			<div style=" width:30px; border:1px solid #ccc; background-color: #f1f1f1;"><center><?php  echo '<a href="members.php?page=' . $page . '">' . $page . '</a> ';?></center></div>
			<?php
			}
			}
			?>
				
				
				
				
				
				
				
				
	
  </div>
  </div>

</body>


<script>

</script>			


			 

</html>