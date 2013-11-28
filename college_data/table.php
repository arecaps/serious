<!DOCTYPE html>
<html>
    <head><title></title>
        <link rel="stylesheet" type="text/css" href="college.css">
    </head>
    <body>
        <h1>Your #1 Source for College Data!</h1>
        <div class ="centered">
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
                          echo "<td>" . $value . "</td>";  
                        }
                     echo '</tr>';  
                    }?>
                 </tbody>
            </table>
        </div>
    </body>
</html>
     
