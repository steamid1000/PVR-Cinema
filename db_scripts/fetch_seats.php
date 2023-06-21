<?php
    require_once 'login.php';
   $tablename =["bhim1","bhim2","bhim3","kings1","kings2","kings3"];
   $selected_table=$_COOKIE['table'];
   $t=$tablename[$selected_table];

    $query = "SELECT Seat_no FROM $t WHERE IsTaken>0";
    $Sold_seats = $conn->query($query);

    if (!$Sold_seats) die("Failed to fetch");
    // else echo("Done it<br>");
    

    $data = array(); // ^Gets the Seat number which has been occupied

    if (mysqli_num_rows($Sold_seats) > 0) {
        
        while ($row = mysqli_fetch_array($Sold_seats)) {
            
            $data[] = (int) ($row['Seat_no']);
        }
    }

    

    mysqli_close($conn);
?>