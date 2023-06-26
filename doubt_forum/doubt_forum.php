<?php
session_start();
	$msg="";
	if(isset($_POST['upload']))
	{
		
		
		$target="../ebook/uploads/".basename($_FILES['image']['name']);
		$db=mysqli_connect("localhost","root","","iwp");

		$image=$_FILES['image']['name'];
		$user=$_SESSION['user'];

		$doubt_description=$_POST['text'];
		$subject=$_POST['subject'];

		$sql="INSERT INTO doubt(student_name,subject,doubt_img,doubt_description,date) VALUES('$user','$subject','$image','$doubt_description',curdate())";

		if(mysqli_query($db,$sql))
		{

		}
		else
		{
			echo $sql;
		}

		echo $target;
		if (copy($_FILES['image']['tmp_name'], $target))
		 {
			$msg="Image uploaded successfully";
			
		 }
		 else
		 {
		 	$msg="There was a problem uploading image";
		 }
		
	}
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>DOUBT</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="doubt.css ">
		<?php
		include ('../student/navbar_student.html');
		?>
	</head>
	<body>
		<div id="content">
			 <a href="doubt.php"style=" background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
">Click Here To Ask a Doubt</a>
		
			<?php
				$user=$_SESSION['user'];
				$db=mysqli_connect("localhost","root","","iwp");
				$sql="SELECT * FROM doubt where student_name='$user'";
				$result=mysqli_query($db,$sql);
				while ($row= mysqli_fetch_array($result))
				 {  $date=$row['date'];
					$solution_img=$row['solution_img'];
				 	echo "<div class='forum'>";
				 	echo "<div><div class='img_div1'>";
						echo "<img src='student.png' class='student'>";
						echo "<h3><b>$user</b></h3></div>";
					echo "</div>";
					echo "<div id='img_div'>";

						echo "<img src='../ebook/uploads/".$row['doubt_img']."'>";
							echo "<hr><div id='p_div'>";
								echo "<p>".$row['doubt_description']."</p>";
							echo "</div></div>";


					if ($solution_img==null) {
						echo " <b>Teacher has not yet Answered Your Question</b>";
					}
					else{

						echo "<div><div class='img_div1'>";
						echo "<img src='teacher.jpg' class='student'>";
						echo "<h3><b>Teacher</b></h3></div><h3>$date</h3>";
					echo "</div>";
					echo "<div id='img_div'>";

						echo "<img src='".$row['solution_img']."'>";
							echo "<hr><div id='p_div'>";
								echo "<p>".$row['solution_description']."</p>";
							echo "</div></div><hr>";
							echo "</div>";
						}
				}
			?>
		
	</div>
	</body>
	</html>