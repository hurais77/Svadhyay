<?php
include("../db.php");
session_start();
$user=$_SESSION['user'];

?>


<html>
<head>
<title>Update Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../css/profile.css" rel="stylesheet" type="text/css" />
</head>
<?php
 include ('navbar_teacher.html');
 ?>
<body>

	<?php
		$user=$_SESSION['user'];
		
		$sqlselect="SELECT * FROM teacher where name='$user' ";
		$records=mysqli_query($conn,$sqlselect);
		$count=mysqli_num_rows($records);

		if($count==1)
		{
			$field=mysqli_fetch_array($records);
			{
			$id=$field['id'];
			$name=$field['name'];			
			$email=$field['email'];
			
			
		}
    $_SESSION['id']=$id;

		}
		else
		{
			echo"<h2>Not success!Try Again....</h2>";
		}


	?>





    <form name="frmRegistration" method="POST" action="01.php">
        <div class="demo-table">
        <div class="form-head">Update Profile</div>
            

            <div class="field-column">
                <label>Name</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="name"
                        value="<?php echo $name; ?>">
                </div>
            </div>
            
            
          
           
            <div class="field-column">
                <label>Email</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="email"
                        value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="field-column">
              <a href="forgot_password.php" style="color: red;">Click Here To Change Password</a>
              <br>
              <br>

             
                <div>
                    <input type="submit"
                        name="update" value="Update"
                        class="btnRegister">
                </div>
            </div>

        </div>
    </form>
    

</body>

  
</html>