<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add New Post</title>
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
		<h2 class="text-2xl font-semibold mb-6 text-center">Add New Post</h2>

		<div class="bg-white shadow-lg rounded-lg p-6 max-w-lg mx-auto">
			<form action="" method="POST">
				<label class="block mb-2 font-medium">Title:</label>
				<input type="text" name="title" class="w-full border border-gray-300 p-2 rounded mb-4" required>

				<label class="block mb-2 font-medium">Content:</label>
				<textarea name="content" class="w-full border border-gray-300 p-2 rounded mb-4" rows="5"
					required></textarea>

				<label class="block mb-2 font-medium">Featured Image:</label>
				<input type="file" class="w-full border border-gray-300 p-2 rounded mb-4">

				<button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded w-full">Submit</button>
			</form>
		</div>
	</main>

	<!-- Footer -->
	<footer class="bg-white shadow-md mt-6 py-4 text-center">
		<p>&copy; 2024 My Blog. All rights reserved.</p>
	</footer>
</body>

</html>