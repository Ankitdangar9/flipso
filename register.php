<?php
session_start();


if(isset($_SESSION['auth'])){
  $_SESSION['message'] = "you are alredy login"; 
  header('Location: index.php');
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
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <h4>registration form</h4>
    </div>
    <div class="card-body">

    <form action="functions/authcode.php" method="post"> 
    <div class="mb-3">
    <label class="form-label">name</label>
    <input type="text" required name="name"narme  class="form-control" placeholder="enter your name">
    
  </div>
  <div class="mb-3">
    <label class="form-label">phone</label>
    <input type="number" required name="phone" class="form-control" placeholder="enter your phone number">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" requiredclass="form-label">Email address</label>
    <input type="email required" name="email" class="form-control" placeholder="enter your email" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" required name="password" class="form-control" placeholder="enter password" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label  class="form-label">conform Password</label>
    <input type="password" required name="cpassword" placeholder="enter conform password" class="form-control">
  </div>
  
  <button type="submit" required name="register_btn" class="btn btn-primary">Submit</button>
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