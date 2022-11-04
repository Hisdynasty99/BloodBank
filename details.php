<?php
session_start();
$user_id = $_SESSION['id'];
$uname = $_SESSION['name'];
$connect=$db =mysqli_connect('localhost','root','','blood_donation')
or die("connection Failed");
  $query="select * from register where First_name = '$uname'";
  $result=mysqli_query($connect,$query);
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
</style>
</head>

<body>
<div class="header">
<?php
$active="home";
include('head.php'); ?>
<?php
$include="home"
 ?>

</div>
<?php include'ticker.php'; ?>
<div class="dashboard-short-list">
                    <div class="row">
                        <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">First Name</th>
                                                        <th class="border-0">Last Name</th>
                                                        <th class="border-0">Gender</th>
                                                        <th class="border-0">Blood Group</th>
                                                        <th class="border-0">Health Status</th>
                                                        <th class="border-0">Donation Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php   // LOOP TILL END OF DATA
                                                    while($rows=$result->fetch_assoc())
                                                         {
                                                       ?>
                                                           <tr>
                                                        <!--FETCHING DATA FROM EACH
                                                         ROW OF EVERY COLUMN-->
                                                        <td><?php echo $rows['First_name'];?></td>
                                                        <td><?php echo $rows['Last_name'];?></td>
                                                       <td><?php echo $rows['Gender'];?></td>
                                                       <td><?php echo $rows['Blood_group'];?></td>
                                                      <td><?php echo $rows['Health_status'];?></td>
                                                      <td><?php if ($rows['Health_status'] == '') {
                                                        echo 'You are a donor';
                                                      } else {
                                                        echo 'You are not a donor';
                                                      }?>
                                                      </td>
                                                    </tr>
        
                                                     <?php
                                                     }
                                                     ?>
                                                    
                                                </tbody>
                                            </table>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end nestable list  -->
                    <!-- ============================================================== -->
                </div>
  <?php include('footer.php');?>
</div>

</body>

</html>
