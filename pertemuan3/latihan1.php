<!-- <?php
		//pengulangan
		//for
		// for ($i=0; $i < 5 ; $i++) { 
		// 	echo "C-Store07 <br>";
		// }
		//while
		// $i = 0;
		// while( $i < 5){
		// 	echo "C-Store07 <br>";
		// $i++;
		// }
		//do...while
		// $i = 0;
		// do{
		// 	echo "C-Store07 <br>";
		// $i++;
		// }while($i<5);
		// foreach

		?> -->

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Latihan 1</title>
	<style>
		.warna-baris {
			background-color: silver;
		}
	</style>
</head>

<body>
	<table border="1" cellpadding="10" cellspacing="0">
		<?php for ($i = 1; $i <= 5; $i++) : ?>
			<?php if ($i % 2 == 1) : ?>
				<tr class="warna-baris">
				<?php else : ?>
				<tr>
				<?php endif; ?>
				<?php for ($j = 1; $j <= 5; $j++) : ?>
					<td><?= "$i, $j" ?></td>
				<?php endfor; ?>
				</tr>
			<?php endfor; ?>
	</table>
	<?php echo "Anton"; ?>
	<?= "Anton"; ?>
</body>

</html>