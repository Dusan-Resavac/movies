<?php
namespace HTL3R\KungFuMovies;

interface IKungFuMovie
{
    public function getMovieInfoAsJSON() : string;
    public function getMovieQRCodeForBrowser() : string;
}