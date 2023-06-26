<table>
            <thead>
               
                <th>DESCRIPTION</th>
                <th>DOWNLOAD</th>
            </thead>
            <tbody>
                <?php
                
                foreach ($files as $file):?> 
                <tr>
                  
                    <td>  <?php echo $file['description']; ?>  </td>
                    <td>  <?php $path=$file['download']; echo "<a href='download.php?dow=$path'>Download</a>"; ?>  </td>
                </tr>
            <?php endforeach; ?>
            

            </tbody>
        </table>