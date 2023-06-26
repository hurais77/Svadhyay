 <?php
 while($row2=mysqli_fetch_array($res2))
            {

                $student_name=$row2['student_name'];
                 $user = $_SESSION['user'];
               
             

                   echo "<div class='forum'>";
                    echo "<div><div class='img_div1'>";
                        echo "<img src='student.png' class='student'>";
                        echo "<h3><b>$student_name</b></h3></div>";
                    echo "</div>";

                    echo "<div id='img_div'>";
                        echo "<img src='../ebook/uploads/".$row2['doubt_img']."'>";
                            echo "<hr><div id='p_div'>";
                                echo "<p>".$row2['doubt_description']."</p>";
                            echo "</div></div>";


                             echo "<div><div class='img_div1'>";
                        echo "<img src='teacher.jpg' class='student'>";
                        echo "<h3><b>$user</b></h3></div>";
                    echo "</div>";
                    echo "<div id='img_div'>";

                        echo "<img src='".$row2['solution_img']."'>";
                            echo "<hr><div id='p_div'>";
                                echo "<p>".$row2['solution_description']."</p>";
                            echo "</div></div><hr>";

                            echo "</div><hr>";
                        
            }
?>