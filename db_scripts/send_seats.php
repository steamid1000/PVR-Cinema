<?php
    require_once 'login.php';

    $raw_Seats =  $_COOKIE['Seats'];
    $index=$_COOKIE['table'];
    $tablename =["spiderman1","spiderman2","spiderman3","bhim1","bhim2","bhim3","kings1","kings2","kings3"];
    $arr = array_map('intval', explode(',',$raw_Seats)); //^ converting the string array to int array

    // echo var_dump($arr);

    for ($i=0; $i < count($arr) ; $i++) { //^sending data to the back end 
        
        $query = "UPDATE $tablename[$index] SET IsTaken=1 WHERE Seat_no=" . $arr[$i];
        $conn->query($query);
    }


    function Redirect($url, $permanent = false) { //Redirects to given page
        header('Location: ' . $url, true, $permanent ? 301 : 302);
        exit();
        }
       Redirect('../payment.html', false);
?>


