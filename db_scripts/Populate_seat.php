<?php
    require_once "login.php";

    $tablename =["bhim2","bhim3","kings1","kings2","kings3"];
    

 
    for($i=0;$i<count($tablename);$i++)
    {
         $seat = 1; // number to be inserted in the column
        //  $que = "CREATE table $tablename[$i](
        //         `Seat_no` int,
        //         `IsTaken` int,
        //         `Name`varchar(30),
        //         `Age` int,
        //         `Email` varchar(30),
        //         `Gender` varchar(20));" ;
        //  if(mysqli_query($conn,$que)){
        //     echo "DOne";
        //  }else {
        //     echo "Not done";
        //  }

         for (;$seat<=48;$seat++)
    { 
        $query = "INSERT INTO $tablename[$i] (`Seat_no`, `IsTaken`, `Name`,`Age`, `Email`, `Gender`) VALUES ('$seat', '0','', '', '', '') ";
        $res = $conn->query($query);
    }
    
}

    
   

    mysqli_close($conn);

?>