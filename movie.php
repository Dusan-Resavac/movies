<?php
	
	/**
	 * Created by PhpStorm.
	 * User: Dusan_Resavac
	 * Date: 07.11.2017
	 * Time: 08:43
	 */
	use HTL3R\KungFuMovies;
	use Endroid\QrCode\QrCode;
	
	class movie extends KungFuMovies\AbstractKungFuMovie implements KungFuMovies\IKungFuMovie
	{
		
		/**
		 * movie constructor.
		 * @param string $name
		 * @param int    $rating
		 * @param string $movieURI
		 */
		public function __construct($name, $rating, $movieURI)
		{
			parent::__construct($name, $rating, $movieURI);
		}
		
		/**
		 * @return string
		 */
		public function getMovieInfoAsJSON(): string
		{
			return "{\"name\":" . "\"" . parent::getName() . "\",
					\"rating\":\"" . parent::getRating() . "\",
					\"MovieUrl\":\"" . parent::getMovieURI() . "\"}";
		}
		
		/**
		 * @return string
		 */
		public function getMovieQRCodeForBrowser(): string
		{
			$qrCode = new QrCode($this->getMovieURI());
			
			header('Content-Type: '.$qrCode->getContentType());
			return $qrCode->writeString();
		}
	}