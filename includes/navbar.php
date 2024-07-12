<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark shadow">
  <div class="container">
    <a class="navbar-brand" href="index.php">Ecom</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="categorys.php">collations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php">cart</a>
        </li>
        <?php
if(isset($_SESSION['auth'])){

?>
 <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         profile
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">
           <?= $_SESSION['auth_user']['name'];?><br>
           <?= $_SESSION['auth_user']['email'];?>
          </a></li><hr>

          <li><a class="dropdown-item" href="settings.php">change username</a></li>
          <li><a class="dropdown-item" href="changeemail.php">change email</a></li>
         
            <li><a class="dropdown-item" href="changepass.php">change password</a></li><hr>
            <li><a class="dropdown-item" href="logout.php">logout</a></li>
            <li><a class="dropdown-item" href="delete.php">delete</a></li>
          </ul>
 </li>
<?php

}
else{
?>
 <li class="nav-item">
          <a class="nav-link" href="register.php">register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">login</a>
        </li>
       
<?php 
}
        ?>
       
      </ul>
    </div>
  </div>
</nav>