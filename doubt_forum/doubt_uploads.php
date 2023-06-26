<?php

    $doc = '';
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "iwp";
    $conn = new mysqli($host,$user,$pass,$db);

    if(mysqli_connect_error())
    {
        die('Connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else
    {
        $statusMsg = '';

        
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir.$fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        $description =$_POST['description'];
        $val = $_POST['subject'];
       
        
        if($fileType == "pdf")
        {
            if (copy($_FILES["file"]["tmp_name"], $targetFilePath))
            {

                $filesql = "INSERT INTO ebook (description,download,esubject) VALUES('$description','$targetFilePath','$val')";
                
                if (mysqli_query($conn, $filesql))
                {
                    echo '<script type="text/javascript">if(confirm("File Uploaded")){window.location.href = "ebook.php"; }</script>';
                    
                } else
                {
                    echo '<script type="text/javascript">alert("Something Went Wrong!")</script>';
                }
            }
            else
            {
                echo "<p>Upload Failed.</p>";
            }
        }
        else
        {
            echo "<p>Class notes must be uploaded in PDF format.</p>";
        }
    }
?>
