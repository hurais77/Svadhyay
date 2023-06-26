<?php
   include("../db.php");
   session_start();
    $error="";
    $msg="";
    $otp=$_SESSION['otp'] ;
    $email =$_SESSION['forgot_pass'] ;
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $otp_user =$_POST['otp'];
      if(empty($otp_user))
      {
         $msg= 'OTP Field Cannot be empty';
      }
      else
      { 
         if($otp==$otp_user) {
           
         
            
          echo '<script>window.location.replace("change_pass.php")</script>';
         }else {
            $error = "Your OTP is invalid";
         }
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
            <div style = "background-color:#333333; color:#FFFFFF; padding:10px;text-align: center"><b>Verify Your OTP</b></div>
        
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>Enter OTP </label><input type = "password" name = "otp" class = " form-control"/><br /><br />
                  
                 <input type = "submit" value = " Submit " class="btn btn-default" style="width: 25%;margin-top:18px;"/><br />
               </form>
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $msg; ?></div>
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
          
            </div>
        
         </div>
      
      </div>
      

   </body>
</html>