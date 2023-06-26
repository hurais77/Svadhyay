<!DOCTYPE html>
<html>
<head>

    <style>
        iframe
        {
            display:none;
            margin : 20px auto;
        }
    </style>
	<title>Video</title>
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

            $files=strtoupper($fgh[$i]);
            
            echo "<p>$files</p>";
            include('stable.php');
        }

	$conn->close();
?>
</body>
</html>