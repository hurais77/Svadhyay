<?php
   include("../db.php");
   session_start();
    $error="";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email =$_POST['email'];
    if(empty($email))
      {
         $error= 'Email field is Required';
      }
      else{


      // username and password sent from form 
      
     // $email = mysqli_real_escape_string($conn,$_POST['email']);
      echo $email;
    
      
      $sql = "SELECT id FROM teacher WHERE email = '$email' ";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
        
         $_SESSION['forgot_pass'] = $email;
         
         header("location: mail.php");
      }else {
         $error = "Your Email is invalid";
      }
   }
 }
?>
<html>
   
   <head>
      <title>Forgot Password</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
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
            <div style = "background-color:#333333; color:#FFFFFF; padding:10px;text-align: center"><b>Send OTP to Email</b></div>
        
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>Email</label><input type = "text" name = "email" class="form-control"/><br /><br />
                  
              <input type = "submit" value = " Submit " class="btn btn-default" style="width: 25%;margin-top:18px;"/><br />
           </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
          
            </div>
        
         </div>
      
      </div>

   </body>
</html>