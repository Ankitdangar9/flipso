<?php

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
    <h4>verify account</h4>
    </div>
    <div class="card-body">

    <form action="functions/authcode.php" method="post"> 
    
  
  <div class="mb-3">
    <label for="exampleInputEmail1" requiredclass="form-label">Email address</label>
    <input type="email" required name="email5" class="form-control" placeholder="enter your email" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" requiredclass="form-label">Password</label>
    <input type="password" required name="pass" class="form-control" placeholder="enter password" id="exampleInputPassword1">
  </div>
 
  
  
  <button type="submit" name="verifybtn" class="btn btn-primary">verify</button>
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