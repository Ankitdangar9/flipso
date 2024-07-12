<?php
session_start();

?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <?php if(isset($_SESSION['message'])){ ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hey!</strong> <?= $_SESSION['message']; ?>.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
unset($_SESSION['message']);
  }
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
    <link href="assets/css/custom.css" rel="stylesheet" >
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" >
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" >
    <title>Document</title>
</head>

<body>
<div class="card">
    <div class="card-header">
    <h4>otp</h4>
    </div>
    <div class="card-body">

    <form action="functions/authcode.php" method="post"> 
   
  
    <div class="mb-3">
    <label for="exampleInputEmail1" requiredclass="form-label">otp</label>
    <input type="number" name="otp" required class="form-control" placeholder="enter your otp">
  
  <button type="submit" name="verify" class="btn btn-primary">Submit</button>
  
  
  
  
  
</form>
    </div>
</div>
           
   
</div>
        </div>
    </div>
    </div>

    <?php include("includes/footer.php"); ?>

    </body>


    
</html>