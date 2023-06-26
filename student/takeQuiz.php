<!DOCTYPE html>
<html>
<head>
     <script type="text/javascript">
         var hey;
        function getClickID(clickID) {
            hey = clickID;
            
            document.cookie = "subs = " + hey;
            
        }
        
    </script>

    <style>
       .wrapper {
    text-align: center;
}
p
{
    background-color:navy !important;
    color:white;
    font-size:30px !important;
    font-family: sans-serif !important
}
.button {
   margin-top:10px;
   font-size : 15px;
   font-style:bold;
}
    </style>
	<title>Quiz</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	include('navbar_student.html');
	?>
	<link rel="stylesheet" type="text/css" href="../css/table.css">
</head>
<body>
	<?php
		include('../db.php');
        session_start();
        $user=$_SESSION["user"];
                $filesql1 = "SELECT student.course FROM student WHERE student.name = '$user'";
                $fileresult1=mysqli_query($conn, $filesql1);
                $row=mysqli_fetch_array($fileresult1);
        
                $g = $row['course'];
        
                $query = "SELECT courses.$g FROM courses";
                $fileresult2=mysqli_query($conn, $query);
        
        
               $fgh=array();
               $i=-1;
        
                while ($row2=mysqli_fetch_array($fileresult2))
                {
                    $i=$i+1;
        
                    array_push($fgh,$row2[$g]);
        
                    $files=$fgh[$i];
                    $f = strtoupper($files);
                    echo "<p> <b>$f</b></p>";
                    
                    $val = $files;
                  
                    $sub="";
                    if($val == "maths") 
                    $sub = "quesMat";
                    elseif($val == "gk") 
                    $sub = "quesGK";
                    elseif($val == "phy") 
                    $sub = "quesPhy";
                    elseif($val == "chem") 
                    $sub = "quesChem";
                    else 
                    $sub = "quesBio";
                    $q = "SELECT * FROM $sub WHERE num = 1 and ans!=''";
                    
            
                
                    $query = mysqli_query($conn,$q);

                    if(mysqli_num_rows($query) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query)) {
                            
                            if($row['ans']!="")
                            {
                                echo "<br >";
                                $_SESSION['sub']=$sub;
                                $_SESSION['ques_count']=0;
                                echo "<div class='wrapper'>
                                <a href='ques.php' >
                                
                                <button class='btn btn-warning btn-lg'  id='$sub' value='$sub' onclick='getClickID(this.id)' > Take Quiz </button> </a>
                               
                                
                            </div>";
                            } 
                          }
                      
                    }

                    
                }
	?>
</body>
</html>