
<?php
ob_start();


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






if (isset($_POST['btn']))
{
$ttl=$_POST['title'];
$fnm=$_POST['firstname'];
$mnm=$_POST['middlename'];
$lnm=$_POST['lastname'];
$usn=$_POST['usn'];
$enrl=$_POST['enrollid'];
$lftcrse=$_POST['leftcourse'];
$sec=$_POST['section'];
$sft=$_POST['shift'];
$admtyp=$_POST['admissiontype'];
$cursem=$_POST['currentsem'];
$curyr=$_POST['currentyear'];
$admdt=$_POST['admissiondate'];
if ($admdt=="")
	$admdt='1000-01-31';
$acdyr=$_POST['academicyear'];
$rno=$_POST['rollno'];
$db=$_POST['dob'];
$gen=$_POST['gender'];
if ($db=="")
	$db='1000-01-31';
$src1=$_FILES['photo']['tmp_name'];
$des1="img/".$_FILES['photo']['name'];
$des2=$_FILES['photo']['name'];
move_uploaded_file($src1,$des1);
$ph=$_POST['phone'];
$eml=$_POST['email'];
$adhr=$_POST['aadhar'];
$rel=$_POST['religion'];
$rescat=$_POST['reservecategory'];
$cat=$_POST['category'];
$cst=$_POST['caste'];
$hndcp=$_POST['handicap'];
$ecobg=$_POST['ecobg'];
$motnm=$_POST['mothername'];
$motph=$_POST['motherphone'];
$fatnm=$_POST['fathername'];
$fatph=$_POST['fatherphone'];
$sem1=$_POST['sem1'];
$sem2=$_POST['sem2'];
$sem3=$_POST['sem3'];
$sem4=$_POST['sem4'];
$sem5=$_POST['sem5'];
$sem6=$_POST['sem6'];
$sem7=$_POST['sem7'];
$sem8=$_POST['sem8'];
$cgpa=$_POST['cgpa'];
$rsadd=$_POST['resadd'];
$rsdst=$_POST['resdist'];
$rsstt=$_POST['resstate'];
$rspin=$_POST['respin'];
$lcladd=$_POST['localadd'];
$lcldst=$_POST['localdist'];
$lclstt=$_POST['localstate'];
$lclpin=$_POST['localpin'];
$hmtyp=$_POST['hometype'];
$tfw=$_POST['tfw'];
$fs=$_POST['fees'];
$extracurr1=$_POST['extracurr1'];
$extracurr2=$_POST['extracurr2'];
$extracurr3=$_POST['extracurr3'];
$extracurr4=$_POST['extracurr4'];
$extracurr5=$_POST['extracurr5'];
$pgcet=$_POST['pgcet'];
$gate=$_POST['gate'];
$gre=$_POST['gre'];
$gmat=$_POST['gmat'];
$toefl=$_POST['toefl'];
$university1=$_POST['university1'];
$course1=$_POST['course1'];
$university2=$_POST['university2'];
$course2=$_POST['course2'];
$university3=$_POST['university3'];
$course3=$_POST['course3'];
$company1=$_POST['company1'];
$position1=$_POST['position1'];
$company2=$_POST['company2'];
$position2=$_POST['position2'];
$company3=$_POST['company3'];
$position3=$_POST['position3'];


$ins="insert into student(title,firstname,middlename,lastname,usn,enrollid,leftcourse,section,shift,admissiontype,currentsem,currentyear,admissiondate,academicyear,rollno,dob,gender,photo,phone,email,aadhar,religion,reservecategory,category,caste,handicap,economicbg,mothername,motherphone,fathername,fatherphone,sem1,sem2,sem3,sem4,sem5,sem6,sem7,sem8,cgpa,resadd,resdist,resstate,respin,localadd,localdist,localstate,localpin,hometype,tfw,fees,extracurr1,extracurr2,extracurr3,extracurr4,extracurr5,pgcet,gate,gre,gmat,toefl,university1,course1,university2,course2,university3,course3,company1,position1,company2,position2,company3,position3)values('$ttl','$fnm','$mnm','$lnm','$usn','$enrl','$lftcrse','$sec','$sft','$admtyp','$cursem','$curyr','$admdt','$acdyr','$rno','$db','$gen','$des2','$ph','$eml','$adhr','$rel','$rescat','$cat','$cst','$hndcp','$ecobg','$motnm','$motph','$fatnm','$fatph','$sem1','$sem2','$sem3','$sem4','$sem5','$sem6','$sem7','$sem8','$cgpa','$rsadd','$rsdst','$rsstt','$rspin','$lcladd','$lcldst','$lclstt','$lclpin','$hmtyp','$tfw','$fs','$extracurr1','$extracurr2','$extracurr3','$extracurr4','$extracurr5','$pgcet','$gate','$gre','$gmat','$toefl','$university1','$course1','$university2','$course2','$university3','$course3','$company1','$position1','$company2','$position2','$company3','$position3')";

if(mysqli_query($con,$ins))
{
header("location:teacherdashboard.php");
}
else
{
echo mysqli_error();
}
}


if(isset($_POST['logout']))
{
unset($_SESSION['tusername']);
header("location:index.php");
}
ob_end_flush();
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
 
  <a href="teacherdashboard.php" style="font-family: Verdana,sans-serif;">SEARCH STUDENT</a>
  <a href="insertstudent.php" style="font-family: Verdana,sans-serif;">ADD STUDENT</a>


</div>

<div class="main" style="padding:150px;">

				
				
				
				
				

				



<form class="form-horizontal" method="post" enctype="multipart/form-data" onsubmit="return validate()" >





<div class="container-fluid" >
	<div class="row" >
		
			
			
			
				<div class="panel panel-default" style="opacity:0.9">
					<div class="panel-heading">  
					<center><h1 >STUDENT'S REGISTRATION</h1></center>					
					</div>
						<div class="panel-body container-fluid">
						          <div class=" col-sm-12"> 
                  <table class="table table-user-information">
                    <tbody>
                      
                      
                      <tr>
                        
                        <td>
						STUDENT NAME
								<div class="form-group" >
									<label class="control-label col-md-3" >Title:</label>
									<div class="col-md-9">
									  <select name="title" class="form form">
									  <option selected value="none" >Select</option>
									<option  value="Ms." >Ms.</option>
									<option value="Mr.">Mr.</option>
									</select>
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >First Name:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" name="firstname" placeholder="Enter First Name">
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Middle Name:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" name="middlename" placeholder="Enter Middle Name">
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Last Name:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name">
									</div>
								  </div>
								  
								  
                        </td>
                      </tr>



<tr>
                        
                        <td>
						STUDENT NAME
		
								  <div class="form-group" >
									<label class="control-label col-md-3" >Proctor's Name:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" name="proctorname" placeholder="Enter Proctor's Name">
									</div>
								  </div>
								  
							
								  
								  
                        </td>
                      </tr>



                      
					  <tr>
                        
                        <td>
						ADMISSION DETAILS
								<div class="form-group" >
									<label class="control-label col-md-3" >USN:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control"  name="usn" placeholder="Enter Student's USN"/>
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Enroll ID:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" name="enrollid" placeholder="Enter Student's Enroll ID"/>
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Left Course:</label>
									<div class="col-md-9">
									  <input type="radio" value="Yes" name="leftcourse" />Yes <input type="radio" value="No" name="leftcourse" />No<br/><br/>
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Section:</label>
									<div class="col-md-9">
									  <select name="section" class="form form">
			  <option selected value="none" >Select</option>
			<option value="1A">1A</option>
			<option value="1B">1B</option>
			<option value="1C">1C</option>
			<option value="1D">1D</option>
			<option value="1E">1E</option>
			<option value="1F">1F</option>
			<option value="1G">1G</option>
			<option value="1H">1H</option>
			<option value="1I">1I</option>
			<option value="1J">1J</option>
			<option value="1K">1K</option>
			<option value="1L">1L</option>
			<option value="2A">2A</option>
			<option value="2B">2B</option>
			<option value="2C">2C</option>
			<option value="2D">2D</option>
			<option value="2E">2E</option>
			<option value="2F">2F</option>
			<option value="2G">2G</option>
			<option value="2H">2H</option>
			<option value="2I">2I</option>
			<option value="2J">2J</option>
			<option value="2K">2K</option>
			<option value="2L">2L</option>
			<option value="3A">3A</option>
			<option value="3B">3B</option>
			<option value="3C">3C</option>
			<option value="3D">3D</option>
			<option value="4A">4A</option>
			<option value="4B">4B</option>
			<option value="4C">4C</option>
			<option value="4D">4D</option>
			<option value="5A">5A</option>
			<option value="5B">5B</option>
			<option value="5C">5C</option>
			<option value="5D">5D</option>
			<option value="6A">6A</option>
			<option value="6B">6B</option>
			<option value="6C">6C</option>
			<option value="6D">6D</option>
			<option value="7A">7A</option>
			<option value="7B">7B</option>
			<option value="7C">7C</option>
			<option value="7D">7D</option>
			<option value="8A">8A</option>
			<option value="8B">8B</option>
			<option value="8C">8C</option>
			<option value="8D">8D</option>
			</select>
									</div>
								  </div>
								  
								 <div class="form-group" >
									<label class="control-label col-md-3" >Shift:</label>
									<div class="col-md-9">
									  <input type="radio" value="Yes" name="shift" />Yes <input type="radio" value="No" name="shift" />No
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Admission Type:</label>
									<div class="col-md-9">
									  <select name="admissiontype" class="form">
									  <option selected value="none" >Select</option>
									<option  value="CET" >CET</option>
									<option value="COMED-K">COMED-K</option>
									<option value="Management">Management</option>
									</select>
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Current Semester:</label>
									<div class="col-md-9">
									  <select name="currentsem" class="form form">
			  <option selected value="none" >Select</option>
			<option value="1st Semester">1st Semester</option>
			<option value="2nd Semester">2nd Semester</option>
			<option value="3rd Semester">3rd Semester</option>
			<option value="4th Semester">4th Semester</option>
			<option value="5th Semester">5th Semester</option>
			<option value="6th Semester">6th Semester</option>
			<option value="7th Semester">7th Semester</option>
			<option value="8th Semester">8th Semester</option>
			
			</select>									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Current Year:</label>
									<div class="col-md-9">
									  <select name="currentyear" class="form form">
			  <option selected value="none" >Select</option>
			<option value="1st Year">1st Year</option>
			<option value="2nd Year">2nd Year</option>
			<option value="3rd Year">3rd Year</option>
			<option value="4th Year">4th Year</option>			
			</select>
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Admission Date:</label>
									<div class="col-md-9">
									  <input type="date" class="form form"  name="admissiondate" />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Academic Year:</label>
									<div class="col-md-9">
									  <select name="academicyear" class="form form">
			  <option selected value="none" >Select</option>
			<option value="2014-2018">2014-2018</option>
			<option value="2015-2019">2015-2019</option>
			<option value="2016-2020">2016-2020</option>
			<option value="2017-2021">2017-2021</option>			
			</select>									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Class Roll No.:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control"  name="rollno" placeholder="Roll No." style="width:10%;"/>
									</div>
								  </div>
								  
								  
                        </td>
                      </tr>
					  
			 
					  <tr>
                        
                        <td>
						PERSONAL DETAILS
								<div class="form-group" >
									<label class="control-label col-md-3" >Date of Birth:</label>
									<div class="col-md-9">
									  <input type="date" class="form form" id="dob" name="dob" placeholder="Enter Date of Birth"/>
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Gender:</label>
									<div class="col-md-9">
									  <input type="radio" value="Male" name="gender" />Male <input type="radio" value="Female" name="gender" />Female
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Photo:</label>
									<div class="col-md-9">
									  <input type="file" id="photo" name="photo" style="float:center;"  />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Phone Number:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control"  name="phone" placeholder="Enter Phone No." />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Email-Id:</label>
									<div class="col-md-9">
									  <input type="email" class="form-control"  name="email" placeholder="Enter Email ID" />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Aadhar Card No.:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" name="aadhar" placeholder="Enter your Aadhar Card No." />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Religion :</label>
									<div class="col-md-9">
									  <select name="religion" class="form form">
						<option selected value="none" >Select</option>
						<option value="Hinduism">Hinduism</option>
						<option value="Islam">Islam</option>
						<option value="Christianity">Christianity</option>
						<option value="Sikhism">Sikhism</option>	
						<option value="Buddhism">Buddhism</option>
						<option value="Jainism">Jainism</option>
						<option value="Zoroastrianism">Zoroastrianism</option>
						<option value="Others">Others</option>
						
						</select>
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Reserve Category:</label>
									<div class="col-md-9">
									<input type="radio" value="Yes" name="reservecategory" />Yes <input type="radio" value="No" name="reservecategory" />No  
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Category:</label>
									<div class="col-md-9">
									  <select name="category" class="form form">
						<option selected value="none" >Select</option>
						<option value="General">General</option>
						<option value="OBC(Creamy layer)">OBC(Creamy layer)</option>
						<option value="OBC(Non-Creamy Layer)">OBC(Non-Creamy Layer)</option>
						<option value="Scheduled Caste(SC)">Scheduled Caste(SC)</option>	
						<option value="Scheduled Tribe(ST)">Scheduled Tribe(ST)</option>
						
						</select>
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Caste:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" name="caste" placeholder="Enter your Caste" style="width:60%;"/>
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Handicap:</label>
									<div class="col-md-9">
									  <input type="radio" value="Yes" name="handicap" />Yes<input type="radio" value="No" name="handicap"/>No
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Economic Background:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="fees" name="ecobg" placeholder="Enter your Economic Background" style="width:60%;"/>
									</div>
								  </div>
								  
                        </td>
                      </tr>
			
			
			<tr>
                        
                        <td>
						PARENTS DETAILS
								<div class="form-group" >
									<label class="control-label col-md-3" >Mother's name:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="name" name="mothername" placeholder="Enter your Mother's Name"/>
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Mother's Phone No.:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="motherphone" placeholder="Enter Mother's Phone No." />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Father's Name:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="name" name="fathername" placeholder="Enter your Father's Name"/>
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Father's Phone No.:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="fatherphone" placeholder="Enter father's Phone No." />
									</div>
								  </div>
								  
								  
                        </td>
                      </tr>
					  
					  
					  <tr>
                        
                        <td>
						
								<table border="1">
								 
								 <thead>ACADEMIC DETAILS</thead>
								<tr>
									<th>SEMESTER</th>
									<th>1ST SEM</th>
									<th>2ND SEM</th>
									<th>3RD SEM</th>
									<th>4TH SEM</th>
									<th>5TH SEM</th>
									<th>6TH SEM</th>
									<th>7TH SEM</th>
									<th>8TH SEM</th>
									<th>SGPA</th>
								</tr>
								<tr>
									<th>GRADE POINT</th>
									<td><input type="text" class="form-control" id="sem1" name="sem1" placeholder="1st Sem" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem2" name="sem2" placeholder="2nd Sem" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem3" name="sem3" placeholder="3rd Sem" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem4" name="sem4" placeholder="4th Sem" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem5" name="sem5" placeholder="5th Sem" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem6" name="sem6" placeholder="6th Sem" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem7" name="sem7" placeholder="7th Sem" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem8" name="sem8" placeholder="8th Sem" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="cgpa" name="cgpa" placeholder="8th Sem" style="width:100%;"/></td>
								
									
								</tr>
								
								</table>
								  
								  
                        </td>
                      </tr>
			
				<tr>
                        
                        <td>
						RESIDENTIAL ADDRESS<br/>
						<b>Permanent Address:</b>
								<div class="form-group" >
									<label class="control-label col-md-3" >Address Line:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="resadd" placeholder="Enter Permanent Address" />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >District:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="resdist" placeholder="Enter District" />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >State:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="resstate" placeholder="Enter State" />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Pin Code:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="respin" placeholder="Enter Pin Code" />
									</div>
								  </div>
								  
						<b>Local Address:</b>
								<div class="form-group" >
									<label class="control-label col-md-3" >Address Line:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="localadd" placeholder="Enter Local Address" />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >District:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="localdist" placeholder="Enter District" />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >State:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="localstate" placeholder="Enter State" />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Pin Code:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="localpin" placeholder="Enter Pin Code" />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Local Home Type:</label>
									<div class="col-md-9">
									  <select name="hometype" class="form form">
									  <option selected value="none" >Select</option>
									<option  value="Home" >Home</option>
									<option value="Hostel">Hostel</option>
									<option value="P.G./Flat">P.G./Flat</option>
									</select>
									</div>
								  </div>
								  
                        </td>
                      </tr>
			
			<tr>
                        
                        <td>
						FEES DETAILS
								<div class="form-group" >
									<label class="control-label col-md-3" >Tution Fee Waiver:</label>
									<div class="col-md-9">
									  <input type="radio" value="Yes" name="tfw" />Yes <input type="radio" value="No" name="tfw" />No
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Fees paid:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="fees" name="fees" placeholder="Enter fees amount paid" style="width:60%;"/>
									</div>
								  </div>
								  
								  							  
								  
                        </td>
                      </tr>
					  
					 <tr>
                        
                        <td>
						
								<table border="1">
								 
								 <thead>EXTRA-CURRICULAR ACTIVITIES</thead>
								<tr>
									<th>S.NO.</th>
									<th>ACTIVITIES</th>
								</tr>
								<tr>
									<th>1</th>
									<td><input type="text" class="form-control" id="sem1" name="extracurr1" placeholder="1st Activity" style="width:100%;"/></td>
								</tr>
								<tr>
									<th>2</th>
									<td><input type="text" class="form-control" id="sem2" name="extracurr2" placeholder="2nd Activity" style="width:100%;"/></td>
								</tr>
								<tr>
									<th>3</th>
									<td><input type="text" class="form-control" id="sem3" name="extracurr3" placeholder="3rd Activity" style="width:100%;"/></td>
								</tr>
								<tr>
									<th>4</th>
									<td><input type="text" class="form-control" id="sem4" name="extracurr4" placeholder="4th Activity" style="width:100%;"/></td>
								</tr>
								<tr>
									<th>5</th>
									<td><input type="text" class="form-control" id="sem5" name="extracurr5" placeholder="5th Activity" style="width:100%;"/></td>
								</tr>
								
								
								
								</table>
								  
								  
                        </td>
                      </tr>

					 <tr>
                        
                        <td>
						
								<table border="1">
								 
								 <thead>COMPETITIVE EXAMS DETAILS</thead>
								<tr>
									<th>SEMESTER</th>
									<th>MARKS/PERCENTAGE</th>
								</tr>
								<tr>
									<th>PG/CET</th>
									<td><input type="text" class="form-control" id="sem1" name="pgcet" placeholder="PG/CET Marks" style="width:100%;"/></td>
								</tr>
								<tr>
									<th>GATE</th>
									<td><input type="text" class="form-control" id="sem2" name="gate" placeholder="GATE Marks" style="width:100%;"/></td>
								</tr>
								<tr>
									<th>GMAT</th>
									<td><input type="text" class="form-control" id="sem3" name="gmat" placeholder="GMAT Marks" style="width:100%;"/></td>
								</tr>
								<tr>
									<th>GRE</th>
									<td><input type="text" class="form-control" id="sem4" name="gre" placeholder="GRE Marks" style="width:100%;"/></td>
								</tr>
								<tr>
									<th>TOEFL</th>
									<td><input type="text" class="form-control" id="sem5" name="toefl" placeholder="TOEFL" style="width:100%;"/></td>
								</tr>
								
								
								
								</table>
								  
								  
                        </td>
                      </tr>
					  
					  <tr>
                        
                        <td>
						
								<table border="1">
								 
								 <thead>HIGHER EDUCATION DETAILS</thead>
								<tr>
									<th>S.NO.</th>
									<th>UNIVERSITY/COLLEGE</th>
									<th>COURSE</th>
								</tr>
								<tr>
									<th>1.</th>
									<td><input type="text" class="form-control" id="sem1" name="university1"  style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem1" name="course1"  style="width:100%;"/></td>
								</tr>
								<tr>
									<th>2.</th>
									<td><input type="text" class="form-control" id="sem2" name="university2" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem2" name="course2" style="width:100%;"/></td>
								</tr>
								<tr>
									<th>3.</th>
									<td><input type="text" class="form-control" id="sem3" name="university3" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem3" name="course3" style="width:100%;"/></td>
								</tr>
								
								
								
								</table>
								  
								  
                        </td>
                      </tr>
					  
					  <tr>
                        
                        <td>
						
								<table border="1">
								 
								 <thead>EMPLOYMENT DETAILS</thead>
								<tr>
									<th>S.NO.</th>
									<th>COMPANY</th>
									<th>DETAILS</th>
								</tr>
								<tr>
									<th>1.</th>
									<td><input type="text" class="form-control" id="sem1" name="company1"  style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem1" name="position1"  style="width:100%;"/></td>
								</tr>
								<tr>
									<th>2.</th>
									<td><input type="text" class="form-control" id="sem2" name="company2" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem2" name="position2" style="width:100%;"/></td>
								</tr>
								<tr>
									<th>3.</th>
									<td><input type="text" class="form-control" id="sem3" name="company3" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem3" name="position3" style="width:100%;"/></td>
								</tr>
								
								
								
								</table>
								  
								  
                        </td>
                      </tr>

                     
                    </tbody>
					
                  </table>
						<center><button type="submit" class="btn btn-success" name="btn" style=" opacity:1">REGISTER</button></center>


						</div>
					</div>
				</div>
		
			
	
		
	</div>	
</div>

</form>	
				
				
				
				
				
				
				
				
	
  </div>

</body>


<script>

</script>			


			 

</html>





