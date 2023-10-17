<?php
    if (isset($_GET['movie_id'])) {
        require_once 'login.php';
        $movie_id = $_GET['movie_id'];
        $query = "UPDATE `movies` SET status='Expired' WHERE movie_id=$movie_id";
        if($conn->query($query)){
            Redirect("Location: | ../admin/movie_table.php");
        }
        else {
            die("There was an error while removing the movie");
        }
        
    }

?>