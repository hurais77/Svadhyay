    <!DOCTYPE html>
    <html>
    <head>
        <title>Documents</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        include('navbar_teacher.html');
        ?>
        <link rel="stylesheet" type="text/css" href="../css/table.css">
          <link href='https://fonts.googleapis.com/css?family=Asset' rel='stylesheet'>
     
    </head>
    <body>
      <h2 style="text-align: center;font-family: 'Asset';font-size: 52px;">Assignments</h2>
    <div >
      <h3>
                 <a href="add_new_ass.php" style=" 
  padding: 14px 25px 0px 30px;
  text-align: center;
  text-decoration: none;
  color: red;
  display: inline-block;">Add New Assignment</a>
        
       
     </h3>
    </div>
     <?php
        include('../db.php');
  
        ?>  
    <div>
        <?php
        session_start();
        $user = $_SESSION["user"];
        $query= "SELECT name,maths,phy,chem,bio,gk,comp FROM teacher WHERE (maths=1 OR phy=1 or chem=1 or bio=1 or gk=1 or comp=1) AND (name='$user')";
        $res=mysqli_query($conn, $query);
        $row=mysqli_fetch_array($res,MYSQLI_ASSOC);

        if($row['maths']==1)
     {
        echo "<h3>MATHS</h3>";
        $sql="SELECT * FROM  maths";
        $res1=mysqli_query($conn, $sql);
        $files=mysqli_fetch_all($res1,MYSQLI_ASSOC);

        include('create_table.php');
        
     }
          if($row['phy']==1)
     {
        echo "<h3>Physics</h3>";
        $sql="SELECT * FROM  phy";
        $res1=mysqli_query($conn, $sql);
        $files=mysqli_fetch_all($res1,MYSQLI_ASSOC);

        include('create_table.php');
     }
          if($row['bio']==1)
     {
        echo "<h3>Biology</h3>";
        $sql="SELECT * FROM  bio";
        $res1=mysqli_query($conn, $sql);
        $files=mysqli_fetch_all($res1,MYSQLI_ASSOC);

        include('create_table.php');
     }
          if($row['chem']==1)
     {
        echo "<h3>Chemistry</h3>";
        $sql="SELECT * FROM chem";
        $res1=mysqli_query($conn, $sql);
        $files=mysqli_fetch_all($res1,MYSQLI_ASSOC);

        include('create_table.php');
     }
          if($row['gk']==1)
     {
        echo "<h3>Genrel Knowledge</h3>";
        $sql="SELECT * FROM  gk";
        $res1=mysqli_query($conn, $sql);
        $files=mysqli_fetch_all($res1,MYSQLI_ASSOC);

        include('create_table.php');
     }
          if($row['comp']==1)
     {
        echo "<h3>Computer</h3>";
        $sql="SELECT * FROM comp";
        $res1=mysqli_query($conn, $sql);
        $files=mysqli_fetch_all($res1,MYSQLI_ASSOC);

        include('create_table.php');
     }
?>
</div>
</body>
</html>