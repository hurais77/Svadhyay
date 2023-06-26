<table>
            <thead>
               
                <th>Subjects</th>
                <th>DESCRIPTION</th>
                <th>Give TEST</th>
            </thead>
            <tbody>
                <?php
                $sql2="SELECT * FROM test WHERE subject='$files'"; //phy chem bio $files
                $res2=mysqli_query($conn,$sql2);

                $files2=mysqli_fetch_all($res2,MYSQLI_ASSOC);
                
                foreach ($files2 as $file):?> 
                <tr>
                  
                    <td>  <?php echo $file['subject']; ?>  </td>
                    <td>  <?php echo $file['name']; ?>  </td>
                    <td>  <?php  $path=$file['path'];
                                $_SESSION['path']=$path;
                                $subject=$file['subject'];
                                         echo "<a href='quiz.php?path=$path'>Start Giving Test</a>"; ?> 
                     </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>