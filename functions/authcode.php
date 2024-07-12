


<?php

include("../config/dbcon.php");
include("myfunction.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['register_btn'])){
  $status2 = "0";
    $name = mysqli_escape_string($con,$_POST['name']);
    $phone = mysqli_escape_string($con,$_POST['phone']);
    $email = mysqli_escape_string($con,$_POST['email']);
    $password = mysqli_escape_string($con,$_POST['password']);
    $cpassword = mysqli_escape_string($con,$_POST['cpassword']);
    $otp = mysqli_escape_string($con,$_POST['otp']);
    $check_email_query = "SELECT email FROM users WHERE email='$email'";
    $check_email_query_run =mysqli_query($con, $check_email_query) ;
    
    if(mysqli_num_rows($check_email_query_run)>0){
      $_SESSION['message']="email alredy exits";
      header('Location: ../register.php');
      }
      else{
        $userdata = mysqli_fetch_array($check_email_query_run);
        $status = $userdata['status'];

     //Import PHPMailer classes into the global namespace
  //These must be at the top of your script, not inside a function
  
  
  //Load Composer's autoloader
  require '../PHPMailer/Exception.php';
  require '../PHPMailer/PHPMailer.php';
  require '../PHPMailer/SMTP.php';
  
  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);
  
  try {
      //Server settings
                            //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = "ankitdangarahir111046@gmail.com";                     //SMTP username
      $mail->Password   = 'dqainxakejcfoagr';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
      //Recipients
      $mail->setFrom("$email", 'contact');
      $mail->addAddress("$email", 'flipzon');     //Add a recipient
      
      
     
  
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'test';
      $mail->Body    = "Sender Name - $name <br> Sender Email - ankitdangarahir111046@gmail.com <br> link - <button><a href='verify.php'>verify</a></button>";
      
  
      $mail->send();
      header('Location: ../login.php');
      
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }

  

    

  


    if($password == $cpassword){

      $insert_query="INSERT INTO `users` (`name`, `email`, `otp`, `phone`, `password`, `status`, `created_at`) VALUES ('$name', '$email', '$otp', '$phone', '$password', $status2, current_timestamp())";
      $insert_query_run = mysqli_query($con, $insert_query);

      if($insert_query_run){
          $_SESSION['message']="register succesfully";
          header('Location: ../login.php');
         
      }
      else{
          $_SESSION['message']="something went wrong";
          header('Location: ../register.php');
      }

  }
  else{
    $_SESSION['message']="password do not match";
    header('Location:../register.php');
}
      }

}


    
if(isset($_POST['verify'])){
  
  $otp2 = mysqli_real_escape_string($con, $_POST['otp']);
  $otp_query="SELECT * FROM users WHERE otp='$otp2'";
  $otp_query_run = mysqli_query($con, $otp_query);
  if(mysqli_num_rows($otp_query_run) > 0){
    $_SESSION['message']="otp match";
    
    header('Location:../login.php');
    
  }
  else{
    $_SESSION['message']="otp wrong";
    
    header('Location:../otp.php');
    
  }
}

  
   
  
  

  
   

if(isset($_POST['login_btn'])){

  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  

  $login_query="SELECT * FROM users WHERE email='$email' AND password='$password'";
  $login_query_run = mysqli_query($con, $login_query);

  if(mysqli_num_rows($login_query_run) > 0){
    
   
      $userdata = mysqli_fetch_array($login_query_run);
      $userid = $userdata['id'];
      $username = $userdata['name'];
      $useremail = $userdata['email'];
      $role_as = $userdata['role_as'];
      $status4 = $userdata['status'];

      $_SESSION['auth_user'] = [
        'user_id' => $userid,
          'name' => $username ,
          'email' => $useremail

      ];



    $_SESSION['status'] = $status4;

  

  if($status4 == 1){
    $_SESSION['auth'] = true;
    $_SESSION['role_as'] = $role_as;
       if($role_as == 1){
      redirect("../admin/index.php", "welcome to deshboard");


    }
    else{
      redirect("../index.php", "logging successfully");
    }
  }
  else if($status4 == 0){
    redirect("../login.php", "verify first");

  }
  else{
    redirect("../register.php", "register first");
  }
  
     
  }
  
  else{
    redirect("../login.php", "invalid credentials");
      
  }
  
}


 else if(isset($_POST['verifybtn'])){

  
  $email5 = mysqli_real_escape_string($con, $_POST['email5']);
  $pass = mysqli_real_escape_string($con, $_POST['pass']);

  $login_query4="SELECT * FROM users WHERE email='$email5' AND password='$pass' ";
  $login_query_run3 = mysqli_query($con, $login_query4);
  $userdata2 = mysqli_fetch_array($login_query_run3);
  $status3 = $userdata2['status'];
   
 
  if(mysqli_num_rows($login_query_run3) > 0){
   
    $status3=1;
    $update = "UPDATE `users` SET `status`='$status3' WHERE email='$email5' AND password='$pass' ";
    $login_query_run4 = mysqli_query($con, $update);
    if($status3 == 1){
      //Import PHPMailer classes into the global namespace
  //These must be at the top of your script, not inside a function
  
  
  //Load Composer's autoloader
  require '../PHPMailer/Exception.php';
  require '../PHPMailer/PHPMailer.php';
  require '../PHPMailer/SMTP.php';
  
  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);
  
  try {
      //Server settings
                            //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = "ankitdangarahir111046@gmail.com";                     //SMTP username
      $mail->Password   = 'dqainxakejcfoagr';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
      //Recipients
      $mail->setFrom("$email5", 'contact');
      $mail->addAddress("$email5", 'flipzon');     //Add a recipient
      
      
     
  
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'flipzon';
      $mail->Body    = "Sender Name - ankit <br> Sender Email - ankitdangarahir111046@gmail.com <br> verifyed complted <br> thank you for register";
      
  
      $mail->send();
      header('Location: ../login.php');
      
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }

      $_SESSION['message']= "verify successfully";
      header('Location:../login.php');
      
    }
    else{
      
      $_SESSION['message']= "verify not complate";
    }
  
    
   
  }
  else{
    $_SESSION['message']= "invalid";
  }
  
}

  
else if(isset($_POST['forgotpassword_btn'])){
  $email3 = mysqli_real_escape_string($con, $_POST['email3']);
  $randotp = mysqli_real_escape_string($con, $_POST['randotp']);
  $otp2 = mysqli_real_escape_string($con, $_POST['otp2']);

   

  $login_query2="SELECT * FROM users WHERE email='$email3' ";
  $login_query_run2 = mysqli_query($con, $login_query2);

  if(mysqli_num_rows($login_query_run2) > 0){
    //Import PHPMailer classes into the global namespace
  //These must be at the top of your script, not inside a function
  
  
  //Load Composer's autoloader
  require '../PHPMailer/Exception.php';
  require '../PHPMailer/PHPMailer.php';
  require '../PHPMailer/SMTP.php';
  
  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);
  
  try {
      //Server settings
                            //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = "ankitdangarahir111046@gmail.com";                     //SMTP username
      $mail->Password   = 'dqainxakejcfoagr';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
      //Recipients
      $mail->setFrom("$email3", 'contact');
      $mail->addAddress("$email3", 'flipzon');     //Add a recipient
      
      
     
  
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'test';
      $mail->Body    = "Sender Name - ankit dangar <br> Sender Email - ankitdangarahir111046@gmail.com <br> OTP - $randotp ";
      
  
      $mail->send();
     
      
      
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
   
  
  
}
else{
  echo "invalid email";
}
}





else if(isset($_POST['changepassword_btn'])){
  $password1 = mysqli_real_escape_string($con, $_POST['password1']);
  $password2 = mysqli_real_escape_string($con, $_POST['password2']);
 

  $login_query2="SELECT * FROM users WHERE password='$password1' ";
  $login_query_run2 = mysqli_query($con, $login_query2);

  if(mysqli_num_rows($login_query_run2) > 0){
    $login_query3="UPDATE `users` SET `password`='$password2' WHERE password='$password1' ";
    $login_query_run3 = mysqli_query($con, $login_query3);
    if($login_query_run3){
      
      $_SESSION['message']="password change  successfullly";
      header('Location: ../changepass.php');
    

    }
    else{
      $_SESSION['message']= "invalid creanditial";
      header('Location: ../changepass.php');
  }
  
  
}
else{
  $_SESSION['message']= "invalid oldpassword";
  header('Location: ../changepass.php');

}
}

else if(isset($_POST['changename_btn'])){
  $oldname = mysqli_real_escape_string($con, $_POST['oldname']);
  $newname = mysqli_real_escape_string($con, $_POST['newname']);
  $password3 = mysqli_real_escape_string($con, $_POST['password3']);
 

  $login_query2="SELECT * FROM users WHERE password='$password3' ";
  $login_query_run2 = mysqli_query($con, $login_query2);
  

  if(mysqli_num_rows($login_query_run2) > 0){
    $login_query3="UPDATE `users` SET `name`='$newname' WHERE name='$oldname' ";
    $login_query_run3 = mysqli_query($con, $login_query3);
    if($login_query_run3){
      
      $_SESSION['message']="name change  successfullly";
      header('Location: ../settings.php');
    

    }
    else{
      $_SESSION['message']= "invalid creanditial";
      header('Location: ../settings.php');
  }
  
  
}
else{
  $_SESSION['message']= "invalid oldpassword";
  header('Location: ../settings.php');

}
}


else if(isset($_POST['delete_btn'])){
  
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
 

  $login_query2="SELECT * FROM users WHERE email='$email' && password='$password' ";
  $login_query_run2 = mysqli_query($con, $login_query2);
  

  if(mysqli_num_rows($login_query_run2) > 0){
    $login_query3="DELETE FROM `users`  WHERE email='$email' ";
    $login_query_run3 = mysqli_query($con, $login_query3);
    if($login_query_run3){
      
      $_SESSION['message']="account deleted successfullly";
      header('Location: ../login.php');
      session_destroy();
    

    }
    else{
      $_SESSION['message']= "invalid creanditial";
      header('Location: ../delete.php');
  }
  
  
}
else{
  $_SESSION['message']= "invalid email and password";
  header('Location: ../delete.php');

}
}

else if(isset($_POST['changeemail_btn'])){
  $oldemail = mysqli_real_escape_string($con, $_POST['oldemail']);
  $newemail = mysqli_real_escape_string($con, $_POST['newemail']);
  $password4 = mysqli_real_escape_string($con, $_POST['password4']);
 

  $login_query2="SELECT * FROM users WHERE password='$password4' ";
  $login_query_run2 = mysqli_query($con, $login_query2);
  

  if(mysqli_num_rows($login_query_run2) > 0){
    $login_query3="UPDATE `users` SET `email`='$newemail' WHERE email='$oldemail' ";
    $login_query_run3 = mysqli_query($con, $login_query3);
    if($login_query_run3){
      
      $_SESSION['message']="email change  successfullly";
      header('Location: ../changeemail.php');
    

    }
    else{
      $_SESSION['message']= "invalid creanditial";
      header('Location: ../changeemail.php');
  }
  
  
}
else{
  $_SESSION['message']= "invalid oldemail";
  header('Location: ../changeemail.php');

}
}





?>