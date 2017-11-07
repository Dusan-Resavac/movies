<?php
	/**
	 * Created by PhpStorm.
	 * User: Dusan_Resavac
	 * Date: 07.11.2017
	 * Time: 08:52
	 */
	require_once "vendor/autoload.php";
	require_once "movie.php";
	
	use HTL3R\KungFuMovies;
	
	$movie = new movie("Bruce Lee - Der Mann mit der Todeskralle", 5, "https://www.youtube.com");
	
	?>

<!DOCTYPE html>
<html>
	<head>
		<title>Bruce Lee</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1>Der Mann mit der Todeskralle</h1>
		<br>
		<a href="<?php //echo $movie->getMovieInfoAsJSON()?>">Filminfo als JSON</a>
		<a href="<?php //echo $movie->getMovieQRCodeForBrowser()?>">Filminfo als QR-Code</a>
	</body>
</html>
