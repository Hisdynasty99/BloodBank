<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <?php 
  $active ='need';
  include('head.php') ?>

  <div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
    <div class="container">
    <div id="content-wrap" style="padding-bottom:50px;">
   <div class="column">
      <div class="col-lg-6">
          <h1 class="mt-4 mb-3">Need Blood</h1>
        </div>
  </div>
  <form name="needblood" action="" method="post">
  <div class="column">
  <div class="col-lg-4 mb-4">
  <div class="font-italic">hospital_name<span style="color:red">*</span></div>
  <div><select name="hospital" class="form-control" required>
    <option value=""selected disabled>select</option>
   
    <?php
      include 'conn.php';
      $sql= "select * from hospital";
      $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
    while($column=mysqli_fetch_assoc($result)){
     ?>
     <option value=" <?php echo $column['hospital_id'] ?>"> <img src="../image/K" alt=""> <?php echo $column['hospital_name'] ?> </option>
    <?php } ?>
</select>
</div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Amount/cc<span style="color:red">*</span></div>
<div><input type="text" name="amount" class="form-control" required></div>
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
<div class="col-lg-4 mb-4">
<div class="font-italic">Reason, why do you need blood?<span style="color:red">*</span></div>
<div><textarea class="form-control" name="address" required></textarea></div></div>
</div>
<div class="column">
<div class="col-lg-4 mb-4">
<div><input type="submit" name="Submit" class="btn btn-primary" value="Submit" style="cursor:pointer"></div>
</div>



</div>

</select>
</div>
</div> 
<!-- <img src="<?php if ($_POST['hospital'] = 'Muhimbili') {
  echo '../image/MUHIMBILI.jpg';
} ?>" alt="no data"> -->



<?php include 'footer.php' ?>
</div>
</body>
</html>
