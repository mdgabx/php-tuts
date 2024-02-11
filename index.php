<!DOCTYPE html>
<html>
	<head>
		<title>learning PHP</title>
	</head>
	<style>
		.tut {
			display: grid;
			place-items: center;
			height: 100vh;
			margin: 0;
			font-family: Courier;
		}
	</style>
	<body>
		<div class="tut">
			<?php 
				$name = 'Dark Matter';
				$read = true;

				if ($read) {
					$message = "You have read $name";
				} else {
					$message = "you have NOT read $name";
				}
			?>

			<h1>

			 	<!-- <?php echo $message; ?> -->
				<?= $message ?>
			</h1>
		</div>
	</body>
</html>
