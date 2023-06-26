<?php
include('../db.php');
session_start();
$id=$_SESSION['id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{

$name=$_POST['name'];
$email=$_POST['email'];

       $sql = "UPDATE student SET name='$name',email='$email' WHERE id='$id'";
                $res=mysqli_query($conn, $sql);
               if (isset($res))
                { 
                  $_SESSION['user']=$name;
                    echo '<script type="text/javascript">if(confirm("Update Successfull!")){window.location.href = "profile.php"; }else{window.location.href = "profile.php"; }</script>';

                    
                } else
                {
                   echo '<script type="text/javascript">if(confirm("Unable to Update !")){window.location.href = "profile.php"; }else{window.location.href = "profile.php"; }</script>';
                }
  }

  else{
    echo '<script type="text/javascript">if(confirm("Invalid Request Method!")){window.location.href = "profile.php"; }else{window.location.href = "profile.php"; }</script>';
  }
?>