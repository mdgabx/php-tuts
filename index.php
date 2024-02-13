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
				];


				$filterByAuthor = function ($books, $author) {
					$arr = [];

					foreach ($books as $book) {
						if($book["author"] == $author)
						$arr[] = $book;
					}

					return $arr;
				};

				$filterBooks = $filterByAuthor($books, 'Test Author');
			?>

			<ul>
				<?php foreach ($books as $book) : ?>
					<?php if ($book['author'] === 'RA Salvadore')  :?>
						<li>
							<a href="<?= $book["url"] ?>">
								<?= $book["title"]?>
							</a>
						</li>
					<?php endif; ?>

				<?php endforeach; ?>
				
			</ul>

			<p><?= filterBooks(); ?></p>
		</div>
	</body>
</html>
