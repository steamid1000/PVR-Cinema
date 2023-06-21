<?php
    require_once 'login.php';
    $tablename =["spiderman1","spiderman2", "spiderman3","bhim1","bhim2","bhim3","kings1","kings2","kings3"];
 

    
    for($i=0;$i<count($tablename);$i++)
    {
        $query = "DELETE * from $tablename[$i] ";
        
        $conn->$query;
    } 
    echo("work is done");
     

    mysqli_close($conn);


?>