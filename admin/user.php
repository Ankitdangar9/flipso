<?php

include('../middleware/adminmiddelware.php');
include('includes/header.php');


?>


 <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </li>

<div class="container">
    <div class="row">
        <div class="col-md-12">
<div class="card" style="width: 1350px;">
    <div class="card-header">
       <h4>user</h4> 
      
    </div>
    <div class="card-body" id="category_table">
        <table class="table table-bordered table-striped">

        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>otp</th>
                <th>phone</th>
                <th>password</th>
                <th>role_as</th>
                <th>status</th>
                <th>created_at</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
$users = getalluser("users");

if(mysqli_num_rows($users) > 0)
{

foreach($users as $user){
    ?>

    <tr>
    <td><?= $user['id']; ?></td>
    <td><?= $user['name']; ?></td>
    <td><?= $user['email']; ?></td>
    <td><?= $user['otp']; ?></td>
    <td><?= $user['phone']; ?></td>
    <td><?= $user['password']; ?></td>
    <td><?= $user['role_as']; ?></td>
    <td><?= $user['status']; ?></td>
    <td><?= $user['created_at']; ?></td>
    
    
    
    <td>
        <a href="edit-user.php?id=<?= $user['id']; ?>" class="btn btn-primary">edit</a>
        
    </td>
    <td>
        
        <form action="code.php" method="post">
            <input type="hidden" name="user_id" value="<?= $user['id']; ?>">
        <button type="submit" class="btn btn-danger" name="delete_user_btn">delete</button>
        </form>
       
    </td>
    
</tr>
<?php
}
}
else{
    echo "no recordes found";
}
            ?>
            
        </tbody>

        </table>
    </div>
</div>
</div>
        
</div>
</div>

<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" ></script>
<script src="./assets/js/core/bootstrap.min.js" ></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js" ></script>












<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="./assets/js/material-dashboard.min.js?v=3.1.0"></script>

<?php
include('includes/footer.php');

?>