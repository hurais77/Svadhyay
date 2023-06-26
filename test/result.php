<?php 
session_start();
        include('../db.php');
      
       	 $user=$_SESSION["user"];
       	$variable = '<script>sessionStorage.getItem("marks")</script>';
       echo "sarala".$variable ; 
      
      
   $query = "INSERT INTO correct (name,marks) values('$user','$variable')";
        mysqli_query($conn, $query);
 //echo '<script type="text/javascript">if(confirm("Login Failed")){window.location.href = "result.php"; }else{window.location.href = "home.php";}</script>';
        ?>
