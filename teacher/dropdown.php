<?php
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
    	$sql = "SELECT name,maths,phy,chem,bio,gk,comp FROM teacher WHERE (maths=1 OR phy=1 or chem=1 or bio=1 or gk=1 or comp=1) AND (name='Divya')";
    }
    $res=mysqli_query($conn, $sql);

?>
