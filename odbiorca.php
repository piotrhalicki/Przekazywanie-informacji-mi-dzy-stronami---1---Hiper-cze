<!DOCTYPE html>						<!-- deklaracja języka HTML -->

<html lang="pl-PL">					<!-- deklaracja [języka strony]-[KRAJU] -->
	<head>							<!-- sekcja nagłówkowa -->
		<meta charset="UTF-8">		<!-- zestaw znaków  / [nazwa znacznika]=["wartość"]-->
		<meta name="Przekazywanie informacji" content="przekazywanie informacji, hiperłącze">	
		<title>						
		Przekazywanie informacji między stronami - 1 - Hiperłącze
		</title>					<!-- tytuł strony (niewidoczny) -->
	</head>

	<body>							<!-- "ciało" strony -->

	<h1> 							<!-- "heading", pierwszy nagłówek -->
	<strong><em>Przekazywanie informacji między stronami</em></strong>
	</h1>
		
		<br>
	<hr>
		<br>
	
	<h2> 							<!-- nagłówek "mniej" znaczący ;) -->
	<strong>1 Hiperłącze</strong>
	</h2>
	
		<br>
	<hr>
		<br>
	
	<h3>
	Plik "odbiorca"
	</h3>
	
		<br>
	<hr>
		<br>
		
<?php								// początek kodu php
	echo 'Parametr 1 ', '<strong><u>', '(imię)', '</u></strong>', ' ma wartość ', '<strong>' .ucfirst($_GET['name']), '</strong>';
	echo '<br>';
	echo 'Parametr 2 ', '<strong><u>', '(nazwisko)', '</u></strong>', ' ma wartość ', '<strong>' .ucfirst($_GET['surname']), '</strong>';
	echo '<br>';
	echo 'Parametr 3 ', '<strong><u>', '(miasto)', '</u></strong>', ' ma wartość ', '<strong>' .ucfirst($_GET['city']), '</strong>';
?>
		
		<br>
		<br>
	
	<a href="index.php">Wróć na poprzednią stronę</a>
	
	</body>

</html>								<!-- znacznik zamknięcia -->