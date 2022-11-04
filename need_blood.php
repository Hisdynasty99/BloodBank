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
     <option value=" <?php echo $column['hospital_id'] ?>"> <?php echo $column['hospital_name'] ?> </option>
    <?php } ?>
</select>
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

</div><div class="column">
<?php if(isset($_POST['Submit'])){

  $bg=$_POST['hospital'];
  $sql=  'SELECT hospital_id, hospital_name, Location, Address  FROM hospital';
  $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
    if(mysqli_num_rows($result)>0)   {
    while($column = mysqli_fetch_assoc($result)) {
      ?>
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
     <option value=" <?php echo $column['hospital_id'] ?>"> <?php echo $column['hospital_name'] ?> </option>
    <?php } }}}?>
</select>
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

</div><div class="column">
<?php if(isset($_POST['Submit'])){

  $bg=$_POST['hospital'];
  $sql=  'SELECT hospital_id, hospital_name, Location, Address  FROM hospital';
  $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
    if(mysqli_num_rows($result)>0)   {
    while($column = mysqli_fetch_assoc($result)) {
      ?>
      <?php if(isset($_POST['Submit'])){

$bg=$_POST['blood'];
$sql=  'SELECT blood_id, blood_group, Location, Address  FROM blood';
$result=mysqli_query($conn,$sql) or die("query unsuccessful.");
  if(mysqli_num_rows($result)>0)   {
  while($column = mysqli_fetch_assoc($result)) {
    ?>
      <!-- <div class="col-lg-4 col-sm-6 portfolio-item" ><br>
      <div class="card" style="width:300px">
          <img src="image\MUHIMBILI.jpg" alt="Card image" style="width:100%;height:300px">
          <div class="card-body">
          <div class="col-lg-4 col-sm-6 portfolio-item" ><br> -->
      <div class="card" style="width:300px">
          <img src="image\KAIRUKI.jpg" alt="Card image" style="width:100%;height:300px">
          <div class="card-body">
            <h3 class="card-title"><?php echo $column['hospital_name']; ?></h3>
            <p class="card-text">
              <b>hospital_name: </b> <b><?php echo $column['hospital_name']; ?></b><br>
              <b>Location. : </b> <?php echo $column['Location']; ?><br>
              <!-- <b>Gender : </b><?php echo $row['donor_gender']; ?><br>
              <b>Age : </b> <?php echo $row['donor_age']; ?><br> -->
              <b>Address : </b> <?php echo $column['Address']; ?><br>
            </p>

          </div>
        </div>
  </div>

  <?php
  }
    }
  }
    else
    {

        echo '<div class="alert alert-danger">No hospital Found For your search information</div>';

    }
}}} ?>
</div>
</div>
</div>

<?php include 'footer.php' ?>
</div>
</body>
</html>
