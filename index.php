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
				$books = ['Go Androids', 'The langoliers', 'Hail mary'];
			?>

			<ul>
				<!-- <?php 
					//foreach ($books as $book) {
					//	echo "<li>" . $book . "</li>";
				//	}
				?> -->

				<?php 
					foreach ($books as $book): ?>
						<li><?= $book ?></li>
				<?php endforeach; ?>
				
			</ul>
		</div>
	</body>
</html>
