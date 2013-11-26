<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <table border=1>
            <thead>
                 <tr>
                <?php
                foreach($data[0] as $key=> $value){
                    echo "<th>" . $key . "</th>";
                }?>
                 </tr>
            </thead>
            <tbody>
            <?php
                foreach ($data as $outer =>$inner) {  
                    echo '<tr>';
                    foreach($inner as $key => $value){
                      echo "<th>" . $value . "</th>";  
                    }
                 echo '</tr>';  
                }?>
             </tbody>
        </table>
    </body>
</html>
     
