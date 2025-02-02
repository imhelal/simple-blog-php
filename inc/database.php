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


// Insert data
function insert_post() {
	global $conn;

	$post_title = $_POST['title'];
	$post_content = $_POST['content'];
	$featured_image = $_FILES['featured_image'];

	// Upload the file
	$image_destination = "images/" . time() . $featured_image['name']; // images/filename.jpg

	move_uploaded_file( $featured_image['tmp_name'], $image_destination );

	$insert_query = "INSERT INTO posts (title, content, featured_image) VALUES ('$post_title', '$post_content', '$image_destination') ";

	$result = mysqli_query( $conn, $insert_query );

	if ( $result ) {
		return true;
	}

	return false;
}

// Read single post
function get_post_by_id( $post_id ) {
	global $conn;

	$query = "SELECT * FROM posts WHERE id=$post_id ";
	$result = mysqli_query( $conn, $query );

	return $result;
}

// Delete post
function delete_post( $post_id ) {
	global $conn;

	$query = "DELETE FROM posts WHERE id=$post_id ";
	$result = mysqli_query( $conn, $query );

	if ( $result ) {
		return true;
	}

	return false;
}
