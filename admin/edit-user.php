<?php

include('../middleware/adminmiddelware.php');
include('includes/header.php');


?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php  
            
if(isset($_GET['id'])){

    $id = $_GET['id'];
    $user = getByUserID("users", $id);

if(mysqli_num_rows($user) > 0){

$userdata = mysqli_fetch_array($user);

            ?>
            <div class="card">
                <div class="card-header">
                    <h4>edit user</h4>
                    <a href="user.php" class="btn btn-primary float-end">back</a>

                </div>
                <div class="card-body">
                    <form action="code.php" method="post" enctype="multipart/form-data"> 
                    <div class="row">
                        <div class="col-md-6">
                            <input type="hidden" name="user_id" value="<?= $userdata['id']  ?>">
                        <label for="">name</label>
                        <input type="text" name="name" value="<?= $userdata['name']  ?>" placeholder="enter user name" class="form-control">
                        </div>

                        <div class="col-md-6">
                        <label for="">email</label>
                        <input type="text" name="email" value="<?= $userdata['email']  ?>" placeholder="enter email" class="form-control">
                        </div>

                        <div class="col-md-6">
                        <label for="">otp</label>
                       <input type="text" name="otp" value="<?= $userdata['otp']  ?>" placeholder="enter otp" class="form-control" readonly>
                        </div>


                        <div class="col-md-6">
                        <label for="">phone no</label>
                        <input type="text" name="phone" value="<?= $userdata['phone']  ?>" placeholder="enter phone no" class="form-control">
                        </div>


                        <div class="col-md-6">
                        <label for="">password</label>
                        <input type="text" name="password" value="<?= $userdata['password']  ?>" placeholder="enter password" class="form-control">
                        </div>

                        <div class="col-md-6">
                        <label for="">role_as</label>
                        <input type="text" name="role" value="<?= $userdata['role_as']  ?>" placeholder="enter role" class="form-control">
                        </div>
                        <div class="col-md-6">
                        <label for="">status</label>
                        <input type="text" name="status" value="<?= $userdata['status']  ?>" placeholder="enter status" class="form-control">
                        </div>

                        <div class="col-md-6">
                        <label for="">created_at</label>
                        <input type="text" name="create" value="<?= $userdata['created_at']  ?>" placeholder="enter create date" class="form-control" readonly>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" name="update_user_btn">update</button>
                        </div>

                        
                    </div>
                    </form>
                    
                </div>
            </div>
            <?php
}
else{
    echo "category not found";
}
}
else{
    echo "id missing from url";
}
            ?>
        </div>
</div>
</div>

<?php
include('includes/footer.php');

?>