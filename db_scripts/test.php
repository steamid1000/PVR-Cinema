<?php
//Testing the fetching of movie name and thumbnail from the database
require_once 'login.php';

$query = "SELECT movies.movie_name, movies.movie_id, movie_info.movie_thumbnail FROM movies INNER JOIN movie_info ON movies.movie_id=movie_info.movie_id;";
$result = $conn->query($query);



while ($resultarr = mysqli_fetch_array($result)) {
    
    var_dump($resultarr);
    echo "<br>";
}




?>