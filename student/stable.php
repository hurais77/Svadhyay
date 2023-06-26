<script>
    function showFrame(link,course)
    {
        var a = document.getElementById(course);
        var txt = link.replace("youtube.com/", "youtube.com/embed/");
        a.src = txt;
        a.style.display="block";
    }
</script>
<table>
            <thead>
              
                
                <th>NAME</th>
            </thead>
            <tbody>
                <?php
               $sql2="SELECT * FROM video WHERE subject = '$fgh[$i]'";
               $result=mysqli_query($conn,$sql2);
             

                $files2=mysqli_fetch_all($result,MYSQLI_ASSOC);
                
                foreach ($files2 as $file):
                $link = $file['link'];
                $name = $file['name'];
                ?> 
                <tr>
                
                    <td><?php
                    $str = "return showFrame('$link','$fgh[$i]')";
                     echo "<a onclick = \"$str\" > $name </a>"; ?>  </td>
                    

                </tr>
                
            <?php endforeach; ?>
            </tbody>
        </table>
        <iframe id=<?php echo "$fgh[$i]"; ?> width="50%" height="500px" frameborder="0" allowfullscreen></iframe>
       
    

