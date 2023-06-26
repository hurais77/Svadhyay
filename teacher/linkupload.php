<?php
include "../db.php";
$name = $_POST['vid'];
$link = $_POST['link'];
$subject = $_POST['subject'];

$query = "INSERT INTO video VALUES ('$subject','$name','$link')";
if(mysqli_query($conn,$query))
{
                    echo '<script type="text/javascript">alert("Uploaded Successfully"); window.location.href ="video.php";</script>';
                    
                } else
                {
                    echo '<script type="text/javascript">alert("Something Went Wrong!")</script>';
                }
?>