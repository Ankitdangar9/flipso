<?php
session_start();
if(!isset($_SESSION['auth'])){
  $_SESSION['message'] = "you are not login"; 
  header('Location: login.php');
  exit();

}


include("includes/header.php"); ?>

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

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
    <link href="assets/css/custom.css" rel="stylesheet" >
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" >
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" >


    <title>php ecommerce</title>

    <!-- alertify js -->

  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  
  </head>
 
  <style>
    body {
  background-image: url("img5.jpeg");
  background-color: #cccccc;
  background-repeat: no-repeat;
}
  </style>
  <body>
  
               
          
<div class="card">
    <div class="card-header">
    <h4>change password</h4>
    </div>
    <div class="card-body">

    <form action="functions/authcode.php" method="post"> 
    
  
  <div class="mb-3">
    <label for="exampleInputpassword1" required class="form-label">old password</label>
    <input type="password" required name="password1" class="form-control" placeholder="enter old password" id="exampleInputPassword1">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" required class="form-label">new Password</label>
    <input type="password" required name="password2" class="form-control" placeholder="enter new password" id="exampleInputPassword2">
  </div>
 
 
  
  <button type="submit" name="changepassword_btn" class="btn btn-primary">change password</button>
</form>
    </div>
</div>
           
   
</div>
        </div>
    </div>
    </div>
</body>
</html>

<?php include("includes/footer.php"); ?>