<!DOCTYPE html>
<html>
	<head>
		<title>learning PHP</title>
	</head>
	<style>
	</style>
	<body>
		<div class="tut">			
			<h1>Recommended Books</h1>
			<ul>
				<?php foreach ($filterBooks as $book) : ?>
					<li>
						<a href="<?= $book["url"] ?>">
							<?= $book["title"]?>
						</a>
					</li>
				<?php endforeach; ?>
				
			</ul>
		</div>
	</body>
</html>
