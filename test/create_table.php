<table>
            <thead>
            
                <th>DATE</th>
                <th>DESCRIPTION</th>
                <th>View TEST</th>
            </thead>
            <tbody>
                <?php
                
                foreach ($files as $file):?> 
                <tr>
                    
                    <td>  <?php echo $file['date']; ?>  </td>
                    
                    <td>  <?php echo $file['name']; ?>  </td>
                   <td>  <?php  $path=$file['path'];
                                $_SESSION['path']=$path;
                              
                                         echo "<a href='teacher_download.php?path=$path'>View  Test</a>"; ?> 
                     </td>
                </tr>
            <?php endforeach; ?>
            

            </tbody>
        </table>