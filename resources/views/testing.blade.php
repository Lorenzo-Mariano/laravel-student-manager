<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	@vite(['resources/css/app.css', 'resources/js/app.js'])
	<title>TESTING SIEMAI SIOPAO</title>
</head>
<body> 
	<h1>my testing fasds</h1>
	<section>
		<h2>How to live reload:</h2>
		<span> put this in head: </span><br>
			<code>@ vite(['resources/css/app.css', 'resources/js/app.js'])</code>
		<br>
		<span>
			Then <code>php artisan serve</code>, then <code>npm run dev</code>
		</span>
		<div>
			Make sure vite.config.js is this:
			<code>
				export default defineConfig({
    				plugins: [
					laravel({
						input: ['resources/css/app.css', 'resources/js/app.js'],
						refresh: true,
					}),
    ],		</code>
});
			</code>
		</div>
	</section>
	
	<h2><a href="./">Back home</h2>
</body>
</html>