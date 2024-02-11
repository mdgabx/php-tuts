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

			<?php 
				// $books = ['Go Androids', 'The langoliers', 'Hail mary'];
				
				$books = [
					[
						"title" => "Legend of Drizzt",
						"author" => "RA Salvadore",
						"url" => 'http://example.com'
					],
					[
						"title" => "Bones and Ashes",
						"author" => "Chris Evans",
						"url" => 'http://example.com'
					],
					[
						"title" => "Forged in Fire",
						"author" => "Matthew Snorke",
						"url" => 'http://example.com'
					],

				]

			?>

			<ul>
				<?php foreach ($books as $book) : ?>
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
