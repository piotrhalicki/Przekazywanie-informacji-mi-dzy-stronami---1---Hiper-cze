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

	<h1> 							<!-- "heading", nagłówek -->
	<strong><em>Przekazywanie informacji między stronami</em></strong>
	</h1>
	
		<br>
	<hr>
		<br>
	
	<h2> 							<!-- drugi nagłówek, "mniej" znaczący ;) -->
	<strong>1 Hiperłącze</strong>
	</h2>
		
		<br>
	<hr>
		<br>
	
	<h3> 							<!-- trzeci nagłówek, jeszcze "mniej" znaczący xD -->
	Plik "nadawca"
	</h3>
	
		<br>
	<hr>
		<br>
	
	<a href="odbiorca.php?name=piotr&surname=halicki&city=warszawa">Click me</a>
	
		<br>
		
	<p>
	<em>(Kliknięcie w powyższy link spowoduje przesłanie TRZECH informacji do pliku "odbiorca.php"<br>
	Link: "odbiorca.php / ? / name / = / piotr / & / surname / = / halicki / & / city / = / warszawa")</em>
	</p>
	
	</body>

</html>								<!-- znacznik zamknięcia -->