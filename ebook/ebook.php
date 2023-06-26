<?php
include('../db.php');
session_start();
$user=$_SESSION["user"];
 $query= " SELECT name,maths,phy,chem,bio,gk,comp FROM teacher WHERE (maths=1 OR phy=1 or chem=1 or bio=1 or gk=1 or comp=1) AND (name='$user')";
  $rest=mysqli_query($conn, $query);
 $row=mysqli_fetch_array($rest);
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>
            Documents
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Asset' rel='stylesheet'>
    <?php 
    include('../teacher/navbar_teacher.html');
    ?>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../css/table.css">
    </head>
    <body>
          <h2 style="text-align: center;font-family: 'Asset';font-size: 52px;">E-Book</h2>
    <div>
        <h3>
                 <a href="ass.php" style=" 
  padding: 14px 25px 0px 30px;
  text-align: center;
  text-decoration: none;
  color: red;
  display: inline-block;">Add New Ebook</a>
        
       
     </h3>
            
    </div>
    <div>
        <?php

     if($row['maths']==1)
     {
         echo "<h3>Maths</h3>";

$filesql1 = "SELECT * FROM ebook WHERE ebook.esubject = 'maths'";
        $fileresult1=mysqli_query($conn, $filesql1);
        $files=mysqli_fetch_all( $fileresult1,MYSQLI_ASSOC);

        include('create_table.php'); 
     }
          if($row['phy']==1)
     {
        echo "<h3>Physics</h3>";
       $filesql1 = "SELECT * FROM ebook WHERE ebook.esubject = 'phy'";
        $fileresult1=mysqli_query($conn, $filesql1);
        $files=mysqli_fetch_all( $fileresult1,MYSQLI_ASSOC);
        include('create_table.php');
     }
          if($row['bio']==1)
     {
       echo "<h3>Biology</h3>";
       $filesql1 = "SELECT * FROM ebook WHERE ebook.esubject = 'bio'";
        $fileresult1=mysqli_query($conn, $filesql1);
        $files=mysqli_fetch_all( $fileresult1,MYSQLI_ASSOC);
        include('create_table.php');
     }
          if($row['chem']==1)
     {
        echo "<h3>Chemistry</h3>";
       $filesql1 = "SELECT * FROM ebook WHERE ebook.esubject = 'chem'";
        $fileresult1=mysqli_query($conn, $filesql1);
        $files=mysqli_fetch_all( $fileresult1,MYSQLI_ASSOC);
        include('create_table.php');
     }
          if($row['gk']==1)
     {
        echo "<h3>General Knowledge</h3>";
       $filesql1 = "SELECT * FROM ebook WHERE ebook.esubject = 'gk'";
        $fileresult1=mysqli_query($conn, $filesql1);
        $files=mysqli_fetch_all( $fileresult1,MYSQLI_ASSOC);
        include('create_table.php');
     }
          if($row['comp']==1)
     {
       echo "<h3>Computer</h3>";
       $filesql1 = "SELECT * FROM ebook WHERE ebook.esubject = 'comp'";
        $fileresult1=mysqli_query($conn, $filesql1);
        $files=mysqli_fetch_all( $fileresult1,MYSQLI_ASSOC);
        include('create_table.php');
     }
?>
    </div>
    </body>
    </html>