<?php
include( 'inc/database.php' );

$requested_id = $_GET['id'];
$get_post = get_post_by_id( $requested_id );
$current_post = mysqli_fetch_assoc( $get_post );

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

	$data = array(
		'title' => $_POST['title'],
		'content' => $_POST['content'],
	);
	update_post( $requested_id, $data );

	$current_post = mysqli_fetch_assoc( get_post_by_id( $requested_id ) );
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Post</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900">
	<!-- Header -->
	<header class="bg-white shadow-md py-4 mb-6">
		<div class="container mx-auto px-4 max-w-[1140px] flex justify-between items-center">
			<a href="index.php">
				<h1 class="text-2xl font-bold">My Blog</h1>
			</a>
			<nav>
				<a href="index.php" class="text-blue-600 px-3">Home</a>
				<a href="add.php" class="text-blue-600 px-3">Add Post</a>
			</nav>
		</div>
	</header>

	<!-- Main Content -->
	<main class="container mx-auto px-4 max-w-[1140px] min-h-screen">
		<h2 class="text-2xl font-semibold mb-6 text-center">Edit Post</h2>

		<div class="bg-white shadow-lg rounded-lg p-6 max-w-lg mx-auto">
			<form action="" method="POST" enctype="multipart/form-data">
				<label class="block mb-2 font-medium">Title:</label>
				<input type="text" name="title" class="w-full border border-gray-300 p-2 rounded mb-4" required=""
					value="<?php echo $current_post['title']; ?>">

				<label class="block mb-2 font-medium">Content:</label>
				<textarea name="content" class="w-full border border-gray-300 p-2 rounded mb-4" rows="5"
					required=""><?php echo $current_post['content']; ?></textarea>

				<label class="block mb-2 font-medium">Featured Image:</label>
				<input type="file" name="featured_image" class="w-full border border-gray-300 p-2 rounded mb-4">

				<button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded w-full">Update
					Post</button><br><br>
			</form>
		</div>
	</main>

	<!-- Footer -->
	<footer class="bg-white shadow-md mt-6 py-4 text-center">
		<p>&copy; 2024 My Blog. All rights reserved.</p>
	</footer>
</body>

</html>