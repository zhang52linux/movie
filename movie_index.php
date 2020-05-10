<?php
include 'DB.php';
include 'GetMovie.php';
$movie_url = $_POST['url'];
$movie_num = $_POST['num'];
echo get_movie($movie_url,$movie_num);
?>