<html>  
<body>  
<form method="post"> 
	First name
	<input type="text" name="name1" placeholder="first name"/><br/><br/>
	Middle name
	<input type="text" name="name2" placeholder="middle name"/><br/><br/>
	Last name
	<input type="text" name="name3" placeholder="last name"/><br/><br/>
	photo
	<input type="file" name="image"/><br/><br/>
	Father name
	<input type="text" name="fname"/><br/><br/>
	Address
	<textarea name="address" placeholder="Address" required/></textarea><br/><br/>
	Contact number
	<input type="number" name="phone" placeholder="contact number"/><br/><br/>
	Emai-ID
	<input type="email" name="email" placeholder="e-mailid"/><br/><br/>
	Date od birth
	<input type="date" name="dob" placeholder="Date of birth"/><br/><br/>
	Gender
	<input type="radio" name="gender" value="male"/>Male<input type="radio" name="gender" value="female"/>Female<br/><br/>
	Degree percentage
	<input type="number" name="degree" placeholder="percentage"/><br/><br/>
	Hobbies
	<input type="checkbox" name="hobby" value="Reading books"/>Reading books
	<input type="checkbox" name="hobby" value="Music" />Music
	<input type="checkbox" name="hobby" value="Sports" />Sports
	<input type="checkbox" name="hobby" value="Drawing"/>Drawing<br/><br/>
	Institution studied
	<input type="text" name="institution" placeholder="college name"/><br/>
	Course studied<br/>
	<input type="radio" name="course" value="BCA"/>BCA
	<input type="radio" name="course" value="BCom"/>BCom
	<input type="radio" name="course" value="BSc"/>BSc
	<input type="radio" name="course" value="BE"/>BE<br/>
	Course offered <select name="select" required="">
	<option value="MCA">MCA</option>
	<option value="MBA">MBA</option>
	<option value="MTech">MTech</option>
	<option value="MSc">MSc</option>
</select><br/><br/>
<input type="submit" name="submit" value="submit"/>
</form>
<?php
 if($_POST)  
 {   
     $select = $_POST['select']; 
     $c = $_POST['course']; 
     $degree=$_POST['degree']; 
     if( $select=='MCA' or $select=='MTech')
     {  
     	if($degree>=70){
     	if($select=='MTech' and $c=='BE'){
     		echo '<script>alert("registration successful");</script>';}
     		else{
     echo '<script>alert("Course studied should be BE");</script>';
     }
     if($select=='MCA' and($c=='BCA' or $c=='BSc')){
     echo '<script>alert("registration successful");</script>';
 }else
 {
 	     echo '<script>alert("Course studied should be Bca or Bsc");</script>';}}
 	     else {
 	echo '<script> alert("percentage in degree should be atleast 70%");</script>';
     }
 }
elseif($select=='MBA'){
	if($degree>=60){
	echo '<script>alert ("registration successful");</script>';
}else{
	echo '<script>alert("percentage in degree should be atleast 60%");</script>';
}
}else{
	if($degree>=40){
	if($select=='MSc' and ($c=='BCA' or $c=='BSc')){
	echo '<script>alert("registration successful");</script>';
}
else
{
	echo '<script>alert("Course studied ti be BCA or BSc");</script>';
}
}
else
{
	echo '<script>alert("percentage in degree should be atleast 40%");</script>';
}
}
}
?>