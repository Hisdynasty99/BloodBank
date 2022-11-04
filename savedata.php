<?php
$First_name=$_POST['First_name'];
$Last_name=$_POST['Last_name'];
$Gender=$_POST['Gender'];
$Age=$_POST['Age'];
$Blood_group=$_POST['Blood'];
$Health_status=$_POST['Health_status'];
$Blood_effection=$_POST['Blood_effection'];
$Location=$_POST['Location'];
$Phone_number=$_POST['Phone_number'];
$Email=$_POST['Email'];
// $age=$_POST['age'];
// $gender=$_POST['gender'];
// $blood_group=$_POST['blood'];
// $address=$_POST['address'];
$conn=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");
$sql= "INSERT INTO register(First_name,Last_name,Gender,Age,Blood_group,Health_status,Blood_effection,Location,Phone_number,Email)
 VALUES ('$First_name','$Last_name','$Gender',$Age,'$Blood_group','$Health_status','$Blood_effection','$Location',$Phone_number,'$Email')";
$result=mysqli_query($conn,$sql) ;

header("Location: http://localhost/BDMS/home.php");
mysqli_close($conn);
 ?>
