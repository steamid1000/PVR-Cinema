<?php
session_start();
function Redirect($url, $permanent = false)
{ //Redirects to given page
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
}

$_SESSION['movieId'] = 1;

Redirect('../moviepage.php');
?>