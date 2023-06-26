<?php
include('../db.php');
session_start();
    if(isset($_POST['upload']))
    {

        
        $target="../ebook/uploads/".basename($_FILES['image']['name']);

        $image=$_FILES['image']['name'];
       
        $solution_description=$_POST['text'];
        $user_s = $_SESSION['user_s'];
        

        $sql="UPDATE doubt SET solution_description ='$solution_description', solution_img='$target' WHERE student_name='$user_s'";
         
        if(mysqli_query($conn,$sql))
        {

        }
        else
        {
           echo mysqli_error();
        }
        
        if (copy($_FILES['image']['tmp_name'], $target))
         {
            
            echo '<script type="text/javascript">if(confirm("Solution has been Uploaded!")){window.location.href = "teacher_doubt_forum.php"; }else{window.location.href = "teacher_doubt_forum.php";}</script>';
  
         }
         else
         {
            echo '<script type="text/javascript">if(confirm("There was a problem uploading image!")){window.location.href = "teacher_doubt.php"; }else{window.location.href = "teacher_doubt.php";}</script>';
          

         }

    }
?>

