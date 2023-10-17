<?php
    $hn = "localhost";
    $un = "root";
    $pw = "";
    $db = "pvr-cinema";

    $conn =  mysqli_connect($hn,$un,$pw,$db); // connects to the db table

    if($conn->connect_error)
    {
        die("Server had a problem while connecting");
    }
    function Redirect($url, $permanent = false) { //Redirects to given page
        header('Location: ' . $url, true, $permanent ? 301 : 302);
        exit();
    }

    //As this file will be called more often then it is better that we check the movie status here and change it if it has crossed its due date
    $query = "SELECT * FROM `movies` WHERE status='Active'";
    $result = $conn->query($query);
    
    while ($data = mysqli_fetch_row($result)) {
        $end_date = $data[4];
        $end_date = date($end_date);
        $end_date = strtotime($end_date);

        if ($end_date < strtotime(date("Y-m-d"))) {
            $movie_id = $data[0];
            $quer = "UPDATE `movies` SET status='Expired' WHERE movie_id=$movie_id";
            $conn->query($quer);    
        }
    }
      
?>