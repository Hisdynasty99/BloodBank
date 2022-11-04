<?php
session_start();
$connect=$db =mysqli_connect('localhost','root','','blood_donation')
or die("connection Failed");
if(empty($_POST[""]))
{
  $username=$_POST['username'];
  $password=$_POST['password'];
  $query="select * from user where name='$username' and password='$password'";
  $result=mysqli_query($connect,$query);
  $count=mysqli_fetch_assoc($result);

  if($count) {
      $_SESSION['id'] = $count['id'];
      $_SESSION['role'] = $count['role'];
      $_SESSION['name'] = $username;  
    if ($count['role'] == 'nurse' || $count['role'] == 'doctor') {
        header("location: oficial/home.php");
    } if ($count['role'] == 'donor') {
        header("location: donor/home.php");
    }
  } else {
    header("location: login.php");
  }
}
 ?>