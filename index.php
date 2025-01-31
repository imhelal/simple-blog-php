<?php
include( 'inc/database.php' );
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Posts</title>
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
				<a href="add-post.php" class="text-blue-600 px-3">Add Post</a>
			</nav>
		</div>
	</header>

	<!-- Main Content -->
	<main class="container mx-auto px-4 max-w-[1140px] min-h-screen">

		<!-- All Posts Grid -->
		<div class="grid grid-cols-3 gap-6">
			<?php
			$posts = get_posts();
			while ( $post = mysqli_fetch_assoc( $posts ) ) { ?>
				<div class="bg-white shadow-lg rounded-lg overflow-hidden">
					<img src="images/<?php echo $post['featured_image']; ?>" alt="Post Image"
						class="w-full h-48 object-cover">
					<div class="p-4">
						<h3 class="text-lg font-semibold mb-2"><?php echo $post['title']; ?></h3>
						<p class="text-gray-600">
							<?php echo substr( $post['content'], 0, 80 ); ?>
						</p>
						<div class="mt-4 flex justify-between">
							<a href="single.php" class="text-blue-600">Read More</a>
							<div>
								<a href="edit.php" class="text-yellow-600 px-2">Edit</a>
								<a href="#" class="text-red-600">Delete</a>
							</div>
						</div>
					</div>
				</div>
			<?php }
			?>


		</div>
	</main>

	<!-- Footer -->
	<footer class="bg-white shadow-md mt-6 py-4 text-center">
		<p>&copy; 2024 My Blog. All rights reserved.</p>
	</footer>
</body>

</html>