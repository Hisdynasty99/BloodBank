<?php
$First_name=$_POST['First_name'];
$Last_name=$_POST['Last_name'];
$Gender=$_POST['Gender'];
// $Age=$_POST['Age'];
$Blood_group=$_POST['Blood'];
$Health_status=$_POST['Health_status'];
$Blood_effection=$_POST['Blood_effection'];
$Location=$_POST['Location'];
$Phone_number=$_POST['Phone_number'];
$Email=$_POST['Email'];
// $age=$_POST['age'];
$password='123456';
$role='donor';
// $gender=$_POST['gender'];
// $blood_group=$_POST['blood'];
// $address=$_POST['address'];
$conn=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");
$sql= "INSERT INTO register(First_name,Last_name,Gender,Blood_group,Health_status,Blood_effection,Location,Phone_number,Email)
 VALUES ('$First_name','$Last_name','$Gender','$Blood_group','$Health_status','$Blood_effection','$Location','$Phone_number','$Email')";

$sql1= "INSERT INTO user(name,password,gender,blood,address,number,mail,role)
 VALUES ('$First_name','$password','$Gender','$Blood_group','$Location','$Phone_number','$Email','$role')";
 $result=mysqli_query($conn,$sql) ;
 $result1=mysqli_query($conn,$sql1) ;

if($result && $result1){
    header("location: register.php");
  }
  else{
      header("location: 404-page.html");
  }
mysqli_close($conn);
 ?>
