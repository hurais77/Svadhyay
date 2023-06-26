<?php
   include("../db.php");
   session_start();
    $error="";
    $msg="";
    $otp=$_SESSION['otp'] ;
    $email =$_SESSION['forgot_pass'] ;
   
   
   if(isset($_POST["change_password"]))
{
 $new_password = $_POST["user_password"];
 $confirm_password = $_POST["confirm_password"];

 if($new_password == $confirm_password)
 {
  $query = "
  UPDATE teacher
  SET password = '$new_password' 
  WHERE email = '$email' ";

  mysqli_query($conn,$query);

  echo '<script type="text/javascript">if(confirm("Password has been changed....Login with your new Password")){window.location.href = "../home.php"; }else{window.location.href = "../home.php";}</script>';
 }
 else
 {
  $msg = 'Confirm Password is not match';
 }
}
?>

<html>
   
   <head>
      <title>Verify OTP</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            font-size:30px;
            text-align: center;
         }
         .box {
            border:#666666 solid 1px;

         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
      
  
      <div align = "center">
     <div style = "width:600px;height: 50%; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:10px;text-align: center"><b>Change Your Password</b></div>
        
            <div style = "margin:30px">
     <form method="post">
    
       <label>Enter New Password</label>
       <input type="password" name="user_password" class="form-control" />
       <br>
      
      
       <label>Enter Confirm Password</label>
       <input type="password" name="confirm_password" class="form-control" />
       <br>
       <br>
     
      
      
       <input type="submit" name="change_password" class="btn btn-default" value="Change" />

      </div>
     </form>
     </div>
        
         </div>
      
      </div>
    
   </body>
</html>