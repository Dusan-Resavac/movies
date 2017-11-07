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
	
	if(isset($_GET['format']) && ($_GET['format'] === "JSON" || $_GET['format'] === "QR")){
		if($_GET['format'] === "JSON"){
			header("Content-Type: application/json");
			echo $movie->getMovieInfoAsJSON();
		}else{
			echo $movie->getMovieQRCodeForBrowser();
		}
	}else {
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
				<a href="index.php?format=JSON">Filminfo als JSON</a>
				<br>
				<a href="index.php?format=QR">Filminfo als QR-Code</a>
			</body>
		</html>
		
		<?php
	}
