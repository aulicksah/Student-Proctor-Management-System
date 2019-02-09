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



$sid=$_REQUEST['sid'];
$sel="select * from student where sid=$sid";

$res=mysqli_query($con,$sel);


while($rr=mysqli_fetch_array($res))
{

$ttl=$rr['title'];
$fnm=$rr['firstname'];
$mnm=$rr['middlename'];
$lnm=$rr['lastname'];
$usn=$rr['usn'];
$enrl=$rr['enrollid'];
$lftcrse=$rr['leftcourse'];
$sec=$rr['section'];
$sft=$rr['shift'];
$admtyp=$rr['admissiontype'];
$cursem=$rr['currentsem'];
$curyr=$rr['currentyear'];
$admdt=$rr['admissiondate'];
$acdyr=$rr['academicyear'];
$rno=$rr['rollno'];
$db=$rr['dob'];
$gen=$rr['gender'];
$pht=$rr['photo'];
$ph=$rr['phone'];
$eml=$rr['email'];
$adhr=$rr['aadhar'];
$rel=$rr['religion'];
$rescat=$rr['reservecategory'];
$cat=$rr['category'];
$cst=$rr['caste'];
$hndcp=$rr['handicap'];
$ecobg=$rr['economicbg'];
$motnm=$rr['mothername'];
$motph=$rr['motherphone'];
$fatnm=$rr['fathername'];
$fatph=$rr['fatherphone'];
$sem1=$rr['sem1'];
$sem2=$rr['sem2'];
$sem3=$rr['sem3'];
$sem4=$rr['sem4'];
$sem5=$rr['sem5'];
$sem6=$rr['sem6'];
$sem7=$rr['sem7'];
$sem8=$rr['sem8'];
$cgpa=$rr['cgpa'];
$rsadd=$rr['resadd'];
$rsdst=$rr['resdist'];
$rsstt=$rr['resstate'];
$rspin=$rr['respin'];
$lcladd=$rr['localadd'];
$lcldst=$rr['localdist'];
$lclstt=$rr['localstate'];
$lclpin=$rr['localpin'];
$hmtyp=$rr['hometype'];
$tfw=$rr['tfw'];
$fs=$rr['fees'];
$extracurr1=$rr['extracurr1'];
$extracurr2=$rr['extracurr2'];
$extracurr3=$rr['extracurr3'];
$extracurr4=$rr['extracurr4'];
$extracurr5=$rr['extracurr5'];
$pgcet=$rr['pgcet'];
$gate=$rr['gate'];
$gmat=$rr['gmat'];
$gre=$rr['gre'];
$toefl=$rr['toefl'];
$university1=$rr['university1'];
$course1=$rr['course1'];
$university2=$rr['university2'];
$course2=$rr['course2'];
$university3=$rr['university3'];
$course3=$rr['course3'];
$company1=$rr['company1'];
$position1=$rr['position1'];
$company2=$rr['company2'];
$position2=$rr['position2'];
$company3=$rr['company3'];
$position3=$rr['position3'];
	
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
if ($db=="")
	$db='1000-01-31';
$gen=$_POST['gender'];
if($_FILES['photo']['name']!="")
	{
		$src1=$_FILES['photo']['tmp_name'];
		$des1="img/".$_FILES['photo']['name'];
		$des2=$_FILES['photo']['name'];
		move_uploaded_file($src1,$des1);
	}
else
{
$des2=$pht;
}

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
$gmat=$_POST['gmat'];
$gre=$_POST['gre'];
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





$updt="update student set title='$ttl',firstname='$fnm',middlename='$mnm',lastname='$lnm',usn='$usn',enrollid='$enrl',leftcourse='$lftcrse',section='$sec',shift='$sft',admissiontype='$admtyp',currentsem='$cursem',currentyear='$curyr',admissiondate='$admdt',academicyear='$acdyr',rollno='$rno',dob='$db',gender='$gen',photo='$des2',phone='$ph',email='$eml',aadhar='$adhr',religion='$rel',reservecategory='$rescat',category='$cat',caste='$cst',handicap='$hndcp',economicbg='$ecobg',mothername='$motnm',motherphone='$motph',fathername='$fatnm',fatherphone='$fatph',sem1='$sem1',sem2='$sem2',sem3='$sem3',sem4='$sem4',sem5='$sem5',sem6='$sem6',sem7='$sem7',sem8='$sem8',cgpa='$cgpa',resadd='$rsadd',resdist='$rsdst',resstate='$rsstt',respin='$rspin',localadd='$lcladd',localdist='$lcldst',localstate='$lclstt',localpin='$lclpin',hometype='$hmtyp',tfw='$tfw',fees='$fs',extracurr1='$extracurr1',extracurr2='$extracurr2',extracurr3='$extracurr3',extracurr4='$extracurr4',extracurr5='$extracurr5',pgcet='$pgcet',gate='$gate',gmat='$gmat',gre='$gre',toefl='$toefl',university1='$university1',course1='$course1',university2='$university2',course2='$course2',university3='$university3',course3='$course3',company1='$company1',position1='$position1',company2='$company2',position2='$position2',company3='$company3',position3='$position3' where   sid='$sid'";   
if(mysqli_query($con,$updt))
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
					<center><h1 >EDIT STUDENT PROFILE</h1></center>					
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
									  
									
									
									<?php if($ttl=="Ms.")
						{?>
					
                        <select name="title" class="form form">
									  <option value="none" >Select</option>
									<option selected value="Ms." >Ms.</option>
									<option value="Mr.">Mr.</option>
									</select>
						<?php }elseif($ttl=="Mr."){?>
						
						<select name="title" class="form form">
									  <option value="none" >Select</option>
									<option  value="Ms." >Ms.</option>
									<option selected value="Mr.">Mr.</option>
									</select>
						<?php }else{?>
						<select name="title" class="form form">
									  <option selected value="none" >Select</option>
									<option  value="Ms." >Ms.</option>
									<option value="Mr.">Mr.</option>
									</select>
						<?php	}?>
									
									
									
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >First Name:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" name="firstname" value="<?php echo $fnm?>" placeholder="Enter First Name">
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Middle Name:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" name="middlename" value="<?php echo $mnm?>" placeholder="Enter Middle Name">
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Last Name:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" name="lastname" value="<?php echo $lnm?>" placeholder="Enter Last Name">
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
									  <input type="text" class="form-control"  name="usn" value="<?php echo $usn?>"placeholder="Enter Student's USN"/>
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Enroll ID:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" name="enrollid" value="<?php echo $enrl?>" placeholder="Enter Student's Enroll ID"/>
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Left Course:</label>
									<div class="col-md-9">
									  
									  
									  <?php if($lftcrse=="Yes")
						{?>
					
                        <input type="radio" value="Yes" checked="checked" name="leftcourse" />Yes <input type="radio" value="No" name="leftcourse" />No
						<?php }elseif($lftcrse=="No"){?>
						
						<input type="radio" value="Yes" name="leftcourse" />Yes <input type="radio" value="No" checked="checked" name="leftcourse" />No
						<?php }else{?>
						<input type="radio" value="Yes" name="leftcourse" />Yes <input type="radio" value="No" name="leftcourse" />No
						<?php	}?>
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Section:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control"  name="section" value="<?php echo $sec?>"placeholder="Enter Student's Section"/>
									</div>
								  </div>
								  
								 <div class="form-group" >
									<label class="control-label col-md-3" >Shift:</label>
									<div class="col-md-9">
									  
									  
									  <?php if($sft=="Yes")
						{?>
					
                        <input type="radio" value="Yes" checked="checked" name="shift" />Yes <input type="radio" value="No" name="shift" />No
						<?php }elseif($sft=="No"){?>
						
						<input type="radio" value="Yes" name="shift" />Yes <input type="radio" value="No" checked="checked" name="shift" />No
						<?php }else{?>
						<input type="radio" value="Yes" name="shift" />Yes <input type="radio" value="No" name="shift" />No
						<?php	}?>
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Admission Type:</label>
									<div class="col-md-9">
									  
									
									
									
									<?php if($admtyp=="CET")
						{?>
					
                        <select name="admissiontype" class="form">
									  <option value="none" >Select</option>
									<option selected value="CET" >CET</option>
									<option value="COMED-K">COMED-K</option>
									<option value="Management">Management</option>
									</select>
						<?php }elseif($admtyp=="COMED-K"){?>
						
						<select name="admissiontype" class="form">
									  <option value="none" >Select</option>
									<option  value="CET" >CET</option>
									<option selected value="COMED-K">COMED-K</option>
									<option value="Management">Management</option>
									</select>
						<?php }elseif($admtyp=="Management"){?>
						
						<select name="admissiontype" class="form">
									  <option value="none" >Select</option>
									<option  value="CET" >CET</option>
									<option value="COMED-K">COMED-K</option>
									<option selected value="Management">Management</option>
									</select>
						<?php }else{?>
						<select name="admissiontype" class="form">
									  <option  selected value="none" >Select</option>
									<option  value="CET" >CET</option>
									<option value="COMED-K">COMED-K</option>
									<option value="Management">Management</option>
									</select>
						<?php	}?>
									
									
									
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Current Semester:</label>
									<div class="col-md-9">
									  



			
			<?php if($cursem=="1st Semester")
						{?>
					
                      <select name="currentsem" class="form form">
			  <option  value="none" >Select</option>
			<option selected value="1st Semester">1st Semester</option>
			<option value="2nd Semester">2nd Semester</option>
			<option value="3rd Semester">3rd Semester</option>
			<option value="4th Semester">4th Semester</option>
			<option value="5th Semester">5th Semester</option>
			<option value="6th Semester">6th Semester</option>
			<option value="7th Semester">7th Semester</option>
			<option value="8th Semester">8th Semester</option>
			
			</select>	
						<?php }elseif($cursem=="2nd Semester"){?>
						
						<select name="currentsem" class="form form">
			  <option  value="none" >Select</option>
			<option value="1st Semester">1st Semester</option>
			<option selected value="2nd Semester">2nd Semester</option>
			<option value="3rd Semester">3rd Semester</option>
			<option value="4th Semester">4th Semester</option>
			<option value="5th Semester">5th Semester</option>
			<option value="6th Semester">6th Semester</option>
			<option value="7th Semester">7th Semester</option>
			<option value="8th Semester">8th Semester</option>
			
			</select>	
						<?php }elseif($cursem=="3rd Semester"){?>
						
						<select name="currentsem" class="form form">
			  <option  value="none" >Select</option>
			<option value="1st Semester">1st Semester</option>
			<option value="2nd Semester">2nd Semester</option>
			<option selected value="3rd Semester">3rd Semester</option>
			<option value="4th Semester">4th Semester</option>
			<option value="5th Semester">5th Semester</option>
			<option value="6th Semester">6th Semester</option>
			<option value="7th Semester">7th Semester</option>
			<option value="8th Semester">8th Semester</option>
			
			</select>	
						<?php }elseif($cursem=="4th Semester"){?>
						
						<select name="currentsem" class="form form">
			  <option  value="none" >Select</option>
			<option value="1st Semester">1st Semester</option>
			<option value="2nd Semester">2nd Semester</option>
			<option value="3rd Semester">3rd Semester</option>
			<option selected value="4th Semester">4th Semester</option>
			<option value="5th Semester">5th Semester</option>
			<option value="6th Semester">6th Semester</option>
			<option value="7th Semester">7th Semester</option>
			<option value="8th Semester">8th Semester</option>
			
			</select>	
						<?php }elseif($cursem=="5th Semester"){?>
						
						<select name="currentsem" class="form form">
			  <option  value="none" >Select</option>
			<option value="1st Semester">1st Semester</option>
			<option value="2nd Semester">2nd Semester</option>
			<option value="3rd Semester">3rd Semester</option>
			<option value="4th Semester">4th Semester</option>
			<option selected value="5th Semester">5th Semester</option>
			<option value="6th Semester">6th Semester</option>
			<option value="7th Semester">7th Semester</option>
			<option value="8th Semester">8th Semester</option>
			
			</select>	
									
						<?php }elseif($cursem=="6th Semester"){?>
						
						<select name="currentsem" class="form form">
			  <option  value="none" >Select</option>
			<option value="1st Semester">1st Semester</option>
			<option value="2nd Semester">2nd Semester</option>
			<option value="3rd Semester">3rd Semester</option>
			<option value="4th Semester">4th Semester</option>
			<option value="5th Semester">5th Semester</option>
			<option selected value="6th Semester">6th Semester</option>
			<option value="7th Semester">7th Semester</option>
			<option value="8th Semester">8th Semester</option>
			
			</select>	
									
						<?php }elseif($cursem=="7th Semester"){?>
						
						<select name="currentsem" class="form form">
			  <option  value="none" >Select</option>
			<option value="1st Semester">1st Semester</option>
			<option value="2nd Semester">2nd Semester</option>
			<option value="3rd Semester">3rd Semester</option>
			<option value="4th Semester">4th Semester</option>
			<option value="5th Semester">5th Semester</option>
			<option value="6th Semester">6th Semester</option>
			<option selected value="7th Semester">7th Semester</option>
			<option value="8th Semester">8th Semester</option>
			
			</select>	
						<?php }elseif($cursem=="8th Semester"){?>
						
						<select name="currentsem" class="form form">
			  <option  value="none" >Select</option>
			<option value="1st Semester">1st Semester</option>
			<option value="2nd Semester">2nd Semester</option>
			<option value="3rd Semester">3rd Semester</option>
			<option value="4th Semester">4th Semester</option>
			<option value="5th Semester">5th Semester</option>
			<option value="6th Semester">6th Semester</option>
			<option value="7th Semester">7th Semester</option>
			<option selected value="8th Semester">8th Semester</option>
			
			</select>	
						<?php }else{?>
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
			
			</select>	
						<?php	}?>


			</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Current Year:</label>
									<div class="col-md-9">
									  
			
			
			<?php if($curyr=="1st Year")
						{?>
					
                        <select name="currentyear" class="form form">
			  <option value="none" >Select</option>
			<option selected value="1st Year">1st Year</option>
			<option value="2nd Year">2nd Year</option>
			<option value="3rd Year">3rd Year</option>
			<option value="4th Year">4th Year</option>			
			</select>
						<?php }elseif($curyr=="2nd Year"){?>
						
						<select name="currentyear" class="form form">
			  <option value="none" >Select</option>
			<option value="1st Year">1st Year</option>
			<option selected value="2nd Year">2nd Year</option>
			<option value="3rd Year">3rd Year</option>
			<option value="4th Year">4th Year</option>			
			</select>
						<?php }elseif($curyr=="3rd Year"){?>
						
						<select name="currentyear" class="form form">
			  <option value="none" >Select</option>
			<option value="1st Year">1st Year</option>
			<option value="2nd Year">2nd Year</option>
			<option selected value="3rd Year">3rd Year</option>
			<option value="4th Year">4th Year</option>			
			</select>
						<?php }elseif($curyr=="4th Year"){?>
						
						<select name="currentyear" class="form form">
			  <option value="none" >Select</option>
			<option value="1st Year">1st Year</option>
			<option value="2nd Year">2nd Year</option>
			<option value="3rd Year">3rd Year</option>
			<option selected value="4th Year">4th Year</option>			
			</select>
						<?php }else{?>
						<select name="currentyear" class="form form">
			  <option selected value="none" >Select</option>
			<option value="1st Year">1st Year</option>
			<option value="2nd Year">2nd Year</option>
			<option value="3rd Year">3rd Year</option>
			<option value="4th Year">4th Year</option>			
			</select>
						<?php	}?>
			
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Admission Date:</label>
									<div class="col-md-9">
									  <input type="date" class="form form" value="<?php echo $admdt?>" name="admissiondate" />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Academic Year:</label>
									<div class="col-md-9">
									  				


			<?php if($acdyr=="2014-2018")
						{?>
					
             <select name="academicyear" class="form form">
			  <option value="none" >Select</option>
			<option selected value="2014-2018">2014-2018</option>
			<option value="2015-2019">2015-2019</option>
			<option value="2016-2020">2016-2020</option>
			<option value="2017-2021">2017-2021</option>			
			</select>	
						<?php }elseif($acdyr=="2015-2019"){?>
						
			<select name="academicyear" class="form form">
			  <option value="none" >Select</option>
			<option value="2014-2018">2014-2018</option>
			<option selected value="2015-2019">2015-2019</option>
			<option value="2016-2020">2016-2020</option>
			<option value="2017-2021">2017-2021</option>			
			</select>
						<?php }elseif($acdyr=="2016-2020"){?>
						
						
			<select name="academicyear" class="form form">
			  <option value="none" >Select</option>
			<option value="2014-2018">2014-2018</option>
			<option value="2015-2019">2015-2019</option>
			<option selected value="2016-2020">2016-2020</option>
			<option value="2017-2021">2017-2021</option>			
			</select>
						<?php }elseif($acdyr=="2017-2021"){?>
						
						
			<select name="academicyear" class="form form">
			  <option value="none" >Select</option>
			<option value="2014-2018">2014-2018</option>
			<option value="2015-2019">2015-2019</option>
			<option value="2016-2020">2016-2020</option>
			<option selected value="2017-2021">2017-2021</option>			
			</select>
						<?php }else{?>
			<select name="academicyear" class="form form">
			  <option selected value="none" >Select</option>
			<option value="2014-2018">2014-2018</option>
			<option value="2015-2019">2015-2019</option>
			<option value="2016-2020">2016-2020</option>
			<option value="2017-2021">2017-2021</option>			
			</select>
						<?php	}?>
			</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Class Roll No.:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control"  name="rollno" value="<?php echo $rno?>" placeholder="Roll No." style="width:10%;"/>
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
									  <input type="date" class="form form" id="dob" name="dob" value="<?php echo $db?>"placeholder="Enter Date of Birth"/>
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Gender:</label>
									<div class="col-md-9">
									  
					<?php if($gen=="Male")
						{?>
					
                        <input type="radio" value="Male" name="gender" checked="checked" />Male <input type="radio" value="Female" name="gender" />Female
						<?php }elseif($gen=="Female"){?>
						
						<input type="radio" value="Male" name="gender" />Male <input type="radio" value="Female" name="gender" checked="checked" />Female
						<?php }else{?>
						<input type="radio" value="Male" name="gender" />Male <input type="radio" value="Female" name="gender" />Female
						<?php	}?>
						
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Photo:</label>
									<div class="col-md-9">
									<img src="<?php echo "img/".$pht;?>" height="50px"  />
									  <input type="file" id="photo" name="photo" style="float:center;"  />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Phone Number:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control"  name="phone" value="<?php echo $ph?>"placeholder="Enter Phone No." />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Email-Id:</label>
									<div class="col-md-9">
									  <input type="email" class="form-control"  name="email" value="<?php echo $eml?>" placeholder="Enter Email ID" />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Aadhar Card No.:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" name="aadhar" value="<?php echo $adhr?>"placeholder="Enter your Aadhar Card No." />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Religion :</label>
									<div class="col-md-9">
									
						
						
						
						<?php if($rel=="Hinduism")
						{?>
			  <select name="religion" class="form form">
						<option value="none" >Select</option>
						<option selected value="Hinduism">Hinduism</option>
						<option value="Islam">Islam</option>
						<option value="Christianity">Christianity</option>
						<option value="Sikhism">Sikhism</option>	
						<option value="Buddhism">Buddhism</option>
						<option value="Jainism">Jainism</option>
						<option value="Zoroastrianism">Zoroastrianism</option>
						<option value="Others">Others</option>
						
						</select>
						<?php }elseif($rel=="Islam"){?>
						
			 <select name="religion" class="form form">
						<option value="none" >Select</option>
						<option value="Hinduism">Hinduism</option>
						<option selected value="Islam">Islam</option>
						<option value="Christianity">Christianity</option>
						<option value="Sikhism">Sikhism</option>	
						<option value="Buddhism">Buddhism</option>
						<option value="Jainism">Jainism</option>
						<option value="Zoroastrianism">Zoroastrianism</option>
						<option value="Others">Others</option>
						
						</select>
						<?php }elseif($rel=="Christianity"){?>
			 <select name="religion" class="form form">
						<option value="none" >Select</option>
						<option value="Hinduism">Hinduism</option>
						<option value="Islam">Islam</option>
						<option selected value="Christianity">Christianity</option>
						<option value="Sikhism">Sikhism</option>	
						<option value="Buddhism">Buddhism</option>
						<option value="Jainism">Jainism</option>
						<option value="Zoroastrianism">Zoroastrianism</option>
						<option value="Others">Others</option>
						
						</select>
						<?php }elseif($rel=="Sikhism"){?>
						
			 <select name="religion" class="form form">
						<option value="none" >Select</option>
						<option value="Hinduism">Hinduism</option>
						<option value="Islam">Islam</option>
						<option value="Christianity">Christianity</option>
						<option selected value="Sikhism">Sikhism</option>	
						<option value="Buddhism">Buddhism</option>
						<option value="Jainism">Jainism</option>
						<option value="Zoroastrianism">Zoroastrianism</option>
						<option value="Others">Others</option>
						
						</select>
				<?php }elseif($rel=="Buddhism"){?>
						
		 <select name="religion" class="form form">
						<option value="none" >Select</option>
						<option value="Hinduism">Hinduism</option>
						<option value="Islam">Islam</option>
						<option value="Christianity">Christianity</option>
						<option value="Sikhism">Sikhism</option>	
						<option selected value="Buddhism">Buddhism</option>
						<option value="Jainism">Jainism</option>
						<option value="Zoroastrianism">Zoroastrianism</option>
						<option value="Others">Others</option>
						
						</select>
				<?php }elseif($rel=="Jainism"){?>
						
		 <select name="religion" class="form form">
						<option value="none" >Select</option>
						<option value="Hinduism">Hinduism</option>
						<option value="Islam">Islam</option>
						<option value="Christianity">Christianity</option>
						<option value="Sikhism">Sikhism</option>	
						<option value="Buddhism">Buddhism</option>
						<option selected value="Jainism">Jainism</option>
						<option value="Zoroastrianism">Zoroastrianism</option>
						<option value="Others">Others</option>
						
						</select>
				<?php }elseif($rel=="Zoroastrianism"){?>
						
			 <select name="religion" class="form form">
						<option value="none" >Select</option>
						<option value="Hinduism">Hinduism</option>
						<option value="Islam">Islam</option>
						<option value="Christianity">Christianity</option>
						<option value="Sikhism">Sikhism</option>	
						<option value="Buddhism">Buddhism</option>
						<option value="Jainism">Jainism</option>
						<option selected value="Zoroastrianism">Zoroastrianism</option>
						<option value="Others">Others</option>
						
						</select>
				<?php }elseif($rel=="Others"){?>
						
			 <select name="religion" class="form form">
						<option value="none" >Select</option>
						<option value="Hinduism">Hinduism</option>
						<option value="Islam">Islam</option>
						<option value="Christianity">Christianity</option>
						<option value="Sikhism">Sikhism</option>	
						<option value="Buddhism">Buddhism</option>
						<option value="Jainism">Jainism</option>
						<option value="Zoroastrianism">Zoroastrianism</option>
						<option selected value="Others">Others</option>
						
						</select>
						<?php }else{?>
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
						<?php	}?>
						
						
						
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Reserve Category:</label>
									<div class="col-md-9">
									
									<?php if($rescat=="Yes")
						{?>
					
                        <input type="radio" value="Yes" checked="checked" name="reservecategory" />Yes <input type="radio" value="No" name="reservecategory" />No
						<?php }elseif($rescat=="No"){?>
						
						<input type="radio" value="Yes" name="reservecategory" />Yes <input type="radio" value="No" checked="checked" name="reservecategory" />No
						<?php }else{?>
						<input type="radio" value="Yes" name="reservecategory" />Yes <input type="radio" value="No" name="reservecategory" />No 
						<?php	}?>
									
									
									
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Category:</label>
									<div class="col-md-9">
					
						
						
						
								<?php if($cat=="General") 
						{?>
					
             				  <select name="category" class="form form">
						<option value="none" >Select</option>
						<option selected value="General">General</option>
						<option value="OBC(Creamy layer)">OBC(Creamy layer)</option>
						<option value="OBC(Non-Creamy Layer)">OBC(Non-Creamy Layer)</option>
						<option value="Scheduled Caste(SC)">Scheduled Caste(SC)</option>	
						<option value="Scheduled Tribe(ST)">Scheduled Tribe(ST)</option>
						
						</select>	
						<?php }elseif($cat=="OBC(Creamy layer)"){?>
						
				  <select name="category" class="form form">
						<option value="none" >Select</option>
						<option value="General">General</option>
						<option selected value="OBC(Creamy layer)">OBC(Creamy layer)</option>
						<option value="OBC(Non-Creamy Layer)">OBC(Non-Creamy Layer)</option>
						<option value="Scheduled Caste(SC)">Scheduled Caste(SC)</option>	
						<option value="Scheduled Tribe(ST)">Scheduled Tribe(ST)</option>
						
						</select>
						<?php }elseif($cat=="OBC(Non-Creamy Layer)"){?>
						
						
				  <select name="category" class="form form">
						<option value="none" >Select</option>
						<option value="General">General</option>
						<option value="OBC(Creamy layer)">OBC(Creamy layer)</option>
						<option selected value="OBC(Non-Creamy Layer)">OBC(Non-Creamy Layer)</option>
						<option value="Scheduled Caste(SC)">Scheduled Caste(SC)</option>	
						<option value="Scheduled Tribe(ST)">Scheduled Tribe(ST)</option>
						
						</select>
						<?php }elseif($cat=="Scheduled Caste(SC)"){?>
						
						
				  <select name="category" class="form form">
						<option value="none" >Select</option>
						<option value="General">General</option>
						<option value="OBC(Creamy layer)">OBC(Creamy layer)</option>
						<option value="OBC(Non-Creamy Layer)">OBC(Non-Creamy Layer)</option>
						<option selected value="Scheduled Caste(SC)">Scheduled Caste(SC)</option>	
						<option value="Scheduled Tribe(ST)">Scheduled Tribe(ST)</option>
						
						</select>
			<?php }elseif($cat=="Scheduled Tribe(ST)"){?>
						
						
				  <select name="category" class="form form">
						<option value="none" >Select</option>
						<option value="General">General</option>
						<option value="OBC(Creamy layer)">OBC(Creamy layer)</option>
						<option value="OBC(Non-Creamy Layer)">OBC(Non-Creamy Layer)</option>
						<option value="Scheduled Caste(SC)">Scheduled Caste(SC)</option>	
						<option selected value="Scheduled Tribe(ST)">Scheduled Tribe(ST)</option>
						
						</select>
						<?php }else{?>
			  <select name="category" class="form form">
						<option selected value="none" >Select</option>
						<option value="General">General</option>
						<option value="OBC(Creamy layer)">OBC(Creamy layer)</option>
						<option value="OBC(Non-Creamy Layer)">OBC(Non-Creamy Layer)</option>
						<option value="Scheduled Caste(SC)">Scheduled Caste(SC)</option>	
						<option value="Scheduled Tribe(ST)">Scheduled Tribe(ST)</option>
						
						</select>
						<?php	}?>
						
						
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Caste:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" name="caste" value="<?php echo $cst?>"placeholder="Enter your Caste" style="width:60%;"/>
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Handicap:</label>
									<div class="col-md-9">
									  
									  
									  <?php if($hndcp=="Yes")
						{?>
					
                        <input type="radio" value="Yes" checked="checked" name="handicap" />Yes<input type="radio" value="No" name="handicap"/>No
						<?php }elseif($hndcp=="No"){?>
						
						<input type="radio" value="Yes" name="handicap" />Yes<input type="radio" value="No" checked="checked" name="handicap"/>No
						<?php }else{?>
						<input type="radio" value="Yes" name="handicap" />Yes<input type="radio" value="No" name="handicap"/>No
						<?php	}?>
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Economic Background:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="fees" name="ecobg" value="<?php echo $ecobg?>" placeholder="Enter your Economic Background" style="width:60%;"/>
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
									  <input type="text" class="form-control" id="name" name="mothername" value="<?php echo $motnm?>"placeholder="Enter your Mother's Name"/>
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Mother's Phone No.:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="motherphone" value="<?php echo $motph?>"placeholder="Enter Mother's Phone No." />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Father's Name:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="name" name="fathername" value="<?php echo $fatnm?>"placeholder="Enter your Father's Name"/>
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Father's Phone No.:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="fatherphone" value="<?php echo $fatph?>"placeholder="Enter father's Phone No." />
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
									<td><input type="text" class="form-control" id="sem1" name="sem1" placeholder="1st Sem" value="<?php echo $sem1?>" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem2" name="sem2" placeholder="2nd Sem" value="<?php echo $sem2?>" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem3" name="sem3" placeholder="3rd Sem" value="<?php echo $sem3?>" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem4" name="sem4" placeholder="4th Sem" value="<?php echo $sem4?>" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem5" name="sem5" placeholder="5th Sem" value="<?php echo $sem5?>" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem6" name="sem6" placeholder="6th Sem" value="<?php echo $sem6?>" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem7" name="sem7" placeholder="7th Sem" value="<?php echo $sem7?>" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem8" name="sem8" placeholder="8th Sem" value="<?php echo $sem8?>" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="cgpa" name="cgpa" placeholder="8th Sem" value="<?php echo $cgpa?>" style="width:100%;"/></td>
								
									
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
									  <input type="text" class="form-control" id="phone" name="resadd" value="<?php echo $rsadd?>" placeholder="Enter Permanent Address" />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >District:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="resdist" value="<?php echo $rsdst?>" placeholder="Enter District" />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >State:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="resstate" value="<?php echo $rsstt?>" placeholder="Enter State" />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Pin Code:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="respin" value="<?php echo $rspin?>" placeholder="Enter Pin Code" />
									</div>
								  </div>
								  
						<b>Local Address:</b>
								<div class="form-group" >
									<label class="control-label col-md-3" >Address Line:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="localadd" value="<?php echo $lcladd?>" placeholder="Enter Local Address" />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >District:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="localdist" value="<?php echo $lcldst?>" placeholder="Enter District" />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >State:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="localstate" value="<?php echo $lclstt?>" placeholder="Enter State" />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Pin Code:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="localpin" value="<?php echo $lclpin?>" placeholder="Enter Pin Code" />
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Local Home Type:</label>
									<div class="col-md-9">
									  
									
									
									
						<?php if($hmtyp=="Home") 
						{?>
					
             			<select name="hometype" class="form form">
									  <option value="none" >Select</option>
									<option selected value="Home" >Home</option>
									<option value="Hostel">Hostel</option>
									<option value="P.G./Flat">P.G./Flat</option>
									</select>	
						<?php }elseif($hmtyp=="Hostel"){?>
						
				  <select name="hometype" class="form form">
									  <option value="none" >Select</option>
									<option  value="Home" >Home</option>
									<option selected value="Hostel">Hostel</option>
									<option value="P.G./Flat">P.G./Flat</option>
									</select>
						<?php }elseif($hmtyp=="P.G./Flat"){?>
						
				<select name="hometype" class="form form">
									  <option value="none" >Select</option>
									<option  value="Home" >Home</option>
									<option value="Hostel">Hostel</option>
									<option selected value="P.G./Flat">P.G./Flat</option>
									</select>
					
						<?php }else{?>
			  <select name="hometype" class="form form">
									  <option selected value="none" >Select</option>
									<option  value="Home" >Home</option>
									<option value="Hostel">Hostel</option>
									<option value="P.G./Flat">P.G./Flat</option>
									</select>
						<?php	}?>
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
									  
									  
									  <?php if($tfw=="Yes")
						{?>
					
                        <input type="radio" value="Yes" checked="checked" name="tfw" />Yes <input type="radio" value="No" name="tfw" />No
						<?php }elseif($tfw=="No"){?>
						
						<input type="radio" value="Yes" name="tfw" />Yes <input type="radio" value="No" checked="checked" name="tfw" />No
						<?php }else{?>
						<input type="radio" value="Yes" name="tfw" />Yes <input type="radio" value="No" name="tfw" />No
						<?php	}?>
									</div>
								  </div>
								  
								  <div class="form-group" >
									<label class="control-label col-md-3" >Fees paid:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="fees" name="fees" value="<?php echo $fs?>" placeholder="Enter fees amount paid" style="width:60%;"/>
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
									<td><input type="text" class="form-control"  name="extracurr1" placeholder="1st Activity" value="<?php echo $extracurr1?>" style="width:100%;"/></td>
								</tr>
								<tr>
									<th>2</th>
									<td><input type="text" class="form-control"  name="extracurr2" placeholder="2nd Activity" value="<?php echo $extracurr2?>" style="width:100%;"/></td>
								</tr>
								<tr>
									<th>3</th>
									<td><input type="text" class="form-control"  name="extracurr3" placeholder="3rd Activity" value="<?php echo $extracurr3?>" style="width:100%;"/></td>
								</tr>
								<tr>
									<th>4</th>
									<td><input type="text" class="form-control"  name="extracurr4" placeholder="4th Activity" value="<?php echo $extracurr4?>" style="width:100%;"/></td>
								</tr>
								<tr>
									<th>5</th>
									<td><input type="text" class="form-control"  name="extracurr5" placeholder="5th Activity" value="<?php echo $extracurr5?>" style="width:100%;"/></td>
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
									<td><input type="text" class="form-control"  name="pgcet" placeholder="PG/CET Marks" value="<?php echo $pgcet?>" style="width:100%;"/></td>
								</tr>
								<tr>
									<th>GATE</th>
									<td><input type="text" class="form-control"  name="gate" placeholder="PG/CET Marks" value="<?php echo $gate?>" style="width:100%;"/></td>
								</tr>
								<tr>
									<th>GMAT</th>
									<td><input type="text" class="form-control"  name="gmat" placeholder="PG/CET Marks" value="<?php echo $gmat?>" style="width:100%;"/></td>
								</tr>
								<tr>
									<th>GRE</th>
									<td><input type="text" class="form-control"  name="gre" placeholder="PG/CET Marks" value="<?php echo $gre?>" style="width:100%;"/></td>
								</tr>
								<tr>
									<th>TOEFL</th>
									<td><input type="text" class="form-control"  name="toefl" placeholder="PG/CET Marks" value="<?php echo $toefl?>" style="width:100%;"/></td>
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
									<td><input type="text" class="form-control"  name="university1"  value="<?php echo $university1?>" style="width:100%;"/></td>
									<td><input type="text" class="form-control"  name="course1"  value="<?php echo $course1?>" style="width:100%;"/></td>
								</tr>
								<tr>
									<th>2.</th>
									<td><input type="text" class="form-control"  name="university2"  value="<?php echo $university2?>" style="width:100%;"/></td>
									<td><input type="text" class="form-control"  name="course2"  value="<?php echo $course2?>" style="width:100%;"/></td>
								</tr>
								<tr>
									<th>3.</th>
									<td><input type="text" class="form-control"  name="university3"  value="<?php echo $university3?>" style="width:100%;"/></td>
									<td><input type="text" class="form-control"  name="course3"  value="<?php echo $course3?>" style="width:100%;"/></td>
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
									<td><input type="text" class="form-control"  name="company1"  value="<?php echo $company1?>" style="width:100%;"/></td>
									<td><input type="text" class="form-control"  name="position1"  value="<?php echo $position1?>" style="width:100%;"/></td>
								</tr>
								<tr>
									<th>2.</th>
									<td><input type="text" class="form-control"  name="company2"  value="<?php echo $company2?>" style="width:100%;"/></td>
									<td><input type="text" class="form-control"  name="position2"  value="<?php echo $position2?>" style="width:100%;"/></td>
								</tr>
								<tr>
									<th>3.</th>
									<td><input type="text" class="form-control"  name="company3"  value="<?php echo $company3?>" style="width:100%;"/></td>
									<td><input type="text" class="form-control"  name="position3"  value="<?php echo $position3?>" style="width:100%;"/></td>
								</tr>
								
								
								
								</table>
								  
								  
                        </td>
                      </tr>
					  
                     
                    </tbody>
					
                  </table>
						<center><button type="submit" class="btn btn-success" name="btn" style=" opacity:1">UPDATE</button></center>


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





