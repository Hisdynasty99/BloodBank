<html>
<head>
  <meta charset="utf-8">
  <meta  content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<?php
$active ='donate';
 include('head.php') ?>

<div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
  <div class="container">
  <div id="content-wrap" style="padding-bottom:50px;">
<div class="row">
    <div class="col-lg-6">
        <h1 class="mt-4 mb-3">register Form </h1>
      </div>
</div>
<form name="register" action="savedata.php" method="post">
<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">First_ name<span style="color:red">*</span></div>
<div><input type="text" name="First_name" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Last_ name<span style="color:red">*</span></div>
<div><input type="text" name="Last_name" class="form-control" required></div>
</div><br></br>
<div class="col-lg-4 mb-4">
<div class="font-italic">Health_status<span style="color:red">*</span></div>
<div><input type="text" name="Health_status" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Blood_effection<span style="color:red">*</span></div>
<div><input type="text" name="Blood_effection" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Location<span style="color:red">*</span></div>
<div><input type="text" name="Location" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Phone_number<span style="color:red">*</span></div>
<div><input type="text" name="Phone_number" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Email</div>
<div><input type="email" name="Email" class="form-control"></div>
</div>
</div>
<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Date of birth<span style="color:red">*</span></div>
<div><input type="text" name="Date of birth" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Gender<span style="color:red">*</span></div>
<div><select name="Gender" class="form-control" required>
<option value="">Select</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Blood Group<span style="color:red">*</span></div>
<div><select name="Blood" class="form-control" required>
  <option value=""selected disabled>Select</option>
  <?php
    include 'conn.php';
    $sql= "select * from blood";
    $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
  while($row=mysqli_fetch_assoc($result)){
   ?>
   <option value=" <?php echo $row['blood_id'] ?>"> <?php echo $row['blood_group'] ?> </option>
  <?php } ?>
</select>
</div>
</div>
</div>
<!-- <div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Address<span style="color:red">*</span></div>
<div><textarea class="form-control" name="address" required></textarea></div></div>
</div> -->
<div class="row">
  <div class="col-lg-4 mb-4">
  <div><input type="submit" href="home.php" name="submit" class="btn btn-primary" value="Submit" style="cursor:pointer"></div>
  </div>
</div>
</div>
</div>
<?php include('footer.php') ?>
</div>
</body>
</html>