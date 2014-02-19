<!DOCTYPE html>
<html>

<head>
	<title>...</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<!-- PHP Coding -->
	<?php  
		echo "Topic: Programming Languages<br>";
		class Grundlagenprojekt {
			public $a="1. Variablen";
			public $b="2. Arrays";
			function ausgabeVonA(){
				echo "Ausgabe von A: " . $this->a . "<br>";
			}
			function ausgabevonB(){
				echo "Ausgabe von B: " . $this->b . "<br>";
			}
		}
		$c=new Grundlagenprojekt();
		$c->ausgabeVonA();
		$c->ausgabevonB();
		$d=get_class($c);
		echo "$d<br>";
		$d=strtolower($d);
		echo "Klassenname klein geschrieben: " . $d . "<br>";
	?>
	
	<p>************************************************</p>
	<p><strong>Quellen PHP:</strong></p>
	<ul>
		<li><a href="http://www.php.net/manual/de/langref.php" target="_blank">http://www.php.net/manual/de/langref.php</a>
		<li><a href="http://net.tutsplus.com/tutorials/php/learn-php-from-scratch-a-training-regimen/" target="_blank">http://net.tutsplus.com/tutorials/php/learn-php-from-scratch-a-training-regimen/</a>
		<li><a href="http://us2.php.net/tut.php" target="_blank">http://us2.php.net/tut.php</a>
		<li><a href="http://www.w3schools.com/PHP/Default.asp" target="_blank">http://www.w3schools.com/PHP/Default.asp/</a>
	</ul>
	<script>

	</script>
</body>

</html>