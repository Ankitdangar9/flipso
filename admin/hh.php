if(isset($_POST['update_user_btn'])){

$user_id = $_POST['user_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$otp = $_POST['otp'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$role = $_POST['role'];
$status = $_POST['status'];
$create = $_POST['create'];

$user_query = "UPDATE users SET name='$name', email='$email', otp='$otp', phone='$phone', password='$password', role_as='$role', status='$status', created_at='$create' WHERE id='$user_id'";
$user_query_run = mysqli_query($con, $user_query);

if($user_query_run){
    redirect("edit-user.php?id=$user_id", "user updated successfully");
}
else{
    redirect("edit-user.php?id=$user_id", "somthing went wrong");
        }
}

else if(isset($_POST['delete_user_btn'])){
$user_id = mysqli_real_escape_string($con, $_POST['user_id']);

$user_query = "SELECT * FROM users WHERE id='$user_id'";
$user_query_run = mysqli_query($con, $user_query);
$user_data = mysqli_fetch_array($user_query_run);



$delete_query = "DELETE FROM users WHERE id='$user_id'";


$delete_query_run = mysqli_query($con, $delete_query);

if($delete_query_run){
   
   // redirect("user.php", "user deleted successfully");
   echo 200;
    
}
else{
    //redirect("user.php", "somthing went wrong");
    echo 500;
}
}