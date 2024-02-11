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
		}
	</style>
	<body>
		<div class="tut">

			<h1>
				<?php
					$greeting = 'Hello,';
				
					echo $greeting . " " . "World";
					echo "$greeting World";
					
				?>
			</h1>
		</div>
	</body>
</html>
