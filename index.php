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


			// 	$filterByAuthor = function ($books, $author) {
			// 		$arr = [];

			// 		foreach ($books as $book) {
			// 			if($book["author"] == $author)
			// 			$arr[] = $book;
			// 		}

			// 		return $arr;
			// 	};

			// 	$filterBooks = $filterByAuthor($books, 'Chris Evans');
			// 
			
			// function filter($items, $key, $value) {
			// 	$filterItems = [];

			// 	foreach ($items as $item) {
			// 		if($item[$key] === $value) {
			// 			$filterItems[] = $item;
			// 		}
			// 	}

			// 	return $filterItems;
			// }

			// $filterBooks = filter($books, "author", "RA Salvadore")


			// function
			// function filter($items, $fn) {
			// 	$filterItems = [];

			// 	foreach ($items as $item) {
			// 		if($fn($item)) {
			// 			$filterItems[] = $item;
			// 		}
			// 	}

			// 	return $filterItems;
			// }

			// $filterBooks = filter($books, function ($book) {
			// 	return $book["author"] === 'Chris Evans';
			// });


			$filterBooks = array_filter($books, function ($book) {
				return $book["author"] === 'Chris Evans';
			});

			?>

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
