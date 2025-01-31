<?php
// Database connection
$host = "127.0.0.1";
$db_user = "root";
$db_password = "password";
$db_name = "simple_blog";

$conn = mysqli_connect( $host, $db_user, $db_password, $db_name );



// Read All posts
function get_posts() {

	global $conn;

	$query = "SELECT * FROM posts ORDER BY id DESC";
	$result = mysqli_query( $conn, $query );

	return $result;

}

