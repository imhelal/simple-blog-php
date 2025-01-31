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

	<!-- Page Container -->
	<div class="max-w-[1140px] mx-auto p-6 min-h-screen">
		<!-- Featured Image -->
		<div class="mb-10 overflow-hidden rounded-lg shadow-lg">
			<img src="https://picsum.photos/1140/500" alt="Featured Image"
				class="w-full h-auto object-cover transition-transform duration-300 hover:scale-105" />
		</div>

		<!-- Title -->
		<h1 class="text-5xl font-bold text-gray-900 mb-6">
			This is the Post Title
		</h1>

		<!-- Description -->
		<div class="bg-white p-8 rounded-lg shadow-md">
			<p class="text-lg text-gray-700 leading-relaxed">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
				dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
				ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
				fugiat nulla pariatur.
			</p>
		</div>
	</div>
	<!-- Footer -->
	<footer class="bg-white shadow-md mt-6 py-4 text-center">
		<p>&copy; 2024 My Blog. All rights reserved.</p>
	</footer>
</body>

</html>